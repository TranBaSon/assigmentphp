@extends('admin.tables.layout')
@section('main_content')

    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>address</th>
        <th>telephone</th>
        <th></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>address</th>
        <th>telephone</th>
        <th></th>
    </tr>
    </tfoot>
    <tbody>
    @foreach($list as $listStudent)
        <tr>
            <td>{{$listStudent -> id}}</td>
            <td>{{$listStudent -> name}}</td>
            <td>{{$listStudent -> age}}</td>
            <td>{{$listStudent -> address}}</td>
            <td>{{$listStudent -> telephone}}</td>
            <td><a href="{{url("add")}}"><i class="fas fa-user-plus"></i></a></td>
        </tr>
    @endforeach
    </tbody>

@endsection




