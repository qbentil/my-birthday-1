<div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1>Wishes Book</h1>
            <div class="container">
              <div class="ajax-message"></div>
            <form id="wish-book" method="POST" autocomplete="off">
              <div class="ajax-response"></div>
              <!-- <label for="fname">Your name</label> -->
              <input type="text" id="name"  class="form-group" name="name" placeholder="Enter your name" autofocus>

              <!-- <label for="fname">Your Phone</label> -->
              <input type="tel" id="phone"  class="form-group" name="phone"  placeholder="Enter your phone number">

              <!-- <label for="lname">Hyped Wish</label> -->
              <input type="text" id="subject" class="form-group" name="subject" placeholder="Message Title: Glorous Birthday to you Bentil">

              <label for="subject"><Small><b>Maximum: 45 Words:  </b><i> <span id="lcount">45</span> Words remaining</i></Small></label>
              <textarea id="message" class="form-group" name="message" placeholder="Write something for Bentil💻🥰 [Max: 225 Letters]" style="height:200px" maxlength="225"></textarea>

              <input type="submit" id="send" value="Submit">

            </form>
          </div>
        </div>
    </div>