    function Inserimento(){
        var giorni_dal = document.getElementById("giorni_dal").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_dal].value);
        var giorni_al = document.getElementById("giorni_al").selectedIndex;
        //alert(document.getElementsByTagName("option")[giorni_al].value);
        var orario_dal = document.getElementById("orario_dal").selectedIndex;
        var orario_al = document.getElementById("orario_al").selectedIndex;

        if(giorni_dal > giorni_al){
            alert("Controllare i giorni di apertura!");

        }

        if(orario_dal > orario_al){
            alert("Controllare l'orario di apertura!");
        }
    }