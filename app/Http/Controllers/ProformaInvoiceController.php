<?php

namespace App\Http\Controllers;

use App\ProformaInvoice;
use App\ConsigneeDetail;
use App\Currency;
use App\BankDetail;
use Illuminate\Http\Request;

class ProformaInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proformainvoices = ProformaInvoice::latest()->paginate(10);
        return view('ProformaInvoice.index', compact('proformainvoices'))
             ->with('i',(request()->input('page',1) -1)*10);
        return view('ProformaInvoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consigneedetails = ConsigneeDetail::all();
        $currencys = Currency::all();
        $bankdetails = BankDetail::all();
        return view('ProformaInvoice.create', compact('consigneedetails','currencys','bankdetails'));
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
            'pro_invoice_no' => 'required',
            'pro_invoice_date' => 'required',
            'country_of_origin' => 'required',
            'country_of_final_dest' => 'required',
            'pre_carriage_by' => 'required',
            'port_of_discharge' => 'required',
            'place_of_receipt_pre' => 'required',
            'port_of_loading' => 'required',
            'final_dest' => 'required',
            'delivery_payment' => 'required',
            'bank_id' => 'required',
            'currency_code' => 'required'
        ]);

        ProformaInvoice::create($request->all());
        return redirect()->route('proformainvoice.index')
            ->with('success', 'ProformaInvoice Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(ProformaInvoice $proformaInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proformainvoice = ProformaInvoice::find($id);
        return view('ProformaInvoice.edit', compact('proformainvoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pro_invoice_no' => 'required',
            'pro_invoice_date' => 'required',
            'country_of_origin' => 'required',
            'country_of_final_dest' => 'required',
            'pre_carriage_by' => 'required',
            'port_of_discharge' => 'required',
            'place_of_receipt_pre' => 'required',
            'port_of_loading' => 'required',
            'final_dest' => 'required',
            'delivery_payment' => 'required',
            'bank_id' => 'required',
            'currency_code' => 'required'
        ]);

        $proformainvoice = ProformaInvoice::find($id);
        $proformainvoice->pro_invoice_no = $request->get('pro_invoice_no');
        $proformainvoice->pro_invoice_date = $request->get('pro_invoice_date');
        $proformainvoice->country_of_origin = $request->get('country_of_origin');
        $proformainvoice->country_of_final_dest = $request->get('country_of_final_dest');
        $proformainvoice->pre_carriage_by = $request->get('pre_carriage_by');
        $proformainvoice->port_of_discharge = $request->get('port_of_discharge');
        $proformainvoice->place_of_receipt_pre = $request->get('place_of_receipt_pre');
        $proformainvoice->port_of_loading = $request->get('port_of_loading');
        $proformainvoice->final_dest = $request->get('final_dest');
        $proformainvoice->delivery_payment = $request->get('delivery_payment');
        $proformainvoice->bank_id = $request->get('bank_id');
        $proformainvoice->currency_code = $request->get('currency_code');
        $proformainvoice->save();
        return redirect()->route('proformainvoice.index')
            ->with('success', 'ProformaInvoice Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProformaInvoice  $proformaInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proformainvoice = ProformaInvoice::find($id);
        $proformainvoice->delete();
        return redirect()->route('proformainvoice.index')
            ->with('success', 'ProformaInvoice Deleted Successfully');
    }
}
