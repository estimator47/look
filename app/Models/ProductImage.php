<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    use HasFactory;
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $appends = ['image_url'];
    /**
     * @var string[]
     */
    protected $hidden = ['path'];


    /**
     * @return string|null
     */
    public function getImageUrlAttribute()
    {
        return $this->path ? asset(Storage::url('app/public/'. $this->path)) : null;
    }
}
