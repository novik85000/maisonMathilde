@extends('layouts.app')

@section('content')


    <form action="{{route('tarif-add')}}" method="post">
        @csrf
        <div class="col">
                <label for="name_fr" class="form-label">Name fran</label>
                <input type="text" class="form-control"  name="name_fr" step="0.01">
            </div>
            <div class="row">
                <label for="name_en" class="form-label">Название en</label>
                <input type="text" class="form-control"  name="name_en" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_0_250" class="form-label">Tarif 0 - 250g (euro)</label>
                <input type="number" class="form-control"  name="tarif_0_250" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_251_500" class="form-label">tarif_251-500 (euro)</label>
                <input type="number" class="form-control"  name="tarif_251_500" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_501_750" class="form-label">tarif_501-750 (euro)</label>
                <input type="number" class="form-control"  name="tarif_501_750" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_751_1000" class="form-label">tarif_751-1000 (euro)</label>
                <input type="number" class="form-control"  name="tarif_751_1000" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_1001_2000" class="form-label"> tarif_1001-2000 (euro) </label>
                <input type="number" class="form-control"  name="tarif_1001_2000" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_2001_5000" class="form-label">tarif_2001-5000</label>
                <input type="number" class="form-control"  name="tarif_2001_5000" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_5001_10000" class="form-label">tarif_5001-10000 (euro)</label>
                <input type="number" class="form-control"  name="tarif_5001_10000" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_10001_15000" class="form-label">tarif_10001-15000 (euro)</label>
                <input type="number" class="form-control"  name="tarif_10001_15000" step="0.01">
            </div>

            <div class="row">
                <label for="tarif_15001_30000" class="form-label">tarif_15001-30000 (euro)</label>
                <input type="number" class="form-control"  name="tarif_15001_30000" step="0.01">
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection
