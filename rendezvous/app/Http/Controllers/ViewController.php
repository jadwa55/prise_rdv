<?php

namespace App\Http\Controllers;

use App\Models\View;
use App\Models\Categories;
use App\Models\Specialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::orderBy('created_at','desc')->get();



        return view('view.homepage',[
            'categories' => $categories,
        ]);
    }


    public function viewcategory($name)
    {
        if(Categories::where('name',$name)->exists());
        {
            $categories  = Categories::where('name', $name)->first();
            $specialites = Specialite::where('category_id', $categories->id)->get();
            return view('view.specialite', compact('categories','specialites'));

        }
    }


    public function isLogin(){

        // ===check valeur nd type
        // == check only valeur

        if(Auth::user()->is_login===1){
            return redirect(route('categories'));
        }

        return redirect(route('home'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function show(View $view)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function edit(View $view)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, View $view)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\View  $view
     * @return \Illuminate\Http\Response
     */
    public function destroy(View $view)
    {
        //
    }
}
