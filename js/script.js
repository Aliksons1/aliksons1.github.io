var zmij = 0;

var CPS = 0;



function counter() {



    zmij++

    document.getElementById("count").innerHTML = zmij;

}

function up1() {

    var reqZmij = 50;

    if (reqZmij <= zmij) {

        CPS = CPS + 5

        zmij = zmij - 50


        document.getElementById("cps").innerHTML = CPS;
        document.getElementById("count").innerHTML = zmij;

        if (CPS > 0) {

            setInterval(function() {
                zmij = (zmij + CPS);
                document.getElementById("count").innerHTML = zmij;
            }, 1000);

        }

    } else {

        alert("Masz za mało żmijów!");

    }

}


function up2() {

    var reqZmij = 250;

    if (reqZmij <= zmij) {

        CPS = CPS + 15

        zmij = zmij - 250


        document.getElementById("cps").innerHTML = CPS;
        document.getElementById("count").innerHTML = zmij;

        if (CPS > 0) {

            setInterval(function() {
                zmij = (zmij + CPS);
                document.getElementById("count").innerHTML = zmij;
            }, 1000);

        }

    } else {

        alert("Masz za mało żmijów!");

    }

}

function up3() {

    var reqZmij = 1000;

    if (reqZmij <= zmij) {

        CPS = CPS + 25

        zmij = zmij - 1000


        document.getElementById("cps").innerHTML = CPS;
        document.getElementById("count").innerHTML = zmij;

        if (CPS > 0) {

            setInterval(function() {
                zmij = (zmij + CPS);
                document.getElementById("count").innerHTML = zmij;
            }, 1000);

        }

    } else {

        alert("Masz za mało żmijów!");

    }

}