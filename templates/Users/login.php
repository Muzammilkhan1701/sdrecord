<!-- in /templates/Users/login.php -->
<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <!-- Flash Messages -->
        <?= $this->Flash->render() ?>

        <!-- Login Header -->
        <h3 class="text-center mb-4" style="font-weight: bold;">Login</h3>

        <!-- Login Form -->
        <?= $this->Form->create(null, ['class' => 'mb-3']) ?>
        <fieldset>
            <legend class="text-center mb-3" style="font-size: 1.2rem;"><?= __('Please enter your username and password') ?></legend>
            
            <!-- Email Field -->
            <div class="mb-3">
                <?= $this->Form->control('email', [
                    'required' => true,
                    'class' => 'form-control',
                    'placeholder' => 'Enter your email',
                    'label' => ['class' => 'form-label', 'text' => 'Email']
                ]) ?>
            </div>
            
            <!-- Password Field -->
            <div class="mb-3">
                <?= $this->Form->control('password', [
                    'required' => true,
                    'class' => 'form-control',
                    'placeholder' => 'Enter your password',
                    'label' => ['class' => 'form-label', 'text' => 'Password']
                ]) ?>
            </div>
        </fieldset>

        <!-- Submit Button -->
        <div class="d-grid mb-2">
            <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary btn-lg']) ?>
        </div>
        <?= $this->Form->end() ?>

        <!-- Add User Link -->
        <!-- <div class="text-center mt-3">
            <?= $this->Html->link("Create New Account", ['action' => 'add'], ['class' => 'text-decoration-none']) ?>
        </div> -->
    </div>
</div>
