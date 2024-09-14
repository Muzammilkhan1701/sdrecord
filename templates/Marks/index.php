<div class="marks index content">
    <?= $this->Html->link(('New Mark'), ['action' => 'add'], ['class' => 'button float-right btn btn-primary']) ?>
    <h3 class="text-center"><?= __('Marks List') ?></h3>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th><?= $this->Paginator->sort('mark_id', 'Mark ID') ?></th>
                    <th><?= $this->Paginator->sort('student_id', 'Student Name') ?></th>
                    <th><?= $this->Paginator->sort('academic_year', 'Academic Year') ?></th>
                    <th><?= $this->Paginator->sort('rollno', 'Roll No') ?></th>
                    <th><?= $this->Paginator->sort('class', 'Class') ?></th>
                    <!-- Term-1 Columns -->
                    <th colspan="7" class="text-center">Term 1 Results</th>
                    <!-- Term-2 Columns -->
                    <th colspan="7" class="text-center">Term 2 Results</th>
                    <th><?= $this->Paginator->sort('term1_total', 'Term 1 Total') ?></th>
                    <th><?= $this->Paginator->sort('term2_total', 'Term 2 Total') ?></th>
                    <th class="text-center"><?= __('Actions') ?></th>
                </tr>
                <tr>
                    <!-- Empty space for merged columns -->
                    <th colspan="5"></th>
                    <th>English</th>
                    <th>Hindi</th>
                    <th>Marathi</th>
                    <th>Mathematics</th>
                    <th>Science</th>
                    <th>Social</th>
                    <th>Computer</th>
                    <!-- Term 2 Subjects -->
                    <th>English</th>
                    <th>Hindi</th>
                    <th>Marathi</th>
                    <th>Mathematics</th>
                    <th>Science</th>
                    <th>Social</th>
                    <th>Computer</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marks as $mark): ?>
                <tr>
                    <td><?= $this->Number->format($mark->mark_id) ?></td>
                    <td><?= $mark->has('student') ? $this->Html->link($mark->student->name, ['controller' => 'Students', 'action' => 'view', $mark->student->student_id]) : '' ?></td>
                    <td><?= h($mark->academic_year) ?></td>
                    <td><?= h($mark->rollno) ?></td>
                    <td><?= h($mark->class) ?></td>
                    <!-- Term 1 -->
                    <td><?= $this->Number->format($mark->term1_subject_1_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_2_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_3_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_4_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_5_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_6_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_subject_7_total) ?></td>
                    <!-- Term 2 -->
                    <td><?= $this->Number->format($mark->term2_subject_1_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_2_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_3_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_4_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_5_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_6_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_subject_7_total) ?></td>
                    <td><?= $this->Number->format($mark->term1_total) ?></td>
                    <td><?= $this->Number->format($mark->term2_total) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(('View'), ['action' => 'view', $mark->mark_id], ['class' => 'btn btn-info btn-sm']) ?>
                        <?= $this->Html->link(('Edit'), ['action' => 'edit', $mark->mark_id], ['class' => 'btn btn-warning btn-sm']) ?>
                        <?= $this->Form->postLink(('Delete'), ['action' => 'delete', $mark->mark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $mark->mark_id), 'class' => 'btn btn-danger btn-sm']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(('next') . ' >') ?>
                <?= $this->Paginator->last(('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>