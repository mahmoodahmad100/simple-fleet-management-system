<?php

namespace Core\Bus\Controllers\API\V1;

use Core\Bus\Requests\SeatRequest as FormRequest;
use Core\Bus\Models\Seat as Model;
use Core\Bus\Resources\SeatResource as Resource;

class SeatController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model $model
     * @param string $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendResponse($this->resource::collection(
            $this->model->all_available($this->request->station1_id, $this->request->station2_id)
        ));
    }
}
