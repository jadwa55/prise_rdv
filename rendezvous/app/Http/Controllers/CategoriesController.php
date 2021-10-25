<?php

namespace App\Http\Controllers;

use App\Models\Categories;
// use Dotenv\Util\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        // $categories = Categories::orderBy('created_at','desc')->get();

        return view('categories.index',[
            'categories' => $categories
        ]);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'des' => 'required'
        ]);


            if ($request->has('image')) {
                // Get image file
                $image = $request->file('image');
                // Make a image name based on user name and current timestamp
                $name = Str::slug($request->input('name')).'_'.time();
                $folder = 'img/upload';

                $img=$image->move($folder,$name.'.'.$image->getClientOriginalExtension());
            }

            Categories::create([
                'name' => $request->name,
                'image' => $img,
                'des' => $request->des,
            ]);

            return redirect()->route('categories.index')
            ->with('success', 'category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
        return view('categories.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'des' => 'required',
        ]);

        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = 'img/upload';

            $img=$image->move($folder,$name.'.'.$image->getClientOriginalExtension());
        }

        $categories->update([
            'name' => $request->name,
            'image' => $img,
            'des' => $request->des,
        ]);

        return redirect()->route('categoriess.index')
            ->with('success', 'category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}
