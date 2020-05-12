<?php

namespace App\Module\Todo\Service;

use App\Module\Todo\Model\Todo;
use App\Module\Todo\Request\TodoCreateRequest;
use App\Module\Todo\Request\TodoUpdateRequest;
use App\Module\Todo\Response\TodoResponse;

/**
 * Class TodoService
 * @package App\Module\Todo\Service
 */
class TodoService
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function all()
    {
        return response( new TodoResponse( Todo::all() ) ,200);
    }

    /**
     * @param TodoCreateRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function create(TodoCreateRequest $request)
    {
        $todo = Todo::create([
            'todo_name'=>$request->name
        ]);

        return response(
            [
                'id' => $todo->todo_id,
                'name' => $todo->todo_name,
                'createAt' => date_format($todo->created_at,"Y/m/d H:i:s"),
                'updateAt' => date_format($todo->updated_at,"Y/m/d H:i:s"),
            ]
            ,201
        );

    }

    /**
     * @param TodoUpdateRequest $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function update(TodoUpdateRequest $request)
    {

        $todo = Todo::find($request->id);

        $todo->update([
            'todo_name' => $request->name
        ]);

        return response(
            [
                'id' => $todo->todo_id,
                'name' => $todo->todo_name,
                'createAt' => date_format($todo->created_at,"Y/m/d H:i:s"),
                'updateAt' => date_format($todo->updated_at,"Y/m/d H:i:s"),
            ]
            ,200);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function delete($id)
    {
        $todo = Todo::where('todo_id',$id)
                      ->delete();
        return response([
            'id'=>$todo
        ],200);
    }
}
