<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'introduction',
        'body',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function lastObjNb()
    {
        $last = 1;
        try {
            $lastArticle = self::latest('id')->first();
            if ($lastArticle) {
                $last = $lastArticle->id + 1;
            }
        } catch (\Exception $e) {
            // Handle exception if necessary
        }
        return $last;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = 'media/' . $value;
    }

    protected $dates = ['created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}


