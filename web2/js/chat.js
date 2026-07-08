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