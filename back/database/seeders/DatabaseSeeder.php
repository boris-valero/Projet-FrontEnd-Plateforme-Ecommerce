<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // User::factory(10)->create();

        User::factory()->create([

        [
            'name' => 'Johnson',
            'firstname' => 'Alice',
            'email' => 'alice.johnson@example.com',
            'address' => '789 Oak St, New Town',
            'password' => Hash::make('password123'),
            'email_verified_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => Str::random(10)
        ],
        // [
        //     'id'=>'2',
        //     'name' => 'Smith',
        //     'firstname' => 'Bob',
        //     'email' => 'bob.smith@example.com',
        //     'address' => '456 Pine St, Another Town',
        //     'password' => Hash::make('password456'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],
        // [
        //     'id'=>'3',
        //     'name' => 'Brown',
        //     'firstname' => 'Eva',
        //     'email' => 'eva.brown@example.com',
        //     'address' => '321 Maple St, Smallville',
        //     'password' => Hash::make('password789'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],[
        //     'id'=>'4',
        //     'name' => 'White',
        //     'firstname' => 'Michael',
        //     'email' => 'michael.white@example.com',
        //     'address' => '555 Cedar St, Little Town',
        //     'password' => Hash::make('passwordabc'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],
        // [
        //     'id'=>'5',
        //     'name' => 'Green',
        //     'firstname' => 'Sophie',
        //     'email' => 'sophie.green@example.com',
        //     'address' => '888 Birch St, Tiny Town',
        //     'password' => Hash::make('passwordxyz'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],
        // [
        //     'id'=>'6',
        //     'name' => 'Doe',
        //     'firstname' => 'John',
        //     'email' => 'john@example.com',
        //     'address' => '123 Main St, Anytown',
        //     'password' => Hash::make('password'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],[
        //     'id'=>'7',
        //     'name' => 'Smith',
        //     'firstname' => 'Jane',
        //     'email' => 'jane.smith@example.com',
        //     'address' => '456 Elm St, Another Town',
        //     'password' => Hash::make('password123'),
        //     'email_verified_at' => null,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'remember_token' => Str::random(10),
        // ],
        // [
    
        // 'id' => 8,
        // 'name' => 'Johnson',
        // 'firstname' => 'Alice',
        // 'email' => 'alice.johnson@example.com',
        // 'address' => '789 Oak St, New Town',
        // 'password' => Hash::make('password123'),
        // 'email_verified_at' => null,
        // 'created_at' => now(),
        // 'updated_at' => now(),
        // 'remember_token' => Str::random(10),
        // ],
        // [
        // 'id' => 9,
        // 'name' => 'Smith',
        // 'firstname' => 'Bob',
        // 'email' => 'bob.smith@example.com',
        // 'address' => '456 Pine St, Another Town',
        // 'password' => Hash::make('password456'),
        // 'email_verified_at' => null,
        // 'created_at' => now(),
        // 'updated_at' => now(),
        // 'remember_token' => Str::random(10),
        // ],
        // [
        // 'id' => 10,
        // 'name' => 'Brown',
        // 'firstname' => 'Eva',
        // 'email' => 'eva.brown@example.com',
        // 'address' => '321 Maple St, Smallville',
        // 'password' => Hash::make('password789'),
        // 'email_verified_at' => null,
        // 'created_at' => now(),
        // 'updated_at' => now(),
        // 'remember_token' => Str::random(10),
        // ],
        // [
        // 'id' => 11,
        // 'name' => 'White',
        // 'firstname' => 'Michael',
        // 'email' => 'michael.white@example.com',
        // 'address' => '555 Cedar St, Little Town',
        // 'password' => Hash::make('passwordabc'),
        // 'email_verified_at' => null,
        // 'created_at' => now(),
        // 'updated_at' => now(),
        // 'remember_token' => Str::random(10),
        // ],
        // [
        // 'id' => 12,
        // 'name' => 'Green',
        // 'firstname' => 'Sophie',
        // 'email' => 'sophie.green@example.com',
        // 'address' => '888 Birch St, Tiny Town',
        // 'password' => Hash::make('passwordxyz'),
        // 'email_verified_at' => null,
        // 'created_at' => now(),
        // 'updated_at' => now(),
        // 'remember_token' => Str::random(10),
        // ]
        ]);
    }
}