<div>
    The current time is: {{ time() }}

    <button
        wire:click="$refresh"
        type="button">Refresh</button>
</div>
