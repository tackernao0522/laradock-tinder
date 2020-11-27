<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    public $incrementing = false; // インクリメントIDを無効化
    public $timestamps = false; // updated_at, created_atを無効化

    public function toUserId()
    {
        return $this->belongsTo('App\User', 'to_user_id', 'id');
    }

    public function fromUserId()
    {
        return $this->belongsTo('App\User', 'from_user_id', 'id');
    }
}
