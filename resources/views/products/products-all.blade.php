@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-5">
         @if($products-> count() > 0)
             @foreach($products as $el)
                <div class="col p-3">
                    <div class="card" style="width: 100%">
                        <div style="min-height: 18rem; background-image:url('{{asset($el-> image_path)}}'); background-size: cover">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$el->name_fr}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        @if($el->price > $el->price_with_discount)
                                            <span>{{$el-> price_with_discount}} €</span>
                                            <span style="text-decoration: line-through; color: forestgreen">{{$el-> price}} €</span>
                                        @else
                                            {{$el-> price}} €
                                        @endif
                                        <div>
                                            <span style="border-radius: 5px; background-color: palegreen"> Delivery:
                                                @if($el-> weight < 250 )
                                                    {{$tarifs[0]-> tarif_0_250}}
                                                @elseif($el-> weight < 500)
                                                    {{$tarifs[0]-> tarif_501_750}}
                                                @elseif($el-> weight < 750)
                                                    {{$tarifs[0]-> tarif_501_750}}
                                                @elseif($el-> weight < 1000)
                                                    {{$tarifs[0]-> tarif_751_1000}}
                                                @elseif($el-> weight < 2000)
                                                    {{$tarifs[0]-> tarif_1001_2000}}
                                                @elseif($el-> weight < 5000)
                                                    {{$tarifs[0]-> tarif_2001_5000}}
                                                @elseif($el-> weight < 10000)
                                                    {{$tarifs[0]-> tarif_5001_10000}}
                                                @elseif($el-> weight < 15000)
                                                    {{$tarifs[0]-> tarif_10001_15000}}
                                                @elseif($el-> weight < 30000)
                                                    {{$tarifs[0]-> tarif_15001_30000}}
                                                @else
                                                    Delivery not possible
                                                @endif
                                                     €
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn float-end">
                                            <a href="#" class="card-link">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" color="green" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                                                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                </svg>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
             @endforeach
         @endif
    </div>
@endsection

