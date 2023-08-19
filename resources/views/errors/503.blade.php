<!DOCTYPE html>
<html>

<head>
    @include('components.head')
</head>

<body class="five-zero-zero">
    <div class="five-zero-zero-container">
        <div class="error-code">
            <img src="{{ asset('assets/images/maintenance.png') }}" height="200">
        </div>
        <br>
        <br>
        <br>
        <div class="error-message">Internal Server Maintenance</div>
    </div>

    @include('components.foot')
</body>

</html>
