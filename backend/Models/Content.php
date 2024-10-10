<?php

namespace JJCS\CMS\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use JJCS\CMS\Enums\ContentType;

class Content extends Model
{
    use HasFactory;

    protected $casts = [
        'type' => ContentType::class
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
