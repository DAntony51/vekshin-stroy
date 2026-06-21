<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    // 💡 Pro-совет: Связь "Один ко многим". Одна категория имеет много услуг.
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
