<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Ben Wilson's Personal Site">
<meta name="keywords" content="">
<meta name="author" content="Ben Wilson">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>BAW - Benjamin Andrew Wilson</title>

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="/img/icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/img/icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/img/icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/img/icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/img/icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/img/icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/img/icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/img/icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/img/icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/img/icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/img/icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Styles -->
<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600|Ubuntu:500' rel='stylesheet' type='text/css'>
<link href="/css/toolkit.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">
<link href="/css/application.css" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

@yield('header.scripts')
