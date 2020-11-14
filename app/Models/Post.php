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
}
