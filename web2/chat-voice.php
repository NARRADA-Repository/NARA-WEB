<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     #chatbot-btn {
      position: fixed; bottom: 120px; right: 20px;
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
  
</body>
</html>
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // for testing, can restrict later

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = $input['message'] ?? '';

$apiKey = "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"; // ⬅️ Put your real OpenAI API key here


$ch = curl_init("https://api.openai.com/v1/chat/completions");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    "model" => "gpt-4o-mini",
    "messages" => [
        ["role" => "system", "content" => "You are a helpful assistant for NARA website visitors."],
        ["role" => "user", "content" => $userMessage]
    ]
]));

$response = curl_exec($ch);

if($response === false){
    echo json_encode(['error' => curl_error($ch)]);
} else {
    echo $response;
}

curl_close($ch);
?>