@extends('layouts.layout')

@section('page_title') Edit client @endsection

@section('content')

<nav class="navbar navbar-light bg-light">
    <span class="navbar-text">
      <h4>Edit client</h4>
    </span>
</nav>


<section class="mt-4">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    @include('layouts.messages')
    <form action="{{route('edit_client', $data->id) }}" method="post">
        @csrf
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <span class="text-dark">Client name</span>
          <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control w-100" placeholder="Client name" required>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <span class="text-dark">Client surname</span>
          <input type="text" name="surname" id="surname" value="{{$data->surname}}" class="form-control w-100" placeholder="Client surname" required>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <span class="text-dark">Client email</span>
          <input type="text" name="email" id="email" value="{{$data->email}}" class="form-control w-100" placeholder="Client email" required>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <span class="text-dark">Client phone</span>
          <input type="text" name="phone" id="phone" value="{{$data->phone}}" class="form-control w-100" placeholder="Client phone" required>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <span class="text-dark">Client type</span>
          <select class="form-control w-100" name="type" id="type" required>
            <option @if($data->type == 1) selected @endif value="1">People</option>
            <option @if($data->type == 2) selected @endif value="2">Company</option>
          </select>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 form-group">
          <button type="submit" class="btn btn-primary w-100">Save client data</button>
        </div>
    </form>
  </div>
</section>

@endsection
