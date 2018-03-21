<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller{
    public function lists(){
        $news = DB::select('SELECT * FROM `ent_news`');
        print_r($news);
    }

    public function info($id){
        $news = DB::select('SELECT * FROM `ent_news` WHERE `id` = ?',[$id]);
        print_r($news);
    }
}