<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;

class Actor extends Model
{
  public function getFullName (){
    return $this-> first_name. ' '.$this-> last_name;
}
