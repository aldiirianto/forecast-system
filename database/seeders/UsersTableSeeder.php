<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;//model table users

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Aldi Irianto';
        $inputan['email'] = 'aldi999@gmail.com';//ganti pake emailmu
        $inputan['password'] = bcrypt('123258');//passwordnya 123258
        $inputan['phone'] = '085852527575';        
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);

    }
}
