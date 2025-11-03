let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Mưa đỏ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Việt Nam",
        poster: "bai7/images/muado.jpg",
        theLoai: "Phim chiếu rạp"
    },
    {
        id: 2,
        tenPhim: "Conan",
        namPhatHanh: 2023,
        tuoi: 10,
        thoiLuong: 1.5,
        quocGia: "Nhật Bản",
        poster: "bai7/images/conan.jpg",
        theLoai: "Phim hoạt hình"
    },
    {
        id: 3,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2015,
        tuoi: 13,
        thoiLuong: 2.5,
        quocGia: "Mỹ",
        poster: "bai7/images/nguoidepvaquaivat.jpg",
        theLoai: "Phim chiếu rạp"
    }
];

let phimHienTai = danhSachPhim[0];

let banner = document.getElementById('banner')[0];

function chonPhim(idPhim){
    for(let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id === idPhim){
            banner.style.backgroundImage = danhSachPhim[i].poster;
        }
    }
}