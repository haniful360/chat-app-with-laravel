<div class="w-1/3 border-r border-gray-200 bg-white overflow-y-auto">
    <div class="p-4">
        <input type="text" placeholder="Search or start a new chat" class="w-full p-2 border rounded">
    </div>
    <ul>
        {{-- @foreach($conversations as $conversation) --}}
        <li class="flex items-center gap-3 p-4 hover:bg-gray-100 cursor-pointer border-b">
            <img src="{{ $conversation->user->avatar ?? 'https://via.placeholder.com/40' }}" alt="" class="w-10 h-10 rounded-full">
            <div class="flex-1">
                <h4 class="font-semibold"> hanif</h4>
                <p class="text-sm text-gray-500 truncate">{{ $conversation->last_message }}</p>
            </div>
            <div class="text-xs text-gray-400">{{ $conversation->last_message_time->format('g:i A') }}</div>
        </li>
        {{-- @endforeach --}}
    </ul>
</div>
