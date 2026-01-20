
<?php
// Include the header
include 'header.html';

// Include the database connection
require_once 'db.php';

// Example: Fetch data from a table called 'messages' (if exists)
// You can create this table in your db.sqlite for testing
$messages = [];
try {
    // Query to select all messages
    $result = $db->query('SELECT * FROM messages');
    $messages = $result ? $result->fetchAll(PDO::FETCH_ASSOC) : [];
} catch (Exception $e) {
    // If table does not exist or error occurs, show nothing
}
?>
<main>
    <h2>Home Page</h2>
    <p>Welcome to the home page of our simple PHP website.</p>

    <!-- Example: Display messages from the database if available -->
    <?php if (!empty($messages)): ?>
        <h3>Messages from Database:</h3>
        <ul>
            <?php foreach ($messages as $msg): ?>
                <li><?php echo htmlspecialchars($msg['content'] ?? ''); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</main>
<?php include 'footer.html'; ?>
