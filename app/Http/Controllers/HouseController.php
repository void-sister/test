<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Resources\House as HouseResource;
use App\Http\Resources\HouseCollection;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index() {
        return new HouseCollection(House::paginate());
    }

    public function search(Request $request) {
        $search_name = $request->get('name');
        $price_less = $request->get('price_less');
        $price_more = $request->get('price_more');
        $bedrooms = (int)$request->get('bedrooms');
        $bathrooms = (int)$request->get('bathrooms');
        $storeys = (int)$request->get('storeys');
        $garages = (int)$request->get('garages');

        return House::where('name', 'like', "%{$search_name}%")
                    ->whereBetween('price', [$price_more, $price_less])
                    ->where('bedrooms', '=', $bedrooms)
                    ->where('bathrooms', '=', $bathrooms)
                    ->where('storeys', '=', $storeys)
                    ->where('garages', '=', $garages)
                    ->get();
    }
}
