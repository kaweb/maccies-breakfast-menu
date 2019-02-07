<?php

namespace Kaweb\MacciesMenu\Models;

class MenuItemModel
{
    /**
     * @var string
     */
    protected $name = 'None found';

    /**
     * @var int
     */
    protected $calories = -1;

    /**
     * @var float
     */
    protected $individualPrice = -1;

    /**
     * @var float
     */
    protected $mealPrice = -1;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCalories(): int
    {
        return $this->calories;
    }

    /**
     * @param int $calories
     */
    public function setCalories(int $calories): void
    {
        $this->calories = $calories;
    }

    /**
     * @return float
     */
    public function getIndividualPrice(): float
    {
        return $this->individualPrice;
    }

    /**
     * @param float $individualPrice
     */
    public function setIndividualPrice(float $individualPrice): void
    {
        $this->individualPrice = $individualPrice;
    }

    /**
     * @return float
     */
    public function getMealPrice(): float
    {
        return $this->mealPrice;
    }

    /**
     * @param float $mealPrice
     */
    public function setMealPrice(float $mealPrice): void
    {
        $this->mealPrice = $mealPrice;
    }
}
