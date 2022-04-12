<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $errors;
    public $color;
    public $show;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errorBag, $show = false)
    {
        $this->show = $show;
        $this->errors = $errorBag;
        //dd($this->errors->any(), session()->all());
        if($this->errors->any()){
            $this->message = $this->errors->getBag("default")->first();
            $this->color = "red";
        } else {
            $this->message = session("error") ?? session("success") ?? "No alert found!";
            $this->color = session()->has("error") ? "red" : "green";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        //dd($this->type, $this->message);
        return view('components.alert');
    }
}
