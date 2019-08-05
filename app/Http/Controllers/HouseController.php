<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Resources\House as HouseResource;
use App\Http\Resources\HouseCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index() {
        return new HouseCollection(House::all());
    }

    public function search(Request $request) {

        $query = DB::table('houses');

        $search_name = $request->get('name');
        $price_less = $request->get('price_less');
        $price_more = $request->get('price_more');
        $bedrooms = $request->get('bedrooms');
        $bathrooms = $request->get('bathrooms');
        $storeys = $request->get('storeys');
        $garages = $request->get('garages');

        if($search_name != null) {
          $query->where('name', 'like', "%{$search_name}%");
        }
        if($price_less != null) {
          $query->where('price', '<=', (int)$price_less);
        }
        if($price_more != null) {
          $query->where('price', '>=', (int)$price_more);
        }
        if($bedrooms != null) {
          $query->where('bedrooms', '=', (int)$bedrooms);
        }
        if($bathrooms != null) {
          $query->where('bathrooms', '=', (int)$bathrooms);
        }
        if($storeys != null) {
          $query->where('storeys', '=', (int)$storeys);
        }
        if($garages != null) {
          $query->where('garages', '=', (int)$garages);
        }

        $houses = $query->get();
        return response()->json($houses);
    }
}
