function checkBox(id, section) {
    // Get the checkbox
    const checkBox = document.getElementById(id);

    // Get the event section 
    const event = document.getElementById(section);

    // If the checkbox is checked, display the output text
    if (checkBox.checked){
        //section will appear
        event.style.display = "block"; 
    } else if (!checkBox.cheaked) {
        //section will disappear
        event.style.display = "none";
    }
  }