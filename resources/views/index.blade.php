@extends('layout.main')
@section('container')

<div id="app"></div>
<script>
    window.userData = @json(['status' => Auth::user()->status]);
</script>



@endsection

