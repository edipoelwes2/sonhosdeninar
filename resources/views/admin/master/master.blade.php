<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

   <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/libs.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/boot.css') }}" />
   <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

   @stack('styles')

   <link rel="icon" type="image/png" href="#" />

   <meta name="csrf-token" content="{{ csrf_token() }}">


   <title>Site Control</title>
</head>

<body>

   <div class="ajax_load">
      <div class="ajax_load_box">
         <div class="ajax_load_box_circle"></div>
         <p class="ajax_load_box_title">Aguarde, carregando...</p>
      </div>
   </div>

   <div class="ajax_response"></div>

   <div class="dash">
      <aside class="dash_sidebar">
         <article class="dash_sidebar_user">
            <img class="dash_sidebar_user_thumb" src="{{ url(asset('assets/images/avatar.jpg')) }}" alt="" title="" />

            <h1 class="dash_sidebar_user_name">
               <a href="">Gustavo Web</a>
            </h1>
         </article>

         <ul class="dash_sidebar_nav">
            <li class="dash_sidebar_nav_item {{ isActive('admin.home') }}">
               <a class="icon-tachometer" href="{{ route('admin.home') }}">Dashboard</a>
            </li>
            <li class="dash_sidebar_nav_item {{ isActive('admin.users') }} {{ isActive('admin.companies') }}"><a
                  class="icon-users" href="{{ route('admin.users.index') }}">Usuarios</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class="{{ isActive('admin.users.index') }}"><a href="{{ route('admin.users.index') }}">
                        Ver Todos</a></li>
                  <li class="{{ isActive('admin.companies.index') }}"><a
                        href="{{ route('admin.companies.index') }}">Empresas</a></li>
                  <li class="{{ isActive('admin.users.team') }}"><a href="{{ route('admin.users.team') }}">Time</a></li>
                  <li class="{{ isActive('admin.users.create') }}"><a href="{{ route('admin.users.create') }}">Criar
                        Novo</a></li>
               </ul>
            </li>

            {{-- <li class="dash_sidebar_nav_item {{ isActive('admin.categories') }}"><a class="icon-key"
                  href="{{ route('admin.categories.index') }}">Categorias</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class="{{ isActive('admin.categories.index') }}"><a
                        href="{{ route('admin.categories.index') }}">Ver Todos</a></li>
                  <li class="{{ isActive('admin.categories.create') }}"><a
                        href="{{ route('admin.categories.create') }}">Criar Novo</a></li>
               </ul>
            </li> --}}

            <li class="dash_sidebar_nav_item {{ isActive('admin.diapers') }} {{ isActive('admin.wipes') }}"><a class="icon-home"
                  href="{{ route('admin.diapers.index') }}">Produtos</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class="{{ isActive('admin.diapers.index') }}"><a href="{{ route('admin.diapers.index') }}">Fraldas</a></li>
                  <li class="{{ isActive('admin.wipes.index') }}"><a href="{{ route('admin.wipes.index') }}">Lenços</a></li>
                  {{-- <li class="{{ isActive('admin.products.create') }}"><a href="{{ route('admin.products.create') }}">Criar Novo</a></li> --}}
               </ul>
            </li>

            <li class="dash_sidebar_nav_item {{ isActive('admin.stocks') }}"><a class="icon-home"
               href="{{ route('admin.stocks.index') }}">Entrada</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class="{{ isActive('admin.stocks.index') }}"><a href="{{ route('admin.stocks.index') }}">Ver
                        Todos</a></li>
                  <li class="{{ isActive('admin.stocks.create') }}"><a
                        href="{{ route('admin.stocks.create') }}">Criar Novo</a></li>
               </ul>
            </li>

            <li class="dash_sidebar_nav_item {{ isActive('admin.sales') }}"><a class="icon-home"
               href="{{ route('admin.stocks.index') }}">Vendas</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class="{{ isActive('admin.sales.index') }}"><a href="{{ route('admin.sales.index') }}">Ver
                        Todos</a></li>
                  <li class="{{ isActive('admin.sales.create') }}"><a
                        href="{{ route('admin.sales.create') }}">Criar Novo</a></li>
               </ul>
            </li>

            <li class="dash_sidebar_nav_item"><a class="icon-file-text"
                  href="dashboard.php?app=contracts/index">Contratos</a>
               <ul class="dash_sidebar_nav_submenu">
                  <li class=""><a href="dashboard.php?app=contracts/index">Ver Todos</a></li>
                  <li class=""><a href="dashboard.php?app=contracts/create">Criar Novo</a></li>
               </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-reply" href="">Ver Site</a></li>
            <li class="dash_sidebar_nav_item"><a class="icon-sign-out on_mobile"
                  href="{{ route('admin.logout') }}">Sair</a></li>
         </ul>

      </aside>

      <section class="dash_content">

         <div class="dash_userbar">
            <div class="dash_userbar_box">
               <div class="dash_userbar_box_content">
                  <span class="icon-align-justify icon-notext mobile_menu transition btn btn-green"></span>
                  <h1 class="transition">
                     <i class="icon-imob text-orange"></i><a href="{{ route('admin.home') }}">Sonhosde<b>Ninar</b></a>
                  </h1>
                  <div class="dash_userbar_box_bar no_mobile">
                     <a class="text-red icon-sign-out" href="{{ route('admin.logout') }}">Sair</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="dash_content_box">
            @yield('content')
         </div>
      </section>
   </div>

   <script src="{{ asset('assets/js/jquery.js') }}"></script>
   <script src="{{ asset('assets/js/libs.js') }}"></script>
   <script src="{{ asset('assets/js/scripts.js') }}"></script>

   @stack('js')
</body>

</html>