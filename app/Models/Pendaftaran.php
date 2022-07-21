<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'a_pendaftaran';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    public $timestamps = false;
}
