<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    public function apiExceptions($request,$e){
        if($this->isModel($e)){
            return response()->json([
                'error' => 'Model Not Found'
            ],Response::HTTP_NOT_FOUND);
        }
        if($this->isAllow($e)){
            return response()->json([
                'error' => 'Method Not Allowed Http'
            ],Response::HTTP_NOT_FOUND);
        }
        if($this->isHttp($e)){
            return response()->json([
                'error' => 'Incorrect Route'
            ],Response::HTTP_NOT_FOUND);
        }
        return parent::render($request, $e);
    }
    protected function isModel($e){
        return $e instanceof ModelNotFoundException;
    }
    protected function isAllow($e){
        return $e instanceof MethodNotAllowedHttpException;
    }
    protected function isHttp($e){
        return $e instanceof NotFoundHttpException;
    }
}