<h1>Students Class-wise View</h1>
<!-- Form to select class, section, and academic year -->
<form method="get" action="<?= $this->Url->build(['action' => 'classwise']) ?>">
    <label for="year">Select Academic Year:</label>
    <select name="year" id="year">
        <option value="" selected>Select Year:</option>
        <?php for ($year = 2020; $year <= 2030; $year++): ?>
            <option value="<?= $year ?>" <?= ($selectedYear == $year) ? 'selected' : '' ?>><?= $year ?></option>
        <?php endfor; ?>
    </select>

    <label for="class">Select Class:</label>
    <select name="class" id="class">
        <option value="" selected>Select Class:</option>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>" <?= ($class == $i) ? 'selected' : '' ?>>Class <?= $i ?></option>
        <?php endfor; ?>
    </select>

    <label for="section">Select Section:</label>
    <select name="section" id="section">
        <option value="" selected>Select Section:</option>
        <?php foreach (['A', 'B', 'C', 'D'] as $sec): ?>
            <option value="<?= $sec ?>" <?= ($section == $sec) ? 'selected' : '' ?>>Section <?= $sec ?></option>
        <?php endforeach; ?>
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
                <th>Term 1 Total</th>
                <th>Term 2 Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $student): ?>
                <tr>
                    <td><?= h($student->student_id) ?></td>
                    <td><?= h($student->name) ?></td>
                    <td><?= h($student->section) ?></td>
                    <td><?= h($student->_matchingData['Marks']->class ?? '') ?></td>
                    <td><?= h($student->_matchingData['Marks']->term1_total ?? '') ?></td> <!-- Term 1 Total -->
                    <td><?= h($student->_matchingData['Marks']->term2_total ?? '') ?></td> <!-- Term 2 Total -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No students found for the selected class, section, and academic year.</p>
<?php endif; ?>