 
 // HTML element representing the timer
 const timerElement = document.querySelector('.timer span');

 function countUp() {
   let seconds = 0;
   let minutes = 0;
   // Function to update the timer display
   function updateTimer() {
     let formattedSeconds = seconds < 10 ? `0${seconds}` : seconds;
     let formattedMinutes = minutes < 10 ? `0${minutes}` : minutes;
     timerElement.textContent = `${formattedMinutes}:${formattedSeconds}`;
   }
 
   // Start the count-up timer
   const timerInterval = setInterval(() => {
     seconds++;
     if (seconds >= 60) {
       seconds = 0;
       minutes++;
     }
     updateTimer();
   }, 1000);
 
   // Function to stop the count-up timer
   function stopCountUp() {
     clearInterval(timerInterval);
   }
 
   // Return the stopCountUp function to allow stopping the timer from outside
   return stopCountUp;
 }
 
 // Start the count-up timer
 const stopTimer = countUp();
 
 // To stop the timer, you can call the stopTimer function
 // For example, you can call it inside the 'Next Question' button click event
 const nextQuestionButton = document.querySelector('input[value="Next Question"]');
 nextQuestionButton.addEventListener('click', () => {
   stopTimer(); // Stop the timer
 });


