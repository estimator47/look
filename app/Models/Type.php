<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Type extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $appends = ['type'];
    /**
     * @var array
     */
    protected $hidden = ['type_ru'];

    public function getTypeAttribute()
    {
        return App::getLocale() === 'ru' ? $this->type_ru : $this->type_en;
    }
}
