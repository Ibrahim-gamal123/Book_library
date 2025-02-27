<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ErrorAlert extends Component
{
    public $errors;

    public function __construct($errors = null)
    {
        $this->errors = $errors ?? session('errors');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.error-alert');
    }
}
