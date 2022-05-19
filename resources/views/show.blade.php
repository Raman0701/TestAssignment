@extends('index')
@section('title','Show Data')

@section('content')
	<h1 class="text-center">Show Faker Data</h1>

	<table id="show">
		<thead>
			<tr>
				<th>Id</th>
				<th>Event Name</th>
				<th>First Image</th>
				<th>Second Image</th>
				<th>Created at</th>
				<th> Action </th>
			</tr>
		</thead>
		<tbody>
			@forelse($data as $event)
				<tr>
					<td>{{$event->id}}</td>
					<td>{{$event->name}}</td>
					<td>
						<img src="{{url('public/images/'.$event->images[0]->image)}}" width="100" height="100">
					</td>
					<td>
						<img src="{{url('public/images/'.$event->images[1]->image)}}" width="100" height="100">
					</td>
					<td>{{$event->created_at}}</td>
					<td>
						<a class="btn btn-info" href="{{url('edit-single-event/'.$event->id)}}">Edit</a>
					</td>
				</tr>
			@empty
			@endforelse
		</tbody>
	</table>
@endsection