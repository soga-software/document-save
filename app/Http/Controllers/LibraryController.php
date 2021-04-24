<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Base\Response;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    // view contants
    const INDEX_VIEW = 'pages.library.index';
    const INDEX_ROUTE = 'library.index';
    const CREATE_RULE = array();
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
        if ('' != $request->library) {
            $libraries = Library::libraryIndex();
        } else {
            $libraries = Library::librarySearch($request);
        }
        $request->flash('request', $request);

        return view(self::INDEX_VIEW, array(
            'data' => array(
                'libraries' => $libraries,
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
            Library::setLibrary($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Tạo trang tài liệu thành công']);
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
            Library::updateLibrary($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Cập nhật trang tài liệu thành công']);
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
            Library::destroyLibrary($request);
        });

        return redirect()
            ->route(self::INDEX_ROUTE)
            ->with('messages', ['Xóa trang tài liệu thành công']);
    }
}