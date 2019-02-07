<?php

namespace Kaweb\MacciesMenu\Models;

class MenuCategoryModel
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var MenuItemModel[]
     */
    protected $items;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return MenuItemModel[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param $item
     */
    public function addItem(MenuItemModel $item): void
    {
        $this->items[] = $item;
    }

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
