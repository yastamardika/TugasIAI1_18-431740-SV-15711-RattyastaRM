<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Gits extends Model
{
    protected $table = 'gits';

    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 'git','created_at','updated_at'
    ];
}
