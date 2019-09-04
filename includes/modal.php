<!-- The Modal -->
<div id="add-speaker-modal">

  <!-- Modal content -->
  <div class="modal-content">
        <header id="modal-header"> 
            <h3> Add Speaker to List </h3>
            <span id="close-modal">&times;</span>
        </header>
     

        <form id="add-speaker-form" action="submit.php">
            Speaker Name: <br>
            <input type="text" name="speaker"><br>
            Image link: <br>
            <input type="text" name="link"><br>
            Event Name: </br>
            <input type="text" name="event"><br>
            Event Time: </br>
            <input type="text" name="time"></br>
            Event Location: </br>
            <input type="text" name="location"></br>
            Description: </br>
            <!-- <input id="event-description-cell" type="text" name="description"> <br> -->
            <textarea id="event-description-cell" rows="6" cols="63">
            
            </textarea>

            <!-- input button -->
            <footer>
                <input id="add-speaker-submit" type="submit" value="Submit">
            </footer>
            
        </form>
  </div>

</div>
