<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var string $url     The URL link given
     * @var string $title   The title of the card
     * @var string $message The message of the card
     */
    public string $url;
    public string $title;
    public string $message;

    /**
     * Create a new component instance.
     */
    public function __construct ($url, $title, $message)
    {
        $this->url = $url;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render (): View|Closure|string
    {
        return view('components.card');
    }
}
