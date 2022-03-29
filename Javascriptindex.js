var settingsmenu = document.querySelector(".settings-menu") //var setting menu
var darkBtn = document.getElementById("dark-btn")

function settingsMenuToggle() {  //setting menu toggle 
    settingsmenu.classList.toggle("settings-menu-height");
}

darkBtn.onclick = function () { // permet de switch de theme
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");
    if (localStorage.getItem("theme") == "light") {
        localStorage.setItem("theme", "dark");
    }
    else {
        localStorage.setItem("theme", "light");
    }
}

if (localStorage.getItem("theme") == "light") { //permet de se souvenir du theme apres un refresh
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
}
else if (localStorage.getItem("theme") == "dark") {
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
}
else {
    localStorage.setItem("theme", "light");
}


function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("Entreprises-list");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

var getSidebar = document.getElementById('left-sidebar');
var getToggle = document.getElementById('toggle');
getToggle.addEventListener('click', function () {
    // console.warn("hello world");
    getSidebar.classList.toggle('left-sidebar');
});
