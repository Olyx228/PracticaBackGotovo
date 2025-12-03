<style>
    .login-container {
        max-width: 440px;
        margin: 100px auto;
        padding: 0 20px;
        animation: fadeIn 0.6s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .login-card {
        background: rgba(30, 41, 59, 0.95);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-lg);
        padding: 50px 40px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        backdrop-filter: blur(10px);
        text-align: center;
        position: relative;
        overflow: hidden;
        transition: var(--transition);
    }

    .login-card:hover {
        box-shadow: var(--shadow-lg);
        transform: translateY(-5px);
    }

    .login-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(to right, var(--primary-main), var(--accent-color));
    }

    .login-card::after {
        content: '🔐';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 4rem;
        opacity: 0.05;
        z-index: 0;
    }

    .login-header {
        margin-bottom: 40px;
        position: relative;
        z-index: 1;
    }

    .login-header h2 {
        color: var(--text-primary);
        font-size: 2rem;
        font-weight: 700;
        margin: 0 0 12px 0;
        background: linear-gradient(to right, var(--text-primary), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .login-subtitle {
        color: var(--text-muted);
        font-size: 1rem;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    .alert {
        padding: 20px;
        border-radius: var(--border-radius-sm);
        margin-bottom: 30px;
        font-weight: 600;
        border: 1px solid transparent;
        text-align: center;
        animation: slideIn 0.4s ease-out;
        backdrop-filter: blur(10px);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        position: relative;
        z-index: 1;
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(-20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.15);
        color: #fca5a5;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }

    .alert-danger::before {
        content: '⚠️';
        font-size: 1.2rem;
    }

    .alert-success {
        background: rgba(34, 197, 94, 0.15);
        color: #86efac;
        border: 1px solid rgba(34, 197, 94, 0.3);
    }

    .alert-success::before {
        content: '✅';
        font-size: 1.2rem;
    }

    .welcome-message {
        background: rgba(34, 197, 94, 0.15);
        color: #86efac;
        padding: 20px;
        border-radius: var(--border-radius-sm);
        margin-bottom: 30px;
        font-weight: 600;
        font-size: 1rem;
        border: 1px solid rgba(34, 197, 94, 0.3);
        backdrop-filter: blur(10px);
        animation: fadeIn 0.5s ease-out;
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .welcome-message::before {
        content: '👋';
        font-size: 1.2rem;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        gap: 25px;
        position: relative;
        z-index: 1;
    }

    .form-group {
        text-align: left;
        position: relative;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .form-group label::before {
        font-size: 1.1rem;
    }

    .form-group:nth-child(1) label::before {
        content: '👤';
    }

    .form-group:nth-child(2) label::before {
        content: '🔒';
    }

    .form-input {
        width: 100%;
        padding: 16px;
        border: 1px solid rgba(71, 85, 105, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        transition: var(--transition);
        background: rgba(15, 23, 42, 0.7);
        color: var(--text-primary);
        font-family: inherit;
    }

    .form-input:focus {
        border-color: var(--primary-light);
        outline: none;
        background: rgba(15, 23, 42, 0.9);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .form-input::placeholder {
        color: var(--text-muted);
    }

    .form-input-group {
        position: relative;
    }

    .form-input-group:focus-within::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(to right, var(--primary-main), var(--accent-color));
        border-radius: 0 0 var(--border-radius-sm) var(--border-radius-sm);
    }

    .login-btn {
        background: linear-gradient(135deg, var(--primary-main), var(--primary-light));
        color: var(--text-primary);
        padding: 16px;
        border: 1px solid rgba(59, 130, 246, 0.3);
        border-radius: var(--border-radius-sm);
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        transition: var(--transition);
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        position: relative;
        overflow: hidden;
    }

    .login-btn::before {
        content: '🚀';
        font-size: 1.1rem;
    }

    .login-btn:hover {
        background: linear-gradient(135deg, var(--primary-light), var(--primary-main));
        transform: translateY(-2px);
        box-shadow: var(--shadow);
    }

    .login-btn:active {
        transform: translateY(0);
    }

    .login-btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 5px;
        height: 5px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0;
        border-radius: 100%;
        transform: scale(1, 1) translate(-50%);
        transform-origin: 50% 50%;
    }

    .login-btn:focus:not(:active)::after {
        animation: ripple 1s ease-out;
    }

    @keyframes ripple {
        0% {
            transform: scale(0, 0);
            opacity: 0.5;
        }
        100% {
            transform: scale(20, 20);
            opacity: 0;
        }
    }

    .login-footer {
        margin-top: 35px;
        padding-top: 25px;
        border-top: 1px solid rgba(71, 85, 105, 0.3);
        color: var(--text-muted);
        font-size: 0.9rem;
        position: relative;
        z-index: 1;
    }

    .login-footer p {
        margin: 0;
        font-weight: 500;
    }

    .login-footer span {
        color: var(--primary-light);
        font-weight: 600;
    }

    /* Адаптивность */
    @media (max-width: 768px) {
        .login-container {
            margin: 60px auto;
            padding: 0 15px;
            max-width: 400px;
        }

        .login-card {
            padding: 40px 30px;
        }

        .login-header h2 {
            font-size: 1.8rem;
        }

        .form-input {
            padding: 14px;
        }

        .login-btn {
            padding: 14px;
        }
    }

    @media (max-width: 480px) {
        .login-container {
            margin: 40px auto;
            padding: 0 10px;
        }

        .login-card {
            padding: 30px 20px;
        }

        .login-header h2 {
            font-size: 1.6rem;
        }

        .login-subtitle {
            font-size: 0.95rem;
        }

        .alert,
        .welcome-message {
            padding: 15px;
            font-size: 0.9rem;
        }

        .login-footer {
            font-size: 0.85rem;
        }
    }

    /* Эффект при фокусе */
    .form-input:focus {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        50% {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        100% {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
    }

    /* Логотип или иконка системы */
    .system-icon {
        font-size: 3rem;
        margin-bottom: 20px;
        display: block;
        background: linear-gradient(to right, var(--primary-light), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <!-- Анимированная иконка системы -->
        <div class="system-icon">🎓</div>

        <div class="login-header">
            <h2>Авторизация</h2>
            <p class="login-subtitle">Войдите в систему деканата</p>
        </div>

        <?php if ($message ?? false): ?>
            <div class="alert alert-danger">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <?php if (app()->auth->user()->name ?? false): ?>
            <div class="welcome-message">
                Добро пожаловать, <span><?= htmlspecialchars(app()->auth->user()->name) ?></span>
            </div>
        <?php endif; ?>

        <?php if (!app()->auth::check()): ?>
            <form method="post" class="login-form">
                <div class="form-group">
                    <label>Логин</label>
                    <div class="form-input-group">
                        <input type="text" name="login" class="form-input"
                               placeholder="Введите ваш логин" required
                               autocomplete="username">
                    </div>
                </div>

                <div class="form-group">
                    <label>Пароль</label>
                    <div class="form-input-group">
                        <input type="password" name="password" class="form-input"
                               placeholder="Введите ваш пароль" required
                               autocomplete="current-password">
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    Войти в систему
                </button>
            </form>
        <?php endif; ?>

        <div class="login-footer">
            <p>Учебный портал деканата <span>&copy; <?= date('Y') ?></span></p>
        </div>
    </div>
</div>