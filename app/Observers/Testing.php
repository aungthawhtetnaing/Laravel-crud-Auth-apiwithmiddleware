<?php

namespace App\Observers;

use App\Models\Post;

class Testing
{
    public function created(Post $post){
        dd($post);
    }
}
