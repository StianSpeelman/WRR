<?php

namespace app/http/controllers/admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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
}
