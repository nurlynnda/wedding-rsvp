@extends('guests.layout')

@section('content')
<footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>{{ $guest->name }}</h4>
        <p>{{ $guest->wish }}</p>
        <a class="btn btn-primary" href="{{ route('guests.index') }}"> Back</a>
      </div>
    </div>
  </div>
</div>
@endsection
