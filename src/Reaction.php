<?php 
namespace Armincms\Reactable;
 

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model 
{  
	protected $guarded = [];

	protected $casts = [
		'lieked' 	=> 'integer',
		'dislieked' => 'integer',
		'vote' 		=> 'integer',
		'ips'		=> 'collection',
		'ip'		=> 'string',
	]; 
}