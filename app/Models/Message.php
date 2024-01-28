<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'message_body',
        'response',
    ];


    public function assignedUser(){
        
        return $this->belongsTo(User::class, 'agent_id');
    }
}