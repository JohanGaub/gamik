<?php $__env->startSection('content'); ?>

    <div class="game-file">
        <div class="d-flex justify-content-center">
            <form class="col-sm-3">
                <h1 class="text-center">Game File</h1>
                <div class="form-group">
                    <label for="FormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="FormControlFile1">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="FormControlSelect1">Year</label>
                    <select class="form-control" id="FormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Studio</label>
                    <input type="text" class="form-control" id="exampleInput1" placeholder="Enter Studio">
                </div>
                <div class="form-group">
                    <label for="game-summary">Summary</label>

                    <div>
                        <textarea id="game-summary" rows="10" cols="37">Enter Summary</textarea>
                    </div>

                </div>
                <div class="form-group">
                    <label for="FormControlSelect2">Category</label>
                    <select multiple class="form-control" id="FormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ormControlSelect3">Platform</label>
                    <select multiple class="form-control" id="FormControlSelect3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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