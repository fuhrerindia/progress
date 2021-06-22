    function progress(title, message){
        document.getElementById("progresstitle").innerHTML = title;
        document.getElementById("progressmessage").innerHTML = message;
        document.getElementById("overlaytmincprogress").style.display='block';
    }
    function dissmiss_progress(){
        document.getElementById("progresstitle").innerHTML = "";
        document.getElementById("progressmessage").innerHTML = "";
        document.getElementById("overlaytmincprogress").style.display='none';
    }
