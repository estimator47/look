<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Material extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $appends = ['material'];
    /**
     * @var array
     */
    protected $hidden = ['material_ru'];

    public function getMaterialAttribute()
    {
        return App::getLocale() === 'ru' ? $this->material_ru : $this->material_en;
    }
}
