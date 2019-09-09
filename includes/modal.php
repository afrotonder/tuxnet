<!-- The Modal -->
<div id="add-speaker-modal">

  <!-- Modal content -->
  <div class="modal-content">
        <header id="modal-header"> 
            <h3> Add Speaker to List </h3>
            <span id="close-modal">&times;</span>
        </header>
      

        	  
        <form id="add-speaker-form" action="" method="post">
            Speaker Name: <br>
            <input id="speaker" type="text" name="speaker" required><br>
            Image link: <br>
            <input id="link" type="text" name="link" required><br>
            Event Name: </br>
            <input id="event" type="text" name="event" required><br>
            Event Time: </br>
            <input id="time" type="text" name="time" required></br>
            Event Location: </br>
            <input id="location" type="text" name="location" required></br>
            Description: </br>
            <!-- <input id="event-description-cell" type="text" name="description"> <br> -->
            <textarea id="event-description-cell" name="description" rows="6" cols="63"></textarea> <!-- space between textarea not good --> 

            <!-- input button -->
            <footer>
                <input id="add-speaker-submit" name="submit" type="submit">
            </footer>
       
            
        </form> 

        <?php require 'includes/addSpeaker.php' ; ?>

      
  </div>

</div>
