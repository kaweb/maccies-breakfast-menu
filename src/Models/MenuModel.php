<?php

namespace Kaweb\MacciesMenu\Models;

class MenuModel
{
    /**
     * @var MenuCategoryModel[]
     */
    protected $categories;

    /**
     * @return MenuCategoryModel[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param MenuCategoryModel $categories
     */
    public function addCategory(MenuCategoryModel $categories): void
    {
        $this->categories = $categories;
    }
}
