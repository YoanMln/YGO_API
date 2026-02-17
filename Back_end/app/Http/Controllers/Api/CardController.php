<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Card::with('type', 'monsterType')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'type_id' => 'required|exists:types,id',
            'image' => 'nullable|image|max:2048',
            'attribute' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cards', 'public');
            $validated['image'] = $path;
        }

        return Card::create($validated)->load('type');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return $card->load('type');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $card = Card::findOrFail($id);

        $validated = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'type_id' => 'exists:types,id',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('cards', 'public');
            $validated['image'] = $path;
        }


        $card->update($validated);
        return $card->load('type');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Card::destroy($id);
        return response()->noContent();
    }
}
