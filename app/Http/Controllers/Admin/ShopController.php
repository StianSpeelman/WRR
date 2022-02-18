<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\Genre;
//use Facades\App\Helpers\Json;

class ShopController extends Controller
{
    public function index()
    {
        $records = Record::all();
        $genres = Genre::all();
        return view('shop.index', ['records' => $records, 'genres' => $genres]);
    }

    public function show($id)
    {
        return "Details for record $id";
    }
}
