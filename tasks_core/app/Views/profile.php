<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="eyebrow">User Information</div>
<h1>User Profile</h1>
<p>Information about the registered demo user.</p>

<div class="card">
    <?php if ($user): ?>
        <h2><?= esc($user['full_name']) ?></h2>

        <p><strong>Username:</strong>
            <?= esc($user['username']) ?>
        </p>

        <p><strong>Full Name:</strong>
            <?= esc($user['full_name']) ?>
        </p>

        <p><strong>Email:</strong>
            <?= esc($user['email']) ?>
        </p>

        <p><strong>Date Created:</strong>
            <?= esc($user['created_at']) ?>
        </p>
    <?php else: ?>
        <p>No demo user found.</p>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
