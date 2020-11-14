<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationTag extends Model
{
    use HasFactory;

    protected $fillable =['tag'];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
