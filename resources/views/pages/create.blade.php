@extends("layouts.app")

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif












    <div class="container d-flex justify-content-center">
        <form class="d-flex flex-column w-75 mb-5" action="{{ route('comic.store')}}" method="post">
            @csrf
            <label for="title">title</label>
            <input type="text" name="title" id="title">



            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>


            <label for="thumb">thumb</label>
            <input type="text" name="thumb" id="thumb">



            <label for="price">price</label>
            <input type="text" name="price" id="price">



            <label for="series">series</label>
            <input type="text" name="series" id="series">



            <label for="sale_date">sale_date</label>
            <input type="text" name="sale_date" id="sale_date">



            <label for="type">type</label>
            <input type="text" name="type" id="type">
            <input class="mt-5" type="submit" value="Invia">
        </form>
    </div>

@endsection
