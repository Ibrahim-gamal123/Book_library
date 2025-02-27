<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthForm extends Component
{
    /**
     * Create a new component instance.
     */
    public $action;
    public $method;
    public $title;

    public function __construct($action, $method = 'POST', $title = 'Auth Form')
    {
        $this->action = $action;
        $this->method = $method;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-form');
    }
}
