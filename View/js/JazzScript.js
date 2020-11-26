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

function ShowThursdayTickets(ticketThursday, thursdayDayButton, thursdayDayButtonLink, fridayDayButton,
                             fridayDayButtonLink, saturdayDayButton, saturdayDayButtonLink, sundayDayButton, sundayDayButtonLink) {

    ticketsThursday = document.getElementById(ticketThursday);
    thursdayButton = document.getElementById(thursdayDayButton);
    thursdayButtonLink = document.getElementById(thursdayDayButtonLink);
    fridayButton = document.getElementById(fridayDayButton);
    fridayButtonLink = document.getElementById(fridayDayButtonLink);
    saturdayButton = document.getElementById(saturdayDayButton);
    saturdayButtonLink = document.getElementById(saturdayDayButtonLink);
    sundayButton = document.getElementById(sundayDayButton);
    sundayButtonLink = document.getElementById(sundayDayButtonLink);

    ticketsThursday.style.display = "grid";

    thursdayButton.style.backgroundColor = "#AA2828";
    thursdayButtonLink.style.color = "#FFFFFF";

    fridayButton.style.backgroundColor = "#FFFFFF";
    fridayButtonLink.style.color = "#000000";

    saturdayButton.style.backgroundColor = "#FFFFFF";
    saturdayButtonLink.style.color = "#000000";

    sundayButton.style.backgroundColor = "#FFFFFF";
    sundayButtonLink.style.color = "#000000";

}

function ShowFriday(ticketThursday, thursdayDayButton, thursdayDayButtonLink, fridayDayButton,
                             fridayDayButtonLink, saturdayDayButton, saturdayDayButtonLink, sundayDayButton, sundayDayButtonLink) {

    ticketsThursday = document.getElementById(ticketThursday);
    thursdayButton = document.getElementById(thursdayDayButton);
    thursdayButtonLink = document.getElementById(thursdayDayButtonLink);
    fridayButton = document.getElementById(fridayDayButton);
    fridayButtonLink = document.getElementById(fridayDayButtonLink);
    saturdayButton = document.getElementById(saturdayDayButton);
    saturdayButtonLink = document.getElementById(saturdayDayButtonLink);
    sundayButton = document.getElementById(sundayDayButton);
    sundayButtonLink = document.getElementById(sundayDayButtonLink);

    ticketsThursday.style.display = "grid";

    thursdayButton.style.backgroundColor = "#AA2828";
    thursdayButtonLink.style.color = "#FFFFFF";

    fridayButton.style.backgroundColor = "#FFFFFF";
    fridayButtonLink.style.color = "#000000";

    saturdayButton.style.backgroundColor = "#FFFFFF";
    saturdayButtonLink.style.color = "#000000";

    sundayButton.style.backgroundColor = "#FFFFFF";
    sundayButtonLink.style.color = "#000000";

}