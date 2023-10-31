<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComponentData extends Model
{
    use HasFactory;

    protected $table = 'component_data';
    protected $fillable = ['component_id', 'user_id', 'key', 'value'];

    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
