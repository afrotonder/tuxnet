


<div id="main">
    <section id="main-pannel">
        <div id="tutorial-template">
            <!--  TEMPLATE FOR EACH TUT -->
            <!-- <img src="https://amp.businessinsider.com/images/55a04d1569beddb462f7425c-750-375.jpg">
            <h2> How to Breed Penguins that love Linux </h2>
            <div id="tutorial-info">
               <b> By:  Linus Torvalds </b>
               <b> Time:  Today, Campus Main Library </b>
               <b> Description: Penguin’s black and white plumage serves as camouflage while swimming. 
                   The black plumage on their back is hard to see from above, while the white plumage 
                   on their front looks like the sun reflecting off the surface of the water when seen from below.
                   
            </b> 
            </div> -->
            <!-- actual logic for dynamically loading tuts -->
            <?php 
           
            // require 'tuts.txt' ;
            $tuts_File = fopen("includes/tuts.txt", "r") or die("Unable to open file!");
            while(!feof($tuts_File)) {
                // echo "<div>";
                // echo fgets($tuts_File) . "<br>";
                // echo "</div>";
                // store each tut in an array

              }
              

            fclose($tuts_File);
        ?>


        </div>

      

    </section>

    <section id="side-pannel"> 

    </section>

</div>