<?php

namespace App\Module\Todo\Response;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class TodoResponse
 * @package App\Module\Todo\Response
 */
class TodoResponse extends JsonResource
{

    public function toArray($request)
    {
        return $this->mapper($this->resource);
    }

    private function mapper($arr) {
        $result = [];
        foreach ($arr as $item) {
            $result[] = [
                'id' => $item->todo_id,
                'name' => $item->todo_name,
                'createAt' => date_format($item->created_at,"Y/m/d H:i:s"),
                'updateAt' => date_format($item->updated_at,"Y/m/d H:i:s"),
            ];
        }
        return $result;
    }

}
