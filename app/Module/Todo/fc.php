<?php
use Illuminate\Http\Request;
/**
 * Class TodoService
 * @see App\Module\Todo\Service\TodoService
 */
class TodoService
{
    /**
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public static function all(){}

    /**
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Resources\Json\JsonResource
     *
     */
    public static function create(Request $request){}
    /**
     * @param \Illuminate\Http\Request $request
     * @return Illuminate\Http\Resources\Json\JsonResource
     *
     */
    public static function update(Request $request){}

    /**
     * @param int $id
     * @return Illuminate\Http\Resources\Json\JsonResource
     */
    public static function delete(int $id){}

}


