<div class="container row d-flex align-items-center me-5">
     <div class="col-2 ps-5 pe-2 ">
         <!-- <img src="springdalelogo.png" width="150px " > -->
         <?php echo $this->Html->image('springdalelogo.png', [array('class' => 'shadow mb-3', 'style' => 'height="100px" width="100px"', 'alt' => 'Spring dale')]); ?>

     </div>
     <div class="col-2 p-3"></div>
     <div class="col-8 ">
         <h1 class="ms-3" style=" font-family: Cooper Black;">Sunny's Spring Dale School</h1>
     </div>
 </div>
 <!-- Sidebar -->
 <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar fs-5" style="height: 695px;">
     <div class="position-sticky pt-2">
         <h3 class="mb-2 text-white"></h3>
         <ul class="nav flex-column">
             <li class="nav-item p-3">
                 <a class="nav-link active text-white" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'dashboard']); ?>">
                     <i class="fas fa-tachometer-alt text-white"></i> Dashboard
                 </a>
             </li>

             <?php $role = $this->request->getAttribute('identity')->role; ?>


             <!-- Admin and Accountant can manage students -->
             <?php if (in_array($role, ['admin', 'teacher', 'account'])): ?>
                 <li class="nav-item p-3">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'students', 'action' => 'index']); ?>">
                         <i class="fas fa-users text-white"></i> Students
                     </a>
                 </li>
             <?php endif; ?>

             <!-- Admin and Teacher can see student classes -->
             <!-- <?php if (in_array($role, ['admin', 'teacher'])): ?>
            
             <li class="nav-item p-3 pb-0 d-inline-flex gap-1">
                 <a class="nav-link text-white pb-0" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                 <i class="bi bi-journal-richtext"></i> Academic Details
                 </a>
             </li>
             <div class="collapse" id="collapseExample2">
                 <div class="card card-body bg-dark border-0 p-0">
                 <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'schoolclasses', 'action' => 'index']); ?>">
                         <i class="fas fa-graduation-cap text-white"></i> Classes
                     </a>
                 </li>
                 <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'subjects', 'action' => 'index']); ?>">
                         <i class="fas fa-book text-white"></i> Subjects
                     </a>
                 </li>

                  <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'terms', 'action' => 'index']); ?>">
                         <i class="fas fa-book text-white"></i> Terms
                     </a>
                 </li> 

                 <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'classsubcombs', 'action' => 'index']); ?>">
                         <i class="fas fa-book text-white"></i> Class Subject Combination
                     </a>
                 </li>
                  <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'academicYears', 'action' => 'index']); ?>">
                         <i class="fas fa-book text-white"></i> Academic Year 
                     </a>
                 </li> 


                </div>
             </div>

             <?php endif; ?> -->

             <!-- Admin and Teacher can manage  -->
             <?php if (in_array($role, ['admin', 'teacher'])): ?>

                 <li class="nav-item p-3 pb-0 d-inline-flex gap-1">
                     <a class="nav-link text-white pb-0" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                     <i class="fas fa-graduation-cap text-white"></i> Manage Exams
                     </a>
                 </li>
                 <div class="collapse" id="collapseExample1">
                     <div class="card card-body bg-dark border-0 p-0">

                         <li class="pb-0">
                             <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'marks', 'action' => 'index']); ?>">
                             <i class="fas fa-book text-white"></i> Marks
                             </a>
                         </li>
                         <!-- <li class="pb-0">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'assessments', 'action' => 'index']); ?>">
                         <i class="fas fa-book text-white"></i> Assessments
                     </a>
                 </li> -->

                         <li class="pb-0">
                             <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'excellence', 'action' => 'index']); ?>">
                                 <i class="fas fa-book text-white"></i> Co-Scholastic Areas
                             </a>
                         </li>
                      

                     </div>
                 </div>
             <?php endif; ?>

             <!-- Admin can view academic years -->
             <?php if (in_array($role, ['admin', 'teacher'])): ?>
                <li class="nav-item p-3">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'results', 'action' => 'index']); ?>">
                         <i class="fas fa-chart-bar text-white"></i> Results
                     </a>
                 </li>
                 <!-- <li class="nav-item p-3">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'studentClassSections', 'action' => 'index']); ?>">
                         <i class="fas fa-chart-bar text-white"></i> Promoted
                     </a>
                 </li> -->
             <?php endif; ?>


             <!-- <?php if (in_array($role, ['admin', 'account'])): ?>
                 <li class="nav-item">
                     <a class="nav-link text-white" href="<?= $this->Url->build(['controller' => 'fees', 'action' => 'index']); ?>">
                         <i class="bi bi-wallet2"></i> Account
                     </a>
                 </li>
             <?php endif; ?> -->

             <?php if ($role === 'admin'): ?>

                 <li class="nav-item p-3 pb-0 d-inline-flex gap-1">
                     <a class="nav-link text-white pb-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                         <i class="bi bi-people-fill"></i> Manage Users
                     </a>

                 </li>

                 <div class="collapse " id="collapseExample">
                     <div class="card card-body bg-dark border-0 p-0">
                         <!-- Admin can add users -->
                         <li class=" pb-0">
                             <a class="nav-link text-white pb-0" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'add']); ?>">
                                 <i class="bi bi-person-fill-add"></i> Add Users
                             </a>
                         </li>

                         <li class="pb-0">
                             <a class="nav-link text-white pb-0" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>">
                                 <i class="fas fa-key text-white"></i> User's Change Password
                             </a>
                         </li>
                     </div>
                 </div>
             <?php endif; ?>



             <li class="btn-toolbar mb-2 mb-md-0 p-2">
                 <a class="bg-light" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']); ?>">
                     <button type="button" class="btn btn-sm btn-outline-secondary p-3">
                         <i class="fas fa-sign-out-alt p-2"></i> Logout
                     </button>
                 </a>
             </li>
         </ul>
     </div>
 </nav>