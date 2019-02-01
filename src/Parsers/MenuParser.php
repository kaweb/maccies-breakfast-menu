<?php

namespace Kaweb\MacciesMenu\Parsers;

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
     * @return array
     */
    public function parse(string $html): array
    {
        $this->html = $html;

        $xpath = $this->getXPath();

        $table = $xpath->query('//table[@id="tablepress-2"]//tbody//tr');

        $i = 0;
        foreach ($table as $item) {
            print_r($xpath->query('//td', $item));

            if ($i === 2) {
                die;
            }
            $i++;
        }

        return [];
    }

    protected function getXPath(): \DOMXPath
    {
        $dom = new \DOMDocument();

        @$dom->loadHTML($this->html);

        return new \DOMXPath($dom);
    }
}
