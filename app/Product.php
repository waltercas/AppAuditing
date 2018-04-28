<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
		use \OwenIt\Auditing\Auditable;
		
	    protected $auditInclude = [
	        'name',
	        'description',
	        'price',
	    ];


        protected $fillable = [
        'name','description', 'price',
    ];
}
