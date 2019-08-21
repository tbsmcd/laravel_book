<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use function sprintf;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->resource['user_id'],
            'name' => $this->resource['user_name'],
            '_links' => [
                'self' => [
                    'href' => sprintf(
                        'https://example.com/users/%s',
                        $this->resource['user_id']
                    )
                ]
            ]
        ];
    }
}
