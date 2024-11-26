<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <style>
        /* Add your previous styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            display: inline-block;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .search-bar {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .search-form {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to the Group Collaboration Platform</h1>
</header>

<div class="container">
    <h2>Search Groups</h2>

    <!-- Search Form -->
    <form method="get" action="<?= site_url('home'); ?>" class="search-form">
        <input type="text" name="search" class="search-bar" placeholder="Search for groups..." value="<?= isset($searchQuery) ? esc($searchQuery) : ''; ?>">
    </form>

    <h2>Available Groups</h2>
    <table>
        <thead>
            <tr>
                <th>Group Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Theme</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groups as $group): ?>
                <tr>
                    <td><?= esc($group['title']) ?></td>
                    <td><?= esc($group['description']) ?></td>
                    <td><?= esc($group['type']) ?></td>
                    <td><?= esc($group['theme']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="#" class="btn">Join a Group</a>
</div>

</body>
</html>
