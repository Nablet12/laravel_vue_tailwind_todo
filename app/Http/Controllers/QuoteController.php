<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function index() {
        $quotes = Quote::all();
        return view('quote.index', compact('quotes'));
    }

    public function create() {
        return view('quote.create');
    }

    public function store(Request $request) {
        $quote = Quote::create($request->all());
        return redirect('quote');
    }

    public function show($id) {
        $quote = Quote::find($id);
        return view('quote.show', compact('quote'));
    }

    public function edit($id) {
        $quote = Quote::find($id);
        return view('quote.edit', compact('quote'));
    }

    public function update(Request $request, $id) {
        $quote = Quote::find($id);
        $quote -> update($request -> all());
        return redirect('quote/'.$quote->id);
    }

    public function destroy($id) {
        Quote::find($id)->delete();
        return redirect('quote');
    }
}
