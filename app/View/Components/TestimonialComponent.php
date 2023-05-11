<?php

namespace App\View\Components;

use App\Models\Testimonial;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestimonialComponent extends Component
{
    public function render(): View|Closure|string
    {
        $testimonials = Testimonial::limit(6)->latest()->get();

        return view('components.testimonial-component', compact('testimonials'));
    }
}
