<?php

namespace Tests\Feature;

use App\UseCase\SmokingSpotSearchUseCase;
use App\Http\Controllers\SmokingSpotController;
use Illuminate\Http\Request;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class SmokingSpotControllerTest extends TestCase
{
    private $useCaseMock;
    private $controller;

    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        // テスト用のリクエストオブジェクトを作成
        $request = Request::create('/search', 'GET', [
            'latitude' => 123.456,
            'longitude' => 789.012,
            'type' => 'outdoor',
        ]);

        // SmokingSpotSearchUseCaseのモックを作成
        $useCaseMock = Mockery::mock(SmokingSpotSearchUseCase::class);

        // executeメソッドのモックを定義
        $useCaseMock->shouldReceive('execute')
            ->with(123.456, 789.012, 'outdoor')
            ->andReturn(['spot1', 'spot2', 'spot3']);

        // SmokingSpotControllerのインスタンスを作成し、モックを注入
        $controller = new SmokingSpotController($useCaseMock);
        $response = $controller->search($request);

        // レスポンスの内容を検証
        $this->assertSame(['spot1', 'spot2', 'spot3'], $response->getData());
        $this->assertSame(200, $response->getStatusCode());
    }

    protected function tearDown(): void
    {
        Mockery::close();
    }
}
