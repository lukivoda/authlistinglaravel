<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //only thesee methods are available for users that are not logged in
        $this->middleware('auth',['except' =>['index','show']]);
    }



    public function index()
    {
       $listings = Listing::orderBy('created_at','DESC')->get();

       return view('listings',compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,
           [
            'name' => 'required',
            'email' =>'email'
           ]
           );

       $listing = new Listing();
       $listing->user_id = Auth()->user()->id;
       $listing->name = $request->name;
        $listing->email = $request->email;
        $listing->phone= $request->phone;
        $listing->address = $request->address;
        $listing->website = $request->website;
        $listing->bio = $request->bio;

        $listing->save();

        return redirect('/dashboard')->with('success','Successfully added listing');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $listing = Listing::find($id);
        return view('showlisting',compact('listing'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('editlisting',compact('listing'));
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
        $this->validate($request,
            [
                'name' => 'required',
                'email' =>'email'
            ]
        );

        $listing = Listing::find($id);
        $listing->user_id = Auth()->user()->id;
        $listing->name = $request->name;
        $listing->email = $request->email;
        $listing->phone= $request->phone;
        $listing->address = $request->address;
        $listing->website = $request->website;
        $listing->bio = $request->bio;

        $listing->save();

        return redirect('/dashboard')->with('success','Successfully updated listing');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        return redirect('/dashboard')->with('success',"Listing successfully deleted");
    }
}
