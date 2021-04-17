<?php

namespace Core\Auth\Controllers\API\V1;

use Core\Auth\Resources\UserResource as Resource;
use Core\Auth\Requests\UserRequest as CustomRequest;

class AuthController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @codeCoverageIgnore
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param CustomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(CustomRequest $request)
    {
        if (! $token = auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return $this->sendResponse([], 'please login with the correct data', false, 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @todo create a middleware to check if the user has a valid access token or not
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        if (auth()->user()) {
            return $this->sendResponse(new Resource(auth()->user()));
        }

        return $this->sendResponse([], 'please send valid access token', false, 401);
    }

    /**
     * update the data of the authenticated user.
     *
     * @param CustomRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateAuth(CustomRequest $request)
    {
        auth()->user()->update($request->all());
        return $this->sendResponse(new Resource(auth()->user()), 'successfully updated.');
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();
        return $this->sendResponse([], 'Successfully logged out.');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return $this->sendResponse([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }
}
