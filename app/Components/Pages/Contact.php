<?php

namespace App\Components\Pages;

use Illuminate\Support\Facades\Route;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class Contact extends Component
{
    use LivewireAlert;

    public $first_name;
    public $last_name;
    public $email;
    public $company;
    public $description;

    public $checked = false;

    public function route()
    {
        return Route::get('/contact')
            ->name('Contact');
    }

    public function render()
    {
        return view('pages.contact');
    }

    public function SubmitForm()
    {
        try {
            $this->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:contacts,email',
                'company' => 'required|string|max:255',
                'description' => 'required|string',
            ], [
                'email.unique' => 'The email address has already been taken.',
            ]);

            // If validation passes, save the data and show success message
            $newContact = new \App\Models\Contact();
            $newContact->first_name = $this->first_name;
            $newContact->last_name = $this->last_name;
            $newContact->email = $this->email;
            $newContact->company = $this->company;
            $newContact->description = $this->description;
            $newContact->save();

            $this->alert('success', 'Your message has been sent successfully');
            $this->resetForm();

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Catch validation errors and show them using alert
            $errors = $e->validator->getMessageBag()->toArray();
            foreach ($errors as $error) {
                $this->alert('error', $error[0]);
            }
        }
    }

    private function resetForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->company = '';
        $this->description = '';
    }
}
