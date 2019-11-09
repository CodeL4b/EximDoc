<?php

namespace App\Http\Controllers;

use App\BillCollectionLetter;
use Illuminate\Http\Request;

class BillCollectionLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PostShipmentDocs.BillCollectionLetter.index');
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
     * @param  \App\BillCollectionLetter  $billCollectionLetter
     * @return \Illuminate\Http\Response
     */
    public function show(BillCollectionLetter $billCollectionLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BillCollectionLetter  $billCollectionLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(BillCollectionLetter $billCollectionLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BillCollectionLetter  $billCollectionLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillCollectionLetter $billCollectionLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BillCollectionLetter  $billCollectionLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillCollectionLetter $billCollectionLetter)
    {
        //
    }
}
