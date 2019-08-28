function openForm() {
    var displayStatus = document.getElementById("formWrapper").style.display;

    if (displayStatus == "block") {
        document.getElementById("formWrapper").style.display = "none";
    } else {
        document.getElementById("formWrapper").style.display = "block";
    }

}

function closeForm() {
        document.getElementById("formWrapper").style.display = "none";
        document.getElementById("profileWrapper").style.display = "none";
}

function openProfileForm() {
    var displayStatus = document.getElementById("profileWrapper").style.display;

    if (displayStatus == "block") {
        document.getElementById("profileWrapper").style.display = "none";
    } else {
        document.getElementById("profileWrapper").style.display = "block";
    }

}
