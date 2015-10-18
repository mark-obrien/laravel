<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE = [
        'Administrator',
        'Manager',
        'Employee',
        'Client'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'role_id', 'id');
    }

}
