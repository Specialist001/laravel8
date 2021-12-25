<?php


namespace App\Domain\Customers\Resources;


use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomersCollectionResource extends ResourceCollection
{
    protected function getResource($object)
    {
        return [
            'id' => $object->id,
            'name' => $object->name
        ];
    }

    /**
     * @param $object
     * @return array
     */
    protected function getResourceWithAge($object)
    {
        return [
            'id' => $object->id,
            'name' => $object->name,
            'age' => $object->age,
        ];
    }

    public function toArray($request)
    {
        $res = [];
        $withAge = $request->get('withAge', false);

        foreach($this->collection as $object){
            if ($withAge) {
                $res[] = $this->getResourceWithAge($object);
            }
            else {
                $res[] = $this->getResource($object);
            }
        }

        return $res;
    }
}
