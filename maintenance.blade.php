<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('hotel_name') }} - {{ __('Maintenance') }}</title>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

   @vite(['resources/themes/atom/css/app.css', 'resources/themes/atom/js/app.js'])


</head>

<body class="bg-[#141414] min-h-screen flex items-center justify-center flex-col">
        <!-- <div class="snowflakes-container" id="snowflakes"></div> -->
  <div class="flex flex-col md:flex-row w-full h-screen">
    <div class="md:w-1/2 flex flex-col justify-center items-start px-52 py-12 bg-[#141414] relative z-10">
      <div class="flex items-center mb-6 flex-col">
        <img src="/assets/images/maintenance/Frank.png" alt="Bakım" class=""> <!-- #9a3242 -->
        <div class="bg-[#51242b] text-white text-xs font-semibold px-6 py-3 rounded-full border-2 border-[#8e303e] border-solid">
             <span class="min-w-[10px] max-w-[10px] min-h-[10px] max-h-[10px] rounded-full absolute  bg-[#9a3242] mt-1.5"></span>
             <text class="ml-4 text-sm font-Inter">BAKIM MODU AKTİF</text>
             </div>
      </div>
      <h1 class="text-5xl font-bold text-[#d8d8d8] leading-tight mb-2 flex flex-col font-Inter">Yakında <span class="text-[#982334] font-Inter">sizlerleyiz!</span></h1>
      <p class="text-3xl text-[#cfcfcf] mb-8 w-10/12 font-Inter">
        <span class="font-bold text-white font-Inter">Rose Hotel</span> kapılarını yeniden açmaya hazırlanıyor. En gelişmiş sistemler, yeni mobilyalar ve özlediğin o eşsiz ortam çok yakında seninle.
      </p>
      <div class="flex space-x-4 mb-10 flex-row items-center" id="timer">
        <div class="flex flex-col items-center">
          <div id="days" class="bg-[#982334] border-2 border-solid border-[#bc263c] text-[#d8d8d8] text-3xl font-bold px-7 py-5 rounded-2xl font-Inter">0</div>
          <span class="text-gray-300 mt-2 text-sm font-Inter font-bold">Gün</span>
          </div>
           <div class="flex flex-col items-center">
          <div id="hours" class="bg-[#1e1e1e] border-2 border-solid border-[#373737] text-[#d8d8d8] text-3xl font-bold px-7 py-5 rounded-2xl font-Inter">0</div>
          <span class="text-gray-300 mt-2 text-sm font-Inter font-bold">Saat</span>
          </div>
           <div class="flex flex-col items-center">
          <div id="minutes" class="bg-[#1e1e1e] border-2 border-solid border-[#373737] text-[#d8d8d8] text-3xl font-bold px-7 py-5 rounded-2xl font-Inter">0</div>
          <span class="text-gray-300 mt-2 text-sm font-Inter font-bold">Dakika</span>
            </div>
             <div class="flex flex-col items-center">
          <div id="seconds" class="bg-[#1e1e1e] border-2 border-solid border-[#373737] text-[#d8d8d8] text-3xl font-bold px-7 py-5 rounded-2xl font-Inter">0</div>
          <span class="text-gray-300 mt-2 text-sm font-Inter font-bold">Saniye</span>
          </div>
      </div>
      <script>
        window.onload = () => {
            const countdownTime = 30 * 24 * 60 * 60;
            const display = {
                days: document.querySelector("#days"),
                hours: document.querySelector("#hours"),
                minutes: document.querySelector("#minutes"),
                seconds: document.querySelector("#seconds"),
            };

            function startCountdown(duration) {
                let timer = duration;
                setInterval(() => {
                    display.days.textContent = Math.floor(timer / (60 * 60 * 24));
                    display.hours.textContent = Math.floor((timer % (60 * 60 * 24)) / (60 * 60));
                    display.minutes.textContent = Math.floor((timer % (60 * 60)) / 60);
                    display.seconds.textContent = timer % 60;
                    timer = timer > 0 ? timer - 1 : duration;
                }, 1000);
            }

            startCountdown(countdownTime);
        };
    </script>
    
      <div class="flex items-center mt-auto">
        <div class="bg-[#1e1e1e] rounded-xl p-2 mr-3">
          <img src="/assets/images/maintenance/IconPC.png" alt="">
        </div>
        <div>
          <span class="text-white font-Inter font-bold">Rose Hotel</span>
          <span class="text-gray-400 text-sm font-Inter">© 2026<br>All rights go to their respective owner(s).</span>
        </div>
      </div>
    </div>
   
    <div class="absolute right-0 w-[1241px] h-[1080px] xl:z-[99] bg-[200px_center] bg-no-repeat" style="background: url(/assets/images/maintenance/Rightbanner.png)"></div>
    <div class="md:w-1/2 flex z-[100] items-center justify-center">
        <div class=" bottom-5 flex justify-center items-center absolute -ml-[800px]" onClick="location.href='#divadi'">
          <span class="animate-bounce rounded-full p-4 bg-[#141414] border-4 border-solid border-[#4d1e1e] text-[#932333] text-sm font-Inter font-bold">Pixel City Nedir?
        <svg class="w-6 h-6 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
        </svg>
    </span>
    </div>
      <div class="relative z-10 flex flex-col items-center">
        <img src="/assets/images/maintenance/Logo(2xsize).png" alt="PixelCity Logo" class="w-full h-full mb-8 drop-shadow-lg">
        <x-modals.modal-wrapper>
          @guest
                <button @click="open = !open"
                    class="rounded-full bg-[#141414] -mt-5 flex flex-row gap-2 font-Inter px-12 py-2 text-xl text-[#932333] transition duration-200 ease-in-out hover:bg-opacity-100 border-2 border-solid border-[#222222]">
                    <img src="/assets/images/maintenance/IconLoginBeta.png" alt="">
                    Login <span class="text-white font-Inter font-bold">BETA</span>
                </button>
        @endguest
            <x-modals.regular-modal x-model="show {{ session()->get('wrong-auth') }}">
            <x-auth.login-form />
        </x-modals.regular-modal>
    </x-modals.modal-wrapper>
      </div>
    </div>
  </div>
  
    <div class="md:w-2/2 flex flex-col justify-start items-start px-52 py-12 bg-[#141414] relative z-10 mt-32">
    <div class="flex items-start gap-3 mb-4" id="divadi">
     <div class="bg-[#982334] py-2 px-2 rounded-2xl"><img src="/assets/images/maintenance/PCNedir.png" alt=""></div>
      <h2 class="text-3xl font-bold text-[#972334] font-Inter mt-1">Rose Hotel NEDİR?</h2>
    </div>
    <p class="text-gray-200 font-Inter w-8/12">
      <span class="font-bold font-Inter">Rose Hotel</span>, nostaljik piksel grafiklerden ilham alarak yaratılmış, tamamen topluluk odaklı bir sanal sosyalleşme oyunudur. Burada herkes kendi avatarını oluşturabilir, kendi alanını tasarlayabilir ve farklı temalarda odalar inşa ederek yaratıcılığını gösterebilir. Oyuncular, şehrin farklı bölgelerini keşfederken yeni arkadaşlıklar kurabilir ve sosyal etkinliklere katılabilir. Amacımız, kullanıcılara sadece bir oyun deneyimi değil, aynı zamanda kendilerini ifade edebilecekleri, keyifli ve güvenli bir dijital ortam sunmaktır. Rose Hotel, tamamen ücretsiz ve herkesin kolayca erişebileceği bir deneyim sunar.
    </p>

    <div class="flex flex-row mt-24 w-full h-full">
    <div class="flex justify-start items-start start-0 w-full h-full bg-cover">
