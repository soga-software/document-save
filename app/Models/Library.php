<?php

namespace App\Models;

use Illuminate\Http\Request;

class Library extends Base
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'libraries';

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function librarySelect()
    {
        $libraries = self
            ::where('deleted_at', null)
            ->orderBy('library_name', 'ASC')
            ->select('libraries.id', 'libraries.library_name')
            ->get();
        return $libraries;
    }

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function libraryOfDocument($document)
    {
        $idLibrary = explode(",", $document->library_id);
        $idLibrary = array_filter($idLibrary);
        $libraries = self
            ::where('deleted_at', null)
            ->whereIn('id', $idLibrary)
            ->orderBy('library_name', 'ASC')
            ->select('libraries.id', 'libraries.library_name')
            ->get();
        return $libraries;
    }

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function libraryIndex()
    {
        $libraries = self::where('deleted_at', null)->orderBy('library_name', 'ASC')->select('libraries.*')->paginate(25);
        return $libraries;
    }

    /**
     * Get a listing of the resource with conditions.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return
     */
    public static function librarySearch(Request $request)
    {
        $library = self
            ::where('libraries.library_name', 'LIKE', "%" . $request->library . "%")
            ->where('deleted_at', null)
            ->orderBy('library_name', 'ASC')
            ->select('libraries.*')
            ->paginate(25);

        return $library;
    }

    public static function setLibrary(Request $request)
    {
        $isInserted = self::insert([
            'library_name' => $request->name_add,
            'link' => $request->link_add,
            'note' => $request->note_add,
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
    public static function updateLibrary(Request $request)
    {
        $updateResult = self
            ::where('id', $request->id_edit)
            ->update([
                'library_name' => $request->name_edit,
                'link' => $request->link_edit,
                'note' => $request->note_edit,
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
    public static function destroyLibrary(Request $request)
    {
        $detroyResult = self::where('id', $request->id)->update(['deleted_at' => date('Y-m-d H:i:s')]);
        return $detroyResult;
    }
}