<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    // 💡 Pro-совет: Обратная связь. Услуга принадлежит одной категории.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
