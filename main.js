function bookConform() {
  let name = document.getElementById("name").value;
  let phone = document.getElementById("phone").value;
  let email = document.getElementById("email").value;
  let date = document.getElementById("date").value;
  let shift = document.getElementById("shift").value;
  let department = document.getElementById("department").value;
  let doctor = document.getElementById("doctor").value;
  let message = document.getElementById("message").value;

  console.log(date);
  console.log(department);
  console.log(doctor);

  if (!name) {
    document.getElementById("name_error").innerHTML = "Please enter your name";
    return false;
  } else {
    document.getElementById("name_error").innerHTML = "";
  }

  if (!phone) {
    document.getElementById("phone_error").innerHTML =
      "Please enter your phone number";
    return false;
  } else {
    document.getElementById("phone_error").innerHTML = "";
  }

  if (!email) {
    document.getElementById("email_error").innerHTML =
      "Please enter your email";
    return false;
  } else {
    document.getElementById("email_error").innerHTML = "";
  }

  if (!date) {
    document.getElementById("date_error").innerHTML = "Please select date";
    return false;
  } else {
    document.getElementById("date_error").innerHTML = "";
  }

  if (shift == "Select shift") {
    document.getElementById("shift_error").innerHTML = "Please select shift";
    return false;
  } else {
    document.getElementById("shift_error").innerHTML = "";
  }

  if (department == "Select Department") {
    document.getElementById("department_error").innerHTML =
      "Please select department";
    return false;
  } else {
    document.getElementById("department_error").innerHTML = "";
  }

  if (doctor == "Select Doctor") {
    document.getElementById("doctor_error").innerHTML = "Please select doctor";
    return false;
  } else {
    document.getElementById("doctor_error").innerHTML = "";
  }

  if (!message) {
    document.getElementById("message_error").innerHTML =
      "Please enter symptoms";
    return false;
  } else {
    document.getElementById("message_error").innerHTML = "";
    document.getElementById("successfull").innerHTML = "Your booking is done!";
  }

  return true;
}
