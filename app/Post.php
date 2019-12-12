<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name, can change the table name here
    protected $table = 'posts';
    //Primary Key
    protected $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
