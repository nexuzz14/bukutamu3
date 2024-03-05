<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://smkn2magelang.tech/css/pendaftaran.css">
<style>

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="grid justify-items-center mt-[10%] mb-10" id="pendaftaran">
    <i class="mdi mdi-text-box-edit-outline text-gray-500 text-5xl"></i>
    <div class="grid grid-cols-1 w-11/12 lg:w-9/12 h-full p-[20px] rounded-md shadow-md ">
        <header class="mt-5">
            <h1 class="text-lg lg:text-3xl text-gray-200 font-semibold text-center">PENDAFTARAN</h1>
        </header>
        <main class="grid grid-cols-1 lg:grid-cols-2 items-center">
            <section class="grid justify-items-center">
                <div id="video-container" class="video-container">
                    <video id="video" autoplay></video>
                    <canvas id="photo-canvas" class="hidden w-full h-[360px]"></canvas>
                </div>
                <div class="grid grid-cols-2 justify-items-center mt-3 mb-3 ml-2 lg:ml-0 lg:mt-0 lg:mb-0">
                    <button id="btn-capture" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Ambil Foto</button>
                    <button id="btn-retry" class="cusor-pointer md:hidden lg:text-yellow-400 text-white lg:hover:text-white border border-yellow-400 bg-yellow-400 lg:hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5  text-center me-2 mb-2 dark:border-yellow-400 lg:dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900 disabled" disabled><i class="mdi mdi-rotate-left text-2xl font-extrabold"></i></button>
                    <button id="btn-retryb" class="cusor-pointer btn_large text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 text-center me-2 mb-2 dark:border-yellow-400 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900 "><i class="mdi mdi-rotate-left text-2xl font-extrabold"></i></button>
                </div>
            </section>
            <section id="form-container" class="">
                <div class="mb-5">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-500">Nama</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>
                        </span>
                        <input type="text" id="nama" name="nama" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  " placeholder="Bonnie Green">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="institution" class="block mb-2 text-sm font-medium text-gray-500 ">Instansi / Sekolah</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-briefcase"></i>
                        </span>
                        <input type="text" id="institution" name="institution" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Tuliskan asal instansi / sekolah" required>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-500 ">No. Telp/WA</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-card-account-phone-outline"></i>
                        </span>
                        <input type="text" id="phone" name="phone" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Masukan No. Telp/WA Anda" required>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-500">Email</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-email-edit-outline"></i>
                        </span>
                        <input type="text" id="email" name="email" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Masukan Email Anda" required>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-500">Keterangan</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <i class="mdi mdi-information"></i>
                        </span>
                        <input type="text" id="keterangan" name="keterangan" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5" placeholder="Masukan Keterangan / Keperluan Anda" required>
                    </div>
                </div>
                <div class="btn-container flex">
                    <button id="btn-daftar" type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Daftar</button>
                    <div class="flex items-center loading_view hidden justify-center w-56 h-auto">
                         <div class="px-3 py-1 text-xs font-medium leading-none text-center text-blue-800 bg-blue-200 rounded-full animate-pulse dark:bg-blue-900 dark:text-blue-200">loading...</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<script>
    $(document).ready(function() {
        var windowWidth = $(window).width();

        $('.button_controller').click(function() {
            $('.loading_view').removeClass('hidden');
        })
	$('#btn-daftar').click(function(){	
	let timerInterval;
Swal.fire({
 title: "Tunggu sampai proses selesai!",
  html: "Proses akan selesai dalam beberapa detik.",
  timer: 12000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading();
    const timer = Swal.getPopup().querySelector("b");
    timerInterval = setInterval(() => {
    }, 100);
  },
  willClose: () => {
    clearInterval(timerInterval);
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log("I was closed");
  }
});
})

        $("#btn-capture").click(function() {
            $("#btn-retry").removeClass("hidden");
            if (windowWidth > 768) {
                $("#btn-retryb").removeClass("hidden");
            }
        })
    })
</script>
<script>
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

	if(window.innerWidth <= 768){
	btnRetryB.classList.add("hidden");
	}else{
	btnRetryB.classList.remove("hidden");
	}
document.addEventListener("DOMContentLoaded", function () {
    btnCapture.addEventListener("click", function () {
        capturePhoto();
	if(window.innerWidth <= 768){
		btnRetryB.classList.add("hidden");
		btnRetry.classList.remove("hidden");
	}else{
		btnRetryB.classList.remove("hidden");
        	btnRetry.classList.add("hidden");}
        canvasElement.classList.remove("hidden");
    });

    btnUpload.addEventListener("click", async function () {
         await uploadPhoto();
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

    if (stream) {
        const tracks = stream.getTracks();
        tracks.forEach((track) => track.stop());
    }

    btnCapture.disabled = true;
    btnUpload.disabled = false;
    btnRetry.disabled = false;
    video.classList.add("hidden");
}

async function uploadPhoto() {
    const dataURL = canvasElement.toDataURL("image/png");
    const nama = document.getElementById("nama").value;
    const email = document.getElementById("email").value;
    const institution = document.getElementById("institution").value;
    const phone = document.getElementById("phone").value;
    const keterangan = document.getElementById("keterangan").value;

    try {
        const response = await fetch("https://smkn2magelang.tech/daftar", {
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
                keterangan: keterangan,
            }),
        });
        const data = await response;
	console.log(data)
        if (data) {
            location.href = "/";
        }
        btnCapture.disabled = false;
        btnUpload.disabled = true;
        btnRetry.disabled = true;
        clearCanvas();
    } catch (error) {
        console.error("Error saving photo:", error);
    }   
}
function retryCapture() {
    // Aktifkan kembali kamera
    video.classList.remove("hidden");
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

    btnCapture.disabled = false;
    btnUpload.disabled = true;
    btnRetry.disabled = true;
    clearCanvas();
}

function clearCanvas() {
    const context = canvasElement.getContext("2d");
    context.clearRect(0, 0, canvasElement.width, canvasElement.height);
}

</script>
