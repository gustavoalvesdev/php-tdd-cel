<?php 

namespace Code;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    public function testSetNomeDoProdutoESetadoCorretamente()
    {
        $produto = new Produto();
        $produto->setName('Produto 1');

        $this->assertEquals('Produto 1', $produto->getName(), 'Valores não são iguais');
    }
}
