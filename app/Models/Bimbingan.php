<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function DataUser()
    {
        return $this->hasMany(DataUser::class, 'bimbingan_id');
    }
}
