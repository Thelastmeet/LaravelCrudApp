@extends('layout')
@section('content')
<h1>user list</h1>
@if(Session::get('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('status') }}

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif





<table class="table">
    <thead>

        <th scope="col">user id</th>
        <th scope="col">Name</th>
        <th scope="col">address</th>
        <th scope="col">Email</th>


    </thead>
    <tbody>
        @foreach ($data as $item )
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->address }}</td>
        <td>{{ $item->email }}</td>
        <td>
            <a href="/delete/{{$item->id}}"><i class="bi bi-trash3-fill"></i></a>
            <a href="{{ url('edit/'.$item->id) }}"><i class="bi bi-pencil-square"></i></a>
        </td>
      </tr>

      @endforeach
      </tbody>
  </table>

@endsection
