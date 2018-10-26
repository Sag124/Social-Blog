<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Session;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index')->withCategories($categories);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request,array(
               'name' => 'required|max:255' 
            ));

        // store in the database
        $category = new Category;

        $category->name = $request->name;
        $category->save();

        Session::flash('success','You have Successfully created a category!');
        // redirect to other page

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the category in the database
        $category = Category::find($id);
        //return a view.
        return view('category.edit')->withCategory($category);

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
        // validate the data
        $category = Category::find($id);
        /* if ($request->input('slug') == $category->slug) {
                 $this->validate($request, array(
                'name' => 'required|max:255',
            ));       
        }else{
        $this->validate($request, array(
                'name' => 'required|max:255'
            ));}*/  
        // save the data
        $category = category::find($id);
        $category->name = $request->input('name');
        $category->save();

        // set flash data with success message
        Session::flash('success', 'This category was successfully Updated');

        // redirect with flash data to categorys.show
        return redirect()->route('category.show', $category->id)
;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('success','The category was successfully deleted');
        return redirect()->route('category.index');

    }
}
