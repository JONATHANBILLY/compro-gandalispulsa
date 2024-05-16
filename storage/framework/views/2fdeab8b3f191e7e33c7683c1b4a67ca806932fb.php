<?php $__env->startSection('custom_style'); ?>
    <style>
        .btn:disabled {
            background: #8ba4b1;
            border-color: #8ba4b1
        }
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content-body" style="height: auto; background-color: rgba(45,45,45,0.45);">
        <div class="px-3 pt-3 mb-2">
            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <li><?php echo e(session('error')); ?></li>
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
            <div class="alert alert-info">
                <b>Harap Dibayar Sebelum <?php echo e($expired); ?></b><br> Segera lakukan pembayaran sesuai dengan kode bayar /
                nomor VA / Rekening Bank yang tercantum. Pastikan nominal pembayaran juga sesuai dengan total bayar.
            </div>
            <?php if(Str::upper($data->metode_pembayaran) == 'QRIS' ||
                    Str::upper($data->metode_pembayaran) == 'QRISC' ||
                    Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                    Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                    Str::upper($data->metode_pembayaran) == 'QRISCOP'): ?>
                <div id="qris-payment">
					<?php if(filter_var($data->no_pembayaran, FILTER_VALIDATE_URL)): ?>
						<center><img src="<?php echo e($data->no_pembayaran); ?>" width="300"></center>
					<?php else: ?>
						<center><?php echo QrCode::size(300)->generate($data->no_pembayaran); ?></center>
					<?php endif; ?>
                    <center><span class="badge bg-danger text-center mt-3">Scan QR Code diatas ini</span></center>
                </div>
            <?php endif; ?>

            <div class="row mt-3">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="card bg-card mb-3">
                        <div class="card-body">
                            <div>
                                <span class="d-block">Tanggal Pembelian</span>
                                <b class=""><?php echo e($data->created_at); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Batas Pembayaran</span>
                                <b class=""><?php echo e($expired); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Nomor Pesanan</span>
                                <b class=""><?php echo e($data->id_pembelian); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Metode Pembayaran</span>
                                <b class=""><?php echo e($data->metode_pembayaran); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Kode Bayar / Nomor VA</span>
                                <?php if(Str::upper($data->metode_pembayaran) == 'QRIS' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISC' ||
                                        Str::upper($data->metode_pembayaran) == 'QRIS2' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISOP' ||
                                        Str::upper($data->metode_pembayaran) == 'QRISCOP'): ?>
                                    <a class="btn btn-primary btn-sm" href="#qris-payment">Lihat QRIS</a>
                                <?php elseif(Str::upper($data->metode_pembayaran) == 'SHOPEEPAY'): ?>
                                    <a class="btn btn-warning btn-sm" href="<?php echo e($data->no_pembayaran); ?>">KLIK UNTUK BAYAR VIA
                                        SHOPEEPAY</a>
                                
                                <?php elseif(Str::upper($data->metode_pembayaran) == 'BANK-TRANSFER'): ?>
                                    <b>Bank : <?php echo e($config->bank_name); ?><br>
                                    Nomor Rekening : <?php echo e($config->bank_account); ?><br>
                                    Nama Rekening : <?php echo e($config->bank_account_name); ?></b>
                                <?php else: ?>
                                    <b class=""><?php echo e($data->no_pembayaran); ?></b>
                                <?php endif; ?>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Status Pembayaran</span>
                                <?php if($data->status_transaksi !== 'joki'): ?>
                                    <?php if($data->status_pembayaran == 'Belum Lunas'): ?>
                                        <b class="">Menunggu Pembayaran</b>
                                    <?php elseif($data->status_pembayaran == 'EXPIRED'): ?>
                                        <b class="text-danger">Pembayaran Expired</b>
                                    <?php elseif($data->status_pembayaran == 'Batal'): ?>
                                        <b class="text-danger">Pembayaran Batal</b>
                                    <?php elseif($data->status_pembayaran == 'Lunas'): ?>
                                        <b class="" style="color:lime;">Pembayaran Berhasil</b>
                                    <?php elseif($data->status_pembayaran == 'PAID'): ?>
                                        <b class="" style="color:lime;">Pembayaran Berhasil</b>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <table class="table table-clear text-white">
                                <tbody>
                                    <tr>
                                        <td class="left">
                                            <strong>Total Pembayaran :</strong>
                                        </td>
                                        <td class="right text-right">
                                            <strong style="color:lime;">
                                                Rp.
                                                <span>
                                                    <?php echo e(number_format($data->harga_pembayaran, 0, ',', '.')); ?>,-
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card bg-card mb-3">
                        <div class="card-body">

                            <div class="">
                                <b class="">Detail Pembelian</b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Item</span>
                                <b class=""><?php echo e($data->layanan); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">User ID</span>
                                <b class=""><?php echo e($data->user_id); ?>

                                    <?php echo e($data->zone != null ? '(' . $data->zone . ')' : ''); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Username</span>
                                <b class=""><?php echo e($data->nickname); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Keterangan</span>
                                <b class=""><?php echo e($data->keterangan); ?></b>
                            </div>
                            <div class="mt-2">
                                <span class="d-block">Status Pembelian</span>
                                <?php if($data->status_transaksi !== 'joki'): ?>
                                    <?php if($data->status_pembelian == 'Pending'): ?>
                                        <b class="">Pending</b>
                                    <?php elseif($data->status_pembelian == 'Processing'): ?>
                                        <b class="">Diproses</b>
                                    <?php elseif($data->status_pembelian == 'Batal'): ?>
                                        <b class="text-danger">Batal</b>
                                    <?php elseif($data->status_pembelian == 'Sukses'): ?>
                                        <b class="" style="color:lime;">Sukses</b>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if($data->status_pembayaran == 'Belum Lunas'): ?>
                                        <b class="">Pending</b>
                                    <?php elseif($data->status_pembayaran == 'Batal'): ?>
                                        <b class="text-danger">Batal</b>
                                    <?php elseif($data->status_pembayaran == 'Lunas'): ?>
                                        <b class="" style="color:lime;">Sukses</b>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-card">
                <div class="card-body">
                    <div class="card-title">
                        <h4>Pesanan Belum Masuk ?</h4>
                        <p>Hubungi customer service kami untuk melakukan konfirmasi pesanan</p>
                    </div>
                    <a class="btn btn-primary btn-sm w-100 rounded" href="<?php echo e(!$config ? '' : $config->url_wa); ?>">Hubungi
                        Kami</a>
                </div>
            </div>

        </div>

    </div>








    <?php $__env->startPush('custom_script'); ?>
    <?php $__env->stopPush(); ?>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\compro-new-vortexclawstore\resources\views/template/invoice.blade.php ENDPATH**/ ?>