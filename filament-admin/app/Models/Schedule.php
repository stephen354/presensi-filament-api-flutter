<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{

    protected $fillable = [
        'user_id',
        'office_id',
        'shift_id',
    ];
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function shift(): BelongsTo
    {
        return $this->belongsTo(Shift::class);
    }
}
