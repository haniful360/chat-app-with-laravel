<x-app-layout>
  <div class="container mx-auto p-4">
    <div id="chat-box" class="border p-4 h-[400px] overflow-y-scroll mb-4 bg-white shadow">
      @foreach($messages as $msg)
        <div class="mb-2">
          <strong>{{ $msg->user->name }}:</strong> {{ $msg->message }}
        </div>
      @endforeach
    </div>

    <form id="chat-form" class="flex">
      <input id="message-input" type="text" class="flex-1 p-2 border rounded-l" placeholder="Type your message">
      <button type="submit" class="bg-blue-500 text-white px-4 rounded-r">Send</button>
    </form>
  </div>

  <script>
    document.getElementById('chat-form').addEventListener('submit', function (e) {
      e.preventDefault();
      const input = document.getElementById('message-input');
      axios.post('/chat', { message: input.value })
        .then(() => input.value = '');
    });

    window.Echo.channel('chat')
      .listen('MessageSent', (e) => {
        const chatBox = document.getElementById('chat-box');
        const msg = `<div><strong>${e.message.user.name}:</strong> ${e.message.message}</div>`;
        chatBox.innerHTML += msg;
        chatBox.scrollTop = chatBox.scrollHeight;
      });
  </script>
</x-app-layout>

