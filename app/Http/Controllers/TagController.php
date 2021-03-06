<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\Response;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    // view contants
    const INDEX_VIEW = 'pages.tag.index';
    const INDEX_ROUTE = 'tag.index';
    const CREATE_RULE = array(
        'name_add' => 'required|unique:tags,tag_name|string:200'
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
        if (!isset($request->tag) || '' == $request->tag) {
            $tags = Tag::tagIndex();
        } else {
            $tags = Tag::tagSearch($request);
        }
        $request->flash('request', $request);

        return view(self::INDEX_VIEW, array(
            'data' => array(
                'tags' => $tags,
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
            return Response::redirectInput(self::INDEX_ROUTE, $this->errors->all());
        }

        DB::transaction(function () use ($request) {
            Tag::setTag($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Tạo tag thành công']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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
        if (
            $this->status == self::VALIDATE
        ) {
            $request->flash('request', $request);
            return Response::redirectInput(self::INDEX_ROUTE, $this->errors->all());
        }

        DB::transaction(function () use ($request) {
            Tag::updateTag($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Cập nhật tag thành công']);
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
        if (
            $this->status == self::VALIDATE
        ) {
            return Response::redirect(self::INDEX_ROUTE, $this->errors->all());
        }
        DB::transaction(function () use ($request) {
            Tag::destroyTag($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Xóa chuyên mục thành công']);
    }
}