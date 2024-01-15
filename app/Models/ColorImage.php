<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class ColorImage extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $appends = ['image_url', 'color'];
    /**
     * @var string[]
     */
    protected $hidden = ['path', 'color_ru', 'color_en',];


    /**
     * @return string|null
     */
    public function getImageUrlAttribute()
    {
        return $this->path ? asset(Storage::url('app/public/'. $this->path)) : null;
    }

    /**
     * @return mixed
     */
    public function getColorAttribute()
    {
        return App::getLocale() === 'ru' ? $this->color_ru : $this->color_en;
    }
}
