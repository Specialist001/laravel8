<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Routing\Controller;

class AjaxController extends Controller
{
    /**
     * model repository
    */
    protected $model;

    public function __construct()
    {
    }

    public function index(\Request $request)
    {
//        $model = $this->getModel($request);
//        $res = $model->getColelction($request);

//        return $res;
    }
}
