<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Maintext;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $about_company = Maintext::where('status', 'main_about')->first();
        $main_info = Maintext::where('status', 'main_info')->first();
        $mains = Maintext::where('status', 'main')->get();
        return view('layouts.guest', compact('mains', 'main_info', 'about_company'));
    }
}
