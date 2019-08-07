<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - 管理后台</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body class="nav-md">

@yield('body')

<script src="{{ mix('js/admin.js') }}"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.bootstrap-switch').bootstrapSwitch({
            onText: "{{ __('Yes') }}",
            offText: "{{ __('No') }}",
            onColor: 'success'
        });
    })
</script>
@yield('js')
</body>
</html>
