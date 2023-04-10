<?php

namespace App\Http\Livewire\Ticket;

use App\Models\Ticket;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
    public Ticket $ticket;

    protected function rules()
    {
        return [
            'ticket.name' => 'required|min:6',
        ];
    }


    public function mount($ticket)
    {
        $this->ticket = $ticket;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $this->validate();

        $this->ticket->save();

        $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'ticket updated successfully!']);

        return redirect('ticket');
    }

    public function render()
    {
        return view('livewire.ticket.form');
    }
}
