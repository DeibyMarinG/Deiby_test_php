

<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <a class="btn btn-primary" href="index.php?controller=contacts&action=create">Add New Contact</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php 
        foreach ($contacts as $contact): ?>
        <tr>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['email']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td>
                <a class="btn btn-warning" href="<?php echo $GLOBALS['main_route'];?>?controller=contacts&action=update&id=<?php echo $contact['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo $GLOBALS['main_route'];?>?controller=contacts&action=delete&id=<?php echo $contact['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
