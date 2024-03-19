<?php
include "../backend/connection.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/logo-blue.png" />

    <title>Sign In | SDMC JQB</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100" style="background: linear-gradient(rgba(0, 48, 255, .15), rgba(0, 48, 255, .15)), url(&quot;../img/bg/bg.jpg&quot;);
	background-size: cover;
	background-position: center;">

        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="card">
                            <div class="card-header pb-0" style="background-color: #0030FF;">
                                <div class="text-center">
                                    <p class="lead fw-bold text-white">
                                        Sign in to your account to continue
                                    </p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-8">
                                        <img src="../img/icons/logo-blue.png" alt="logo" class="img-fluid">
                                    </div>
                                </div>
                                <div class="m-sm-3">
                                    <form action="../backend/login.php" method="post" class="needs-validation" novalidate>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Enter your email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control- <?php echo isset($errors) ? 'is-invalid' : ''; ?>" type="password" name="password" placeholder="Enter your password" required>
                                            <?php if (isset($errors)) : ?>
                                                <div class="invalid-feedback">
                                                    <?php echo $errors[0]; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="row d-flex justify-content-between px-3">
                                            <div class="form-check col-auto">
                                                <input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
                                                <label class="form-check-label text-small" for="customControlInline">Remember me</label>
                                            </div>
                                            <div class="col-auto">
                                                <a class="text-decoration-underline">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mx-1">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                        </div>

                                        <div class="row d-flex justify-content-start mt-4">
                                            <div class="col-auto d-flex justify-content-start">
                                                <p class="me-2">Dont have account?</p>
                                                <a class="text-decoration-underline" href="pages-sign-up.php">
                                                    Register Now
                                                </a>
                                            </div>
                                        </div>

                                        <!-- <div class="mb-3">

											<label class="form-label">Role</label>
                                                <select class="form-select" id="role" name="role">
												<?php
                                                $sql_roles = "SELECT * FROM roles";
                                                $res_roles = mysqli_query($conn, $sql_roles);

                                                if ($res_roles == TRUE) {
                                                    $count_get = mysqli_num_rows($res_roles);
                                                    if ($count_get > 0) {
                                                        while ($rows_roles = mysqli_fetch_assoc($res_roles)) {
                                                            $roles = $rows_roles['role'];
                                                ?>
															<option value="<?php echo $roles; ?>"><?php echo $roles; ?></option>
															<?php
                                                        }
                                                    }
                                                }

                                                            ?>
                                                </select>

										</div> -->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>