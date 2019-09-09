@extends('studentView.common')
@section('main-content')

<div class="container">

    <form action="{{ route("add") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group"> <h1 class="text-info">Register</h1> </div>
        <div class="form-group">
            <label for="name1">Name</label>
            <input type="text" class="form-control" id="name1" value="{{old("name")}}"  placeholder="Enter name" name="name">
            @if($errors->has("name"))
                <p class="error" style="color:red">{{$errors->first("name")}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="age">age</label>
            <input type="number" class="form-control" id="age" value="{{old("age")}}"  placeholder="Enter age" name="age">
        </div>
        @if($errors->has("age"))
            <p class="error" style="color:red">{{$errors->first("age")}}</p>
        @endif
        <div class="form-group">
            <label for="address">address</label>
            <input type="address" class="form-control" value="{{old("address")}}" id="address" placeholder="address" name="address">
        </div>
        @if($errors->has("address"))
            <p class="error" style="color:red">{{$errors->first("address")}}</p>
        @endif
        <div class="form-group">
            <label for="telephone">telephone</label>
            <input type="telephone" class="form-control" value="{{old("telephone")}}" id="telephone" placeholder="telephone" name="telephone">
        </div>
        @if($errors->has("telephone"))
            <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
        @endif

        <div class="form-group pt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

</div>

@endsection
