<?php /** @noinspection ALL */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Priority extends JsonResource
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
            "caption" => $this->caption,
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
            "updated_at" => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
