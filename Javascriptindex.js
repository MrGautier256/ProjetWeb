var settingsmenu = document.querySelector(".settings-menu") //var setting menu
var darkBtn = document.getElementById("dark-btn")

if (navigator.serviceWorker) {
    navigator.serviceWorker.register('C:/xampp/phpMyAdmin/htdocs/CESIXAMP/Projet/ProjetGit/ProjetWeb/service-worker.js')
        .then((sw) => {
            console.log("Le Service Worker a été enregistré", sw);
        })
        .catch(err => console.error);
}


function settingsMenuToggle() { //setting menu toggle 
    settingsmenu.classList.toggle("settings-menu-height");
}

darkBtn.onclick = function() { // permet de switch de theme
    darkBtn.classList.toggle("dark-btn-on");
    document.body.classList.toggle("dark-theme");
    if (localStorage.getItem("theme") == "light") {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}

if (localStorage.getItem("theme") == "light") { //permet de se souvenir du theme apres un refresh
    darkBtn.classList.remove("dark-btn-on");
    document.body.classList.remove("dark-theme");
} else if (localStorage.getItem("theme") == "dark") {
    darkBtn.classList.add("dark-btn-on");
    document.body.classList.add("dark-theme");
} else {
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
getToggle.addEventListener('click', function() {
    // console.warn("hello world");
    getSidebar.classList.toggle('left-sidebar');
});

if (document.getElementById('CreateStudent')) {
    document.getElementById('CreateStudent').addEventListener("submit", function(e) {
        e.preventDefault();
        var Password1 = document.getElementById("studentPassword").value;
        var Password2 = document.getElementById("studentConfirmPassword").value;

        var confirmpassword = ConfirmPassword(Password1, Password2)

        var Login = document.getElementById("studentLogin").value;
        var Prenom = document.getElementById("studentFirstName").value;
        var Nom = document.getElementById("studentLastName").value;

        var chainescorrecte = verifchaine(Login, Prenom, Nom)

        if (confirmpassword == true && chainescorrecte == true) {
            document.getElementById('CreateStudent').submit()
        }
    })
}

if (document.getElementById('CreatePilot')) {
    document.getElementById('CreatePilot').addEventListener("submit", function(e) {
        e.preventDefault();
        var Password1 = document.getElementById("pilotPassword").value;
        var Password2 = document.getElementById("pilotConfirmPassword").value;

        var confirmpassword = ConfirmPassword(Password1, Password2)

        var Login = document.getElementById("pilotLogin").value;
        var Prenom = document.getElementById("pilotFirstName").value;
        var Nom = document.getElementById("pilotLastName").value;

        var chainescorrecte = verifchaine(Login, Prenom, Nom)

        if (confirmpassword == true && chainescorrecte == true) {
            document.getElementById('CreatePilot').submit()
        }
    })
}




function ConfirmPassword(Pass1, Pass2) {

    if (Pass1 == Pass2) {
        return true;
    } else {
        alert("Les mots de passe de correspondent pas")
        return false;
    }
}

function verifchaine(Login, Prenom, Nom) {

    if (Login.match(/^([0-9a-zA-Z_ -]){2,17}$/) && Prenom.match(/^([0-9a-zA-Z_ -]){2,17}$/) && Nom.match(/^([0-9a-zA-Z_ -]){2,17}$/)) {
        return true;
    } else {
        alert(Login);
        alert(Prenom);
        alert(Nom);
        return false;
    }

}

function ToWishList(id) {
    //var name = document.getElementById("id").value;
    if (id) {
        console.log(id);
        $.ajax({
            type: 'post',
            url: '../FunctionPHP/InteractWishList.php',
            data: {
                id_Offre: id,
                ToWishList: true,

            },
            success: function(response) {
                $('#ajax').html(response);
            }
        });
        //location.reload(true);
    } else {
        $('#ajax').html("");
    }
}

function DelFromWishList(id) {
    //var name = document.getElementById("id").value;
    if (id) {
        console.log(id);
        $.ajax({
            type: 'post',
            url: '../FunctionPHP/InteractWishList.php',
            data: {
                id_Offre: id,
                DelFromWishList: true,

            },
            success: function(response) {
                $('#ajax').html(response);
            }
        });
        //location.reload(true);
    } else {
        $('#ajax').html("");
    }

}