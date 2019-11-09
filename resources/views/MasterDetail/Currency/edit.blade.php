@extends('layouts.admin')
@section('content')


<section class="content-header">
	<h1>Currency</h1>
</section>	

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Currency Here</h3>
				</div>
            <!-- /.box-header -->
            <!-- form start -->

				<form id="currency_frm" action="{{route('currency.update', $currency->id)}}" method="post" enctype="multipart/form-data">
					<div class="box-body">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="exampleInputEmail1">Currency Code <i style="color:red;font-size:15px;">*</i> :-</label><br>
							<label for="exampleInputEmail1"><strong><i style="color:red;font-size:15px;">Note: Please enter 3 letter currency code (Example : USD, BDT, EUR ...)</i></strong></label>
							<input type="text" spellcheck="false" name="currency_code"  class="validate[required,minSize[3],maxSize[3]] form-control" id="currency_code" value="{{$currency->currency_code}}"  autofocus/>
						</div>
						
					</div>
							<input type="hidden" name="myaction" id="myaction" value="add" />
							<input type="hidden" name="mid" id="mid" value="0" />
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('currency.index')}}" class="btn btn-success">Cancel</a>
						</div>
				</form>
			</div>
		</div>
	</div>		
</section>

@endsection
