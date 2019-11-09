<?php

namespace App\Http\Controllers;

use App\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bankdetails = BankDetail::latest()->paginate(10);
       return view('MasterDetail.BankDetail.index',compact('bankdetails'))
            ->with('i',(request()->input('page',1) -1)*10);
        
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterDetail.BankDetail.create');
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
            'bank_name' => 'required',
            'bank_swift_code' => 'required',
            'bank_acc_no' => 'required'
        ]);

        BankDetail::create($request->all());
        return redirect()->route('bankdetail.index')
            ->with('success', 'Bank Deatil Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BankDetail $bankDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bankdetail = BankDetail::find($id);
        return view('MasterDetail.BankDetail.edit', compact('bankdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bank_name' => 'required',
            'bank_swift_code' => 'required',
            'bank_acc_no' => 'required'
        ]);
        
        $bankdetail = BankDetail::find($id);
        $bankdetail->bank_name = $request->get('bank_name');
        $bankdetail->bank_swift_code = $request->get('bank_swift_code');
        $bankdetail->bank_acc_no = $request->get('bank_acc_no');
        $bankdetail->save();
        return redirect()->route('bankdetail.index')
            ->with('success', 'Bank Detail Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bankdetail = BankDetail::find($id);
        $bankdetail->delete();
        return redirect()->route('bankdetail.index')
            ->with('success', 'Bank Detail Deleted Successfully');
    }
}
