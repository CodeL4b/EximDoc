<?php

namespace App\Http\Controllers;

use App\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productdetails = ProductDetail::latest()->paginate(10);
        return view('MasterDetail.ProductDetail.index',compact('productdetails'))
            ->with('i',(request()->input('page',1) -1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MasterDetail.ProductDetail.create');
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
            'product_name' => 'required',
            'product_HS' => 'required',
            'product_price' => 'required'
        ]);

        ProductDetail::create($request->all());
        return redirect()->route('productdetail.index')
            ->with('success', 'Product Deatil Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productdetail = ProductDetail::find($id);
        return view('MasterDetail.ProductDetail.edit', compact('productdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_HS' => 'required',
            'product_price' => 'required'
        ]);


        $productdetail = ProductDetail::find($id);
        $productdetail->product_name = $request->get('product_name');
        $productdetail->product_HS = $request->get('product_HS');
        $productdetail->product_price = $request->get('product_price');
        $productdetail->save();
        return redirect()->route('productdetail.index')
            ->with('success', 'Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productdetail = ProductDetail::find($id);
        $productdetail->delete();
        return redirect()->route('productdetail.index')
            ->with('success', 'Product Deleted Successfully');
    }
}
