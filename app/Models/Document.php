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
            ::join('categories', 'categories.id', 'documents.category_id')
            ->where('documents.deleted_at', null)
            ->orderBy('documents.name', 'DESC')
            ->select('documents.*', 'categories.category_name', 'categories.icon AS category_icon')
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
    public static function documentSearch($param)
    {
        $sqlQuery = self::join('categories', 'categories.id', 'documents.category_id');
        if ('' != $param['name']) {
            $sqlQuery->where('documents.name', 'LIKE', "%" . $param['name'] . "%");
        }
        if ('' != $param['type']) {
            $sqlQuery->where('documents.type', 'LIKE', "%" . $param['type'] . "%");
        }
        if ('0' != $param['category_id']) {
            $sqlQuery->where('categories.id', $param['category_id']);
        }
        if (!empty($param['tag_id'])) {
            if (sizeof($param['tag_id']) == 1) {
                $sqlQuery->where('documents.tag_id', 'LIKE', "%" . $param['tag_id'][0] . "%");
            } else {
                $sqlQuery->where(function ($query) use ($param) {
                    foreach ($param['tag_id'] as $key => $tag) {
                        if ($key == 0) {
                            $query->where('documents.tag_id', 'LIKE', "%" . $tag . "%");
                        } else {
                            $query->orWhere('documents.tag_id', 'LIKE', "%" . $tag . "%");
                        }
                    }
                });
            }
        }

        $documents = $sqlQuery
            ->where('documents.deleted_at', null)
            ->orderBy('documents.name', 'ASC')
            ->select('documents.*', 'categories.category_name', 'categories.icon AS category_icon')
            ->paginate(50);

        return $documents;
    }

    public static function setDocument(Request $request)
    {
        $tags = '';
        foreach ($request->tag_id_add as $key => $tag) {
            if (0 == $key) {
                $tags .= $tag;
            } else {
                $tags .= ",{$tag}";
            }
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

    public static function updateDocument(Request $request)
    {
        $tags = '';
        foreach ($request->tag_id_edit as $key => $tag) {
            if (0 == $key) {
                $tags .= $tag;
            } else {
                $tags .= ",{$tag}";
            }
        }
        $isUpdated = self::where('id', $request->id_edit)
            ->update([
                'name' => $request->name_edit,
                'category_id' => $request->category_id_edit,
                'tag_id' => $tags,
                'type' => $request->type_edit,
                'link' => $request->link_edit,
                'note' => $request->note_edit,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        return $isUpdated;
    }

    public static function destroyDocument(Request $request)
    {
        $isDeleted = self::where('id', $request->id)->update(['deleted_at' => date('Y-m-d H:i:s')]);
        return $isDeleted;
    }
}
