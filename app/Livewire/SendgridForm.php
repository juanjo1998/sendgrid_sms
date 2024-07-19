<?php

namespace App\Livewire;

use Livewire\Component;

class SendgridForm extends Component
{
    public $name;
    public $email;
    public $description;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'description' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Aquí puedes agregar la lógica para manejar la sumisión del formulario
        // Por ejemplo, enviar un correo con SendGrid

        session()->flash('message', 'Formulario enviado con éxito.');

        // Limpiar los campos después de enviar el formulario (opcional)
        $this->reset();
    }

    public function render()
    {
        return view('livewire.sendgrid-form')->layout('layouts.app');
    }
}
