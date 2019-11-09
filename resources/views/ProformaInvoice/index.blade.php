@extends('layouts.admin')
@section('content')

<section class="content-header">
	<h1>Proforma Invoice</h1>
</section>
<section class="content">
			
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<a class="btn btn-default btn-sm" style="margin:5px;" href="{{ route('proformainvoice.create')}}"><i class="fa fa-plus"></i>  Add New</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<table id="example1" class="table table-hover table-bordered table-striped table-condensed">
						<thead>
							<tr>
								<td width="70"><strong>Sr No.</strong></td>
								<td width="150"><strong>Invoice No.</strong></td>
								<td><strong>Consignee Name</strong></td>
								<td><strong>Date</strong></td>
								<th width="100">PDF</th>
								<td width="100"><strong>Action</strong></td>
							</tr>
						</thead>
						<tbody>
							@foreach ($proformainvoices as $proformainvoice)
							<tr>
								<td><b>{{++$i}}.</b></td>
								<td>{{$proformainvoice->pro_invoice_no}}</td>
								<td>{{$consigneedetail->consignee_name}}</td>
								<td>{{$proformainvoice->pro_invoice_date}}</td>
								<td><a style="color:red;" href="javascript:setaction2('pdf',517);"><i style="font-size:20px;" class="fa fa-file-pdf-o"></i></a></td>
								
																		
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-sm">Action</button>
										<button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">
											<span class="caret"></span>
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<form action="{{ route ('proformainvoice.destroy', $proformainvoice->id) }}" method="post">
												<a class="btn btn-warning btn-xs" href="{{route ('proformainvoice.edit', $proformainvoice->id)}}" style="width: 100px;margin: 5px;"><i class="fa fa-edit"></i> Edit Invoice</a><br>
												<a class="btn btn-success btn-xs" href="{{route ('productdetail.edit', $productdetail->id)}}" style="width: 100px;margin: 5px;"><i class="fa fa-edit"></i> Edit Product</a><br>
												@csrf
												@method('DELETE')
												<button class="btn btn-danger btn-xs" href="{{route ('proformainvoice.destroy', $proformainvoice->id)}}" style="width: 100px;margin: 5px;" type="submit"><i class="fa fa-trash-o"></i> Delete</button>
											</form>
										</ul>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				{!! $proformainvoices->links() !!}
				</div>
			</div>
        </div>
    </div>
</section>

@endsection