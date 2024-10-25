<!-- // In templates/Users/dashboard.php -->

<?php $identity = $this->request->getAttribute('identity'); ?>

<h1>Welcome to the Dashboard</h1>

<?php if ($identity && $identity->role === 'admin'): ?>
    <div class="admin-section">
        <h2>Admin Section</h2>
        <!-- Admin-specific content here -->
    </div>
<?php elseif ($identity && $identity->role === 'teacher'): ?>
    <div class="teacher-section">
        <h2>Teacher Section</h2>
        <!-- Teacher-specific content here -->
    </div>
<?php elseif ($identity && $identity->role === 'account'): ?>
    <div class="accountant-section">
        <h2>Accountant Section</h2>
        <!-- Accountant-specific content here -->
    </div>
<?php endif; ?>

<main class="col-md-9 col-lg-10 fs-5">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row">
        <!-- Section visible to all roles (e.g., Admin, Teacher, Accountant) -->
        <div class="col-md-6 mb-4">
            <div class="card bg-primary text-white">
                <a href="<?= $this->Url->build(['controller' => 'students', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo h($studentCount); ?></h5>
                        <p class="card-text">Reg'd Users</p>
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                </a>
            </div>
        </div>

          <!-- Section for Teacher only -->
          <?php if ($this->request->getAttribute('identity')->role === 'admin' || $this->request->getAttribute('identity')->role === 'teacher'): ?>
            <div class="col-md-6 mb-4">
            <div class="card bg-info text-white">
                <a href="<?= $this->Url->build(['controller' => 'marks', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Marks Management</h5>
                        <p class="card-text">Manage Marks</p>
                        <i class="fas fa-book-open fa-3x"></i>
                    </div>
                </a>
            </div>
        </div>
        <?php endif; ?>

        <!-- Section for Admin only -->
        <?php if ($this->request->getAttribute('identity')->role === 'admin'): ?>
        <div class="col-md-6 mb-4">
            <div class="card bg-success text-white">
                <a href="<?= $this->Url->build(['controller' => 'results', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo h($resultCount); ?></h5>
                        <p class="card-text">Results Declared</p>
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                </a>
            </div>
        </div>
        <?php endif; ?>

      
        <!-- Section for Accountant only -->
        <!-- <?php if ($this->request->getAttribute('identity')->role === 'account' ||$this->request->getAttribute('identity')->role === 'teacher'|| $this->request->getAttribute('identity')->role === 'admin'): ?>
        <div class="col-md-6 mb-4">
            <div class="card bg-warning text-white">
                <a href="<?= $this->Url->build(['controller' => 'fees', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Fees Management</h5>
                        <p class="card-text">Manage Fees</p>
                        <i class="fas fa-money-bill fa-3x"></i>
                    </div>
                </a>
            </div>
        </div>
        <?php endif; ?> -->
    </div>
</main>

        