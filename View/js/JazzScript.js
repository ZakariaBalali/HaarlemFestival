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

function modal(myModal, myBtn, close) {
    // Get the modal
    var modal = document.getElementById(myModal);


// Get the button that opens the modal
    var btn = document.getElementById(myBtn);

// Get the button that closes the modal
    var closeBtn = document.getElementsByClassName(close)[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

// When the user clicks on the button, close the modal
    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}