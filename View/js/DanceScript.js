function SwapToBuyScreen(DivTicketTitle, DivTicketDetail, DivTicketLeftBuy, DivTicketRightBuy) {

    div1 = document.getElementById(DivTicketTitle);
    div2 = document.getElementById(DivTicketDetail);
    div3 = document.getElementById(DivTicketLeftBuy);
    div4 = document.getElementById(DivTicketRightBuy);

    div1.style.display = "none";
    div2.style.display = "none";
    div3.style.display = "block";
    div4.style.display = "block";
}



function addTicket(minButton, input, addButton) {
    const minusButton = document.getElementById(minButton);
    const plusButton = document.getElementById(addButton);
    const inputField = document.getElementById(input);

    minusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue - 1;
    });

    plusButton.addEventListener('click', event => {
        event.preventDefault();
        const currentValue = Number(inputField.value) || 0;
        inputField.value = currentValue + 1;
    });
}
function showBuyTicket1(){
    document.getElementById("buyTicket1").style.visibility="visible";
    document.getElementById("ticket1Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket2(){
    document.getElementById("buyTicket2").style.visibility="visible";
    document.getElementById("ticket2Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket3(){
    document.getElementById("buyTicket3").style.visibility="visible";
    document.getElementById("ticket3Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket4(){
    document.getElementById("buyTicket4").style.visibility="visible";
    document.getElementById("ticket4Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket5(){
    document.getElementById("buyTicket5").style.visibility="visible";
    document.getElementById("ticket5Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket6(){
    document.getElementById("buyTicket6").style.visibility="visible";
    document.getElementById("ticket6Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket7(){
    document.getElementById("buyTicket7").style.visibility="visible";
    document.getElementById("ticket7Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket8(){
    document.getElementById("buyTicket8").style.visibility="visible";
    document.getElementById("ticket8Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket9(){
    document.getElementById("buyTicket9").style.visibility="visible";
    document.getElementById("ticket9Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket10(){
    document.getElementById("buyTicket10").style.visibility="visible";
    document.getElementById("ticket10Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket11(){
    document.getElementById("buyTicket11").style.visibility="visible";
    document.getElementById("ticket11Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket12(){
    document.getElementById("buyTicket12").style.visibility="visible";
    document.getElementById("ticket12Title").style.backgroundColor="#11557C";
    
}
function showBuyTicket13(){
    document.getElementById("buyTicket13").style.visibility="visible";
    document.getElementById("ticket13Title").style.backgroundColor="#11557C";
    
}
