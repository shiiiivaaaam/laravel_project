<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


     protected $fillable = [
        'comment',
        'idea_id',
        'user_id'
    ];


    public function idea() {
    return $this->belongsTo(Idea::class);
    // ✅ uses 'idea_id' by default
}


public function user(){
    return $this->belongsTo(User::class);
}

}
