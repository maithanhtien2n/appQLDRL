<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/colLeft.css">
    <link rel="stylesheet" href="./css/colRight.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/nhapDiem.css">
    <title>Home</title>
</head>

<body>

    <div class="app">

        <div class="col__left">

            <header class="col__left__header">

                <img src="https://pyu.edu.vn/Resources/Images/Subdomain/HomePage/logo/logo%20(1).png" alt="">

            </header>

            <div class="col__left__header__menu">

                <ul>
                    <li class="trangchu active" onclick="btnTrangChu()"><i class="fas fa-home-lg-alt"></i> Trang chủ
                    </li>
                    <li class="nhapdiem" onclick="btnNhapDiem()"><i class="fas fa-pen"></i> Nhập điểm</li>
                    <li class="xeploai" onclick="btnXepLoai()"><i class="fas fa-medal"></i> Xếp loại</li>
                    <li class="thongke" onclick="btnThongKe()"><i class="fas fa-analytics"></i> Thống kê</li>
                    <li class="qltaikhoan" onclick="btnQLTaiKhoan()"><i class="fas fa-user"></i> Quản lý tài khoản</li>
                </ul>

            </div>

        </div>

        <div class="col__right">

            <header class="col__right__header">

                <div onclick="btnUser()" class="col__right__home__header__user">
                    <img src="https://anhdephd.vn/wp-content/uploads/2022/04/avatar-ngau-chat.jpg" alt="">
                    <p>admin123@gmail.com <i class="far fa-angle-down"></i></p>
                    <div class="col__right__home__header__user__logout">
                        <h3>Biện Ngọc Nhi</h3>
                        <button onclick="btnQLTaiKhoan()" class="btnQLTaiKhoan">Quản lý tài khoản</button><br><br>
                        <a class="btnLogOut" href="index.html">Đăng xuất</a>
                        <div class="arrow-up"></div>
                    </div>
                </div>

            </header>

            <div class="col__right__container pageHome active">

                <p>Trang chủ</p>

                <div class="col__right__container__home__items">

                    <div onclick="btnNhapDiem()" class="col__right__container__home__item1">
                        <div class="col__right__container__home__item1__content">
                            <i class="fas fa-pen"></i>
                            <div class="col__right__container__home__item1__content__mini">
                                <h3>Nhập điểm</h3>
                            </div>
                        </div>
                    </div>

                    <div onclick="btnXepLoai()" class="col__right__container__home__item2">
                        <div class="col__right__container__home__item2__content">
                            <i class="fas fa-medal"></i>
                            <div class="col__right__container__home__item2__content__mini">
                                <h3>Xếp loại</h3>
                            </div>
                        </div>
                    </div>

                    <div onclick="btnThongKe()" class="col__right__container__home__item3">
                        <div class="col__right__container__home__item3__content">
                            <i class="fas fa-analytics"></i>
                            <div class="col__right__container__home__item3__content__mini">
                                <h3>Thống kê</h3>
                            </div>
                        </div>
                    </div>

                    <div onclick="btnQLTaiKhoan()" class="col__right__container__home__item4">
                        <div class="col__right__container__home__item4__content">
                            <i class="fas fa-user"></i>
                            <div class="col__right__container__home__item4__content__mini">
                                <h3>QL tài khoản</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col__right__container pageNhapDiem">

                <p>Nhập điểm</p>

                <div class="col__right__container__table">

                    <h3>BẢNG ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

                    <div class="col__right__container__table__from">

                        <div class="col__right__container__table__from__item">
                            <label>Họ và tên:</label><br>
                            <input type="text" placeholder="Ví dụ: Biện Ngọc Nhi">
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Lớp:</label><br>
                            <select>
                                <option>DC19CNTT</option>
                                <option>DC20CNTT</option>
                                <option>DC21CNTT</option>
                                <option>DC22CNTT</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Học kỳ:</label><br>
                            <select>
                                <option>Học kỳ 1</option>
                                <option>Học kỳ 2</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Năm học:</label><br>
                            <select>
                                <option>2021-2022</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Khóa học:</label><br>
                            <input type="text" placeholder="Ví dụ: 2019-2023">
                        </div>

                    </div>

                    <table style="width:100%">

                        <tr class="main">
                            <th style="width:5%; height: 50px;">STT</th>
                            <th>Nội dung và tiêu chí đánh giá</th>
                            <th>Mức điểm tối đa</th>
                            <th>Đánh giá của lớp</th>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">1</td>
                            <td style="max-width: 500px; height:auto; word-wrap:break-word; padding: 10px;">
                                Ý thức học tập (từ 0 đến 20 điểm)
                            </td>
                            <td style="width:10%; text-align: center;"></td>
                            <td style="width:10%; text-align: center;">
                                <input type="text" readonly value="20">
                            </td>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                                Tinh thần, thái độ trong học tập (chuẩn bị bài, xây dựng bài, chuyên cần, chấp hành các
                                quy
                                định trong giờ học…)
                            </td>
                            <td style="width:10%; text-align: center;">15</td>
                            <td style="width:10%; text-align: center;">
                                <input name="gender" type="radio" value="15" />
                            </td>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                                Thực hiện tốt mục 1 và tích cực tham gia các hoạt động học thuật, ngoại khóa, nghiên cứu
                                khoa học
                            </td>
                            <td style="width:10%; text-align: center;">17</td>
                            <td style="width:10%; text-align: center;">
                                <input name="gender" type="radio" value="17" />
                            </td>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="max-width: 500px; height: auto; word-wrap:break-word; padding: 10px;">
                                Thực hiện tốt mục 2 và có thực hiện các đề tài nghiên cứu khoa học, hoặc có các bài báo
                                về
                                chuyên ngành đang học đăng trên tạp chí/báo trong và ngoài trường, hoặc có tham gia dự
                                thi
                                HSSV giỏi từ cấp trường trở lên.
                            </td>
                            <td style="width:10%; text-align: center;">20</td>
                            <td style="width:10%; text-align: center;">
                                <input name="gender" type="radio" value="20" />
                            </td>
                        </tr>

                    </table>

                </div>

                <div class="col__right__container__nutBam">
                    <button class="col__right__container__nutBam__nhapDiem">Nhập điểm</button>
                </div>

                <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i
                        class="fas fa-chevron-left"></i> Về trang chủ</a>

            </div>

            <div class="col__right__container pageXepLoai">

                <p>Xếp loại</p>

                <div class="col__right__container__table">

                    <h3>BẢNG TỔNG HỢP ĐÁNH GIÁ KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

                    <div class="col__right__container__table__from">

                        <div class="col__right__container__table__from__item">
                            <label>Lớp:</label><br>
                            <select>
                                <option>DC19CNTT</option>
                                <option>DC20CNTT</option>
                                <option>DC21CNTT</option>
                                <option>DC22CNTT</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Học kỳ:</label><br>
                            <select>
                                <option>Học kỳ 1</option>
                                <option>Học kỳ 2</option>
                                <option>Cả năm</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Năm học:</label><br>
                            <select>
                                <option>2021-2022</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Khóa học:</label><br>
                            <input type="text" placeholder="Ví dụ: 2019-2023" readonly style="cursor: default;"
                                value="2019-2023">
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label for=""> </label><br>
                            <button class="col__right__container__nutBam__nhapDiem">Xem</button>
                        </div>

                    </div>

                    <!-- Bảng học kỳ -->
                    <table style="width:100%">

                        <tr class="main">
                            <th style="width:5%; height: 50px;">STT</th>
                            <th>Họ và tên</th>
                            <th>Điểm</th>
                            <th>Xếp loại</th>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                Nguyễn Văn A
                            </td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 16px;">Xuất Sắc</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                Nguyễn Văn A
                            </td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 16px;">Xuất Sắc</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                Nguyễn Văn A
                            </td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 16px;">Xuất Sắc</h3>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:5%; text-align: center;">2</td>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                Nguyễn Văn A
                            </td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 16px;">Xuất Sắc</h3>
                            </td>
                        </tr>

                    </table>

                    <!-- Bảng cả năm -->
                    <table style="width:100%; display: none;">

                        <tr class="main">
                            <th rowspan="2" style="height: 50px;">STT</th>
                            <th rowspan="2">Họ và tên</th>
                            <th style="padding: 10px 0;" colspan="2">Học kỳ 1</th>
                            <th style="padding: 10px 0;" colspan="2">Học kỳ 2</th>
                            <th style="padding: 10px 0;" colspan="2">Cả năm</th>
                        </tr>
                        <tr class="main">
                            <th style="padding: 10px 0;">Điểm</th>
                            <th style="padding: 10px 0;">Xếp loại</th>
                            <th style="padding: 10px 0;">Điểm</th>
                            <th style="padding: 10px 0;">Xếp loại</th>
                            <th style="padding: 10px 0;">Điểm</th>
                            <th style="padding: 10px 0;">Xếp loại</th>
                        </tr>

                        <tr>
                            <td style="width:5%; text-align: center;">1</td>

                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                Nguyễn Văn A
                            </td>

                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 17px;">Xuất Sắc</h3>
                            </td>

                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 17px;">Xuất Sắc</h3>
                            </td>

                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">
                                <h3 style="font-size: 17px;">Xuất Sắc</h3>
                            </td>
                        </tr>

                    </table>

                </div>

                <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i
                        class="fas fa-chevron-left"></i> Về trang chủ</a>

            </div>

            <div class="col__right__container pageThongKe">

                <p>Xếp loại</p>

                <div class="col__right__container__table">

                    <h3>BẢNG THỐNG KÊ TỔNG HỢP KẾT QUẢ RÈN LUYỆN SINH VIÊN</h3>

                    <div class="col__right__container__table__from">

                        <div class="col__right__container__table__from__item">
                            <label>Lớp:</label><br>
                            <select>
                                <option>DC19CNTT</option>
                                <option>DC20CNTT</option>
                                <option>DC21CNTT</option>
                                <option>DC22CNTT</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Học kỳ:</label><br>
                            <select>
                                <option>Học kỳ 1</option>
                                <option>Học kỳ 2</option>
                                <option>Cả năm</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Năm học:</label><br>
                            <select>
                                <option>2021-2022</option>
                                <option>2022-2023</option>
                                <option>2023-2024</option>
                            </select>
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label>Khóa học:</label><br>
                            <input type="text" placeholder="Ví dụ: 2019-2023" readonly style="cursor: default;"
                                value="2019-2023">
                        </div>

                        <div class="col__right__container__table__from__item">
                            <label for=""> </label><br>
                            <button class="col__right__container__nutBam__nhapDiem">Xem</button>
                        </div>

                    </div>

                    <table style="width:100%">

                        <tr class="main">
                            <th style="width:5%; height: 50px;">Sĩ só</th>
                            <th style="width: 14px">Xuất sắc (%)</th>
                            <th style="width: 14px">Tốt (%)</th>
                            <th style="width: 14px">Khá (%)</th>
                            <th style="width: 14px">Trung bình khá (%)</th>
                            <th style="width: 14px">Trung bình (%)</th>
                            <th style="width: 14px">Yếu (%)</th>
                        </tr>

                        <tr>
                            <td rowspan="2" style="width:5%; text-align: center;">22</td>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                5
                            </td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">15</td>
                            <td style="text-align: center;">15</td>
                        </tr>

                        <tr>
                            <td style="height: auto; word-wrap:break-word; padding: 10px; text-align: center;">
                                5%
                            </td>
                            <td style="text-align: center;">35%</td>
                            <td style="text-align: center;">13%</td>
                            <td style="text-align: center;">22%</td>
                            <td style="text-align: center;">22%</td>
                            <td style="text-align: center;">11%</td>
                        </tr>

                    </table>

                </div>

                <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i
                        class="fas fa-chevron-left"></i> Về trang chủ</a>

            </div>

            <div class="col__right__container pageQLTaiKhoan">

                <p>Quản lý tài khoản</p>

                <div class="col__right__container__table">

                    <h3>DANH SÁCH ADMIN QUẢN LÝ ĐIỂM RÈN LUYỆN</h3>

                    <table style="width:100%">

                        <tr class="main">
                            <th style="width:5%; height: 50px;">STT</th>
                            <th style="width: 14px">Họ và tên</th>
                            <th style="width: 14px">Tài khoản</th>
                            <th style="width: 14px">Mật khẩu</th>
                        </tr>

                        <tr>
                            <td style="padding: 10px; text-align: center;">1</td>
                            <td style="padding: 10px; text-align: center;">Nguyễn Ăn A</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">nguyenvana12@gmail.com</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">123456789</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; text-align: center;">1</td>
                            <td style="padding: 10px; text-align: center;">Nguyễn Ăn A</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">nguyenvana12@gmail.com</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">123456789</td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; text-align: center;">1</td>
                            <td style="padding: 10px; text-align: center;">Nguyễn Ăn A</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">nguyenvana12@gmail.com</td>
                            <td style="padding: 10px;width: 35%; text-align: center;">123456789</td>
                        </tr>

                    </table>

                </div>

                <a onclick="btnTrangChu()" class="col__right__container__nutBam__troLai"><i
                        class="fas fa-chevron-left"></i> Về trang chủ</a>

            </div>

        </div>


    </div>

    <script src="./js/main.js"></script>
</body>