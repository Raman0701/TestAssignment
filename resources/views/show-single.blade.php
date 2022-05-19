@extends('index')
@section('title','Show Single Event')

@section('content')
	<a href="{{url('/')}}">Back to Home </a>
	<h1 class="text-center">Edit Single Event</h1>

	<form id="form" class="form" method="post" action="javascript:;" enctype="multipart/form-data">
		@csrf
		<div class="row">
      		<div class="col-md-12">
       			<div class="alert alert-success d-none" id="msg_div">
         			<span id="res_message">Event Updated..!!</span>
       			</div>

       			<div class="alert alert-danger d-none" id="msg_div">
         			<span id="res_message">Error..!!</span>
       			</div>
     		</div>
   		</div>
		<div class="form-group">
		    <label for="name">Event Name</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Event Name" required>
		    <span class="text-danger p-1">{{ $errors->first('name') }}</span>
		</div>
		<div class="form-group">
		    <label for="image" class="form-label">Image for Event (1st)</label>
		    <input class="form-control form-control" id="first_img" name="first_img" type="file" accept="image/*">
		    <input type="hidden" name="first_img_id" value="{{ $event->images[0]->id }}">
		    <span class="text-danger p-1">{{ $errors->first('first_img') }}</span>
		</div>
		<div id="preview_first_img" style="display:none">
			<img src="" width="100" height="100" id="img1" style="margin-bottom:10px">
		</div>
		<div class="form-group">
		    <label for="image" class="form-label">Image for Event (2nd)</label>
		    <input class="form-control form-control" id="second_img" name="second_img" type="file" accept="image/*">
		    <input type="hidden" name="second_img_id" value="{{ $event->images[1]->id }}">
		    <span class="text-danger p-1">{{ $errors->first('second_img') }}</span>
		</div>
		<div id="preview_second_img" style="display:none" id="img2">
			<img src="" width="100" height="100" id="img2">
		</div>
		<input type="hidden" name="event_id" id="event_id" value="{{ $event->id }}">
		<div class="form-group">
			<input type="submit" name="Submit" value="Edit" class="btn btn-primary">
		</div>
	</form>
@endsection