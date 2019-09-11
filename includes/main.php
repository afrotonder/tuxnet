<div id="main">
    <!-- left column -->
    <section id="main-pannel">
        <section id="main-pannel-header">
            <h1 id="speakers">Speakers</h1>
            <button id="add-speaker">Add speaker</button>
            <?php require 'modal.php'; ?>
        </section>
        <section id="speakers-pannel">
            <!-- actual logic for dynamically loading tuts -->
            <?php
            $temp = [];
            $tutorials = [];
            // open file where info is stored
            $tuts_File = fopen("includes/tuts.txt", "r") or die("Unable to open file!");
            // push all info to array
            while (!feof($tuts_File)) {
                array_push($tutorials, fgets($tuts_File));
            }
            fclose($tuts_File);

            for ($i = 0; $i < count($tutorials); $i++) {
                $t = explode(";", strval($tutorials[$i])); // explodes in-line tuorial to array
                // removes quotes from each value to be presented 
                $name = preg_replace("/'/", "", $t[0]);
                $image = preg_replace("/'/", "", $t[1]);
                $title = preg_replace("/'/", "", $t[2]);
                $time = preg_replace("/'/", "", $t[3]);
                $location = preg_replace("/'/", "", $t[4]);
                $description = preg_replace("/'/", "", $t[5]);

                // TEMPLATE FOR EACH TUT
                echo "<div class='tutorial-template'>
                        <img src='" . $image . "'>
                        <div id='tutorial-info'>                        
                            <h2>" . $title . "</h2>
                            <b> By:" . str_replace('(', "", $name) . "</b>
                            <b> Time:" . $time . "</b>
                            <b> Location:" . $location . "</b>
                            <textarea readonly id='description'> Description:" . str_replace(')', "", $description) . "</textarea> 
                        </div>
                    </div>
                    
                    <div id='actionButton'>
                        <button id='attend' value='" . str_replace('(', "", $name) . "'> Attend </button>
                        <button id='dismiss' value='" . str_replace('(', "", $name) . "'> Dismiss </button>
                    </div>
                    
                    ";
            }
            echo "<br/><br/><br/<br/>     ";
            ?>
        </section>
    </section>
    <!-- right column -->
    <section id="side-pannel">
        <h1> Latest News </h1>
        <?php

        $curl = curl_init();

        $certificate_location = ‘/usr/sslcacert.pem’;
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, $certificate_location);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $certificate_location);

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://community-hacker-news-v1.p.rapidapi.com/topstories.json?print=pretty",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: community-hacker-news-v1.p.rapidapi.com",
                "x-rapidapi-key: c53abd6d28msha5ffd5e98dc43d2p1f7eb7jsn57f3fc4c80be"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

        ?>

    </section>



</div>