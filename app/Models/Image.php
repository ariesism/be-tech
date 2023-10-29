<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path', 
    ];

    protected function pathUrl(): Attribute
    {
        $filePath = $this->path;

        return Attribute::make(
            get: fn () => url(Storage::url($filePath)),
        );
    }

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
