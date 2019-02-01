<?php

namespace Kaweb\MacciesMenu\Helper;

class RequestHelper
{
    public function get(string $url): string
    {
        return file_get_contents($url);
    }
}
