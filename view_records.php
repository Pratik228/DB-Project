<?php if (!empty($records)): ?>
    <table>
        <thead>
            <tr>
                <?php foreach ($headers as $header): ?>
                    <th><?php echo htmlspecialchars($header); ?></th>
                <?php endforeach; ?>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
                <tr>
                    <?php foreach ($record as $value): ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php endforeach; ?>
                    <td>
                        <a href="manage_records.php?entity=<?php echo $entity; ?>&operation=edit&id=<?php echo $record['id']; ?>">Edit</a>
                        <a href="manage_records.php?entity=<?php echo $entity; ?>&operation=delete&id=<?php echo $record['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No records found.</p>
<?php endif; ?>
