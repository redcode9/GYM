    function Inserimento(){
        var giorni_dal = document.getElementById("giorni_dal").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_dal].value);
        var giorni_al = document.getElementById("giorni_al").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_al].value);
        var orario_dal = document.getElementById("orario_dal").selectedIndex;
        var orario_al = document.getElementById("orario_al").selectedIndex;

        var giorno_ap = document.getElementById("giorno_ap").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_dal].value);
        var giorno_chius = document.getElementById("giorno_chius").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_al].value);
        var orario_ap = document.getElementById("orario_ap").selectedIndex;
        var orario_chius = document.getElementById("orario_chius").selectedIndex;

        if(giorni_dal > giorni_al){
            alert("Controllare i giorni di apertura!");

        }

        if(orario_dal > orario_al){
            alert("Controllare l'orario di apertura!");
        }

        if(giorno_ap > giorno_chius){
            alert("Controllare i giorni di apertura!");

        }

        if(orario_ap > orario_chiu){
            alert("Controllare l'orario di apertura!");
        }
    }