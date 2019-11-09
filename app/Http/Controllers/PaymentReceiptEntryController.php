<?php

namespace App\Http\Controllers;

use App\PaymentReceiptEntry;
use Illuminate\Http\Request;

class PaymentReceiptEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('PaymentReceiptEntry.index');
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
     * @param  \App\PaymentReceiptEntry  $paymentReceiptEntry
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentReceiptEntry $paymentReceiptEntry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentReceiptEntry  $paymentReceiptEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentReceiptEntry $paymentReceiptEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentReceiptEntry  $paymentReceiptEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentReceiptEntry $paymentReceiptEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentReceiptEntry  $paymentReceiptEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentReceiptEntry $paymentReceiptEntry)
    {
        //
    }
}
