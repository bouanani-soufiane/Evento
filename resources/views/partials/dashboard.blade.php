<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <title>Soft UI Dashboard Tailwind</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../css/nucleo-icons.css" rel="stylesheet"/>
    <link href="../css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet"/>

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
@yield('content')



<script>
    setTimeout(function() {
        document.getElementById('successMessage').style.display = 'none';
    }, 5000);

    setTimeout(function() {
        document.getElementById('errorMessage').style.display = 'none';
    }, 5000);

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<!-- plugin for charts  -->
<script src="../js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</body>

</html>
