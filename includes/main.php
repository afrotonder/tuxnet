<div id="main">
    <!-- left column -->
    <section id="main-pannel">
        <h1>Speakers</h1>
        
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
                $t = explode(",", $tutorials[$i]  ); // explodes in-line tuorial to array
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
                            <b id='description'> Description:".$description."</b> 
                        </div>
                    </div>
                    
                    <div id='actionButton'>
                        <button id='attend'> Attend </button>
                        <button id='dismiss'> Dismiss </button>
                    </div>
                    
                    " ;
            }
            echo "<br/><br/><br/<br/>     ";
        ?>

    </section>
    <!-- right column -->
    <section id="side-pannel"> 
             <h1> Latest News </h1>

    </section>



</div>