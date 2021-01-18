function showPopUp(popup){
    document.getElementById(popup).style.visibility='visible';
}
function closePopUp(popup){
    document.getElementById(popup).style.visibility="hidden";
}

//default variables
var selectedRadiobutton;
var selectedDaybutton;

function radioButtonClick(radioButtonId){
    selectedRadiobutton = document.getElementById(radioButtonId);

    if(selectedDaybutton==null){
        //set default day
        buttonClick("button26th")
    }
    else{
        buttonClick(selectedDaybutton);
    }
}

function buttonClick(buttonId){
    //array with all filterdays
    let dayButtonsArray = ["button26th", "button27th","button28th", "button29th"];
    //let languageButtonsArray = ["btnEnglish", "btnDutch","btnChinese"];
    
    //tables
    const tableThursdayEnglish = document.getElementById("historicThursdayEnglish");
    const tableThursdayDutch = document.getElementById("historicThursdayDutch");
    const tableThursdayChinese = document.getElementById("historicThursdayChinese");

    const tableFridayEnglish = document.getElementById("historicFridayEnglish");
    const tableFridayDutch = document.getElementById("historicFridayDutch");
    const tableFridayChinese = document.getElementById("historicFridayChinese");

    const tableSaturdayEnglish = document.getElementById("historicSaturdayEnglish");
    const tableSaturdayDutch = document.getElementById("historicSaturdayDutch");
    const tableSaturdayChinese = document.getElementById("historicSaturdayChinese");

    const tableSundayEnglish = document.getElementById("historicSundayEnglish");
    const tableSundayDutch = document.getElementById("historicSundayDutch");
    const tableSundayChinese = document.getElementById("historicSundayChinese");
    let tablesArray = [tableThursdayEnglish, tableThursdayDutch, tableThursdayChinese, tableFridayEnglish, tableFridayDutch, tableFridayChinese, tableSaturdayEnglish, tableSaturdayDutch, tableSaturdayChinese, tableSundayEnglish, tableSundayDutch, tableSundayChinese];

    //set selected day
    selectedDaybutton=buttonId;

    //set default language
    if(selectedRadiobutton==null){
        selectedRadiobutton= document.getElementById("btnEnglish");
    }

    //set all filterbutton in default colour
    dayButtonsArray.forEach(function(button) {
        const btn = document.getElementById(button);
        btn.style.backgroundColor = "lightgrey";
        btn.style.color = "black";
    })

    //set colour of selected button
    const button = document.getElementById(buttonId);
    button.style.backgroundColor = "green";
    button.style.color = "white";
    
    
    if(button.id == "button26th"){
        tablesArray.forEach(function(table) {
            //hide every day table
            const sct = document.getElementById(table.id);
            sct.style.display = "none";

            //show table of selected day
            if(table.id.includes("Thursday")){
                if(selectedRadiobutton.value.includes("english") && table.id.includes("English")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                if(selectedRadiobutton.value.includes("dutch") && table.id.includes("Dutch")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                if(selectedRadiobutton.value.includes("chinese") && table.id.includes("Chinese")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
            }           
        })
    }
    else if(button.id == "button27th"){
        tablesArray.forEach(function(table) {
            //hide every day table
            const sct = document.getElementById(table.id);
            sct.style.display = "none";

            //show table of selected day
            if(table.id.includes("Friday")){
                if(selectedRadiobutton.value=="english" && table.id.includes("English")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                if(selectedRadiobutton.value=="dutch" && table.id.includes("Dutch")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                if(selectedRadiobutton.value=="chinese" && table.id.includes("Chinese")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
            }           
        })
    }
    else if(button.id == "button28th"){
        tablesArray.forEach(function(table) {
            //hide every day table
            const sct = document.getElementById(table.id);
            sct.style.display = "none";

            //show table of selected day
            if(table.id.includes("Saturday")){
                if(selectedRadiobutton.value.includes("english") && table.id.includes("English")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                else if(selectedRadiobutton.value.includes("dutch") && table.id.includes("Dutch")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                else if(selectedRadiobutton.value.includes("chinese") && table.id.includes("Chinese")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
            }           
        })
    }
    else if(button.id == "button29th"){
        tablesArray.forEach(function(table) {
            //hide every day table
            const sct = document.getElementById(table.id);
            sct.style.display = "none";

            //show table of selected day
            if(table.id.includes("Sunday")){
                if(selectedRadiobutton.value.includes("english") && table.id.includes("English")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                else if(selectedRadiobutton.value.includes("dutch") && table.id.includes("Dutch")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
                else if(selectedRadiobutton.value.includes("chinese") && table.id.includes("Chinese")){
                    const sct = document.getElementById(table.id);
                    sct.style.display = "block";
                }
            }           
        })
    }

}


// SelectDate.onclick = function ( e ) {
//     if ( e.target.tagName.toLowerCase() === 'option' ) {
//         // an <option> element was clicked
//         $value=SelectDate.value;
//         console.log(value);
//     }
// };
// function Name(value){

// };
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
// function SingelticketPrice(amountObject) {
//     var amount = amountObject.value;
//     var price = amount * 17.50;
//     document.getElementById("singleprice").innerHTML = price;
// }

// function FamilyticketPrice(amountObject) {
//     var amount = amountObject.value;
//     var price = amount * 60.00;
//     document.getElementById("familyprice").innerHTML = price;
// }

// function TotalticketPrice() {
//     var singleprice = document.getElementById("singleprice").textContent;
//     var familyprice = document.getElementById("familyprice").textContent;
//     var totalprice = +singleprice + +familyprice;
//     document.getElementById("totalprice").innerText = totalprice;
// }

//document.getElementById("normalTicketPrice").addEventListener("change", CalculateTotalPrice());

function CalculateNormalTicket(amount){
    document.getElementById("normalTicketPrice").innerText = (amount*17.50).toFixed(2);
}
function CalculateFamilyTicket(amount){
    document.getElementById("familyTicketPrice").innerText = (amount*60.00).toFixed(2);
}
function CalculateTotalPrice(){
    const normalTicket = document.getElementById("normalTicketPrice").textContent;
    const familyTicket = document.getElementById("familyTicketPrice").textContent;
    // var price =+normalTicket + +familyTicket; 
    // console.log(price);
    document.getElementById("totalPriceTickets").innerText = "€"+(parseFloat(normalTicket) + parseFloat(familyTicket)).toFixed(2);
}