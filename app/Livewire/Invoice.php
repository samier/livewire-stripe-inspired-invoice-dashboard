<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Invoice extends Component
{
    public $tabs = [];
    public $activeTab = 'all';

    public $selectedStudentId;

    public $invoices = [];
    
    public function mount(){
        $this->tabs = config('constant.tabs');
        $this->getInvoices();
    }

    public function setActiveTab($tab)
    {   
        if($this->activeTab != $tab){
            $this->activeTab = $tab;
            $this->getInvoices();
        }
    }

    
    public function setSelectedStudent($student_id){
        if($this->selectedStudentId == $student_id){
            $this->selectedStudentId = NUll;
        }else{
            $this->selectedStudentId = $student_id;
        }
    }
    
    #[On('student-select')] 
    public function closeDropdown(){
        $this->selectedStudentId = NUll;

    }

    public function getInvoices(){
        $this->invoices =  collect(config('constant.invoices'))->filter(function($item){
            if($this->activeTab != 'all'){
                return $item['status'] == $this->activeTab;
            }else{
                return $item['status'];
            }
        })->sortByDesc('created_date');
    }

    public function render()
    {
        return view('livewire.invoice');
    }
}
