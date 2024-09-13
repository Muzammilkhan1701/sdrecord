<div class="container-fluid mt-5 py-5 shadow-lg rounded" style="max-width: 800px; background-color: #f5f7fa;">
    <!-- School Header -->
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="color: #343a40;">Sunny's Spring Dale School</h2>
        <p class="lead" style="color: #6c757d;">Excellence in Education</p>
    </div>

    <!-- Flash Message Display -->
    <?= $this->Flash->render() ?>

    <!-- Form Start -->
    <?= $this->Form->create(null, ['url' => ['controller' => 'Results', 'action' => 'marksheet'], 'type' => 'post', 'class' => 'p-4']) ?>

        <!-- Year Selection -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Select Year:</h5>
                <?= $this->Form->control('year', [
                    'type' => 'select', 
                    'options' => ['2021' => '2021', '2022' => '2022', '2023' => '2023', '2024' => '2024'], 
                    'empty' => 'Select Year', 
                    'label' => false,
                    'class' => 'form-select',
                    'required' => true
                ]); ?>
            </div>
        </div>

        <!-- Term Selection -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Select Term:</h5>
                <?= $this->Form->control('term', [
                    'type' => 'select', 
                    'options' => ['Term1' => 'Term1', 'Term2' => 'Term2', 'Term1+Term2' => 'Term1+Term2'], 
                    'empty' => 'Select Term', 
                    'label' => false,
                    'class' => 'form-select',
                    'required' => true
                ]); ?>
            </div>
        </div>

        <!-- Roll Number Input -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Enter Roll No:</h5>
                <?= $this->Form->control('rollno', [
                    'type' => 'text', 
                    'placeholder' => 'Enter Roll No', 
                    'label' => false, 
                    'class' => 'form-control',
                    'required' => true
                ]); ?>
            </div>
        </div>

        <!-- Mother's Name Input -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Enter Mother's Name:</h5>
                <?= $this->Form->control('mother_name', [
                    'type' => 'text', 
                    'placeholder' => "Enter Mother's Name", 
                    'label' => false, 
                    'class' => 'form-control',
                    'required' => true
                ]); ?>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="text-center mt-4">
            <?= $this->Form->button('Get Result', [
                'type' => 'submit', 
                'class' => 'btn btn-primary px-5 py-2 fw-bold'
            ]); ?>

            <a href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>" class="btn btn-outline-secondary px-5 py-2 fw-bold ms-3">Back to Home</a>
        </div>

    <?= $this->Form->end() ?>
</div>
