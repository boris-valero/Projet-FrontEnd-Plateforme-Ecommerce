<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Commande 1
        DB::table('commands')->insert([
            'command_date' => '2024-07-01',
            'user_id' => 3, // ID de l'utilisateur Eva Brown
            'product_id' => 3, // ID du Lit double moderne
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Commande 2
        DB::table('commands')->insert([
            'command_date' => '2024-07-02',
            'user_id' => 4, // ID de l'utilisateur Michael White
            'product_id' => 4, // ID de l'Armoire à portes coulissantes
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Commande 3
        DB::table('commands')->insert([
            'command_date' => '2024-07-03',
            'user_id' => 1, // ID de l'utilisateur Alice Johnson
            'product_id' => 5, // ID de la Table à manger extensible
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Commande 4
        DB::table('commands')->insert([
            'command_date' => '2024-07-04',
            'user_id' => 2, // ID de l'utilisateur Bob Smith
            'product_id' => 1, // ID du Canapé convertible
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Commande 5
        DB::table('commands')->insert([
            'command_date' => '2024-07-05',
            'user_id' => 5, // ID de l'utilisateur Sophie Green
            'product_id' => 2, // ID du Bureau ergonomique
            'created_at' => now(),
            'updated_at' => now(),
        ]);

         // Commande 6
         DB::table('commands')->insert([
            'command_date' => '2024-06-28',
            'user_id' => 1, // Remplace avec l'ID d'un utilisateur existant
            'product_id' => 1, // Remplace avec l'ID d'un produit existant
            'created_at' => now(),
            'updated_at' => now(),
        ]);

               // Commande 7
        DB::table('commands')->insert([
            'command_date' => '2024-06-29',
            'user_id' => 2, // ID de l'utilisateur Jane Smith
            'product_id' => 2, // ID de la Chaise de salle à manger
            'created_at' => now(),
            'updated_at' => now(),
        ]);
             // Commande 8
        DB::table('commands')->insert([
        'command_date' => now(),
        'user_id' => 8, // ID de l'utilisateur existant
        'product_id' => 1, // ID du produit existant
        'created_at' => now(),
        'updated_at' => now(),
    ]);
           // Commande 9
        DB::table('commands')->insert([
        'command_date' => now(),
        'user_id' => 9,
        'product_id' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
           // Commande 10
        DB::table('commands')->insert([
        'command_date' => now(),
        'user_id' => 10,
        'product_id' => 3,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
           // Commande 11
        DB::table('commands')->insert([
        'command_date' => now(),
        'user_id' => 11,
        'product_id' => 4,
        'created_at' => now(),
        'updated_at' => now(),
        ]);
          // Commande 12
        DB::table('commands')->insert([
        'command_date' => now(),
        'user_id' => 12,
        'product_id' => 5,
        'created_at' => now(),
        'updated_at' => now(),
    
    ]);
    }
}
