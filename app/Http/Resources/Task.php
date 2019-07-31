<?php /** @noinspection ALL */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Task extends JsonResource
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
            "title" => $this->title,
            "description"=> $this->description,
            "creator"=> new Person($this->person),
            "status_id"=> new Status($this->status),
            "priority_id"=> new Priority($this->priority),
            "start_time" => $this->created_at->format('Y-m-d H:i:s'),
            "deadline" => $this->created_at->format('Y-m-d H:i:s'),
            "reject" => $this->created_at->format('Y-m-d H:i:s'),
            "done" => $this->created_at->format('Y-m-d H:i:s'),
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
            "updated_at" => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
