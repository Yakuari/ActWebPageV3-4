<?php
require_once __DIR__ . '/dbh.php'; // Adjust the path to your Dbh class file
class AdminDashboard extends Dbh
{
    public function fetchUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
$dashboard = new AdminDashboard();
$users = $dashboard->fetchUsers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../src/css/admin-dashboard.css">
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="logo-container">
                <img src="../src/css/images/logo.png" alt="logo" class="logo">
                <span class="logo-name">Iron Forge Gym</span>
            </div>
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php#program">Program</a></li>
                    <li><a href="../index.php#subscription">Subscription</a></li>
                    <li><a href="../index.php#booking">Booking</a></li>
                    <li><a href="../index.php#about-us">About Us</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <span>Admin</span>
                <div class="dropdown-menu">
                    <a href="#">Dashboard</a>
                    <a href="../index.php">Logout</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <h1>Admin Dashboard</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>UID</th>
                <th>Email</th>
                <th>Role</th>
                <th>Amount</th>
                <th>Month</th>
                <th>Created At</th>
                <th>Expire At</th>
                <th class="actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['id']) ?></td>
                    <td><?= htmlspecialchars($user['user_uid']) ?></td>
                    <td><?= htmlspecialchars($user['user_email']) ?></td>
                    <td><?= htmlspecialchars($user['user_role']) ?></td>
                    <td><?= htmlspecialchars($user['user_amount']) ?></td>
                    <td><?= htmlspecialchars($user['user_month']) ?></td>
                    <td><?= htmlspecialchars($user['created_at']) ?></td>
                    <td><?= htmlspecialchars($user['expire_at'] ?? 'N/A') ?></td>
                    <td class="actions">
                        <form action="admin_process.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                            <button type="submit" name="action" value="accept">Accept</button>
                        </form>
                        <form action="admin_process.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                            <button type="submit" name="action" value="reject">Reject</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

<?php if (isset($_GET['message'])): ?>
    <p style="color: green;">Action completed successfully.</p>
<?php elseif (isset($_GET['error'])): ?>
    <p style="color: red;">
        <?= htmlspecialchars($_GET['error'] === 'missing_data' ? 'Missing data.' : ($_GET['error'] === 'invalid_action' ? 'Invalid action.' : ($_GET['error'] === 'db_error' ? 'Database error.' : 'An error occurred.'))) ?>
    </p>
<?php endif; ?>
<?php if (isset($_GET['error']) && $_GET['error'] === 'already_processed'): ?>
    <p style="color: red;">This user has already been processed.</p>
<?php endif; ?>