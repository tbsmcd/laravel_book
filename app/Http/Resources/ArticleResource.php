<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

use function sprintf;

class ArticleResource extends JsonResource
{
    public static $wrap;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->resource['id'],
            'title' => $this->resource['title'],
            '_embedded' => [
                'comments' => new CommentResourceCollection(
                    new Collection($this->resource['comments'])
                ),
                'user' => new UserResource([
                    'user_id' => $this->resource['user_id'],
                    'user_name' => $this->resource['user_name']
                ]),
            ],
            '_links' => [
                'self' => [
                    'href' => sprintf(
                        'https://example.com/article/%s',
                        $this->resource['id']
                    )
                ]
            ]
        ];
    }
}
