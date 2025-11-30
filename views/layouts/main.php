<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Деканат | Учебный портал</title>
    <style>
        :root {
            --primary-dark: #1a365d;
            --primary-main: #2d5a91;
            --primary-light: #4a7bbe;
            --accent-color: #e53e3e;
            --accent-hover: #c53030;
            --background: #0f172a;
            --surface: #1e293b;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --border-radius: 8px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--background) 0%, #1e293b 100%);
            color: var(--text-primary);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: var(--surface);
            border-bottom: 1px solid #334155;
            padding: 1rem 0;
            box-shadow: var(--shadow);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: var(--border-radius);
            transition: all 0.3s ease;
            background: var(--primary-main);
            border: 1px solid var(--primary-light);
        }

        .nav-links a:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .logout-btn {
            background: var(--accent-color) !important;
            border: 1px solid var(--accent-hover) !important;
        }

        .logout-btn:hover {
            background: var(--accent-hover) !important;
        }

        main {
            flex: 1;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
            width: 100%;
        }

        footer {
            background: var(--surface);
            color: var(--text-secondary);
            text-align: center;
            padding: 2rem 0;
            margin-top: auto;
            border-top: 1px solid #334155;
        }

        footer p {
            font-weight: 500;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                gap: 0.8rem;
            }

            .nav-links a {
                text-align: center;
                padding: 1rem;
                width: 100%;
            }

            .user-greeting {
                justify-content: center;
                width: 100%;
            }
        }
    </style>
</head>
<body>
<header>
    <nav>
        <div class="nav-links">
            <?php if (!app()->auth::check()): ?>
                <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
            <?php else: ?>
                <span class="user-greeting"><?= app()->auth::user()->name ?></span>
                <a href="<?= app()->route->getUrl('/staff') ?>">Главная</a>
                <a href="<?= app()->route->getUrl('/logout') ?>" class="logout-btn">Выход</a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<main>
    <?= $content ?? '' ?>
</main>

<footer>
    <p>Учебный портал деканата &copy; <?= date('Y') ?></p>
</footer>
</body>
</html>