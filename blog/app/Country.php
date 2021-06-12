<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Country
 *
 * @author PETKO
 */
class Country extends Model {

    protected $table = 'country';
    public $timestamps = false;
    protected $primaryKey = 'Code';
    public function capitalCity()
    {
         return $this->belongsTo(city::class,'Capital');    
    }

}
