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
            'phone' => '+7 (904) 636-44-14',
            'schedule' => 'Пн - Пт: 09:00 - 18:00',
            'email' => 'info@septiclos.ru',
            'social' => [
                'telegram' => 'https://t.me/MariyaPry',
                'whatsapp' => 'https://wa.me/+79117095838',
            ]
        ];
        return view('home', [
            'Agent' => new Agent(),
            'page' =>  Page::make()->additionalData($data)
        ]);
    }
}
