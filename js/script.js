var zmij = 0;

var CPS = 0;

function counter() {



    zmij++

    document.getElementById("count").innerHTML = zmij;

}

function up1()

{

    var reqZmij = 50;

    if (reqZmij <= zmij) {

        CPS = +10

        document.getElementById("cps").innerHTML = CPS;

    } else {

        alert("Masz za mało żmijów!");

    }

}