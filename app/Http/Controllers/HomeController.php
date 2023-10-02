<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use PhpParser\Node\Expr\Cast\Object_;
use Waynelogic\LaravelBase\Cms\Page;

class HomeController extends Controller
{
    public function index() {
        $data = (object) [
            'phone' => '+7 (931) 307-83-77',
            'schedule' => 'Пн - Вс: 09:00 - 21:00',
            'email' => 'info@septiclos.ru',
            'social' => [
                'telegram' => 'https://t.me/MariyaPry',
                'whatsapp' => 'https://wa.me/+79117095838',
            ]
        ];
        return view('home', [
            'Agent' => new Agent(),
            'page' => Page::make()->additionalData($data)
        ]);
    }
}
