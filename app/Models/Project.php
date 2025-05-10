<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'client_name',
        'location',
        'map_link',
        'plot_size',
        'built_up_area',
        'no_of_floors',
        'project_type',
        'construction_package',
        'media',
    ];

    protected $casts = [
        'media' => 'array',
    ];
}