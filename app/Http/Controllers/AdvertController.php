<?php

namespace App\Http\Controllers;

use App\Advert;
use App\Category;
use App\Region;
use App\User;
use Illuminate\Http\Request;


class AdvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $regions = Region::all();
        return view('adverts.create', compact('categories', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')){

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $file->move(public_path() . '/storage/images', $fileName);
            }
        }

        $advert = Advert::create([
            'category_id' => $request->input('category_id'),
            'user_id' => $request->input('user_id'),
            'region_id' => $request->input('region_id'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'title' => $request->input('title'),
            'photomain' => $fileName,
        ]);
        return redirect()->route('adverts.show', [$advert]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Advert $advert)
    {
        $user = $advert->user;
        $category = $advert->category;

        return view('adverts.show', compact('advert', 'user', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advert $advert)
    {
        $categories = Category::all();
        $regions = Region::all();
        return view('adverts.edit', compact ('advert', 'categories', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advert $advert)
    {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path() . '/storage/images', $fileName);
        }

        $advert->category_id = $request->category_id;
        $advert->region_id = $request->region_id;
        $advert->description = $request->description;
        $advert->price = $request->price;
        $advert->title = $request->title;
        $advert->photomain = $fileName;
        $advert->update();
        return redirect()->route('adverts.show', [$advert]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advert $advert)
    {
        $advert->delete();
        return redirect()->route('destroy_advert');
    }
     /**
     * Search Advart.
     *
     * @param  \Illuminate\Http\Request  $request     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
     $title = $request->get('title');
     $param = "%".strtolower($title)."%";
     $adverts = Advert::where(\DB::raw("LOWER(`title`)"), 'like', $param)->get();
     return view('adverts.index', compact('adverts', 'category'));
    }
}
