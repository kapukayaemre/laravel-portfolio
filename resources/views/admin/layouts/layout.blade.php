<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
          rel="stylesheet">

    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/iziToast.min.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">


    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/neptune.png') }}"/>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/neptune.png') }}"/>
    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="app align-content-stretch d-flex flex-wrap">
    @include('admin.layouts.partials.sidebar')
    <div class="app-container">
        @include('admin.layouts.partials.header')
        <div class="app-content">
            <div class="content-wrapper">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            @php
                 flash()
                ->option('position', 'top-center')
                ->addError($error)
            @endphp
        @endforeach
    @endif
</div>

<!-- Javascripts -->
<script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/iziToast.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>
{{--<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/main.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
{{--<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>--}}


<script>
    /*** Silmek İstediğinize Emin misiniz? */
    $(document).ready(function () {
        /*** Ajax Form İşlemlerinde Token Oluşturmak İçin */
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });


        $("body").on('click', '.delete-item', function (event) {
            event.preventDefault();
            let deleteURL = $(this).attr('href');

            iziToast.question({
                messageSize : '20px',
                titleSize: '20px',
                position: 'topCenter',
                timeout: '',
                title: 'Uyarı',
                message: 'Silmek istediğinize emin misiniz?',
                buttons: [
                    [
                        '<button type="submit">Evet</button>',
                        function (instance, toast) {
                            $.ajax({
                                type: 'DELETE',
                                url: deleteURL,
                                success : function (response) {
                                    if(response.status === 'success'){
                                        iziToast.success({
                                            messageSize : '20px',
                                            titleSize: '20px',
                                            title: 'İşlem Başarılı',
                                            message: 'Silme İşlemi Başarılı',
                                            position: 'topCenter'
                                        });

                                        $("#triggerModal").click();
                                    }
                                },
                                error: function (xhr, status, error) {
                                    console.log(error);
                                }

                            })
                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        },
                        true
                    ],
                    [
                        '<button>Hayır</button>',
                        function (instance, toast) {

                            instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
                        }
                    ]
                ]
            });
        })
    })

</script>
@yield('js')
@stack('scripts')
</body>
</html>
