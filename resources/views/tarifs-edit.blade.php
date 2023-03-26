@extends('layouts.app')

@section('content')

    <form action="{{route('tarifs-edit', $el)}}" method="POST">
        @csrf
        <div class="col">
                <label for="name_fr">name_fr</label>
                <input type="text" value="{{$el-> name_fr}}" name="name_fr"> <br>
                <label for="name_en">name_en</label>
                <input type="text" value="{{$el-> name_en}}" name="name_en">

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
                                <td> <input type="number" step=".01" name="tarif_0_250" value="{{$el->tarif_0_250 == null ? '' : ($el->tarif_0_250)}}">   € </td>
                            </tr>
                            <tr>
                                <th scope="row">251-500 grammes</th>
                                <td><input type="number" step=".01" name="tarif_251_500" value="{{$el->tarif_251_500 == null ? '' : ($el->tarif_251_500)}}">  €</td>
                            </tr>
                            <tr>
                                <th scope="row">501-750 grammes</th>
                                <td><input type="number" step=".01" name="tarif_501_750" value="{{$el->tarif_501_750 == null ? '' : ($el->tarif_501_750)}}"> €</td>
                            </tr>
                                <th scope="row">751-1000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_751_1000" value="{{$el->tarif_751_1000 == null ? '' : ($el->tarif_751_1000)}}"> €</td>
                            </tr>
                            <tr>
                                <th scope="row">1001-2000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_1001_2000" value="{{$el->tarif_1001_2000 == null ? '' : ($el->tarif_1001_2000)}}"> €</td>
                            </tr>
                            <tr>
                                <th scope="row">2001-5000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_2001_5000" value="{{$el->tarif_2001_5000 == null ? '' : ($el->tarif_2001_5000)}}"> €</td>
                            </tr>
                            <tr>
                                <th scope="row">5001-10000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_5001_10000" value="{{$el->tarif_5001_10000 == null ? '' : ($el->tarif_5001_10000)}}"> €</td>
                            </tr>
                            <tr>
                                <th scope="row">10001-15000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_10001_15000" value="{{$el->tarif_10001_15000 == null ? '' : ($el->tarif_10001_15000)}}"> €</td>
                            </tr>
                            <tr>
                                <th scope="row">15001-30000 grammes</th>
                                <td><input type="number" step=".01" name="tarif_15001_30000" value="{{$el->tarif_15001_30000 == null ? '' : ($el->tarif_15001_30000)}}"> €</td>
                            </tr>
                            </tbody>
                            </table>


                            <a href="{{ url()->previous() }}">
                                <button class="btn btn-danger" type="button">
                                    Назад
                                </button>
                            </a>

                             <button type="submit" class="btn btn-success">
                                    Редактировать</button>


        </div>

    </form>
@endsection
