<?php

namespace App\View\Components;

use App\Models\Service;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceComponent extends Component
{
    public function render(): View|Closure|string
    {
        $services = Service::with(['media'])->limit(6)->get();

        return view('components.service-component', compact('services'));
    }
}
