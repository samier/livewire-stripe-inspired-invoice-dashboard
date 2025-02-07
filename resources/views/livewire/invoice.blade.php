<div  class="px-4 sm:px-4 md:max-w-7xl mx-auto py-10">

    {{-- Search Inout --}}
    <div class="flex items-center space-x-2 border-b py-2 mt-5 mb-10">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-slate-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>          
        <input type="text" name="search" wire:model.live.debounce.300ms="search" placeholder="Search..." class="focus:outline-none w-80" >
    </div>
    {{-- End Search Inout --}}


    {{-- Action Buttons --}}
    <div class="flex flex-col sm:flex-row justify-normal sm:justify-between  sm:items-center">
        <h1 class="text-3xl font-extrabold">Invoices</h1>
        <div>
            <button class=" text-slate-600 py-1 px-3 rounded-md inline-flex items-center border shadow-sm hover:shadow-md transition duration-300 ease-in-out mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-slate-600">
                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 0 1 .628.74v2.288a2.25 2.25 0 0 1-.659 1.59l-4.682 4.683a2.25 2.25 0 0 0-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 0 1 8 18.25v-5.757a2.25 2.25 0 0 0-.659-1.591L2.659 6.22A2.25 2.25 0 0 1 2 4.629V2.34a.75.75 0 0 1 .628-.74Z" clip-rule="evenodd" />
                </svg>                      
                <span class="mx-2 font-medium">Filter</span>
            </button>
            <button class=" text-slate-600 py-1 px-3 rounded-md inline-flex items-center border shadow-sm hover:shadow-md transition duration-300 ease-in-out mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                </svg>                    
                <span class="mx-2 font-medium">Export</span>
            </button>
            <button class=" text-white bg-indigo-500 py-1 px-3 rounded-md inline-flex items-center border shadow-sm hover:shadow-md transition duration-300 ease-in-out mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>                                    
                <span class="mx-2 font-medium">Create Invoice</span>
                <span class="bg-indigo-400 px-1.5 rounded-md text-sm"> N </span>
            </button>
        </div>
    </div>
     {{-- End Action Buttons --}}


    {{-- Filters --}}
    <div class="flex space-x-6 border-b mt-2 overflow-x-auto">
        @foreach ($tabs as $tab)
        <button wire:click="setActiveTab('{{ $tab['value'] }}')" 
            class="py-1 font-medium marker:transition-colors min-w-20 sm:min-w-0 
            {{ $activeTab === $tab['value'] ? 'border-blue-500 text-blue-500 border-b-2 transition duration-300 ease-in-out' : 'text-slate-500 transition duration-300 ease-in-out' }}">
            {{$tab['name']}}
        </button>
        @endforeach
    </div>
     {{-- End Filters --}}

    {{-- Invoice Table --}}
    <div class="flex-auto block py-8 pt-6 ">
        <div class="overflow-x-auto pb-44">
          <table class="w-full my-0 align-middle text-dark border-neutral-200">
            <thead class="align-bottom">
              <tr class="font-semibold text-sm border-b text-slate-700 uppercase">
                <th class="pb-3 text-start min-w-28 md:w-auto cursor-pointer" colspan="2">Amount </th>
                <th class="pb-3 text-start min-w-40 md:min-w-1">Invoice Number</th>
                <th class="pb-3 text-start min-w-52 md:w-auto">Customer Email</th>
                <th class="pb-3 text-start min-w-32 md:w-auto">Status</th>
                <th class="pb-3 text-start min-w-48 md:w-auto" colspan="2">Created Date</th>
              </tr>
            </thead>
            <tbody class="text-slate-600 text-base space-y-2 font-medium">
                @if (count($invoices) > 0)
                @foreach ($invoices as $item)
                    <tr class="border-b last:border-b-0">
                        <td class="py-2 text-end w-[10px]">${{$item['amount']}}</td>
                        <td class="py-2 text-center text-slate-500 w-20">USD</td>
                        <td class="py-2 tracking-wide w-40">{{$item['invoice_number']}}</td>
                        <td class="py-2">{{$item['customer_email']}}</td>
                        <td class="py-2 sm:w-24"> <span class="{{$item['status']}}"> {{str_replace('_',' ',ucfirst($item['status']))}}</span></td>
                        <td class="py-2  w-[250px] sm:w-[150px]">{{$item['created_date']->format('M d, h:m A')}}</td>
                        <td class="py-2 text-end relative dropdown">
                        <button wire:click="setSelectedInvoice({{$item['id']}})" class="dropdown-btn mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 dropdown">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>                      
                        </button>

                        {{-- Show/Hide Dropdown Content --}}
                        @if($selectedInvoiceId == $item['id'])
                            {{-- Dropdown Component --}}
                            <x-dropdown-menu />
                            {{-- End Dropdown Component --}}
                        @endif
                        {{-- End Show/Hide Dropdown Content --}}
                        </td>
                    </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="7" class="text-center py-4">No Data Found</td>
                    </tr>
                @endif
            </tbody>
          </table>
        </div>
    </div>
     {{-- End Invoice Table --}}
</div>

   @section('javascript')
    <script>
        // close table dropdown
        document.addEventListener('click', function (event) {
            const dropdowns = document.querySelectorAll('.dropdown');
            const dropdownMenu = document.querySelectorAll('.dropdown-menu');

            // Dispatch livewire event when click anywhere on dom if only dropdown is opened
            dropdowns.forEach(function(dropdown) {
                if (!dropdown.contains(event.target) && !event.target.closest('.dropdown-btn') && dropdownMenu.length > 0) {
                    Livewire.dispatch('invoice-select', {invoice_id : null});
                }
            });
        });
    </script>
   @endsection
  