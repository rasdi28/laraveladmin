<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Admin\Blog;

use Illuminate\Http\Request;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.admin.blog.index')->with([
            'blogs'=>$blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = $request->all();
        $blogs['image']= 'storage/'.$request->file('image')->store(
            'assets/blog','public'
        );
        Blog::create($blogs);
        return redirect()->route('blog.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.admin.blog.show')->with([
            'blog'=>$blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('pages.admin.blog.edit')->with([
            'blogs'=>$blogs
        ]);
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
        $new_blogs = $request->all();
        $new_blogs['image'] = 'storage/'.$request->file('image')->store(
            'assets/blog','public'
        );
        $blogs = Blog::findOrFail($id);
        $blogs->update($new_blogs);
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogs ->delete();
        return redirect()->route('blog.index')->with('success','data berhasil dihapus');
    }
}
