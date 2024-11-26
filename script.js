document.getElementById('chat-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Obtén el mensaje del input
    let message = document.getElementById('message').value;

    // Evita enviar si el mensaje está vacío
    if (message.trim() === '') return;

    // Envía el mensaje al servidor usando AJAX
    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'send_message.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Limpia el campo del mensaje
            document.getElementById('message').value = '';

            // Añade el mensaje enviado al contenedor del chat
            appendMessage('You', message);
        }
    };
    xhr.send('message=' + encodeURIComponent(message));
});

// Función para añadir un mensaje al contenedor del chat
function appendMessage(username, message) {
    const chatBox = document.getElementById('chat-box');

    // Crea el elemento HTML para el nuevo mensaje
    const messageElement = document.createElement('div');
    messageElement.classList.add('message');
    messageElement.innerHTML = `<strong>${username}:</strong> ${message}`;

    // Añade el mensaje al final del contenedor del chat
    chatBox.appendChild(messageElement);

    // Desplaza el contenedor hacia abajo para mostrar el nuevo mensaje
    chatBox.scrollTop = chatBox.scrollHeight;
}
