@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Category</div>
				@if(count($lists) > 0)
				<div class="table-responsive">					
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Items</th>
								<th>Update</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($lists as $category)
							<tr>
								<td>{{ $category->name }}</td>
								<td>{{ $item->item($category->id) }}</td>
								<td>{{ $category->updated_at }}</td>
								<td><a href="{{ url('products/edit/'.$category->slug) }}">Edit</a></td>
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
