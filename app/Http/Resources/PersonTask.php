<?php /** @noinspection ALL */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonTask extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @callBy
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "task_id" => $this->task_id,
            "person_id"=> $this->person_id,
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
            "updated_at" => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
