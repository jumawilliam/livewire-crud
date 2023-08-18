<?php

namespace App\Livewire;

use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\Customer;


class CreateCustomer extends Component
{
    public $title='My awesome Title';

    #[Rule('required|max:255')]
    public $name='';

    #[Rule('required|email|unique:customers|max:255')]
    public $email='';

    #[Rule('required|unique:customers|max:255')]
    public $phone='';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function create(){
        //sleep(15);
        $this->validate();

        Customer::create(
            $this->only(['name','email','phone'])
        );

        return $this->redirect('/customers');

    }
}
