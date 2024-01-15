<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $appends = ['image_url', 'title', 'text'];
    /**
     * @var array
     */
    protected $hidden = ['image', 'title_ru', 'title_en', 'text_ru', 'text_en'];

    /**
     * @return mixed
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset(Storage::url('app/public/'. $this->image)) : null;
    }

    /**
     * @return mixed
     */
    public function getTitleAttribute()
    {
        return App::getLocale() === 'ru' ? $this->title_ru : $this->title_en;
    }

    /**
     * @return mixed
     */
    public function getTextAttribute()
    {
        return App::getLocale() === 'ru' ? $this->text_ru : $this->text_en;
    }
}
