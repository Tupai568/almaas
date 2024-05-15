<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function bimbingan()
    {
        return $this->belongsTo(Bimbingan::class);
    }
}
