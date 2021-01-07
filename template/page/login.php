<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UptimeMonitor :: Login</title>
    <link rel="stylesheet" href="<?= $requestedPath ?>/assets/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $requestedPath ?>/assets/custom.css">
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="bg-light p-5 rounded-3 m-3 shadow">
                    <h1 class="display-4">Uptime Monitor</h1>
                    <p class="lead">Self-Hosted alternative to HetrixTools or UptimeRobot</p>
                </div>
            </div>
            <div class="col-lg-8">

                <?= $templateBuilder->renderMessages($messages); ?>

                <div class="card shadow mt-3">
                    <form action="" method="post">
                        <div class="card-header text-center">
                            <b>Login</b>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="loginEmail" name="loginEmail">
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                            </div>
                            <input type="hidden" value="<?= $_SESSION['_token'] ?>" name="_token">
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-dark btn-sm">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= $requestedPath ?>/assets/bootstrap.bundle.min.js"></script>
</body>
</html>