<?php

namespace App\Models;

use Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \Spatie\Permission\Models\Role
{
    use HasFactory;

    protected $fillable = [
        "name",
        "display_name",
        "group",
        "guard_name",
    ];

}
