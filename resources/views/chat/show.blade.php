<form action="{{ route('chat.store') }}" method="POST">
    @csrf
    <input type="hidden" name="chat_room_id" value="{{ $id }}">
    <textarea name="message" cols="30" rows="10"></textarea>
    <button type="submit">送信</button>
</form>

@foreach($messages as $message)
    <p>{{ $message->message }}</p>
@endforeach

