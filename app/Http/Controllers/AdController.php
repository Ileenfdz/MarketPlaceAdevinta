<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Ads;
use Exception;
use Illuminate\Http\Request;

class AdController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $ads = Ad::all();
        // return redirect('home')->with('ads', $ads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('crud.create');
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $ads = new Ad();

            $ads->ad_seller = $request->get('ad_seller');
            $ads->ad_name = $request->get('ad_name');
            $ads->ad_price = $request->get('ad_price');
            $ads->ad_description = $request->get('ad_description');
            $ads->ad_image = $request->get('ad_image');

            $ads->save();

            return redirect('home');
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $ad = Ad::findOrFail($id);
            return view('crud.edit')->with('ad', $ad);
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $ad = Ad::findOrFail($id);

            $ad->ad_seller = $request->get('ad_seller');
            $ad->ad_name = $request->get('ad_name');
            $ad->ad_price = $request->get('ad_price');
            $ad->ad_description = $request->get('ad_description');
            $ad->ad_image = $request->get('ad_image');

            $ad->save();

            return redirect('home');
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $ad = Ad::findOrFail($id);
            $ad->delete();
            return redirect('home');
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }
}
