<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_Name',
        'description',
        'image',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
