<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="flex justify-center items-center h-screen">
    <div class="w-[55%] h-[40%] text-white lg:w-[]" id="reader"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
        console.log(`Code matched = ${decodedText}`, decodedResult);
        // window.open(decodedText, '_self');
        var id = "{{Auth::user()->id}}";
        console.log(decodedText);
        fetch(`/scan/sendData`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({ 
                'id': id,
            })
        }).then(response => {
            console.log(response);
            if (response) {
                location.href = `/success`;
            }
        });
    }

    function onScanFailure(error) {
        // Handle scan failure if needed
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: {
                width: 300,
                height: 300,
          }
          
          
        },
        false);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>
