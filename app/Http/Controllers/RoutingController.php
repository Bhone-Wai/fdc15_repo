<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function viewOnly()
    {
        
        return view('admin.routing.view-only');
    }

    public function passDataToView()
    {
        $buttons = [
            [
                "type" => "primary",
                "text" => "Enter"
            ],
            [
                "type" => "secondary",
                "text" => "Enter",
            ],
            [
                "type" => "warning",
                "text" => "Enter",
            ]
        ];
        return view('admin.routing.pass-data-to-view', [
            'btns' => $buttons
        ]); 
    }

    public function routePara($bgColor, $color) 
    {
        return view('admin.routing.route-para')
                ->with('bgColor', $bgColor)
                ->with('color', $color);
    }

    public function dynamicRoutePara(Request $request)
    {
        $bgColor = $request['bgColor'];
        $color = $request['color'];

        return redirect("/admin/routing/route-para/{$bgColor}/{$color}");
    }
}
