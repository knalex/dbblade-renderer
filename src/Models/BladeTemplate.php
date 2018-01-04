<?php

namespace Knalex\DbTemplate\Models;

use Illuminate\Database\Eloquent\Model;

class BladeTemplate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "blade_templates";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'virtualroot', 'body'
    ];

    public function scopeNameFilter($query, $name)
    {
        return $query->where('name', $name);
    }

    public function scopeVirtualrootFilter($query, $virtualroot)
    {
        return $query->where('virtualroot', $virtualroot);
    }

}
