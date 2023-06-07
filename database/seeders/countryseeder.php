<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phone=[
            [
               
                'name'=>'Japan'
            ],
            [
                'name'=>'Myanmar'
            ],
            [
                'name'=>'Korea'
            ]
            
            ];
            foreach($phone as $val){
                Country::create($val);
            }
    }
}
