<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // status contants
    const SUCCESS = 'SUCCESS';
    const VALIDATE = 'VALIDATE';

    // Validation rules
    public $rule = [];

    // Request
    public $request = null;

    // Model class
    public $model = null;

    // Response data
    public $data = null;

    // Custom default message
    public $custom_msg = [];

    // Config valid message, if valid is false
    public $errors;

    // Config view
    public $view = [];

    // Config view
    public $valid = 'SUCCESS';

    // Log object
    // public $log = [
    //     'url' => 'not declare',
    //     'method' => 'not declare',
    //     'ip' => 'not declare',
    //     'id' => 'not declare',
    // ];

    /** Setting default value before handling request
     * @param array $option
     *
     * @return object
     */
    public function config($option)
    {
        isset($option['rule']) ? $this->rule = $option['rule'] : ''; // rule check validate
        isset($option['custom_msg']) ? $this->custom_msg = $option['custom_msg'] : ''; // data of custom_msg
        isset($option['model']) ? $this->model = $option['model'] : ''; // model class
        if (isset($option['request'])) {
            $this->request = $option['request']; //save request to this request value
            // Save value to this log value
            // $this->log = [
            //     'url' => $option['request']->path(),
            //     'method' => $option['request']->method(),
            //     'ip' => $option['request']->ip(),
            //     'id' => getmypid(),
            // ];
        }
    }

    /** Check validate of request
     */
    public function exam()
    {
        if (!empty($this->rule)) {
            // Check the validaty of the request
            $validator = Validator::make(
                $this->request->all(),
                $this->rule,
                $this->custom_msg
            );
            // Return Code 400 if request not valid
            if ($validator->fails()) {
                $this->status = self::VALIDATE;
                $this->errors = $validator->errors();
            } else {
                $this->status = self::SUCCESS;
            }
        } else {
            $this->status = self::SUCCESS;
        }
    }

    public function __destruct()
    {
        //Write log is here
    }
}