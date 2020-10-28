@extends('layouts.layout')

@section('page_title') All clients @endsection

@section('content')

    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
      <h1>All clients</h1>

      @include('layouts.messages')

      <table class="table">
        <thead>
          <tr>
            <th>Type</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>ID</th>
            <th style="width: 155px">Buttons</th>
          </tr>
        </thead>
        <tbody>

          @foreach($data as $el)

          <tr>
            <th>
            @if($el->type == 1)
              <i class="fa fa-user"></i>
            @elseif($el->type == 2)
              <i class="fa fa-building"></i>
            @endif
            </th>
            <td>{{ $el->name }} {{ $el->surname }}</td>
            <td>{{ $el->email }}</td>
            <td>{{ $el->phone }}</td>
            <td>{{ $el->id }}</td>
            <td class="text-right">
              <a href="{{ route('edit', $el->id) }}" class="btn btn-primary">Edit</a>
              <a href="{{ route('delete_client', $el->id) }}" class="btn btn-danger">Delete</a>
            </td>
          </tr>

          @endforeach

          <tr>
            <th colspan="6" class="text-right">
              <a href="/add" class="btn btn-primary">Add client</a>
            </th>
          </tr>
        </tbody>
      </table>
    </div>

@endsection
