<?php
$title = "Acceuil";
include "./layouts/head.php"; ?>


<body>


    <?php include "./layouts/header.php"; ?>


    <section class="hero">
        <div class="sm:my-auto mx-auto px-4 py-16 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between lg:flex-row">
                <div class="mb-10 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="mb-6 max-w-xl">
                        <div>
                            <p class="bg-teal-accent-400 mb-2 inline-block rounded-full px-3 text-xs font-semibold uppercase tracking-wider text-gray-400">Diplome du Cycle Etudes Supérieures Spécialisées</p>
                        </div>
                        <h2 class="mb-6 max-w-lg font-sans text-2xl font-bold leading-snug tracking-tight text-gray-600 sm:text-4xl sm:leading-snug">
                            Formation
                            <span class="my-1 inline-block rounded bg-indigo-50 px-2 text-indigo-600">IWA</span> <br>
                            Ingénierie du Web Avancé
                        </h2>
                        <p class="text-base text-gray-700">Formation au domaine des technologies web les plus demandées sur le marché du travail national et international.</p>
                    </div>
                    <div class="flex flex-col items-center md:flex-row">
                        <a href="/" class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-indigo-600 px-6 font-medium tracking-wide text-white border-solid border-2 border-indigo-600 shadow-md transition duration-200 hover:bg-white hover:text-indigo-600 ho focus:outline-none md:mr-4 md:mb-0 md:w-auto">Pré-inscription </a>
                        <a href="./formation.php" aria-label="" class="h-12 px-2 inline-flex items-center rounded font-semibold text-indigo-600  underline-offset-2 transition-colors border-solid border-2 border-indigo-600 hover:bg-indigo-600 hover:text-white   duration-200 ">Plus d'informations </a>
                    </div>
                </div>
                <div class="relative shadow-xl shadow-indigo-600 lg:w-1/2">
                    <img class="h-56 w-full rounded object-cover shadow-lg sm:h-96" src="https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/IWA-Outils.png?bwg=1691346027" alt="" />
                    <a target="_blank"  href="https://www.youtube.com/watch?v=hly--NnKeQA&embeds_referring_euri=https%3A%2F%2Fiwa.fst.ac.ma%2F&source_ve_path=Mjg2NjY&feature=emb_logo" aria-label="Play Video" class="group absolute inset-0 flex h-full w-full items-center justify-center bg-gray-900 bg-opacity-30 transition-colors duration-300 hover:bg-opacity-10">
                        <div class="flex h-16 w-16 transform items-center justify-center rounded-full bg-gray-100 shadow-2xl transition duration-300 group-hover:scale-110">
                            <svg class="w-10 text-gray-900" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16.53,11.152l-8-5C8.221,5.958,7.833,5.949,7.515,6.125C7.197,6.302,7,6.636,7,7v10 c0,0.364,0.197,0.698,0.515,0.875C7.667,17.958,7.833,18,8,18c0.184,0,0.368-0.051,0.53-0.152l8-5C16.822,12.665,17,12.345,17,12 S16.822,11.335,16.53,11.152z"></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="relative bg-indigo-50 py-10 text-indigo-600 sm:py-16 lg:py-16">
        <div class="mx-auto max-w-xl md:max-w-7xl px-4 sm:px-6 md:flex lg:px-8">

            <div class="text- relative my-auto">

                <h2 class="text-3xl relative font-black leading-tight sm:text-4xl lg:text-6xl">
                    <div class="-left-12 mb-4 inline-flex h-12 w-12 text-indigo-600 ">
                        <svg viewBox="0 0 136 217" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M30.6632 105.436C27.6632 105.636 24.8632 105.836 21.9632 105.936C17.4632 106.236 12.8632 106.536 8.36322 106.736C7.36322 106.836 6.46322 106.836 5.46322 106.736C1.56322 106.336 -0.636777 103.236 0.163223 99.4361C0.263223 99.0361 0.363223 98.6361 0.563223 98.3361C5.06322 86.5361 8.26322 74.4361 11.2632 62.2361C14.6632 48.7361 18.1632 35.2361 21.6632 21.8361C22.3632 19.2361 23.1632 16.6361 23.8632 14.0361C24.8632 10.5361 26.8632 8.23607 30.6632 7.83607C34.6632 7.43607 38.5632 6.73607 42.5632 6.43607C60.5632 5.33607 78.5632 3.33607 96.4632 1.23607C100.963 0.736068 105.563 0.336068 110.063 0.036068C111.663 -0.063932 113.263 0.036068 114.763 0.436068C118.563 1.33607 120.163 4.93607 118.663 8.43607C118.163 9.53607 117.463 10.5361 116.763 11.5361C114.963 14.3361 113.163 17.0361 111.463 19.8361C106.863 27.6361 102.363 35.4361 97.6632 43.1361C92.9632 50.8361 88.1632 58.5361 83.3632 66.2361C81.9632 68.4361 80.5632 70.5361 79.1632 72.6361C78.7632 73.2361 78.3632 73.9361 77.7632 74.9361C78.7632 74.9361 79.3632 74.9361 79.9632 74.9361C88.2632 75.0361 96.5632 75.0361 104.863 75.1361C105.463 75.1361 106.163 75.2361 106.763 75.3361C110.563 76.1361 112.463 79.6361 111.063 83.2361C110.563 84.5361 109.663 85.7361 108.763 86.8361C104.663 92.2361 100.463 97.5361 96.4632 103.036C94.5632 105.636 92.8632 108.536 91.3632 111.436C83.2632 126.836 75.2632 142.136 67.3632 157.636C59.1632 173.536 51.1632 189.636 43.0632 205.536C42.4632 206.736 41.7632 207.936 40.7632 208.936C38.3632 211.436 35.1632 211.236 32.6632 208.936C30.8632 207.236 29.8632 205.236 29.7632 202.836C29.4632 198.336 29.0632 193.736 29.1632 189.136C29.4632 172.736 30.0632 156.336 30.3632 139.936C30.5632 128.836 30.5632 117.736 30.6632 106.636C30.8632 106.336 30.7632 105.936 30.6632 105.436Z" fill="currentColor" />
                        </svg>
                    </div>Ingénierie Du <span class="whitespace-nowrap">Web Avancé</span>
                </h2>
                <p class="mt-4 text-gray-700 font-medium text-md">La formation IWA est préparée en concertation avec plusieurs sociétés nationales et multinationales pour répondre à un besoin de formation au domaine des technologies web les plus demandées sur le marché du travail national et international.</p>


            </div>
            <div class="mt-8 w-full flex-col space-y-3 rounded-xl px-4 py-4  md:ml-auto md:max-w-md lg:flex">
                <div class="flex rounded-xl bg-white py-2 px-2 text-gray-700 shadow-lg shadow-violet-200">
                    <div class="my-auto mr-4 p-3 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-2xl font-bold">###</p>
                        <p class="text-sm">Etudents</p>
                    </div>
                </div>
                <div class="flex rounded-xl bg-white py-2 px-2 text-gray-700 shadow-lg shadow-violet-200">
                    <div class="my-auto mr-4 p-3 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-2xl font-bold">###</p>
                        <p class="text-sm">Diplômé</p>
                    </div>
                </div>
                <div class="flex rounded-xl bg-white py-2 px-2 text-gray-700 shadow-lg shadow-violet-200">
                    <div class="my-auto mr-4 p-3 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div class="">
                        <p class="text-2xl font-bold">###</p>
                        <p class="text-sm">Professeur</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mx-auto flex max-w-lg flex-col px-4 py-10 pt-12  lg:max-w-screen-xl lg:flex-row lg:my-14">
        <div class="max-w-md pr-20 lg:pt-28">
            <img src="https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/601074ed0f05cd25097215a4_6002086f72b7277e1f01d682_ryan-morrison-illustration-1.png" alt="" />
        </div>
        <div class="">

            <h2 class="mb-10 max-w-xl text-4xl font-bold leading-snug text-gray-700 lg:text-5xl lg:leading-snug">A propos <span class="text-indigo-600">IWA </span>formation</h2>
            <div class="grid gap-y-12 gap-x-8 lg:grid-cols-2">
                <div>
                    <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">Méthode D’enseignement</p>
                    <p class="text-lg text-gray-800">En présentiel (Faculté des Sciences de Tétouan), et à distance à travers des plateformes dédiées.</p>
                </div>
                <div>
                    <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">Durée De formation</p>
                    <p class="text-lg text-gray-800">2 ANS.</p>
                </div>
                <div>
                    <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">Pour Candidater</p>
                    <p class="text-lg text-gray-800">vous êtes invité à remplir ce formulaire de<a href="" class="text-indigo-600"> pré-inscription </a> au plutard le 4 Novembre 2023.</p>
                </div>
                <div>
                    <p class="mb-6 border-l-4 border-indigo-600 pl-4 text-2xl leading-10">Frais De Formation</p>
                    <p class="text-lg text-gray-800">40 000 DH pour les 2 années. Payable en 2 tranches. </p>
                </div>
            </div>
        </div>
    </section>


    <section class="pb-8 px-8  lg:pb-16 lg:px-16 ">

        <h2 class="text-4xl text-indigo-600 font-bold text-center py-10 mt-4">GALLERIE</h2>

        <div class="xl:px-40 lg:px-20">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-4 w-full">
                <div class="h-96 rounded-lg bg-gray-200 p-1 bg-[url('https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/IWA-societes.jpg?bwg=1691346349')] bg-center bg-cover">

                </div>

                <div class="h-96 rounded-lg ">
                    <div class="flex h-1/2">
                        <div class="bg-gray-200 mx-1 mb-1  rounded-lg  w-1/2 bg-[url('https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/IWA-Digital-Tranformation-Day-2.jpg?bwg=1691346349')] bg-center bg-cover">

                        </div>
                        <div class="bg-gray-200 mx-1 mb-1  rounded-lg w-1/2 bg-[url('https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/IWA-Openning-Day.jpg?bwg=1691346349')] bg-center bg-cover">

                        </div>
                    </div>
                    <div class="flex h-1/2">
                        <div class="bg-gray-200 mx-1 mt-1 rounded-lg w-1/2 bg-[url('https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/Nouhaila-El-Aissaoui-IWA-2021-2023_(1).jpg?bwg=1691346349')] bg-center bg-cover">

                        </div>
                        <div class="group bg-gray-200 mx-1 mt-1 rounded-lg w-1/2 bg-[url('https://iwa.fst.ac.ma/wp-content/uploads/photo-gallery/IWA-WCC.jpg?bwg=1691346349')] bg-center bg-cover relative overflow-hidden">
                            <!-- Content to be hidden on hover -->
                            <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-100 transition-opacity group-hover:opacity-0">
                            <i class="ri-more-fill" style="color: white; font-size: 50px;"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section class="bg-indigo-50">
        <div class="p-8 md:p-12 lg:px-16 lg:py-10">
            <div class="mx-auto max-w-lg text-center">
                <h2 class="text-2xl font-bold text-indigo-600 md:text-3xl">
                    Abonnez-vous à notre newsletter & restez informé
                </h2>


            </div>

            <div class="mx-auto max-w-xl mt-4">
                <form action="#" class="sm:flex sm:gap-4">
                    <div class="sm:flex-1">
                        <label for="email" class="sr-only">Email</label>

                        <input type="email" placeholder="Email address" class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-indigo-400" />
                    </div>

                    <button type="submit" class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-indigo-600 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-indigo-400 sm:mt-0 sm:w-auto">
                        <span class="text-sm font-medium"> S'abonner </span>

                        <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>



    <?php include "./layouts/footer.php"; ?>

</body>