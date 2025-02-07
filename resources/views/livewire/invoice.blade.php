<div  class="px-4 sm:px-4 md:max-w-7xl mx-auto py-10">

    {{-- Search Inout --}}
    <div class="flex flex-col sm:flex-row justify-between sm:items-center border-b py-0 sm:py-4 mt-5 mb-10">
        <div class="flex items-start sm:items-center space-x-2 order-2 sm:order-1 pb-4 sm:py-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>          
            <input type="text" name="search" wire:model.live.debounce.300ms="search" placeholder="Search..." class="focus:outline-none w-80" >
        </div>
        <div class="order-1 sm:order-2">
            <div class="flex items-end float-end pb-6 sm:pb-0 sm:items-center space-x-6">
                <button class="flex text-slate-500 items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4 text-slate-500">
                        <path d="M13.92 3.845a19.362 19.362 0 0 1-6.3 1.98C6.765 5.942 5.89 6 5 6a4 4 0 0 0-.504 7.969 15.97 15.97 0 0 0 1.271 3.34c.397.771 1.342 1 2.05.59l.867-.5c.726-.419.94-1.32.588-2.02-.166-.331-.315-.666-.448-1.004 1.8.357 3.511.963 5.096 1.78A17.964 17.964 0 0 0 15 10c0-2.162-.381-4.235-1.08-6.155ZM15.243 3.097A19.456 19.456 0 0 1 16.5 10c0 2.43-.445 4.758-1.257 6.904l-.03.077a.75.75 0 0 0 1.401.537 20.903 20.903 0 0 0 1.312-5.745 2 2 0 0 0 0-3.546 20.902 20.902 0 0 0-1.312-5.745.75.75 0 0 0-1.4.537l.029.078Z" />
                    </svg>
                    <span>Feedback?</span>                  
                </button>
                <div class="flex items-center space-x-3">
                    <button class="cursor-pointer relative">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-slate-500">
                        <path fill-rule="evenodd" d="M10 2a6 6 0 0 0-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 0 0 .515 1.076 32.91 32.91 0 0 0 3.256.508 3.5 3.5 0 0 0 6.972 0 32.903 32.903 0 0 0 3.256-.508.75.75 0 0 0 .515-1.076A11.448 11.448 0 0 1 16 8a6 6 0 0 0-6-6ZM8.05 14.943a33.54 33.54 0 0 0 3.9 0 2 2 0 0 1-3.9 0Z" clip-rule="evenodd" />
                        </svg>
                        {{-- <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-rose-500 border border-white rounded-full text-[10px] text-white">1</span> --}}
                        <div class="absolute inline-flex items-center justify-center w-[18px] h-[18px] text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full -top-[10px]">1</div>
                        {{-- <div class="text-[10px] bg-rose-500 text-white m-0 p-0 w-3 h-3 rounded-full">1</div> --}}
                    </button>
                    <button class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-slate-500">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0ZM8.94 6.94a.75.75 0 1 1-1.061-1.061 3 3 0 1 1 2.871 5.026v.345a.75.75 0 0 1-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 1 0 8.94 6.94ZM10 15a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-slate-500">
                        <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                        </svg>                                            
                    </button>
                </div>
            </div>
        </div>
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
        <div class="overflow-x-auto pb-52">
          <table class="w-full my-0 align-middle text-dark border-neutral-200">
            <thead class="align-bottom">
              <tr class="font-semibold text-sm border-b text-slate-700 uppercase">
                <th class="pb-3 text-start min-w-40 md:w-[10%] cursor-pointer" colspan="2">Amount </th>
                <th class="pb-3 text-start min-w-40 md:w-[10%]">Invoice Number</th>
                <th class="pb-3 text-start min-w-52 md:w-[70%]">
                    <div class="flex space-x-1">
                        <span>Customer Email</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-[18px] text-slate-500 cursor-pointer">
                            <path fill-rule="evenodd" d="M11.828 2.25c-.916 0-1.699.663-1.85 1.567l-.091.549a.798.798 0 0 1-.517.608 7.45 7.45 0 0 0-.478.198.798.798 0 0 1-.796-.064l-.453-.324a1.875 1.875 0 0 0-2.416.2l-.243.243a1.875 1.875 0 0 0-.2 2.416l.324.453a.798.798 0 0 1 .064.796 7.448 7.448 0 0 0-.198.478.798.798 0 0 1-.608.517l-.55.092a1.875 1.875 0 0 0-1.566 1.849v.344c0 .916.663 1.699 1.567 1.85l.549.091c.281.047.508.25.608.517.06.162.127.321.198.478a.798.798 0 0 1-.064.796l-.324.453a1.875 1.875 0 0 0 .2 2.416l.243.243c.648.648 1.67.733 2.416.2l.453-.324a.798.798 0 0 1 .796-.064c.157.071.316.137.478.198.267.1.47.327.517.608l.092.55c.15.903.932 1.566 1.849 1.566h.344c.916 0 1.699-.663 1.85-1.567l.091-.549a.798.798 0 0 1 .517-.608 7.52 7.52 0 0 0 .478-.198.798.798 0 0 1 .796.064l.453.324a1.875 1.875 0 0 0 2.416-.2l.243-.243c.648-.648.733-1.67.2-2.416l-.324-.453a.798.798 0 0 1-.064-.796c.071-.157.137-.316.198-.478.1-.267.327-.47.608-.517l.55-.091a1.875 1.875 0 0 0 1.566-1.85v-.344c0-.916-.663-1.699-1.567-1.85l-.549-.091a.798.798 0 0 1-.608-.517 7.507 7.507 0 0 0-.198-.478.798.798 0 0 1 .064-.796l.324-.453a1.875 1.875 0 0 0-.2-2.416l-.243-.243a1.875 1.875 0 0 0-2.416-.2l-.453.324a.798.798 0 0 1-.796.064 7.462 7.462 0 0 0-.478-.198.798.798 0 0 1-.517-.608l-.091-.55a1.875 1.875 0 0 0-1.85-1.566h-.344ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z" clip-rule="evenodd" />
                          </svg>
                          
                    </div>
                </th>
                <th class="pb-3 text-start min-w-32 md:w-[10%]">Status</th>
                <th class="pb-3 text-start min-w-16 md:w-[10%]">Due</th>
                <th class="pb-3 text-start min-w-52 md:w-auto" colspan="2">Created Date</th>
              </tr>
            </thead>
            <tbody class="text-slate-600 text-base space-y-2 font-medium">
                @if (count($invoices) > 0)
                @foreach ($invoices as $item)
                    <tr class="border-b last:border-b-0">
                        <td class="py-2 text-end w-[10px] {{$item['status'] == 'paid' ? 'font-bold' : 'font-thin'}}">${{$item['amount']}}</td>
                        <td class="py-2 text-center text-slate-500 w-28">
                            <div class="flex">
                                <span class="flex-1">USD</span> 
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 mr-4 cursor-pointer rotate-90">
                                    <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z" clip-rule="evenodd" />
                                  </svg>                               
                            </div>
                        </td>
                        <td class="py-2 tracking-wide w-40">{{$item['invoice_number']}}</td>
                        <td class="py-2">{{$item['customer_email']}}</td>
                        <td class="py-2 sm:w-24"> <span class="{{$item['status']}}"> {{str_replace('_',' ',ucfirst($item['status']))}}</span></td>
                        <td class="py-2 w-16">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                              </svg>
                              
                        </td>
                        <td class="py-2  w-[250px] sm:w-[130px]">{{$item['created_date']->format('M d, h:m A')}}</td>
                        <td class="py-2 w-20 text-end relative dropdown">
                            <div  class="inline-flex  rounded-md dropdown  {{$selectedInvoiceId == $item['id'] ? 'border divide-x-2 shadow-sm p-0' : 'p-[1px]'}}">
                                <button  class=" dropdown {{$selectedInvoiceId == $item['id'] ? 'block' : 'hidden'}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-5 dropdown">
                                        <path fill-rule="evenodd" d="M12 2.25a.75.75 0 0 1 .75.75v16.19l6.22-6.22a.75.75 0 1 1 1.06 1.06l-7.5 7.5a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 1 1 1.06-1.06l6.22 6.22V3a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd" />
                                    </svg>  
                                </button>
                                <button wire:click="setSelectedInvoice({{$item['id']}})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-6 dropdown">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>   
                                </button>
                            </div>

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
                if (!dropdown.contains(event.target) && !event.target.closest('.dropdown') && dropdownMenu.length > 0) {
                    Livewire.dispatch('invoice-select', {invoice_id : null});
                }
            });
        });
    </script>
   @endsection
  