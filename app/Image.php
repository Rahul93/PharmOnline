<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $entity_id
 * @property string $entity_type
 * @property string $file_name
 * @property int $display_order
 * @property boolean $is_deleted
 * @property int $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Image extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['entity_id', 'entity_type', 'file_name', 'display_order', 'is_deleted', 'updated_by', 'created_at', 'updated_at'];

}
