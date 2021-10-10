<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Tag;

class DocumentView extends Controller
{
    // view contants
    const INDEX_VIEW = 'pages.document.index';
    const INDEX_ROUTE = 'document.index';
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
        // data list of select option
        $categories = Category::categorySelect();
        $tags = Tag::tagSelect();
        // old value
        $param = array(
            'name' => \Session::get('document.name'),
            'type' => \Session::get('document.type'),
            'page' => \Session::get('document.page'),
            'numLine' => \Session::get('document.numLine'),
            'category_id' => \Session::get('document.category_id'),
            'tag_id' => \Session::get('document.tag_id'),
        );
        // Trả về data
        $documents = Document::documentSearch($param);
        foreach ($documents as $document) {
            $document->tagShow = Tag::tagOfDocument($document);
        }
        return view(self::INDEX_VIEW, array(
            'data' => array(
                'categories' => $categories,
                'categoryJsons' => $categories->toJson(),
                'tags' => $tags,
                'tagJsons' => $tags->toJson(),
                'documents' => $documents,
                // old value
                'category_id' => $param['category_id'] ?? 0,
                'tag_id' => $param['tag_id'] ?? 0,
                'name' => $param['name'],
                'type' => $param['type'],
                'page' => $param['page'],
                'numLine' => $param['numLine'],
            ),
        ));
    }
}
