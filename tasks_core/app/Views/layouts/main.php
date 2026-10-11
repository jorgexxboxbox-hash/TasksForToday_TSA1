<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fc;
            color: #14213d;
        }

        header {
            background: white;
            border-bottom: 1px solid #e2e8f0;
        }

        nav {
            max-width: 1100px;
            margin: auto;
            padding: 22px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .brand {
            color: #2563eb;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;
        }

        .nav-links a {
            color: #475569;
            text-decoration: none;
            font-size: 14px;
        }

        .nav-links a:hover { color: #2563eb; }

        main {
            max-width: 1100px;
            margin: 45px auto;
            padding: 0 25px;
            min-height: 65vh;
        }

        .eyebrow {
            color: #2563eb;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 { font-size: 32px; margin-bottom: 12px; }
        p { color: #64748b; line-height: 1.7; }

        .card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            border: 1px solid #e2e8f0;
            margin-top: 25px;
        }

        .table-responsive { overflow-x: auto; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }

        th {
            background: #f8fafc;
            color: #64748b;
            text-transform: uppercase;
            font-size: 12px;
        }

        .badge {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 20px;
            background: #eff6ff;
            color: #2563eb;
            font-size: 12px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 15px;
        }

        footer {
            text-align: center;
            padding: 30px;
            color: #64748b;
            font-size: 12px;
        }
    </style>
</head>
<body>

<header>
    <nav>
        <a class="brand" href="<?= site_url('/') ?>">TaskFlow</a>

        <div class="nav-links">
            <a href="<?= site_url('/') ?>">Welcome</a>
            <a href="<?= site_url('tasks') ?>">Task List</a>
            <a href="<?= site_url('profile') ?>">Profile</a>
            <a href="<?= site_url('about') ?>">About</a>
        </div>
    </nav>
</header>

<main>
    <?= $this->renderSection('content') ?>
</main>

<footer>
    Tasks for Today Management System &copy; <?= date('Y') ?>
</footer>

</body>
</html>
