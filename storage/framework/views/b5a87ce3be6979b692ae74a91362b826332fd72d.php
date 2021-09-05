<?php $request = app('Illuminate\Http\Request'); ?>
<!-- Main Header -->
  <header class="main-header no-print">
    <a href="" class="logo">
      
      <span class="logo-lg">SChool <i class="fa fa-circle text-success" id="online_indicator"></i></span> 

    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        &#9776;
        <span class="sr-only">Toggle navigation</span>
      </a>

   

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">

     

        <div class="btn-group">
          <button id="header_shortcut_dropdown" type="button" class="btn btn-success dropdown-toggle btn-flat pull-left m-8 btn-sm mt-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-plus-circle fa-lg"></i>
          </button>
          <ul class="dropdown-menu">
         
              <li><a href="">
                  <i class="fas fa-calendar-alt" aria-hidden="true"></i> <?php echo app('translator')->get('lang_v1.calendar'); ?>
              </a></li>
    
            <!-- Help Button -->
            
              <li><a id="start_tour" href="#">
                  <i class="fas fa-question-circle" aria-hidden="true"></i> <?php echo app('translator')->get('lang_v1.application_tour'); ?>
              </a></li>
            
          </ul>
        </div>
        <button id="btnCalculator" title="<?php echo app('translator')->get('lang_v1.calculator'); ?>" type="button" class="btn btn-success btn-flat pull-left m-8 btn-sm mt-10 popover-default hidden-xs" data-toggle="popover" data-trigger="click" data-content='<?php echo $__env->make("layouts.partials.calculator", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>' data-html="true" data-placement="bottom">
            <strong><i class="fa fa-calculator fa-lg" aria-hidden="true"></i></strong>
        </button>
        <div class="m-8 pull-left mt-15 hidden-xs" style="color: #fff;"><strong><?php echo e(\Carbon::createFromTimestamp(strtotime('now'))->format('d-m-Y'), false); ?></strong></div>

        <ul class="nav navbar-nav">
          <?php echo $__env->make('layouts.partials.header-notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
                         </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header><?php /**PATH D:\xampp\htdocs\Sky_School\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>