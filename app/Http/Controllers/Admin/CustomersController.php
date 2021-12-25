<?php


namespace App\Http\Controllers\Admin;


use App\Domain\Customers\Repositories\CustomersRepository;

class CustomersController extends AjaxController
{
    public function __construct(CustomersRepository $model)
    {
        $this->model = $model;
        parent::__construct();
    }
}
