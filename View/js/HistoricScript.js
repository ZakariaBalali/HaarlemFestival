function showPopUp(popup){
    document.getElementById(popup).style.visibility='visible';
}
function closePopUp(popup){
    document.getElementById(popup).style.visibility="hidden";
}

/*const programDay="";
const programLanguage="";

function getPrgramDay(){
    return programDay;
}
function getProgramLanguage(){
    return programLanguage;
}*/

function buttonClick(buttonId){
    //array met alle dag buttons
    let buttonsArray = ["button1", "button2","button3", "button4"];

    const button = document.getElementById(buttonId);
    //programDay = button.value;
    button.style.backgroundColor = "green";
    button.style.color = "white";
    
    let positie = buttonsArray.indexOf(button.id);
    let DeleteSelectedButton = buttonsArray.splice(positie, 1);
    console.log(buttonsArray)
    
    buttonsArray.forEach(function(button) {
    console.log(button);
    const b = document.getElementById(button);
    b.style.backgroundColor = "lightgrey";
    b.style.color = "black";
    })
}

SelectDate.onclick = function ( e ) {
    if ( e.target.tagName.toLowerCase() === 'option' ) {
        // an <option> element was clicked
        $value=SelectDate.value;
        console.log(value);
    }
};
function Name(value){

};
/*
window.onload = function() {

    document.getElementById('english').checked=true;
    const en = document.getElementById('english');
    const nl = document.getElementById('dutch');
    const ch = document.getElementById('chinese');

    en.onclick = programLanguage=en.value;
    nl.onclick = programLanguage=nl.value;
    ch.onclick = programLanguage=ch.value;

}

function handler() {
    alert('clicked');
}

/*function blurBackGround(){
    document.elm.style.filter="blur(0.5rem)"
}*/