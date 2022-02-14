<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Controllers\Admin\Controller;
use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use function view;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = [
            '<b>Fleshgod Apocalypse</b> - <em>Agony</em>',
            '<b>Ouroboros</b> - <em>Glorification of a Myth</em>',
            '<b>Rammstein</b> - <em>Liebe ist für alle da</em>',
            '<b>Children of Bodom</b> - <em>Are You Dead Yet?</em>'
        ];

        return view('admin.records.index', [
            'records' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Record  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        //
    }
}
