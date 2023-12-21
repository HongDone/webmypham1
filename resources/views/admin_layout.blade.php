<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="{{asset("public/admin/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("public/admin/css/dashboard.css")}}">
    <link rel="stylesheet" href="{{asset("public/admin/css/product_type.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
<nav class="sidebar">
 @include("admin.sidebar")
</nav>
<nav class="navbar">
    @include("admin.header")
</nav>
<main class="main">
    @yield('main_content')
</main>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src = "//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	let table = new DataTable('#myTable');
</script>
<script src = "{{asset("public/admin/js/script.js")}}"></script>
