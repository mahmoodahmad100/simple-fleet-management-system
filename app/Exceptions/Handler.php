<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use App\Traits\Response\SendResponse;

class Handler extends ExceptionHandler
{
    use SendResponse;
    
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        $this->renderable(function (AuthenticationException $e, $request) {
            return $this->sendResponse([], $e->getMessage(), false, 401);
        });

        $this->renderable(function (ValidationException $e, $request) {
            $errors = [];

            foreach ($e->errors() as $field => $error) {
                $errors[] = [
                    'field'   => $field,
                    'message' => $error[0]['message'],
                    'code'    => (int)$error[0]['code'],
                ];
            }
    
            return $this->sendResponse($errors, $e->getMessage(), false, 422);
        });

        $this->renderable(function (Throwable $e, $request) {
            return $this->sendExceptionResponse($e, false);
        });
    }
}
