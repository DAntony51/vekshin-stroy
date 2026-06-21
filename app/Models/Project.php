<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    // 💡 Связь: У одного проекта есть много фотографий
    public function photos()
    {
        return $this->hasMany(Photo::class)->orderBy('sort_order', 'asc');
    }
}
