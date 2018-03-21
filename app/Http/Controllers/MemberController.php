<?php

namespace App\Http\Controllers;

class MemberController extends Controller{
    public function info($id){
        return view('member/info',[
            'id' => $id
        ]);
    }
}