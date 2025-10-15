<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depilação - Entre em Contato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            min-height: 100vh;
            padding: 40px 20px; /* Aumentei o padding */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 550px; /* Aumentei a largura máxima */
        }

        .card {
            background: white;
            border-radius: 25px; /* Aumentei o border-radius */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); /* Aumentei a sombra */
            overflow: hidden;
            text-align: center;
        }

        .header {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e8e 100%);
            color: white;
            padding: 40px 25px; /* Aumentei o padding */
        }

        .logo {
            font-size: 4rem; /* Aumentei o tamanho do ícone */
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.2rem; /* Aumentei o tamanho da fonte */
            margin-bottom: 15px;
            font-weight: 600;
        }

        .header p {
            opacity: 0.9;
            font-size: 1.3rem; /* Aumentei o tamanho da fonte */
        }

        .services {
            padding: 35px 25px; /* Aumentei o padding */
            background: #f8f9fa;
        }

        .services h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 1.7rem; /* Aumentei o tamanho da fonte */
        }

        .service-list {
            display: flex;
            flex-direction: column;
            gap: 16px; /* Aumentei o espaçamento */
        }

        .service-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px; /* Aumentei o espaçamento */
            color: #555;
            font-size: 1.2rem; /* Aumentei o tamanho da fonte */
        }

        .service-item i {
            color: #ff6b6b;
            font-size: 1.3rem; /* Aumentei o tamanho do ícone */
        }

        .whatsapp-section {
            padding: 40px 25px; /* Aumentei o padding */
        }

        .whatsapp-info {
            margin-bottom: 30px;
        }

        .whatsapp-info p {
            color: #666;
            font-size: 1.2rem; /* Aumentei o tamanho da fonte */
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px; /* Aumentei o espaçamento */
            background: #25D366;
            color: white;
            text-decoration: none;
            padding: 22px 35px; /* Aumentei o padding */
            border-radius: 60px; /* Aumentei o border-radius */
            font-size: 1.4rem; /* Aumentei o tamanho da fonte */
            font-weight: 600;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4); /* Aumentei a sombra */
        }

        .whatsapp-btn:hover {
            background: #128C7E;
            transform: translateY(-3px); /* Aumentei a animação */
            box-shadow: 0 12px 25px rgba(37, 211, 102, 0.5); /* Aumentei a sombra */
        }

        .info-item {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px; /* Aumentei o espaçamento */
            margin-bottom: 10px;
            color: #666;
            font-size: 1.1rem; /* Aumentei o tamanho da fonte */
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .info-item i {
            color: #ff6b6b;
            font-size: 1.2rem; /* Aumentei o tamanho do ícone */
        }

        /* Efeitos de animação */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            animation: fadeIn 0.8s ease-out;
        }

        /* Responsivo */
        @media (max-width: 480px) {
            body {
                padding: 25px 15px; /* Ajustei para mobile */
            }
            
            .container {
                max-width: 100%;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .whatsapp-btn {
                padding: 20px 25px;
                font-size: 1.2rem;
            }
            
            .service-item {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <!-- Cabeçalho -->
            <div class="header">
                <div class="logo">
                    <i class="fas fa-spa"></i>
                </div>
                <h1>Depilação Profissional</h1>
                <p>Carina Silva Epiladora</p>
            </div>

            <!-- Serviços -->
            <div class="services">
                <h2>Nossos Serviços</h2>
                <div class="service-list">
                    <div class="service-item">
                        <i class="fas fa-check"></i>
                        <span>Depilação Completa</span>
                    </div>
                    <div class="service-item">
                        <i class="fas fa-check"></i>
                        <span>Depilação Íntima</span>
                    </div>
                </div>
            </div>

            <!-- Botão do WhatsApp -->
            <div class="whatsapp-section">
                <div class="whatsapp-info">
                    <p>Clique abaixo para conversar no WhatsApp</p>
                </div>
                
                <a href="https://wa.me/5518988013326?text=Olá! Gostaria de agendar um horário para depilação" 
                   class="whatsapp-btn" 
                   target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    Agendar pelo WhatsApp
                </a>
                
                <!-- Informações de atendimento -->
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>Atendimento somente com horário marcado</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Pequeno script para feedback visual ao clicar no botão
        document.addEventListener('DOMContentLoaded', function() {
            const whatsappBtn = document.querySelector('.whatsapp-btn');
            
            whatsappBtn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });
    </script>
</body>
</html>