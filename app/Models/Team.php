<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function departmentOffices(): HasMany
    {
        return $this->hasMany(DepartmentOffice::class);
    }

    /* public function departmentOffices(): HasManyThrough
    {
        return $this->hasManyThrough(DepartmentOffice::class, Department::class);
    } */

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
