<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\District
 *
 * @property-read \App\Province $province
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Ward[] $wards
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\District query()
 * @mixin \Eloquent
 */
class District extends Model
{
    protected $table='districts';
    protected $fillable = ['id','name','slug_name','province_id','type'];
    public $timestamps =true;

    public function wards(){
        return $this->hasMany('App\Ward');
    }
    
    public function province(){
        return $this->belongsTo('App\Province');
    }
}
