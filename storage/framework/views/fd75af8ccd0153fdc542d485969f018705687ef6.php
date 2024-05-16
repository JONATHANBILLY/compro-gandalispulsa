<?php $__env->startSection('custom_style'); ?>


<style>
    .accordion-button {
		box-shadow: none !important;
	}
	
	.product .box {
		margin-bottom: 40px;
	}
</style>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
	<div class="content-body">
			<div class="col-lg-6 mx-auto px-3 pt-3 mb-3">
			<h2 class="mb-4">Login Page</h2>
			    <?php if(session('error')): ?>
			    
			    <div class="alert alert-danger">
			       <ul>
			           <li><?php echo e(session('error')); ?></li>
			       </ul>
			    </div>
			    
			    <?php endif; ?>
			    <?php if(session('success')): ?>
			    
			    <div class="alert alert-success">
			       <ul>
			           <li><?php echo e(session('success')); ?></li>
			       </ul>
			    </div>
			    
			    <?php endif; ?>
			    <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
				<form action="<?php echo e(url('/login')); ?>" method="POST" class="my-form">
				    <?php echo csrf_field(); ?>
					<div class="mb-3">
						<label>Username/No Handphone</label>
						<input type="text" class="form-control" autocomplete="off" name="username" required>
					</div>
					<div class="mb-3">
						<label>Password</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<div class="form-check">
								<input class="form-check-input mt-1" type="checkbox" value="" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember me
								</label>
							</div>
						</div>
						<div class="col-6 text-end">
							<a class="text-decoration-none text-danger" href="<?php echo e(url('/forgot-password')); ?>">Forgot password?</a>
						</div>
					</div>
					<div class="mt-3">
						<button class="btn py-2 btn-primary w-100" type="submit" name="tombol" value="submit">Sign In</button>
					</div>
					<p class="mt-3">Belum memiliki akun? <a href="<?php echo e(url('/register')); ?>" class="text-decoration-none text-primary">Daftar sekarang!</a></p>
				</form>
			</div>
		</div>
		
        









<?php $__env->startPush('custom_script'); ?>



<?php $__env->stopPush(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\compro-youwillcelullershop\resources\views/template/login.blade.php ENDPATH**/ ?>