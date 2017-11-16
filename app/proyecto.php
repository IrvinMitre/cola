<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class proyecto extends Model
{
    protected $fillable = [
        'nombre','colaboradores','admin'
    ];
    
    public function area(){
        return $this->hasMany('App\area', 'idA', 'idProyecto');
    }
   
}