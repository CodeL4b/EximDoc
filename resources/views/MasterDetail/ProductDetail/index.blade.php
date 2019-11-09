@extends('layouts.admin')
@section('content')

<section class="content-header">
	<h1>Product</h1>
</section>
<section class="content">
			
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<a class="btn btn-default btn-sm" style="margin:5px;" href="{{ route('productdetail.create')}}"><i class="fa fa-plus"></i>  Add New</a>
				</div>
				<div class="box-body">
				  <table id="example1" class="table table-hover table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<td width="50px"><strong>#</strong></td>
							<td><strong>Product Name</strong></td>
							<td><strong>HS Code</strong></td>
							<td><strong>Entered Date</strong></td>
							<td width="100"><strong>Action</strong></td>
						</tr>
					</thead>
					<tbody>
						@foreach ($productdetails as $productdetail)
						<tr>
							<td><b>{{++$i}}.</b></td>
							<td>{{$productdetail->product_name}}</td>
							<td>{{$productdetail->product_HS}}</td>
							<td>{{$productdetail->created_at}}</td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-primary btn-sm">Action</button>
									<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<form action="{{ route ('productdetail.destroy', $productdetail->id) }}" method="post">
										<a class="btn btn-warning btn-xs" href="{{route ('productdetail.edit', $productdetail->id)}}" style="width: 70px;margin: 5px;"><i class="fa fa-edit"></i> Edit</a><br>
										@csrf
										@method('DELETE')
										<button class="btn btn-danger btn-xs" href="{{route ('productdetail.destroy', $productdetail->id)}}" style="width: 70px;margin: 5px;" type="submit"><i class="fa fa-trash-o"></i> Delete</button>
										</form>
									</ul>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				  </table>
				  {!! $productdetails->links() !!}
				</div>
			</div>
        </div>
    </div>
</section>

@endsection
