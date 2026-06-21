<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = [];

    // 💡 Связь: Фотография принадлежит одному проекту
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
