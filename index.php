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
<style>
    #overlaytmincprogress{
        position:fixed;
        width:100%;
        height:100vh;
        background:#000000a1;
        text-align:center;
        display:none;
        top:0;
    }
    #progresstitle{
        margin-top:15px;
        color: <?php echo $text_accent_heading;  ?>;
    }
    #progressmessage{
        color: <?php echo $text_accent_cont;  ?>
    }
    #progressbar{
        background:#fff;
        width:max-content;
        display:inline-block;
        border-radius:10px;
        padding:15px;
        margin-top:30vh;
        max-width:80%;
    }
    #progressbar img{
        width:50px;
        height:50px;
        margin:10px;
    }
    #tminculp{
        list-style:none;
        display:flex;
    }
    #tminculp li{
        text-align:left;
    }
</style>
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
