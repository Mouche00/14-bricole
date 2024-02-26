<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Artisan;
use App\Models\Client;
use App\Models\Competance;
use App\Models\Domain;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'client']);
        Role::create(['name' => 'artisan']);

        $admin = Admin::factory()->create();
        $admin->user()->first()->assignRole('admin');

        $artisan = Artisan::factory()->create();
        $artisan->user()->first()->assignRole('artisan');

        $client = Client::factory()->create();
        $client->user()->first()->assignRole('client');

        $domains = ['charpentier', 'électricien', 'plombier', 'maçon', 'peintre', 'jardinier'];

        foreach($domains as $domain) {
            $domain_id = Domain::create(['nom' => $domain]);
            Competance::factory(5)->create([
                'domain_id' => $domain_id
            ]);
        }
    }
}