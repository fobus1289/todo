<?php

namespace App\Module\Todo\Controller;

use App\Http\Controllers\Controller;
use App\Module\Todo\Request\TodoCreateRequest;
use App\Module\Todo\Request\TodoUpdateRequest;
use TodoService as facade;

/**
 * Class TodoController
 * @package App\Module\Todo\Controller
 */
class TodoController extends Controller
{

    public function index()
    {
        return facade::all();
    }

    public function create(TodoCreateRequest $request)
    {
        return facade::create($request);
    }

    public function update(TodoUpdateRequest $request)
    {
        return facade::update($request);
    }

    public function delete($id)
    {
        return facade::delete($id);
    }

}
