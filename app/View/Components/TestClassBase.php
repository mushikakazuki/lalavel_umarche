<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $classbasename;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($classbasename='test')
    {
        $this->classbasename = $classbasename;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base');
    }
}
