<?php

namespace App\Models;

use Illuminate\Http\Request;

class Document extends Base
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'documents';

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function documentIndex()
    {
        $documents = self::join('categories', 'categories.id', 'documents.category_id')
            ->orderBy('documents.name', 'ASC')
            ->select('documents.*', 'categories.category_name')
            ->paginate(50);

        return $documents;
    }

    /**
     * Get a listing of the resource with conditions.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return
     */
    public static function documentSearch(Request $request)
    {
        $paramSeach = array();
        if (0 != $request->categoryId) {
            $paramSeach[] = array('categories.id', $request->categoryId);
        }
        if ('' != $request->tagId) {
            $paramSeach[] = array('documents.tag', 'LIKE', "%" . $request->tagId . "%");
        }
        $documents = self::join('categories', 'categories.id', 'documents.category_id')
            ->where($paramSeach)
            ->orderBy('documents.name', 'ASC')
            ->select('documents.*', 'categories.category_name')
            ->paginate(50);

        return $documents;
    }

    public static function setDocument(Request $request)
    {
        $tags = '';
        // dd($request->all());
        dd($request->all());
        foreach ($request->tag_id as $tag) {
            $tags .= $tag . ",";
        }
        $isInserted = self::insert([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'tag' => $tags,
            'type' => $request->type,
            'link' => $request->link,
            'note' => $request->note,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return $isInserted;
    }

    public static function updateDocument()
    {
    }

    public static function deleteDocument()
    {
    }
}