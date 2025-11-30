<style>
    .login-container {
        max-width: 400px;
        margin: 80px auto;
        padding: 0 20px;
    }

    .login-card {
        background: var(--surface);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 40px 30px;
        border: 1px solid #334155;
        text-align: center;
    }

    .login-header {
        margin-bottom: 30px;
    }

    .login-header h2 {
        color: var(--text-primary);
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0 0 8px 0;
    }

    .login-subtitle {
        color: var(--text-secondary);
        font-size: 14px;
        font-weight: 500;
    }

    .alert {
        padding: 15px;
        border-radius: var(--border-radius);
        margin-bottom: 30px;
        font-weight: 600;
        border: 1px solid transparent;
        text-align: center;
    }

    .alert-danger {
        background: var(--accent-color);
        color: var(--text-primary);
        border-color: var(--accent-hover);
    }

    .alert-success {
        background: #2d5a2d;
        color: var(--text-primary);
        border: 1px solid #48bb78;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 14px;
    }

    .form-input {
        width: 100%;
        padding: 12px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 14px;
        transition: all 0.3s ease;
        background: var(--background);
        color: var(--text-primary);
    }

    .form-input:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .form-input::placeholder {
        color: var(--text-secondary);
    }

    .login-btn {
        background: var(--primary-main);
        color: var(--text-primary);
        padding: 12px;
        border: 1px solid var(--primary-light);
        border-radius: var(--border-radius);
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .login-btn:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
    }

    .welcome-message {
        background: #2d5a2d;
        color: var(--text-primary);
        padding: 15px;
        border-radius: var(--border-radius);
        margin-bottom: 20px;
        font-weight: 600;
        font-size: 14px;
        border: 1px solid #48bb78;
    }

    .login-footer {
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #334155;
        color: var(--text-secondary);
        font-size: 13px;
    }

</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <h2>Авторизация</h2>
            <p class="login-subtitle">Введите ваши учетные данные</p>
        </div>

        <?php if ($message ?? false): ?>
            <div class="alert alert-danger">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <?php if (app()->auth->user()->name ?? false): ?>
            <div class="welcome-message">
                Добро пожаловать, <?= app()->auth->user()->name ?>
            </div>
        <?php endif; ?>

        <?php if (!app()->auth::check()): ?>
            <form method="post" class="login-form">
                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" name="login" class="form-input"
                           placeholder="Введите ваш логин" required>
                </div>

                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" name="password" class="form-input"
                           placeholder="Введите ваш пароль" required>
                </div>

                <button type="submit" class="login-btn">
                    Войти в систему
                </button>
            </form>
        <?php endif; ?>

        <div class="login-footer">
            Учебный портал деканата &copy; <?= date('Y') ?>
        </div>
    </div>
</div>