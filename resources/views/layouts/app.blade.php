<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" />

 <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>

 <title>Админ панель</title>
 </head>
 <body class="c-app">
   @include('partials.sidebar')
   <div class="c-wrapper c-fixed-components">
   <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
      <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
         <svg class="c-icon c-icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
         </svg>
      </button>
      <a class="c-header-brand d-lg-none" href="#">
         <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
         </svg>
      </a>
      @if (!Auth::guest())
      <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
         <svg class="c-icon c-icon-lg">
            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
         </svg>
      </button>
      <div class="btn-group">
      <ul class="c-header-nav d-md-down-none">
         <li class="c-header-nav-item px-3">
         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Дата
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">11.09.21</a>
            <a class="dropdown-item" href="#">12.09.21</a>
            <a class="dropdown-item" href="#">13.09.21</a>
            <a class="dropdown-item" href="#">14.09.21</a>
            <a class="dropdown-item" href="#">15.09.21</a>
            <a class="dropdown-item" href="#">16.09.21</a>
            <a class="dropdown-item" href="#">17.09.21</a>
         </div>
         </li>
         <li class="c-header-nav-item px-3">
         <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            Водитель
         </button>
         <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Михаил Петров</a>
            <a class="dropdown-item" href="#">Максим Иванов</a>
            <a class="dropdown-item" href="#">Геннадий Задорин</a>
            <a class="dropdown-item" href="#">Артем Михайлов</a>
         </div>
         </li>
      </ul>
   </div>
   <ul class="c-header-nav ml-auto mr-4">
      <li class="c-header-nav-item d-md-down-none mx-2">
      <button type="button" class="btn btn-primary" aria-expanded="false">
            Создать маршрут
      </button>
      </li>
   </ul>
   @endif
   </header>
   <div class="c-body">
      <main class="c-main">
         @yield('content')
      </main>
   </div>
   <!-- Optional JavaScript -->
   <!-- Popper.js first, then CoreUI JS -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/@popperjs/core@2"></script>
   <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>
</body>
</html>