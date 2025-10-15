document.addEventListener('DOMContentLoaded', function() {
    // Adiciona efeito de clique nos botões
    const buttons = document.querySelectorAll('a');
    
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Pequeno feedback visual
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Opcional: Tracking do Google Analytics
            // gtag('event', 'click', {
            //     'event_category': 'WhatsApp',
            //     'event_label': this.textContent
            // });
        });
    });

    // Adiciona data atual no console (opcional)
    console.log('Página carregada em:', new Date().toLocaleString('pt-BR'));
});