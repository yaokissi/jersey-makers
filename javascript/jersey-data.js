let elText = document.getElementById("elementTextMaillot")
let inputText = document.getElementById("input")
let caractereValide = "abcdefghijklmnopqrstuvwxyz1234567890".split("");

inputText.addEventListener("input",()=>{
if (inputText.value.length>10)
console.log(votre nom doit pas dépasser 10 caractère);
return;
for (let i=0;i<inputText.value.length)
if (caractereValide.indexOf(inputText.value[i])<0)

return;

/*

autre condition si tu veux

*/

elText.textContent=inputText.value
})
