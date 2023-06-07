<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phone=[
            [
               
                'name'=>'admin'
            ],
            [
                'name'=>'user'
            ],
            [
                'name'=>'admin'
            ]
            
            ];
            foreach($phone as $val){
                Role::create($val);
            }
    }
}
