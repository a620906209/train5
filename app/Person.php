<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
       //table name
       protected $table = 'address_book_db';
       //primary key
       public $primarykey = 'id';
       //timestamps
       public $timestamps = 'true';
         public function user(){
        return $this->belongsTo('App\AddressBookDB');
    }
}
