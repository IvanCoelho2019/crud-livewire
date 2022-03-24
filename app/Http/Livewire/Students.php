<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use PhpParser\Node\Expr\FuncCall;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;

// vValidation https://laravel-livewire.com/docs/2.x/input-validation

    protected $rules = [
        'firstname' => 'required|min:3',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function resetImputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone='';
        $this->resetValidation();
    }

    public function store()
    {
        $validadeData = $this->validate();


         Student::create($validadeData);
         session()->flash('message', 'Student ' . $this->firstname  . ' ' . $this->lastname . ' creadet sucesss!');
         $this->resetImputFields();
         $this->emit('studentAdded');

    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function edit($id)
    {
        $this->resetValidation();
        $student = Student::where('id',$id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;

    }

    public function update()
    {
        $this->validate();

        if($this->ids)
        {
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' =>$this->lastname,
                'email' => $this->email,
                'phone' =>$this->phone,
            ]);
            session()->flash('message', 'Student ' . $this->firstname  . ' ' . $this->lastname . ' update sucesss!' );
            $this->resetImputFields();
            $this->emit('studentUpdated');

        }
    }
    public function delete($id)
    {

        $student = Student::where('id',$id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;

    }
    public function deleteConfirm($id){
        if($id)
        {
            Student::where('id',$id)->delete();
            session()->flash('message','Student Deleted Successfully!');
            $this->emit('studentDeleted');
        }

    }
    public function newStore()
    {
        $this->resetImputFields();
    }

    public function render()
    {
        $students = Student::orderBy('id', 'DESC')->get();
        return view('livewire.students',['students'=>$students]);
    }
}
