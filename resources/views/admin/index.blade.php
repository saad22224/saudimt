<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم الإدارية</title>
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <!-- الشريط الجانبي -->
    @include('admin.sidebar')

    <!-- المحتوى الرئيسي -->
    <main class="main-content">
        <!-- الهيدر العلوي -->
        @include('admin.header')

        <!-- صفحة الإحصائيات -->
        <div style="display: flex; justify-content:center; align-items: center;" class="page-content active" id="dashboard">
           
           <h1>لوحة التحكم الإدارية</h1>
         
        </div>

       
    </main>

  

    <script src="{{ asset('admin/script.js') }}"></script>
</body>

</html>
