<?php include 'header.php'; ?>

<!-- My Appointment-->
<div id="my-appointment">
  <div class="appointment-card">
    <h2 class="text-center title mb-4">Book an Appointment</h2>

    <div class="time-info text-center">
      <p><strong>Morning Shift:</strong> 8:00 AM - 12:00 PM |
        <strong>Evening Shift:</strong> 6:00 PM - 9:00 PM (Weekdays Only)
      </p>
    </div>

    <form method="POST" action="/Project/admin/php/index.php" onsubmit="return bookConform()">
      <div class="row">
        <div class="col-md-6">
          <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
          <p class="text-danger" id="name_error"></p>
        </div>
        <div class="col-md-6">
          <label for="phone" class="form-label">Phone Number<span class="text-danger">*</span></label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 0000 0000 00">
          <p class="text-danger" id="phone_error"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <p class="text-danger" id="email_error"></p>
        </div>
        <div class="col-md-6">
          <label for="date" class="form-label">Preferred Date<span class="text-danger">*</span></label>
          <input type="date" class="form-control" id="date" name="date">
          <p class="text-danger" id="date_error"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="shift" class="form-label">Shift<span class="text-danger">*</span></label>
          <select class="form-select" id="shift" name="shift">
            <option selected disabled>Select shift</option>
            <option>Morning</option>
            <option>Evening</option>
          </select>
          <p class="text-danger" id="shift_error"></p>
        </div>
        <div class="col-md-6">
          <label for="department" class="form-label">Department<span class="text-danger">*</span></label>
          <select class="form-select" id="department" name="department">
            <option selected disabled>Select Department</option>
            <option>Cardiology</option>
            <option>Orthopedics</option>
            <option>Neurology</option>
            <option>Pediatrics</option>
            <option>General Medicine</option>
          </select>
          <p class="text-danger" id="department_error"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <label for="doctor" class="form-label">Preferred Doctor/Store<span class="text-danger">*</span></label>
          <select class="form-select" id="doctor" name="doctor">
            <option selected disabled>Select Doctor</option>
            <option>Dr. Smit(Cardiologist)</option>
            <option>Dr. Sharma(Orthopedist)</option>
            <option>Dr. Mohan Mishra(Neurologist)</option>
            <option>Dr. Yadav(Pediatrician)</option>
            <option>General Medicine</option>
          </select>
          <p class="text-danger" id="doctor_error"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <label for="message" class="form-label">Additional Message<span class="text-danger">*</span></label>
          <textarea class="form-control" id="message" name="message" rows="3" placeholder="Symptoms..."></textarea>
          <p class="text-danger" id="message_error"></p>
        </div>
      </div>

      <div class="col-12 text-center mt-3">
        <button type="submit" class="btn btn-primary" name="submit">Book Now</button>
      </div>
    </form>

    <!-- Toast container -->
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055;">
      <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0" role="alert">
        <div class="d-flex">
          <div class="toast-body">Appointment booked successfully!</div>
          <!-- <button type="button" class="btn-close btn-close-white me-2 m-auto" name="name" data-bs-dismiss="toast"></button> -->
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS (required for toast) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  window.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '0.5') {
      const toastEl = document.getElementById('toastSuccess');
      const toast = new bootstrap.Toast(toastEl);
      toast.show();
      const newUrl = window.location.pathname;
      window.history.replaceState({}, document.title, newUrl);
    }
  });
</script>