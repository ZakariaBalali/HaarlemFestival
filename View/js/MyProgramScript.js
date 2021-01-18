function checkBox(id, section) {
    // Get the checkbox    
    const checkBox = document.getElementById(id);

    // Get the event sections
    const events = document.getElementsByName(section);

    // const combiEvents = document.getElementsByName(secondSection);
    //const array = [normalEvents]
    // if(checkBox.id=="checkBoxDance"){
    //     const combiEvents = document.getElementsByName("Combi Dance");
    //     array = [normalEvents, combiEvents]
    // }
    // if(checkBox.id=="checkBoxJance"){
    //     const combiEvents = document.getElementsByName("Combi Jazz");
    //     array = [normalEvents, combiEvents]
    // }

    //console.log(array);

    events.forEach(function(event) {
        // checking is checkbox is checked or unchecked
        if (checkBox.checked){
            //section will appear
            event.style.display = "block"; 
        }else if (!checkBox.cheaked) {
            //section will disappear
            event.style.display = "none";
        }
    })

  }
  function filterButtons(id){

    //Sections
    const sectionThu = document.getElementById("Thu");
    const sectionFri = document.getElementById("Fri");
    const sectionSat = document.getElementById("Sat");
    const sectionSun = document.getElementById("Sun");

    let sectionArray = [sectionThu, sectionFri, sectionSat, sectionSun]

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
            //console.log(sct);
            sct.style.display = "none";

            //show section of selected day
            if(section.id.includes("Thu")){
                const sct = document.getElementById(section.id);
                sct.style.display = "block";
            }                
        })
    }
  }
    