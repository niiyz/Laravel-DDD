<?php

use Keihi\Repositories\KeihiInterface;

class KeihiRepositoryTest extends TestCase
{
    protected $repo;

    public function setUp()
    {
        parent::setUp();
        $this->repo = $this->app->make(KeihiInterface::class);
    }

    public function testGet()
    {
        $result = $this->repo->get(1);
        $this->assertSame($result->title, 'WEB+DB PRESS Vol.89');
        $this->assertSame($result->price, 1598);
        $this->assertSame($result->url,   'http://www.amazon.co.jp/gp/product/4774176389');
    }

    public function testGetList()
    {
        $result = $this->repo->getList();
        $this->assertCount(3, $result);
        $this->assertSame($result[2]->title, 'HTML5 Web標準API バイブル');
        $this->assertSame($result[2]->price, 3218);
        $this->assertSame($result[2]->url,   'http://www.amazon.co.jp/gp/product/4774176540');
    }

    public function testCreate()
    {
        $result = $this->repo->create(["title" => "テストタイトル", "price" => 1000, "http://test.com"]);
        var_dump($result);
    }

}
