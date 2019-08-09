<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'Setting';
    protected $fillable = ['logo','image','title','phone','policy','features','limit_product','copy_right'];
}
