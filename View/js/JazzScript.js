function SwapToBuyScreen(DivTicketLeft, DivTicketRight, DivTicketLeftBuy, DivTicketRightBuy) {

    div1 = document.getElementById(DivTicketLeft);
    div2 = document.getElementById(DivTicketRight);
    div3 = document.getElementById(DivTicketLeftBuy);
    div4 = document.getElementById(DivTicketRightBuy);

    div1.style.display = "none";
    div2.style.display = "none";
    div3.style.display = "block";
    div4.style.display = "block";
}

function SwapBackToTicketScreen(DivTicketLeft, DivTicketRight, DivTicketLeftBuy, DivTicketRightBuy) {
    div1 = document.getElementById(DivTicketLeft);
    div2 = document.getElementById(DivTicketRight);
    div3 = document.getElementById(DivTicketLeftBuy);
    div4 = document.getElementById(DivTicketRightBuy);

    div1.style.display = "block";
    div2.style.display = "block";
    div3.style.display = "none";
    div4.style.display = "none";
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

function filterSelection(activeButton, nonActiveButton1, nonActiveButton2, nonActiveButton3, activeButtonLink, nonActiveButtonLink1, nonActiveButtonLink2, nonActiveButtonLink3, activeSection, nonActiveSection1, nonActiveSection2, nonActiveSection3) {

    //show different day tickets
    document.getElementById(activeSection).style.display = "grid";
    document.getElementById(nonActiveSection1).style.display = "none";
    document.getElementById(nonActiveSection2).style.display = "none";
    document.getElementById(nonActiveSection3).style.display = "none";
    //change button background colors
    document.getElementById(activeButton).style.backgroundColor = "#AA2828";
    document.getElementById(nonActiveButton1).style.backgroundColor = "#FFFFFF";
    document.getElementById(nonActiveButton2).style.backgroundColor = "#FFFFFF";
    document.getElementById(nonActiveButton3).style.backgroundColor = "#FFFFFF";
    //change button link colors
    document.getElementById(activeButtonLink).style.color = "#FFFFFF";
    document.getElementById(nonActiveButtonLink1).style.color = "#000000";
    document.getElementById(nonActiveButtonLink2).style.color = "#000000";
    document.getElementById(nonActiveButtonLink3).style.color = "#000000";

}



