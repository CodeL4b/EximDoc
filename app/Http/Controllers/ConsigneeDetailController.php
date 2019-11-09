<?php

namespace App\Http\Controllers;

use App\ConsigneeDetail;
use Illuminate\Http\Request;

class ConsigneeDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consigneedetails = ConsigneeDetail::latest()->paginate(10);
        return view('MasterDetail.ConsigneeDetail.index', compact('consigneedetails'))
             ->with('i',(request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterDetail.ConsigneeDetail.create');
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
            'consignee_name' => 'required',
            'consignee_address' => 'required',
            'consignee_country' => 'required'
        ]);

        ConsigneeDetail::create($request->all());
        return redirect()->route('consigneedetail.index')
            ->with('success', 'New Consignee Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ConsigneeDetail  $consigneeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ConsigneeDetail $consigneeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConsigneeDetail  $consigneeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consigneedetail = ConsigneeDetail::find($id);
        return view('MasterDetail.ConsigneeDetail.edit', compact('consigneedetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConsigneeDetail  $consigneeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'consignee_name' => 'required',
            'consignee_address' => 'required',
            'consignee_country' => 'required'
        ]);

        $consigneedetail = ConsigneeDetail::find($id);
        $consigneedetail->consignee_name = $request->get('consignee_name');
        $consigneedetail->consignee_address = $request->get('consignee_address');
        $consigneedetail->consignee_country = $request->get('consignee_country');
        $consigneedetail->save();
        return redirect()->route('consigneedetail.index')
            ->with('success', 'Consignee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConsigneeDetail  $consigneeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consigneedetail = ConsigneeDetail::find($id);
        $consigneedetail->delete();
        return redirect()->route('consigneedetail.index')
            ->with('success', 'Consignee Deleted Successfully');
    }
}
