@extends('layouts.admin')
@section('content')

<section class="content-header">
	<h1>Consignee</h1>
</section>	

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Consignee Here</h3>
				</div>
            <!-- /.box-header -->
            <!-- form start -->

				<form id="consignee_frm" action="{{route('consigneedetail.update', $consigneedetail->id)}}" method="post" enctype="multipart/form-data">
					<div class="box-body">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="exampleInputEmail1">Consignee Name <i style="color:red;font-size:15px;">*</i> :-</label>
							<input type="text" spellcheck="false" name="consignee_name"  class="validate[required] form-control" id="consignee_name" value="{{$consigneedetail->consignee_name}}"  autofocus/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Consignee Address <i style="color:red;font-size:15px;">*</i> :-</label>
							<textarea name="consignee_address" spellcheck="false" rows="4"  class="validate[required] form-control" id="consignee_address"></textarea>
						</div>	
						
						<div class="form-group">
							<label for="exampleInputEmail1">Consignee Country <i style="color:red;font-size:15px;">*</i> :-</label>
							<input type="text" spellcheck="false" name="consignee_country"  class="validate[required] form-control" id="consignee_country" value="{{$consigneedetail->consignee_country}}"  />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Consignee E-mail :-</label>
							<input type="email" spellcheck="false" name="consignee_email" id="consignee_email" class="form-control" value="{{$consigneedetail->consignee_email}}" />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Phone Number :-</label>
							<input type="text" name="consignee_phone"  class="form-control" id="consignee_phone" value="{{$consigneedetail->consignee_phone}}"  />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Bank Detail :-</label>
							<textarea type="text" rows="4" name="consignee_bank"  class="form-control" id="consignee_bank"></textarea>
						</div>
						
					</div>
							<input type="hidden" name="myaction" id="myaction" value="add" />
							<input type="hidden" name="mid" id="mid" value="0" />
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('consigneedetail.index')}}" class="btn btn-success">Cancel</a>
						</div>
				</form>
			</div>
		</div>
	</div>		
</section>

@endsection