  <?php
   include 'header.php';
  ?>

  <!-- Contact Section -->
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-card">
          <h3 class="mb-4 text-primary text-center">Get in Touch</h3>
          <form>
            <div class="mb-3">
              <label for="fullName" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="fullName" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="your@example.com">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Type your message here..."></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>




  <?php
   include 'footer.php';
  ?>
