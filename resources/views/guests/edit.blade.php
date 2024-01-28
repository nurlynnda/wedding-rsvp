@extends('guests.layout')

@section('content')
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      <h2>Send Your Wish</h2>

      @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('guests.update',$guest->id) }}" method="POST">
@csrf
@method('PUT')
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" value="{{ $guest->name }}" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <a class="btn btn-primary" href="{{ route('guests.index') }}"> Back</a>
          </div>
         
          <div class="form-group">

            <textarea class="form-control" style="height:150px" name="wish" placeholder="Your Wish">{{ $guest->wish }}</textarea>
          </div>
          
          <div class="text-center"><button type="submit">Submit</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
@endsection