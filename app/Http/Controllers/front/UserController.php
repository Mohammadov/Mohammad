<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UserController extends Controller
{


    public function getMyName(){
        return 'abumeeeed';
    }
    public function getSisName(){
        return 'aaaaaaaaaa';
    }
    public function getMomName(){
        return 'bbbbbbbbb';
    }
    public function getId(){
        return '7';
    }
    public function getAge(){
        return '26';
    }
    public function getName(){
        return 'abu7neeeeeeeed';
    }
    public function getView(){
        $data=[];
        $data['name']='mohd';
        $data['id']=69;
        $data['age']=25;
        $users=['modh','saleh','awad'];
        $obj=new \stdClass();
        $obj->name='khaled';
        $obj->age=89;
        $obj->id=7070;
        return view('admin',$data,compact('obj','users'));
    }

}
