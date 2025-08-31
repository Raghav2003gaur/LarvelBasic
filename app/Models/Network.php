<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
 protected $fillable = ['name', 'skill', 'bio', 'dojo_id'];
    /** @use HasFactory<\Database\Factories\NetworkFactory> */
    use HasFactory;   
    public function dojo(){
        return $this->belongsTo(Dojo::class);
    }                                   
}
