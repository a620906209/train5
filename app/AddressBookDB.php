<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBookDB extends Model
{
    //
    protected $table = 'address_book_db';
    protected $fillable = [
        'name','birth','tel','postalCode','address','user_id',
    ];
}
