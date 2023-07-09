<?php

declare(strict_types=1);

namespace App\Infrastructure\Repositories;

use App\Domain\Models\SmokingSpot\Entity\SmokingSpot;
use App\Domain\Models\SmokingSpot\ValueObjects\Location;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotType;
use App\Domain\Repositories\SmokingSpotRepositoryInterface;
use Illuminate\Support\Facades\DB;

class SmokingSpotRepository implements SmokingSpotRepositoryInterface
{
    public function findByLocationAndType(Location $location, SmokingSpotType $type): array
    {
        $results = DB::table('smoking_spots')
            ->where('longitude', $location->getLongitude())
            ->where('latitude', $location->getLatitude())
            ->where('type', $type->getValue())
            ->get();

        $smokingSpots = [];

        foreach ($results as $result) {
            // データをSmokingSpotエンティティにマッピングして追加する
            $smokingSpot = new SmokingSpot();
            $smokingSpots[] = $smokingSpot;
        }

        return $smokingSpots;
    }
}
