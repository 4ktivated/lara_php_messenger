@extends('app')

@section('title')
<title> Message</title>
@endsection

@section('content')
@foreach ($messeges as $messege)
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">{{ $messege->sender }}</h5>
    <p class="card-text">{{ $messege->messege }}</p>

    @if ($messege->status == false)
      
    <a href="{{ url("read/$messege->id") }}" class="btn btn-primary">Junk</a>
      
    @endif

  </div>
</div>
	
@endforeach
@endsection 