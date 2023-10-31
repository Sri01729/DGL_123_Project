// Define variables
const messageInput = document.getElementById('message-input');
const chatWindow = document.querySelector('.chat-window');

// Function to send a message
function sendMessage() {
    const message = messageInput.value;
    if (message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('message');
        messageElement.textContent = message;
        chatWindow.appendChild(messageElement);
        messageInput.value = '';
    }
}