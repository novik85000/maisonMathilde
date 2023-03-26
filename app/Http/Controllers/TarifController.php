<?php

namespace App\Http\Controllers;

use App\Models\DeliveryType;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function submit(Request $request)
    {
        $tarif = new DeliveryType();
        $tarif->name_fr = $request->input('name_fr');
        $tarif->name_en = $request->input('name_en');
        $tarif->tarif_0_250 = $request->input('tarif_0_250');
        $tarif->tarif_251_500 = $request->input('tarif_251_500');
        $tarif->tarif_501_750 = $request->input('tarif_501_750');
        $tarif->tarif_751_1000 = $request->input('tarif_751_1000');
        $tarif->tarif_1001_2000 = $request->input('tarif_1001_2000');
        $tarif->tarif_2001_5000 = $request->input('tarif_2001_5000');
        $tarif->tarif_5001_10000 = $request->input('tarif_5001_10000');
        $tarif->tarif_10001_15000 = $request->input('tarif_10001_15000');
        $tarif->tarif_15001_30000 = $request->input('tarif_15001_30000');

        $tarif->save();

        return redirect()-> route('home')-> with('success',  'OK');
    }

    public function allData(){
        $tarifs = DeliveryType::all();
        return view('tarifs-all',
            ['tarifs' => $tarifs]);
    }

    public function edit($id)
    {
        $tarif = new DeliveryType;

        return view('tarifs-edit', ['el' => $tarif->find($id)]);
    }

    public function update($id, Request $request){
        $tarif = DeliveryType::find($id);
        $tarif->name_fr = $request-> input('name_fr');
        $tarif->name_en = $request-> input('name_en');
        $tarif->tarif_0_250 = $request->input('tarif_0_250');
        $tarif->tarif_251_500 = $request->input('tarif_251_500');
        $tarif->tarif_501_750 = $request->input('tarif_501_750');
        $tarif->tarif_751_1000 = $request->input('tarif_751_1000');
        $tarif->tarif_1001_2000 = $request->input('tarif_1001_2000');
        $tarif->tarif_2001_5000 = $request->input('tarif_2001_5000');
        $tarif->tarif_5001_10000 = $request->input('tarif_5001_10000');
        $tarif->tarif_10001_15000 = $request->input('tarif_10001_15000');
        $tarif->tarif_15001_30000 = $request->input('tarif_15001_30000');

        $tarif->save();


        return redirect()-> route('home')-> with('success',  'OK');
    }

}
