<?php

namespace App\Services;
use App\Traits\Jsonify;
use Exception;
use App\Models\Post;
class PostServices2 extends BaseServices
{
    use Jsonify;

    /**
     * constructor function
     *
     * @param  Post  $model
     */
    public function __construct(Post $model)
    {
        parent::__construct($model);
    }

    public function run($usd)
    {
        try {
           dd($usd);
            
            return self::jsonSuccess('Data Retrieved Successfully!');
        } catch (Exception $exception) {

            return self::jsonError($exception->getMessage());
        }
    }
   
}
