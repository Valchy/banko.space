<div>
    <input placeholder="Search for a transaction" wire:change.debounce.1000ms="searchTransactions($event.target.value)"/>
</div>
