@extends('layouts.layout')
@section('content')
<form action="/update/{{$nhanvien->id}}" method="POST" class="container">
    <div class="mb-3">
        <label for="" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" id="" aria-describedby="" value="{{$nhanvien->name}}">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email:</label>
        <input type="text" name="email" value="{{$nhanvien->email}}" class="form-control" id="" aria-describedby="">
        @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Phone:</label>
        <input type="text" name="phone" value="{{$nhanvien->phone}}" class="form-control" id="" aria-describedby="">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    @csrf
    <input type="submit" class="btn btn-primary" value="Update">
    <a href="/" class="btn btn-primary">Back</a>
</form>
@endsection