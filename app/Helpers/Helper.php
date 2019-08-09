<?php

namespace App\Helpers;
use App\Article;
use App\Category;
use App\Menu;
use App\Slide;
use App\Setting;
use App\Policy;
class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }
    public static function truncate($text, $chars = 25) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }
    public static function getMostViewed()
    {
        $exclude_categories = [];
        $sidebarCategories = Category::where('show_sidebar','on')->get();
        foreach($sidebarCategories as $cate){
            array_push($exclude_categories,$cate->id);
        }
        return Article::whereNotIn('category_id',$exclude_categories)->take(10)->orderBy('views','desc')->get();
    }
    public static function articlesSidebar()
    {
        $articles_sidebar = null;
        $sidebar_category = Category::whereType('0')->whereShowSidebar('on')->first();
        if($sidebar_category){
            $articles_sidebar = Article::where('category_id',$sidebar_category->id)->take(2)->get();
        }
        return $articles_sidebar;
    }
    public static function getMenu($type='main-menu')
    {
        if($type == 'main-menu'){
            $menu = Menu::whereType(1)->first();
        }else if ($type == 'footer-menu-1'){
            $menu = Menu::whereType(2)->first();
        }else{
            $menu = Menu::whereType(3)->first();
        }
        
        if(isset($menu)){
            $menu->items = $menu->items;
            return $menu;
        }
        return ;
        
    }
    public static function getSlide($isAdvertise)
    {
        if(!$isAdvertise){
            $res = Slide::where('sidebar_qc','0')->orderBy('position')->get();
        }else{
            $res = Slide::where('sidebar_qc','1')->orderBy('position')->firstOrFail();
        }
        return $res;
    }
    public static function getSettings()
    {
        return Setting::first();
    }
    public static function getPolicies()
    {
        return Policy::all();
    }
}