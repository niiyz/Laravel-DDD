<?php

namespace Keihi;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Keihi
 * @package Keihi
 */
class Keihi extends Model
{
    /**
     * @var string
     */
    protected $table = 'keihi';
    /**
     * @var array
     */
    protected $fillable = ['title', 'price', 'url'];
}
