<?php

namespace App\Http\Controllers;

use App\BillExchange;
use Illuminate\Http\Request;

class BillExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PostShipmentDocs.BillofExchange.index');
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
     * @param  \App\BillExchange  $billExchange
     * @return \Illuminate\Http\Response
     */
    public function show(BillExchange $billExchange)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BillExchange  $billExchange
     * @return \Illuminate\Http\Response
     */
    public function edit(BillExchange $billExchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BillExchange  $billExchange
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillExchange $billExchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BillExchange  $billExchange
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillExchange $billExchange)
    {
        //
    }
}
