<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeTemplateController extends Controller
{
    public function getComponent()
    {
        $alerts = [
            [
                'color' => 'success',
                'title' => 'Rendering JSON',
                'text' => 'Sometimes you may pass an array to your view with the intention of rendering it as JSON in order to initialize a JavaScript variable.',
            ],
            [
                'color' => 'danger',
                'title' => 'Blade Directives',
                'text' => 'In addition to template inheritance and displaying data, Blade also provides convenient shortcuts for common PHP control structures, such as conditional statements and loops.',
            ],
            [
                'color' => 'info',
                'title' => 'Environment Directives',
                'text' => 'You may check if the application is running in the production environment using the @production directive:',
            ],
        ];

        $items = [
            [
                'title' => 'Mobile Developers Have Lost Their Glory, and Here’s Why',
                'description' => 'Partly, it’s the AI train. But there’s more.',
                'count' => '69',
            ],
            [
                'title' => 'Apple is Killing Swift',
                'description' => 'Swift was a great language, but it has fallen far from its original vision.',
                'count' => '14',
            ],
            [
                'title' => 'What Not to Include on your Designer Resume in 2025',
                'description' => 'Creating a designer resume that shines in 2025 is not just about what you include — it’s about what you leave out.',
                'count' => '21',
            ],
        ];

        $cards = [
            [
                'image' => 'https://www.universetoday.com/wp-content/uploads/2013/10/milky_way.jpg',
                'text' => 'Milky Way',
            ],
            [
                'image' => 'https://news.uchicago.edu/sites/default/files/images/2022-10/sgr%20A%2A%20ESO%20and%20M.%20Kornmesser%20690.jpg',
                'text' => 'Black Hole',
            ]
        ];

        $buttons = [
            [
                'color' => 'danger',
                'text' => 'Danger',
            ],
            [
                'color' => 'success',
                'text' => 'Success',
            ],
            [
                'color' => 'warning',
                'text' => 'Warnging',
            ],
        ];


        return view('admin.blade-template.component', compact('alerts', 'items', 'cards', 'buttons'));
        
    }

    public function getLocalization()
    {
        return view('admin.blade-template.localization');
    }

    public function changeLocalization(Request $request)
    {
        $lang = $request['lang'];
        session()->put('lang', $lang);

        return redirect(route('admin.localization'));
        // dd($lang);
    }
}
