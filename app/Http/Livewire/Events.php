<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $events = [];
    public $date_from;
    public $date_to;
    public $title;

    public function mount()
    {
        $this->date_from = date('Y-m-d', strtotime(now()));
        $this->date_to = date('Y-m-d', strtotime(now()->addMonth(3)));
    }

    public function render()
    {
        $this->events = Event::where([
            ['event_date', '>=', $this->date_from],
            ['event_date', '<=', $this->date_to],
            ['event_title', 'like', '%' . $this->title . '%'],
            ['is_active', '=', 1]
        ])->get();

        return view('livewire.events');
    }
}
