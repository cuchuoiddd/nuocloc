<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Validator;
use App\Services\UploadService;
use App\Constants\Directory;
class CategoryController extends Controller
{
    private $fileUpload;

    public function __construct(UploadService $fileUpload)
    {
        $this->fileUpload = $fileUpload;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isAdd = true;
        $id = 2;
        $categories = Category::orderBy('updated_at','desc')->orderBy('id','desc')->get();
       
        return view('admin.category',compact('isAdd','id','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:2048'
          );
        // $validator = Validator::make($fileArray, $rules);
        $validator = Validator::make($request->all(), $rules);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            if ($validator->fails()){
                $message = 'File không hợp lệ';
                return redirect()->back()->with('success', $message);
            }

            $data['image'] = $this->fileUpload->uploadImage(Directory::UPLOAD_CATEGORY,$request->image);
        }
        $type = $request->input('type') == 0 ? "articles" : "products";
        $category = Category::create($data);
        if($category){
            return redirect('admin/category/'.$type);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == "products"){
            $categories = Category::where('type',1)->orderBy('position','asc')->orderBy('updated_at','desc')->get();
        } else {
            $categories = Category::where('type',0)->orderBy('position','asc')->orderBy('updated_at','desc')->get();
        }
        $type = $id == "products" ? "Sản phẩm" : "Bài viết";
        return view('admin.categories',compact('categories','type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $isAdd = false;
        $categories = Category::orderBy('updated_at','desc')->orderBy('id','desc')->get();
        $category = Category::find($id);
        // dd($category->parent_id);
        $categories_filter = $categories->filter(function ($value, $key) use ($id) {
            return $value->id !=  $id;
        });
        $categories_filter->all();
        return view('admin.category',compact('isAdd','categories_filter','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = array(
            'image' => 'mimes:jpeg,jpg,png,gif|max:2048'
          );
        
        $validator = Validator::make($request->all(), $rules);

        $category = Category::find($id);
        $image_old = $category->image;
        $data = $request->all();

        if ($request->hasFile('image') && $validator->fails()){
            $message = 'File không hợp lệ';
            dd($validator->fails());
            return redirect()->back()->with('success', $message);
        } else {
            if ($request->hasFile('image')) {
                $data['image'] = $this->fileUpload->uploadImage(Directory::UPLOAD_CATEGORY,$request->image);
            }
        }

        $type = $request->input('type') == 0 ? "articles" : "products";

        // dd($data);
        $category->update($data);

        if($request->hasFile('image')){
            $this->fileUpload->removeImage($image_old);
        }

        if($category){
            return redirect('admin/category/'.$type);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $this->fileUpload->removeImage($category->image);
        $category->delete();
        return redirect('admin/category');
    }
    public function all(Request $request)
    {
        $type = $request->has('type') ? $request->input('type') : 0;
        return response()->json(Category::where('type',$type)->get());
    }
}
