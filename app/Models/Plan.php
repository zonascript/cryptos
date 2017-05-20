<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model {

    protected $table = 'plans';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'currency_id', 'plan_date', 'starting_row', 'reinvest', 'reinvest_period_id', 'term', 'stop_reinvesting_term'];

}

//id
//user_id
//currency_id
//plan_date
//starting_row
//reinvest
//reinvest_period_id
//term
//stop_reinvesting_term
//created_at
//updated_at
//deleted_at