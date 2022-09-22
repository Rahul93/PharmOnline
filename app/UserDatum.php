<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $uid
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property boolean $is_active
 * @property User $user
 */
class UserDatum extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'uid', 'title', 'created_at', 'updated_at', 'is_active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
