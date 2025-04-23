<?php

/* 
* Maksud dari file ini diperuntukkan untuk khusus mengelola logic pemrograman. 
* Supaya pada controller tidak terlalu banyak logic pemrograman yang ditulis.
* Dengan ini diharapkan controller lebih bersih dan mudah dibaca.
*/

namespace App\Http\Services;

use App\Models\Pokemon;


class PokemonService
{
    // Get all pokemons data from database
    public function getAllPokemons()
    {
        $allDataPokemons = Pokemon::all();
        // Mapping dan Callback function untuk menmodifikasi data
        $allDataPokemons = $allDataPokemons->map(function ($pokemon) {  
            // Alasan saya tidak menaruh percabangan di view adalah supaya logic pemrograman tidak bercampur dengan tampilan.
            // Agar tidak melanggar prinsip MVC (Model View Controller)
            // Serta agar menjaga code agar tetap bersih, mudah dibaca, dan mudah dalam proses maintenance.
            
            /* -- Modfikasi data weight */
            if ($pokemon->weight <= 200) {
                $pokemon->weight = $pokemon->weight . ' (Light)';
            } elseif ($pokemon->weight > 200 && $pokemon->weight <= 300) {
                $pokemon->weight = $pokemon->weight . ' (Medium)';
            } else {
                $pokemon->weight = $pokemon->weight . ' (Heavy)';
            }

            /* -- Modfikasi data base_experience */
            if ($pokemon->base_experience <= 100) {
                $pokemon->base_experience = $pokemon->base_experience . ' (Junior)';
            } else {
                $pokemon->base_experience = $pokemon->base_experience . ' (Professional)';
            }
            return $pokemon;
        });

        
        return $allDataPokemons;
    }
}
