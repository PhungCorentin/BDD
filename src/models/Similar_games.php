<?php

namespace games\models;
use Illuminate\Database\Eloquent\Model;

class Similar_games extends Model
{
    protected $table = 'similar_games';
    protected $primaryKey = ['game1_id','game2_id'];
    public $timestamps = false ;
}