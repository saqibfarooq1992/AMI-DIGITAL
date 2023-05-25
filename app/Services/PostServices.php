<?php

namespace App\Services;
use App\Traits\Jsonify;
use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class PostServices
{
    use Jsonify;

    

    public function run($usd)
    {
        try {
           return $usd;
        } catch (Exception $exception) {

        }
    }
   
}
