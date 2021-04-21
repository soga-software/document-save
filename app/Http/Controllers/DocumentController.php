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
    const CREATE_RULE = array();

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
        if (0 == $request->categoryId && empty($request->tagId)) {
            $documents = Document::documentIndex();
        } else {
            $documents = Document::documentSearch($request);
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

        DB::transaction(function () use ($request) {
            Document::setDocument($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Tạo chuyên mục thành công']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->request->add(['id' => $id]);
        // setting config
        $this->config([
            'rule' => self::UPDATE_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::redirectInput(self::UPDATE_ROUTE, $this->errors->all(), $id);
        }
        DB::transaction(function () use ($request, $id) {
            $this->model->attributeUpdate($request, $id);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Cập nhật chuyên mục thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id      *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->request->add(['id' => $id]);
        // setting config
        $this->config([
            'rule' => self::DESTROY_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::redirect(self::INDEX_ROUTE, $this->errors->all());
        }
        // Nếu thuộc tính có sẵn trong bất kỳ mục nào thì không được xóa
        if ($this->model->attributeItem($id) > 0) {
            return Response::redirect(self::INDEX_ROUTE, ['attribute' => __('lang.msg.attributeHaveItemAndOrder')]);
        }

        DB::transaction(function () use ($request) {
            $this->model->attributeDestroy($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', [__('lang.msg.deleteSuccess')]);
    }
}