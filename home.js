//chat-bot
const chatBox = document.getElementById('chat-box');
const userInput = document.getElementById('user-input');

function sendUserMessage() {
    const userMessage = userInput.value;
    if (userMessage.trim() !== '') {
        appendUserMessage(userMessage);
        respondToUser(userMessage);
        userInput.value = '';
    }
}

function appendUserMessage(message) {
    const userDiv = document.createElement('div');
    userDiv.classList.add('user-message');
    userDiv.textContent = message;
    chatBox.appendChild(userDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function appendBotMessage(message) {
    const botDiv = document.createElement('div');
    botDiv.classList.add('chat-bot');
    botDiv.textContent = message;
    chatBox.appendChild(botDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
}

function respondToUser(message) {
    const keywords = [
        { question: 'hello', answer: 'Hello! How can I help you?' },
        { question: 'hi', answer: 'Hi! How can I assist you?' },
        { question: 'school', answer: 'Which school are you interested in?' },
        { question: 'college', answer: 'Are you looking for information on colleges?' },
        { question: 'courses', answer: 'What type of courses are you interested in?' }
    ];

    const response = keywords.find(keyword => message.toLowerCase().includes(keyword.question));
    if (response) {
        appendBotMessage(response.answer);
    } else {
        appendBotMessage('I\'m sorry, I didn\'t understand that.');
    }
}

// ---------