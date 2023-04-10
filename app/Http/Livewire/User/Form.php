<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Form extends Component
{
  public User $user;

  protected function rules()
  {
    return [
      'user.name' => 'required|min:6',
      'user.email' => ['required', 'email', 'unique:users,email,' . $this->user->id],
      'user.newPassword' => 'required|min:6',
    ];
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function mount(User $user)
  {
    $this->user = $user;
    $this->user->newPassword = ''; // (This is just for hidden fields in model)
  }

  public function save()
  {
    $this->validate();

    // (This is just for hidden fields in model)
    $this->user->password = Hash::make($this->user->newPassword);
    // remove newPassword attribute from user model
    unset($this->user->newPassword);

    $this->user->save();

    $this->dispatchBrowserEvent('toastr', ['type' => 'success', 'title' => 'success', 'message' => 'User updated successfully!']);

    return redirect('user');
  }

  public function render()
  {
    return view('livewire.user.form');
  }
}
