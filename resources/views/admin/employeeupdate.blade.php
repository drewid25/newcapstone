
@include('partials.header')
 <x-adminnav/>
 <div class="container bg-letter py-6 px-6 h-full mx-auto grid grid-cols-12 grid-flow-col shadow-2xl">
    <x-adminsidebar/>
    <x-updateemployee :employee=$employee />
    <x-adminrightbar/>
 </div>


@include('partials.footer')