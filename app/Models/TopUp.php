<?php

namespace App\Models;

use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TopUp extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected function wallet(){
        return $this->belongsTo(Wallet::class, 'rekening', 'rekening');
    }
}