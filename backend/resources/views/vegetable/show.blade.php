@extends("layouts.main")
@section("title", mb_strtoupper($title))
@section("content")
<div class="row">
    <img class="col-5 m-2 img-fluid img-thumbnail" src="{{asset('img/' . $vegetable['image'] . '')}}" alt="">
    <p class="col-5 m-2">{{$vegetable["description"]}}</p>    
</div>
@endsection