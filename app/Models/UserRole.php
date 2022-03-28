<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use App\Concerns\Models\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory, Searchable;

    /**
     * Searchable attributes.
     *
     * @return string[]
     */
    public $searchable = [
        'name',
        'slug',
        'price',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'price',
        'enabled',
        'shortDescription',
        'longDescription',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'integer',
        'enabled' => 'boolean',
    ];

    public function scopeEnabled($query, $value = true)
    {
        if ($value) {
            return $query->whereNull('enabled')->orWhere('enabled', true);
        }

        return $query->where('enabled', false);
    }

    public function permissions()
    {
        return $this->belongsToMany(UserPermission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
