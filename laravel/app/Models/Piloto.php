<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Piloto extends Model
{
    use HasUUID;
    protected $table = 'tbl_pilotos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
}