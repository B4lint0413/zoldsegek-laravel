@extends("layouts.main")
@section("title", $title)
@section("content")
<form class="mx-auto w-75">
    <label class="form-label" for="keresett">Mit keresel?</label><br>
    <input class="form-control mx-auto" name="keresett" id="keresett" type="text">
    <button type="submit" class="w-75 d-block btn btn-success m-1 mx-auto">Küldés</button>
</form>
<h2>Zöldségek</h2>
<table class="table table-striped">
    <thead>
        <th>Zöldség</th>
        <th>Név</th>
        <th>Leírás</th>
    </thead>
    <tbody>
        @foreach($vegetables as $vegetable)
            <tr>
                <td><img class="w-75 m-2 img-fluid img-thumbnail" src="{{asset('img/' . $vegetable['image'] . '')}}" alt=""></td>
                <td><p class="fs-1 text-uppercase">{{$vegetable['name']}}</p></td>
                <td><p class="">{{$vegetable['description']}}</p></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection