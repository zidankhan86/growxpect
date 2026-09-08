<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomepageContent extends Model
{
    use HasFactory;

    protected $table = 'homepage_contents';

    protected $fillable = [
        'section',
        'field_key',
        'field_value',
        'field_type',
    ];

    /**
     * Retrieve a single field value for a section.
     */
    public static function get(string $section, string $key, ?string $default = null): ?string
    {
        return static::where('section', $section)
            ->where('field_key', $key)
            ->value('field_value') ?? $default;
    }

    /**
     * Retrieve all fields for a section as an associative array: [field_key => field_value].
     */
    public static function section(string $section): array
    {
        return static::where('section', $section)
            ->pluck('field_value', 'field_key')
            ->toArray();
    }

    /**
     * Upsert a single field value for a section.
     */
    public static function set(string $section, string $key, ?string $value, string $type = 'text'): void
    {
        static::updateOrCreate(
            ['section' => $section, 'field_key' => $key],
            ['field_value' => $value, 'field_type' => $type]
        );
    }
}
