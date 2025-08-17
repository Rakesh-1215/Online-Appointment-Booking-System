  <?php
  include 'header.php';
  ?>


  <!-- main content -->
  <div class="content container">
    <div class="appointment-card ">
      <h2 class="text-center title mb-4">Appointment History</h2>

      <?php
      $mycon = mysqli_connect("localhost", "root", "", "health_care");

      $sql = "SELECT * FROM appointments";
      $record = $mycon->query($sql);
      $n = mysqli_num_rows($record);

      if ($n > 0) {
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-hover w-100'>";
        echo "<thead class='table-primary'>";
        echo "<tr>";
        echo "<th>Toke No.</th>";
        echo "<th>Date</th>";
        echo "<th>Name</th>";
        echo "<th>Department</th>";
        echo "<th>Doctor</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        echo "</thead><tbody>";

        while ($row = mysqli_fetch_assoc($record)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['appointment_date'] . "</td>";
          echo "<td>" . $row['fullName'] . "</td>";
          echo "<td>" . $row['department'] . "</td>";
          echo "<td>" . $row['doctor'] . "</td>";

          // Add colored badge for status
          $status = strtolower($row['_status']);
          $badgeClass = match ($status) {
            'completed' => 'badge bg-success',
            'pending'   => 'badge bg-warning text-dark',
            'cancelled' => 'badge bg-danger',
            default     => 'badge bg-secondary'
          };
          echo "<td><span class='$badgeClass text-capitalize'>$status</span></td>";
          echo "</tr>";
        }

        echo "</tbody></table>";
        echo "</div>";
      } else {
        echo "<p class='text-danger fs-5'>Record not found.</p>";
      }
      ?>
    </div>
  </div>


  <?php
  include 'footer.php';
  ?>