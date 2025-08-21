<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;

    protected $fillable = ['email_address', 'type_id', 'status'];

    public function siboType()
    {
        return $this->belongsTo(SiboType::class, 'type_id');
    }
}
