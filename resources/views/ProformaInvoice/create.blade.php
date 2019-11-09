@extends('layouts.admin')
@section('content')


<section class="content-header">
	<h1>Proforma Invoice</h1>
</section>	

<section class="content" >
    <div class="row">
        <div class="col-md-12">
			<div class="nav-tabs-custom">
			
				<div class="box-header with-border">
					<h3 class="box-title">Add New Proforma Invoice Here</h3>	
				</div>
				
				<form id="proforma_frm" method="post" enctype="multipart/form-data">
					<div class="box-body">
					@csrf
					<input type="hidden" name="proforma_sr_no" value="3">
						<div class="row">	
							<div class="col-md-5 col-xs-12 form-group">
								<label for="exampleInputEmail1">Exporter </label>
								<input type="hidden" name="exporter_id" value="479"/>
								<textarea type="text" name="exporter-479" rows="12" class="validate[required] form-control" id="exporter_detail" >
									
								</textarea>
							</div>
							

							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Proforma Invoice No. </label>
								<input type="text" name="pro_invoice_no"  class="validate[required] form-control " id="pro_invoice_no" value="" />
								
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input name="pro_invoice_date" id="pro_invoice_date" value="" type="text" class=" validate[required] validate[custom[date]] form-control pull-right"  >
								</div>
							</div>


							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Exporter’s Ref. </label>
								<input type="text" name="exporter_ref"  class="form-control " id="exporter_ref" value=""  />
							</div>
							
							<div class="col-md-6 col-xs-12 form-group" style="margin-top: 10px;">
								<label for="exampleInputEmail1">Buyer’s Ref. No. & Date </label>
								<input type="text" name="buyer_ref"  class="form-control " id="buyer_ref" value=""  />
							</div>
							
							<div class="col-md-6 col-xs-12 form-group" style="margin-top: 10px;">
								<label for="exampleInputEmail1">Other references(s) </label>
								<textarea type="text" name="other_ref" rows="2" class="form-control " id="other_ref"  ></textarea>
							</div>
							
						</div>
						<div class="row">	
						
							<div class="col-md-5 col-xs-12 form-group">
								<label for="exampleInputEmail1">Consignee </label>
								<select name="consignee_id" id="consignee_id"  class="validate[required] form-control search_test" >
										<option id="none" value="">-- Select Consignee --</option>
										@foreach ($consigneedetails as $consigneedetail)
											<option>{{$consigneedetail-> consignee_name}}</option>
										@endforeach
										<option href="{{ route('consigneedetail.create')}}" value="add_consignee" >Add New</option>
								</select>
							</div>

							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Country of Origin of Goods </label>
								<input type="text" name="country_of_origin" class="validate[required] form-control " id="country_of_origin" value="Bangladesh"  />
							</div>
							
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Country of Final Destination </label>
								<input type="text" name="country_of_final_dest" class="validate[required] form-control " id="country_of_final_dest" value=""  />
							</div>
							
						</div>
						
						<div class="row">
							<div class="col-md-5 col-xs-12 form-group">
								<label for="exampleInputEmail1">Pre-Carriage by </label>
								<input type="text" name="pre_carriage_by" class="validate[required] form-control " id="pre_carriage_by" value="Road"  />
							</div>
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Vessel/Flight No. </label>
								<input type="text" name="vessel_no" class="form-control " id="vessel_no" value=""  />
							</div>
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Port of Discharge </label>
								<input type="text" name="port_of_discharge" class="validate[required] form-control " id="port_of_discharge" value=""  />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-5 col-xs-12 form-group">
								<label for="exampleInputEmail1">Place of receipt by pre-carrier </label>
								<input type="text" name="place_of_receipt_pre" class="validate[required] form-control " id="place_of_receipt_pre" value="Dhaka"  />
							</div>
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Port of Loading </label>
								
								<input class="validate[required] form-control" id="port_of_loading" name="port_of_loading" list="browsers" value=""/>
								<datalist id="browsers">

								</datalist>
							</div>
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Final Destination </label>
								<input type="text" name="final_dest" class="validate[required] form-control " id="final_dest" value=""  />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-11 col-xs-12 form-group">
								<label for="exampleInputEmail1">Delivery & Payment Terms: </label>
								<input type="text" name="delivery_payment" class="validate[required] form-control " id="delivery_payment" list="browsers1" value="" />
								
								<datalist id="browsers1">
																	
								</datalist>
							</div>
						</div>
						<div class="row">	
							<div class="col-md-3 col-xs-12 form-group">
								<label for="exampleInputEmail1">Incoterm </label>
								<select name="term" id="term" class="validate[required] form-control">
									<option value="">-- Select --</option>
									<option  value="FOB">FOB</option>
									<option  value="CFR">CFR</option>
									<option  value="CIF">CIF</option>
								</select>
							</div>
							<div class="col-md-4 col-xs-12 form-group">
								<label for="exampleInputEmail1">Bank Details </label>
								<select  name="bank_id" id="bank_id" class="validate[required] form-control search_test" >
									<option  value="">-- Select Bank --</option>
									@foreach ($bankdetails as $bankdetail)
										<option>{{$bankdetail-> bank_name}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md-4 col-xs-12 form-group">
								<label for="exampleInputEmail1">Currency </label>
								<select  name="currency_code" id="currency_code" class="validate[required] form-control search_test" >
									<option id="none" value="">-- Select Currency --</option>
									@foreach ($currencys as $currency)
										<option>{{$currency-> currency_code}}</option>
									@endforeach
									<option value="add_currency">Add New</option>
								</select>
							</div>
						</div>	
					</div>
					<br>
					<br>
					<input type="hidden" name="myaction" id="myaction" value="add" />
					<input type="hidden" name="mid" id="mid" value="0" />
					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
						<a href="{{route('proformainvoice.index')}}" class="btn btn-success">Cancel</a>
					</div>
				</form>		
			</div>
		</div>
	</div>		
</section>


@endsection
