<?php $__env->startSection('content'); ?>
    <div class="platform-category">
        <div class="row">
            <div class="col-sm-6 ml-sm-auto">
                <h2 class="text-center">Platforms</h2>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <th>Name</th>
                        <th>Constructor</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td>Dreamcast</td>
                        <td>Sega</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td>Gamecube</td>
                        <td>Nintendo</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-8 ml-sm-auto">
                        <a><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ml-sm-auto">
                <h2 class="text-center">Categories</h2>
                <table class="table table-hover">
                    <tr>
                        <th><input type="checkbox" aria-label="Checkbox for following text input"></th>
                        <th>Category</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td>RPG</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
                        <td>FPS</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-8 ml-sm-auto">
                        <a><i class="fa fa-trash-o fa-3x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <a><i class="fa fa-arrow-circle-left fa-3x" aria-hidden="true"></i></a>
            </div>
            <div class="col-sm-12">
                <a><i class="fa fa-home fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>