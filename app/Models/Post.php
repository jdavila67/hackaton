<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','description'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function posts()
    {
        return $this->hasMany(\App\Models\PostComments::class,'org_id','id');
    }

    public function organizations()
    {
        return $this->hasOne(\App\Models\Organization::class,'id', 'org_id');
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\PostComments::class,'post_id','id');
    }

    public function getDaysAttribute()
    {
        $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $this->created_at);
        $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', now());
        return $to->diffInDays($from);
    }
}
