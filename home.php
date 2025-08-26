<?php
include 'header.php';
?>

<section class="hero d-flex align-items-center text-center">
  <div class="container">
    <h1 class="display-4 fw-bold text-white">Book Your Appointment Online</h1>
    <p class="text-white">Trusted care for you and your family</p>
    <a href="appointment.php" class="btn btn-primary btn-lg m-3">Make an Appointment</a>
    <a href="#services" class="btn btn-primary btn-lg">Learn More</a>
  </div>
</section>

<section id="services" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center mb-4 fw-bold">Our Services</h2>
    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 hover-card">
          <div class="card-body">
            <i class="fa-solid fa-heartbeat fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">Cardiology</h5>
            <p>Expert care for heart conditions with advanced technology.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 hover-card">
          <div class="card-body">
            <i class="fa-solid fa-x-ray fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">Orthopedics</h5>
            <p>Comprehensive bone and joint care for all ages.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 hover-card">
          <div class="card-body">
            <i class="fa-solid fa-user-doctor fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">General Medicine</h5>
            <p>Full range of general and internal medicine services.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4 fw-bold">Why Choose Care Point?</h2>
    <p >Compassionate doctors, advanced facilities, and 24/7 support for all your healthcare needs.</p>
    <div class="row mt-4">
      <div class="col-md-4">
        <i class="fa-solid fa-user-nurse fa-2x text-primary mb-2"></i>
        <h6>Expert Doctors</h6>
        <p>Highly experienced specialists for every health condition.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-hospital fa-2x text-primary mb-2"></i>
        <h6>Modern Facilities</h6>
        <p>Equipped with the latest technology and labs.</p>
      </div>
      <div class="col-md-4">
        <i class="fa-solid fa-headset fa-2x text-primary mb-2"></i>
        <h6>24/7 Support</h6>
        <p>Always available to assist you with emergency care.</p>
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>


<style>
.hero {
  background: url('https://media.istockphoto.com/id/1437830105/photo/cropped-shot-of-a-female-nurse-hold-her-senior-patients-hand-giving-support-doctor-helping.jpg?s=612x612&w=0&k=20&c=oKR-00at4oXr4tY5IxzqsswaLaaPsPRkdw2MJbYHWgA=') center/cover no-repeat;
  height: 100vh;
  position: relative;
}
.hero::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0, 0, 0, 0.5); /* dark overlay */
}
.hero .container {
  position: relative;
  z-index: 2;
}
.hover-card {
  transition: transform 0.3s, box-shadow 0.3s;
}
.hover-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}
</style>
