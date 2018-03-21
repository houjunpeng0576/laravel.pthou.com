<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model{
    public function getNormalNewsList($id = ''){
        return '我是：'.$id;
    }
}