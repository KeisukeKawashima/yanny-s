<?php
declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\Entity;

use App\Domain\Models\SmokingSpot\ValueObjects\Location;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotId;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotName;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotType;

class SmokingSpot {
    /** @var SmokingSpotId 喫煙所ID */
    private $id;

    /** @var SmokingSpotName 喫煙所名 */
    private $name;

    /** @var Location 喫煙所の位置情報 */
    private $location;

    /** @var SmokingSpotDescription 喫煙所の詳細情報 */
    private $description;

    /** @var bool 屋根の有無 */
    private $roofed;

    /** @var OpeningHours 喫煙所の営業時間 */
    private $hours;

    /** @var bool ベンチの有無 */
    private $hasBench;

    /** @var bool 電子タバコの許可状態 */
    private $electronicCigaretteAllowed;

    /** @var bool 紙タバコの許可状態 */
    private $cigaretteAllowed;

    /** @var bool 壁の有無 */
    private $walled;

    /** @var SmokingSpotType 喫煙所の種類 */
    private $type;

    // constructor
    public function __construct(
        SmokingSpotId $id,
        SmokingSpotName $name,
        Location $location,
        ?string $description,
        bool $roofed,
        ?OpeningHours $hours,
        bool $hasBench,
        bool $electronicCigaretteAllowed,
        bool $cigaretteAllowed,
        bool $walled,
        SmokingSpotType $type
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->description = $description;
        $this->roofed = $roofed;
        $this->hours = $hours;
        $this->hasBench = $hasBench;
        $this->electronicCigaretteAllowed = $electronicCigaretteAllowed;
        $this->cigaretteAllowed = $cigaretteAllowed;
        $this->walled = $walled;
        $this->type = $type;
    }

    // getters
    public function getId(): SmokingSpotId {
        return $this->id;
    }

    public function getName(): SmokingSpotName {
        return $this->name;
    }

    public function getLocation(): Location {
        return $this->location;
    }

    // other getters...

    // setters are generally not used in DDD as entities should be valid upon creation and not changed thereafter
}
