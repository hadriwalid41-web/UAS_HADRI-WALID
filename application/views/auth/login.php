<!DOCTYPE html>
<html>
<head>
    <title>Login - CodeIgniter 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body class="is-flex is-justify-content-center is-align-items-center" style="height: 100vh; background-color: #f5f5f5;">
    <div class="card" style="width: 350px;">
        <div class="card-content">
            <h1 class="title has-text-centered mb-5">Login</h1>

            <!-- Pesan Error Flashdata -->
            <?php if ($this->session->flashdata('error')): ?>
                <div class="notification is-danger is-light p-3">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>

            <!-- Pesan Sukses Flashdata -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="notification is-success is-light p-3">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <form method="post" action="<?php echo site_url('auth'); ?>">
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="username" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="password" required>
                    </div>
                </div>

                <button type="submit" class="button is-link is-fullwidth mt-5">Login</button>
            </form>
            <small>user: admin | pass: admin</small>
        </div>
    </div>
</body>
</html>