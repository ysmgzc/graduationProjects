<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smtp_settings extends Model
{
    use HasFactory;

//    DB de ki bağalantılı tablo ismi
    protected $table = 'smtp_settings';
    protected $primaryKey = 'id';
//    Tablodaki butun alanlara erisim ver. guarded içerisine yazılan alanlara erişim işlemi verme
    protected $guarded = [];
    public $timestamps = true;
}
