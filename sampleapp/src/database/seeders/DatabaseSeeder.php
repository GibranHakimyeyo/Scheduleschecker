<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Schedules;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([RoleSeeder::class]);


        $this->seedUsers();
       
       
        $this->call([SchedulesSeeder::class]);



    }

    private function seedUsers(): void
    {

        $adminEmail = 'admin@admin.com';
        if(!User::where('email',$adminEmail)->exists()){
            $admin = User::create([
            

                'name'=> 'Admin',
                'email'=>$adminEmail,
                'password'=> bcrypt('password'),

            ]);
            $admin->assignRole('super_admin');

        }
            $mhsEmail = 'mhs@admin.com';
            if(!User::where('email',$mhsEmail)->exists()){
                $mhs = User::create([
                
    
                    'name'=> 'Mahasiswa',
                    'email'=>$mhsEmail,
                    'password'=> bcrypt('password'),
    
                ]);
                $mhs->assignRole('Mahasiswa');
    

        }

    
    }
}