<tr @class(['archived' => $post->is_archived])
{{--    wire:key="{{ $post->id }}"--}}
>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        @unless($post->is_archived)
            <button
                type="button"
                wire:click="archive({{ $post->id }})"
                wire:confirm="Are you sure you want to archive this Posts?"
            >
                Archive
            </button>
        @else
            <button
                type="button"
                wire:click="unarchived({{ $post->id }})"
                wire:confirm="Are you sure you want to unarchived this Posts?"
            >
                Unarchived
            </button>
        @endunless
        <button
            type="button"
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this Posts?"
        >
            Delete
        </button>
    </td>
</tr>
