<?php


namespace App\Domain\Customers\Repositories;


use App\Domain\Customers\Models\Customer;
use App\Domain\Customers\Resources\CustomersAgeCollectionResource;
use App\Domain\Customers\Resources\CustomersCollectionResource;

class CustomersRepository extends AjaxRepository
{
    protected $model = Customer::class;
    protected $collection = CustomersCollectionResource::class;

    public function getResourceCollection($request): string
    {
        if ($request->get('withAge', false)) {
            return CustomersAgeCollectionResource::class;
        }

        return $this->collection;
    }
}
