<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    // Get primary key from the DB for the controller
    protected $primaryKey = 'id_worker';
}
