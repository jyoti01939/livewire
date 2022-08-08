<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class User extends Component
{
    public $full_name;
    public $user_name;
    public $email;
    public $password;
    public $mobile;
    public $roles;
    public function mount()
    {
        $this->roles=Role::all();

    //    dd($roles);
    }

    protected $rules = [
        'full_name' => 'required',
        'user_name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
        'mobile' => 'required',
        'role' => 'required'
    ];
    public function submit()
    {
        dd("form subbmit");
       $validateData = $this->validate();
       User::create($validateData);


    }



    public function render()
    {
        return view('livewire.user.user')->layout('admin.partials.master');
    }
}
