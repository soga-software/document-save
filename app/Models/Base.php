<?php

namespace App\Models;

use App\Http\Controllers\Base\TimeHandler;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Base extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public $incrementing = true;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    const CREATED_AT = 'createTime';
    const UPDATED_AT = 'updateTime';
    const CREATER_BY = 'createUser';
    const UPDATER_BY = 'updateUser';
    const LANGUAGE_FILTER = 'language';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    /**
     * Get a listing of the resource.
     *
     * @return
     */
    public function baseIndex()
    {
        $getResult = $this->get();

        return $getResult;
    }

    /**
     * Get the specified resource.
     *
     * @param int $id
     *
     * @return
     */
    public function baseShow($id)
    {
        $firstResult = $this->where('id', $id)->first();

        return $firstResult;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function baseStore(Request $request)
    {
        $input = $request->only($this->fillable);
        $isInserted = $this->insert($input);

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
    public function baseUpdate(Request $request, $id)
    {
        $input = $request->only($this->fillable);
        $updateResult = $this
            ->where('id', $id)
            ->update($input);

        return $updateResult;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $id
     *
     * @return
     */
    public function baseDestroy($id)
    {
        $detroyRestul = $this->where('id', $id)->delete();

        return $detroyRestul;
    }

    public function utcInt()
    {
        return TimeHandler::utcInt();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function createAuto($param, $userId = null)
    {
        $param[self::CREATED_AT] = @$param[self::CREATED_AT] ? $param[self::CREATED_AT] : $this->utcInt();
        $param[self::UPDATED_AT] = @$param[self::UPDATED_AT] ? $param[self::UPDATED_AT] : $this->utcInt();
        $param[self::CREATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
        $param[self::UPDATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
        $isInserted = $this->insert($param);

        return $isInserted;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function insertAuto($param, $userId = null)
    {
        if (!$param) {
            return $param;
        }
        if (is_array(@$param[0])) {
            foreach ($param as $key => $element) {
                $element[self::CREATED_AT] = @$element[self::CREATED_AT] ? $element[self::CREATED_AT] : $this->utcInt();
                $element[self::UPDATED_AT] = @$element[self::UPDATED_AT] ? $element[self::UPDATED_AT] : $this->utcInt();
                $element[self::CREATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
                $element[self::UPDATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
                $param[$key] = $element;
            }
        } else {
            $param[self::CREATED_AT] = @$param[self::CREATED_AT] ? $param[self::CREATED_AT] : $this->utcInt();
            $param[self::UPDATED_AT] = @$param[self::UPDATED_AT] ? $param[self::UPDATED_AT] : $this->utcInt();
            $param[self::CREATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
            $param[self::UPDATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
        }
        $this->insert($param);

        return $param;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function setInsertParam($param, $userId = null)
    {
        $param[self::CREATED_AT] = @$param[self::CREATED_AT] ? $param[self::CREATED_AT] : $this->utcInt();
        $param[self::UPDATED_AT] = @$param[self::UPDATED_AT] ? $param[self::UPDATED_AT] : $this->utcInt();
        $param[self::CREATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');
        $param[self::UPDATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');

        return $param;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function setUpdateParam($param, $userId = null)
    {
        $param[self::UPDATED_AT] = @$param[self::UPDATED_AT] ? $param[self::UPDATED_AT] : $this->utcInt();
        $param[self::UPDATER_BY] = $userId ? $userId : (isset(Auth::user()->id) ? Auth::user()->id : '');

        return $param;
    }
}