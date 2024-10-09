<?php 

namespace Code;

use PHPUnit\Framework\TestCase;

class LogTest extends TestCase
{

    private $log;

    protected function assertPreConditions(): void
    {
        $classe = class_exists('\\Code\\Log');
        $this->assertTrue($classe);
    }

    public function setUp(): void
    {
        $this->log = new Log();
    }

    public function testSeLogEFeitoComSucesso()
    {
        $log = $this->log;

        $message = 'Log de teste';

        $this->assertEquals('Logando dados no sistema: ' . $message, $log->log($message));
    }
}
