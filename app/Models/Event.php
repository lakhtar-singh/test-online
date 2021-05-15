<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;
use Carbon\Carbon;

class Event extends Model
{
	/**
	* 		Return all workshops 
	*/
	function 	workshops(){
		return $this->hasMany(Workshop::class, 'event_id', 'id');
	}


	/**
	*	Return All future Workshops
	*/
	function 	future_workshops(){
		return $this->workshops()
					->whereDate('start', '>', Carbon::now());
	}


}
