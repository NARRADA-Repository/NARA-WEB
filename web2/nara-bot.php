
  <!-- Floating Button -->
  <button id="chatbot-btn" class="btn btn-primary shadow">
    <i class="bi bi-chat-dots"></i>
  </button>

  <!-- Modal -->
  <div class="modal fade" id="chatModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title"> <img src="img/logo.png" alt="" style="width: 40px;height: 40px;"> NARA Virtual Assistant</h6>
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
