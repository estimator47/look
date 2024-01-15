<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateType extends Model
{
    protected $fillable = ['name'];

    public function files()
    {
        return $this->hasMany(CertificateFile::class);
    }
}
