<?php

namespace Code\QueryBuilder;

use PHPUnit\Framework\TestCase;
use Code\QueryBuilder\Select;

class SelectTest extends TestCase 
{

    protected $select;

    protected function assetPreConditions(): void
    {
        $this->assertTrue(\class_exists(Select::class));
    }

    protected function setUp(): void
    {
        $this->select = new Select('products');
    }

    public function testIfQueryBaseIsGeneratedWithSuccess()
    {
        $query = $this->select->getSql();

        $this->assertEquals('SELECT * FROM products', $query);
    }

    public function testIfQueryIsGeneratedWithWhereConditions()
    {
        $query = $this->select->where('name', '=', 'Produto 1');

        $this->assertEquals('SELECT * FROM products WHERE name = :name', $query->getSql());
    }
}
