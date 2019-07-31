<?php /** @noinspection ALL */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Person extends JsonResource
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
            "first_name"=> $this->first_name,
            "last_name"=> $this->last_name,
            "gender"=> $this->gender,
            "birthDate"=> ((gettype($this->birth_date) === 'string') || $this->birth_date == null) ? $this->birth_date : $this->birth_date->format('Y-m-d'),
            "lastOnline" => ((gettype($this->last_activity) === 'string') || $this->last_activity == null) ? $this->last_activity : $this->last_activity->format('Y-m-d'),
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
            "updated_at" => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
