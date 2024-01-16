<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class CertificateFile extends Model
{
    protected $fillable = ['certificate_type_id', 'file'];

    protected $appends = ['image_url'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(CertificateType::class, 'certificate_type_id');
    }

    public function getImageUrlAttribute()
    {
        return $this->file ? asset(Storage::url($this->file)) : null;
    }
}
