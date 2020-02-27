@extends('navigationbar.nav')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
      <!-- BAHAGIAN POST ENQUIRIES PAGE -->

      <div class="col-md-12 text-left mb-5 site-animate">
        <h4 class="card-title">Any Enquiries ? </h4>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status')}}
        </div>
        @endif
      </div>

      <div class="col-md-7 mb-5 site-animate">
        <form action="enquiries" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name">
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email">
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" id="message-text" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Send Enquiries">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>


@endsection