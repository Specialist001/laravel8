<?php


namespace App\Domain\Customers\Repositories;


use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AjaxRepository
{
    /**
     *  table class
     */
    protected $model;

    /**
     * resource collection
     */
    protected $collection;

    /**
     * @var int (for pagination)
     */
    protected $perPage = 100;

    public function getModels($request)
    {
        $class = $this->model;

        return $class::paginate($this->perPage);
    }

    /**
     * Возвращает класс ресурс-коллекцию
     * @param Request $request
     * @return string
     */
    public function getResourceCollection($request) : string
    {
        return $this->collection;
    }

    /**
     * Отображает коллекцию моделей в ее представлении
     * @param Request $request
     * @return ResourceCollection|resource
     */
    public function getCollection($request)
    {
        $models = $this->getModels($request);
        $collection = $this->getResourceCollection($request);
        if ($collection) {
            return new $collection($models);
        }

        return new ResourceCollection($models);
    }
}
