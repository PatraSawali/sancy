<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login dengan Google</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-6 mx-auto text-center px-5 py-5 border rounded bg-white">
            <?php if(Session::has('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>
            <h1>Login</h1>
            <p>Silakan login dengan Akun Google yang kamu punya</p>
            <a href='<?php echo e(url('auth/redirect')); ?>' class="btn border border-primary"><img width="20px"
                    style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
                    src="<?php echo e(asset('foto/google.jpg')); ?>" />
                Login dengan Google</a>
        </div>
    </main>
</body>

</html>
<?php /**PATH C:\laragon\www\portofolio\resources\views/auth/index.blade.php ENDPATH**/ ?>