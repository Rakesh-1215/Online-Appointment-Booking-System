<?php
session_start();
$mycon = mysqli_connect("localhost", "root", "", "health_care");

$error = '';

if (isset($_POST['login'])) {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $mycon->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: home.php");
            exit();
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "No account found with this email.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login - Care Point</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://media.istockphoto.com/id/1437830105/photo/cropped-shot-of-a-female-nurse-hold-her-senior-patients-hand-giving-support-doctor-helping.jpg?s=612x612&w=0&k=20&c=oKR-00at4oXr4tY5IxzqsswaLaaPsPRkdw2MJbYHWgA=') center/cover no-repeat;
            min-height: 100vh;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <h2 class="text-center text-primary mb-3">
                            <i class="fa-solid fa-user-circle"></i> Welcome to Care Point
                        </h2>
                        <p class="text-center text-muted">
                            Please login to access your Care Point account.<br>
                            New here? <a href="register.php" class="text-decoration-none">Create an account</a>
                        </p>

                        <?php if ($error != ''): ?>
                            <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>

                        <form method="post" action="">
                            <div class="mb-3">
                                <label class="form-label"><i class="fa-solid fa-envelope"></i> Email Address</label>
                                <input type="email" name="email" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa-solid fa-lock"></i> Password</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                            <button type="submit" name="login" class="btn btn-primary w-100">
                                <i class="fa-solid fa-right-to-bracket"></i> Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
