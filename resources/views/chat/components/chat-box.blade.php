<div class="flex-1 bg-gradient-to-tr from-green-100 via-green-200 to-orange-100 flex flex-col">
    <div class="p-4 border-b flex items-center justify-between bg-white">
        <h2 class="font-bold text-lg">{{ $selectedUser->name ?? 'Select a user' }}</h2>
    </div>

    <!-- Message area -->
    <div class="flex-1 overflow-y-auto p-4 space-y-2">
        @foreach($messages as $message)
        @include('chat.components.message', ['message' => $message])
        @endforeach
    </div>

    <!-- Input -->
    <form id="chat-form" class="flex items-center p-3 border-t bg-white">
        <input type="text" name="message" placeholder="Type a message" class="flex-1 border p-2 rounded">
        <button type="submit" class="ml-2 bg-green-500 text-white px-4 py-2 rounded">Send</button>
    </form>
</div>
