<?php

namespace App\Models;

use Illuminate\Http\Request;

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
    public static function categorySelect()
    {
        $categories = self::where('deleted_at', null)->orderBy('category_name', 'ASC')->select('categories.*')->get();
        return $categories;
    }

    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public static function categoryIndex()
    {
        $categories = self::where('deleted_at', null)->orderBy('category_name', 'ASC')->select('categories.*')->paginate(25);
        return $categories;
    }

    /**
     * Get a listing of the resource with conditions.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return
     */
    public static function categorySearch(Request $request)
    {
        $paramSeach = array();
        if ('' != $request->category) {
            $paramSeach[] = array('categories.category_name', 'LIKE', "%" . $request->category . "%");
        }
        $categories = self::where($paramSeach)
            ->where('deleted_at', null)
            ->orderBy('category_name', 'ASC')
            ->select('categories.*')
            ->paginate(25);

        return $categories;
    }

    public static function setCategory(Request $request)
    {
        $isInserted = self::insert([
            'category_name' => $request->name_add,
            'icon' => $request->icon_add,
            'note' => $request->note_add,
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
    public static function updateCategory(Request $request)
    {
        $updateResult = self::where('id', $request->id_edit)
            ->update([
                'category_name' => $request->name_edit,
                'icon' => $request->icon_edit,
                'note' => $request->note_edit,
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
    public static function categoryDestroy(Request $request)
    {
        $detroyResult = self::where('id', $request->id)->update(
            array(
                'deleted_at' => date('Y-m-d H:i:s')
            )
        );

        return $detroyResult;
    }
}