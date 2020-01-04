<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organisationGroup extends Model
{

    protected $table = 'organisation_groups';

    // public $timestamps= false;
    /**
     * Attribu that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'orgGroupCode',
        'orgGroupName'
    ];
}
