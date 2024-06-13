<!doctype html>
<html dir="ltr" lang="en">

  <!-- Mirrored from softivuspro.com/html/dashhub/create-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2024 07:18:39 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="asstes/images/favicon.html"
      type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet"
      href="assets/fonts/line-awesome/css/line-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select2.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/dropzone.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/quill.min.css" />
   
    <style>
      .submitBtnDiv{
        display: flex;
        justify-content: center;
      }
      .fullWidth{
        width:100% !important;
      }
      .white-box{
        width:40%;
        margin: auto;
      }
    </style>
    <title>DashHub - Multi Component UI Web with Client and Admin
      Dashboard</title>
    <script defer src="index.js"></script><link href="style.css"
      rel="stylesheet"></head>

  <body x-cloak x-data="customizer" :class="$store.app.isDarkMode?'dark':''"
    class="bg-neutral-20 dark:bg-neutral-903">
    <!-- Customizer -->
    <div class="text-neutral-700 dark:text-neutral-10">
      <div
        class="fixed top-0 duration-300 ltr:right-0 ltr:left-auto rtl:left-0 rtl:right-auto bottom-0 w-[312px] overflow-y-auto custom-scrollbar h-screen p-6 xl:p-8 bg-neutral-0 dark:bg-neutral-904 z-[25] shadow-xl"
        x-cloak
        :class="customizerIsOpen?'translate-x-0 opacity-100 visible':'ltr:translate-x-full rtl:-translate-x-full opacity-0 invisible'">
        <div
          class="flex justify-between items-center pb-4 lg:pb-6 mb-4 lg:mb-6 border-b border-dashed border-neutral-40 dark:border-neutral-500">
          <h4 class="text-xl font-semibold">Settings</h4>
          <div class="flex gap-4 items-center shrink-0 text-xl">
            <button @click="$store.app.resetTheme()"><i
                class="las la-redo-alt"></i></button>
            <button @click="closeCustomizer"><i
                class="las la-times"></i></button>
          </div>
        </div>
        <!-- Color Mode -->
        <p class="md:text-lg font-medium mb-6">Mode</p>
        <div class="flex justify-between items-center gap-4 bb-dashed-n30">
          <button
            class="border grow p-6 rounded-lg border-primary-300 dark:border-neutral-500 bg-primary-50 text-primary-300 dark:text-neutral-10 dark:bg-neutral-903"
            @click="$store.app.toggleTheme('light')">
            <i class="las la-sun text-3xl"></i>
          </button>
          <button
            class="border grow p-6 rounded-lg dark:border-primary-300 bg-neutral-0 dark:text-primary-300 dark:bg-neutral-903"
            @click="$store.app.toggleTheme('dark')">
            <i class="las la-moon text-3xl"></i>
          </button>
        </div>

        <!-- direction -->
        <p class="md:text-lg font-medium mb-6">Direction</p>
        <div class="flex justify-between items-center gap-4 bb-dashed-n30">
          <button
            class="border dark:rtl:border-neutral-500 grow p-6 rounded-lg ltr:border-primary-300 ltr:bg-primary-50 ltr:text-primary-300 ltr:dark:text-primary-300 dark:text-neutral-10 dark:bg-neutral-903"
            @click="$store.app.toggleRTL('ltr')">
            <i class="las la-align-left text-3xl"></i>
          </button>
          <button
            class="border dark:ltr:border-neutral-500 grow p-6 rounded-lg rtl:border-primary-300 bg-neutral-0 rtl:bg-primary-50 rtl:text-primary-300 dark:bg-neutral-903"
            @click="$store.app.toggleRTL('rtl')">
            <i class="las la-align-right text-3xl"></i>
          </button>
        </div>

        <!-- Contrast -->
        <p class="md:text-lg font-medium mb-6">Contrast</p>
        <div class="flex justify-between items-center gap-4 bb-dashed-n30">
          <button class="border grow p-6 rounded-lg"
            @click="$store.app.toggleContrast('low')"
            :class="$store.app.contrast=='low'?'border-primary-300 bg-primary-50 text-primary-300':'border-neutral-30 dark:border-neutral-500'">
            <i class="las la-adjust text-3xl"></i>
          </button>
          <button
            class="border flex items-center h-[86px] justify-center grow p-6 rounded-lg"
            @click="$store.app.toggleContrast('high')"
            :class="$store.app.contrast=='high'?'border-primary-300 bg-primary-50 text-primary-300':'border-neutral-30 dark:border-neutral-500'">
            <img src="assets/images/contrast.png" width="24"
              class="dark:brightness-0 dark:invert" alt />
          </button>
        </div>

        <!-- Layout -->
        <p class="md:text-lg font-medium mb-6">Layout</p>
        <div class="grid grid-cols-2 items-center gap-4 bb-dashed-n30">
          <!-- Vertical -->
          <div class="col-span-1 border rounded-lg p-6 cursor-pointer"
            @click="$store.app.toggleMenu('vertical')"
            :class="$store.app.menu==='vertical'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
            <div
              class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
              <div class="flex flex-col gap-1">
                <div class="w-2 h-2 rounded-full"
                  :class="$store.app.menu=='vertical'?'bg-primary-300':'bg-neutral-40'"></div>
                <div class="h-[3px] w-[22px] rounded"
                  :class="$store.app.menu=='vertical'?'bg-primary-200':'bg-neutral-40'"></div>
                <div class="h-[3px] w-[12px] rounded"
                  :class="$store.app.menu=='vertical'?'bg-primary-100':'bg-neutral-40'"></div>
              </div>
              <div class="rounded h-[47px] w-[26px]"
                :class="$store.app.menu=='vertical'?'bg-primary-100':'bg-neutral-40'"></div>
            </div>
          </div>

          <div class="col-span-1 border rounded-lg p-6 cursor-pointer"
            @click="$store.app.toggleMenu('horizontal')"
            :class="$store.app.menu==='horizontal'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
            <div
              class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex flex-col divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
              <div class="flex items-center gap-1">
                <div class="w-2 h-2 rounded-full"
                  :class="$store.app.menu=='horizontal'?'bg-primary-300':'bg-neutral-40'"></div>
                <div class="h-[4px] w-[14px] rounded"
                  :class="$store.app.menu=='horizontal'?'bg-primary-200':'bg-neutral-40'"></div>
                <div class="h-[4px] w-[8px] rounded"
                  :class="$store.app.menu=='horizontal'?'bg-primary-100':'bg-neutral-40'"></div>
              </div>
              <div class="rounded h-[34px] w-[46px]"
                :class="$store.app.menu=='horizontal'?'bg-primary-100':'bg-neutral-40'"></div>
            </div>
          </div>
          <div class="col-span-1 border rounded-lg p-6 cursor-pointer"
            @click="$store.app.toggleMenu('hovered')"
            :class="$store.app.menu==='hovered'?'border-primary-300':'border-neutral-30 dark:border-neutral-500'">
            <div
              class="p-1 rounded-md border border-neutral-30 dark:border-neutral-500 flex divide-x divide-neutral-30 dark:divide-neutral-500 gap-1">
              <div class="flex flex-col gap-1">
                <div class="w-2 h-2 rounded-full"
                  :class="$store.app.menu=='hovered'?'bg-primary-300':'bg-neutral-40'"></div>
                <div class="h-[2px] w-[8px] rounded"
                  :class="$store.app.menu=='hovered'?'bg-primary-200':'bg-neutral-40'"></div>
                <div class="h-[2px] w-[4px] rounded"
                  :class="$store.app.menu=='hovered'?'bg-primary-100':'bg-neutral-40'"></div>
              </div>
              <div class="rounded h-[47px] w-[40px]"
                :class="$store.app.menu=='hovered'?'bg-primary-100':'bg-neutral-40'"></div>
            </div>
          </div>
        </div>

        <!-- strech -->
        <p class="md:text-lg font-medium mb-6">Stretch</p>
        <div class="bb-dashed-n30">
          <button
            class="border grow p-6 flex justify-center items-center rounded-lg border-neutral-30 dark:border-neutral-500 w-full"
            @click="$store.app.toggleStretch()">
            <span class="flex items-center gap-1 text-lg"
              x-show="$store.app.stretch">
              <i class="las la-angle-right"></i>
              <span class="w-8 bb-dashed-n30"></span>
              <i class="las la-angle-left"></i>
            </span>
            <span class="flex items-center gap-1 text-lg text-primary-300"
              x-show="!$store.app.stretch">
              <i class="las la-angle-left"></i>
              <span class="w-28 bb-dashed-n30 !border-primary-300"></span>
              <i class="las la-angle-right"></i>
            </span>
          </button>
        </div>

        <!-- Presets -->
        <p class="md:text-lg font-medium mb-6">Presets</p>
        <div class="grid grid-cols-3 gap-4 bb-dashed-n30">
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='0 167 111'}"
            @click="$store.app.changeColor('0 167 111')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='0 167 111'}"
              class="size-5 duration-300 rounded-full bg-[#00A76F]"></div>
          </div>
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='142 51 255'}"
            @click="$store.app.changeColor('142 51 255')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='142 51 255'}"
              class="size-5 duration-300 rounded-full bg-secondary-300"></div>
          </div>
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='0 184 217'}"
            @click="$store.app.changeColor('0 184 217')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='0 184 217'}"
              class="size-5 duration-300 rounded-full bg-info-300"></div>
          </div>
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='34 197 94'}"
            @click="$store.app.changeColor('34 197 94')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='34 197 94'}"
              class="size-5 duration-300 rounded-full bg-success-300"></div>
          </div>
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='189 123 0'}"
            @click="$store.app.changeColor('189 123 0')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='189 123 0'}"
              class="size-5 duration-300 rounded-full bg-[#BD7B00]"></div>
          </div>
          <div
            :class="{'border-primary-200 dark:border-primary-200':$store.app.currentColor=='255 86 48'}"
            @click="$store.app.changeColor('255 86 48')"
            class="col-span-1 cursor-pointer size-[72px] rounded-md border border-neutral-20 dark:border-neutral-500 flex items-center justify-center">
            <div :class="{'size-8':$store.app.currentColor=='255 86 48'}"
              class="size-5 duration-300 rounded-full bg-error-300"></div>
          </div>
        </div>
        <!-- Full Screen -->
        <button id="fullscreenButton"
          class="w-full rounded-full border py-3 mt-3 flex items-center gap-2 justify-center border-neutral-30 dark:border-neutral-500"><i
            class="las la-expand text-xl full-screen-icon"></i> <span
            id="fullscreen-btn-text">Fullscreen</span></button>
      </div>

      <div x-show="customizerIsOpen" @click="closeCustomizer"
        class="fixed z-[21] bg-neutral-900 bg-opacity-10 inset-0 duration-300"></div>
    </div>

    <!-- loader -->
    <!-- screen loader -->
    <div x-cloak
      class="screen_loader animate__animated duration-700 fixed inset-0 z-[60] grid place-content-center bg-neutral-400">
      <div class="loader"></div>
    </div>

    <!-- Navigation -->

    <!-- Main Content -->
    <main
      :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:m-auto xl:rtl:m-auto xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:m-auto xl:w-full xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
      class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300 fullWidth">
      <div
        :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
        class="p-3 md:p-4 xxl:p-6 ">
        <div class="white-box">
          <h4 class="bb-dashed-n30">Admin Login </h4>
          <div class="flex flex-col gap-4 xxl:gap-6">
            <div>
              <div class="form-input mb-4 xl:mb-6">
                <input type="text" id="post_name" placeholder="Name" />
                <label for="post_name">Email </label>
              </div>
              <div class="form-input mb-4 xl:mb-6">
                <input type="password" id="post_name" placeholder="Name" />
                <label for="post_name">Password </label>
              </div>
              <div class="form-input mb-4 xl:mb-6 d-flex submitBtnDiv">
             <button class="btn-primary" >Login Now </button>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
 

    <!-- js libraries and custom scripts -->
    <script src="assets/js/libs/quill.js"></script>
    <script src="assets/js/libs/dropzone.min.js"></script>
    <script src="assets/js/libs/alpine.collapse.js"></script>
    <script src="assets/js/libs/alpine.persist.js"></script>
    <script defer src="assets/js/libs/alpine.min.js"></script>
    <script src="assets/js/libs/nice-select2.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

  <!-- Mirrored from softivuspro.com/html/dashhub/create-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2024 07:18:39 GMT -->
</html>
