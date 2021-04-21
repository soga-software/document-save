<?php

namespace App\Models;

use Illuminate\Http\Request;

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
    public static function tagSelect()
    {
        $tags = self
            ::where('deleted_at', null)
            ->orderBy('tag_name', 'ASC')
            ->select('tags.id', 'tags.tag_name')
            ->get();
        return $tags;
    }

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function tagOfDocument($document)
    {
        $idTags = explode(",", $document->tag_id);
        $idTags = array_filter($idTags);
        $tags = self
            ::where('deleted_at', null)
            ->whereIn('id', $idTags)
            ->orderBy('tag_name', 'ASC')
            ->select('tags.id', 'tags.tag_name')
            ->get();
        return $tags;
    }

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function tagIndex()
    {
        $tags = self::where('deleted_at', null)->orderBy('tag_name', 'ASC')->select('tags.*')->paginate(25);
        return $tags;
    }

    /**
     * Get a listing of the resource with conditions.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return
     */
    public static function tagSearch(Request $request)
    {
        $tag = self
            ::where('tags.tag_name', 'LIKE', "%" . $request->tag . "%")
            ->where('deleted_at', null)
            ->orderBy('tag_name', 'ASC')
            ->select('tags.*')
            ->paginate(25);

        return $tag;
    }

    public static function setTag(Request $request)
    {
        $isInserted = self::insert([
            'tag_name' => $request->name_add,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return $isInserted;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public static function updateTag(Request $request)
    {
        $updateResult = self
            ::where('id', $request->id_edit)
            ->update([
                'tag_name' => $request->name_edit,
                'created_at' => date('Y-m-d H:i:s'),
            ]);

        return $updateResult;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return
     */
    public static function tagDestroy(Request $request)
    {
        $detroyResult = self
            ::where('id', $request->id)
            ->update([
                'deleted_at' => date('Y-m-d H:i:s')
            ]);

        return $detroyResult;
    }
}