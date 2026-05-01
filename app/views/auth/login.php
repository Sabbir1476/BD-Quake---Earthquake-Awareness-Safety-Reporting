<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card-custom">
                    <h2 class="mb-3">Login</h2>

                    <?php if (!empty($justRegistered)): ?>
                        <div class="alert alert-success py-2">
                            Account created successfully. Please login.
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger py-2">
                            <ul class="mb-0" style="padding-left: 18px;">
                                <?php foreach ($errors as $error): ?>
                                    <li><?= htmlspecialchars($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= BASE_URL ?>/index.php?controller=auth&action=login">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                   value="<?= htmlspecialchars($old['email'] ?? '') ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>

                            <div class="input-group">
                                <input type="password"
                                       name="password"
                                       id="loginPassword"
                                       class="form-control"
                                       required>
                                <button class="btn btn-outline-secondary"
                                        type="button"
                                        id="toggleLoginPassword"
                                        aria-label="Show password">
                                    👁
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning w-100 mt-2">
                            Login
                        </button>

                        <p class="mt-3 mb-0" style="font-size:0.9rem;">
                            Don't have an account?
                            <a href="<?= BASE_URL ?>/index.php?controller=auth&action=register">Create one</a>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('loginPassword');
    const btn = document.getElementById('toggleLoginPassword');

    if (!input || !btn) return;

    btn.addEventListener('click', function () {
        const isHidden = input.type === 'password';
        input.type = isHidden ? 'text' : 'password';
        btn.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
        btn.textContent = isHidden ? '🙈' : '👁';
    });
});
</script>
