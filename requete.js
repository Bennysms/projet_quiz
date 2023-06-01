
let question = document.getElementById("question");

fetch("traitement.php?action=getQuestions").then(response=>response.json()).then(data => {
    console.log(data);
});