<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'sub_team_id',
        'civility',
        'profession',
        'image',
    ];

    protected $table = 'team';

    public function user()
    {
        return $this->belongsTo(Authenticatable::class, 'user_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = 'media/' . $value;
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    protected $dates = ['created_at', 'updated_at'];

    public function __toString()
    {
        return $this->user->first_name . ' ' . $this->user->last_name;
    }
}
