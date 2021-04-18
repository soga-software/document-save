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
    const INDEX_VIEW = 'pages.document';
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
        $categoriesSelect = Category::categoryIndex();
        $tagSelect = Tag::tagIndex();
        if (0 != $request->categoryId || '' != $request->tagId) {
            $documents = Document::documentIndex();
        } else {
            $documents = Document::documentSearch($request);
        }
        $request->flash('request', $request);

        return view(self::INDEX_VIEW, array(
            'data' => array(
                'categories' => $categoriesSelect,
                'tags' => $tagSelect,
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
        if (
            $this->status == self::VALIDATE
        ) {
            $request->flash('request', $request);
            return Response::redirectInput(self::INDEX_VIEW, $this->errors->all());
        }

        DB::transaction(function () use ($request) {
            Document::setDocument($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', [__('lang.msg.createSuccess')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributeGroup = $this->subModel->attributeGroupFull();

        return view(self::CREATE_VIEW, ['datas' => ['attributeGroup' => $attributeGroup]]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function storeWebApi(Request $request)
    {
        $this->config([
            'rule' => self::CREATE_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::errors(
                $this->errors->all()
            );
        }
        DB::transaction(function () use ($request) {
            $this->model->attributeStore($request);
        });

        return Response::response(
            ['message' => __('lang.attribute.massages_store_attribute_successful')]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributeGroup = $this->subModel->attributeGroupFull();
        $attribute = $this->model->attributeShow($id);

        return view(self::UPDATE_VIEW, array(
            'datas' => array(
                'attribute' => $attribute,
                'attributeGroup' => $attributeGroup,
            ),
        ));
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
            ->with('messages', [__('lang.msg.updateSuccess')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function updateWebApi(Request $request)
    {
        // setting config
        $this->config([
            'rule' => self::UPDATE_RULE,
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::errors(
                $this->errors->all()
            );
        }
        DB::transaction(function () use ($request) {
            $this->model->attributeUpdate($request, $request->id);
        });

        return Response::response(
            ['message' => __('lang.attribute.messages_update_attribute_successful')]
        );
    }

    /**
     * Get attribute group full for item create.
     *
     * @return \Illuminate\Http\Response
     */
    public function attributeShowWebApi(Request $request)
    {
        // setting config
        $this->config([
            'rule' => [],
            'request' => $request,
        ]);
        // Run check validaty if false
        $this->exam();
        if ($this->status == self::VALIDATE) {
            return Response::errors(
                $this->errors->all()
            );
        }
        $attribute = $this->model->attributeShow($request->id);

        return Response::response(
            $attribute
        );
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