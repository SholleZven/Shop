<?php
namespace App\Services\Weather;

use App\Services\CurlService;

class WeatherParser
{
    protected $curlService;

    public function __construct(CurlService $curlService)
    {
        $this->curlService = $curlService;
    }

    public function parseWeatherData($url)
    {
        $html = $this->curlService->fetchPage($url);
        $data = [];

        // Пример регулярного выражения для извлечения температуры
        if (preg_match('/<div class="HhSR MBvM">(.*?)<\/div>/', $html, $matches)) {
            $data['temperature'] = trim($matches[1]);
        }

        // Пример регулярного выражения для извлечения описания
        // if (preg_match('/<div class="description-class">(.*?)<\/div>/', $html, $matches)) {
        //     $data['description'] = trim($matches[1]);
        // }

        return $data;
    }
}
