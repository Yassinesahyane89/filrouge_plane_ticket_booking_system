<?php

namespace App\Http\Livewire\Cabin;

use App\Models\Cabin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public Cabin $cabin;

  protected function rules()
  {
    return [
      'cabin.name' => 'required|min:3',
    ];
  }


  public function mount($cabin)
  {
    $this->cabin = $cabin;
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function update()
  {
    $this->validate();

    $this->cabin->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'cabin updated successfully!']);

    return redirect('cabin');
  }

  public function render()
  {
    return view('livewire.cabin.form');
  }
}
