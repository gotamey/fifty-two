<div>
    <div>
        <input type="text" placeholder="Whats on your mind?" wire:model="newComment">
    </div>
    <div>
        <button wire:click="addComment">Add</button>
    </div>
    @foreach ($comments as $comment)
    <div>
        <div>
            <p>{{ $comment['creator'] }}</p>
            <p>{{ $comment['created_at'] }}</p>
        </div>
        <div>
            <p>{{ $comment['body'] }}</p>
        </div>
    </div>
    @endforeach
</div>
