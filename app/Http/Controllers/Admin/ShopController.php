<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Facades\App\Helpers\Json;

class ShopController extends Controller
{
    public function index()
    {
//        $genres = Genre::get();
        $records = Record::get();           // get all records
        $result = compact('records');
//        $records = Record::with('genres')->paginate(12);
        foreach ($records as $record) {
            $record->cover = $record->cover ?? "https://coverartarchive.org/release/{$record->title_mbid}/front-250.jpg";
        }
//        $genres = Genre::orderBy('name')            // short version of orderBy('name', 'asc')
//        ->get();
//        $result = compact('genres', 'records');
        $JSON = new Json();
        $JSON->dump($result);
        return view('shop/index', $result);
    }

    public function show($id)
    {
        return "Details for record $id";
    }
}
