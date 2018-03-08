<?php
/**
 * Created by PhpStorm.
 * User: serii
 * Date: 3/8/18
 * Time: 8:13 PM
 */

namespace App;


class Db
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', 'serii1981');

    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        return $res;
    }

    public function query($sql, $class = 'stdClass')
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        if($res !== false) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

        return [];
    }


}



















