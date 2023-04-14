<?php

namespace App\Http\Livewire\Test;

use App\Models\Test;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
    public Test $test;

    protected function rules()
    {
        return [
            'test.name' => 'required|min:6',
        ];
    }


    public function mount($test)
    {
        $this->test = $test;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $this->validate();

        $this->test->save();

        $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'test updated successfully!']);

        return redirect('test');
    }

    public function render()
    {
        return view('livewire.test.form');
    }
}
