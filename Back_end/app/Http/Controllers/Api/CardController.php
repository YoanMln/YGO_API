<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCardRequest;
use Illuminate\Http\Request;
use App\Models\Card;
use App\Http\Resources\CardResources;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Card::with([
            'type',
            'attribute',
            'monsterType',
            'monsterPrimaryType',
            'monsterSecondaryType',
            'monsterTertiaryType',
            'spellType',
            'trapType'
        ]);


        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // ATTRIBUTE //
        if ($request->filled('attribute')) {
            $query->whereHas(
                'attribute',
                fn($q) =>
                $q->where('name', $request->attribute)
            );
        }

        // TYPE //
        if ($request->filled('type')) {

            $filters = [

                // MONSTERS //
                'Normal' => [
                    'type' => 'Monstre',
                    'monsterPrimaryType' => 'Normal'
                ],
                'Effet' => [
                    'type' => 'Monstre',
                    'monsterPrimaryType' => 'Effet'
                ],
                'Fusion' => [
                    'type' => 'Monstre',
                    'monsterSecondaryType' => 'Fusion'
                ],
                'Xyz' => [
                    'type' => 'Monstre',
                    'monsterSecondaryType' => 'Xyz'
                ],
                'Lien' => [
                    'type' => 'Monstre',
                    'monsterSecondaryType' => 'Lien'
                ],

                // SPELL //
                'spell_continue' => [
                    'type' => 'Magie',
                    'spellType' => 'Continue'
                ],
                'spell_speed' => [
                    'type' => 'Magie',
                    'spellType' => 'Rapide'
                ],
                'field_spell' => [
                    'type' => 'Magie',
                    'spellType' => 'Terrain'
                ],
                'ritual_spell' => [
                    'type' => 'Magie',
                    'spellType' => 'Rituelle'
                ],

                // TRAP //
                'trap_continue' => [
                    'type' => 'Piège',
                    'trapType' => 'Continue'
                ],
                'counter_trap' => [
                    'type' => 'Piège',
                    'trapType' => 'Contre'
                ],
            ];

            $type = $request->type;

            if (isset($filters[$type])) {

                foreach ($filters[$type] as $relation => $value) {

                    if ($relation === 'type') {
                        $query->whereHas('type', fn($q) => $q->where('name', $value));
                    } else {
                        $query->whereHas($relation, fn($q) => $q->where('name', $value));
                    }
                }
            } else {
                $query->whereHas('type', fn($q) => $q->where('name', $type));
            }
        }

        return CardResources::collection($query->paginate(20));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCardRequest $request)
    {
        $validated = $request->validated();

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
