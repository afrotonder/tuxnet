<div id="main">
    <!-- left column -->
    <section id="main-pannel">
    <section id="main-pannel-header">
        <h1 id="speakers">Speakers</h1>
        <button id="add-speaker" >Add speaker</button>
        <?php require 'modal.php' ; ?>
    </section>
        <section id="speakers-pannel">
            <!-- actual logic for dynamically loading tuts -->
            <?php 
            $temp = [];
            $tutorials = [];
            // open file where info is stored
            $tuts_File = fopen("includes/tuts.txt", "r") or die("Unable to open file!");
            // push all info to array
            while(!feof($tuts_File)) {
                array_push($tutorials, fgets($tuts_File)) ;    
            }
            fclose($tuts_File);

            for($i = 0; $i < count($tutorials); $i++) {
                $t = explode(";", strval($tutorials[$i])  ); // explodes in-line tuorial to array
                // removes quotes from each value to be presented 
                $name = preg_replace("/'/", "", $t[0]);
                $image = preg_replace("/'/", "", $t[1]);
                $title = preg_replace("/'/", "", $t[2]);
                $time = preg_replace("/'/", "", $t[3]);
                $location = preg_replace("/'/", "", $t[4]);
                $description = preg_replace("/'/", "", $t[5]);
                
                // TEMPLATE FOR EACH TUT
                echo "<div class='tutorial-template'>
                        <img src='".$image."'>
                        <div id='tutorial-info'>                        
                            <h2>".$title."</h2>
                            <b> By:".str_replace('(', "", $name)."</b>
                            <b> Time:".$time."</b>
                            <b> Location:".$location."</b>
                            <textarea readonly id='description'> Description:".str_replace(')', "", $description)."</textarea> 
                        </div>
                    </div>
                    
                    <div id='actionButton'>
                        <button id='attend' value='".str_replace('(', "", $name)."'> Attend </button>
                        <button id='dismiss' value='".str_replace('(', "", $name)."'> Dismiss </button>
                    </div>
                    
                    " ;
            }
            echo "<br/><br/><br/<br/>     ";
        ?>
        </section>
    </section>
    <!-- right column -->
    <section id="side-pannel"> 
             <h1> Latest News </h1>
             <?php
                // $hn_API = "https://hacker-news.firebaseio.com/v0/item/" ;

                // for($i = 0; $i < 50; $i++) {
                //     $res = file_get_contents($hn_API.str($i).'.json') ;
                //     echo $res ;
                // }
             ?>

    </section>



</div>

