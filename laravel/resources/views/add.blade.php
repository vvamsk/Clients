@extends('layouts.layout')

@section('page_title') Add client @endsection

@section('content')

    <nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          <h4>Add client</h4>
        </span>
    </nav>



    <section class="mt-4">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @include('layouts.messages')
        <form action="{{ route('add_client') }}" method="post">
            @csrf
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <span class="text-dark">Client name</span>
              <input type="text" name="name" id="name" class="form-control w-100" placeholder="Client name" required>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <span class="text-dark">Client surname</span>
              <input type="text" name="surname" id="surname" class="form-control w-100" placeholder="Client surname" required>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <span class="text-dark">Client email</span>
              <input type="text" name="email" id="email" class="form-control w-100" placeholder="Client email" required>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <span class="text-dark">Client phone</span>
              <input type="text" name="phone" id="phone" class="form-control w-100" placeholder="Client phone" required>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <span class="text-dark">Client type</span>
              <select class="form-control w-100" name="type" id="type" required>
                <option value="1">People</option>
                <option value="2">Company</option>
              </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
              <button type="submit" class="btn btn-primary w-100">Add client</button>
            </div>
        </form>
      </div>
  </section>

@endsection
