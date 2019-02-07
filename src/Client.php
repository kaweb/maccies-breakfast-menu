<?php

namespace Kaweb\MacciesMenu;

use Kaweb\MacciesMenu\Helper\RequestHelper;
use Kaweb\MacciesMenu\Parsers\MenuParser;

class Client
{
    const MENU_URL = "https://burgerlad.com/mcdonalds-breakfast-menu/";

    public static function create()
    {
        return new self(new RequestHelper(), new MenuParser());
    }

    /**
     * @var RequestHelper
     */
    protected $requestHelper;

    /**
     * @var MenuParser
     */
    private $menuParser;

    /**
     * Client constructor.
     *
     * @param RequestHelper $requestHelper
     * @param MenuParser $menuParser
     */
    public function __construct(RequestHelper $requestHelper, MenuParser $menuParser)
    {
        $this->requestHelper = $requestHelper;
        $this->menuParser = $menuParser;
    }

    /**
     * Return the McDonalds menu as an array.
     *
     * @return array
     */
    public function getMenu(): array
    {
        $html = $this->requestHelper->get(self::MENU_URL);

        return $this->menuParser->parse($html);
    }
}
