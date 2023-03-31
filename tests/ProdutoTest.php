<?php 

namespace Code;

use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{

    private $produto;

    public function setUp(): void
    {
        $this->produto = new Produto();
    }

    // public static function setUpBeforeClass(): void
    // {
    //     print __METHOD__;
    // }

    // public static function tearDownAfterClass(): void
    // {
    //     print __METHOD__;
    // }

    public function testSeONomeDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setPrice('19.99');

        $this->assertEquals('19.99', $produto->getPrice(), 'Valores não são iguais');
    }

    public function testSeOPrecoDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setPrice('19.99');

        $this->assertEquals('19.99', $produto->getPrice(), 'Valores não são iguais');

    }

    public function testSeOSlugDoProdutoESetadoCorretamente()
    {
        $produto = $this->produto;
        $produto->setName('produto-1');

        $this->assertEquals('produto-1', $produto->getName(), 'Valores não são iguais');
    }

    /** 
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Parâmetro inválido, informe um slug
     */
    public function testSeSetSlugLancaExceptionQuandoNaoInformado()
    {
        $product = $this->produto;
        
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Parãmetro inválido, informe um slug');

        $product->setSlug('');
        
    }
}
