@include('admin.dashboard.header')
<style>
    .selectForm{
    outline: none;
    border-radius: 8px;
    padding-left: 8px;
    }
    .selectForm option{
      color: black;
    }

    .selectForm1{
    padding-left: 8px;
        border: 1px solid gray;
    outline: none;
    border-radius: 8px;
    }
    .selectForm1 option{
      color: black;
    }


    .outlineNone{
        outline: none;
    }
</style>
    <!-- Main Content -->
    <main
      :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
      class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300"
    >
    <form action="" method="GET">

    
      <div :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']" class="p-3 md:p-4 xxl:p-6">
        <div class="white-box">
          <h4 class="bb-dashed-n30">Add a new Question</h4>
          <div class="grid grid-cols-12 gap-4 xxl:gap-6">
           
            <div class="col-span-12 lg:col-span-10">
              <div class="n20-box">
                <div class="grid grid-cols-2 gap-4 xxl:gap-6 my-6">
                    <div class="col-span-2">
                        <div class="" class="">
                         <select name="" id="" class="w-full s-text bg-transparent py-2.5 xl:py-3.5 selectForm1">
                            <option value="">Choose privacy policy</option>
                            <option value="">IT Policy </option>
                            <option value="">HR Policy</option>
                            <option value="">Manager Policy</option>
                         </select>
                        </div>
                      </div>
                      <div class="col-span-2">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-12">
                      <label for="name" class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903">Question</label>
                      <input type="text" name="name" id="name" placeholder="Type Question Here..." class="w-full s-text bg-transparent py-2.5 xl:py-3.5" />
                    </div>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-6">
                      <label for="email" class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903"> Option A</label>
                      <input type="text"name="text"  id="text" placeholder="Option A answer..." class="w-full s-text bg-transparent py-2.5 xl:py-3.5" />
                    </div>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-6">
                      <label for="number"  class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903">Option B</label>
                      <input type="text" name="number" id="number" placeholder="Option B answer..." class="w-full s-text bg-transparent py-2.5 xl:py-3.5" />
                    </div>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-6">
                      <label for="state" class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903">Option C</label>
                      <input type="text" name="state" id="state" placeholder="Option C answer..." class="w-full s-text bg-transparent py-2.5 xl:py-3.5" />
                    </div>
                  </div>
                  <div class="col-span-2 md:col-span-1">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-6">
                      <label for="city" class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903">Option D</label>
                      <input type="text" name="city" id="city" placeholder="Option D answer..." class="w-full s-text bg-transparent py-2.5 xl:py-3.5" />
                    </div>
                  </div>
                  
                  <div class="col-span-2 md:col-span-1">
                    <div class="relative flex items-center gap-4 rounded-xl border border-neutral-40 w-full px-4 dark:border-neutral-500 lg:px-6">
                      <label for="zip" class="absolute -top-2 bg-neutral-20 px-2 text-xs dark:bg-neutral-903">Choose Correct Answer</label>
                    <select name="" id="" class="w-full s-text bg-transparent py-2.5 xl:py-3.5 selectForm">
                        <option value="">Choose Correct Answer</option>
                        <option value="">Option A</option>
                        <option value="">Option B</option>
                        <option value="">Option C</option>
                        <option value="">Option D</option>
                    </select>
                    </div>
                  </div>
                 
                  
                
               
      
                </div>
                <div class="flex gap-4 xxl:gap-6">
                  <button class="btn-primary">Submit Question</button>
                  <button class="btn-primary-outlined">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </main>
@include('admin.dashboard.footer')