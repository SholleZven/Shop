<?php

namespace App\Http\Controllers\Weather;

use App\Http\Controllers\Controller;
use App\Services\Weather\WeatherParser;
use Illuminate\Http\Request;

class WeatherIndexController extends Controller
{
    protected $weatherParser;

    public function __invoke(WeatherParser $weatherParser)
    {
        $this->weatherParser = $weatherParser;

        $weatherData = $this->weatherParser->parseWeatherData('https://weather.rambler.ru/v-chelyabinske/');
        // Обработка или отображение данных
        return view('weather.index', compact('weatherData'));
    }
}
