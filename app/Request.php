<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $sender_id
 * @property int $recipient_id
 * @property int $job_id
 * @property string $request_type
 * @property string $message
 * @property boolean $is_deleted
 * @property boolean $response
 * @property string $created_at
 * @property string $updated_at
 */
class Request extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['sender_id', 'recipient_id', 'job_id', 'request_type', 'message', 'is_deleted', 'response', 'created_at', 'updated_at'];


}
