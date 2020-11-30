<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'min', 'max',
    ];

    /**
     * Get the weight's date.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateFormatAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');
    }
}
