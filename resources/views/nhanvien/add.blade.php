@extends('layouts.layout')
@section('content')
<form action="/addNv" method="POST" class="container">
    <div class="mb-3">
        <label for="" class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" id="" aria-describedby="">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email:</label>
        <input type="text" name="email" class="form-control" id="" aria-describedby="">
        @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Phone:</label>
        <input type="text" name="phone" class="form-control" id="" aria-describedby="">
        @error('phone')
        <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    @csrf
    <input type="submit" class="btn btn-primary" value="Add">
    <a href="/" class="btn btn-primary">Back</a>
</form>
@endsection