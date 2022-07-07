<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $timestamps = false;
    
    protected $table = 'chat';

}
