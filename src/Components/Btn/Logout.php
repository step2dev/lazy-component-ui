<?php

namespace App\View\Components\Admin\Btn;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logout extends Component
{
    public function render(): View
    {
        return view('lazy::btn.logout');
    }
}