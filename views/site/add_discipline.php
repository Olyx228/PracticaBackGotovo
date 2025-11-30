<style>
    .container {
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
    }

    .card {
        background: var(--surface);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        padding: 30px;
        border: 1px solid #334155;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #334155;
    }

    .card-header h4 {
        color: var(--text-primary);
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
    }

    .btn {
        padding: 12px 20px;
        border-radius: var(--border-radius);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-secondary {
        background: var(--primary-main);
        color: var(--text-primary);
        border: 1px solid var(--primary-light);
    }

    .btn-secondary:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 10px;
        font-weight: 600;
        color: var(--text-secondary);
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #334155;
        border-radius: var(--border-radius);
        font-size: 14px;
        transition: all 0.3s ease;
        background: var(--background);
        color: var(--text-primary);
    }

    .form-control:focus {
        border-color: var(--primary-main);
        outline: none;
        background: var(--surface);
    }

    .btn-primary {
        background: var(--primary-main);
        color: var(--text-primary);
        padding: 12px 24px;
        font-size: 14px;
        border: 1px solid var(--primary-light);
    }

    .btn-primary:hover {
        background: var(--primary-light);
        transform: translateY(-2px);
    }

    .alert {
        padding: 15px;
        border-radius: var(--border-radius);
        margin-bottom: 25px;
        font-weight: 600;
        border: 1px solid transparent;
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

    .mt-4 {
        margin-top: 1.5rem;
    }

    .mt-5 {
        margin-top: 2rem;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h4>Добавить новую дисциплину</h4>
            <a href="/pop-it-mvc/staff" class="btn btn-secondary">Назад</a>
        </div>

        <div class="card-body">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <p><?= htmlspecialchars($error) ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($_GET['success'])): ?>
                <div class="alert alert-success">
                    <?= htmlspecialchars($_GET['success']) ?>
                </div>
            <?php endif; ?>

            <form method="post">
                <input type="hidden" name="create" value="1">
                <div class="form-group">
                    <label>Название дисциплины</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Добавить дисциплину</button>
            </form>
        </div>
    </div>
</div>