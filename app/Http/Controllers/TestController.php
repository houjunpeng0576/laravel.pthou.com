<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class TestController extends Controller{
     public function add(){
         $num = DB::table('ent_curd')->pluck('username','id');
         dd($num);
     }


}