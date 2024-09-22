<div>
    <h2>New Post:</h2>

{{--    Current Title: <span x-text="$wire.title.toUpperCase()"></span>--}}
{{--    <button x-on:click="$wire.title=''">Clear title</button>--}}
    <button type="submit" x-on:click="$wire.save">Save</button>

{{--    <div x-data="{ count: 0 }">--}}
{{--        <span x-text="count"></span>--}}
{{--        <button x-on:click="count++">+</button>--}}
{{--        <button x-on:click="count--">-</button>--}}
{{--    </div>--}}

    <form wire:submit="save">
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            <small>
                Characters: <span x-text="$wire.title.length"></span>
            </small>
            @error('title')
            <em>{{ $message }}</em>
            @enderror
        </label>

        <label>
            <span>Content</span>
            <textarea
                    wire:model="content"></textarea>
            <small>
                Words: <span x-text="$wire.content.split(' ').length - 1"></span>
            </small>
            @error('content')
            <em>{{ $message }}</em>
            @enderror
        </label>

        <button type="submit">Save</button>
    </form>
</div>
