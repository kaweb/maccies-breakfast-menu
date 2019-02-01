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

        $deadRows = [0];

        echo $table->length;

        for ($i = 0; $i < $table->length; $i++) {
            if (in_array($i, $deadRows)) {
                continue;
            }

            $tr = $table->item($i);
            $tds = $tr->childNodes;

            for ($j = 0; $j < $tr->childNodes; $j++) {
                $tr->item(0);
            }

            print_r([
                'tr' => $tr,
                'tds' => $tds
            ]);

            die;
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
