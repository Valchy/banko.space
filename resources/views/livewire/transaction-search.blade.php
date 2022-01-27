<div>
    <input type="text" placeholder="{{__('Search for a transaction')}}" wire:change.debounce.1000ms="searchTransactions($event.target.value)" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"/>
</div>
