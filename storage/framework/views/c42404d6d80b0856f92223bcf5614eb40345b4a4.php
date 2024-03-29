<?php $__env->startSection('contenu'); ?>

    <div class="row d-flex justify-content-around">
        <div class="card ESSAI">
            <img class="card-img-top" src="../images/games.jpg" alt="games image">
            <div class="card-body ESSAI">
                <h4 class="card-title ESSAI2">Games</h4>
                <p class="card-text">Latest reviewed</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../images/platforms.jpg" alt="platforms image">
            <div class="card-body">
                <h4 class="card-title">Platforms</h4>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../images/categories.png" alt="categories image">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-around">
        <div class="card">
            <img class="card-img-top" src="../images/users.jpeg" alt="users image">
            <div class="card-body">
                <h4 class="card-title">Users</h4>
                <p class="card-text">Latest added</p>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item">Cras justo odio</a>
                    <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item">Morbi leo risus</a>
                    <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item">Vestibulum at eros</a>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin-template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>