<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    //
    protected $table="role_user";
    protected $primaryKey="idRoleUser";
    public $timestamps = FALSE;
}
