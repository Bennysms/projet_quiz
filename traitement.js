
// dark mode
let icon = document.querySelector('#icon');

icon.addEventListener('click', (e) =>{
    document.body.classList.toggle('dark-theme');
        if(document.body.classList.contains('dark-theme')){
            icon.classList.add('bx-moon');
            icon.classList.remove('bx-sun');
        }
        else{
            icon.classList.remove('bx-moon');
            icon.classList.add('bx-sun');
        }

})


// declaration de differente variables dont nous aurons besoin

// pour compter le point du user
let point = document.querySelector('.point');
point.textContent= 0;

// variables de compte final
let total_point = document.querySelector('.total_point');
const compteurAnswer = document.querySelector('.compteurAnswer');

// le nombre de question
const total = document.querySelector('.total');

// recuperer la question
const questions = document.querySelector('#question');

// les options de réponse
const option1 = document.querySelector('.option1');
const option2 = document.querySelector('.option2');
const option3 = document.querySelector('.option3');
const option4 = document.querySelector('.option4');

// recuperer toutes les options
const options = document.querySelectorAll('.response li');

// variables de réponses
const true_answer = document.querySelector('.true_response');
const false_answer = document.querySelector('.false_response');

// le bouton pour passe aux questions suivantes
const next_btn = document.querySelector('#submit');
const menu = document.querySelector('#prev');
next_btn.style.pointerEvents = 'none';

// maintenant passons aux choses sérieuses

// recuperation du thème passé en paramètre
var urlParams = new URLSearchParams(window.location.search);
var theme = urlParams.get('theme');


// pour recuperer une question précise et ses differentes options
let index = 0;
let num = document.querySelector('.numero');
num.innerHTML = 1;

// pour stocker les données provenants de la base de données
let quiz_data = [];

// fetch pour recuperer les données entrées par de la base de données
fetch("traitement.php?theme="+theme).then((response) => response.json()).then((data)=>{
    quiz_data = data;

    console.log(quiz_data);
    total.textContent = quiz_data.length;
    afficherQuestion();
  }).catch((error) =>{
    console.error(error)
  });

// une fonction qui afficher les questions
function afficherQuestion(){
    const question = quiz_data[index];
    questions.textContent = question.question;
    option1.textContent = question.option1;
    option2.textContent = question.option2;
    option3.textContent = question.option3;
    option4.textContent = question.option4;
}

// selectionner une réponse et tester si elle est bonne ou pas
options.forEach(option =>{
    option.addEventListener('click', (e) =>{
        user_reponse = e.target.textContent;
        const question = quiz_data[index];
        e.target.classList.add('active');
        if(user_reponse === question.reponse){
            true_answer.classList.add('d-block');
            point.textContent++;
            total_point.textContent = point.textContent;
        }
        else{
            false_answer.classList.add('d-block');
            
        }
        option1.style.pointerEvents = 'none';
        option2.style.pointerEvents = 'none';
        option3.style.pointerEvents = 'none';
        option4.style.pointerEvents = 'none';
        next_btn.style.pointerEvents = 'auto';
    })
})

// passer à la question suivante
next_btn.addEventListener("click", (e) =>{
    index++;
    
    next_btn.style.pointerEvents = 'none';
    true_answer.classList.remove('d-block');
    false_answer.classList.remove('d-block');
    options.forEach(option =>{
        if(option.classList.contains('active')){
            option.classList.remove('active');
        };
    })
    if(index >= quiz_data.length){
      options.forEach(option =>{
        option.style.pointerEvents ="none";
        menu.style.display = "block";
        
        // appelle de la fonction pour réjouer la partie
        rejouer();
    })
        compteurAnswer.style.display = 'block';
        if(point.textContent == 0){
            total_point.textContent = "0"
        }
    }
    else{
        num.innerHTML++;
      afficherQuestion();
      options.forEach(option =>{
        option.style.pointerEvents ="auto";
        
    })
    }
  });



// initialisation du temps
let min = 3;
let sec = 0;

let minuteCompt = document.querySelector(".minuteCompt");
let secondCompt = document.querySelector(".secondCompt");
// la fonction qui met à jour le temps decrementé
function upDateTimer() {
    if(sec == 0){
        if(min == 0){
            clearInterval(timerInterval);
            document.querySelector(".compteur").innerHTML = "Terminé...";
            return;
        }
        else{
            min--;
            sec = 59;
        }
    }
    else{
        sec--;
    }

    minuteCompt.innerHTML = min;
    secondCompt.innerHTML = sec;

    if((minuteCompt.innerHTML == 0) && (secondCompt.innerHTML == 0)){
        options.forEach(option =>{
            option.style.pointerEvents ="none";
            menu.style.display = "block";
            rejouer();
        })
        compteurAnswer.style.display = 'block';
        if(point.textContent == 0){
            total_point.textContent = "0"
        }
        true_answer.classList.remove('d-block');
        false_answer.classList.remove('d-block');
        options.forEach(option =>{
            if(option.classList.contains('active')){
                option.classList.remove('active');
            };
        })
    }

    
}

// variable pour decrémenter le temps
let timerInterval = setInterval(upDateTimer, 1000);


// fonction pour rejouer la partie
function rejouer(){
    next_btn.textContent = "Réjouer";
    //   cliquer pour relancer le jeu
    if(next_btn.textContent == "Réjouer"){
        next_btn.style.pointerEvents = 'auto';
        next_btn.addEventListener("click", ()=>{
            location.reload();
        })
    }
}
  

