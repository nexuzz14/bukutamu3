<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('foto/smk.png') }}">
    <title>Buku Tamu SMK Negeri 2 Magelang</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="datatables.min.css" rel="stylesheet">
    <script src="datatables.min.js"></script>
    <script src="js/app.js" defer></script>
</head>
@if (Auth::check() && Auth::user()->role == 'admin')
<body class="h-screen">
@else
<body class="h-screen bg-gray-900">
@endif
    @include('components.navbar')
    @yield('container')
    @if (!Auth::check() || !Auth::user()->role == 'admin')
    @include('content.Client.tutorial')
    @include('content.Client.supportby')
    @include('content.Client.pendaftaran')
    @include('components.footer')
    @elseif(Auth::check() && Auth::user()->role == 'user')
    @include('content.scan')
    @endif


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
        $(document).ready(function() {
            $('#dataTable2').DataTable();

        });
    </script>
</body>

</html>
