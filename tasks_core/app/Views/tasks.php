<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="eyebrow">Task Management</div>
<h1>Complete Task List</h1>
<p>View all scheduled tasks, including previous and upcoming dates.</p>

<div class="card">
    <h2>All Tasks</h2>
    <p><?= count($tasks) ?> total task records.</p>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Title</th>
                    <th>Status</th>
                    <th>Task Date</th>
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
                        <td colspan="4">No tasks found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
