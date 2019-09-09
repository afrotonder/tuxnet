<!-- simple script that writes to a given file -->
<?php
    if(isset($_POST["submit"])) {

        // parameters
        $speaker = $_POST["speaker"] ;
        $link = $_POST["link"] ;
        $event = $_POST["event"] ;
        $time = $_POST["time"] ;
        $location = $_POST["location"] ;
        $description = $_POST["description"] ;

        // file to be written
        $filename = "includes/tuts.txt" ; 

        $fp1 = fopen( $filename, 'r') ;

        $c = [] ;

        while(!feof($fp1)) {
            array_push($c, fgets($fp1)) ;    
        }

        fclose($fp1) ;

       



        $fp = fopen($filename, 'a') ;
        
        if(filesize($filename) == 0) {
            $newSpeaker = "('".$speaker."'; '".$link."'; '".$event."'; '".$time."'; '".$location."'; '".$description."')" ;
        }
        else {
            $newSpeaker = "\n('".$speaker."'; '".$link."'; '".$event."'; '".$time."'; '".$location."'; '".$description."')" ;
        }

        for($i = 0; $i < count($c); $i++) {
            echo $c[$i] ;
            echo "new ".$newSpeaker ;
            if($c[$i] == $newSpeaker) {
                // header('Location: google.com');
                fclose($fp) ;

            }
            
        }

        
        fwrite ($fp, $newSpeaker) ;
        fclose($fp) ;

    } 
?>