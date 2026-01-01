<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'publication_date',
        'category_id',
        'pdf_path',
        'pdf_size',
        'thumbnail_path',
        'is_published',
        'is_featured',
        'is_archived',
        'published_at',
        'metadata',
        'user_id',
    ];

    protected $casts = [
        'publication_date' => 'date',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }

     // Get total downloads
    public function totalDownloads()
    {
        return $this->downloads()->sum('number_of_counts');
    }
}
