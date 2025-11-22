// ===== DANH SÁCH PHIM =====
let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Mưa đỏ",
        namPhatHanh: 2025,
        quocGia: "Việt Nam",
        theLoai: "Phim chiếu rạp",
        banner: "bongdungtrungso.jpg",
        trailer: "https://www.youtube.com/embed/BD6PoZJdt_M"
    },
    {
        id: 2,
        tenPhim: "Conan",
        namPhatHanh: 2023,
        quocGia: "Nhật Bản",
        theLoai: "Phim hoạt hình",
        banner: "deptraithaysaisai.jpg",
        trailer: "https://www.youtube.com/embed/dz5mN-iIC4g"
    },
    {
        id: 3,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2015,
        quocGia: "Mỹ",
        theLoai: "Phim chiếu rạp",
        banner: "cam.jpg",
        trailer: "https://www.youtube.com/embed/o6k1ChY8kDg"
    }
];

// ===== LẤY PHẦN TỬ HTML =====
let banner = document.getElementById("banner");
let trailerBox = document.getElementById("trailerBox");
let trailerVideo = document.getElementById("trailerVideo");
let phimDangChon = null;

// ===== HÀM CHỌN PHIM =====
function chonPhim(idPhim) {
    let phim = danhSachPhim.find(p => p.id === idPhim);
    if (phim) {
        phimDangChon = phim;
        banner.style.backgroundImage = "url('" + phim.banner + "')";
        banner.innerHTML = `
            <div class="banner-content">
                <h2>${phim.tenPhim}</h2>
                <p>${phim.theLoai} | ${phim.namPhatHanh} | ${phim.quocGia}</p>
                <button id="playButton" onclick="xemTrailer()">▶ Play Trailer</button>
            </div>
        `;
    }
}

// ===== HÀM XEM TRAILER =====
function xemTrailer() {
    if (phimDangChon) {
        trailerBox.style.display = "flex";
        trailerVideo.src = phimDangChon.trailer + "?autoplay=1";
    }
}

// ===== HÀM ĐÓNG TRAILER =====
function dongTrailer() {
    trailerBox.style.display = "none";
    trailerVideo.src = "";
}

