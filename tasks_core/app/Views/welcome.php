<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="eyebrow">Daily Dashboard</div>
<h1>Tasks for Today</h1>
<p>Here are your scheduled tasks for <?= date('F d, Y') ?>.</p>

<div class="card">
    <h2>Today's Tasks</h2>
    <p><?= count($tasks) ?> tasks scheduled for today.</p>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']) ?></td>
                        <td><?= esc($task['title']) ?></td>
                        <td>
                            <span class="badge">
                                <?= esc(ucwords(str_replace('_', ' ', $task['status']))) ?>
                            </span>
                        </td>
                        <td><?= esc($task['task_date']) ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($tasks)): ?>
                    <tr>
                        <td colspan="4">No tasks scheduled for today.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<a href="<?= site_url('tasks') ?>" class="btn">View All Tasks</a>

<?= $this->endSection() ?>
