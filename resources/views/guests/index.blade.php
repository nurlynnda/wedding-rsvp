@extends('guests.layout')

@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<section id="wishes" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Wishes</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

        </div>
        @foreach ($guests as $guest)
        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">{{ $guest->name }}</a></h4>
              <p>{{ $guest->wish }}</p>
              <br>
              <form action="{{ route('guests.destroy',$guest->id) }}" method="POST">
                    <a href="{{ route('guests.show',$guest->id) }}">Show</a>
                    <a href="{{ route('guests.edit',$guest->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
          </div>
          @endforeach

        </div>
        {{ $guests->links() }}
      </div>


@endsection
