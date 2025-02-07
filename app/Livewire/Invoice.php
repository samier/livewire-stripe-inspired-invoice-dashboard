<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Invoice extends Component
{

    CONST ACTIVETAB = 'all';
    public $tabs;
    public $activeTab = self::ACTIVETAB;
    public $selectedInvoiceId;
    public $invoices;

    public $search = '';
    

    /**
     * get tab list and invoices when component render.
     */
    public function mount(){
        $this->tabs = config('constant.tabs');
        $this->getInvoices();
    }

    /**
     * Set active tabs and filter invoices data.
     */
    public function setActiveTab($tab)
    {   
        if($this->activeTab != $tab){
            $this->activeTab = $tab;
            $this->getInvoices();
        }
    }

    
    /**
     * Opens and close dropdwon for single student.
     */
    public function setSelectedInvoice($invoice_id){
        if($this->selectedInvoiceId == $invoice_id){
            $this->selectedInvoiceId = NUll;
        }else{
            $this->selectedInvoiceId = $invoice_id;
        }
    }
    

    /**
     * Handle JS event for closing dropdown.
     */
    #[On('invoice-select')] 
    public function closeDropdown(){
        $this->selectedInvoiceId = NUll;

    }

    /**
     * Get Invoice data and filtering.
     */
    public function getInvoices(){
        $this->invoices =  collect(config('constant.invoices'))->filter(function($item){
            if($this->activeTab != 'all'){
                return $item['status'] == $this->activeTab;
            }else{
                return $item['status'];
            }
        })->filter(function ($item) {
            if (!empty($this->search)) {
                return stripos($item['invoice_number'], $this->search) !== false ||
                       stripos($item['amount'], $this->search) !== false ||
                       stripos($item['customer_email'], $this->search) !== false;
            }
            return true;
        })->sortByDesc('created_date');
    }


    /**
     * Render the component.
     */
    public function render()
    {
        $this->getInvoices();
        return view('livewire.invoice');
    }
}
