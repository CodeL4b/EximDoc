<?php

namespace App\Http\Controllers;

use App\ChangePassword;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('GeneralSettings.ChangePassword.index');
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
     * @param  \App\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function show(ChangePassword $changePassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangePassword $changePassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChangePassword $changePassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChangePassword  $changePassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangePassword $changePassword)
    {
        //
    }
}
