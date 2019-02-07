<?php

namespace Kaweb\MacciesMenu\Parsers;

use Kaweb\MacciesMenu\Models\MenuItemModel;

class MenuParser
{
    /**
     * @var string
     */
    protected $html = '';

    /**
     * Parse the HTML string.
     *
     * @param string $html
     * @return MenuItemModel[]
     */
    public function parse(string $html): array
    {
        $this->html = $html;

        $xpath = $this->getXPath();

        $tableData = $xpath->query('//table[@id="tablepress-4"]//tbody//tr//td');

        $menuItems = [];
        for ($i = 4; $i < $tableData->length; $i += 4) {
            $menuItem = new MenuItemModel();

            $name = $tableData->item($i);
            $calories = $tableData->item($i + 1);
            $individualPrice = $tableData->item($i + 2);
            $mealPrice = $tableData->item($i + 3);

            if (!empty($name->nodeValue)) {
                $menuItem->setName($name->nodeValue);
            }

            if (!empty($calories->nodeValue)) {
                $menuItem->setCalories((int)$calories->nodeValue);
            }

            if (!empty($individualPrice->nodeValue)) {
                $menuItem->setIndividualPrice($individualPrice->nodeValue);
            }

            if (!empty($mealPrice->nodeValue)) {
                $menuItem->setMealPrice($mealPrice->nodeValue);
            }

            $menuItems[] = $menuItem;
        }

        return $menuItems;
    }

    protected function getXPath(): \DOMXPath
    {
        $dom = new \DOMDocument();

        @$dom->loadHTML($this->html);

        return new \DOMXPath($dom);
    }
}
