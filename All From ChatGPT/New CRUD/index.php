<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
</head>
<body>

    <?php
    // Database connection configuration
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'users';

    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Function to fetch all users from the database
    function getUsers($pdo) {
        $query = "SELECT * FROM users";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Display all users
    $users = getUsers($pdo);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Insert a new user into the database
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $query = "INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
        }

        // Update a user in the database
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $query = "UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->execute();
        }

        // Delete a user from the database
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $query = "DELETE FROM users WHERE id = :id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }

        // Redirect to refresh the page after performing an action
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
    ?>

    <h2>Users</h2>
    <?php if (count($users) > 0): ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <input type="submit" name="edit" value="Edit">
                            <input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure?')">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

    <h2>Add/Edit User</h2>
    <?php
    // Prepare variables for form display
    $id = '';
    $name = '';
    $email = '';
    $phone = '';

    // Check if editing a user
    if (isset($_POST['edit']) && isset($_POST['id'])) {
        $id = $_POST['id'];

        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $name = $user['name'];
            $email = $user['email'];
            $phone = $user['phone'];
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>" required><br>

        <?php if ($id): ?>
            <input type="submit" name="update" value="Update User">
        <?php else: ?>
            <input type="submit" name="create" value="Add User">
        <?php endif; ?>
    </form>
</body>
</html>
