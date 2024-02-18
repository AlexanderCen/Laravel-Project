<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => "Welly",
                'email' => "admin@admin.com",
                'role' => "admin",
                'password' => Hash::make("tongkol"),
            ],
        ]);
    }
}
