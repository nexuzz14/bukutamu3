const video = document.getElementById("video");
const canvasElement = document.getElementById("photo-canvas");
const btnCapture = document.getElementById("btn-capture");
const btnUpload = document.getElementById("btn-daftar");
const btnRetry = document.getElementById("btn-retry");
const btnRetryB = document.getElementById("btn-retryb");

let stream;

navigator.mediaDevices
    .getUserMedia({ video: true })
    .then(function (mediaStream) {
        stream = mediaStream;
        video.srcObject = mediaStream;
        video.play();
        video.addEventListener("loadedmetadata", function () {
            btnCapture.disabled = false;
        });
    })
    .catch(function (error) {
        console.error("Error accessing camera: ", error);
    });

document.addEventListener("DOMContentLoaded", function () {
    btnCapture.addEventListener("click", function () {
        capturePhoto();
        btnRetry.classList.toggle("hidden");
        btnRetryB.classList.toggle("hidden");
        canvasElement.classList.remove("hidden");
    });

    btnUpload.addEventListener("click", function () {
        uploadPhoto();
    });

    btnRetry.addEventListener("click", function () {
        retryCapture();
        btnRetry.classList.toggle("hidden");
        btnRetryB.classList.toggle("hidden");
        canvasElement.classList.add("hidden");
    });

    btnRetryB.addEventListener("click", function () {
        retryCapture();
        btnRetry.classList.toggle("hidden");
        btnRetryB.classList.toggle("hidden");
        canvasElement.classList.add("hidden");
    });
});

function capturePhoto() {
    console.log("Button Clicked");
    const context = canvasElement.getContext("2d");
    context.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

    // Nonaktifkan video setelah mengambil foto
    video.pause();

    // Matikan audio stream (jika ada)
    const tracks = stream.getTracks();
    tracks.forEach((track) => track.stop());

    // Nonaktifkan tombol ambil foto
    btnCapture.disabled = true;

    // Aktifkan tombol upload dan retry
    btnUpload.disabled = false;
    btnRetry.disabled = false;

    // Sembunyikan video
    video.classList.add("hidden");
}

function uploadPhoto() {
    const dataURL = canvasElement.toDataURL("image/png");
    const nama = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const institution = document.getElementById("institution").value;
    const phone = document.getElementById("phone").value;

    // Kirim data gambar ke server menggunakan Ajax
    fetch("/daftar", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
        body: JSON.stringify({
            image: dataURL,
            nama: nama,
            institution: institution,
            phone: phone,
            email: email,
        }),
    })
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            if (data) {
                location.href = "/";
            }
            btnCapture.disabled = false;
            btnUpload.disabled = true;
            btnRetry.disabled = true;
            clearCanvas();
        })
        .catch((error) => console.error("Error saving photo:", error));
}

function retryCapture() {
    // Aktifkan kembali video
    video.classList.remove("hidden");
    video.play();

    // Peroleh kembali akses ke kamera
    navigator.mediaDevices
        .getUserMedia({ video: true })
        .then(function (mediaStream) {
            stream = mediaStream;
            video.srcObject = mediaStream;
            video.play();
            video.addEventListener("loadedmetadata", function () {
                // Video telah dimuat sepenuhnya, tombol Ambil Foto dapat diaktifkan
                btnCapture.disabled = false;
            });
        })
        .catch(function (error) {
            console.error("Error accessing camera: ", error);
        });

    // Nonaktifkan tombol upload dan retry
    btnUpload.disabled = true;
    btnRetry.disabled = true;

    // Reset elemen canvas
    clearCanvas();
}

function clearCanvas() {
    const context = canvasElement.getContext("2d");
    context.clearRect(0, 0, canvasElement.width, canvasElement.height);
}
