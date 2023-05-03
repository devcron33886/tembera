<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, HasFactory,Sluggable;

    public $table = 'categories';

    protected array $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        '0' => 'Inactive',
        '1' => 'Active',
    ];

    protected $fillable = [
        'name',
        'slug',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug'=>[
                'source'=>'name'
            ]

        ];
    }
}
