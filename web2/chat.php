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
