@extends("layouts.app")

@section("content")


<main>


    <div class="container-fluid px-0 jumbo">

        <div class="container-fluid container2 d-flex flex-column carte">

                <div class="mx-auto my-5 text-center">
                    <figure style="height: 300px">
                        <img class="h-100" src= {{$comic["thumb"]}}>
                    </figure>
                        <span>{{$comic["title"]}}</span>

                </div>

        </div>

    </div>



</main>

@endsection
