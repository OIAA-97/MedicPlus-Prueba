<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    
    public function index(){
        $posts = Post::all();
        return view ('post', compact('posts'));
    }

    public function exportExcel(){
        return Excel::download(new PostsExport, 'laravelexcel.xlsx');
    }

    public function busqueda() {
        return view('busqueda');
    }

    public function buscar(Request $requet) {
        $data = Posts::search($request->q)->paginate(10);
        return view('buscar', compact('data'));
    }
    
    
}
