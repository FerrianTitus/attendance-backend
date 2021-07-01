<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Attendance</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Attendance</li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-12">
                <!-- Attendance Chart -->
                <a href="<?php echo e(url()->previous()); ?>" class="btn btn-sm btn-primary mb-2">Back</a>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Attendance
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e($attendance->user->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?php echo e($attendance->status ? 'Check Out' : 'Check In'); ?></td>
                                </tr>
                                <tr>
                                    <th>Check In</th>
                                    <td><?php echo e($attendance->created_at); ?></td>
                                </tr>
                                <tr>
                                    <th>Check Out</th>
                                    <td><?php echo e($attendance->updated_at); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

                <?php $__currentLoopData = $attendance->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ion ion-clipboard mr-1"></i>
                            Attendance <?php echo e($detail->type); ?>

                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <tbody>
                                <tr>
                                    <th>Time</th>
                                    <td><?php echo e($detail->created_at); ?></td>
                                </tr>
                                <tr>
                                    <th>Long, lat</th>
                                    <td><?php echo e($detail->long); ?>, <?php echo e($detail->lat); ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><?php echo e($detail->address); ?></td>
                                </tr>
                                <tr>
                                    <th>Location</th>
                                    <td>
                                        <div style="width: 100%">
                                            <iframe width="100%" height="300" frameborder="0" scrolling="no"
                                                marginheight="0" marginwidth="0"
                                                src="https://maps.google.com/maps?q=<?php echo e($detail->long); ?>,<?php echo e($detail->lat); ?>&hl=en&z=14&amp;output=embed">
                                            </iframe>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <td><img width="350" src="<?php echo e(asset('/storage/attendance/' . $detail->photo)); ?>" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
            <!-- /.Left col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ferrian Titus\attendance\resources\views/pages/attendance/show.blade.php ENDPATH**/ ?>