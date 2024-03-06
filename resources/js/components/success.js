import React, {} from 'react';
import ReactDOM from 'react-dom';
import domtoimage from 'dom-to-image';


export default function Success() {
    document.addEventListener("DOMContentLoaded", function() {
        domtoimage.toJpeg(document.getElementById('verf'), { quality: 0.95 })
    .then(function (dataUrl) {
        var link = document.createElement('a');
        link.download = 'my-image-name.jpeg';
        link.href = dataUrl;
        link.click();
    });
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger"
            },
            buttonsStyling: false
        });
        swalWithBootstrapButtons.fire({
            title: "Success!",
            text: "Anda berhasil melakukan verifikasi.",
            icon: "success",
            confirmButtonText: "Ok!",
    reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "/logout";
            }
        });
    });
    return (
        <div className=''>
            <div className="w-[250px] h-[400px] bg-white flex flex-col items-center z-1" style={{backgroundImage: "url('foto/bg.jpg')"}}  id="verf">
            <div className="mt-10 mb-3">
                <img className="w-10 h-10 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="foto/p.png" alt="Bordered avatar" />
            </div>
            <div className="mb-5">
                <h1 className="text-gray-800 font-bold text-xl">Verifikasi Berhasil</h1>
            </div>
            {/* <div className="text-gray-500 text-xs mb-10 w-10/12 h-[120px]">
                <div className="truncate overflow-hidden">
                    <p className="truncate">Anda telah melakukan verifikasi</p>
                    <p className="truncate">Nama       : Chakim Gilang Satrio</p>
                    <p className="truncate">Instansi   : SMKN 2 Magelang</p>
                </div>
                <p className="line-clamp-3">Keterangan : Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, non. Hic quasi incidunt id voluptatem cumque necessitatibus. Vel animi impedit nesciunt et dolor, esse, suscipit illo omnis, temporibus dicta dolore!</p>
            </div> */}
            <div className="text-gray-500 text-xs mb-10 w-10/12 h-[120px]">
                <div className="truncate overflow-hidden">
                    <p className="truncate">Anda telah melakukan verifikasi</p>
                    <p className="truncate">Nama       : {window.userData.name}</p>
                    <p className="truncate">Instansi   : {window.userData.institution}</p>
                </div>
                <p className="line-clamp-3">Keterangan : {window.userData.keterangan}</p>
            </div> 
            <div>
                <i className="mdi mdi-check-circle-outline text-green-500 text-7xl"></i>
            </div> 
        </div> 
        </div>
    );
}

if (document.getElementById('success')) {
    ReactDOM.render(< Success/>, document.getElementById('success'));
}
