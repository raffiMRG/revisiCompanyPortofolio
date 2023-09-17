const jointChat = document.querySelector('.joint-chat');

const circle = jointChat.querySelector('.circle');

const message = circle.querySelector('.message');

const send = message.querySelector('.send');

// circle.addEventListener('click', function(){
//     alert('ok');
// });

send.addEventListener('mouseover', function(e){
    e.target.style.cursor ='pointer';
    e.stopPropagation();
});

message.addEventListener('mouseover', function(e){
    e.target.style.cursor ='context-menu';
});

message.addEventListener('click', function(e){
    // alert('ok')
    e.stopPropagation();
});

circle.addEventListener('click', function(e){
    circle.classList.toggle('size');
    // circle.style.transition = '.3s width, .3s height';
});

document.addEventListener('click', function(e){
    // console.log(!message.contains(e.target));
    // console.log(!message.contains(e.target) && !circle.contains(e.target));
    if(!message.contains(e.target) && !circle.contains(e.target)){
        // console.log(!message.contains(e.target) && !circle.contains(e.target));
        circle.classList.remove('size');
    }
})
