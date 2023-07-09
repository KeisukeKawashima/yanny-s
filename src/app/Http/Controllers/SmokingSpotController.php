<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\UseCase\SmokingSpotSearchUseCase;
use Illuminate\Http\Request;

class SmokingSpotController extends Controller
{
    private $smokingSpotSearchUseCase;

    public function __construct(SmokingSpotSearchUseCase $smokingSpotSearchUseCase)
    {
        $this->smokingSpotSearchUseCase = $smokingSpotSearchUseCase;
    }

    public function search(Request $request)
    {
        // リクエストパラメータから位置情報と喫煙所の種類を取得
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $type = $request->input('type');

        // UseCase層を呼び出して喫煙所を検索
        $smokingSpots = $this->smokingSpotSearchUseCase->execute($latitude, $longitude, $type);

        // 検索結果をレスポンスとして返す
        return response()->json($smokingSpots);
    }
}
