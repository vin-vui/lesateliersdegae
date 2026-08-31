<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->seedAdmin();

        $this->call([
            EventSeeder::class,
        ]);
    }

    /**
     * Crée le compte du back-office s'il n'existe pas déjà.
     *
     * Le mot de passe du serveur d'origine n'est pas récupérable. Il est donc
     * repris depuis SEED_ADMIN_PASSWORD si la variable est définie, sinon un
     * mot de passe aléatoire est généré et affiché une seule fois dans la
     * console. Dans les deux cas, il est à changer dès la première connexion.
     */
    private function seedAdmin(): void
    {
        $email = 'bonjour@lesateliersdegae.fr';

        if (User::where('email', $email)->exists()) {
            $this->command?->info("Le compte {$email} existe déjà, il n'a pas été modifié.");

            return;
        }

        $password = env('SEED_ADMIN_PASSWORD') ?: Str::password(24);

        User::create([
            'name' => 'Gaëtane',
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($password),
            'remember_token' => Str::random(10),
        ]);

        if (! env('SEED_ADMIN_PASSWORD')) {
            $this->command?->warn("Mot de passe temporaire de {$email} : {$password}");
            $this->command?->warn('À noter maintenant, il ne sera plus affiché, et à changer dès la première connexion.');
        }
    }
}
