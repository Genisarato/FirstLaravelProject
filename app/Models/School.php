<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    protected $fillable = [
        'name',
        'address',
        'logo_path',
        'email',
        'phone',
        'website',
        'logo_path',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
