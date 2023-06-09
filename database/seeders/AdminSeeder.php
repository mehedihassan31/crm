<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminsInfo = [
        ['name' => 'mehedi hassan','email' =>'admin@admin.com','email_verified_at' => now(),'password' => Hash::make('123#mehedi@hassan')],
        ['name' => 'Super Admin','email'=>'rabby.zaitunsoft@gmail.com','email_verified_at' => now(),'password' => Hash::make('@rabby#1234')],
        ['name' => 'user','email'=>'amiamitbolchi01@gmail.com','email_verified_at' => now(),'password' => Hash::make('12#amit12')],

        ];


        foreach ($adminsInfo as $admin) {
            User::updateOrInsert(
                ['name' => $admin['name']],
                $admin
            );
        }
        // $user = User::whereEmail('mehedi@easytrax.com.bd')->first();
        // if(!$user){
        //     User::create([
        //         'name' => 'Super Admin',
        //         'email' => 'mehedi@easytrax.com.bd',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('#e@sytr@x#2023')
        //     ]);
        // }else{
        //     $user->update([
        //         'name' => 'Super Admin',
        //         'email' => 'mehedi@easytrax.com.bd',
        //         'email_verified_at' => now(),
        //         'password' => bcrypt('#e@sytr@x#2023')
        //     ]);
        // }
    }
}
