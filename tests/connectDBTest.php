<?php

namespace Tests;

use App\ConnectDbPostgres;
use App\ConnectDbMysql;

use PHPUnit\Framework\TestCase;

class connectDBTest extends TestCase
{
    public  function testConnectPostgres() {
        $rs = true;
        $conn = new ConnectDbPostgres();
        $conn->connectPostgres();
        if(!$conn){
            $rs = false;
            $this->assertTrue($rs);
        }else{
            $this->assertTrue($rs);
        }
    }
    public  function testConnectMysql() {
        $rs = true;
        $conn = new ConnectDbMysql();
        $conn->connectMysql();
        if(!$conn){
            $rs = false;
            $this->assertTrue($rs);
        }else{
            $this->assertTrue($rs);
        }
    }

}
