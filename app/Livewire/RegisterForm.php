<?php

namespace App\Livewire;

use App\Services\AuthService;
use Exception;
use Livewire\Component;

class RegisterForm extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';


    protected function rules() {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|same:password_confirmation'
        ];
    }

    protected function messages() {
        return [
            'name.required' => 'O Campo Nome é obrigatório',

            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Digite um email válido.',

            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha precisa ter no mínimo 6 caracteres.',
            'password.same' => 'As senhas não coincidem.',
        ];
    }


    public function register(AuthService $authService) {
        try {

            $this->validate();
            $data = [
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password
                ];

                $authService->register_user($data);

            return redirect()->route('login.get')->with('success', 'Conta criada com sucesso.');

        }catch(Exception $e) {
            return redirect()->back()->with('error', 'Aconteceu algum erro ao criar a conta.');
        }
    }



    public function render()
    {
        return view('components.register-form');
    }
}
