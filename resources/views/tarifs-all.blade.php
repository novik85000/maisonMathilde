@extends('layouts.app')

@section('content')
    <div class="col">
            @if($tarifs-> count() > 0)
                @foreach($tarifs as $el)
                <div class="row mb-5">
                <h1> {{$el->name_fr}} </h1>
                <h1> {{$el->name_en}} </h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Weight</th>
                            <th scope="col">Tarif </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">0-250 grammes</th>
                            <td>{{$el->tarif_0_250 == null ? 'не определено' :
                                (($el->tarif_0_250).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">251-500 grammes</th>
                            <td>{{$el->tarif_251_500 == null ? 'не определено' : (($el->tarif_251_500).' €') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">501-750 grammes</th>
                            <td>{{$el->tarif_501_750 == null ? 'не определено' : (($el->tarif_501_750).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">751-1000 grammes</th>
                            <td>{{$el->tarif_751_1000 == null ? 'не определено' : (($el->tarif_751_1000).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">1001-2000 grammes</th>
                            <td>{{$el->tarif_1001_2000 == null ? 'не определено' : (($el->tarif_1001_2000).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">2001-5000 grammes</th>
                            <td>{{$el->tarif_2001_5000 == null ? 'не определено' : (($el->tarif_2001_5000).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">5001-10000 grammes</th>
                            <td>{{$el->tarif_5001_10000 == null ? 'не определено' : (($el->tarif_5001_10000).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">10001-15000 grammes</th>
                            <td>{{$el->tarif_10001_15000 == null ? 'не определено' : (($el->tarif_10001_15000).' €')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">15001-30000 grammes</th>
                            <td>{{$el->tarif_15001_30000 == null ? 'не определено' : $el->tarif_15001_30000.' €'}}</td>
                        </tr>
                    </tbody>
                </table>


                <a href="{{route('tarifs-edit', $el-> id)}}">
                    <button class="btn btn-success">
                        Редактировать</button>
                </a>
            </div>


            @endforeach
        @endif
    </div>
@endsection

