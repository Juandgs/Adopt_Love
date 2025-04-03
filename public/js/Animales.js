// Abrir el modal de chat
function openChatModal(foundationName) {
    document.getElementById('chatTitle').textContent = `Chat con ${foundationName}`;
    document.getElementById('chatModal').style.display = 'block';
}

// Cerrar el modal de chat
function closeChatModal() {
    document.getElementById('chatModal').style.display = 'none';
}

// Enviar mensaje en el chat
function sendMessage() {
    const chatArea = document.getElementById('chatArea');
    const chatInput = document.getElementById('chatInput');
    const message = chatInput.value.trim();

    if (message) {
        const newMessage = document.createElement('p');
        newMessage.textContent = `Tú: ${message}`;
        chatArea.appendChild(newMessage);
        chatArea.scrollTop = chatArea.scrollHeight;
        chatInput.value = '';
    }
}