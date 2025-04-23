<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Pokemon;
use App\Models\Ability;

class FetchPokemonData extends Command
{
    protected $signature = 'fetch:pokemon';
    protected $description = 'Ambil data pokemon dari API dan simpan ke database';

    public function handle()
    {
        $this->info('Memulai fetch data Pokémon...');

        for ($id = 1; $id <= 200; $id++) {
            $this->info("Fetching data for Pokémon ID: $id");

            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

            if ($response->failed()) {
                $this->error("Gagal ambil data untuk ID: $id");
                continue;
            }

            $data = $response->json();

            // Filter: berat >= 100
            if ($data['weight'] < 100) {
                $this->info("Skip Pokémon ID: $id karena berat < 100");
                continue;
            }

            // Hitung stat_count: jumlah stat dengan effort > 1
            $stat_count = collect($data['stats'])->filter(function ($stat) {
                return $stat['effort'] > 1;
            })->count();

            // Filter: stat_count > 0
            if ($stat_count === 0) {
                $this->info("Skip Pokémon ID: $id karena stat_count = 0");
                continue;
            }

            $pokemon = Pokemon::updateOrCreate(
                ['name' => $data['name']],
                [
                    'base_experience' => $data['base_experience'],
                    'weight' => $data['weight'],
                    'stat_count' => $stat_count,
                    'image_url' => $data['sprites']['front_default'],
                ]
            );

            // Hapus ability lama
            $pokemon->abilities()->delete();

            foreach ($data['abilities'] as $ability) {
                if (!$ability['is_hidden']) {
                    $pokemon->abilities()->create([
                        'name' => $ability['ability']['name'],
                    ]);
                }
            }
        }

        $this->info('Selesai menyimpan data Pokémon ke database.');
    }
}
