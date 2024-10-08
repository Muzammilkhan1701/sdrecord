        <!-- Main content -->
        <main class="col-md-9 col-lg-10 fs-5">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <!-- <div class="btn-toolbar mb-2 mb-md-0">
                    <a href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']); ?>">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </a>
                </div> -->
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card bg-primary text-white">
                        <a href="<?= $this->Url->build(['controller' => 'students', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo h($studentCount); ?></h5>
                                <p class="card-text">Reg'd Users</p>
                                <i class="fas fa-users fa-3x"></i>
                                <!-- <i class="bi bi-people-fill"></i> -->

                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 mb-4">
                    <div class="card bg-success text-white">
                        <a href=" <?= $this->Url->build(['controller' => 'results', 'action' => 'index']); ?>" class="text-white text-decoration-none">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo h($resultCount); ?></h5>
                                <p class="card-text">Results Declared</p>
                                <i class="fas fa-chart-line fa-3x"></i>
                                <!-- <i class="bi bi-graph-up-arrow"></i> -->

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>