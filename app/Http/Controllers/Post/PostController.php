<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // $str_sd = "01-01-2001";
        // $str_ed = "31-12-2001";
        // $sd = date("Y-m-d H:i:s", strtotime($str_sd));
        // $ed = date("Y-m-d H:i:s", strtotime($str_ed));

        // $posts = Post::whereBetween('date', [$sd, $ed])->get();

        return view('posts.posts');
    }

    public function getAllDetails(Request $request)
    {
        $str_sd = $request->start;
        $str_ed = $request->end;
        $sd = date("Y-m-d H:i:s", strtotime($str_sd));
        $ed = date("Y-m-d H:i:s", strtotime($str_ed));

        $posts = Post::whereBetween('date', [$sd, $ed])->get();

        return $posts;
    }
}
