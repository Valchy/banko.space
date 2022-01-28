<div>
    <h1 class="pb-3 text-2xl font-black">{{__('All Transactions')}}</h1>
    <input type="text"
        placeholder="{{__('Search for a transaction')}}"
        wire:change.debounce.1000ms="searchTransactions($event.target.value)"
        class="invisible mb-10 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
    />

    <x-transaction-table :transactions="$transactions"/>
</div>