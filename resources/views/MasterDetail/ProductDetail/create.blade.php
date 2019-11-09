@extends('layouts.admin')
@section('content')

<section class="content-header">
	<h1>Product</h1>
</section>	

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Product Here</h3>
				</div>
				
				<form id="product_frm" action="{{route('productdetail.store')}}" method="post" enctype="multipart/form-data">
					<div class="box-body">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Product Name <i style="color:red;font-size:15px;">*</i> :-</label>
							<input type="text" spellcheck="false" name="product_name"  class="validate[required] form-control" id="product_name" value=""  placeholder="Name" autofocus/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">HS Code <i style="color:red;font-size:15px;">*</i> :- ( <a style="color:red;font-size:15px;" target="_blank" href="http://www.cbic.gov.in/resources//htdocs-cbec/gst/goods-rates-booklet-03July2017.pdf">Click Here To Search HS Code</a> )</label> 
							<input type="text" spellcheck="false" name="product_HS"  class="validate[required,custom[integer]] form-control" id="product_HS" value=""  placeholder="HS Code" />
						</div>
						
						<div class="row">
							
							<div class="col-xs-4 col-xs-12 form-group">
								<label for="exampleInputEmail1" >Price :-</label>
								<input type="text" name="product_price"  class="form-control" id="product_price" value="" placeholder="Product Price" />
							</div>
							
							<div class="col-xs-4 col-xs-12 form-group">
								<label for="exampleInputEmail1" >Unit :-</label>
								<input type="text" name="per_price"  class="form-control" id="per_price" value="" placeholder="kg." />
							</div>
							
							<div class="col-xs-4 col-xs-12 form-group">
								<label for="exampleInputEmail1" >IGST for TAX Invoice (%):-</label>
								<label for="exampleInputEmail1" ><i style="color:red;font-size:15px;">Don't Enter (%)</i></label>
								<input type="text" name="igst"  class="form-control validate[required]" id="igst" value="0" />
							</div>
							
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Description :-</label>
							<textarea name="product_description" rows="5" spellcheck="false"  class="form-control" id="product_description" placeholder="Product Description" ></textarea>
						</div>	
						
					</div>
							<input type="hidden" name="myaction" id="myaction" value="add" />
							<input type="hidden" name="mid" id="mid" value="0" />
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('productdetail.index')}}" class="btn btn-success">Cancel</a>
						</div>
				</form>
			</div>
		</div>
	</div>		
</section>

@endsection
