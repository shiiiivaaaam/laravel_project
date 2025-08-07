<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function index (){

        $idea=Idea::orderBy('created_at','desc');

    //   $idea = new Ideas();
    //   $idea->content="dafad";
    //   $idea->likes=0;
    //   $idea->save();


        //where content like %text%
    if(request()->has('search')){
        $idea=$idea->where('content','like','%'.request()->get('search','').'%');

    }

    // $topUsers=User::withCount('likes')
    // ->orderBy('likes_count','desc')
    // ->limit(5)->get();

        return view("dashborad",['ideas'=>$idea->paginate(5)]);
    }
}
