<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'model',
        'category_id',
        'driver_id',
    ];

    /**
     * Returns Category object
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Returns Driver object
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    /**
     * Returns users who can drive this car
     */
    public function users(): Collection
    {
        return $this->category->users;
    }

    /**
     * Returns trips for this car
     */
    public function trips(): HasMany
    {
        return $this->hasMany(Trip::class);
    }
}
