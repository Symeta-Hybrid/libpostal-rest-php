<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LibPostalController extends Controller
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function parse(Request $request): JsonResponse
    {
        $query = $request->get('query');
        $parsed = \Postal\Parser::parse_address((string)$query);

        return response()->json($parsed);
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function expand(Request $request): JsonResponse
    {
        $query = $request->get('query');
        $expansions = \Postal\Expand::expand_address((string)$query);

        return response()->json($expansions);
    }
}
