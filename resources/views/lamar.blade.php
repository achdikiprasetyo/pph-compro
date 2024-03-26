@extends('layouts.navbar')

@section('content')
<style>
    .google-form-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 800px;
        margin-bottom: 20px; 
    }
    .google-form-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

</style>

<div class="google-form-container">
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd2pudsgSgl1cQf_fkxTzvaPaccmWIhx4rI3FGjKxWv2_LPqQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
</div>



@endsection
