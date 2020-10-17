<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerSeries extends Controller {

    public function index() {

        $properties = DB::select('SELECT * FROM serieslara');

        return view('index')->with('properties', $properties);
    }

    public function create() {

        return view('create');
    }

    public function restrict(Request $request) {

        $property = [
            $request->serie_name,
            $request->description,
            $request->seasons,
            $request->available
        ];

        DB::insert('INSERT INTO serieslara (name_series, description, seasons, available) VALUES(?,?,?,?)', $property);

        return redirect('/series');
    }
}