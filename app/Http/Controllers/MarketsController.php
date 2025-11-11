<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Market;

class MarketsController extends Controller
{
    
    public function index()
    {
        $markets = Market::all();
        return view('markets.index', compact('markets'));
    }

    
    public function create()
    {
        return view('markets.create');
    }

    
    public function store(Request $request)
    {
        Market::create($request->all());
        return redirect()->route('markets.index');
    }

    
    public function show($id)
    {
        $market = Market::findOrFail($id);
        return view('markets.show', compact('market'));
    }

    
    public function edit($id)
    {
        $market = Market::findOrFail($id);
        return view('markets.edit', compact('market'));
    }

    
    public function update(Request $request, $id)
    {
        $market = Market::findOrFail($id);
        $market->update($request->all());
        return redirect()->route('markets.index');
    }

    
    public function destroy($id)
    {
        $market = Market::findOrFail($id);
        $market->delete();
        return redirect()->route('markets.index');
    }
}
