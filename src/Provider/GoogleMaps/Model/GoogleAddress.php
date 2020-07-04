<?php

declare(strict_types=1);

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\GoogleMaps\Model;

use Geocoder\Model\Address;
use Geocoder\Model\AdminLevel;
use Geocoder\Model\AdminLevelCollection;

/**
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class GoogleAddress extends Address
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $locationType;

    /**
     * @var array
     */
    private $resultType = [];

    /**
     * @var string|null
     */
    private $formattedAddress;

    /**
     * @var string|null
     */
    private $streetAddress;

    /**
     * @var string|null
     */
    private $intersection;

    /**
     * @var string|null
     */
    private $postalCodeSuffix;

    /**
     * @var string|null
     */
    private $political;

    /**
     * @var string|null
     */
    private $colloquialArea;

    /**
     * @var string|null
     */
    private $ward;

    /**
     * @var string|null
     */
    private $neighborhood;

    /**
     * @var string|null
     */
    private $premise;

    /**
     * @var string|null
     */
    private $subpremise;

    /**
     * @var string|null
     */
    private $naturalFeature;

    /**
     * @var string|null
     */
    private $airport;

    /**
     * @var string|null
     */
    private $park;

    /**
     * @var string|null
     */
    private $pointOfInterest;

    /**
     * @var string|null
     */
    private $establishment;

    /**
     * @var AdminLevelCollection
     */
    private $subLocalityLevels;

    /**
     * @var bool
     */
    private $partialMatch;

    /**
     * @param null|string $id
     *
     * @return GoogleAddress
     */
    public function withId(?string $id = null): self
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @see https://developers.google.com/places/place-id
     *
     * @return null|string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param null|string $locationType
     *
     * @return GoogleAddress
     */
    public function withLocationType(?string $locationType = null): self
    {
        $new = clone $this;
        $new->locationType = $locationType;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @return array
     */
    public function getResultType(): array
    {
        return $this->resultType;
    }

    /**
     * @param array $resultType
     *
     * @return GoogleAddress
     */
    public function withResultType(array $resultType): self
    {
        $new = clone $this;
        $new->resultType = $resultType;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getFormattedAddress(): ?string
    {
        return $this->formattedAddress;
    }

    /**
     * @param string|null $formattedAddress
     *
     * @return GoogleAddress
     */
    public function withFormattedAddress(?string $formattedAddress = null): self
    {
        $new = clone $this;
        $new->formattedAddress = $formattedAddress;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getAirport(): ?string
    {
        return $this->airport;
    }

    /**
     * @param string|null $airport
     *
     * @return GoogleAddress
     */
    public function withAirport(?string $airport = null): self
    {
        $new = clone $this;
        $new->airport = $airport;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getColloquialArea(): ?string
    {
        return $this->colloquialArea;
    }

    /**
     * @param string|null $colloquialArea
     *
     * @return GoogleAddress
     */
    public function withColloquialArea(?string $colloquialArea = null): self
    {
        $new = clone $this;
        $new->colloquialArea = $colloquialArea;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getIntersection(): ?string
    {
        return $this->intersection;
    }

    /**
     * @param string|null $intersection
     *
     * @return GoogleAddress
     */
    public function withIntersection(?string $intersection = null): self
    {
        $new = clone $this;
        $new->intersection = $intersection;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getPostalCodeSuffix(): ?string
    {
        return $this->postalCodeSuffix;
    }

    /**
     * @param string|null $postalCodeSuffix
     *
     * @return GoogleAddress
     */
    public function withPostalCodeSuffix(?string $postalCodeSuffix = null): self
    {
        $new = clone $this;
        $new->postalCodeSuffix = $postalCodeSuffix;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getNaturalFeature(): ?string
    {
        return $this->naturalFeature;
    }

    /**
     * @param string|null $naturalFeature
     *
     * @return GoogleAddress
     */
    public function withNaturalFeature(?string $naturalFeature = null): self
    {
        $new = clone $this;
        $new->naturalFeature = $naturalFeature;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @param string|null $neighborhood
     *
     * @return GoogleAddress
     */
    public function withNeighborhood(?string $neighborhood = null): self
    {
        $new = clone $this;
        $new->neighborhood = $neighborhood;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getPark(): ?string
    {
        return $this->park;
    }

    /**
     * @param string|null $park
     *
     * @return GoogleAddress
     */
    public function withPark(?string $park = null): self
    {
        $new = clone $this;
        $new->park = $park;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getPointOfInterest(): ?string
    {
        return $this->pointOfInterest;
    }

    /**
     * @param string|null $pointOfInterest
     *
     * @return GoogleAddress
     */
    public function withPointOfInterest(?string $pointOfInterest = null): self
    {
        $new = clone $this;
        $new->pointOfInterest = $pointOfInterest;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getPolitical(): ?string
    {
        return $this->political;
    }

    /**
     * @param string|null $political
     *
     * @return GoogleAddress
     */
    public function withPolitical(?string $political = null): self
    {
        $new = clone $this;
        $new->political = $political;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getPremise(): ?string
    {
        return $this->premise;
    }

    /**
     * @param string $premise
     *
     * @return GoogleAddress
     */
    public function withPremise(?string $premise = null): self
    {
        $new = clone $this;
        $new->premise = $premise;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getStreetAddress(): ?string
    {
        return $this->streetAddress;
    }

    /**
     * @param string|null $streetAddress
     *
     * @return GoogleAddress
     */
    public function withStreetAddress(?string $streetAddress = null): self
    {
        $new = clone $this;
        $new->streetAddress = $streetAddress;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getSubpremise(): ?string
    {
        return $this->subpremise;
    }

    /**
     * @param string|null $subpremise
     *
     * @return GoogleAddress
     */
    public function withSubpremise(?string $subpremise = null): self
    {
        $new = clone $this;
        $new->subpremise = $subpremise;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getWard(): ?string
    {
        return $this->ward;
    }

    /**
     * @param string|null $ward
     *
     * @return GoogleAddress
     */
    public function withWard(?string $ward = null): self
    {
        $new = clone $this;
        $new->ward = $ward;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getEstablishment(): ?string
    {
        return $this->establishment;
    }

    /**
     * @param string|null $establishment
     *
     * @return GoogleAddress
     */
    public function withEstablishment(?string $establishment = null): self
    {
        $new = clone $this;
        $new->establishment = $establishment;

        return $new;
    }

    /**
     * @return AdminLevelCollection
     */
    public function getSubLocalityLevels(): AdminLevelCollection
    {
        return $this->subLocalityLevels;
    }

    /**
     * @param array $subLocalityLevel
     *
     * @return GoogleAddress
     */
    public function withSubLocalityLevels(array $subLocalityLevel): self
    {
        $subLocalityLevels = [];
        foreach ($subLocalityLevel as $level) {
            if (empty($level['level'])) {
                continue;
            }

            $name = $level['name'] ?? $level['code'] ?? '';
            if (empty($name)) {
                continue;
            }

            $subLocalityLevels[] = new AdminLevel($level['level'], $name, $level['code'] ?? null);
        }

        $subLocalityLevels = array_unique($subLocalityLevels);

        $new = clone $this;
        $new->subLocalityLevels = new AdminLevelCollection($subLocalityLevels);

        return $new;
    }

    /**
     * @return bool
     */
    public function isPartialMatch(): bool
    {
        return $this->partialMatch;
    }

    /**
     * @param bool $partialMatch
     *
     * @return GoogleAddress
     */
    public function withPartialMatch(bool $partialMatch): self
    {
        $new = clone $this;
        $new->partialMatch = $partialMatch;

        return $new;
    }
}
