<?php

namespace App\Http\Controllers;

use App\GenerateReport;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('GenerateReport.index');
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
     * @param  \App\GenerateReport  $generateReport
     * @return \Illuminate\Http\Response
     */
    public function show(GenerateReport $generateReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GenerateReport  $generateReport
     * @return \Illuminate\Http\Response
     */
    public function edit(GenerateReport $generateReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GenerateReport  $generateReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenerateReport $generateReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GenerateReport  $generateReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenerateReport $generateReport)
    {
        //
    }
}
