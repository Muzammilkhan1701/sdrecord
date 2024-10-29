<h1>Students Class-wise View</h1>

<!-- Form to select class -->
<form method="get" action="<?= $this->Url->build(['action' => 'classwise']) ?>">
    <label for="class">Select Class:</label>
    <select name="class" id="class">
    <option value="selected">Select Class :</option>

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>" <?= ($class == $i) ? 'selected' : '' ?>>Class <?= $i ?></option>
        <?php endfor; ?>
    </select>
    <button type="submit">View Students</button>
</form>

<?php if (!empty($results)): ?>
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Section</th>
                <th>Class</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $student): ?>
                <tr>
                    <td><?= h($student->student_id) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= h($student->section) ?></td>
                    <td><?= h($student->_matchingData['Marks']->class ?? '') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No students found for the selected class.</p>
<?php endif; ?>
