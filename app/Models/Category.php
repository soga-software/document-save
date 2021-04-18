<?php

namespace App\Models;

class Category extends Base
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function categoryIndex()
    {
        $categories = self::orderBy('category_name', 'ASC')->select('categories.*')->get();
        return $categories;
    }
}