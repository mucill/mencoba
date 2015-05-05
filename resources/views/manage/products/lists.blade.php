@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Products</div>
				@if(count($lists) > 0)
				<div class="table-responsive">					
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Category</th>
								<th>Status</th>
								<th>Update</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($lists as $product)
							<tr>
								<td>{{ $product->name }}</td>
								<td>{{ $product->price }}</td>
								<td>{{ $product->category }}</td>
								<td>{{ $product->status }}</td>
								<td>{{ $product->updated_at }}</td>
								<td><a href="{{ url('products/edit/'.$product->slug) }}">Edit</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@else
				<div class="panel-body">No Data Available</div>
				@endif
			</div>
			<div class="pagination"><?php echo $lists->render(); ?></div>
		</div>
	</div>
</div>
@endsection
