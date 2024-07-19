<?php

namespace App\Livewire;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
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

        Mail::to($this->email)->send(new ContactFormMail());

        session()->flash('message', 'Formulario enviado con éxito.');

        // clean data
        $this->reset();
    }

    public function render()
    {
        return view('livewire.sendgrid-form')->layout('layouts.app');
    }
}
