@extends('layouts.app')

@section('title', 'home')

@section('content')

<div class="container-fluid px-0 jumbo">
    <span class="current p-2 text-light">CURRENT SERIES</span>
    <div class="container-fluid container2 py-5 d-flex flex-column align-items-center">
      <div class="container">
        <!-- contenuto -->
        {{-- <CardFilm v-for="element in film" :propsThumb="element.thumb" :propsName="element.series"/> --}}

            <div class="row row-cols-6 carte gy-5">
                @foreach ($comics as $element)
                    <div class="col">
                        <figure>
                            <img src= {{$element["thumb"]}}>
                        </figure>
                            <span>{{$element["title"]}}</span>
                    </div>
                @endforeach
            </div>



      </div>
      <button class="mt-5 px-4 text-light">LOAD MORE</button>
    </div>
</div>

<div class="container-fluid icone">


        <div class="container">
            <ul class="d-flex py-2 justify-content-between mb-0">
                <li>
                <i><img src="{{  Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt=""></i>
                <p>DIGITAL COMICS</p>
                </li>


                <li>
                <i><img src="{{  Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt=""></i>
                <p>DC MERCHANDISE</p>
                </li>


                <li>
                <i><img src="{{  Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt=""></i>
                <p>SUBSCRIPTION</p>
                </li>



                <li>
                <i><img src="{{  Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt=""></i>
                <p>COMIC SHOP LOCATOR</p>
                </li>



                <li>
                <i><img src="{{  Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt=""></i>
                <p>DC POWER VISA</p>
                </li>
            </ul>
        </div>

</div>


@endsection
