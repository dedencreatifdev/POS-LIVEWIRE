<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

#[Layout('components.layouts.auth')]
class LoginIndex extends Component
{

    public $email;
    public $password;

    /**
     * login
     *
     * @return void
     */

    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required'
        ];
    }

    public function loginAuth()
    {

        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('sukses', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('Dashboard.Index');
        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('login');
        }
    }

    public function render()
    {
        return view('livewire.auth.login-index');
    }
}
