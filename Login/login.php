<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login & Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white text-center">
                        <ul class="nav nav-tabs card-header-tabs" id="authTabs" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Registrasi</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="authTabsContent">
                            <!-- Login Form -->
                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label for="loginEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="loginEmail" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="loginPassword" class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control" id="loginPassword" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                                </form>
                            </div>

                            <!-- Registration Form -->
                            <div class="tab-pane fade" id="register" role="tabpanel">
                                <form>
                                    <div class="mb-3">
                                        <label for="registerName" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="registerName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="registerEmail" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerPassword" class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control" id="registerPassword" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="registerConfirm" class="form-label">Konfirmasi Sandi</label>
                                        <input type="password" class="form-control" id="registerConfirm" required>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100">Daftar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>