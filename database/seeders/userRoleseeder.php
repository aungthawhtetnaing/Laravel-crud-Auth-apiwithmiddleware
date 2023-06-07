<?php

namespace Database\Seeders;

use App\Models\userRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userRoleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phone=[
            [
               
                'user_id'=>1,
                'role_id'=>1
            ],
            [
                'user_id'=>1,
                'role_id'=>2
            ],
            [
                'user_id'=>2,
                'role_id'=>1
            ]
            
            ];
            foreach($phone as $val){
                userRole::create($val);
            }
    }
}
