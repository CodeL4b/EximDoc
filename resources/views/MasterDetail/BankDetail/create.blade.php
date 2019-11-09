@extends('layouts.admin')
@section('content')

<section class="content-header">
	<h1>Bank</h1>
</section>	

<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Add New Bank Detail Here</h3>
					
				</div>
				
				<form id="bank_frm" action="{{route('bankdetail.store')}}" method="post" enctype="multipart/form-data">
					<div class="box-body">
						@csrf
						<div class="form-group">
							<label for="exampleInputEmail1">Bank Name <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_name"  class="form-control" id="bank_name" value=""  placeholder="Name" autofocus/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Branch Address <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<textarea name="bank_branch_add" spellcheck="false"  class="form-control" id="bank_branch_add" placeholder="Address" ></textarea>
						</div>	
						
						<div class="form-group">
							<label for="exampleInputEmail1">SWIFT Code <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_swift_code"  class="form-control" id="bank_swift_code" value=""  placeholder="Swift Code" />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Confirm SWIFT Code <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" class="validate[equals[bank_swift_code]] form-control" id="c_bank_swift_code" value=""  placeholder="Confirm Swift Code" />
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Account Number <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" name="bank_acc_no" id="bank_acc_no" class="form-control" value="" placeholder="A/C Number"/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Confirm Account Number <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" spellcheck="false" class="form-control validate[equals[bank_acc_no]]" id="c_bank_acc_no" value="" placeholder="Confirm A/C Number"/>
						</div>
						
						<div class="form-group">
							<label for="exampleInputEmail1">Account Name <!--<i style="color:red;font-size:15px;">*</i>--> :-</label>
							<input type="text" name="bank_acc_name"  class="form-control" id="bank_acc_name" value=""  placeholder="Registered A/C Name" />
						</div>
						
					</div>
							<input type="hidden" name="myaction" id="myaction" value="add" />
							<input type="hidden" name="mid" id="mid" value="0" />
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('bankdetail.index')}}" class="btn btn-success">Cancel</a>
						</div>
				</form>
			</div>
		</div>
	</div>		
</section>


@endsection