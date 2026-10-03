<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'category_label',
        'badge_text',
        'headline',
        'description',
        'metric_1_val',
        'metric_1_label',
        'metric_2_val',
        'metric_2_label',
        'metric_3_val',
        'metric_3_label',
        'tech_stack',
        'location',
        'duration',
        'image',
        'images',
        'client_name',
        'client_logo',
        'project_url',
        'challenge',
        'solution',
        'full_content',
        'results_detail',
        'testimonial_quote',
        'testimonial_author',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
