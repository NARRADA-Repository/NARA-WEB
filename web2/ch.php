<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NARA Chatbot</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="stylesheet" href="css/mega.css">
  <style>
    #chatbot-btn {
      position: fixed; bottom: 20px; right: 20px;
      z-index: 1050; border-radius: 50%;
      width: 60px; height: 60px; font-size: 24px;
    }
    .chat-messages {
      max-height: 400px; overflow-y: auto;
    }
    .chat-bubble {
      padding: 10px 15px; border-radius: 15px;
      margin-bottom: 10px; max-width: 80%; word-wrap: break-word;
    }
    .chat-user { background: #0d6efd; color: #fff; margin-left: auto; }
    .chat-bot { background: #e9ecef; color: #000; margin-right: auto; }
  </style>
</head>
<body>

  <!-- Floating Button -->
  <button id="chatbot-btn" class="btn btn-primary shadow">
    <i class="bi bi-chat-dots"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> <img src="img/logo.png" alt="" style="width: 40px;height: 40px;"> NARA ChatBot</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body d-flex flex-column">
          <div id="chatArea" class="chat-messages mb-3"></div>
          <div class="input-group">
            <input id="userInput" type="text" class="form-control" placeholder="Type your message...">
            <button id="sendBtn" class="btn btn-primary"><i class="bi bi-send"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const chatBtn = document.getElementById('chatbot-btn');
    const chatModal = new bootstrap.Modal(document.getElementById('chatModal'));
    const chatArea = document.getElementById('chatArea');
    const sendBtn = document.getElementById('sendBtn');
    const userInput = document.getElementById('userInput');

    chatBtn.addEventListener('click', () => {
      chatModal.show();
      if (!document.querySelector('.welcome-shown')) {
        addMessage("Welcome to NARA! How can I help you?", 'bot');
        chatArea.lastElementChild.classList.add('welcome-shown');
      }
    });

    function addMessage(message, sender) {
      const bubble = document.createElement('div');
      bubble.classList.add('chat-bubble', sender === 'user' ? 'chat-user' : 'chat-bot');
      bubble.textContent = message;
      chatArea.appendChild(bubble);
      chatArea.scrollTop = chatArea.scrollHeight;
    }

    async function getChatGPTReply(userMessage) {
      const res = await fetch("chat.php", {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: JSON.stringify({message: userMessage})
      });
      const data = await res.json();
      return data.choices[0].message.content.trim();
    }

    sendBtn.addEventListener('click', async () => {
      const text = userInput.value.trim();
      if (!text) return;
      addMessage(text, 'user');
      userInput.value = '';

      addMessage("Typing...", 'bot');
      const typingBubble = chatArea.lastElementChild;

      try {
        const reply = await getChatGPTReply(text);
        typingBubble.remove();
        addMessage(reply, 'bot');
      } catch (err) {
        typingBubble.remove();
        addMessage("Error getting reply.", 'bot');
        console.error(err);
      }
    });

    userInput.addEventListener('keypress', e => {
      if (e.key === 'Enter') sendBtn.click();
    });
  </script>
</body>
</html>
