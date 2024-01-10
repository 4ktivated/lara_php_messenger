@extends('app')

@section('title')
<title> Create message </title>
@endsection

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url("/sendto") }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">User</label>
    <input type="text" name="user_to" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="submit" class="btn btn-primary">Send</button>
  </div>
</form>
@endsection 