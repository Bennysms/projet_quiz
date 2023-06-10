function upDateClock(){
    let date = new Date();
    let heure = date.getHours();
    let minute = date.getMinutes();
    let second = date.getSeconds();

    if(heure < 10){
        heure = '0' + heure;
    }
    if(minute < 10){
        minute = '0' + minute;
    }
    if(second < 10){
        second = '0' + second;
    }

    let horloge = heure + ':' + minute + ':' + second;

    let time = document.querySelector(".time");
    time.innerHTML = horloge;

}

setInterval(upDateClock,1000);