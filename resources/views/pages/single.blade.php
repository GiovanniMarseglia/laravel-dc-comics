@extends("layouts.app")

@section("content")


<main>




    <div class="container d-flex flex-column">

            <div class="mx-auto mb-5 text-center">
                <figure style="height: 300px">
                    <img class="h-100" src= {{$comic["thumb"]}}>
                </figure>
                       <span>{{$comic["title"]}}</span>

            </div>

    </div>



</main>

@endsection
