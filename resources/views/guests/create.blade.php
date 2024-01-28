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

<form action="{{ route('guests.store') }}" method="POST">
@csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <a class="btn btn-primary" href="{{ route('guests.index') }}"> Back</a>
          </div>
          
          <div class="form-group">
            <textarea class="form-control" name="wish" rows="5" placeholder="Your Wish" required></textarea>
          </div>
          
          <div class="btn-get-started scrollto"><button type="submit">Send Message</button></div>
         
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->
@endsection

