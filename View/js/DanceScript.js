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
