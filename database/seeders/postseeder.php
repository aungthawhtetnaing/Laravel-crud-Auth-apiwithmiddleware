<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phone=[
            [
               
                'title'=>'Post1',
                'user_id'=>1
            ],
            [
                'title'=>'Post2',
                'user_id'=>2
            ],
            [
                'title'=>'Post1',
                'user_id'=>3
            ]
            
            ];
            foreach($phone as $val){
                Post::create($val);
            }
    }
}
