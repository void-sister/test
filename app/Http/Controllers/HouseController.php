<?php

namespace App\Http\Controllers;

use App\House;
use App\Http\Resources\House as HouseResource;
use App\Http\Resources\HouseCollection;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return new HouseCollection(House::all());
    }
}
