const { default: axios } = require('axios');

require('./bootstrap');


var message_el = document.getElementById('messages');
var user_input = document.getElementById('user_input');
var message_input = document.getElementById('message_input');
var message_send_btn = document.getElementById('message_send');


message_send_btn.addEventListener('click', function (event) {
    event.preventDefault();
    console.log(user_input);
    console.log(message_input);

    if (user_input.value == '') {
        window.alert('add user_input');
        return;
    }

    if (message_input.value == '') {
        window.alert('add message');
        return;
    }

    const options = {
        method: 'post',
        url: 'api/send/message',
        data: {
            username: user_input.value,
            message: message_input.value,
        }
    }

    axios(options)

    message_input.value = '';

})


window.Echo.channel('my-channel').listen('.my-event', (e) => {
    message_el.innerHTML += `<div class="message"> ${e.message} </div>`;
})