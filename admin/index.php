<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Healthcare Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

  <div class="container mt-5">
    <h2 class="text-center mb-4">Welcome to the Admin Panel</h2>

    <!--  total appointments -->
    <div class="mb-4">
      <div class="card bg-primary text-white p-3">
        <h4>Total Appointments:
          <?php
          $con = mysqli_connect("localhost", "root", "", "health_care");
          $countQuery = "SELECT COUNT(*) AS total FROM appointments";
          $result = mysqli_query($con, $countQuery);
          $data = mysqli_fetch_assoc($result);
          echo $data['total'];
          ?>
        </h4>
      </div>
    </div>

    <!-- Appointment List -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-primary">
          <tr>
            <th>Token No.</th>
            <th>Date</th>
            <th>Name</th>
            <th>Department</th>
            <th>Doctor</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
         
          $query = "SELECT * FROM appointments";
          $result = mysqli_query($con, $query);

          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>{$row['id']}</td>";
              echo "<td>{$row['appointment_date']}</td>";
              echo "<td>{$row['fullName']}</td>";
              echo "<td>{$row['department']}</td>";
              echo "<td>{$row['doctor']}</td>";

              echo "<td>
                      <form action='update_status.php' method='POST' class='d-flex'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                        <select name='status' class='form-select form-select-sm me-2'>";
              $statusOptions = ['pending', 'completed', 'cancelled'];
              foreach ($statusOptions as $option) {
                $selected = strtolower($row['_status']) == $option ? "selected" : "";
                echo "<option value='$option' $selected>" . ucfirst($option) . "</option>";
              }
              echo "    </select>
                        <button type='submit' name='update' class='btn btn-sm btn-outline-primary'>Update</button>
                      </form>
                    </td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='6' class='text-center text-danger'>No appointments found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>