<img src="/assets/images/maintenance/Full.png" alt="Pixel City Avatar">
</div>

    <div class="flex !bg-cover items-end justify-end bottom-0 absolute end-0">
<img src="/assets/images/maintenance/PixelCityBG.png" alt="Pixel City Avatar" class="bg-cover">
</div>
</div>

   </div>

      <div class="flex flex-row mt-auto relative  h-full w-full px-52 py-12 bg-[#101010]">
      <div class="flex items-center mt-auto">
        <div class="bg-[#1e1e1e] rounded-xl p-2 mr-3">
          <img src="/assets/images/maintenance/IconPC.png" alt="">
        </div>
    </div>
        <div>
          <span class="text-white font-Inter font-bold">Rose Hotel</span>
          <span class="text-gray-400 text-sm font-Inter">© 2026<br>Thanks to Cia</span>
        </div>

  <div class="flex flex-row justify-end items-end bottom-0 end-0 h-full w-full gap-5 relative">
      <a href="#" class="text-[#962333] hover:underline flex items-center gap-1 flex-row">
<svg width="34px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#962333"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#962333"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#962333"></path> </g></svg>
<span class="text-xl font-Inter font-bold"></span> INSTAGRAM</a>

      <a href="#" class="text-[#962333] hover:underline items-center gap-1 flex flex-row">
     <svg fill="#962333" width="34px" height="34px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>tiktok</title> <path d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z"></path> </g></svg>
            <span class="text-xl font-Inter font-bold"></span> TIKTOK</a>
    </div>

      </div>


</body>

</html>
