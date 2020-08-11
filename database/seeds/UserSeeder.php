<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nguyễn Thị Hoa',
            'email' => 'a@a.com',
            'password' => Hash::make('123456')
        ]);
        User::create([
            'name' => 'Trần Văn B',
            'email' => 'b@b.com',
            'password' => Hash::make('123456')
        ]);
    }
}
