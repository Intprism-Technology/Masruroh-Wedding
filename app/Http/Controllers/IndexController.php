<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Session;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = json_decode(file_get_contents('data.json'), true);
        if (Session::has('success'))
        {
            list($type, $message) = explode('|', Session::get('success'));

            $type = $type == 'error' ?: 'danger';
            $type = $type == 'message' ?: 'info';

            $successComment = sprintf('<div class="alert alert-%s">%s</div>', $type, $message);
        }else{
            $successComment = '';
        }
        // $allComment = Comment::orderBy('created_at', 'DESC')->get();
        return view('index', compact(
            'data',
            'successComment',
            // 'allComment'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'attendance' => 'required',
            'comment' => 'required'
         ]);
        Comment::create([
            'name' => $request->name,
            'attendance' => $request->attendance,
            'comment' => $request->comment,
        ]);
        return redirect()->back()->with('success', 'success|Doa / Pesan anda sudah disimpan untuk mempelai !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = json_decode(file_get_contents('data.json'), true);
        $visitor = $id;
        if (Session::has('success'))
        {
            list($type, $message) = explode('|', Session::get('success'));

            $type = $type == 'error' ?: 'danger';
            $type = $type == 'message' ?: 'info';

            $successComment = sprintf('<div class="alert alert-%s">%s</div>', $type, $message);
        }else{
            $successComment = '';
        }
        $allComment = Comment::orderBy('created_at', 'DESC')->get();
        return view('index', compact(
            'data',
            'visitor',
            'successComment',
            'allComment'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
