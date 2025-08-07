<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment as ModelsComment;
use App\Models\Idea;
use App\Models\User;
use Dom\Comment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalusers=User::count();
        $totalideas=Idea::count();
        $totalcomments=ModelsComment::count();
        return view("admin.dashboard",compact("totalusers","totalideas","totalcomments"));
    }
}
