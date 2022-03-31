<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone'
    ];

    /**
     * @var mixed|string
     */

    /**
     * Get the user that owns the phone.
     */
    public function user(): HasOne
    {
        return $this->hasone('App\Models\User');
    }
}
