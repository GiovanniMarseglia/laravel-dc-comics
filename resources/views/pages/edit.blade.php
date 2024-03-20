@extends('layouts.app')





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






<div class="container-fluid jumbo px-0">
    <div class="w-100 container2">
        <div class="container  d-flex justify-content-center">
            <form class="d-flex flex-column w-75 mb-5 d-flex flex-column " action="{{ route('comic.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="title">title</label>
                <input type="text" name="title" id="title" value="{{old('title') ?? $comic->title}}">



                <label for="description">description</label>
                <textarea name="description" id="description" cols="30" rows="10">{{old('description') ?? $comic->description}}</textarea>


                <label for="thumb">thumb</label>
                <input type="text" name="thumb" id="thumb" value="{{old('thumb') ?? $comic->thumb}}">



                <label for="price">price</label>
                <input type="text" name="price" id="price" value="{{old('price') ?? $comic->price}}">



                <label for="series">series</label>
                <input type="text" name="series" id="series" value="{{old('series') ?? $comic->series}}">



                <label for="sale_date">sale_date</label>
                <input type="text" name="sale_date" id="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">



                <label for="type">type</label>
                <input type="text" name="type" id="type" value="{{old('type') ?? $comic->type}}">


                <button type="submit" class="btn btn-primary mt-5 w-25 mx-auto">
                    Crea
                </button>

            </form>
        </div>
    </div>
</div>

@endsection
