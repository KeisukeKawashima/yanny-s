<?php

declare(strict_types=1);

namespace App\UseCase;

use App\Domain\Models\SmokingSpot\Entity\SmokingSpot;
use App\Domain\Models\SmokingSpot\ValueObjects\Location;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotType;
use App\Domain\Services\SmokingSpotSearchService;

class SmokingSpotSearchUseCase
{
    private $smokingSpotSearchService;

    public function __construct(SmokingSpotSearchService $smokingSpotSearchService)
    {
        $this->smokingSpotSearchService = $smokingSpotSearchService;
    }

    public function execute(int $latitude, int $longitude, string $type): array
    {
        $locationValueObject = new Location($latitude, $longitude);
        $typeValueObject = new SmokingSpotType($type);

        // サービス層を呼び出して喫煙所を検索
        $smokingSpots = $this->smokingSpotSearchService->searchByLocationAndType($locationValueObject, $typeValueObject);

        // ドメインモデルの配列を返す
        return $smokingSpots;
    }
}
