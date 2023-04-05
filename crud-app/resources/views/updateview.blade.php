@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">Update View</h2>
    <form action="" method="get">
        <div class="mb-2">
            <label for="">Product Name</label>
            <input type="text" value="{{$pname}}" name="" class="form-control" id="">
        </div>
        <div class="mb-2">
            <label for="">Product Price</label>
            <input type="text" value="{{$pprice}}" name="" class="form-control" id="">
        </div>
        <br>
        <button type="submit" class="btn btn-outline-warning rounded-pill">Update</button>
    </form>
</div>

@endsection