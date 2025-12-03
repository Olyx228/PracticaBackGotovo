<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Деканат | Учебный портал</title>
    <style>
        :root {
            --primary-dark: #0c4a6e;
            --primary-main: #0891b2;
            --primary-light: #22d3ee;
            --accent-color: #7c3aed;
            --accent-hover: #6d28d9;
            --background: #0f172a;
            --surface: #1e293b;
            --surface-light: #334155;
            --text-primary: #f1f5f9;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;
            --border-color: #475569;
            --border-radius: 12px;
            --border-radius-sm: 8px;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.4);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, var(--background) 0%, #1e293b 100%);
            color: var(--text-primary);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Улучшенная типографика */
        h1, h2, h3, h4 {
            font-weight: 600;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 2.5rem;
            background: linear-gradient(to right, var(--text-primary), var(--primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        h2 {
            font-size: 2rem;
            color: var(--text-primary);
        }

        p {
            margin-bottom: 1rem;
            color: var(--text-secondary);
        }

        /* Хедер и навигация */
        header {
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(71, 85, 105, 0.3);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary-light), var(--primary-main));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: var(--border-radius-sm);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .nav-links a:not(.logout-btn) {
            background: rgba(8, 145, 178, 0.1);
            border: 1px solid rgba(8, 145, 178, 0.2);
        }

        .nav-links a:not(.logout-btn):hover {
            background: rgba(8, 145, 178, 0.2);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .nav-links a:not(.logout-btn)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(to right, var(--primary-light), var(--primary-main));
            transition: width 0.3s ease;
        }

        .nav-links a:not(.logout-btn):hover::after {
            width: 100%;
        }

        .user-greeting {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1.5rem;
            background: rgba(34, 211, 238, 0.1);
            border-radius: var(--border-radius-sm);
            border: 1px solid rgba(34, 211, 238, 0.2);
        }

        .logout-btn {
            background: linear-gradient(135deg, var(--accent-color), var(--accent-hover));
            border: none;
            color: white;
            font-weight: 600;
        }

        .logout-btn:hover {
            background: linear-gradient(135deg, var(--accent-hover), #5b21b6);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(124, 58, 237, 0.3);
        }

        /* Основной контент */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
            width: 100%;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Футер */
        footer {
            background: rgba(15, 23, 42, 0.95);
            backdrop-filter: blur(10px);
            color: var(--text-muted);
            text-align: center;
            padding: 2.5rem 0;
            margin-top: 4rem;
            border-top: 1px solid rgba(71, 85, 105, 0.3);
        }

        footer p {
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1.5rem;
                padding: 1rem;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
                gap: 0.75rem;
            }

            .nav-links a,
            .user-greeting {
                width: 100%;
                text-align: center;
                justify-content: center;
            }

            .user-greeting {
                order: -1;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.75rem;
            }

            main {
                margin: 2rem auto;
                padding: 0 1rem;
            }
        }

        @media (max-width: 480px) {
            :root {
                --border-radius: 8px;
                --border-radius-sm: 6px;
            }

            h1 {
                font-size: 1.75rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            .nav-links a {
                padding: 1rem;
            }
        }

        /* Дополнительные эффекты */
        ::selection {
            background: rgba(34, 211, 238, 0.3);
            color: var(--text-primary);
        }

        /* Плавная прокрутка */
        html {
            scroll-behavior: smooth;
        }

        /* Улучшенные фокус-состояния */
        a:focus,
        button:focus {
            outline: 2px solid var(--primary-light);
            outline-offset: 2px;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <a href="<?= app()->route->getUrl('/staff') ?>" class="logo">Деканат</a>
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