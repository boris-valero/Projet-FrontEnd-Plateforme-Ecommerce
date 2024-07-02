<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Produit 1
        DB::table('products')->insert([
            'id'=>'1',
            'name' => 'Canapé convertible',
            'dimension' => '180x80x90 cm',
            'material' => 'Tissu et bois',
            'color' => 'Gris',
            'description' => 'Canapé moderne convertible en tissu gris.',
            'price' => 499.99,
            'picture' => 'storage/products/canape-convertible.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Produit 2
        DB::table('products')->insert([
            'id'=>'2',
            'name' => 'Bureau ergonomique',
            'dimension' => '120x60x75 cm',
            'material' => 'Bois et métal',
            'color' => 'Blanc',
            'description' => 'Bureau ergonomique en bois et métal blanc.',
            'price' => 249.99,
            'picture' => 'storage/products/bureau-ergonomique.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Produit 3
        DB::table('products')->insert([
            'id'=>'3',
            'name' => 'Lit double moderne',
            'dimension' => '200x160x40 cm',
            'material' => 'Bois et simili-cuir',
            'color' => 'Noir',
            'description' => 'Lit double moderne en bois et simili-cuir noir.',
            'price' => 699.99,
            'picture' => 'storage/products/lit-double-moderne.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Produit 4
        DB::table('products')->insert([
            'id'=>'4',
            'name' => 'Armoire à portes coulissantes',
            'dimension' => '180x120x50 cm',
            'material' => 'MDF et verre',
            'color' => 'Chêne naturel',
            'description' => 'Armoire spacieuse à portes coulissantes en MDF et verre.',
            'price' => 899.99,
            'picture' => 'storage/products/armoire-portes-coulissantes.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Produit 5
        DB::table('products')->insert([
            'id'=>'5',
            'name' => 'Table à manger extensible',
            'dimension' => '160x90x75 cm (220 cm étendue)',
            'material' => 'Bois massif',
            'color' => 'Chêne foncé',
            'description' => 'Table à manger extensible en bois massif, chêne foncé.',
            'price' => 799.99,
            'picture' => 'storage/products/table-manger-extensible.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Produit 6
          DB::table('products')->insert([
            'id'=>'6',
            'name' => 'Table basse',
            'dimension' => '100x50x30 cm',
            'material' => 'Bois',
            'color' => 'Brun',
            'description' => 'Table basse élégante en bois massif.',
            'price' => 149.99,
            'picture' => 'storage/products/table-basse.jpg', // Exemple de chemin d'image
            'created_at' => now(),
            'updated_at' => now(),
        ]);

          // Produit 7
        DB::table('products')->insert([
            'id'=>'7',
            'name' => 'Chaise de salle à manger',
            'dimension' => '40x40x90 cm',
            'material' => 'Métal et cuir synthétique',
            'color' => 'Noir',
            'description' => 'Chaise moderne pour salle à manger.',
            'price' => 79.99,
            'picture' => 'storage/products/chaise-salle-a-manger.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
          // Produit 8
        DB::table('products')->insert([
    
        'name' => 'Table en chêne',
        'dimension' => '120x80x75 cm',
        'material' => 'Chêne',
        'color' => 'Marron',
        'description' => 'Table de salle à manger en chêne massif.',
        'price' => 249.99,
        'created_at' => now(),
        'updated_at' => now(),
        ]);
      // Produit 9
        DB::table('products')->insert([
    
        'name' => 'Canapé convertible',
        'dimension' => '200x100x80 cm',
        'material' => 'Tissu',
        'color' => 'Gris',
        'description' => 'Canapé 3 places convertible en lit.',
        'price' => 599.99,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
      // Produit 10
        DB::table('products')->insert([
    
        'name' => 'Bureau moderne',
        'dimension' => '150x70x75 cm',
        'material' => 'Bois et métal',
        'color' => 'Noir',
        'description' => 'Bureau avec structure en métal et plateau en bois.',
        'price' => 349.99,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
      // Produit 11
        DB::table('products')->insert([
    
        'name' => 'Lit double',
        'dimension' => '180x200 cm',
        'material' => 'Bois',
        'color' => 'Blanc',
        'description' => 'Lit double avec tête de lit rembourrée.',
        'price' => 799.99,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
      // Produit 12
        DB::table('products')->insert([
    
        'name' => 'Fauteuil en cuir',
        'dimension' => '100x90x100 cm',
        'material' => 'Cuir véritable',
        'color' => 'Marron foncé',
        'description' => 'Fauteuil confortable en cuir véritable.',
        'price' => 499.99,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
