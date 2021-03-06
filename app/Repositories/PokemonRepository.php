<?php

namespace App\Repositories;

use App\User;
use Illuminate\Http\Request;
use App\Pokemon;
use App\Http\Requests;
class PokemonRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */

   
    public function getPokemon()
    {
        $pokemons = Pokemon::orderBy('created_at', 'asc')->get();
        return  $pokemons;
    }
}