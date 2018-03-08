<?php
/**
 * Created by PhpStorm.
 * User: serii
 * Date: 3/8/18
 * Time: 9:06 PM
 */

namespace App\Models;


use App\Db;
use App\Model;

class User extends Model
{
    public $name;
    public $email;
    const TABLE = 'users';
}
