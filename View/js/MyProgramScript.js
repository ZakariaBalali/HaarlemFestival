function checkBox(id) {
    // Get the checkbox
    const checkBox = document.getElementById(id);

    //Sections
    const sectionThu = document.getElementsByClassName("Thu");
    const sectionFri = document.getElementsByClassName("Fri");
    const sectionSat = document.getElementsByClassName("Sat");
    const sectionSun = document.getElementsByClassName("Sun");

    //array
    const sectionArray = [sectionThu, sectionFri, sectionSat, sectionSun];
    console.log(sectionArray);

    sectionArray.forEach(function(event) {
        for (const e of event) {
            if(e.className.includes(checkBox.id)){
                // checking is checkbox is checked or unchecked
                if (checkBox.checked){
                    //section will appear
                    e.style.display = "block"; 
                }else if (!checkBox.cheaked) {
                    //section will disappear
                    e.style.display = "none";
                }
            }
        }
    })

  }
  function filterButtons(id){

    //Sections
    const sectionThu = document.getElementsByClassName("Thu");
    const sectionFri = document.getElementsByClassName("Fri");
    const sectionSat = document.getElementsByClassName("Sat");
    const sectionSun = document.getElementsByClassName("Sun");

    const sectionArray = [sectionThu, sectionFri, sectionSat, sectionSun];


    // Get the button
    const button = document.getElementById(id);

    //array of all filterbuttons
    let buttonsArray = ["allButton", "button26th","button27th", "button28th", "button29th"];

    //set all filterButtons to default colour
    buttonsArray.forEach(function(button) {
        const btn = document.getElementById(button);
        btn.style.backgroundColor = "white";
        btn.style.color = "black";
    })

    //change colour of selected button
    button.style.backgroundColor = "#E11B3B";
    button.style.color = "white";
    console.log(button.id);

    if(button.id == "allButton"){
        sectionArray.forEach(function(section) {
            for (const e of section) {
                //show every day section
                e.style.display = "block"; 
            }
        })
    }
    else if(button.id == "button26th"){
        
        sectionArray.forEach(function(section) {

            for (const e of section) {
                //hide every day section
                e.style.display = "none";

                // //show section of selected day
                if(e.id.includes("Thu")){
                    e.style.display = "block";
                }  
            }
        })       
    }
    else if(button.id == "button27th"){
        
        sectionArray.forEach(function(section) {

            for (const e of section) {
                //hide every day section
                e.style.display = "none";

                // //show section of selected day
                if(e.id.includes("Fri")){
                    e.style.display = "block";
                }  
            }
        })       
    }
    else if(button.id == "button28th"){
        
        sectionArray.forEach(function(section) {

            for (const e of section) {
                //hide every day section
                e.style.display = "none";

                // //show section of selected day
                if(e.id.includes("Sat")){
                    e.style.display = "block";
                }  
            }
        })       
    }
    else if(button.id == "button29th"){
        
        sectionArray.forEach(function(section) {

            for (const e of section) {
                //hide every day section
                e.style.display = "none";

                // //show section of selected day
                if(e.id.includes("Sun")){
                    e.style.display = "block";
                }  
            }
        })       
    }
  }
    