<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Invoice extends Component
{
    // Constant for default active tab
    const ACTIVETAB = 'all';

    // Public properties exposed to the Livewire view
    public $tabs;               // List of tabs (e.g., 'All', 'Paid', 'Unpaid')
    public $selectedInvoiceId;  // Currently selected invoice ID
    public $invoices;           // List of invoices
    public $activeTab;          // Currently active tab (default is 'all')
    public $search = '';        // Search term for filtering invoices

    /**
     * Initialize component properties when mounted.
     *
     * Set default values for tabs, active tab, and fetch invoices.
     */
    public function mount()
    {
        $this->tabs = config('constant.tabs');
        $this->activeTab = self::ACTIVETAB;
        $this->getInvoices();
    }

    /**
     * Set the active tab and filter invoices accordingly.
     *
     * @param string $tab The tab to set as active
     * @return void
     */
    public function setActiveTab($tab)
    {   
        if ($this->activeTab !== $tab) {
            $this->activeTab = $tab;
            $this->getInvoices();
        }
    }

    /**
     * Toggle the selected invoice dropdown.
     *
     * @param int $invoice_id The invoice ID to toggle
     * @return void
     */
    public function setSelectedInvoice($invoice_id)
    {
        $this->selectedInvoiceId = ($this->selectedInvoiceId === $invoice_id) ? null : $invoice_id;
    }

    /**
     * Handle JS event to close the invoice dropdown.
     *
     * This method will be triggered by the 'invoice-select' event.
     * 
     * @return void
     */
    #[On('invoice-select')] 
    public function closeDropdown()
    {
        $this->selectedInvoiceId = null;
    }

    /**
     * Fetch and filter invoices based on the active tab and search term.
     *
     * The filtering logic checks the status of the invoices and performs a search
     * based on the invoice number, amount, or customer email.
     * 
     * @return void
     */
    public function getInvoices()
    {
        $this->invoices = collect(config('constant.invoices'))
            // First, filter by the active tab (status of invoices)
            ->filter(function ($item) {
                return $this->activeTab === self::ACTIVETAB || $item['status'] === $this->activeTab;
            })
            // Next, filter by the search term
            ->filter(function ($item) {
                if (!empty($this->search)) {
                    // Perform case-insensitive search in multiple fields
                    return stripos($item['invoice_number'], $this->search) !== false ||
                           stripos($item['amount'], $this->search) !== false ||
                           stripos($item['customer_email'], $this->search) !== false;
                }
                return true;
            })
            // Sort invoices by the creation date in descending order
            ->sortByDesc('created_date');
    }

    /**
     * Render the component and return the view.
     *
     * This method renders the Livewire component, updating the invoice list
     * when necessary (e.g., when the active tab or search query changes).
     * 
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $this->getInvoices();
        return view('livewire.invoice');
    }
}