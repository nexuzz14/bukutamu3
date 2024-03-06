<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="foto/smk.png">
    <title>Success!! Buku Tamu SMK Negeri 2 Magelang</title>
    <link href="css/app.css" rel="stylesheet">
    <script src="js/app.js" defer></script>
</head>
<body>
    <div id="success"></div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
	window.userData = @json(['name' => Auth::user()->nama, 'institution' => Auth::user()->institution, 'keterangan' => Auth::user()->keterangan]);
    </script>
</body>
</html>
