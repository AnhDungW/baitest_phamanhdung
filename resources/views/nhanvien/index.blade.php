@extends('layouts.layout')
@section('content')
    <table class="table container">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th><a href="/add" class="btn">Add</a></th>
        </tr>
        @foreach ($nhanvien as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td><a href="/edit/{{$item->id}}" class="btn btn-primary">Update</a></td>
            </tr>
        @endforeach
    </table>
    <div class="container">
        {{$nhanvien->links()}}
    </div>
@endsection