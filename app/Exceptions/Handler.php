<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Facades\Request;
use Mockery\Exception\InvalidOrderException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
 public function register(): void
    {
       
        $this->renderable(function (InvalidOrderException $e, Request $request) {

            return response()->view('frontend.errors.404', [], 404);

        });
    }
    
public function render($request, Throwable $e)
{
   
    return response()->view('frontend.errors.404')->setStatusCode(Response::HTTP_NOT_FOUND);
}
    
}
