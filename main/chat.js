// Send Message
document.addEventListener('DOMContentLoaded', ()=> {
    // Send Button
    const button = document.getElementById("button");
    button.addEventListener('click', (e)=>{
        e.preventDefault();
        const xhr = new XMLHttpRequest();
        const url = "sendMessage.php"

        xhr.open("POST", url, true);

        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        // Log data
        xhr.onreadystatechange = function(){
            if(xhr.readyState ===4 && xhr.status === 200){
                console.log("Response received", xhr.responseText)
            }
        };

        // Prepare data
        const message = document.getElementById('input').value;

        // Send data
        xhr.send("message=" + encodeURIComponent(message));

        // remove input
        document.getElementById('input').value = '';
    });
});

// Fetch Message
function fetch(){
    const xhr = new XMLHttpRequest();
    xhr.open('GET', "fetchMessage.php", true)
    xhr.onload = function(){
        if(this.status === 200){
            const messages = JSON.parse(this.responseText);
            const forumContainer = document.getElementById('contain');
            forumContainer.innerHTML = '';
            messages.forEach( msg => {
               const bubble = document.createElement("div");
               const user = document.createElement("span");
               const text = document.createElement("p");

               text.innerText = msg.message;
               user.innerText = msg.username;

               bubble.appendChild(user);
               bubble.appendChild(text);

               bubble.classList.add('message');
               bubble.classList.add('message-left');

               forumContainer.appendChild(bubble);

            });

        }
    }
    xhr.send();
}

setInterval(fetch, 1000);