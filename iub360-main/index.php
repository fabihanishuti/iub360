<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to IUB 360</title>
  <link rel="icon" href="https://seeklogo.com/images/I/independent-university-logo-776F5F3A69-seeklogo.com.png">

  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js" defer></script>

</head>

<body>
  <?php include('assets/header.php') ?>

  <section class="bg-center bg-no-repeat bg-blue-900 pt-24">
    <div class="px-4 mx-auto max-w-screen-xl text-center pb-6 lg:pt-6">
      <h1 class="mb-4 text-3xl font-extrabold text-white sm:text-4xl">
      IUB 360 aims to mold IT leaders, bridging academic concepts with real-world solutions, and preparing students for both global standards and conscientious citizenship.</h1>
      <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Student startup provide students
        with hands-on experience, foster entrepreneurship, and can lead to the development of successful businesses
        beyond their academic careers.</p>
      <a href="login.php" class="inline-flex justify-center items-center py-3 px-5  mb-5 text-base font-medium  bg-white text-blue-900 rounded-lg border border-blue-900 hover:bg-blue-100 hover:text-blue-900">
        Get Started
      </a>
    </div>
  </section>

  <section class="bg-white">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-12 lg:py-16">
      <div class="max-w-2xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-extrabold text-blue-900 sm:text-4xl">
          We Stand For
        </h2>
        <p class="mt-4 text-base font-bold text-blue-900 sm:text-xl">
          Crafted with skill and care to help our students grow their business!
        </p>
      </div>

      <div class="grid grid-cols-1 mt-12 text-center sm:mt-20 gap-x-20 gap-y-20 md:grid-cols-3 space-x-4">
        <div class="space-y-4">

          <h3 class="text-2xl font-extrabold  text-blue-900 ">
            Empowerment
          </h3>
          <img class="rounded-lg" src="./img/empowerment.png" alt="stock" style="height:50%; width:100%;">
          <p class="text-lg font-bold text-blue-900">
          The initiative cultivates resilience, creativity, and adaptability, 
          aiming to shape a generation of leaders driving Bangladesh's progress in the 4th industrial revolution.
          </p>

        </div>

        <div class="space-y-4">

          <h3 class="text-2xl font-extrabold text-blue-900">
            Growth
          </h3>
          <img class="rounded-lg" src="./img/growth.jpg" alt="stock"  style="height:50%; width:100%;">
          <p class="text-lg font-bold text-blue-900">
          IUB 360 Startup fuels exponential growth by guiding entrepreneurs through idea refinement, 
          prototype development, and market-ready strategies.
          </p>

        </div>

        <div class="space-y-4">

          <h3 class="text-2xl font-extrabold text-blue-900">
            Community
          </h3>
          <img class="rounded-lg" src="./img/community.png" alt="stock"  style="height:50%; width:100%;">
          <p class="text-lg font-bold text-blue-900">
          IUB 360 Startup fosters a vibrant entrepreneurial community, 
          promoting collaboration and knowledge-sharing among participants.
          </p>

        </div>
      </div>
    </div>

    <div class="flex flex-row justify-center">

      <a href="howItWorks.php"
        class="inline-flex justify-center items-center py-3 px-5  mb-5 text-base font-medium bg-blue-900 text-white rounded-lg border border-blue-900 hover:bg-blue-100 hover:text-blue-900 hover:border-blue-100">
        Learn more
      </a>
    </div>
  </section>


  <!-- section: What makes IUB 360 special -->

  <section class="flex justify-between max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-12 lg:py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

    <div class="">
      <h1 class="text-5xl text-blue-900 font-bold basis-1/5 mb-12">What makes IUB 360 special?</h1>

      <div class="flex justify-around">
        <div>
          <div class="flex justify-center font-bold text-3xl mb-4">06
          <!-- <?php
            // $conn = new mysqli("localhost", "root", "", "iub360");

            // // Check connection
            // if ($conn->connect_error) {
            //   die("Connection failed: " . $conn->connect_error);
            // }

            // // Query to get the number of rows in the "companies" table
            // $sql = "SELECT COUNT(*) AS total FROM companies";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //   $row = $result->fetch_assoc();
            //   $totalRows = $row["total"];
            //   echo $totalRows;
            // } else {
            //   echo "Null";
            // }
            // $conn->close();
          ?> -->
          </div>
          <div class="font-bold text-2xl text-white rounded-full bg-blue-900 flex items-center justify-center text-center" style="height: 150px; width: 150px;">Total <br> Project</div>
        </div>
        <div>
          <div class="flex justify-center font-bold text-3xl mb-4">05</div>
          <div class="font-bold text-2xl text-white rounded-full bg-blue-900 flex items-center justify-center text-center" style="height: 150px; width: 150px;">Star <br> Project</div>
        </div>
        <div>
          <div class="flex justify-center font-bold text-3xl mb-4">97%</div>
          <div class="font-bold text-2xl text-white rounded-full bg-blue-900 flex items-center justify-center text-center" style="height: 150px; width: 150px;">Success <br> Rate</div>
        </div>
      </div>
    </div>

    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-gray-100 rounded-lg border border-gray-100 shadow md:ml-20">
        <h3 class="mb-4 text-2xl font-semibold">Sprint Program</h3>
        <p class="text-gray-900 sm:text-lg">for</p>
        <div class="flex justify-center items-baseline my-8">
          <span class="mr-2 text-5xl font-extrabold">6</span>
          <span class="text-gray-900">months</span>
        </div>
        <!-- List -->
        <ul role="list" class="list-disc list-inside mb-8 space-y-4 text-left">
          <li class="items-center space-x-3">
            <!-- Icon -->
            <span>1st level: <span class="font-semibold">Idea Cultivator (2 months)</span></span>
          </li>
          <li class="items-center space-x-3">
            <!-- Icon -->
            <span>2nd level: <span class="font-semibold">Incubator (4months)</span></span>
          </li>
          <li class="opacity-0 items-center space-x-3">
            <!-- Icon -->
            <span>- <span class="font-semibold">-</span></span>
          </li>
        </ul>
        <form>
          <button class="mt-4 text-white bg-blue-900 border border-blue-900 hover:text-blue-900 hover:bg-blue-100 hover:border-blue-100 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="login.php">Apply</a></button>
          <button class="mt-4 text-white bg-blue-900 border border-blue-900 hover:text-blue-900 hover:bg-blue-100 hover:border-blue-100 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="howItWorks.php">How it Works</a></button>
        </form>
    </div>

    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-gray-100 rounded-lg border border-gray-100 shadow">
        <h3 class="mb-4 text-2xl font-semibold">Full Program</h3>
        <p class="text-gray-900 sm:text-lg">for</p>
        <div class="flex justify-center items-baseline my-8">
          <span class="mr-2 text-5xl font-extrabold">12</span>
          <span class="text-gray-900">months</span>
        </div>
        <!-- List -->
        <ul role="list" class="list-disc list-inside mb-8 space-y-4 text-left">
          <li class="items-center space-x-3">
            <!-- Icon -->
            <span>1st level: <span class="font-semibold">Idea Cultivator (3 months)</span></span>
          </li>
          <li class="items-center space-x-3">
            <!-- Icon -->
            <span>2nd level: <span class="font-semibold">Incubator (6 months)</span></span>
          </li>
          <li class="items-center space-x-3">
            <!-- Icon -->
            <span>3rd level: <span class="font-semibold">Accelarator (3 months)</span></span>
          </li>
        </ul>
        <form>
          <button class="mt-4 text-white bg-blue-900 border border-blue-900 hover:text-blue-900 hover:bg-blue-100 hover:border-blue-100 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="login.php">Apply</a></button>
          <button class="mt-4 text-white bg-blue-900 border border-blue-900 hover:text-blue-900 hover:bg-blue-100 hover:border-blue-100 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"><a href="howItWorks.php">How it Works</a></button>
        </form>
    </div>

      

    </div>
  </section>


  <!-- section: Carousel -->

  <section class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-12 lg:py-16">
    <div class="max-w-2xl mx-auto text-center mb-12">
      <h1 class="text-3xl font-extrabold text-blue-900 sm:text-4xl">
        Star Alumni
      </h1>
      <p class="mt-4 text-base font-bold text-blue-900 sm:text-xl">
        Details!
      </p>
    </div>


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./img/carousel1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./img/carousel2.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./img/carousel3.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>

  </section>


  <!-- section: What’s happening at IUB 360 -->

  <section class="flex justify-between max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-12 lg:py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

      <div class="">
        <h1 class="text-5xl text-blue-900 font-bold basis-1/5 mb-12">What's happening at IUB 360?!</h1>
        <div class="flex">
          <div class="flex flex-col">
              <div class="font-bold text-3xl mb-4">Keep up with the latest news from IUB 360!</div>
              <button type="submit" class="mt-4 text-white bg-blue-900 border border-blue-900 hover:text-blue-900 hover:bg-blue-100 hover:border-blue-100 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5">Event Calendar</button>
          </div>
        </div>
      </div>


      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow mx-auto">
        <a href="#">
          <img class="max-h-72 w-auto mx-auto pt-8 rounded" src="./img/newsletter0.jpg" alt="" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2020</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2020 so far, in reverse chronological order.</p>
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
      </div>

      <div class="grid grid-cols-1 pt-6 md:pt-0">
        <div class="pb-6 md:pb-2">
          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
            <img class="object-cover rounded max-h-28 w-auto pl-2 pt-3 md:pt-0" src="./img/newsletter1.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
              <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
          </a>
        </div>
        <div class="pb-6 md:pb-2">
          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
            <img class="object-cover rounded max-h-28 w-auto pl-2 pt-3 md:pt-0" src="./img/newsletter2.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2022</h5>
              <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2022 so far, in reverse chronological order.</p>
            </div>
          </a>
        </div>
        <div>
          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
            <img class="object-cover rounded max-h-28 w-auto pl-2 pt-3 md:pt-0" src="./img/newsletter3.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2023</h5>
              <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2023 so far, in reverse chronological order.</p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>

  <?php include('assets/footer.php') ?>

</body>

</html>