<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Base\Response;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentApi extends Controller
{
    // view contants
    const INDEX_VIEW = 'pages.document.index';
    const LIST_VIEW = 'pages.document.list';
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
    public function fetchData(Request $request)
    {
        try {
            // Khi nhấn search -> Lưu các giá trị vào session và search theo điều kiện mới
            if(isset($request->isSearch) && $request->isSearch == 1){
                \Session::put([
                    'document.name' => $request->name,
                    'document.type' => $request->type,
                    'document.page' => $request->page,
                    'document.numLine' => $request->numLine,
                    'document.category_id' => $request->category_id,
                    'document.tag_id' => $request->tag_id,
                ]);
                \Session::save();
            }
            $param = array(
                'name' => session('document.name'),
                'type' => session('document.type'),
                'page' => session('document.page'),
                'numLine' => session('document.numLine'),
                'category_id' => session('document.category_id'),
                'tag_id' => session('document.tag_id'),
            );
            // Trả về data
            $documents = Document::documentSearch($param);
            foreach ($documents as $document) {
                $document->tagShow = Tag::tagOfDocument($document);
            }
            $render = view(self::LIST_VIEW, array(
                'data' => array(
                    'documents' => $documents,
                ),
            ))->render();
            return Response::response($render);
        } catch(Exception $e) {
            return Response::exception();
        }
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
            return Response::errors($this->errors->all());
        }
        DB::transaction(function () use ($request) {
            Document::setDocument($request);
        });
        return $this->fetchData($request);
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
            return Response::errors($this->errors->all());
        }
        DB::transaction(function () use ($request) {
            Document::updateDocument($request);
        });
        return $this->fetchData($request);
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
            return Response::errors($this->errors->all());
        }
        DB::transaction(function () use ($request) {
            Document::destroyDocument($request);
        });
        return $this->fetchData($request);
    }
}
