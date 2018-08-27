function init() {
    var editorForm = document.querySelector("form#editor");
    editorForm.addEventListener("submit", checkTitle, false);
}

document.addEventListener("DOMContentLoaded", init, false);

function checkTitle(event) {
    var title = document.querySelector("input[name='title'");
    var warning = document.querySelector("form 3title-warning");

    //if title is empty
    if(title.value === "") {
        //preventdefault, ie dont't submit the form
        event.preventDefault();
        //display a warning
        warning.innerHTML = "*You must write a title for the entry";
    }
}