<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;


class Form extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'sex', 'description'];

    public static function boot() {
        parent::boot();
  
     
        // create a event to happen on saving
        static::creating(function($table)  {
                $table->created_by = auth()->user()->id;
        });

        // below function are created for updated and deleted user Id with is not used at this application
        static::updating(function($table)  {
            $table->updated_by = auth()->user()->id;
        });
    
        // create a event to happen on deleting
        static::deleting(function($table)  {
            $table->deleted_by = auth()->user()->id;
        });
  
      }


}
