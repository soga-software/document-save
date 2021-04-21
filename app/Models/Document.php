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
        $documents = self
            ::leftJoin('categories', 'categories.id', 'documents.category_id')
            ->where('documents.deleted_at', null)
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
        $sqlQuery = self::join('categories', 'categories.id', 'documents.category_id');
        if ('' != $request->name) {
            $sqlQuery->where('documents.name', $request->name);
        }
        if (0 != $request->category_id) {
            $sqlQuery->where('categories.id', $request->category_id);
        }
        if (!empty($request->tag_id)) {
            if (sizeof($request->tag_id) == 1) {
                $sqlQuery->where('documents.tag', 'LIKE', "%" . $request->tag_id[0] . "%");
            } else {
                $sqlQuery->where(function ($query) use ($request) {
                    foreach ($request->tag_id as $key => $tag) {
                        if ($key == 0) {
                            $query->where('documents.tag', 'LIKE', "%" . $tag . "%");
                        } else {
                            $query->orWhere('documents.tag', 'LIKE', "%" . $tag . "%");
                        }
                    }
                });
            }
        }
        $documents = $sqlQuery
            ->where('documents.deleted_at', null)
            ->orderBy('documents.name', 'ASC')
            ->select('documents.*', 'categories.category_name')
            ->paginate(50);

        return $documents;
    }

    public static function setDocument(Request $request)
    {
        $tags = '';
        foreach ($request->tag_id_add as $tag) {
            $tags .= $tag . ",";
        }
        $isInserted = self::insert([
            'name' => $request->name_add,
            'category_id' => $request->category_id_add,
            'tag_id' => $tags,
            'type' => $request->type_add,
            'link' => $request->link_add,
            'note' => $request->note_add,
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