<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .nav {
            margin-bottom: 20px;
        }
        
        .nav-link {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .nav-link.active {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Welcome to the Point of Sale System</h1>
        <h3>Admin: <?= $_SESSION['admin_email']; ?></h3>
        <nav class="nav nav-pills flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active" href="dashboard.php">DASBOARD</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="customers.php">Customers</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="categories.php">Categories</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="products.php">Products</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="orders.php">Orders</a>
            <a class="flex-sm-fill text-sm-center nav-link active" href="order_products.php">Order Products</a>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>