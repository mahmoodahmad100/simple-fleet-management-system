<?php

namespace Core\Bus\Controllers\API\V1;

use Core\Bus\Requests\BookingRequest as FormRequest;
use Core\Bus\Models\Booking as Model;
use Core\Bus\Resources\BookingResource as Resource;

class BookingController extends \Core\Base\Controllers\API\Controller
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
}
