<?php
session_start();
include 'config.php';

// Proses login ketika form disubmit
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    // Query untuk mencari user dengan email dan password yang cocok
    $query = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Simpan email admin ke sesi
        $_SESSION['admin_email'] = $email;
        header('Location: dashboard.php'); // Alihkan ke dashboard jika login berhasil
        exit();
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
       body {
           background-color: #f0f0f0; /* Warna latar belakang */
       }

       .container {
           margin-top: 100px; /* Margin atas untuk tampilan yang lebih baik */
       }

       .card {
           border: none; /* Menghilangkan border card */
           border-radius: 10px; /* Memberikan border radius */
           box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
       }

       .card-header {
           background-color: #007bff; /* Warna latar belakang header */
           color: #fff; /* Warna teks header */
           border-radius: 10px 10px 0 0; /* Border radius hanya pada bagian atas */
       }

       .btn-primary {
           background-color: #007bff; /* Warna latar belakang tombol */
           border-color: #007bff; /* Warna border tombol */
       }

       .btn-primary:hover {
           background-color: #0069d9; /* Warna latar belakang tombol saat dihover */
           border-color: #0062cc; /* Warna border tombol saat dihover */
       }
   </style>
</head>
<body>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-6">
               <div class="card">
                   <div class="card-header text-center">
                       <h3>Login Admin</h3>
                   </div>
                   <div class="card-body">
                       <?php if (isset($error)) { ?>
                           <div class="alert alert-danger">
                               <?= $error; ?>
                           </div>
                       <?php } ?>

                       <form method="POST" action="">
                           <div class="form-group">
                               <label for="email">Email</label>
                               <input type="email" name="email" id="email" class="form-control" required>
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input type="password" name="password" id="password" class="form-control" required>
                           </div>
                           <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</body>
</html>