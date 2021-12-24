@extends('layouts.app')
@section('header')
<div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <h1 class="tm-site-name tm-handwriting-font">Flower House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
                <ul>
                    <li><a href="http://127.0.0.1:8000/beranda">Beranda</a></li>
                    <li><a href="http://127.0.0.1:8000/about">About</a></li>
                    <li><a href="http://127.0.0.1:8000/produk">Product</a></li>
                    <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
                    <li><a href="http://127.0.0.1:8000/pelanggan">Pengguna</a></li>
                    <li><a href="http://127.0.0.1:8000/admin">Admin</a></li>
                    <li><a href="#" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </ul>
            </nav>  
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Flower House</h2>
          <p class="gray-text tm-welcome-description">FLOWER HOUSE berdiri pada tahun 2020  yang merupakan singkatan dari moto kami yaitu rumah adalah bunga yang
             memiliki arti rumah harus seharum bunga. Berawal Dari Penjualan Produk Boquet secara online dan telah memperoleh kepercayaan dari jutaan customer sehingga 
             kami terus melakukan pengembangan produk.Flower haouse memiliki spesialiasi di bidang desain dan dekorasi bunga untuk berbagai momen dan acara, seperti acara 
             pernikahan, Mother's Day, wisuda, anniversary, pesta pribadi, acara perusahaan, maupun karangan bunga berisi ucapan selamat lainnya. Tak hanya itu bunga hias dan 
             juga perlengkapan untuk menanampun cukup lengkap pada toko kami.
          </p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
        </div>        
      </div>      
    </section>
@endsection
@section('footer')
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
              <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
         </div>  
       </div>
     </div>
   </footer> <!-- Footer content-->  
@endsection