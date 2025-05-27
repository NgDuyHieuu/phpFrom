
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Thông Tin Cá Nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-4">
        <!-- Header Navigation -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <nav class="d-flex flex-wrap gap-2">
                    {{-- <button class="btn btn-link text-muted p-2">H</button> --}}
                    <a href= "{{route('home')}}" class="btn btn-link text-muted p-2">LIÊN HỆ</a>
                    <a href= "{{route('profile')}}" class="btn btn-primary px-3 py-2 fw-semibold">HỒ SƠ</a>
                    <a href= "{{route('experience')}}" class="btn btn-link text-muted p-2">KINH NGHIỆM</a>
                    <a href= "{{route('education')}}" class="btn btn-link text-muted p-2">HỌC VẤN</a>
                    <a href= "{{route('skills')}}" class="btn btn-link text-muted p-2">KỸ NĂNG</a>
                    <a href= "#" class="btn btn-link text-muted p-2">...</a>
                    <a href= "#" class="btn btn-link text-muted p-2">HOÀN THIỆN & XEM TRƯỚC</a>
                    <a href= "#" class="btn btn-link text-muted p-2">THƯ XIN VIỆC AI</a>
                </nav>
            </div>
        </div>

        <!-- Main Form -->
        <div class="card shadow-sm">
            <div class="card-body p-4 p-md-5">
                <form id="profileForm" method="POST">
                    @csrf
                    <div class="row g-4">
                        <!-- Left Column -->
                        <div class="col-lg-12">
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold text-dark mb-2">
                                    CHỨC DANH CHUYÊN MÔN
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="title" 
                                       name="profile[title]" 
                                       value="" 
                                       placeholder="Vị trí của bạn: ">
                            </div>

                            <!-- Website -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold text-dark mb-2">
                                    KINH NGHIỆM, KỸ NĂNG
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="summary" 
                                       name="profile[summary]" 
                                       value="" 
                                       placeholder="Tóm tắt kỹ năng, kinh nghiệm, định hướng ...: ">
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <!-- Left Column -->
                        <div class="col-lg-12">
                            <!-- Full Name -->
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold text-dark mb-2">
                                    ĐIỂM MẠNH
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="highlights" 
                                       name="profile[highlights]" 
                                       value="" 
                                       placeholder="Danh sách các điểm nổi bật">
                            </div>

                            <!-- Website -->
                            <div class="mb-4">
                                <label for="accomplishments" class="form-label fw-bold text-dark mb-2">
                                    THÀNH TỰU
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg" 
                                       id="accomplishments" 
                                       name="profile[accomplishments]" 
                                       value="" 
                                       placeholder="Các thành tựu đã đạt được ...: ">
                            </div>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-4 py-3 d-flex align-items-center gap-2 shadow">
                            <i class="fas fa-save"></i>
                            <span>LƯU THÔNG TIN</span>
                        </button>
                    </div>
                </form>

                <!-- Footer Info -->
                <div class="text-center mt-4">
                    <p class="text-muted small mb-0">
                        Thông tin của bạn được bảo mật và chỉ hiển thị theo cài đặt riêng tư
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

