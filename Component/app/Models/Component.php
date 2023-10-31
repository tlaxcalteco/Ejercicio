<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    protected $table = 'component';
    protected $fillable = [
        'name',
        'model_type',
    ];

    public function componentData()
    {
        return $this->hasMany(ComponentData::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
