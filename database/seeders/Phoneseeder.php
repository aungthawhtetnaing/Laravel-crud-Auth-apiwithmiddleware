<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Phoneseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
         $phone=[
        [
            'number'=>'098888999',
            'user_id'=>1
        ],
        [
            'number'=>'098889990',
            'user_id'=>2
        ],
        [
            'number'=>'0988999990',
            'user_id'=>2
        ]
        
        ];
        foreach($phone as $val){
            Phone::create($val);
        }
    }
    
}
