<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leitura de QR Code</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <script src="https://unpkg.com/html5-qrcode/html5-qrcode.min.js"></script> -->
    <script src="html5-qrcode.min.js"></script>
    <script src="https://kit.fontawesome.com/781b92b6d9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bem Vindo!</h1>
        <div class="text-center mt-4">
            <a href="https://www.youtube.com/@marcelojtelles" target="_blank" class="btn btn-outline-primary btn-lg me-2">
                <i class="fa-brands fa-youtube"></i> YouTube
            </a>
            <a href="https://www.linkedin.com/in/marcelojtelles" target="_blank" class="btn btn-outline-primary btn-lg me-2">
                <i class="fa-brands fa-linkedin"></i> LinkedIn
            </a>
            <a href="https://www.linkedin.com/build-relation/newsletter-follow?entityUrn=7098667513055461376" target="_blank" class="btn btn-outline-primary btn-lg me-2">
                <i class="fa-solid fa-envelope"></i> Newsletter LinkedIn
            </a>
            <a href="https://amzn.to/35VIp8l" target="_blank" class="btn btn-outline-primary btn-lg">
                <i class="fa-solid fa-book"></i> Meu Livro na Amazon
            </a>
            <a href="https://www.udemy.com/course/java-fundamentos-e-praticas/?referralCode=FB18C92B767E1B567D62" target="_blank" class="btn btn-outline-primary btn-lg">
                <i class="fa-solid fa-laptop-code"></i> Treinamento Java
            </a>
        </div>

        <hr class="my-5">

        <h2 class="text-center">Leitura de QR Code</h2>
        <p class="text-center">
            Utilize o botão abaixo para iniciar a leitura de QR codes usando a câmera do seu dispositivo.
        </p>
        <div class="text-center">
            <button id="startButton" class="btn btn-primary btn-lg">Iniciar Leitura de QR Code</button>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div id="qr-reader"  lass="border" style="width: 500px; height: 400px;" class="mt-3"></div>
        </div>
        
        <h2 class="text-center">Últimos qrcode lidos</h2>
        <div id="qr-result" class="text-center mt-3"></div>

        <hr class="my-5">

        <h2 class="text-center">Como Funciona a Leitura de QR Code</h2>
        <p class="text-justify">
            A leitura de QR codes é uma tecnologia que permite a decodificação de informações armazenadas em um padrão gráfico de duas dimensões, o QR code. Utilizando a câmera do dispositivo, é possível capturar a imagem do QR code e, através de algoritmos específicos, decodificar a informação que pode conter links, textos, informações de contato e muito mais.
        </p>
        <p class="text-justify">
            Nesta página, usamos a biblioteca <a href="https://github.com/mebjas/html5-qrcode" target="_blank">html5-qrcode</a> para realizar a leitura dos QR codes. Ao clicar no botão "Iniciar Leitura de QR Code", a câmera do dispositivo é ativada e o vídeo é exibido na área acima. Quando um QR code é detectado, seu conteúdo é mostrado abaixo do vídeo.
        </p>
    </div>

    <!-- Rodapé -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Sobre QR Codes</h5>
                    <p>
                        QR Codes são códigos de barras bidimensionais que podem armazenar informações como URLs, texto, números de telefone e mais. Eles são facilmente escaneados com a câmera do seu celular.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Redes Sociais</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.youtube.com/@marcelojtelles" target="_blank" class="text-dark">
                                <i class="fab fa-youtube"></i> YouTube
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/marcelojtelles" target="_blank" class="text-dark">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/build-relation/newsletter-follow?entityUrn=7098667513055461376" target="_blank" class="text-dark">
                                <i class="fas fa-newspaper"></i> Newsletter LinkedIn
                            </a>
                        </li>
                        <li>
                            <a href="https://amzn.to/35VIp8l" target="_blank" class="text-dark">
                                <i class="fas fa-book"></i> Meu Livro na Amazon
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.udemy.com/course/java-fundamentos-e-praticas/?referralCode=FB18C92B767E1B567D62" target="_blank" class="text-dark">Treinamento Java na Udemy</a>
                        </li>
                        <li>
                            <a href="https://macelot.github.io/marcelot.github.io/index.html" target="_blank" class="text-dark">Site</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-dark text-white">
            © 2024 Meu Site. Todos os direitos reservados.
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const startButton = document.getElementById('startButton');
            const qrResult = document.getElementById('qr-result');
            const qrReader = new Html5Qrcode("qr-reader");
            startButton.addEventListener('click', () => {
                Html5Qrcode.getCameras().then(devices => {
                    if (devices && devices.length) {
                        let cameraId = devices[0].id;
                        qrReader.start(
                            cameraId,
                            {
                                fps: 10,    // Frame rate
                                qrbox: { width: 250, height: 250 }  // Scanning box size
                            },
                            (decodedText, decodedResult) => {
                                qrReader.stop().then(() => {
                                    sendQrCodeToServer(decodedText);
                                }).catch(err => console.error('Failed to stop scanning.', err));
                            },
                            errorMessage => {
                                //console.warn(`QR error = ${errorMessage}`);
                            })
                            .catch(err => {
                                console.error(`Unable to start scanning, error: ${err}`);
                            });
                    }
                }).catch(err => {
                    console.error(`Error getting cameras: ${err}`);
                });
            });

            function sendQrCodeToServer(code) {
                fetch('qr_handler.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ qrcode: code })
                })
                .then(response => response.json())
                .then(data => {
                    qrResult.innerText = "";
                    data['qrcode'].forEach((element, index) => {
                        const div = document.createElement('div');
                        if(index==0){
                            div.style.fontWeight = 'bold';
                            div.textContent = `Seu QrCode ${index + 1}: ${element}`;
                            qrResult.appendChild(div);
                        }else{
                            div.textContent = `QrCode ${index + 1}: ${element}`;
                            qrResult.appendChild(div);
                        }
                    });
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
</body>
</html>
