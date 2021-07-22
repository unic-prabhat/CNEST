<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        User::create([
            
               'name' => 'admin',
               'email' => 'admin@admin.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 1
                
            ]);
              User::create([
            
               'name' => 'john Dee',
               'email' => 'john@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'emani',
               'email' => 'emani@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'smith',
               'email' => 'smith@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'jack',
               'email' => 'jack@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'bell',
               'email' => 'bell@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'max',
               'email' => 'max@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
              User::create([
            
               'name' => 'willam',
               'email' => 'willam@gmail.com',
               'password' => bcrypt('password'),
               'email_verified_at' => NOW(),
               'isAdmin' => 0
                
            ]);
        
    }
}
