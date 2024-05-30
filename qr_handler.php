<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $qrcode = $data['qrcode'];

    // Processar o QR code conforme necessário
    // Exemplo: salvar no banco de dados, procurar informações, etc.

    $nomearq = "Dados_.txt";
    $arquivo = fopen($nomearq, "a");
    fwrite($arquivo, $qrcode."\n");
    fclose($arquivo);

    $lines = file($nomearq, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $reversedArray = array_reverse($lines);

    // Para este exemplo, apenas retornaremos o QR code recebido
    echo json_encode(['status' => 'success', 'qrcode' => $reversedArray]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método não permitido']);
}
?>
