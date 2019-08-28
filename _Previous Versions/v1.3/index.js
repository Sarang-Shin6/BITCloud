function openForm(clicked_id) {
    var displayStatus = document.getElementById("formWrapper").style.display;

    if (displayStatus == "none" && clicked_id == "login") {
        document.getElementById("formWrapper").style.display = "block";
    } else {
        document.getElementById("formWrapper").style.display = "none";
    }
}

// function closeForm(clicked_id) {
//     if (clicked_id == "login") {
//         openForm();
//     } else
//     {
//         document.getElementById("formWrapper").style.display = "none";
//         document.getElementById("profileWrapper").style.display = "none";
//     }
// }

function openProfileForm() {
    var displayStatus = document.getElementById("profileWrapper").style.display;

    if (displayStatus == "block") {
        document.getElementById("profileWrapper").style.display = "none";
    } else {
        document.getElementById("profileWrapper").style.display = "block";
    }

}
