<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getCriteria()
    {
        return Criteria::get();
    }

    public function storeCriteria($string)
    {
        Criteria::create([
            'name'  => $string,
        ]);
    }
}
