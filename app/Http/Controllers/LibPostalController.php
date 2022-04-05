<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibPostalController extends Controller
{
    public function query(Request $request)
    {
        $query = $request->get('query');
        $parsed = \Postal\Parser::parse_address($query);

        return $parsed ?: null;
    }
}
