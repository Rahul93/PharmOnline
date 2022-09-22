<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $uid
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $password
 * @property string $file_name
 * @property boolean $is_active
 * @property boolean $is_deleted
 * @property string $last_login_at
 * @property string $created_at
 * @property string $updated_at
 * @property UserDatum[] $userDatas
 * @property UserRole[] $userRoles
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['uid', 'name', 'email', 'mobile', 'password', 'file_name', 'is_active', 'is_deleted', 'last_login_at', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userDatas()
    {
        return $this->hasMany('App\UserDatum');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userRoles()
    {
        return $this->hasMany('App\UserRole');
    }
}
