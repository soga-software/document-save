<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;

class ImportView extends Controller
{
    // view contants
    const INDEX_VIEW = 'pages.import.index';
    const INDEX_ROUTE = 'import.index';
    const CREATE_RULE = array(
        'link_add' => 'required|unique:documents,link'
    );
    const UPDATE_RULE = array();
    const DESTROY_RULE = array();

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(self::INDEX_VIEW);
    }
}
