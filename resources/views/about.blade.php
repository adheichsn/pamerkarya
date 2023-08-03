@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <section id="about" class="text-black bg-white">
        <div class="relative pb-20 overflow-hidden isolate pt-14">
            <div class="flex flex-wrap items-start px-5 py-16 mx-auto">
            {{--<div class="w-full px-10 space-y-10 lg:w-1/2">
                    <h1 class="text-5xl font-medium">We are Team who’s love Create some beneficial Product in creative
                        industries
                    </h1>
                    <p class="lg:w-4/5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae
                        neque
                        consequat,
                        eget
                        vulputate dolor consequat. In porttitor dolor sed eros efficitur fringilla. Vestibulum ante
                        ipsum
                        primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse consequat mauris
                        risus, a aliquet velit consectetur sed. Maecenas id malesuada felis, in bibendum odio. Nullam
                        fermentum urna non pharetra commodo. Ut a ex ac elit luctus bibendum. Sed id nunc id metus
                        aliquet
                        suscipit. Aliquam sed enim eu tellus euismod viverra. Curabitur ac metus mauris. Sed venenatis
                        nulla
                        a est rhoncus fringilla.</p>
                    <div class="mt-10 ml-24 space-y-10">
                        <div class="flex flex-row items-center space-x-10">
                            <i class="fa-solid fa-handshake fa-2xl"></i>
                            <div>
                                <h2>Trust</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae neque
                                    consequat, eget vulputate dolor consequat. In porttitor dolor sed eros efficitur
                                    fringilla.</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center space-x-10">
                            <i class="fa-solid fa-handshake fa-2xl"></i>
                            <div>
                                <h2>Trust</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae neque
                                    consequat, eget vulputate dolor consequat. In porttitor dolor sed eros efficitur
                                    fringilla.</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center space-x-10">
                            <i class="fa-solid fa-handshake fa-2xl"></i>
                            <div>
                                <h2>Trust</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae neque
                                    consequat, eget vulputate dolor consequat. In porttitor dolor sed eros efficitur
                                    fringilla.</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-center space-x-10">
                            <i class="fa-solid fa-handshake fa-2xl"></i>
                            <div>
                                <h2>Trust</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet eros vitae neque
                                    consequat, eget vulputate dolor consequat. In porttitor dolor sed eros efficitur
                                    fringilla.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-full gap-8 px-10 mt-20 lg:mt-0 lg:w-1/2">
                    <div class="flex-none pt-32 ml-auto space-y-8 w-44 sm:pt-0">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1670272504528-790c24957dda?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                    </div>
                    <div class="flex-none mr-auto space-y-8 w-44 sm:mr-0 sm:pt-52 lg:pt-36">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1485217988980-11786ced9454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex-none pt-32 ml-auto space-y-8 w-44 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80"
                                alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                            <div class="absolute inset-0 pointer-events-none rounded-xl ring-1 ring-inset ring-gray-900/10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}

        <div class="w-full px-3 py-3 mx-auto text-black lg:px-18 lg:py-17">
        <h2 class="py-5 mb-5 text-5xl font-bold tracking-tight text-center text-black sm:text-4xl" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Cara <span style="color: #06E3FF;">Penggunaan</span></h2>
        </div>


        <div class="w-full px-3 py-3 mx-auto text-black lg:px-18 lg:py-17">
        <h2 class="py-5 mb-5 text-5xl font-bold tracking-tight text-center text-black sm:text-4xl" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Frequently Asked <span style="color: #06E3FF;">Questions</span></h2>
        </div>

        <style media="screen">
  @font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://rekrutmenbersama.fhcibumn.id/assets/frontend/fonts/google-material-icon.woff2) format('woff2');
  }
  .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -moz-font-feature-settings: 'liga';
    -moz-osx-font-smoothing: grayscale;
  }
  .card-faq {
    border: 2px solid rgb(200, 215, 238);
    border-radius: 5px;
    margin-bottom: 10px;
    color: #0097b1;
  }
  .card-faq:hover {
  	border: 2px solid rgb(12, 129, 149);
  	color: #0c8195;
  	background: #f9feff;
  }
  .card-faq-header{
    padding: 1.3rem 1rem;
  }
  .collapse.show {
  	display: block;
  	padding-bottom: 2rem;
  	border-top: solid 1px #ececec;
  	color: black;
  }
  @media (min-width: 769px){
    /* dekstop */
    .search-panel{
      width: 40%;
    }
  }
  @media (max-width: 768px){
    /* mobile */
    .search-panel{
      width: 100%;
    }
  }
  .card-body *{
    font-family: 'Rubik' !important;
    font-size: 16px !important;
    word-wrap: break-word !important;
  }
