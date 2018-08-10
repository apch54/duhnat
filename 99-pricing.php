<!-- Container 
    <div class="w3-container" style="position:relative">
      <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal" style="position:absolute;top:-28px;right:24px">+</a>
    </div>

   Pricing Row 
    <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
      <h2>PRICING</h2>
      <p>Choose a pricing plan that fits your needs.</p>
      <br>
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme">
            <p class="w3-xlarge">Basic</p>
          </li>
          <li class="w3-padding-16">
            <b>10GB</b> Storage</li>
          <li class="w3-padding-16">
            <b>10</b> Emails</li>
          <li class="w3-padding-16">
            <b>10</b> Domains</li>
          <li class="w3-padding-16">
            <b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">
              <i class="fa fa-usd"></i> 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-theme-l5 w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large">
              <i class="fa fa-check"></i> Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme-l2">
            <p class="w3-xlarge">Pro</p>
          </li>
          <li class="w3-padding-16">
            <b>25GB</b> Storage</li>
          <li class="w3-padding-16">
            <b>25</b> Emails</li>
          <li class="w3-padding-16">
            <b>25</b> Domains</li>
          <li class="w3-padding-16">
            <b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">
              <i class="fa fa-usd"></i> 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-theme-l5 w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large">
              <i class="fa fa-check"></i> Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-hover-shadow">
          <li class="w3-theme">
            <p class="w3-xlarge">Premium</p>
          </li>
          <li class="w3-padding-16">
            <b>50GB</b> Storage</li>
          <li class="w3-padding-16">
            <b>50</b> Emails</li>
          <li class="w3-padding-16">
            <b>50</b> Domains</li>
          <li class="w3-padding-16">
            <b>Endless</b> Support</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">
              <i class="fa fa-usd"></i> 50</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-theme-l5 w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large">
              <i class="fa fa-check"></i> Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  -->

  <!-- Contact Container 
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
      <div class="w3-row">
        <div class="w3-col m5">
          <div class="w3-padding-16">
            <span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span>
          </div>
          <h3>Address</h3>
          <p>Swing by for a cup of coffee, or whatever.</p>
          <p>
            <i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
          <p>
            <i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
          <p>
            <i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
        </div>
        <div class="w3-col m7">
          <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
            <div class="w3-section">
              <label>Name</label>
              <input class="w3-input" type="text" name="Name" required>
            </div>
            <div class="w3-section">
              <label>Email</label>
              <input class="w3-input" type="text" name="Email" required>
            </div>
            <div class="w3-section">
              <label>Message</label>
              <input class="w3-input" type="text" name="Message" required>
            </div>
            <input class="w3-check" type="checkbox" checked name="Like">
            <label>I Like it!</label>
            <button type="submit" class="w3-button w3-right w3-theme">Send</button>
          </form>
        </div>
      </div>
    </div>
    -->

  <!-- Google Maps 
    <div id="googleMap" style="width:100%;height:420px;"></div>
    <script>
      function myMap() {
        myCenter = new google.maps.LatLng(41.878114, -87.629798);
        var mapOptions = {
          center: myCenter,
          zoom: 12, scrollwheel: false, draggable: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

        var marker = new google.maps.Marker({
          position: myCenter,
        });
        marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
   
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->
