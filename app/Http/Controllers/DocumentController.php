<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\Response;
use App\Models\Category;
use App\Models\Document;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentController extends Controller
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
    public function index(Request $request)
    {
        $categoriesSelect = Category::categorySelect();
        $tagSelect = Tag::tagSelect();
        if (
            !empty($request->tag_id)
            || (isset($request->category_id) && '0' != $request->category_id)
            || (isset($request->name) && null != $request->name)
            || (isset($request->type) && null != $request->type)
        ) {
            $documents = Document::documentSearch($request);
        } else {
            $documents = Document::documentIndex();
        }
        foreach ($documents as $document) {
            $document->tagShow = Tag::tagOfDocument($document);
        }
        $request->flash('request', $request);
        return view(self::INDEX_VIEW, array(
            'data' => array(
                'categories' => $categoriesSelect,
                'categoryJsons' => $categoriesSelect->toJson(),
                'tags' => $tagSelect,
                'tagJsons' => $tagSelect->toJson(),
                'documents' => $documents,
            ),
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // setting config
        $this->config([
            'rule' => self::CREATE_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            $request->flash('request', $request);
            return Response::redirectInput(self::INDEX_VIEW, $this->errors->all());
        }
        $request->flash('request', $request);
        DB::transaction(function () use ($request) {
            Document::setDocument($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Ta??o ta??i li????u tha??nh c??ng']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // setting config
        $this->config([
            'rule' => self::UPDATE_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::redirectInput(self::INDEX_VIEW, $this->errors->all(), $id);
        }
        $request->flash('request', $request);
        DB::transaction(function () use ($request) {
            Document::updateDocument($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['C????p nh????t ta??i li????u tha??nh c??ng']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id      *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // setting config
        $this->config([
            'rule' => self::DESTROY_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::redirectInput(self::INDEX_VIEW, $this->errors->all(), $id);
        }
        DB::transaction(function () use ($request) {
            Document::destroyDocument($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Xo??a ta??i li????u tha??nh c??ng']);
    }
}