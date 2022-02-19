@extends('layout')
@section('content')

    <div class="col-sm-3">
        <form method="post" action="{{ url('update', [$data->id])}}" enctype="multipart/form-data">
            {{method_field('put')}}
            @csrf




            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email address</label>
                <input type="text" name="email" class="form-control" value="{{ $data->email }}"
                    id="exampleInputPassword1" placeholder="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $data->address }}"
                    id="exampleInputPassword1" placeholder="address">
            </div>
            <button type="submit" class="btn btn-primary">edit data</button>
        </form>
    </div>
@endsection
