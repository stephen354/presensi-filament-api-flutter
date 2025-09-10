<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    protected $fillable = ['office_id', 'user_id', 'shift_id'];

    public function office():BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function shift():BelongsTo
    {
        return $this->belongsto(Shift::class);
    }
}
