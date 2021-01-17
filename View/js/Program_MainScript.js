function checkBox(id, section) {
    // Get the checkbox
    const checkBox = document.getElementById(id);

    // Get the event section 
    const event = document.getElementById(section);

    // checking is checkbox is checked or unchecked
    if (checkBox.checked){
        //section will appear
        event.style.display = "block"; 
    } else if (!checkBox.cheaked) {
        //section will disappear
        event.style.display = "none";
    }
  }

  function filterButtons(id) {

    //filterButtons
    let buttonsArray = ["allButton", "button26th","button27th", "button28th", "button29th"];

    //historic sections
    const sectionHistoric1 = document.getElementById("historicThursday");
    const sectionHistoric2 = document.getElementById("historicFriday");
    const sectionHistoric3 = document.getElementById("historicSaturday");
    const sectionHistoric4 = document.getElementById("historicSunday");

    //dance sections
    const sectionDance1 = document.getElementById("danceThursday");
    const sectionDance2 = document.getElementById("danceFriday");
    const sectionDance3 = document.getElementById("danceSaturday");
    const sectionDance4 = document.getElementById("danceSunday");

    //jazz sections
    const sectionJazz1 = document.getElementById("jazzThursday");
    const sectionJazz2 = document.getElementById("jazzFriday");
    const sectionJazz3 = document.getElementById("jazzSaturday");
    const sectionJazz4 = document.getElementById("jazzSunday");

    // //food sections
    const sectionFood1 = document.getElementById("foodThursday");
    const sectionFood2 = document.getElementById("foodFriday");
    const sectionFood3 = document.getElementById("foodSaturday");
    const sectionFood4 = document.getElementById("foodSunday");

    let sectionArray = [sectionHistoric1, sectionHistoric2, sectionHistoric3, sectionHistoric4, sectionDance1, sectionDance2, sectionDance3, sectionDance4, sectionJazz1, sectionJazz2, sectionJazz3, sectionJazz4, sectionFood1, sectionFood2, sectionFood3, sectionFood4 ];

    // Get the checkbox
    const button = document.getElementById(id);

    //set all filterButtons to default colour
    buttonsArray.forEach(function(button) {
        const btn = document.getElementById(button);
        btn.style.backgroundColor = "white";
        btn.style.color = "black";
    })

    //change colour of selected button
    button.style.backgroundColor = "#E11B3B";
    button.style.color = "white";

    if(button.id == "allButton"){
        sectionArray.forEach(function(section) {
            const sct = document.getElementById(section.id);
            sct.style.display = "block";
        })
    }
    else if(button.id == "button26th"){
        sectionArray.forEach(function(section) {
            //hide every day section
            const sct = document.getElementById(section.id);
            sct.style.display = "none";

            //show section of selected day
            if(section.id.includes("Thursday")){
                const sct = document.getElementById(section.id);
                sct.style.display = "block";
            }                
        })
    }
    else if(button.id == "button27th"){
        sectionArray.forEach(function(section) {
            //hide every day section
            const sct = document.getElementById(section.id);
            sct.style.display = "none";

            //show section of selected day
            if(section.id.includes("Friday")){
                const sct = document.getElementById(section.id);
                sct.style.display = "block";
            }                
        })
    }
    else if(button.id == "button28th"){
        sectionArray.forEach(function(section) {
            //hide every day section
            const sct = document.getElementById(section.id);
            sct.style.display = "none";

            //show section of selected day
            if(section.id.includes("Saturday")){
                const sct = document.getElementById(section.id);
                sct.style.display = "block";
            }                
        })
    }
    else if(button.id == "button29th"){
        sectionArray.forEach(function(section) {
            //hide every day section
            const sct = document.getElementById(section.id);
            sct.style.display = "none";

            //show section of selected day
            if(section.id.includes("Sunday")){
                const sct = document.getElementById(section.id);
                sct.style.display = "block";
            }                
        })
    }
  }