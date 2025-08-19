<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $connection = 'legacy';
    protected $table = 'project_log';

    // Disable Timestamps:
    public $timestamps = false;

    protected $guarded = [];

    // Casts (adjust types to your actual schema)
    protected $casts = [
        'category' => 'integer',
        'sent_on' => 'datetime',
    ];

    // Only return records with category = 3
//    protected static function booted(): void
//    {
//        static::addGlobalScope('updatesOnly', function ($query) {
//            $query->where('category', 3);
//        });
//    }

    // Optional: if you want to reference the associated project
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    // Optional: scope for recent updates
    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderByDesc('created_at')->limit($limit);
    }


    public function getCommentAttribute($value)
    {
        return is_resource($value) ? stream_get_contents($value) : $value;
    }

    public function getCommentPreviewAttribute()
    {
        $text = strip_tags($this->comment ?? '');
        $words = preg_split('/\s+/', $text, 21);
        if (count($words) > 20) {
            array_pop($words);
            $text = implode(' ', $words) . '...';
        }
        return $text;
    }
}

