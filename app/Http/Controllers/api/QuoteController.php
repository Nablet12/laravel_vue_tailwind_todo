<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index() {
        return response(Quote::select('quote')->get(), 200);
    }

    public function store(Request $request) {
        $quote = Quote::create($request->only('quote'));
        return response(compact('quote'), 201);
    }

    public function update($id, Request $request) {
        $quote = Quote::find($id);
        return [
            $quote,
            $request -> only('quote')
        ];
        $quote -> update($request->only('quote'));
        return response('Success',201);
    }

    public function delete($id) {
        $quote = Quote::find($id);
        $quote->delete();
        return response('Deleted', 201);
    }
}