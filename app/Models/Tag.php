<?php

namespace App\Models;

class Tag extends Base
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function tagIndex()
    {
        $documents = self::orderBy('tag_name', 'ASC')->select('tags.*')->get();
        return $documents;
    }
}