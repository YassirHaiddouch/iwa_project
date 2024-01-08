<?php
$title = "Contact";
include "./layouts/head.php"; ?>




<body>


  <?php include "./layouts/header.php"; ?>


  <section>
    <div class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
        <div class="relative z-10 lg:py-16">
          <div class="relative h-64 sm:h-80 lg:h-full">
            <img alt="House" src="https://images.unsplash.com/photo-1583608205776-bfd35f0d9f83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" class="absolute inset-0 h-full w-full object-cover" />
          </div>
        </div>

        <div class="relative flex items-center bg-violet-100	">
          <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-violet-100	"></span>

          <div class="p-5 sm:p-14 lg:p-20 text-indigo-600">
            <h2 class="text-[2.8rem]   mx-1 xl:text-7xl  md:text-6xl font-bold ">
              CONTACTEZ NOUS
            </h2>

            <div class="mt-10 md:px-10  px-5 ">
              <div class="flex my-1 ml-4 text-gray-600">
                <i class="ri-global-line text-indigo-600 text-3xl mr-2"></i>
                <p class="my-1 "> www.iwa.fst.ac.ma</p>
              </div>
              <div class="flex my-1 ml-4 items-center text-gray-600">
                <i class="ri-map-pin-line text-indigo-600 text-3xl mr-2 "></i>
                <p class="my-1 "> local</p>
              </div>
              <div class="block my-1 ml-4 xl:flex text-gray-600">
                <div class="flex items-center my-1">
                  <i class="ri-mail-line text-indigo-600 text-3xl mr-2"></i>
                  <p class="my-1 mr-2 ">iwa@uae.ac.ma</p>
                </div>
                <div class="flex items-center my-1 text-gray-600"> <i class="ri-instagram-line text-indigo-600 text-3xl mr-2"></i> <i class="ri-facebook-box-line text-indigo-600 text-3xl mr-2"></i>
                  <p class="my-1 "> IWA </p>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="form-contact flex justify-center">
    <div class="w-full sm:w-2/3 ">
      <div class="flex justify-center items-center px-12  ">
        <h3 class="font-bold text-2xl xl:text-6xl  md:text-2xl my-16 text-indigo-600 text-center ">
          COMMUNIQUEZ AVEC NOUS</h3>
      </div>

      <!-- form -->
      <div class="w-full sm:px-24 py-5 px-10 ">

        <div class=" grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-8">
          <input class="h-[55px] bg-gray-200 focus:outline-none p-5" type="text" placeholder="Nom" />
          <input class="h-[55px] bg-gray-200 focus:outline-none p-5" type="text" placeholder="Prénom" />
        </div>
        <div class="my-6 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-8">
          <input class="h-[55px] bg-gray-200 focus:outline-none p-5" type="text" placeholder="E-mail" />
          <input class="h-[55px] bg-gray-200 focus:outline-none p-5 " type="text" placeholder="Télephone" />
        </div>
        <textarea class="h-[250px] bg-gray-200 w-full focus:outline-none px-10 py-8" placeholder="Sujet"></textarea>
        <button class=" my-8 w-full h-[55px] outline outline-offset-2 text-indigo-600  hover:bg-indigo-600 hover:text-white " type="button">ENVOYER</button>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section class="map h-[450px] mt-10 relative group">
    <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3302.958630612597!2d-5.3653864!3d35.5621228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b42461ad1469f%3A0x25ec5089911ba6df!2sLa%20Facult%C3%A9%20des%20Sciences%20de%20T%C3%A9touan!5e0!3m2!1sen!2sus!4v1639706681975!5m2!1sen!2sus"></iframe>

    <div class="overlay absolute top-0 left-0 w-full h-full bg-black opacity-60 transition-opacity duration-300 group-hover:opacity-0">
      <!-- Additional content for the overlay, e.g., text, buttons, etc. -->
      <div class="text-white flex justify-center items-center p-4 h-full">
        <div>
          <div class="flex justify-center mb-10"><img src="./asset/icons/maps-icon.png" width="60">
          </div>
          <h4 class="text-6xl text-center">VISITEZ-NOUS</h4>
        </div>
      </div>
    </div>
  </section>

  <?php include "./layouts/footer.php"; ?>


</body>