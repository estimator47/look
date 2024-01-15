<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Catalog extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $appends = ['description', 'info', 'title'];
    /**
     * @var array
     */
    protected $hidden = ['description_ru', 'description_en', 'info_en', 'info_ru', 'title_ru'];


    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function material() {
        return $this->belongsTo(Material::class);
    }
    /**
     * One to One relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function type() {
        return $this->belongsTo(Type::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products() {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function colors() {
        return $this->hasMany(ColorImage::class);
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
    public function getInfoAttribute()
    {
        return App::getLocale() === 'ru' ? $this->info_ru : $this->info_en;
    }

    /**
     * @return mixed
     */
    public function getDescriptionAttribute()
    {
        return App::getLocale() === 'ru' ? $this->description_ru : $this->description_en;
    }
}
