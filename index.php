<div id="overlaytmincprogress">
    <div id="progressbar">
    <ul id="tminculp">
        <li>
            <img src="lib/progress/progress.gif" alt="">
        </li>
        <li>
            <h3 id="progresstitle">Please Wait...</h3>
            <p id="progressmessage">Please wait while loading</p>
        </li>
    </ul>
        
    </div>
</div>
<script>
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
</script>
<?php
    function progress($title, $message){
        ?><script>progress("<?php echo $title; ?>", "<?php echo $message; ?>");</script><?php
    }
    function dissmss_progress($title, $message){
        ?><script>dissmiss_progress();</script><?php
    }

?>