</style>


<div class="col-md-12 custom-px-5" id="list_faq" style="z-index: 9;">
  <div class="nav-tabs-horizontal py-4 custom-px-5">
        <div class="card-faq" style="">
      <div onclick="collapse_faq(11)" class="card-faq-header" data-toggle="collapse" data-target="#collapse11" id="heading11" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Bagaimana cara mengunggah portfolio saya?</b>
              <i id="icon_collapse_11" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordionExample" style="">
        <div class="card-body">
          <p style="text-align: justify; ">
          <span style="font-size: 14px;">loejhfuhajdgjshrtkbjhegkjrh</span>
          <br>
      </p>
      </div>
      </div>
    </div>
      <div class="card-faq" style="">
      <div onclick="collapse_faq(20)" class="card-faq-header" data-toggle="collapse" data-target="#collapse20" id="heading20" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Apakah ada batasan ukuran file untuk unggahan portfolio?</b>
              <i id="icon_collapse_20" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      {{--<div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
        <div class="card-body">
          <p style="text-align: justify; ">Hal ini bisa disebabkan karena adanya antrian di <i>email</i> karena banyaknya pelamar. Bisa juga terjadi karena kesalahan <i>input</i> alamat<i> email </i>(<i>typo</i>), alamat <i>email</i> yang di cek dengan yang didaftarkan berbeda, sehingga<i> email</i> tidak diterima. </p><p style="text-align: justify;">Apa yang bisa dilakukan:</p><ul><li style="text-align: justify;">Pastikan terlebih dahulu <i>email </i>yang didaftarkan tidak salah dalam penulisan</li><li style="text-align: justify;">Pastikan kembali sudah mengecek di seluruh<i> folder email </i>terdaftar, <i>inbox, </i><i>promotion, spam, junk,</i> dan <i>all mail.&nbsp;</i></li><li style="text-align: justify;">Pastikan&nbsp;<i>Mark as Not Spam</i>&nbsp;bagi email yang masuk ke folder&nbsp;<i>spam</i></li><li style="text-align: justify; ">Pastikan maksimum pengiriman <i>email</i> verifikasi adalah 1 x 24 jam setelah mendaftar di&nbsp;<i>website recruitment.</i></li></ul><p style="text-align: justify;"><span style="font-size: 1rem;">Bagaimana kalau sudah melebihi 1 x 24 jam belum juga mendapat <i>email </i>verifikasi ?</span><br></p><ul><li style="text-align: justify;">Pelamar dapat melakukan pendaftaran ulang (re-registrasi) dengan menggunakan ID KTP dan alamat <i>email</i> yang sama. Jangan sampai beda, karena sistem akan kembali mengirimkan <i>email</i> verifikasi ke email yang didaftarkan.</li><li style="text-align: justify;">Setelah melakukan pendaftaran ulang (re-registrasi), cek secara berkala seluruh folder <i>email, inbox, promotion</i>,&nbsp;<i>spam, junk, </i>dan <i>all mail</i>.</li></ul><p style="text-align: justify;">Jika masih mengalami kendala yang sama setelah 1x24 jam, silakan hubungi Helpdesk.<br></p><div style="text-align: justify;"><br></div>        </div>
      </div>--}}
    </div>
      <div class="card-faq" style="">
      <div onclick="collapse_faq(11)" class="card-faq-header" data-toggle="collapse" data-target="#collapse11" id="heading11" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Bagaimana cara mengunggah portfolio saya?</b>
              <i id="icon_collapse_11" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      {{--<div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
        <div class="card-body">
          Pelamar dapat klik tombol lupa <i>password</i> di halaman <i>login</i>. Kemudian reset password akan dikirimkan ke <i>email </i>yang didaftarkan.        </div>
      </div>--}}
    </div>
      <div class="card-faq" style="">
      <div onclick="collapse_faq(21)" class="card-faq-header" data-toggle="collapse" data-target="#collapse21" id="heading21" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Apakah saya dapat menghapus atau mengganti portfolio yang sudah saya unggah?</b>
              <i id="icon_collapse_21" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      {{--<div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
        <div class="card-body">
          <p style="text-align: justify; ">Kejadian seperti ini bisa terjadi karena proses penggantian <i>password </i>yang terputus, bisa disebabkan karena jaringan yang tidak stabil atau session untuk akses <i>website </i>telah berakhir. </p><p style="text-align: justify;">Pelamar dapat melakukan hal berikut:</p><ul><li style="text-align: justify; ">Pastikan telah melakukan “Lupa <i>Password</i>” dan memasukan <i>email</i> yang terdaftar di sistem.</li><li style="text-align: justify;">Cek <i>email</i> “<i>Reset Password</i>” di seluruh folder <i>email, inbox, spam,</i>&nbsp;<i>junk, </i>dan <i>all mail.</i></li><li style="text-align: justify;">Klik tombol “<i>Reset Password</i>” yang ada di <i>email.</i></li><li style="text-align: justify;">Masukkan <i>password</i> baru sesuai dengan ketentuan (minimum 8 karakter, gabungan angka, huruf kecil, serta huruf kapital) dan ulangi <i>password</i>.</li><li style="text-align: justify;">Klik “<i>Reset</i>” sampai muncul notifikasi “<i>Password</i> telah diubah”.</li><li style="text-align: justify;">Lakukan <i>login</i> menggunakan <i>email</i> dan <i>password</i> yang telah diubah.</li></ul><div style="text-align: justify;"><br></div>        </div>
      </div>--}}
    </div>
      <div class="card-faq" style="">
      <div onclick="collapse_faq(429)" class="card-faq-header" data-toggle="collapse" data-target="#collapse429" id="heading429" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Apakah portfolio saya akan secara otomatis tersedia untuk dilihat oleh orang lain setelah saya mengunggahnya?</b>
              <i id="icon_collapse_429" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse429" aria-expanded="false" aria-controls="collapse429">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      {{--<div id="collapse429" class="collapse" aria-labelledby="heading429" data-parent="#accordionExample">
        <div class="card-body">
          <p style="text-align: justify; ">Hal ini dapat disebabkan oleh 2 kondisi, yaitu <i>email</i> belum terdaftar atau salah penulisan <i>email </i>dan <i>password</i>. Jika <i>email </i>belum terdaftar, silahkan melakukan <i>register </i>terlebih dahulu. Jika pelamar/Anda&nbsp;lupa <i>password</i>, silahkan klik tombol <b>Lupa Password</b> di halaman login. Kemudian <i>reset password</i> akan dikirimkan ke <i>email </i>Anda.<br></p>        </div>
      </div>--}}
    </div>
      <div class="card-faq" style="">
      <div onclick="collapse_faq(19)" class="card-faq-header" data-toggle="collapse" data-target="#collapse19" id="heading19" style="cursor:pointer; background:white;">
          <div class="row">
            <div class="col-12" style="">
              <b style="margin:0px">Bagaimana cara berinteraksi dengan portfolio pengguna lain?</b>
              <i id="icon_collapse_19" style="cursor: pointer;float: right;" class="material-icons" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">keyboard_arrow_down</i>
            </div>
          </div>
      </div>
      <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
        <div class="card-body">
          <p style="text-align: justify; "><span style="font-family: " times="" new="" roman";="" font-size:="" 15px;="" white-space:="" pre-wrap;"="">Pastikan alamat <i>email </i>dan KTP sudah benar. Jika sudah pernah registrasi, silakan cek email verifikasi akun yang dikirimkan dari <b>Panitia Rekrutmen Bersama BUMN</b>. Karena <i>email </i>dan KTP yang sama hanya diperkenankan mendaftar satu kali. Jika belum melakukan registrasi, kandidat bisa mencoba registrasi secara berkala. Cek kembali di seluruh folder <i>email </i>terdaftar baik di <i>inbox, spam, junk, </i>dan <i>all mail</i>.</span></p>        </div>
      </div>
    </div>
    
    




<script type="text/javascript">
  function scrollToServiceDesk(){
    const element = document.getElementById("service-desk-page");
    element.scrollIntoView();
  }
  function collapse_faq(id){
    if (document.querySelector('#heading'+id).getAttribute('aria-expanded') == 'true') {
      document.querySelector('#icon_collapse_'+id).style.transform = 'rotate(0deg)';
    }
    else {
      document.querySelector('#icon_collapse_'+id).style.transform = 'rotate(180deg)';
    }
  }

  var delayTimer;
  function search_keyword() {
      clearTimeout(delayTimer);
      delayTimer = setTimeout(function() {

        var value = $("#keyword").val().toLowerCase();
        $('.card-faq').filter(function() {
          $(this).toggle( $(this).find('b').text().toLowerCase().indexOf(value) > -1 )
        });
        var dataList = $('.card-faq').filter((_,e) => e.style.display != 'none');
        if(dataList.length == 0){
          $('#list_faq').hide();
          $('#faq_message').show();
        } else{
          $('#list_faq').show();
          $('#faq_message').hide();
        }

      }, 1000); // Will do the ajax stuff after 1000 ms, or 1 s
  }
</script>
      </div>

    </section>

    @include('partials.footer')
@endsection
