@extends('layouts.main')

@section('container')
    @include('partials.navbar')

    <section id="about" class="text-black bg-white">
        <div class="relative pb-20 overflow-hidden isolate pt-14">
            <div class="items-start px-5 py-16 mx-auto">
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

        <div class="pt-5 pb-7 shadow-2xl sm:pt-30">
      <div class="px-6 mx-auto shadow-2xl max-w-7xl lg:px-2">
          <div class="max-w-2xl mx-auto text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
              <h2 class="py-3 mb-3 text-5xl font-bold tracking-tight text-center text-black sm:text-4xl" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                  Cara Menggunakan <span style="color: #06E3FF;">Pamer Karya</span>
              </h2>
              {{--<p class="mt-2 text-lg leading-10 text-black text-center">
                    There's a method to our madness: we have techniques and tools to make sure we're asking the right questions,
                    and come up with great design solutions that our users really need.
                </p>--}}
            </div>
        </div>
    </div>

    <section class="bg-white py-20 mt-10 lg:py-[120px]" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
      <div id="container" style="--title-background -color: rgba(42, 42, 42, 1.00);, --column-count: 4; --row-count: 2;">
    <div id="icon">
      <div id="maskedImage"></div>
    
        <div class="container mx-auto">
            <div class="flex flex-wrap mx-4">
                <div class="w-full px-4">
                    <div class="flex flex-wrap items-center justify-center gap-8">
                        <a href="javascript:void(0)" class="img-fluid rounded-4 mx-5 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]">
                            <img src="/img/Chatbot Support 2.png" alt="image" class="w-full h-10" style="width: 200px;">
                       
                        <div class="title-title title-ltr">
                          <span>Cara 1</span>
                        </div>
                        </a>  
                        <a href="javascript:void(0)" class="mx-5 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]">
                            <img src="/img/Chatbot Support (HD).png" alt="image" class="w-full h-10" style="width: 205px;">
                        </a>
                        <a href="javascript:void(0)" class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]">
                            <img src="/img/Secure Data (HD).png" alt="image" class="w-full h-10" style="width: 210px;">
                        </a>
                    </div>
                </div>
            </div>
            </div>
    </div>
        </div>
    </section>

        {{--<div class="w-full px-3 py-3 mx-auto text-black lg:px-18 lg:py-17">
        <h2 class="py-5 mb-5 text-5xl font-bold tracking-tight text-center text-black sm:text-4xl" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Cara <span style="color: #06E3FF;">Penggunaan</span></h2>
        </div>--}}


        <div class="w-full px-3 py-3 mx-auto text-black lg:px-18 lg:py-17">
        <h2 class="py-5 mb-5 text-5xl font-bold tracking-tight text-center text-black sm:text-4xl" data-aos="fade-up" data-aos-duration="500"
            data-aos-easing="ease-in-out">Frequently Asked <span style="color: #06E3FF;">Questions</span></h2>
        </div>
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-item-header">
              Bagaimana cara mengunggah portfolio saya?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item-header">
              Apakah ada batasan ukuran file untuk unggahan portfolio?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything that can be viewed in a web browser.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item-header">
              Bagaimana cara mengunggah portfolio saya?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                <ul style="padding-left: 1rem;">
                  <li>HTML, CSS, JavaScript</li>
                  <li>Frameworks (CSS and JavaScript frameworks)</li>
                  <li>Responsive Design</li>
                  <li>Version Control/Git</li>
                  <li>Testing/Debugging</li>
                  <li>Browser Developer Tools</li>
                  <li>Web Performance</li>
                  <li>SEO (Search Engine Optimization)</li>
                  <!-- <li>CSS Preprocessing</li> -->
                  <li>Command Line</li>
                  <li>CMS (Content Management System)</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item-header">
              Apakah saya dapat menghapus atau mengganti portfolio yang sudah saya unggah?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item-header">
              Apakah portfolio saya akan secara otomatis tersedia untuk dilihat oleh orang lain setelah saya mengunggahnya?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-item-header">
              Bagaimana cara berinteraksi dengan portfolio pengguna lain?
            </div>
            <div class="accordion-item-body">
              <div class="accordion-item-body-content">
                CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
              </div>
            </div>
          </div>
        </div>
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat');
          .accordion {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
          }
          .accordion-item {
            background-color: #fff;
            color: #111;
            margin: 1rem 0;
            border-radius: 1rem;
            border: 3px solid #27789A;
            box-shadow: 0 0 0 1px hsla(230, 13%, 9%, 0.05),
                        0 0.3px 0.4px hsla(230, 13%, 9%, 0.02),
                        0 0.9px 1.5px hsla(230, 13%, 9%, 0.045),
                        0 3.5px 6px hsla(230, 13%, 9%, 0.09);
          }
          .accordion-item-header {
            font-family: Montserrat;
            padding: 0.5rem 3rem 0.5rem 1rem;
            min-height: 5rem;
            line-height: 1.5rem;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
            font-weight: bold;
            color: #0A4148;
          }
          .accordion-item-header::after {
            content: "\002B";
            font-size: 2rem;
            position: absolute;
            right: 1rem;
          }
          .accordion-item-header.active::after {
            content: "\2212";
          }
          .accordion-item-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
          }
          .accordion-item-body-content {
            padding: 1rem;
            line-height: 1.5rem;
            border-top: 1px solid;
            border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
          }

          @media (max-width: 767px) {
            html {
              font-size: 14px;
            }
          }

        </style>
        <script>
          const accordionItemHeaders = document.querySelectorAll(
            ".accordion-item-header"
          );

          accordionItemHeaders.forEach((accordionItemHeader) => {
            accordionItemHeader.addEventListener("click", (event) => {
              // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

              const currentlyActiveAccordionItemHeader = document.querySelector(
                ".accordion-item-header.active"
              );
              if (
                currentlyActiveAccordionItemHeader &&
                currentlyActiveAccordionItemHeader !== accordionItemHeader
              ) {
                currentlyActiveAccordionItemHeader.classList.toggle("active");
                currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
              }
              accordionItemHeader.classList.toggle("active");
              const accordionItemBody = accordionItemHeader.nextElementSibling;
              if (accordionItemHeader.classList.contains("active")) {
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
              } else {
                accordionItemBody.style.maxHeight = 0;
              }
            });
          });

        </script>
                    
      </div>

    </section>

    @include('partials.footer')
@endsection
