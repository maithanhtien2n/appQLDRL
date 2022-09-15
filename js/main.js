function btnTrangChu() {
    document.querySelector('.pageHome').classList.add('active');
    document.querySelector('.pageNhapDiem').classList.remove('active');
    document.querySelector('.pageXepLoai').classList.remove('active');
    document.querySelector('.pageThongKe').classList.remove('active');
    document.querySelector('.pageQLTaiKhoan').classList.remove('active');

    document.querySelector('.col__left__header__menu ul .nhapdiem').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .trangchu').classList.add('active');
    document.querySelector('.col__left__header__menu ul .xeploai').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .thongke').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .qltaikhoan').classList.remove('active');
}

function btnNhapDiem() {
    document.querySelector('.pageHome').classList.remove('active');
    document.querySelector('.pageNhapDiem').classList.add('active');
    document.querySelector('.pageXepLoai').classList.remove('active');
    document.querySelector('.pageThongKe').classList.remove('active');
    document.querySelector('.pageQLTaiKhoan').classList.remove('active');

    document.querySelector('.col__left__header__menu ul .nhapdiem').classList.add('active');
    document.querySelector('.col__left__header__menu ul .trangchu').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .xeploai').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .thongke').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .qltaikhoan').classList.remove('active');
}

function btnXepLoai() {
    document.querySelector('.pageHome').classList.remove('active');
    document.querySelector('.pageNhapDiem').classList.remove('active');
    document.querySelector('.pageXepLoai').classList.add('active');
    document.querySelector('.pageThongKe').classList.remove('active');
    document.querySelector('.pageQLTaiKhoan').classList.remove('active');

    document.querySelector('.col__left__header__menu ul .nhapdiem').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .trangchu').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .xeploai').classList.add('active');
    document.querySelector('.col__left__header__menu ul .thongke').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .qltaikhoan').classList.remove('active');
}

function btnThongKe() {
    document.querySelector('.pageHome').classList.remove('active');
    document.querySelector('.pageNhapDiem').classList.remove('active');
    document.querySelector('.pageXepLoai').classList.remove('active');
    document.querySelector('.pageThongKe').classList.add('active');
    document.querySelector('.pageQLTaiKhoan').classList.remove('active');

    document.querySelector('.col__left__header__menu ul .nhapdiem').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .trangchu').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .xeploai').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .thongke').classList.add('active');
    document.querySelector('.col__left__header__menu ul .qltaikhoan').classList.remove('active');
}

function btnQLTaiKhoan() {
    document.querySelector('.pageHome').classList.remove('active');
    document.querySelector('.pageNhapDiem').classList.remove('active');
    document.querySelector('.pageXepLoai').classList.remove('active');
    document.querySelector('.pageThongKe').classList.remove('active');
    document.querySelector('.pageQLTaiKhoan').classList.add('active');

    document.querySelector('.col__left__header__menu ul .nhapdiem').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .trangchu').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .xeploai').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .thongke').classList.remove('active');
    document.querySelector('.col__left__header__menu ul .qltaikhoan').classList.add('active');
}

// Khi click vào user
function btnUser() {
    document.querySelector('.col__right__home__header__user__logout').classList.toggle('active');
}