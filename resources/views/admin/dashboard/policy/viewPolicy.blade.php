<!doctype html>
<html dir="ltr" lang="en">

  <!-- Mirrored from softivuspro.com/html/dashhub/file-manager.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jun 2024 07:16:44 GMT -->
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
    <link rel="stylesheet" href="assets/css/flatpicker.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/dropzone.min.css" />
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
    <section
      class="text-neutral-700 dark:text-neutral-20 bg-neutral-0 dark:bg-neutral-904">
      <nav
        :class="[$store.app.sidebar && $store.app.menu == 'vertical' ? 'w-full xl:ltr:ml-[280px] xl:w-[calc(100%-280px)] xl:rtl:mr-[280px]':'w-full', $store.app.sidebar && $store.app.menu == 'hovered' ? 'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' ? 'bg-neutral-20 dark:bg-neutral-903':'bg-neutral-0 dark:bg-neutral-904']"
        class="w-full fixed top-0 p-3 shadow-custom-4 duration-300 z-10">
        <div
          :class="$store.app.menu == 'horizontal' ? 'max-w-[1704px] w-full right-0 left-0 mx-auto' :''"
          class="flex justify-between items-center">
          <div class="flex gap-4 xxl:gap-6 items-center">
            <a x-show="$store.app.menu == 'horizontal'" href="index-2.html"
              class="text-primary-300 flex gap-3 items-center max-xl:!hidden">
              <svg width="36" height="31" viewBox="0 0 36 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M5.84983 19.6902C6.77045 22.2875 6.29443 22.023 9.05473 21.6138C9.51749 22.4779 10.075 23.2875 10.7154 24.0288C9.36212 26.4342 9.2481 25.903 11.3654 27.7111C11.6191 27.9272 12.0388 27.9347 12.2988 27.7282L13.7187 26.6001C14.5399 27.1131 15.4256 27.5417 16.368 27.8675L16.3877 29.6767C16.3901 30.0097 16.6615 30.3307 16.9882 30.3913C19.6952 30.8915 19.2302 31.1703 20.2532 28.5856C21.2084 28.6174 22.1504 28.5391 23.0674 28.368C24.1568 29.9047 24.578 30.976 24.578 30.976H28.5438C24.7251 22.549 16.9367 18.4052 7.65886 17.4716C2.68863 16.9721 -1.09326 17.5743 -1.09326 17.5743C1.82686 17.6454 4.43447 17.9647 6.75975 18.4619L6.16804 18.8116C5.88205 18.9814 5.73949 19.3773 5.84983 19.6902ZM11.5512 19.8554C15.2399 21.2432 18.2984 23.2249 20.6631 25.5567C16.6877 25.5758 13.1896 23.212 11.5512 19.8554Z"
                  fill="currentColor" />
                <path
                  d="M-0.0332031 16.3003C9.19784 15.5779 18.9729 17.1108 25.5304 23.6504C28.1309 26.2097 29.7861 29.3196 30.2476 30.9731H34.4479C33.784 29.0739 32.9393 27.403 31.9527 25.9338C33.5837 24.0222 33.5989 24.5116 31.8866 22.3539C32.4002 21.5311 32.8276 20.6457 33.1531 19.7033L34.9621 19.6834C35.2943 19.6801 35.6154 19.4097 35.6755 19.0827C36.1751 16.375 36.4549 16.8387 33.8709 15.8166C33.9044 14.8205 33.8201 13.8399 33.6362 12.8883L35.1955 11.9649C35.481 11.7948 35.6247 11.4003 35.5138 11.0868C34.5938 8.49065 35.068 8.75282 32.3096 9.16195C31.8454 8.29874 31.2888 7.48884 30.6489 6.74729L31.5412 5.16273C31.7048 4.8728 31.6307 4.45876 31.378 4.24343C29.2829 2.4548 29.8251 2.44588 27.6458 4.17608C26.8231 3.66346 25.9382 3.23381 24.9965 2.90943L24.9768 1.10028C24.9736 0.767082 24.7016 0.446154 24.3762 0.385826C21.6684 -0.114411 22.1321 -0.393969 21.1109 2.19029C20.1162 2.15796 19.1357 2.24215 18.1845 2.42692L17.2605 0.864876C17.092 0.579631 16.6955 0.436229 16.3835 0.54774C13.7881 1.46837 14.0518 0.992445 14.4602 3.75323C13.5973 4.21667 12.7875 4.77378 12.0467 5.41452L10.4621 4.52176C10.173 4.36007 9.75891 4.433 9.54324 4.68591C7.75606 6.78309 7.74737 6.23959 9.47648 8.41984C8.96424 9.24213 8.53625 10.1284 8.21102 11.0699L6.40188 11.0897C6.06952 11.0941 5.74864 11.3653 5.68835 11.6915C5.1868 14.3994 4.90782 13.9349 7.49191 14.9566C7.48489 15.1805 7.48489 15.4048 7.49002 15.6272C3.08598 15.6795 -0.0332031 16.3003 -0.0332031 16.3003ZM19.8561 5.25182C29.1092 4.61855 34.1441 15.1951 28.4383 21.9573C23.5841 17.7268 16.9569 16.0144 10.5263 15.6861C10.3512 10.4237 14.3354 5.70277 19.8561 5.25182Z"
                  fill="currentColor" />
                <path
                  d="M27.3947 8.42188V20.5211C26.5236 19.8794 25.5781 19.2799 24.5679 18.7479V8.42188H27.3947Z"
                  fill="currentColor" />
                <path
                  d="M23.8609 10.0235V18.3825C22.8293 17.8744 22.001 17.539 21.0347 17.1886V10.0234H23.8609V10.0235Z"
                  fill="currentColor" />
                <path
                  d="M20.3287 11.9219V16.9501C19.0562 16.5308 18.2237 16.3363 17.5024 16.1618V11.9219H20.3287Z"
                  fill="currentColor" />
                <path
                  d="M16.7954 13.3516V16.0071C15.7034 15.7787 14.9184 15.6606 13.9697 15.5294V13.3517H16.7954V13.3516Z"
                  fill="currentColor" />
                <path
                  d="M24.8785 30.5117C24.323 29.3202 23.5606 28.2652 23.2722 27.8578C21.8575 28.121 21.179 28.1518 19.9443 28.1115C19.1453 30.1319 19.1732 30.2581 18.8941 30.2581C18.5867 30.2581 17.9976 30.1055 17.0717 29.9346C16.9614 29.9142 16.8486 29.7794 16.8472 29.6669L16.8238 27.5341C15.6126 27.1159 14.9619 26.8301 13.6867 26.0338L12.012 27.3638C11.9726 27.3949 11.91 27.4141 11.8435 27.4141C11.773 27.4141 11.705 27.3925 11.6639 27.3572C11.4285 27.1561 11.2199 26.9835 11.038 26.8326C10.5979 26.4683 10.2188 26.1536 10.192 26.0138C10.1585 25.8353 10.5402 25.2724 11.2745 23.9683C10.4146 22.9731 9.99854 22.3994 9.30685 21.1073C7.95156 21.3074 7.50407 21.4098 7.18441 21.4098C6.84514 21.4098 6.90221 21.2779 6.28329 19.5323C6.24607 19.4264 6.30637 19.26 6.40133 19.203L8.00884 18.2538C6.80591 17.9966 6.42284 17.9107 5.70752 17.7812C15.111 18.2609 23.6152 21.9514 27.8182 30.5117H24.8785ZM10.6314 19.0133L11.1388 20.0528C12.9048 23.6729 16.6252 26.0125 20.6151 26.0125L21.7781 26.0075C18.643 22.9149 16.4191 21.1908 10.6314 19.0133Z"
                  fill="currentColor" />
                <path
                  d="M33.7909 30.5136C33.0922 28.6797 32.3465 27.3451 31.3762 25.9008C31.4883 25.7696 32.7172 24.4156 32.7135 24.2437C32.7092 24.0477 32.1741 23.4564 31.3249 22.3861C31.8251 21.5839 32.297 20.7759 32.7181 19.554L32.8239 19.2479L34.9566 19.224C35.0687 19.2231 35.2031 19.1102 35.2234 18.9995C35.4118 17.9796 35.6173 17.199 35.5252 17.0365C35.4354 16.8779 34.8108 16.683 33.4009 16.1255C33.4473 14.7278 33.3876 14.0246 33.1231 12.6579L34.9622 11.57C35.0573 11.5128 35.1175 11.3467 35.0802 11.2408C34.4517 9.46649 34.5146 9.36278 34.1778 9.36278C33.8583 9.36278 33.4232 9.46225 32.0574 9.66498C31.809 9.20254 31.2966 8.20173 30.3015 7.04927L30.0896 6.80439L31.1404 4.93747C31.1955 4.83979 31.1651 4.66661 31.0796 4.59424C30.2851 3.91603 29.7162 3.35012 29.5304 3.35012C29.3884 3.35012 29.0073 3.66235 28.5665 4.02342C28.1297 4.38081 28.0586 4.43635 27.6777 4.73843C26.3567 3.91548 25.7113 3.64328 24.5408 3.23916L24.5171 1.10619C24.5158 0.993225 24.403 0.859524 24.2926 0.839118C23.9697 0.779014 23.6919 0.722588 23.451 0.673858C22.999 0.581527 22.6718 0.515625 22.4694 0.515625C22.2805 0.515625 22.2411 0.515624 21.8302 1.6023C21.7465 1.82242 21.6521 2.07443 21.5392 2.36057L21.4194 2.66154C20.0097 2.61493 19.3052 2.67849 17.9532 2.94065C16.8625 1.09604 16.8225 0.880934 16.538 0.981852C15.5505 1.33211 14.7814 1.54085 14.6875 1.70132C14.5886 1.87059 14.7751 2.73993 14.9156 3.68722L14.9627 4.00692C13.6525 4.70988 13.0787 5.12994 12.1039 5.97464L10.2365 4.92376C10.2054 4.90603 10.1636 4.89644 10.1173 4.89644C9.90237 4.89644 9.89033 4.99646 9.32982 5.63152C8.96648 6.04377 8.65251 6.39904 8.65072 6.53487C8.64939 6.72555 9.16364 7.286 10.0393 8.38929C9.2168 9.70679 8.94307 10.3592 8.5396 11.5265L6.40713 11.5502C6.29545 11.5518 6.16115 11.6661 6.13997 11.7762C5.95106 12.7979 5.74565 13.5763 5.8376 13.7379C5.93401 13.9078 6.74317 14.1664 7.9626 14.6487C7.94354 15.2295 7.94154 15.2367 7.95435 15.842C8.67591 15.9046 9.38376 15.9851 10.0792 16.0828C9.67087 3.81456 25.5653 0.700732 30.3029 10.9052C31.9871 14.5342 31.7125 18.7912 28.4887 22.6119C23.4556 18.225 17.1842 16.4898 10.5175 16.1472C16.834 17.1109 22.0638 19.5447 25.855 23.3256C28.294 25.726 29.972 28.6476 30.5875 30.5138H33.7909V30.5136Z"
                  fill="currentColor" />
                <path
                  d="M26.9347 8.88281H25.0273V18.473C25.6778 18.8265 26.3158 19.2147 26.9347 19.6341V8.88281Z"
                  fill="currentColor" />
                <path
                  d="M23.4009 10.4844H21.4941V16.8688C22.1968 17.1299 22.7954 17.3766 23.4009 17.6555V10.4844Z"
                  fill="currentColor" />
                <path
                  d="M19.8688 12.375H17.9619V15.7934C18.492 15.9222 19.0882 16.0727 19.8688 16.3142V12.375Z"
                  fill="currentColor" />
                <path
                  d="M16.3356 13.8125H14.4287V15.1302C15.0249 15.2145 15.6196 15.3072 16.3356 15.4461V13.8125Z"
                  fill="currentColor" />
              </svg>
              <span class="h4 shrink-0 max-[380px]:hidden"><span
                  class="h4">Dash</span><span
                  class="text-neutral-700 dark:text-neutral-0 h4">Hub</span></span>
            </a>

            <button :class="$store.app.menu=='horizontal'?'xl:hidden':''"
              @click="$store.app.toggleSidebar()"><i
                class="las la-bars text-2xl"></i></button>

            <form
              :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-0 dark:bg-neutral-904'"
              class="max-w-[357px] max-md:hidden rounded-lg border focus-within:border-primary-300 border-neutral-30 dark:border-neutral-500 p-1 flex items-center">
              <input type="text" class="px-4 w-full bg-transparent text-sm"
                placeholder="Search..." />
              <span
                class="size-8 shrink-0 rounded-full flex items-center justify-center">
                <i class="las la-search text-xl"></i>
              </span>
            </form>
          </div>
          <div class="flex gap-3 xxl:gap-4 items-center">
            <!-- Dark ligth switch -->
            <button
              :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
              x-cloak
              x-show="$store.app.theme === 'light'"
              @click="$store.app.toggleTheme('dark')"
              class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
              <i class="las la-moon"></i>
            </button>
            <button x-cloak x-show="$store.app.theme === 'dark'"
              @click="$store.app.toggleTheme('light')"
              class="flex size-9 items-center justify-center rounded-full border border-neutral-30 bg-neutral-20 text-xl dark:border-neutral-500 dark:bg-neutral-700">
              <i class="las la-sun"></i>
            </button>
            <!-- Language switch -->
            <div
              x-data="{open:false,selected:'English',options:['English','French','Spanish','Arabic']}"
              class="relative">
              <button
                :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
                @click="open = !open"
                class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
                <i class="las la-language"></i>
              </button>
              <div @click.away="open = false" x-show="open"
                class="absolute w-[150px] z-20 bg-neutral-0 dark:bg-neutral-904 top-full ltr:right-0 shadow-lg rtl:left-0 p-2 rounded-xl">
                <ul class="flex flex-col gap-1">
                  <template x-for="option in options">
                    <li><span @click="selected = option; open = false"
                        x-text="option"
                        class="flex cursor-pointer duration-300 hover:text-primary-300 rounded-md px-4 py-1.5 hover:bg-primary-50"
                        :class="selected===option ? 'bg-primary-300 text-neutral-0' : ''"></span></li>
                  </template>
                </ul>
              </div>
            </div>

            <!-- Notification switch -->
            <div class="relative" x-data="{open:false}">
              <span
                class="size-4 text-xs absolute -top-1 -right-1 flex justify-center items-center text-neutral-0 bg-primary-300 rounded-full">
                2 </span>
              <button @click="open = !open"
                :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
                class="flex size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
                <i class="las la-bell"></i>
              </button>
              <div
                @click.away="open = false"
                x-show="open"
                class="absolute top-full z-10 origin-[60%_0] rounded-md bg-neutral-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-neutral-904 ltr:-right-[110px] sm:ltr:right-0 sm:ltr:origin-top-right rtl:-left-[120px] sm:rtl:left-0 sm:rtl:origin-top-left">
                <div
                  class="flex items-center justify-between border-b p-3 dark:border-n500 lg:px-4">
                  <h5 class="h5">Notifications</h5>
                  <a href="#" class="text-xs text-primary-300"> View All </a>
                </div>
                <ul class="flex w-[300px] flex-col p-4">
                  <div
                    class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                    <img src="assets/images/users/user-s-3.png" width="44"
                      height="40" class="shrink-0 rounded-full" alt="img" />
                    <div class="text-sm">
                      <div class="flex gap-1">
                        <span class="font-medium">Benjamin</span>
                        <span>Sent a message</span>
                      </div>
                      <span class="text-xs text-n100 dark:text-n50">1 hour
                        ago</span>
                    </div>
                  </div>
                  <div
                    class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                    <img src="assets/images/users/user-s-4.png" width="44"
                      height="40" class="shrink-0 rounded-full" alt="img" />
                    <div class="text-sm">
                      <div class="flex gap-1">
                        <span class="font-medium">Benjamin</span>
                        <span>Left a Comment</span>
                      </div>
                      <span class="text-xs text-n100 dark:text-n50">1 hour
                        ago</span>
                    </div>
                  </div>
                  <div
                    class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                    <img src="assets/images/users/user-s-2.png" width="44"
                      height="40" class="shrink-0 rounded-full" alt="img" />
                    <div class="text-sm">
                      <div class="flex gap-1">
                        <span class="font-medium">Benjamin</span>
                        <span>Sent a message</span>
                      </div>
                      <span class="text-xs text-n100 dark:text-n50">2 hour
                        ago</span>
                    </div>
                  </div>
                  <div
                    class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                    <img src="assets/images/users/user-s-1.png" width="44"
                      height="40" class="shrink-0 rounded-full" alt="img" />
                    <div class="text-sm">
                      <div class="flex gap-1">
                        <span class="font-medium">Samuel</span>
                        <span>Uploaded a file</span>
                      </div>
                      <span
                        class="text-xs text-n100 dark:text-n50">Yesterday</span>
                    </div>
                  </div>
                  <div
                    class="flex cursor-pointer gap-2 rounded-md p-2 duration-300 hover:bg-primary-300/10">
                    <img src="assets/images/users/user-s-2.png" width="44"
                      height="40" class="shrink-0 rounded-full" alt="img" />
                    <div class="text-sm">
                      <div class="flex gap-1">
                        <span class="font-medium">David</span>
                        <span>Left a Comment</span>
                      </div>
                      <span
                        class="text-xs text-n100 dark:text-n50">Yesterday</span>
                    </div>
                  </div>
                </ul>
              </div>
            </div>

            <!-- customzer  -->
            <button
              :class="$store.app.menu=='horizontal'?'bg-neutral-0 dark:bg-neutral-903':'bg-neutral-20 dark:bg-neutral-903'"
              @click="openCustomizer"
              class="flex animate-spin-slow size-9 items-center justify-center rounded-full border border-neutral-30 text-xl dark:border-neutral-500">
              <i class="las la-cog"></i>
            </button>
            <!-- user profile -->
            <div x-data="dropdown" class="relative shrink-0">
              <div @click="toggle" class="size-9 cursor-pointer">
                <img src="assets/images/users/user-s-4.png" class="rounded-full"
                  alt="profile img" />
              </div>
              <div @click.away="close" x-show="isOpen"
                class="absolute top-full z-20 rounded-md bg-neutral-0 shadow-[0px_6px_30px_0px_rgba(0,0,0,0.08)] duration-300 dark:bg-neutral-904 ltr:right-0 ltr:origin-top-right rtl:left-0 rtl:origin-top-left">
                <div
                  class="flex flex-col items-center border-b border-neutral-30 p-3 text-center dark:border-neutral-500 lg:p-4">
                  <img src="assets/images/users/user-s-4.png" width="60"
                    height="60" class="rounded-full" alt="profile img" />
                  <h6 class="h6 mt-2">William James</h6>
                  <span class="text-sm">james@mail.com</span>
                </div>
                <ul class="flex w-[250px] flex-col p-4">
                  <li>
                    <a href="profile.html"
                      class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                      <span>
                        <i class="las la-user mt-0.5 text-xl"></i>
                      </span>
                      Profile
                    </a>
                  </li>
                  <li>
                    <a href="chat.html"
                      class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                      <span>
                        <i class="las la-envelope mt-0.5 text-xl"></i>
                      </span>
                      Messages
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                      <span>
                        <i class="las la-life-ring mt-0.5 text-xl"></i>
                      </span>
                      Help
                    </a>
                  </li>
                  <li>
                    <a href="user-account.html"
                      class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                      <span>
                        <i class="las la-cog mt-0.5 text-xl"></i>
                      </span>
                      Settings
                    </a>
                  </li>
                  <li>
                    <a href="sign-in.html"
                      class="flex items-center gap-2 rounded-md px-2 py-1.5 duration-300 hover:bg-primary-300/10 hover:text-primary-300">
                      <span>
                        <i class="las la-sign-out-alt mt-0.5 text-xl"></i>
                      </span>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>

      <!-- Vertical Sidebar -->
      <aside
        :class="[$store.app.sidebar?'translate-x-0':'ltr:-translate-x-full rtl:translate-x-full', $store.app.menu == 'vertical'?'block':'hidden', $store.app.menu == 'horizontal'?'max-xl:block':'']"
        class="fixed top-0 z-[12] h-full w-[280px] bg-neutral-0 duration-300 dark:bg-neutral-904 ltr:left-0 rtl:right-0">
        <div class="px-3 xxl:px-4 pt-3 sm:pt-4 xl:pt-5">
          <a href="index-2.html"
            class="text-primary-300 flex gap-3 items-center bb-dashed-n30 xl:pb-4 !mb-0">
            <svg class="rtl:order-2" width="36" height="31" viewBox="0 0 36 31"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5.84983 19.6902C6.77045 22.2875 6.29443 22.023 9.05473 21.6138C9.51749 22.4779 10.075 23.2875 10.7154 24.0288C9.36212 26.4342 9.2481 25.903 11.3654 27.7111C11.6191 27.9272 12.0388 27.9347 12.2988 27.7282L13.7187 26.6001C14.5399 27.1131 15.4256 27.5417 16.368 27.8675L16.3877 29.6767C16.3901 30.0097 16.6615 30.3307 16.9882 30.3913C19.6952 30.8915 19.2302 31.1703 20.2532 28.5856C21.2084 28.6174 22.1504 28.5391 23.0674 28.368C24.1568 29.9047 24.578 30.976 24.578 30.976H28.5438C24.7251 22.549 16.9367 18.4052 7.65886 17.4716C2.68863 16.9721 -1.09326 17.5743 -1.09326 17.5743C1.82686 17.6454 4.43447 17.9647 6.75975 18.4619L6.16804 18.8116C5.88205 18.9814 5.73949 19.3773 5.84983 19.6902ZM11.5512 19.8554C15.2399 21.2432 18.2984 23.2249 20.6631 25.5567C16.6877 25.5758 13.1896 23.212 11.5512 19.8554Z"
                fill="currentColor" />
              <path
                d="M-0.0332031 16.3003C9.19784 15.5779 18.9729 17.1108 25.5304 23.6504C28.1309 26.2097 29.7861 29.3196 30.2476 30.9731H34.4479C33.784 29.0739 32.9393 27.403 31.9527 25.9338C33.5837 24.0222 33.5989 24.5116 31.8866 22.3539C32.4002 21.5311 32.8276 20.6457 33.1531 19.7033L34.9621 19.6834C35.2943 19.6801 35.6154 19.4097 35.6755 19.0827C36.1751 16.375 36.4549 16.8387 33.8709 15.8166C33.9044 14.8205 33.8201 13.8399 33.6362 12.8883L35.1955 11.9649C35.481 11.7948 35.6247 11.4003 35.5138 11.0868C34.5938 8.49065 35.068 8.75282 32.3096 9.16195C31.8454 8.29874 31.2888 7.48884 30.6489 6.74729L31.5412 5.16273C31.7048 4.8728 31.6307 4.45876 31.378 4.24343C29.2829 2.4548 29.8251 2.44588 27.6458 4.17608C26.8231 3.66346 25.9382 3.23381 24.9965 2.90943L24.9768 1.10028C24.9736 0.767082 24.7016 0.446154 24.3762 0.385826C21.6684 -0.114411 22.1321 -0.393969 21.1109 2.19029C20.1162 2.15796 19.1357 2.24215 18.1845 2.42692L17.2605 0.864876C17.092 0.579631 16.6955 0.436229 16.3835 0.54774C13.7881 1.46837 14.0518 0.992445 14.4602 3.75323C13.5973 4.21667 12.7875 4.77378 12.0467 5.41452L10.4621 4.52176C10.173 4.36007 9.75891 4.433 9.54324 4.68591C7.75606 6.78309 7.74737 6.23959 9.47648 8.41984C8.96424 9.24213 8.53625 10.1284 8.21102 11.0699L6.40188 11.0897C6.06952 11.0941 5.74864 11.3653 5.68835 11.6915C5.1868 14.3994 4.90782 13.9349 7.49191 14.9566C7.48489 15.1805 7.48489 15.4048 7.49002 15.6272C3.08598 15.6795 -0.0332031 16.3003 -0.0332031 16.3003ZM19.8561 5.25182C29.1092 4.61855 34.1441 15.1951 28.4383 21.9573C23.5841 17.7268 16.9569 16.0144 10.5263 15.6861C10.3512 10.4237 14.3354 5.70277 19.8561 5.25182Z"
                fill="currentColor" />
              <path
                d="M27.3947 8.42188V20.5211C26.5236 19.8794 25.5781 19.2799 24.5679 18.7479V8.42188H27.3947Z"
                fill="currentColor" />
              <path
                d="M23.8609 10.0235V18.3825C22.8293 17.8744 22.001 17.539 21.0347 17.1886V10.0234H23.8609V10.0235Z"
                fill="currentColor" />
              <path
                d="M20.3287 11.9219V16.9501C19.0562 16.5308 18.2237 16.3363 17.5024 16.1618V11.9219H20.3287Z"
                fill="currentColor" />
              <path
                d="M16.7954 13.3516V16.0071C15.7034 15.7787 14.9184 15.6606 13.9697 15.5294V13.3517H16.7954V13.3516Z"
                fill="currentColor" />
              <path
                d="M24.8785 30.5117C24.323 29.3202 23.5606 28.2652 23.2722 27.8578C21.8575 28.121 21.179 28.1518 19.9443 28.1115C19.1453 30.1319 19.1732 30.2581 18.8941 30.2581C18.5867 30.2581 17.9976 30.1055 17.0717 29.9346C16.9614 29.9142 16.8486 29.7794 16.8472 29.6669L16.8238 27.5341C15.6126 27.1159 14.9619 26.8301 13.6867 26.0338L12.012 27.3638C11.9726 27.3949 11.91 27.4141 11.8435 27.4141C11.773 27.4141 11.705 27.3925 11.6639 27.3572C11.4285 27.1561 11.2199 26.9835 11.038 26.8326C10.5979 26.4683 10.2188 26.1536 10.192 26.0138C10.1585 25.8353 10.5402 25.2724 11.2745 23.9683C10.4146 22.9731 9.99854 22.3994 9.30685 21.1073C7.95156 21.3074 7.50407 21.4098 7.18441 21.4098C6.84514 21.4098 6.90221 21.2779 6.28329 19.5323C6.24607 19.4264 6.30637 19.26 6.40133 19.203L8.00884 18.2538C6.80591 17.9966 6.42284 17.9107 5.70752 17.7812C15.111 18.2609 23.6152 21.9514 27.8182 30.5117H24.8785ZM10.6314 19.0133L11.1388 20.0528C12.9048 23.6729 16.6252 26.0125 20.6151 26.0125L21.7781 26.0075C18.643 22.9149 16.4191 21.1908 10.6314 19.0133Z"
                fill="currentColor" />
              <path
                d="M33.7909 30.5136C33.0922 28.6797 32.3465 27.3451 31.3762 25.9008C31.4883 25.7696 32.7172 24.4156 32.7135 24.2437C32.7092 24.0477 32.1741 23.4564 31.3249 22.3861C31.8251 21.5839 32.297 20.7759 32.7181 19.554L32.8239 19.2479L34.9566 19.224C35.0687 19.2231 35.2031 19.1102 35.2234 18.9995C35.4118 17.9796 35.6173 17.199 35.5252 17.0365C35.4354 16.8779 34.8108 16.683 33.4009 16.1255C33.4473 14.7278 33.3876 14.0246 33.1231 12.6579L34.9622 11.57C35.0573 11.5128 35.1175 11.3467 35.0802 11.2408C34.4517 9.46649 34.5146 9.36278 34.1778 9.36278C33.8583 9.36278 33.4232 9.46225 32.0574 9.66498C31.809 9.20254 31.2966 8.20173 30.3015 7.04927L30.0896 6.80439L31.1404 4.93747C31.1955 4.83979 31.1651 4.66661 31.0796 4.59424C30.2851 3.91603 29.7162 3.35012 29.5304 3.35012C29.3884 3.35012 29.0073 3.66235 28.5665 4.02342C28.1297 4.38081 28.0586 4.43635 27.6777 4.73843C26.3567 3.91548 25.7113 3.64328 24.5408 3.23916L24.5171 1.10619C24.5158 0.993225 24.403 0.859524 24.2926 0.839118C23.9697 0.779014 23.6919 0.722588 23.451 0.673858C22.999 0.581527 22.6718 0.515625 22.4694 0.515625C22.2805 0.515625 22.2411 0.515624 21.8302 1.6023C21.7465 1.82242 21.6521 2.07443 21.5392 2.36057L21.4194 2.66154C20.0097 2.61493 19.3052 2.67849 17.9532 2.94065C16.8625 1.09604 16.8225 0.880934 16.538 0.981852C15.5505 1.33211 14.7814 1.54085 14.6875 1.70132C14.5886 1.87059 14.7751 2.73993 14.9156 3.68722L14.9627 4.00692C13.6525 4.70988 13.0787 5.12994 12.1039 5.97464L10.2365 4.92376C10.2054 4.90603 10.1636 4.89644 10.1173 4.89644C9.90237 4.89644 9.89033 4.99646 9.32982 5.63152C8.96648 6.04377 8.65251 6.39904 8.65072 6.53487C8.64939 6.72555 9.16364 7.286 10.0393 8.38929C9.2168 9.70679 8.94307 10.3592 8.5396 11.5265L6.40713 11.5502C6.29545 11.5518 6.16115 11.6661 6.13997 11.7762C5.95106 12.7979 5.74565 13.5763 5.8376 13.7379C5.93401 13.9078 6.74317 14.1664 7.9626 14.6487C7.94354 15.2295 7.94154 15.2367 7.95435 15.842C8.67591 15.9046 9.38376 15.9851 10.0792 16.0828C9.67087 3.81456 25.5653 0.700732 30.3029 10.9052C31.9871 14.5342 31.7125 18.7912 28.4887 22.6119C23.4556 18.225 17.1842 16.4898 10.5175 16.1472C16.834 17.1109 22.0638 19.5447 25.855 23.3256C28.294 25.726 29.972 28.6476 30.5875 30.5138H33.7909V30.5136Z"
                fill="currentColor" />
              <path
                d="M26.9347 8.88281H25.0273V18.473C25.6778 18.8265 26.3158 19.2147 26.9347 19.6341V8.88281Z"
                fill="currentColor" />
              <path
                d="M23.4009 10.4844H21.4941V16.8688C22.1968 17.1299 22.7954 17.3766 23.4009 17.6555V10.4844Z"
                fill="currentColor" />
              <path
                d="M19.8688 12.375H17.9619V15.7934C18.492 15.9222 19.0882 16.0727 19.8688 16.3142V12.375Z"
                fill="currentColor" />
              <path
                d="M16.3356 13.8125H14.4287V15.1302C15.0249 15.2145 15.6196 15.3072 16.3356 15.4461V13.8125Z"
                fill="currentColor" />
            </svg>
            <span class="h4 shrink-0 rtl:order-1"><span
                class="h4">Dash</span><span
                class="text-neutral-700 dark:text-neutral-0 h4">Hub</span></span>
          </a>
        </div>
        <div
          class="overflow-y-auto h-full px-3 xxl:px-4 pb-6 custom-scrollbar-hovered pt-4">
          <p class="text-xs font-semibold mb-3">Overview</p>
          <ul
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 text-sm font-medium">
            <li>
              <a href="app.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="lab la-app-store text-xl text-primary-300"></i>
                <span>App</span>
              </a>
            </li>
            <li>
              <a href="e-commerce.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-shopping-bag text-xl text-primary-300"></i>
                <span>E-commerce</span>
              </a>
            </li>
            <li>
              <a href="analytics.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-chart-bar text-xl text-primary-300"></i>
                <span>Analytics</span>
              </a>
            </li>
            <li>
              <a href="banking.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-piggy-bank text-xl text-primary-300"></i>
                <span>Banking</span>
              </a>
            </li>
            <li>
              <a href="booking.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-plane-departure text-xl text-primary-300"></i>
                <span>Booking</span>
              </a>
            </li>
            <li>
              <a href="file.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-file text-xl text-primary-300"></i>
                <span>File</span>
              </a>
            </li>
          </ul>
          <p class="text-xs font-semibold mb-3 mt-5">Overview</p>
          <ul
            x-data="{opened:null, setActiveMenu(){
          const submenus = document.querySelectorAll('.submenu-link-v')
          submenus.forEach((submenu) => {
          const currentUrl = window.location.href
          const href = submenu.getAttribute('href')
          const cleanHref = href.replace(/^\.\.\//, '')
          if (currentUrl.includes(cleanHref)) {
              submenu.classList.add('text-primary-300')
              const submenuName = submenu.parentElement.parentElement.getAttribute('data-submenu')
              this.opened = submenuName
          }
          })
    }}"
            x-init="setActiveMenu"
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
            <li class="relative">
              <button
                :class="opened=='user' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='user' ? opened = null : opened='user'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-user-alt text-xl text-primary-300"></i>
                  <span>User</span>
                </span>
                <i
                  :class="opened=='user' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='user'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="user">
                  <li>
                    <a href="user-profile.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Profile</a>
                  </li>
                  <li>
                    <a href="user-cards.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Cards</a>
                  </li>
                  <li>
                    <a href="user-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="create-user.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-user.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                  <li>
                    <a href="user-account.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Account</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='product' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='product' ? opened = null : opened='product'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i
                    class="las la-shopping-basket text-xl text-primary-300"></i>
                  <span>Product</span>
                </span>
                <i
                  :class="opened=='product' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='product'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="product">
                  <li>
                    <a href="product-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="product-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                  <li>
                    <a href="create-product.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-product.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                  <li>
                    <a href="manage-review.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Manage
                      Review</a>
                  </li>
                  <li>
                    <a href="referrals.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Referrals</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='order' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='order' ? opened = null : opened='order'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-shopping-cart text-xl text-primary-300"></i>
                  <span>Order</span>
                </span>
                <i
                  :class="opened=='order' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='order'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="order">
                  <li>
                    <a href="order-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="order-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='invoice' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='invoice' ? opened = null : opened='invoice'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-file-invoice text-xl text-primary-300"></i>
                  <span>Invoice</span>
                </span>
                <i
                  :class="opened=='invoice' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='invoice'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="invoice">
                  <li>
                    <a href="invoice-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="invoice-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                  <li>
                    <a href="create-invoice.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-invoice.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='blog' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='blog' ? opened = null : opened='blog'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-newspaper text-xl text-primary-300"></i>
                  <span>Blog</span>
                </span>
                <i
                  :class="opened=='blog' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='blog'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="blog">
                  <li>
                    <a href="blog-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="blog-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                  <li>
                    <a href="create-blog.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-blog.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='job' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='job' ? opened = null : opened='job'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-briefcase text-xl text-primary-300"></i>
                  <span>Job</span>
                </span>
                <i
                  :class="opened=='job' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='job'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="job">
                  <li>
                    <a href="job-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="job-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                  <li>
                    <a href="create-job.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-job.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="relative">
              <button
                :class="opened=='tour' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='tour' ? opened = null : opened='tour'"
                class="flex w-full items-center justify-between gap-2 hover:bg-primary-50 duration-300 rounded-lg p-2 xxl:px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-map-marked-alt text-xl text-primary-300"></i>
                  <span>Tour</span>
                </span>
                <i
                  :class="opened=='tour' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-lg duration-300"></i>
              </button>
              <div x-show="opened=='tour'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r group-hover:flex border-primary-300"
                  data-submenu="tour">
                  <li>
                    <a href="tour-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">List</a>
                  </li>
                  <li>
                    <a href="tour-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Details</a>
                  </li>
                  <li>
                    <a href="create-tour.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Create</a>
                  </li>
                  <li>
                    <a href="edit-tour.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-v">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="file-manager.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-file text-xl text-primary-300"></i>
                <span>File Manager</span>
              </a>
            </li>
            <li>
              <a href="mail.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i
                  class="las la-envelope-open-text text-xl text-primary-300"></i>
                <span>Mail</span>
              </a>
            </li>
            <li>
              <a href="chat.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i
                  class="lab la-facebook-messenger text-xl text-primary-300"></i>
                <span>Chat</span>
              </a>
            </li>
            <li>
              <a href="calendar.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-calendar-alt text-xl text-primary-300"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="kanban.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-table text-xl text-primary-300"></i>
                <span>Kanban</span>
              </a>
            </li>
          </ul>
          <p class="text-xs font-semibold mb-3 mt-5">Role &amp; Permissions</p>
          <ul
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
            <li>
              <a href="roles.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-cog text-xl text-primary-300"></i>
                <span>Roles</span>
              </a>
            </li>
            <li>
              <a href="permissions.html"
                class="flex items-center gap-2.5 hover:bg-primary-50 duration-300 rounded-lg py-2 px-3 menu-link hover:text-primary-300">
                <i class="las la-user-check text-xl text-primary-300"></i>
                <span>Permissions</span>
              </a>
            </li>
          </ul>
          <div class="py-16 flex flex-col items-center text-center">
            <div class="w-max relative mb-4">
              <img src="assets/images/users/user-s-2.png" class="rounded-full"
                width="60" alt />
              <span
                class="s-text font-semibold inline-flex px-2 py-1 text-neutral-0 bg-primary-300 absolute rounded-lg rounded-bl-none -top-4 -right-8">Free</span>
            </div>
            <h5 class="mb-2">Marvin McKinney</h5>
            <p class="s-text mb-5 xxl:mb-8">exam@gmail.com</p>
            <button class="w-full btn-primary">Upgrade Pro</button>
          </div>
        </div>
      </aside>

      <!-- Hovered -->
      <aside
        :class="[$store.app.sidebar?'translate-x-0':'ltr:-translate-x-full rtl:translate-x-full', $store.app.menu=='hovered'?'block':'hidden']"
        class="fixed top-0 z-[12] h-full xl:w-20 w-[280px] hover:w-[280px] bg-neutral-0 shadow-lg duration-300 dark:bg-neutral-904 hover ltr:left-0 rtl:right-0 group">
        <div class="px-3 xxl:px-4 pt-3 sm:pt-4 lg:pt-6">
          <a href="index-2.html"
            class="text-primary-300 flex gap-3 items-center bb-dashed-n30 !mb-0">
            <svg width="36" height="31" viewBox="0 0 36 31" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5.84983 19.6902C6.77045 22.2875 6.29443 22.023 9.05473 21.6138C9.51749 22.4779 10.075 23.2875 10.7154 24.0288C9.36212 26.4342 9.2481 25.903 11.3654 27.7111C11.6191 27.9272 12.0388 27.9347 12.2988 27.7282L13.7187 26.6001C14.5399 27.1131 15.4256 27.5417 16.368 27.8675L16.3877 29.6767C16.3901 30.0097 16.6615 30.3307 16.9882 30.3913C19.6952 30.8915 19.2302 31.1703 20.2532 28.5856C21.2084 28.6174 22.1504 28.5391 23.0674 28.368C24.1568 29.9047 24.578 30.976 24.578 30.976H28.5438C24.7251 22.549 16.9367 18.4052 7.65886 17.4716C2.68863 16.9721 -1.09326 17.5743 -1.09326 17.5743C1.82686 17.6454 4.43447 17.9647 6.75975 18.4619L6.16804 18.8116C5.88205 18.9814 5.73949 19.3773 5.84983 19.6902ZM11.5512 19.8554C15.2399 21.2432 18.2984 23.2249 20.6631 25.5567C16.6877 25.5758 13.1896 23.212 11.5512 19.8554Z"
                fill="currentColor" />
              <path
                d="M-0.0332031 16.3003C9.19784 15.5779 18.9729 17.1108 25.5304 23.6504C28.1309 26.2097 29.7861 29.3196 30.2476 30.9731H34.4479C33.784 29.0739 32.9393 27.403 31.9527 25.9338C33.5837 24.0222 33.5989 24.5116 31.8866 22.3539C32.4002 21.5311 32.8276 20.6457 33.1531 19.7033L34.9621 19.6834C35.2943 19.6801 35.6154 19.4097 35.6755 19.0827C36.1751 16.375 36.4549 16.8387 33.8709 15.8166C33.9044 14.8205 33.8201 13.8399 33.6362 12.8883L35.1955 11.9649C35.481 11.7948 35.6247 11.4003 35.5138 11.0868C34.5938 8.49065 35.068 8.75282 32.3096 9.16195C31.8454 8.29874 31.2888 7.48884 30.6489 6.74729L31.5412 5.16273C31.7048 4.8728 31.6307 4.45876 31.378 4.24343C29.2829 2.4548 29.8251 2.44588 27.6458 4.17608C26.8231 3.66346 25.9382 3.23381 24.9965 2.90943L24.9768 1.10028C24.9736 0.767082 24.7016 0.446154 24.3762 0.385826C21.6684 -0.114411 22.1321 -0.393969 21.1109 2.19029C20.1162 2.15796 19.1357 2.24215 18.1845 2.42692L17.2605 0.864876C17.092 0.579631 16.6955 0.436229 16.3835 0.54774C13.7881 1.46837 14.0518 0.992445 14.4602 3.75323C13.5973 4.21667 12.7875 4.77378 12.0467 5.41452L10.4621 4.52176C10.173 4.36007 9.75891 4.433 9.54324 4.68591C7.75606 6.78309 7.74737 6.23959 9.47648 8.41984C8.96424 9.24213 8.53625 10.1284 8.21102 11.0699L6.40188 11.0897C6.06952 11.0941 5.74864 11.3653 5.68835 11.6915C5.1868 14.3994 4.90782 13.9349 7.49191 14.9566C7.48489 15.1805 7.48489 15.4048 7.49002 15.6272C3.08598 15.6795 -0.0332031 16.3003 -0.0332031 16.3003ZM19.8561 5.25182C29.1092 4.61855 34.1441 15.1951 28.4383 21.9573C23.5841 17.7268 16.9569 16.0144 10.5263 15.6861C10.3512 10.4237 14.3354 5.70277 19.8561 5.25182Z"
                fill="currentColor" />
              <path
                d="M27.3947 8.42188V20.5211C26.5236 19.8794 25.5781 19.2799 24.5679 18.7479V8.42188H27.3947Z"
                fill="currentColor" />
              <path
                d="M23.8609 10.0235V18.3825C22.8293 17.8744 22.001 17.539 21.0347 17.1886V10.0234H23.8609V10.0235Z"
                fill="currentColor" />
              <path
                d="M20.3287 11.9219V16.9501C19.0562 16.5308 18.2237 16.3363 17.5024 16.1618V11.9219H20.3287Z"
                fill="currentColor" />
              <path
                d="M16.7954 13.3516V16.0071C15.7034 15.7787 14.9184 15.6606 13.9697 15.5294V13.3517H16.7954V13.3516Z"
                fill="currentColor" />
              <path
                d="M24.8785 30.5117C24.323 29.3202 23.5606 28.2652 23.2722 27.8578C21.8575 28.121 21.179 28.1518 19.9443 28.1115C19.1453 30.1319 19.1732 30.2581 18.8941 30.2581C18.5867 30.2581 17.9976 30.1055 17.0717 29.9346C16.9614 29.9142 16.8486 29.7794 16.8472 29.6669L16.8238 27.5341C15.6126 27.1159 14.9619 26.8301 13.6867 26.0338L12.012 27.3638C11.9726 27.3949 11.91 27.4141 11.8435 27.4141C11.773 27.4141 11.705 27.3925 11.6639 27.3572C11.4285 27.1561 11.2199 26.9835 11.038 26.8326C10.5979 26.4683 10.2188 26.1536 10.192 26.0138C10.1585 25.8353 10.5402 25.2724 11.2745 23.9683C10.4146 22.9731 9.99854 22.3994 9.30685 21.1073C7.95156 21.3074 7.50407 21.4098 7.18441 21.4098C6.84514 21.4098 6.90221 21.2779 6.28329 19.5323C6.24607 19.4264 6.30637 19.26 6.40133 19.203L8.00884 18.2538C6.80591 17.9966 6.42284 17.9107 5.70752 17.7812C15.111 18.2609 23.6152 21.9514 27.8182 30.5117H24.8785ZM10.6314 19.0133L11.1388 20.0528C12.9048 23.6729 16.6252 26.0125 20.6151 26.0125L21.7781 26.0075C18.643 22.9149 16.4191 21.1908 10.6314 19.0133Z"
                fill="currentColor" />
              <path
                d="M33.7909 30.5136C33.0922 28.6797 32.3465 27.3451 31.3762 25.9008C31.4883 25.7696 32.7172 24.4156 32.7135 24.2437C32.7092 24.0477 32.1741 23.4564 31.3249 22.3861C31.8251 21.5839 32.297 20.7759 32.7181 19.554L32.8239 19.2479L34.9566 19.224C35.0687 19.2231 35.2031 19.1102 35.2234 18.9995C35.4118 17.9796 35.6173 17.199 35.5252 17.0365C35.4354 16.8779 34.8108 16.683 33.4009 16.1255C33.4473 14.7278 33.3876 14.0246 33.1231 12.6579L34.9622 11.57C35.0573 11.5128 35.1175 11.3467 35.0802 11.2408C34.4517 9.46649 34.5146 9.36278 34.1778 9.36278C33.8583 9.36278 33.4232 9.46225 32.0574 9.66498C31.809 9.20254 31.2966 8.20173 30.3015 7.04927L30.0896 6.80439L31.1404 4.93747C31.1955 4.83979 31.1651 4.66661 31.0796 4.59424C30.2851 3.91603 29.7162 3.35012 29.5304 3.35012C29.3884 3.35012 29.0073 3.66235 28.5665 4.02342C28.1297 4.38081 28.0586 4.43635 27.6777 4.73843C26.3567 3.91548 25.7113 3.64328 24.5408 3.23916L24.5171 1.10619C24.5158 0.993225 24.403 0.859524 24.2926 0.839118C23.9697 0.779014 23.6919 0.722588 23.451 0.673858C22.999 0.581527 22.6718 0.515625 22.4694 0.515625C22.2805 0.515625 22.2411 0.515624 21.8302 1.6023C21.7465 1.82242 21.6521 2.07443 21.5392 2.36057L21.4194 2.66154C20.0097 2.61493 19.3052 2.67849 17.9532 2.94065C16.8625 1.09604 16.8225 0.880934 16.538 0.981852C15.5505 1.33211 14.7814 1.54085 14.6875 1.70132C14.5886 1.87059 14.7751 2.73993 14.9156 3.68722L14.9627 4.00692C13.6525 4.70988 13.0787 5.12994 12.1039 5.97464L10.2365 4.92376C10.2054 4.90603 10.1636 4.89644 10.1173 4.89644C9.90237 4.89644 9.89033 4.99646 9.32982 5.63152C8.96648 6.04377 8.65251 6.39904 8.65072 6.53487C8.64939 6.72555 9.16364 7.286 10.0393 8.38929C9.2168 9.70679 8.94307 10.3592 8.5396 11.5265L6.40713 11.5502C6.29545 11.5518 6.16115 11.6661 6.13997 11.7762C5.95106 12.7979 5.74565 13.5763 5.8376 13.7379C5.93401 13.9078 6.74317 14.1664 7.9626 14.6487C7.94354 15.2295 7.94154 15.2367 7.95435 15.842C8.67591 15.9046 9.38376 15.9851 10.0792 16.0828C9.67087 3.81456 25.5653 0.700732 30.3029 10.9052C31.9871 14.5342 31.7125 18.7912 28.4887 22.6119C23.4556 18.225 17.1842 16.4898 10.5175 16.1472C16.834 17.1109 22.0638 19.5447 25.855 23.3256C28.294 25.726 29.972 28.6476 30.5875 30.5138H33.7909V30.5136Z"
                fill="currentColor" />
              <path
                d="M26.9347 8.88281H25.0273V18.473C25.6778 18.8265 26.3158 19.2147 26.9347 19.6341V8.88281Z"
                fill="currentColor" />
              <path
                d="M23.4009 10.4844H21.4941V16.8688C22.1968 17.1299 22.7954 17.3766 23.4009 17.6555V10.4844Z"
                fill="currentColor" />
              <path
                d="M19.8688 12.375H17.9619V15.7934C18.492 15.9222 19.0882 16.0727 19.8688 16.3142V12.375Z"
                fill="currentColor" />
              <path
                d="M16.3356 13.8125H14.4287V15.1302C15.0249 15.2145 15.6196 15.3072 16.3356 15.4461V13.8125Z"
                fill="currentColor" />
            </svg>
            <span
              class="h4 duration-300 shrink-0 max-[380px]:hidden xl:hidden group-hover:block"><span
                class="h4">Dash</span><span
                class="text-neutral-700 dark:text-neutral-0 h4">Hub</span></span>
          </a>
        </div>
        <div
          class="overflow-y-auto h-full px-3 xxl:px-4 pt-3 sm:pt-4 lg:pt-6 xl:pt-0 group-hover:xl:pt-6 group-hover:xxl:pt-8 pb-24 custom-scrollbar-hovered">
          <p
            class="text-xs font-semibold mb-3 xl:hidden group-hover:block">Overview</p>
          <ul
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium xl:pt-5 group-hover:pt-0">
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="app.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="lab la-app-store text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">App</span>
              </a>
            </li>
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="e-commerce.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-shopping-bag text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">E-commerce</span>
              </a>
            </li>
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="analytics.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-chart-bar text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Analytics</span>
              </a>
            </li>
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="banking.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-piggy-bank text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Banking</span>
              </a>
            </li>
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="booking.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-plane-departure text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Booking</span>
              </a>
            </li>
            <li class="flex xl:justify-center group-hover:justify-start w-full">
              <a href="file.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-file text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">File</span>
              </a>
            </li>
          </ul>
          <p
            class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Overview</p>
          <ul
            x-data="{opened:null, setActiveMenu(){
          const submenus = document.querySelectorAll('.submenu-link-h')
          submenus.forEach((submenu) => {
          const currentUrl = window.location.href
          const href = submenu.getAttribute('href')
          const cleanHref = href.replace(/^\.\.\//, '')
       
          const url = new URL(currentUrl);
          const filename = url.pathname.split('/').pop();

          if (filename==cleanHref) {
              submenu.classList.add('text-primary-300')
              const submenuName = submenu.parentElement.parentElement.getAttribute('data-submenu')
              this.opened = submenuName                
          }
          
          })
    }}"
            x-init="setActiveMenu"
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='user' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='user' ? opened = null : opened='user'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-user-alt text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">User</span>
                </span>
                <i
                  :class="opened=='user' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='user'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="user">
                  <li>
                    <a href="user-profile.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Profile</a>
                  </li>
                  <li>
                    <a href="user-cards.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Cards</a>
                  </li>
                  <li>
                    <a href="user-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="create-user.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-user.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                  <li>
                    <a href="user-account.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Account</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='product' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='product' ? opened = null : opened='product'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i
                    class="las la-shopping-basket text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Product</span>
                </span>
                <i
                  :class="opened=='product' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='product'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="product">
                  <li>
                    <a href="product-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="product-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                  <li>
                    <a href="create-product.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-product.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                  <li>
                    <a href="manage-review.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Manage
                      Review</a>
                  </li>
                  <li>
                    <a href="referrals.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Referrals</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='order' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='order' ? opened = null : opened='order'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-shopping-cart text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Order</span>
                </span>
                <i
                  :class="opened=='order' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='order'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="order">
                  <li>
                    <a href="order-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="order-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='invoice' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='invoice' ? opened = null : opened='invoice'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-file-invoice text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Invoice</span>
                </span>
                <i
                  :class="opened=='invoice' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='invoice'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="invoice">
                  <li>
                    <a href="invoice-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="invoice-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                  <li>
                    <a href="create-invoice.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-invoice.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='blog' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='blog' ? opened = null : opened='blog'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-newspaper text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Blog</span>
                </span>
                <i
                  :class="opened=='blog' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='blog'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="blog">
                  <li>
                    <a href="blog-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="blog-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                  <li>
                    <a href="create-blog.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-blog.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='job' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='job' ? opened = null : opened='job'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-briefcase text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Job</span>
                </span>
                <i
                  :class="opened=='job' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='job'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="job">
                  <li>
                    <a href="job-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="job-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                  <li>
                    <a href="create-job.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-job.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li
              class="relative xl:flex xl:justify-center group-hover:block group-hover:justify-start">
              <button
                :class="opened=='tour' ? 'bg-primary-50 text-primary-300' : ''"
                @click="opened=='tour' ? opened = null : opened='tour'"
                class="flex w-full items-center xl:size-[44px] max-xl:justify-between group-hover:w-full xl:justify-center group-hover:justify-between gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <span class="flex items-center gap-2">
                  <i class="las la-map-marked-alt text-xl text-primary-300"></i>
                  <span class="xl:hidden group-hover:block">Tour</span>
                </span>
                <i
                  :class="opened=='tour' ? 'las la-minus rotate-180 text-primary-300' : 'las la-plus'"
                  class="text-xl duration-300 xl:hidden group-hover:block"></i>
              </button>
              <div x-show="opened=='tour'" x-collapse>
                <ul
                  class="mt-3 ltr:ml-6 rtl:mr-6 flex-col ltr:border-l rtl:border-r xl:hidden group-hover:flex border-primary-300"
                  data-submenu="tour">
                  <li>
                    <a href="tour-list.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">List</a>
                  </li>
                  <li>
                    <a href="tour-details.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Details</a>
                  </li>
                  <li>
                    <a href="create-tour.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Create</a>
                  </li>
                  <li>
                    <a href="edit-tour.html"
                      class="py-2.5 px-3 hover:text-primary-300 duration-300 inline-flex submenu-link-h">Edit</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="file-manager.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-file text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">File Manager</span>
              </a>
            </li>
            <li>
              <a href="mail.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i
                  class="las la-envelope-open-text text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Mail</span>
              </a>
            </li>
            <li>
              <a href="chat.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i
                  class="lab la-facebook-messenger text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Chat</span>
              </a>
            </li>
            <li>
              <a href="calendar.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-calendar-alt text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Calendar</span>
              </a>
            </li>
            <li>
              <a href="kanban.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-table text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Kanban</span>
              </a>
            </li>
          </ul>
          <p
            class="text-xs font-semibold mb-3 xl:hidden group-hover:block mt-5">Role
            &amp; Permissions</p>
          <ul
            class="flex flex-col gap-2 bb-dashed-n30 xl:mb-5 xl:pb-5 m-text font-medium">
            <li>
              <a href="roles.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-cog text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Roles</span>
              </a>
            </li>
            <li>
              <a href="permissions.html"
                class="flex items-center xl:size-[44px] menu-link group-hover:w-full xl:justify-center group-hover:justify-start gap-2 hover:bg-primary-50 duration-300 xl:rounded-full rounded-xl group-hover:rounded-xl py-2 px-3">
                <i class="las la-user-check text-xl text-primary-300"></i>
                <span class="xl:hidden group-hover:block">Permissions</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!-- Horizontal topbar -->
      <nav :class="$store.app.menu=='horizontal'?'hidden xl:block':'hidden'"
        class="fixed z-[9] px-4 top-0 left-0 right-0 w-full mx-auto bg-neutral-0 dark:bg-neutral-904 mt-[60px] md:mt-[66px]">
        <div class="max-w-[1704px] mx-auto">
          <ul class="flex gap-5 items-center">
            <li><a href="app.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">App</a></li>
            <li><a href="e-commerce.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">E-commerce</a></li>
            <li><a href="analytics.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">Analytics</a></li>
            <li><a href="banking.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">Banking</a></li>
            <li><a href="booking.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">Booking</a></li>
            <li><a href="file.html"
                class="inline-flex py-3 text-sm font-medium menu-horizontal">File</a></li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">User
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="user-profile.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Profile</a></li>
                <li><a href="user-cards.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Cards</a></li>
                <li><a href="user-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="create-user.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-user.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
                <li><a href="user-account.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Account</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Product
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="product-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="product-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
                <li><a href="create-product.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-product.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
                <li><a href="manage-review.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Manage
                    Review</a></li>
                <li><a href="referrals.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Referrals</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Order
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="order-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="order-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Invoice
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="invoice-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="invoice-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
                <li><a href="create-invoice.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-invoice.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Blog
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="blog-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="blog-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
                <li><a href="create-blog.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-blog.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Job
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="job-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="job-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
                <li><a href="create-job.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-job.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Tour
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="tour-list.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">List</a></li>
                <li><a href="tour-details.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Details</a></li>
                <li><a href="create-tour.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Create</a></li>
                <li><a href="edit-tour.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Edit</a></li>
              </ul>
            </li>
            <li class="relative group">
              <button
                class="inline-flex py-3 text-sm font-medium items-center gap-2">Others
                <i class="las la-plus group-hover:hidden text-lg"></i><i
                  class="las la-minus hidden text-lg group-hover:inline-block"></i></button>
              <ul
                class="absolute invisible group-hover:visible translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 top-full z-10 left-0 w-[180px] p-1.5 rounded-lg shadow-[rgba(100,100,111,0.2)_0px_7px_29px_0px] text-sm duration-300 bg-neutral-0 dark:bg-neutral-904">
                <li><a href="file-manager.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">File
                    Manager</a></li>
                <li><a href="mail.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Mail</a></li>
                <li><a href="chat.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Chat</a></li>
                <li><a href="calendar.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Calendar</a></li>
                <li><a href="kanban.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Kanban</a></li>
                <li><a href="roles.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Roles</a></li>
                <li><a href="permissions.html"
                    class="py-1.5 px-2 rounded-md hover:bg-primary-50 hover:text-primary-300 duration-300 block submenu-horizontal">Permissions</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Sidebar Overlay -->
      <div @click="$store.app.sidebar=false"
        :class="$store.app.sidebar?'block':'hidden'"
        class="fixed inset-0 z-[11] bg-neutral-900/80 xl:hidden"></div>
    </section>

    <!-- Main Content -->
    <main
      :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
      class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300">
      <div
        :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
        class="p-3 md:p-4 xxl:p-6">
        <div x-data="{activeTab:'list'}" class="white-box">
          <div class="flex justify-between items-center bb-dashed-n30">
            <h4>File Manager</h4>
            <button class="btn-primary-outlined"><i class="las la-upload"></i>
              Upload</button>
          </div>

          <div
            class="flex justify-between flex-wrap gap-5 items-center bb-dashed-n30">
            <form
              class="max-w-[337px] rounded-full bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-1 flex">
              <input type="text" class="px-4 py-2 w-full bg-transparent"
                placeholder="Search..." />
              <button
                class="size-10 shrink-0 rounded-full bg-primary-300 text-neutral-0 flex items-center justify-center">
                <i class="las la-search text-2xl"></i>
              </button>
            </form>
            <div class="flex items-center gap-4 flex-wrap">
              <button class="flex items-center gap-2 font-semibold">
                <input type="text" class="bg-transparent w-[100px]"
                  placeholder="Select Date" id="filedate" />
                <i class="las la-angle-down text-xl"></i>
              </button>

              <div
                x-data="{isOpen:false,selected:'All Type', items:['All Type', 'Folder','Image','Powerpoint','Zip','Audio','Video','Excel','Word']}"
                class="relative max-w-max w-full">
                <div @click="isOpen=!isOpen"
                  class="relative flex cursor-pointer items-center gap-1.5 font-semibold justify-between">
                  <span x-text="selected"></span>
                  <i class="las la-angle-down text-lg duration-300"
                    :class="isOpen?'rotate-180':'rotate-0'"></i>
                </div>
                <div x-show="isOpen" @click.away="isOpen=false"
                  class="absolute min-w-max custom-scrollbar whitespace-nowrap rtl:left-0 ltr:right-0 top-full z-10 flex max-h-[200px] w-full flex-col gap-1 overflow-y-auto rounded-lg bg-neutral-0 p-1 shadow-xl dark:bg-neutral-904">
                  <template x-for="item in items">
                    <div @click="selected=item, isOpen=false"
                      :class="selected===item?'bg-primary-300  text-neutral-0':'hover:bg-primary-50 dark:hover:bg-neutral-903'"
                      class="cursor-pointer rounded-md px-4 py-2 duration-300"
                      x-text="item"></div>
                  </template>
                </div>
              </div>

              <div
                class="p-2 border border-neutral-30 dark:border-neutral-500 rounded-lg flex gap-2">
                <button
                  :class="activeTab == 'menu' ? 'bg-primary-300/10 text-primary-300' : ''"
                  @click="activeTab = 'menu'"
                  class="size-9 flex items-center rounded-lg justify-center text-2xl">
                  <i class="las la-border-all"></i>
                </button>
                <button
                  :class="activeTab == 'list' ? 'bg-primary-300/10 text-primary-300' : ''"
                  @click="activeTab = 'list'"
                  class="size-9 flex items-center rounded-lg justify-center text-2xl">
                  <i class="las la-align-left"></i>
                </button>
              </div>
            </div>
          </div>

          <div x-data="customizer">
            <div x-show="activeTab=='menu'"
              class="flex flex-col gap-4 xxl:gap-6">
              <div class="n20-box overflow-x-hidden">
                <div class="flex justify-between items-center bb-dashed-n30">
                  <div x-data="modal" class="flex items-center gap-4">
                    <h4>Folders</h4>
                    <button @click="openModal"
                      class="size-7 rounded-full bg-primary-300 text-neutral-0 flex items-center justify-center"><i
                        class="las la-plus text-lg"></i></button>
                    <template x-teleport="body">
                      <div
                        class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                        :class="isOpen && '!block'">
                        <div
                          class="flex min-h-screen items-center justify-center px-4"
                          @click.self="closeModal">
                          <div x-show="isOpen" x-transition
                            x-transition.duration.300
                            class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                            <div
                              class="mb-4 flex items-center justify-between bb-dashed-n30">
                              <h4>New Folder</h4>
                              <i class="las la-times cursor-pointer text-xl"
                                @click="closeModal"></i>
                            </div>
                            <div class="form-input">
                              <input type="text" id="folder_name"
                                placeholder="Folder" />
                              <label for="folder_name">Folder Name</label>
                            </div>
                            <form action="#" class="single-file my-4 xl:my-6">
                              <div
                                class="flex flex-col items-center text-center clickable-single cursor-pointer bg-neutral-20 border border-neutral-30 dark:border-neutral-500 dark:bg-neutral-903 rounded-xl p-6 lg:p-10">
                                <img src="assets/images/single-file.png"
                                  class="mb-6" alt />
                                <h5 class="font-semibold mb-4">Drop or Select
                                  file</h5>
                                <p>Drop files here or click <span
                                    class="text-primary-300">Browse</span>
                                  through your machine</p>
                              </div>
                            </form>
                            <div class="flex gap-4 xxl:gap-6">
                              <button class="btn-primary w-full">Upload</button>
                              <button
                                class="btn-primary-outlined w-full">Create</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>
                  </div>
                  <a href="#" class="h6 flex items-center gap-3">View All <i
                      class="las la-arrow-right text-xl"></i></a>
                </div>
                <div class="overflow-x-auto">
                  <div
                    x-data="{files:['Projects','Work','Training','Sports','Docs','Downloads']}"
                    class="grid grid-cols-12 gap-4 xxl:gap-6">
                    <template x-for="file in files">
                      <div
                        class="white-box col-span-12 md:col-span-6 lg:col-span-4 xxxl:col-span-3">
                        <div
                          class="flex justify-between items-start mb-4 xl:mb-6">
                          <img src="assets/images/folder.png" alt />
                          <div x-data="{ fav: false }" class="flex gap-4">
                            <button @click="fav = !fav"
                              class="size-8 rounded-full hover:bg-neutral-40 hover:dark:bg-neutral-500 duration-300 flex items-center justify-center">
                              <i
                                :class="fav ? 'las la-star text-warning-300' : 'lar la-star'"
                                class="text-xl"></i>
                            </button>
                            <div x-data="dropdown"
                              class="relative flex justify-center"
                              @click.away="close()">
                              <i
                                class="las la-ellipsis-v cursor-pointer text-2xl"
                                @click="toggle()"></i>
                              <ul class="horiz-option"
                                :class="isOpen?'show':'hide'">
                                <li>
                                  <span
                                    class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                    <i class="las la-link text-xl"></i> Copy
                                    Link </span>
                                </li>
                                <li x-data="modal">
                                  <span @click="openModal"
                                    class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903"><i
                                      class="las la-share-alt-square text-xl"></i>
                                    Share</span>
                                  <template x-teleport="body">
                                    <div
                                      class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                      :class="isOpen && '!block'">
                                      <div
                                        class="flex min-h-screen items-center justify-center px-4"
                                        @click.self="closeModal">
                                        <div x-show="isOpen" x-transition
                                          x-transition.duration.300
                                          class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                          <div
                                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                                            <h4>Invite</h4>
                                            <i
                                              class="las la-times cursor-pointer text-xl"
                                              @click="closeModal"></i>
                                          </div>
                                          <div>
                                            <form
                                              class="rounded-xl bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-2 flex mb-7 xxl:mb-10">
                                              <input type="text"
                                                class="px-4 py-2 w-full bg-transparent"
                                                placeholder="Enter Email..." />
                                              <button
                                                class="size-10 shrink-0 rounded-lg bg-primary-300 text-neutral-0 flex items-center justify-center">
                                                <i
                                                  class="las la-arrow-right text-2xl"></i>
                                              </button>
                                            </form>
                                            <div
                                              class="flex flex-col gap-5 xxl:gap-8 mb-7 xxl:mb-10">
                                              <div
                                                class="flex justify-between items-center">
                                                <div
                                                  class="flex items-center gap-2 md:gap-4">
                                                  <img
                                                    src="assets/images/avatar/avatar-big-1.png"
                                                    class="w-8 lg:w-14 rounded-full"
                                                    alt="avatar" />
                                                  <div>
                                                    <p
                                                      class="mb-1 l-text font-medium">Arlene
                                                      McCoy</p>
                                                    <p
                                                      class="s-text">example@gmail.com</p>
                                                  </div>
                                                </div>
                                                <div
                                                  x-data="{selected:'Can View',opened:false}"
                                                  class="relative">
                                                  <div @click="opened = !opened"
                                                    class="flex items-center gap-3 cursor-pointer">
                                                    <span
                                                      class="text-xs xxl:text-base"
                                                      x-text="selected"></span>
                                                    <i
                                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                                  </div>
                                                  <div
                                                    @click.away="opened = false"
                                                    x-show="opened"
                                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                    <span
                                                      @click="selected='Can View',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-eye text-xl"></i>
                                                      Can View</span>
                                                    <span
                                                      @click="selected='Can Edit',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-pen text-xl"></i>
                                                      Can Edit</span>
                                                    <span
                                                      @click="selected='Remove',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-trash text-xl"></i>
                                                      Remove</span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="flex justify-between items-center">
                                                <div
                                                  class="flex items-center gap-2 md:gap-4">
                                                  <img
                                                    src="assets/images/avatar/avatar-big-5.png"
                                                    class="w-8 lg:w-14 rounded-full"
                                                    alt="avatar" />
                                                  <div>
                                                    <p
                                                      class="mb-1 l-text font-medium">Robert
                                                      Fox</p>
                                                    <p
                                                      class="s-text">example@gmail.com</p>
                                                  </div>
                                                </div>
                                                <div
                                                  x-data="{selected:'Can View',opened:false}"
                                                  class="relative">
                                                  <div @click="opened = !opened"
                                                    class="flex items-center gap-3 cursor-pointer">
                                                    <span
                                                      class="text-xs xxl:text-base"
                                                      x-text="selected"></span>
                                                    <i
                                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                                  </div>
                                                  <div
                                                    @click.away="opened = false"
                                                    x-show="opened"
                                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                    <span
                                                      @click="selected='Can View',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-eye text-xl"></i>
                                                      Can View</span>
                                                    <span
                                                      @click="selected='Can Edit',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-pen text-xl"></i>
                                                      Can Edit</span>
                                                    <span
                                                      @click="selected='Remove',opened =false"
                                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-trash text-xl"></i>
                                                      Remove</span>
                                                  </div>
                                                </div>
                                              </div>
                                              <div
                                                class="flex justify-between items-center">
                                                <div
                                                  class="flex items-center gap-2 md:gap-4">
                                                  <img
                                                    src="assets/images/avatar/avatar-big-2.png"
                                                    class="w-8 lg:w-14 rounded-full"
                                                    alt="avatar" />
                                                  <div>
                                                    <p
                                                      class="mb-1 l-text font-medium">Kathryn
                                                      Murphy</p>
                                                    <p
                                                      class="s-text">example@gmail.com</p>
                                                  </div>
                                                </div>
                                                <div
                                                  x-data="{selected:'Can View',opened:false}"
                                                  class="relative">
                                                  <div @click="opened = !opened"
                                                    class="flex items-center gap-3 cursor-pointer">
                                                    <span
                                                      class="text-xs xxl:text-base"
                                                      x-text="selected"></span>
                                                    <i
                                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                                  </div>
                                                  <div
                                                    @click.away="opened = false"
                                                    x-show="opened"
                                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                    <span
                                                      @click="selected='Can View',opened =false"
                                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-eye text-xl"></i>
                                                      Can View</span>
                                                    <span
                                                      @click="selected='Can Edit',opened =false"
                                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-pen text-xl"></i>
                                                      Can Edit</span>
                                                    <span
                                                      @click="selected='Remove',opened =false"
                                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                        class="las la-trash text-xl"></i>
                                                      Remove</span>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div
                                            class="flex gap-4 xxl:gap-6 justify-between items-center">
                                            <button class="flex gap-4"><i
                                                class="las la-link text-xl"></i>
                                              <span class="h6">Copy
                                                Link</span></button>
                                            <button class="btn-primary-outlined"
                                              @click="closeModal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </template>
                                </li>
                                <li x-data="modal">
                                  <span @click="openModal"
                                    class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                    <i class="las la-pen text-xl"></i> Edit
                                  </span>
                                  <template x-teleport="body">
                                    <div
                                      class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                      :class="isOpen && '!block'">
                                      <div
                                        class="flex min-h-screen items-center justify-center px-4"
                                        @click.self="closeModal">
                                        <div x-show="isOpen" x-transition
                                          x-transition.duration.300
                                          class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                          <div
                                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                                            <h4>Edit Folder</h4>
                                            <i
                                              class="las la-times cursor-pointer text-xl"
                                              @click="closeModal"></i>
                                          </div>
                                          <div class="form-input">
                                            <input type="text"
                                              value="Folder Name" id="file"
                                              placeholder="Folder" />
                                            <label for="file">Folder
                                              Name</label>
                                          </div>
                                          <form action="#"
                                            class="single-file my-4 xl:my-6">
                                            <div
                                              class="flex flex-col items-center text-center clickable-single cursor-pointer bg-neutral-20 border border-neutral-30 dark:border-neutral-500 dark:bg-neutral-903 rounded-xl p-6 lg:p-10">
                                              <img
                                                src="assets/images/single-file.png"
                                                class="mb-6" alt />
                                              <h5
                                                class="font-semibold mb-4">Drop
                                                or Select file</h5>
                                              <p>Drop files here or click <span
                                                  class="text-primary-300">Browse</span>
                                                through your machine</p>
                                            </div>
                                          </form>
                                          <div class="flex gap-4 xxl:gap-6">
                                            <button
                                              class="btn-primary w-full">Upload</button>
                                            <button
                                              class="btn-primary-outlined w-full">Create</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </template>
                                </li>
                                <li x-data="modal">
                                  <span @click="openModal"
                                    class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                    <i class="las la-trash text-xl"></i> Delete
                                  </span>
                                  <template x-teleport="body">
                                    <div
                                      class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                      :class="isOpen && '!block'">
                                      <div
                                        class="flex min-h-screen items-center justify-center px-4"
                                        @click.self="closeModal">
                                        <div x-show="isOpen" x-transition
                                          x-transition.duration.300
                                          class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                          <div
                                            class="flex justify-between items-center bb-dashed-n30">
                                            <h5>Delete Folder?</h5>
                                            <button type="button"
                                              @click="closeModal"><i
                                                class="las la-times text-xl"></i></button>
                                          </div>
                                          <div class="p-5 text-center">
                                            <div
                                              class="mx-auto w-fit rounded-full bg-error-300/10 p-4 text-error-300 ring-2 ring-error-300/50">
                                              <i
                                                class="las la-trash text-5xl"></i>
                                            </div>
                                            <div
                                              class="mx-auto mt-5 text-base sm:w-3/4">Are
                                              you sure you want to delete?</div>

                                            <div
                                              class="mt-8 flex items-center justify-center">
                                              <button type="button"
                                                class="btn-error-outlined xl:py-2 xl:px-5"
                                                @click="closeModal">Cancel</button>
                                              <button type="button"
                                                class="btn-primary ltr:ml-4 rtl:mr-4 xl:py-2 xl:px-5"
                                                @click="closeModal">Delete</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </template>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <h5 @click="openCustomizer" class="mb-3"
                          x-text="file"></h5>
                        <p class="mb-5">1.12 Gb • 200 files</p>
                        <div class="flex items-center">
                          <img
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                            src="assets/images/avatar/avatar-1.png" alt />
                          <img
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                            src="assets/images/avatar/avatar-2.png" alt />
                          <img
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                            src="assets/images/avatar/avatar-3.png" alt />
                          <img
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                            src="assets/images/avatar/avatar-4.png" alt />
                          <div
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3 bg-primary-300 font-semibold text-neutral-0 m-text flex items-center justify-center">9+</div>
                        </div>
                      </div>
                    </template>
                  </div>
                </div>
              </div>

              <div class="n20-box">
                <div class="flex justify-between items-center bb-dashed-n30">
                  <div x-data="modal" class="flex items-center gap-4">
                    <h4>Recent Files</h4>
                    <button @click="openModal"
                      class="size-7 rounded-full bg-primary-300 text-neutral-0 flex items-center justify-center"><i
                        class="las la-plus text-lg"></i></button>
                    <template x-teleport="body">
                      <div
                        class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                        :class="isOpen && '!block'">
                        <div
                          class="flex min-h-screen items-center justify-center px-4"
                          @click.self="closeModal">
                          <div x-show="isOpen" x-transition
                            x-transition.duration.300
                            class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                            <div
                              class="mb-4 flex items-center justify-between bb-dashed-n30">
                              <h4>Upload Files</h4>
                              <i class="las la-times cursor-pointer text-xl"
                                @click="closeModal"></i>
                            </div>
                            <form action="#" class="single-file my-4 xl:my-6">
                              <div
                                class="flex flex-col items-center text-center clickable-single cursor-pointer bg-neutral-20 border border-neutral-30 dark:border-neutral-500 dark:bg-neutral-903 rounded-xl p-6 lg:p-10">
                                <img src="assets/images/single-file.png"
                                  class="mb-6" alt />
                                <h5 class="font-semibold mb-4">Drop or Select
                                  file</h5>
                                <p>Drop files here or click <span
                                    class="text-primary-300">Browse</span>
                                  through your machine</p>
                              </div>
                            </form>
                            <div class="flex gap-4 xxl:gap-6">
                              <button class="btn-primary w-full">Upload</button>
                              <button
                                class="btn-primary-outlined w-full">Create</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>
                  </div>
                  <a href="#" class="h6 flex items-center gap-3">View All <i
                      class="las la-arrow-right text-xl"></i></a>
                </div>
                <div
                  x-data="{files:[
                  { id: 1, title: 'Trinidad samuel.mp4', icon: 'las la-file-video', class: 'secondary', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 2, title: 'Trinidad samuel.jpg', icon: 'las la-file-image', class: 'text-success-300 border-success-300/40 bg-success-300/20', users: ['./assets/images/avatar/avatar-1.png', ] },
                  { id: 3, title: 'Marketing Report.pdf', icon: 'las la-file-pdf', class: 'text-warning-300 border-warning-300/40 bg-warning-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 4, title: 'Project Design.txt', icon: 'las la-file-word', class: 'text-error-300 border-error-300/40 bg-error-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 5, title: 'Budget_2024.rx', icon: 'las la-file-prescription', class: 'text-info-300 border-info-300/40 bg-info-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 6, title: 'Social Calender.pptx', icon: 'las la-file-powerpoint', class: 'text-secondary-300 border-secondary-300/40 bg-secondary-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 7, title: 'Meeting Notes.csv', icon: 'las la-file-csv', class: 'text-success-300 border-success-300/40 bg-success-300/20', users: ['./assets/images/avatar/avatar-1.png', ] },
                  { id: 8, title: 'Marketing Report.mp3', icon: 'las la-file-audio', class: 'text-warning-300 border-warning-300/40 bg-warning-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 9, title: 'Project Design.xls', icon: 'las la-file-excel', class: 'text-error-300 border-error-300/40 bg-error-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 10, title: 'Budget_2024.doc', icon: 'las la-file-alt', class: 'text-info-300 border-info-300/40 bg-info-300/20', users: [ './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 11, title: 'Project Design.html', icon: 'las la-file-code', class: 'text-error-300 border-error-300/40 bg-error-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png', './assets/images/avatar/avatar-4.png'] },
                  { id: 12, title: 'Japan_trip.mp4', icon: 'las la-file-video', class: 'text-info-300 border-info-300/40 bg-info-300/20', users: ['./assets/images/avatar/avatar-1.png', './assets/images/avatar/avatar-2.png'] }
                ]}"
                  class="grid grid-cols-12 gap-4 xxl:gap-6">
                  <template x-for="{id, title, icon, class, users} in files">
                    <div
                      class="white-box col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-3">
                      <div
                        class="flex justify-between items-start mb-4 xl:mb-6">
                        <div
                          class="size-14 flex rounded-lg items-center justify-center border border-primary-300/60 text-primary-300 bg-primary-300/10">
                          <i :class="icon" class="text-3xl"></i>
                        </div>
                        <div x-data="{ fav: false }" class="flex gap-4">
                          <button @click="fav = !fav"
                            class="size-8 rounded-full hover:bg-neutral-40 hover:dark:bg-neutral-500 duration-300 flex items-center justify-center">
                            <i
                              :class="fav ? 'las la-star text-warning-300' : 'lar la-star'"
                              class="text-xl"></i>
                          </button>
                          <div x-data="dropdown"
                            class="relative flex justify-center"
                            @click.away="close()">
                            <i class="las la-ellipsis-v cursor-pointer text-2xl"
                              @click="toggle()"></i>
                            <ul class="horiz-option"
                              :class="isOpen?'show':'hide'">
                              <li>
                                <span
                                  class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                  <i class="las la-link text-xl"></i> Copy Link
                                </span>
                              </li>
                              <li x-data="modal">
                                <span @click="openModal"
                                  class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903"><i
                                    class="las la-share-alt-square text-xl"></i>
                                  Share</span>
                                <template x-teleport="body">
                                  <div
                                    class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                    :class="isOpen && '!block'">
                                    <div
                                      class="flex min-h-screen items-center justify-center px-4"
                                      @click.self="closeModal">
                                      <div x-show="isOpen" x-transition
                                        x-transition.duration.300
                                        class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                        <div
                                          class="mb-4 flex items-center justify-between bb-dashed-n30">
                                          <h4>Invite</h4>
                                          <i
                                            class="las la-times cursor-pointer text-xl"
                                            @click="closeModal"></i>
                                        </div>
                                        <div>
                                          <form
                                            class="rounded-xl bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-2 flex mb-7 xxl:mb-10">
                                            <input type="text"
                                              class="px-4 py-2 w-full bg-transparent"
                                              placeholder="Enter Email..." />
                                            <button
                                              class="size-10 shrink-0 rounded-lg bg-primary-300 text-neutral-0 flex items-center justify-center">
                                              <i
                                                class="las la-arrow-right text-2xl"></i>
                                            </button>
                                          </form>
                                          <div
                                            class="flex flex-col gap-5 xxl:gap-8 mb-7 xxl:mb-10">
                                            <div
                                              class="flex justify-between items-center">
                                              <div
                                                class="flex items-center gap-2 md:gap-4">
                                                <img
                                                  src="assets/images/avatar/avatar-big-1.png"
                                                  class="w-8 lg:w-14 rounded-full"
                                                  alt="avatar" />
                                                <div>
                                                  <p
                                                    class="mb-1 l-text font-medium">Arlene
                                                    McCoy</p>
                                                  <p
                                                    class="s-text">example@gmail.com</p>
                                                </div>
                                              </div>
                                              <div
                                                x-data="{selected:'Can View',opened:false}"
                                                class="relative">
                                                <div @click="opened = !opened"
                                                  class="flex items-center gap-3 cursor-pointer">
                                                  <span
                                                    class="text-xs xxl:text-base"
                                                    x-text="selected"></span>
                                                  <i
                                                    class="las la-angle-down text-sm xxl:text-xl"></i>
                                                </div>
                                                <div
                                                  @click.away="opened = false"
                                                  x-show="opened"
                                                  class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                  <span
                                                    @click="selected='Can View',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-eye text-xl"></i>
                                                    Can View</span>
                                                  <span
                                                    @click="selected='Can Edit',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-pen text-xl"></i>
                                                    Can Edit</span>
                                                  <span
                                                    @click="selected='Remove',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-trash text-xl"></i>
                                                    Remove</span>
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              class="flex justify-between items-center">
                                              <div
                                                class="flex items-center gap-2 md:gap-4">
                                                <img
                                                  src="assets/images/avatar/avatar-big-5.png"
                                                  class="w-8 lg:w-14 rounded-full"
                                                  alt="avatar" />
                                                <div>
                                                  <p
                                                    class="mb-1 l-text font-medium">Robert
                                                    Fox</p>
                                                  <p
                                                    class="s-text">example@gmail.com</p>
                                                </div>
                                              </div>
                                              <div
                                                x-data="{selected:'Can View',opened:false}"
                                                class="relative">
                                                <div @click="opened = !opened"
                                                  class="flex items-center gap-3 cursor-pointer">
                                                  <span
                                                    class="text-xs xxl:text-base"
                                                    x-text="selected"></span>
                                                  <i
                                                    class="las la-angle-down text-sm xxl:text-xl"></i>
                                                </div>
                                                <div
                                                  @click.away="opened = false"
                                                  x-show="opened"
                                                  class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                  <span
                                                    @click="selected='Can View',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-eye text-xl"></i>
                                                    Can View</span>
                                                  <span
                                                    @click="selected='Can Edit',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-pen text-xl"></i>
                                                    Can Edit</span>
                                                  <span
                                                    @click="selected='Remove',opened =false"
                                                    class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-trash text-xl"></i>
                                                    Remove</span>
                                                </div>
                                              </div>
                                            </div>
                                            <div
                                              class="flex justify-between items-center">
                                              <div
                                                class="flex items-center gap-2 md:gap-4">
                                                <img
                                                  src="assets/images/avatar/avatar-big-2.png"
                                                  class="w-8 lg:w-14 rounded-full"
                                                  alt="avatar" />
                                                <div>
                                                  <p
                                                    class="mb-1 l-text font-medium">Kathryn
                                                    Murphy</p>
                                                  <p
                                                    class="s-text">example@gmail.com</p>
                                                </div>
                                              </div>
                                              <div
                                                x-data="{selected:'Can View',opened:false}"
                                                class="relative">
                                                <div @click="opened = !opened"
                                                  class="flex items-center gap-3 cursor-pointer">
                                                  <span
                                                    class="text-xs xxl:text-base"
                                                    x-text="selected"></span>
                                                  <i
                                                    class="las la-angle-down text-sm xxl:text-xl"></i>
                                                </div>
                                                <div
                                                  @click.away="opened = false"
                                                  x-show="opened"
                                                  class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                                  <span
                                                    @click="selected='Can View',opened =false"
                                                    class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-eye text-xl"></i>
                                                    Can View</span>
                                                  <span
                                                    @click="selected='Can Edit',opened =false"
                                                    class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-pen text-xl"></i>
                                                    Can Edit</span>
                                                  <span
                                                    @click="selected='Remove',opened =false"
                                                    class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                                      class="las la-trash text-xl"></i>
                                                    Remove</span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div
                                          class="flex gap-4 xxl:gap-6 justify-between items-center">
                                          <button class="flex gap-4"><i
                                              class="las la-link text-xl"></i>
                                            <span class="h6">Copy
                                              Link</span></button>
                                          <button class="btn-primary-outlined"
                                            @click="closeModal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </template>
                              </li>
                              <li x-data="modal">
                                <span @click="openModal"
                                  class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                  <i class="las la-pen text-xl"></i> Edit
                                </span>
                                <template x-teleport="body">
                                  <div
                                    class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                    :class="isOpen && '!block'">
                                    <div
                                      class="flex min-h-screen items-center justify-center px-4"
                                      @click.self="closeModal">
                                      <div x-show="isOpen" x-transition
                                        x-transition.duration.300
                                        class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                        <div
                                          class="mb-4 flex items-center justify-between bb-dashed-n30">
                                          <h4>Edit Folder</h4>
                                          <i
                                            class="las la-times cursor-pointer text-xl"
                                            @click="closeModal"></i>
                                        </div>
                                        <div class="form-input">
                                          <input type="text" value="Folder Name"
                                            :id="title" placeholder="Folder" />
                                          <label :for="title">Folder
                                            Name</label>
                                        </div>
                                        <form action="#"
                                          class="single-file my-4 xl:my-6">
                                          <div
                                            class="flex flex-col items-center text-center clickable-single cursor-pointer bg-neutral-20 border border-neutral-30 dark:border-neutral-500 dark:bg-neutral-903 rounded-xl p-6 lg:p-10">
                                            <img
                                              src="assets/images/single-file.png"
                                              class="mb-6" alt />
                                            <h5 class="font-semibold mb-4">Drop
                                              or Select file</h5>
                                            <p>Drop files here or click <span
                                                class="text-primary-300">Browse</span>
                                              through your machine</p>
                                          </div>
                                        </form>
                                        <div class="flex gap-4 xxl:gap-6">
                                          <button
                                            class="btn-primary w-full">Upload</button>
                                          <button
                                            class="btn-primary-outlined w-full">Create</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </template>
                              </li>
                              <li x-data="modal">
                                <span @click="openModal"
                                  class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903">
                                  <i class="las la-trash text-xl"></i> Delete
                                </span>
                                <template x-teleport="body">
                                  <div
                                    class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                    :class="isOpen && '!block'">
                                    <div
                                      class="flex min-h-screen items-center justify-center px-4"
                                      @click.self="closeModal">
                                      <div x-show="isOpen" x-transition
                                        x-transition.duration.300
                                        class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                        <div
                                          class="flex justify-between items-center bb-dashed-n30">
                                          <h5>Delete File?</h5>
                                          <button type="button"
                                            @click="closeModal"><i
                                              class="las la-times text-xl"></i></button>
                                        </div>
                                        <div class="p-5 text-center">
                                          <div
                                            class="mx-auto w-fit rounded-full bg-error-300/10 p-4 text-error-300 ring-2 ring-error-300/50">
                                            <i
                                              class="las la-trash text-5xl"></i>
                                          </div>
                                          <div
                                            class="mx-auto mt-5 text-base sm:w-3/4">Are
                                            you sure you want to delete?</div>
                                          <div
                                            class="mt-8 flex items-center justify-center">
                                            <button type="button"
                                              class="btn-error-outlined xl:py-2 xl:px-5"
                                              @click="closeModal">Cancel</button>
                                            <button type="button"
                                              class="btn-primary ltr:ml-4 rtl:mr-4 xl:py-2 xl:px-5"
                                              @click="closeModal">Delete</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </template>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <h5 @click="openCustomizer" class="mb-3"
                        x-text="title"></h5>
                      <p class="mb-5">1.12 Gb • 200 files</p>
                      <div class="flex items-center">
                        <template x-for="user in users">
                          <img
                            class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                            :src="user" alt />
                        </template>
                        <!-- <div class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3 bg-primary-300 font-semibold text-neutral-0 m-text flex items-center justify-center">9+</div> -->
                      </div>
                    </div>
                  </template>
                </div>
              </div>
            </div>
            <div x-show="activeTab=='list'">
              <div
                x-data="{dense: false, items: [
                {
                  id:1,
                  title:'Docs',
                  type:'folder',
                  size:'2.24gb',
                  date:'17 Feb 2024',
                  time:'12:30 PM',
                  shared:['./assets/images/avatar/avatar-1.png','./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-4.png'],
                  checked:false
                },
                {
                  id:2,
                  title:'Projects',
                  type:'folder',
                  size:'2.54gb',
                  date:'19 Feb 2024',
                  time:'12:50 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-4.png'],
                  checked:false
                },
                {
                  id:3,
                  title:'Foods',
                  type:'folder',
                  size:'2.54gb',
                  date:'19 Feb 2024',
                  time:'12:50 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-4.png'],
                  checked:false
                },
                {
                  id:4,
                  title:'Sports',
                  type:'folder',
                  size:'2.54gb',
                  date:'19 Feb 2024',
                  time:'12:50 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-5.png',],
                  checked:false
                },
                {
                  id:5,
                  title:'Training',
                  type:'folder',
                  size:'2.54gb',
                  date:'19 Feb 2024',
                  time:'12:50 PM',
                  shared:['./assets/images/avatar/avatar-3.png',],
                  checked:false
                },
                {
                  id:6,
                  title:'Work',
                  type:'folder',
                  size:'2.54gb',
                  date:'19 Feb 2024',
                  time:'12:50 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-4.png'],
                  checked:false
                },
                {
                  id:7,
                  title:'Q1_Report.mp4',
                  type:'mp4',
                  size:'540mb',
                  date:'10 Feb 2024',
                  time:'1:50 PM',
                  shared:['./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-4.png'],
                  checked:false,
                  icon:'las la-file-video text-secondary-300 text-2xl'
                },
                {
                  id:8,
                  title:'Photography.jpg',
                  type:'jpg',
                  size:'50mb',
                  date:'28 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-5.png'],
                  checked:false,
                  icon:'las la-file-image text-success-300 text-2xl'
                },
                {
                  id:9,
                  title:'client_feedback.docx',
                  type:'docx',
                  size:'5mb',
                  date:'28 Mar 2024',
                  time:'3:44 PM',
                  shared:['./assets/images/avatar/avatar-2.png','./assets/images/avatar/avatar-5.png'],
                  checked:false,
                  icon:'las la-file-word text-error-300 text-2xl'
                },
                {
                  id:10,
                  title:'Innovation Engine.ppt',
                  type:'ppt',
                  size:'3mb',
                  date:'21 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-1.png'],
                  checked:false,
                  icon:'las la-file-powerpoint text-error-300 text-2xl'
                },
                {
                  id:11,
                  title:'Q3_report.csv',
                  type:'csv',
                  size:'13mb',
                  date:'25 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-1.png'],
                  checked:false,
                  icon:'las la-file-csv text-info-300 text-2xl'
                },
                {
                  id:12,
                  title:'Q1_Report.mp4',
                  type:'mp4',
                  size:'540mb',
                  date:'10 Feb 2024',
                  time:'1:50 PM',
                  shared:['./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-4.png'],
                  checked:false,
                  icon:'las la-file-video text-secondary-300 text-2xl'
                },
                {
                  id:13,
                  title:'Photography.jpg',
                  type:'jpg',
                  size:'50mb',
                  date:'28 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-5.png'],
                  checked:false,
                  icon:'las la-file-image text-success-300 text-2xl'
                },
                {
                  id:14,
                  title:'client_feedback.docx',
                  type:'docx',
                  size:'5mb',
                  date:'28 Mar 2024',
                  time:'3:44 PM',
                  shared:['./assets/images/avatar/avatar-2.png','./assets/images/avatar/avatar-5.png'],
                  checked:false,
                  icon:'las la-file-word text-error-300 text-2xl'
                },
                {
                  id:15,
                  title:'Innovation Engine.ppt',
                  type:'ppt',
                  size:'3mb',
                  date:'21 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-5.png','./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-1.png'],
                  checked:false,
                  icon:'las la-file-powerpoint text-error-300 text-2xl'
                },
                {
                  id:16,
                  title:'Q3_report.csv',
                  type:'csv',
                  size:'13mb',
                  date:'25 Feb 2024',
                  time:'3:54 PM',
                  shared:['./assets/images/avatar/avatar-3.png','./assets/images/avatar/avatar-1.png'],
                  checked:false,
                  icon:'las la-file-csv text-info-300 text-2xl'
                },
              ],     handleSelect(e){
          const {name,checked} = e.target
          if(name=='select-all'){
            this.items= this.items.map(file => ({...file,checked:checked}))
          }  
          this.isAllChecked()       
        },
        isAllChecked(){
          return this.items.every(item => item.checked==true)
        } } "
                class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                  <thead class="text-left">
                    <tr class="bg-neutral-20 dark:bg-neutral-903">
                      <th class="px-6 w-[72px] duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">
                        <label for="checkbox2" class="option">
                          <input type="checkbox" name="select-all"
                            id="checkbox2" :checked="isAllChecked()"
                            @change="handleSelect($event)"
                            aria-checked="false" />
                          <span class="checkbox primary"></span>
                        </label>
                      </th>
                      <th class="px-6 duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">Name</th>
                      <th class="px-6 duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">Size</th>
                      <th class="px-6 duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">Type</th>
                      <th class="px-6 duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">Modified</th>
                      <th class="px-6 duration-300"
                        :class="dense? 'py-2': 'py-3 lg:py-5'">Shared</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <template x-for="file in items">
                      <tr
                        class="border-b border-neutral-30 duration-300 hover:bg-neutral-20 dark:border-neutral-500 dark:hover:bg-neutral-903"
                        :class="file.checked?'!bg-primary-300/10':'bg-neutral-0 dark:bg-neutral-904'">
                        <td class="px-6 w-[72px]"
                          :class="dense? 'py-1.5': 'py-3'">
                          <label :for="file.id" class="option">
                            <input type="checkbox" :id="file.id" :name="user.id"
                              @change="handleSelect($event)"
                              x-model="file.checked" aria-checked="false" />
                            <span class="checkbox primary"></span>
                          </label>
                        </td>
                        <td class="px-6" :class="dense? 'py-1.5': 'py-3'"
                          @click="openCustomizer">
                          <div class="flex items-center gap-3">
                            <i x-show="file.type!='folder'" :class="file.icon"
                              class="text-2xl"></i>
                            <img x-show="file.type=='folder'"
                              src="assets/images/folder.png" width="24"
                              height="24" alt />
                            <p class="m-text font-medium"
                              x-text="file.title"></p>
                          </div>
                        </td>
                        <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                          <span class="m-text" x-text="file.size"></span>
                        </td>
                        <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                          <span class="m-text" x-text="file.type"></span>
                        </td>
                        <td class="px-6" :class="dense? 'py-1.5': 'py-3'">
                          <div>
                            <p class="m-text font-medium mb-1"
                              x-text="file.date"></p>
                            <span class="text-xs" x-text="file.time"></span>
                          </div>
                        </td>
                        <td>
                          <div class="flex items-center">
                            <template x-for="img in file.shared">
                              <img
                                class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3"
                                :src="img" alt />
                            </template>
                            <div x-show="file.shared.length>2"
                              class="size-8 rounded-full border border-neutral-0 dark:border-neutral-500 -mr-3 bg-primary-300 font-semibold text-neutral-0 text-xs flex items-center justify-center">2+</div>
                          </div>
                        </td>
                        <td>
                          <div class="flex items-center gap-3">
                            <button @click="fav = !fav" x-data="{fav:false}"
                              class="text-xl">
                              <i x-show="fav"
                                class="las la-star text-warning-300"></i>
                              <i x-show="!fav" class="lar la-star"></i>
                            </button>
                            <div x-data="dropdown"
                              class="relative flex justify-center"
                              @click.away="close()">
                              <i
                                class="las la-ellipsis-v cursor-pointer text-2xl"
                                @click="toggle()"></i>
                              <ul class="horiz-option"
                                :class="isOpen?'show':'hide'">
                                <li>
                                  <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                    <i class="las la-print text-xl"></i> Print
                                  </span>
                                </li>
                                <li>
                                  <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                    <i
                                      class="las la-share-alt-square text-xl"></i>
                                    Share </span>
                                </li>
                                <li>
                                  <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                    <i class="las la-download text-xl"></i>
                                    Download </span>
                                </li>
                                <li>
                                  <span
                                    class="flex items-center hover:text-primary-300 gap-2 cursor-pointer rounded px-3 py-1.5 text-sm leading-normal duration-300 hover:bg-primary-50">
                                    <i class="las la-trash text-xl"></i> Delete
                                  </span>
                                </li>
                              </ul>
                            </div>

                          </div>
                        </td>
                      </tr>
                    </template>
                  </tbody>
                </table>
                <div
                  class="mt-6 flex items-center gap-5 justify-center flex-col md:flex-row md:justify-between whitespace-nowrap">
                  <label for="switch" class="switch flex">
                    <input x-model="dense" id="switch" type="checkbox" />
                    <span class="inner primary"></span>
                    Dense
                  </label>
                  <div
                    class="flex flex-col sm:flex-row justify-center sm:justify-between gap-5">
                    <div class="flex items-center gap-4">
                      <p>Rows per page :</p>
                      <select name="rows" id="rows"
                        class="bg-transparent dark:bg-neutral-904">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                    </div>
                    <div class="flex items-center justify-center gap-4">
                      <p>1-10 of 100</p>
                      <button><i
                          class="las la-angle-left text-xl rtl:rotate-180"></i></button>
                      <button><i
                          class="las la-angle-right text-xl rtl:rotate-180"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="inset-0 fixed bg-black bg-opacity-60 duration-300 z-[29]"
              x-show="customizerIsOpen" @click="closeCustomizer"></div>
            <div
              :class="customizerIsOpen?'translate-x-0 opacity-100 visible':'ltr:translate-x-full rtl:-translate-x-full opacity-0 invisible'"
              class="w-[312px] sm:w-[500px] duration-300 fixed h-full top-0 right-0 z-30 p-4 md:p-6 xxl:p-8 bg-neutral-0 dark:bg-neutral-904 overflow-y-auto custom-scrollbar">
              <div class="flex justify-between items-center bb-dashed-n30">
                <h4 class="text-2xl font-semibold">View Info</h4>
                <div class="flex gap-4 items-center shrink-0 text-2xl">
                  <button x-data="{fav: false}" @click="fav = !fav"
                    class="size-8 rounded-full hover:bg-neutral-40 hover:dark:bg-neutral-500 duration-300 flex items-center justify-center">
                    <i
                      :class="fav ? 'las la-star text-warning-300' : 'lar la-star'"
                      class="text-xl"></i>
                  </button>
                  <button @click="closeCustomizer"><i
                      class="las la-times"></i></button>
                </div>
              </div>

              <div class="bb-dashed-n30">
                <span
                  class="size-14 xxl:size-[76px] flex justify-center bg-secondary-300/10 items-center rounded-lg border border-secondary-300 text-secondary-300 mb-4 xxl:mb-6">
                  <i class="las la-file-pdf text-3xl xxl:text-4xl"></i>
                </span>
                <p class="l-text font-medium">Tutorial-how-to-bake-cake.mp4</p>
              </div>
              <!-- tags -->
              <div x-data="{isOpen:true}" class="bb-dashed-n30">
                <div class="flex justify-between items-center">
                  <p class="l-text font-medium">Tags</p>
                  <button @click="isOpen = !isOpen"
                    class="size-8 rounded-full flex items-center justify-center hover:bg-neutral-30 dark:hover:bg-neutral-500 duration-300">
                    <i class="las la-angle-down text-lg duration-300"
                      :class="isOpen?'rotate-180':''"></i>
                  </button>
                </div>
                <div x-show="isOpen" x-collapse>
                  <div
                    class="bg-neutral-20 dark:bg-neutral-903 mt-4 xxl:mt-6 border border-neutral-40 dark:border-neutral-500 rounded-xl p-3 lg:p-4 xxl:p-5">
                    <div
                      x-data="{
                                selectOpen: false,
                                selectedItems: [ { title: 'Marketing' },
                                    { title: 'Design' },],
                                searchText: '',
                                optionList: [
                                    { title: 'Technology' },
                                    { title: 'Design' },
                                    { title: 'Marketing' },
                                    { title: 'Trending' },
                                    { title: 'Ai' },
                                    { title: 'Business' },
                                ],
                                filteredOptions() {
                                    if (this.searchText.trim() === '') {
                                        return this.optionList;
                                    } else {
                                        return this.optionList.filter(option => option.title.toLowerCase().includes(this.searchText.trim().toLowerCase()));
                                    }
                                },
                                toggleItem(item) {
                                    const index = this.selectedItems.findIndex(selectedItem => selectedItem.title === item.title);
                                    if (index === -1) {
                                        // If item not already selected, add it to selectedItems array
                                        this.selectedItems.push(item);
                                    } else {
                                        // If item already selected, remove it from selectedItems array
                                        this.selectedItems.splice(index, 1);
                                    }
                                },
                                isSelected(item) {
                                    return this.selectedItems.findIndex(selectedItem => selectedItem.title === item.title) !== -1;
                                }
                            }"
                      class="relative">
                      <div @click="selectOpen = !selectOpen"
                        class="rounded-xl w-full relative flex flex-col gap-2">
                        <div x-show="selectedItems.length"
                          class="flex gap-2 flex-wrap">
                          <template x-for="item in selectedItems">
                            <div
                              class="px-1.5 py-0.5 rounded-full bg-neutral-20 dark:bg-neutral-904 flex items-center gap-2 border border-neutral-40 dark:border-neutral-600 text-neutral-700 dark:text-neutral-40">
                              <span x-text="item.title" class="text-xs"></span>
                              <span @click.stop="toggleItem(item)"
                                class="text-xs rounded-full size-4 bg-neutral-70 text-neutral-10 flex items-center justify-center">
                                <i class="las la-times"></i>
                              </span>
                            </div>
                          </template>
                        </div>
                        <input type="text" placeholder="Add tags"
                          x-model="searchText"
                          class="w-full bg-transparent capitalize text-sm" />
                      </div>
                      <ul x-show="selectOpen" @click.away="selectOpen = false"
                        class="p-1 rounded-xl bg-neutral-0 dark:bg-neutral-904 absolute top-full left-0 right-0 w-full shadow-xl z-[3] max-h-[250px] overflow-y-auto flex flex-col gap-1">
                        <template x-for="option in filteredOptions()"
                          :key="option.title">
                          <li @click="toggleItem(option)" x-text="option.title"
                            :class="{ 'bg-primary-50 dark:bg-neutral-600': isSelected(option) }"
                            class="py-1.5 ltr:pl-6 rtl:pr-6 hover:bg-primary-300 rounded-lg text-sm hover:text-neutral-0 duration-300 cursor-pointer capitalize"></li>
                        </template>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Properties -->
              <div x-data="{isOpen:true}" class="bb-dashed-n30">
                <div class="flex justify-between items-center">
                  <p class="l-text font-medium">Properties</p>
                  <button @click="isOpen = !isOpen"
                    class="size-8 rounded-full flex items-center justify-center hover:bg-neutral-30 dark:hover:bg-neutral-500 duration-300">
                    <i class="las la-angle-down text-lg duration-300"
                      :class="isOpen?'rotate-180':''"></i>
                  </button>
                </div>
                <div x-show="isOpen" x-collapse>
                  <div
                    class="bg-neutral-20 mt-4 xxl:mt-6 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 rounded-xl p-3 lg:p-4 xxl:p-5">
                    <table>
                      <tr>
                        <td class="m-text w-[120px]">Size</td>
                        <td><span class="m-text font-medium">22.89
                            Mb</span></td>
                      </tr>
                      <tr>
                        <td class="m-text w-[120px]">Modified</td>
                        <td><span class="m-text font-medium">02 Mar 2024 9:29
                            AM</span></td>
                      </tr>
                      <tr>
                        <td class="m-text w-[120px]">Size</td>
                        <td><span class="m-text font-medium">Video</span></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>

              <!-- share with -->
              <div class="bb-dashed-n30">
                <div x-data="modal" class="flex justify-between items-center">
                  <p class="l-text font-medium">File Share With</p>
                  <button @click="openModal"
                    class="size-7 rounded-full bg-primary-300 text-neutral-0 flex items-center justify-center"><i
                      class="las la-plus text-lg"></i></button>
                  <template x-teleport="body">
                    <div
                      class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                      :class="isOpen && '!block'">
                      <div
                        class="flex min-h-screen items-center justify-center px-4"
                        @click.self="closeModal">
                        <div x-show="isOpen" x-transition
                          x-transition.duration.300
                          class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                          <div
                            class="mb-4 flex items-center justify-between bb-dashed-n30">
                            <h4>Invite</h4>
                            <i class="las la-times cursor-pointer text-xl"
                              @click="closeModal"></i>
                          </div>
                          <div>
                            <form
                              class="rounded-xl bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-2 flex mb-7 xxl:mb-10">
                              <input type="text"
                                class="px-4 py-2 w-full bg-transparent"
                                placeholder="Enter Email..." />
                              <button
                                class="size-10 shrink-0 rounded-lg bg-primary-300 text-neutral-0 flex items-center justify-center">
                                <i class="las la-arrow-right text-2xl"></i>
                              </button>
                            </form>
                            <div
                              class="flex flex-col gap-5 xxl:gap-8 mb-7 xxl:mb-10">
                              <div class="flex justify-between items-center">
                                <div class="flex items-center gap-2 md:gap-4">
                                  <img
                                    src="assets/images/avatar/avatar-big-1.png"
                                    class="w-8 lg:w-14 rounded-full"
                                    alt="avatar" />
                                  <div>
                                    <p class="mb-1 l-text font-medium">Arlene
                                      McCoy</p>
                                    <p class="s-text">example@gmail.com</p>
                                  </div>
                                </div>
                                <div x-data="{selected:'Can View',opened:false}"
                                  class="relative">
                                  <div @click="opened = !opened"
                                    class="flex items-center gap-3 cursor-pointer">
                                    <span class="text-xs xxl:text-base"
                                      x-text="selected"></span>
                                    <i
                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                  </div>
                                  <div @click.away="opened = false"
                                    x-show="opened"
                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                    <span
                                      @click="selected='Can View',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-eye text-xl"></i> Can
                                      View</span>
                                    <span
                                      @click="selected='Can Edit',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-pen text-xl"></i> Can
                                      Edit</span>
                                    <span
                                      @click="selected='Remove',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-trash text-xl"></i>
                                      Remove</span>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center">
                                <div class="flex items-center gap-2 md:gap-4">
                                  <img
                                    src="assets/images/avatar/avatar-big-5.png"
                                    class="w-8 lg:w-14 rounded-full"
                                    alt="avatar" />
                                  <div>
                                    <p class="mb-1 l-text font-medium">Robert
                                      Fox</p>
                                    <p class="s-text">example@gmail.com</p>
                                  </div>
                                </div>
                                <div x-data="{selected:'Can View',opened:false}"
                                  class="relative">
                                  <div @click="opened = !opened"
                                    class="flex items-center gap-3 cursor-pointer">
                                    <span class="text-xs xxl:text-base"
                                      x-text="selected"></span>
                                    <i
                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                  </div>
                                  <div @click.away="opened = false"
                                    x-show="opened"
                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                    <span
                                      @click="selected='Can View',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-eye text-xl"></i> Can
                                      View</span>
                                    <span
                                      @click="selected='Can Edit',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-pen text-xl"></i> Can
                                      Edit</span>
                                    <span
                                      @click="selected='Remove',opened =false"
                                      class="flex w-full py-1 xxl:py-2 xxl:px-3 px-1.5 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-trash text-xl"></i>
                                      Remove</span>
                                  </div>
                                </div>
                              </div>
                              <div class="flex justify-between items-center">
                                <div class="flex items-center gap-2 md:gap-4">
                                  <img
                                    src="assets/images/avatar/avatar-big-2.png"
                                    class="w-8 lg:w-14 rounded-full"
                                    alt="avatar" />
                                  <div>
                                    <p class="mb-1 l-text font-medium">Kathryn
                                      Murphy</p>
                                    <p class="s-text">example@gmail.com</p>
                                  </div>
                                </div>
                                <div x-data="{selected:'Can View',opened:false}"
                                  class="relative">
                                  <div @click="opened = !opened"
                                    class="flex items-center gap-3 cursor-pointer">
                                    <span class="text-xs xxl:text-base"
                                      x-text="selected"></span>
                                    <i
                                      class="las la-angle-down text-sm xxl:text-xl"></i>
                                  </div>
                                  <div @click.away="opened = false"
                                    x-show="opened"
                                    class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                                    <span
                                      @click="selected='Can View',opened =false"
                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-eye text-xl"></i> Can
                                      View</span>
                                    <span
                                      @click="selected='Can Edit',opened =false"
                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-pen text-xl"></i> Can
                                      Edit</span>
                                    <span
                                      @click="selected='Remove',opened =false"
                                      class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                                        class="las la-trash text-xl"></i>
                                      Remove</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="flex gap-4 xxl:gap-6 justify-between items-center">
                            <button class="flex gap-4"><i
                                class="las la-link text-xl"></i> <span
                                class="h6">Copy Link</span></button>
                            <button class="btn-primary-outlined"
                              @click="closeModal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </template>
                </div>
                <div class="flex flex-col gap-4 xxl:gap-6 n30-box xl:p-5 mt-5">
                  <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                      <img src="assets/images/avatar/avatar-big-1.png"
                        width="60" />
                      <div>
                        <p class="mb-1 l-text font-medium">Arlene McCoy</p>
                        <p class="s-text">example@gmail.com</p>
                      </div>
                    </div>
                    <div x-data="{selected:'Can View',opened:false}"
                      class="relative">
                      <div @click="opened = !opened"
                        class="flex items-center gap-3 cursor-pointer">
                        <span class="h6" x-text="selected"></span>
                        <i class="las la-angle-down text-xl"></i>
                      </div>
                      <div @click.away="opened = false" x-show="opened"
                        class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                        <span @click="selected='Can View',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-eye text-xl"></i> Can View</span>
                        <span @click="selected='Can Edit',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-pen text-xl"></i> Can Edit</span>
                        <span @click="selected='Remove',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-trash text-xl"></i> Remove</span>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                      <img src="assets/images/avatar/avatar-big-5.png"
                        width="60" />
                      <div>
                        <p class="mb-1 l-text font-medium">Robert Fox</p>
                        <p class="s-text">example@gmail.com</p>
                      </div>
                    </div>
                    <div x-data="{selected:'Can View',opened:false}"
                      class="relative">
                      <div @click="opened = !opened"
                        class="flex items-center gap-3 cursor-pointer">
                        <span class="h6" x-text="selected"></span>
                        <i class="las la-angle-down text-xl"></i>
                      </div>
                      <div @click.away="opened = false" x-show="opened"
                        class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                        <span @click="selected='Can View',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-eye text-xl"></i> Can View</span>
                        <span @click="selected='Can Edit',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-pen text-xl"></i> Can Edit</span>
                        <span @click="selected='Remove',opened =false"
                          class="flex w-full py-2 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-trash text-xl"></i> Remove</span>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between items-center">
                    <div class="flex items-center gap-4">
                      <img src="assets/images/avatar/avatar-big-2.png"
                        width="60" />
                      <div>
                        <p class="mb-1 l-text font-medium">Kathryn Murphy</p>
                        <p class="s-text">example@gmail.com</p>
                      </div>
                    </div>
                    <div x-data="{selected:'Can View',opened:false}"
                      class="relative">
                      <div @click="opened = !opened"
                        class="flex items-center gap-3 cursor-pointer">
                        <span class="h6" x-text="selected"></span>
                        <i class="las la-angle-down text-xl"></i>
                      </div>
                      <div @click.away="opened = false" x-show="opened"
                        class="absolute top-0 shadow-lg z-10 right-full min-w-[150px] bg-neutral-0 dark:bg-neutral-904 p-3 flex flex-col gap-1 border border-neutral-30 dark:border-neutral-500 rounded-xl">
                        <span @click="selected='Can View',opened =false"
                          class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-eye text-xl"></i> Can View</span>
                        <span @click="selected='Can Edit',opened =false"
                          class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-pen text-xl"></i> Can Edit</span>
                        <span @click="selected='Remove',opened =false"
                          class="flex w-full py-1 px-3 rounded-lg hover:bg-primary-50 duration-300 cursor-pointer items-center gap-2"><i
                            class="las la-trash text-xl"></i> Remove</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- reset button -->
              <button class="w-full btn-error-outlined"><i
                  class="las la-trash"></i> Delete</button>
            </div>
          </div>
        </div>
      </div>
    </main>

  @include('admin.dashboard.footer')