@if ($message->user_id === auth()->id())
<div class="flex justify-end">
    <div class="bg-green-100 text-black px-4 py-2 rounded-lg max-w-xs">
        {{ $message->message }}
        <div class="text-xs text-right text-gray-500 mt-1">{{ $message->created_at->format('g:i A') }}</div>
    </div>
</div>
@else
<div class="flex justify-start">
    <div class="bg-white text-black px-4 py-2 rounded-lg max-w-xs shadow">
        {{ $message->message }}
        <div class="text-xs text-gray-500 mt-1">{{ $message->created_at->format('g:i A') }}</div>
    </div>
</div>
@endif
