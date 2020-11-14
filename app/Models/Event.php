<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable =['event_date','event_time_from', 'event_time_to','event_title','event_desc','event_location','event_coordinates','is_active'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
