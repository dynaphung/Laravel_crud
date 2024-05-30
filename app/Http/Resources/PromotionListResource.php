<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PromotionListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            // 'product_id' => $this->products->pluck('id')->toArray(),
            'discount' => $this->discount,
            // 'created_at' => $this->created_at,
            // 'product' => $this->product->name ?? "",
        ];
    }
}
