let words = document.querySelectorAll('span');

for(let i = 0; i < words.length; i++){
    console.log(words[i].innerText !== words[i].style.color);
}