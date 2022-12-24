<?php

namespace App\Http\Controllers;

use App\Models\Mailinglist;
use Illuminate\Http\Request;

class MailinglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailinglists = Mailinglist::all();
        return view("../dashboard.blog.mailinglist",compact('mailinglists'));

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
        $request->validate([
            'email' => 'required|unique:mailinglists',
        ]);
        mailinglist::create([
            'email'=>$request->email
        ]);
        return redirect()->back()->with("status","Email added Succefully");

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function show(Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailinglist $mailinglist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mailinglist  $mailinglist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailinglist $mailinglist,$id)
    {
        $mailinglist::destroy($id);  
        return redirect()->route("showmailinglist")->with("message","Email Deleted Succefully");

    }
}
