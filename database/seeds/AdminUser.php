<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = User::create([
        'email' => 'admin@admin.com',
        'password' => bcrypt('secret')
  
        ]);
    }
}
