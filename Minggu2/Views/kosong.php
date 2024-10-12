<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Role</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Main container -->
    <div class="flex">
        <!-- Sidebar -->
        <?php include 'includes/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Your main content goes here -->
            <?php
            foreach ($obj_role as $role) {
                echo "Id role : " . $role->role_id;
                echo "<br>";
                echo "Nama role : " . $role->role_nama;
                echo "<br>";
                echo "Keterangan : " . $role->role_description;
                echo "<br>";
                echo "Status role : " . $role->role_status;
                echo "<br>";
            }
            ?>
        </div>
    </div>

</body>
</html>
