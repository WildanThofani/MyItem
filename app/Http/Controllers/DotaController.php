<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dota;
use Validator;

class DotaController extends Controller
{
    function index(){
        $dota = Dota::get(['id', 'itemname', 'price', 'image', 'seller', 'phone']);
        return view('dota.index', compact('dota'));
    }

    function indexApi() {
        $dota = Dota::get(['id', 'itemname', 'price', 'image', 'seller', 'phone']);
        return response()->json($dota);
    }

    function create(){
        return view('dota.create');
    }

    public function store(Request $request) {


        // $validator = Validator::make($request->all(),[
        //     'txt_id' => 'required|string|max:10',
        //     'txt_name' => 'required|string|max:20',
        //     'txt_address' => 'required|string|max:50',
        // ])->validate();
        
        $txtId = $request->input('$txt_id');
        $txtItemName = $request->input('$txt_itemname');
        $txtPrice = $request->input('$txt_prize');
        $txtImage = $request->input('$txt_image');
        $txtSeller = $request->input('$txt_seller');
        $txtPhone = $request->input('$txt_phone');

        Dota::create([
            'id' => $txtId,
            'item_name' => $txtItemName,
            'price' => $txtPrice,
            'image' => $txtImage,
            'seller' => $txtSeller,
            'phone' => $txtPhone,
        ]); 
        return redirect('/Dota');
    }

    public function storeApi(Request $request) {

        Customer::create([
            'id' => $txtId,
            'item_name' => $txtItemName,
            'price' => $txtPrice,
            'image' => $txtImage,
            'seller' => $txtSeller,
            'phone' => $txtPhone,
        ]); 
        return "masuk pak eko";
    }

    public function show($id){
        $dota = Dota::where('id', $id)->get();
        return view('dota.show', compact('dota'));

    }

    public function showApi($id){
        $dota = Dota::where('id', $id)->get();
        return response()->json($dota);

    }

    public function edit($id){
       $dota = Dota::where('id', $id)->get();
       return view('dota.edit', compact('dota'));
    }
    public function update(Request $request, $id){
        $txtId = $request->input('txt_id');
        $txtItemName = $request->input('txt_itemname');
        $txtPrice = $request->input('txt_price');
        $txtImage = $request->input('txt_image');
        $txtSeller = $request->input('txt_seller');
        $txtPhone = $request->input('txt_phone');

        Dota::where('id',$id)->update([
            'id' => $txtId,
            'item_name' => $txtItemName,
            'price' => $txtPrice,
            'image' => $txtImage,
            'seller' => $txtSeller,
            'phone' => $txtPhone
        ]);
        
        return redirect('/Dota');
    }
    public function destroy($id)
    {
        $dota = Dota::where('id',$id)->first();
        $dota->delete();
        return redirect('/Dota');
    }

}
