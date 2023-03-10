<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategoryRequest;
use App\Models\BlogCategory;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCategories = BlogCategory::latest()->get();

        return view('admin.blog_category.blog_category_all', compact('blogCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog_category.blog_category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryRequest $request)
    {

        $blogCategories = new BlogCategory();
        $blogCategories->title = $request->title;

        $blogCategories->save();

        $notification = [
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        ];


        return redirect()->route('blog_category.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategories )
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
    public function update(BlogCategoryRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {

        $blogCategory->delete();
        $notification = [
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);


    }
}
