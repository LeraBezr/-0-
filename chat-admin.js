let selectedUserId = 0; 
let stickerListVisible = false
function toggleStickerList() {     
const stickerList = document.getElementById('sticker-list');     
stickerList.classList.toggle('show'); 
}
document.addEventListener('DOMContentLoaded', () => { 
    const stickerButton = document.getElementById('sticker-button');
    stickerButton.addEventListener('click', toggleStickerList);
}); 
// Функция для вставки стикера в поле ввода сообщения 
function insertSticker(sticker) {     
   const messageInput = document.getElementById('message');     
   messageInput.value += sticker;     
   messageInput.focus(); 
}
function getUsers() { 
    fetch('getUsers.php') 
    .then(response => response.json())         
    .then(users => {
        const userList = document.getElementById('all-users');             
        userList.innerHTML = '';
        users.forEach(user => { 
            const listItem = document.createElement('li'); 
            listItem.textContent = user.username; 
            listItem.onclick = () => { 
// При выборе пользователя обновляем ID выбранного пользователя и загружаем его сообщения 
            selectedUserId = user.id;                     
            loadMessages(selectedUserId); 
            document.querySelectorAll('#all-users li').forEach(item => {
                item.classList.remove('selected'); 
            }); 
            listItem.classList.add('selected'); 
        }; 
        userList.appendChild(listItem);
    }); 
}); 
}
function loadMessages(receiverUserId) {     
    const chatMessages = document.getElementById('chat-messages'); 
chatMessages.innerHTML = '';
fetch('getMessages.php', {         
    method: 'POST',         
    headers: {             
        'Content-Type': 'application/x-www-form-urlencoded',        
     }, 
     body: `receiver_id=${receiverUserId}`, // Отправляем ID получателя     
    })   
.then(response => response.text()) 
.then(messagesText => { 
    const messagesArray = messagesText.split('\n'); 
    for (const messageText of messagesArray) { 
        const messageElement = document.createElement('div'); 
        messageElement.textContent = messageText; 
        chatMessages.appendChild(messageElement); 
    } 
}) 
.catch(error => {
    console.error('Error loading messages:', error); 
}); 
} 
function sendMessage() { 
    const messageInput = document.getElementById('message');     
    const messageText = messageInput.value;
    if (!selectedUserId) { 
        selectedUserId = 0; 
    } 
    fetch('sendMessage.php', {         
        method: 'POST',         
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded', 
        },         
        body: 
        `receiver_id=${selectedUserId}&message=${encodeURIComponent(messageText)}`,
    }) 
    .then(response => response.text()) 
    .then(responseText => { 
        console.log('Response from sendMessage.php:', responseText); 
        loadMessages(selectedUserId); 
    }) 
    .catch(error => {
        console.error('Error sending message:', error); 
    }); 

    messageInput.value = ''; } 
    document.addEventListener('DOMContentLoaded', () => { 
        getUsers();
        loadMessages(); 
    }); 











