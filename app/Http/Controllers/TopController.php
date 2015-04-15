<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TopController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        return view('top.index', [
            'user' => 'bko',
            'tasks' => $tasks,
        ]);
    }

    public function add(Request $req)
    {
        $name = $req->input('name');
        DB::table('tasks')->insert([
            'name' => $name,
        ]);
        return redirect()->route('top');
    }

    public function delete($id)
    {
        DB::table('tasks')->delete([
            'id' => $id,
        ]);
        return redirect()->route('top');
    }

}

