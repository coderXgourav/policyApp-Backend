
    @include('admin.dashboard.header')
    <!-- Main Content -->
    <main
      :class="[$store.app.sidebar && $store.app.menu=='vertical'?'w-full xl:ltr:ml-[280px] xl:rtl:mr-[280px] xl:w-[calc(100%-280px)]':'w-full',$store.app.sidebar && $store.app.menu=='hovered'?'w-full xl:ltr:ml-[80px] xl:w-[calc(100%-80px)] xl:rtl:mr-[80px]':'w-full', $store.app.menu == 'horizontal' && 'xl:!pt-[118px]', $store.app.contrast=='high'?'bg-neutral-0 dark:bg-neutral-904':'bg-neutral-20 dark:bg-neutral-903']"
      class="w-full text-neutral-700 min-h-screen dark:text-neutral-20 pt-[60px] md:pt-[66px] duration-300">
      <div
        :class="[$store.app.menu=='horizontal' ? 'max-w-[1704px] mx-auto xxl:px-0 xxl:pt-8':'',$store.app.stretch?'xxxl:max-w-[92%] mx-auto':'']"
        class="p-3 md:p-4 xxl:p-6">
        <div
          x-data="{activeTab:'all', users: [
          { id: 1,  checked:false, name: 'Dianne Russell', email: 'dianne@example.com', phone: '(603)-555-0125',status: 'active', image: './assets/images/users/user-sm-1.png' },
        
        ],  
        filteredUsers: [],      
        filterUserByStatus(status){
          if(status =='all'){            
           this.filteredUsers= this.users
          } else{
            this.filteredUsers= this.users.filter(user => user.status === status)
          }         
        },
        handleSelect(e){
          const {name,checked} = e.target
          if(name=='select-all'){
            this.filteredUsers= this.filteredUsers.map(user => ({...user,checked:checked}))
          }  
          this.isAllChecked()       
        },
        isAllChecked(){
          return this.filteredUsers.every(item => item.checked==true)
        }
        
        }"
          x-init="filteredUsers=users,isAllChecked()"
          class="white-box">
          <div
            class="flex flex-wrap gap-4 justify-between items-center bb-dashed-n30">
            <h4>Employee List</h4>
            <div class="flex flex-wrap items-center gap-4">
              <form
                class="max-w-[425px] rounded-full bg-neutral-20 dark:bg-neutral-903 border border-neutral-40 dark:border-neutral-500 p-1 items-center flex">
                <input type="text"
                  class="px-4 py-1 text-sm w-full bg-transparent"
                  placeholder="Search..." />
                <button
                  class="size-8 shrink-0 rounded-full bg-primary-300 text-neutral-0 flex items-center justify-center">
                  <i class="las la-search text-xl"></i>
                </button>
              </form>
              <a href="create-user.html" class="btn-primary-outlined"> <i
                  class="las la-plus-circle text-sm"></i> New User</a>
            
            </div>
          </div>
          <div class="bb-dashed-n30">
            <div
              class="col-span-12 flex max-w-max flex-wrap gap-4 rounded-xl md:rounded-[40px] border border-neutral-30 p-3 dark:border-neutral-500">
              <button @click="activeTab='all', filterUserByStatus('all')"
                :class="activeTab=='all' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">all</button>
              <button @click="activeTab='active', filterUserByStatus('active')"
                :class="activeTab=='active' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">active</button>
              <button
                @click="activeTab='pending', filterUserByStatus('pending')"
                :class="activeTab=='pending' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">pending</button>
          
              <button
                @click="activeTab='rejected', filterUserByStatus('rejected')"
                :class="activeTab=='rejected' ?'bg-primary-300 text-neutral-0': 'bg-neutral-20 dark:bg-neutral-903'"
                class="rounded-full capitalize px-4 py-2 text-sm font-semibold lg:px-6 lg:py-2.5">rejected</button>
            </div>
          </div>
          <div x-show="activeTab !='all'"
            class="flex flex-wrap justify-between items-center gap-3 mb-4 xl:mb-6">
            <p><span x-text="filteredUsers.length"></span> results found</p>
            <div class="flex items-center gap-4">
              <span>Status: </span>
              <div class="chip soft-default">
                <span class="icon">
                  <i class="las la-layer-group"></i>
                </span>
                <span x-text="activeTab"></span>
                <span class="icon cursor-pointer"
                  @click="activeTab='all',filterUserByStatus('all')">
                  <i class="las la-times"></i>
                </span>
              </div>
              <button
                class="flex items-center gap-2 text-error-300 font-semibold text-sm"
                @click="activeTab='all',filterUserByStatus('all')">
                <i class="las la-trash text-base"></i>
                Clear
              </button>
            </div>
          </div>
          <div x-data="{dense: false}"
            class="checkboxes-container overflow-x-auto">
            <table class="w-full whitespace-nowrap">
              <thead class="text-left">
                <tr class="bg-neutral-20 dark:bg-neutral-903">
                  <th class="px-6 duration-300" :class="dense? 'py-2': 'py-4'">
                    <label for="checkbox2" class="option">
                      <input type="checkbox" name="select-all" id="checkbox2"
                        :checked="isAllChecked()" @change="handleSelect($event)"
                        aria-checked="false" />
                      <span class="checkbox primary"></span>
                    </label>
                  </th>
                  <th class="px-6 duration-300"
                    :class="dense? 'py-2': 'py-5'">Name</th>
                  <th class="px-6 duration-300"
                    :class="dense? 'py-2': 'py-5'">Phone Number</th>
                  <th class="px-6 duration-300"
                    :class="dense? 'py-2': 'py-5'">Status</th>
                  <th class="px-6 duration-300"
                    :class="dense? 'py-2': 'py-5'">Action</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <template x-for="user in filteredUsers">
                  <tr
                    class="border-b border-neutral-30 hover:bg-neutral-20 dark:hover:bg-neutral-903 duration-300 dark:border-neutral-500"
                    :class="user.checked?'bg-neutral-20 dark:bg-neutral-903':'bg-neutral-0 dark:bg-neutral-904'">
                    <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                      <label :for="user.id" class="option">
                        <input type="checkbox" :id="user.id" :name="user.id"
                          @change="handleSelect($event)" x-model="user.checked"
                          aria-checked="false" />
                        <span class="checkbox primary"></span>
                      </label>
                    </td>
                    <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                      <div class="flex items-center gap-3">
                        <img :src="user.image" width="32" class="rounded-full"
                          alt />
                        <div>
                          <p class="m-text mb-1 font-medium"
                            x-text="user.name"></p>
                          <span class="text-xs" x-text="user.email"></span>
                        </div>
                      </div>
                    </td>
                    <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                      <span x-text="user.phone"></span>
                    </td>
                
                    <td class="px-6" :class="dense? 'py-2': 'py-2 lg:py-3'">
                      <span x-show="user.status=='active'"
                        class="py-2 px-5 rounded-3xl text-xs text-success-300 bg-success-300/10 border border-neutral-30 dark:border-neutral-500">Active</span>
                      <span x-show="user.status=='rejected'"
                        class="py-2 px-5 rounded-3xl text-xs text-neutral-100 bg-neutral-40 dark:bg-neutral-400 border border-neutral-30 dark:border-neutral-500">Rejected</span>
                      <span x-show="user.status=='pending'"
                        class="py-2 px-5 rounded-3xl text-xs text-warning-300 bg-warning-300/20 border border-neutral-30 dark:border-neutral-500">Pending</span>
                      <span x-show="user.status=='banned'"
                        class="py-2 px-5 rounded-3xl text-xs text-error-300 bg-error-300/20 border border-neutral-30 dark:border-neutral-500">Banned</span>
                    </td>
                    <td>
                      <div x-data="dropdown"
                        class="relative flex justify-center"
                        @click.away="close()">
                        <i class="las la-ellipsis-v cursor-pointer text-2xl"
                          @click="toggle()"></i>
                        <ul class="horiz-option" :class="isOpen?'show':'hide'">
                          <li x-data="modal">
                            <span @click="openModal"
                              class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903 hover:text-primary-300">
                              <i class="las la-pen text-xl"></i> Edit </span>
                            <template x-teleport="body">
                              <div
                                class="fixed inset-0 z-[999] hidden overflow-y-auto bg-neutral-900/80 dark:bg-neutral-40/80 text-neutral-700 dark:text-neutral-20"
                                :class="isOpen && '!block'">
                                <div
                                  class="flex min-h-screen items-center justify-center px-4"
                                  @click.self="closeModal">
                                  <div x-show="isOpen" x-transition
                                    x-transition.duration.300
                                    class="panel my-8 w-full max-w-4xl overflow-hidden rounded-lg border-0 bg-neutral-0 p-3 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                    <div
                                      class="mb-4 flex items-center justify-between bb-dashed-n30">
                                      <h4>Quick Update</h4>
                                      <i
                                        class="las la-times cursor-pointer text-xl"
                                        @click="closeModal"></i>
                                    </div>
                                    <div
                                      class="py-3 px-4 md:px-6 lg:px-8 rounded-xl border border-info-75 bg-info-50 flex justify-between items-center">
                                      <div class="flex gap-5 items-center">
                                        <i
                                          class="las la-info-circle text-3xl text-info-300"></i>
                                        <span
                                          class="l-text font-medium text-info-500">Account
                                          is waiting for confirmation!</span>
                                      </div>
                                      <i
                                        class="las la-times text-2xl text-info-500 cursor-pointer p-1 rounded-full hover:bg-info-75/20 duration-300"></i>
                                    </div>
                                    <div
                                      class="grid grid-cols-2 gap-4 xxl:gap-6 my-6">
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="name"
                                            value="Elenor Pena"
                                            placeholder="Full Name" />
                                          <label for="name">Active</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="email" id="email"
                                            value="example@gmail.com"
                                            placeholder="email" />
                                          <label for="email">Email
                                            Address</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="phone"
                                            value="(307) 555-0133"
                                            placeholder="Phone" />
                                          <label for="phone">Phone
                                            Number</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div
                                          x-data="{
                                            selectOpen:false,
                                            selectedItem: {title: 'Vietnam',flag: 'https://flagcdn.com/vn.svg'},
                                            searchText:'',
                                            optionList: [],
                                            async fetchCountries() {
                                                try {
                                                    const response = await fetch('https://restcountries.com/v3.1/all?fields=name,flags');
                                                    const data = await.html response.json();                                       
                                                    this.optionList = data.map(country => ({
                                                        title: country.name.common,
                                                        flag: country.flags.svg
                                                    }));
                                                } catch (error) {
                                                    console.error('Error fetching countries:', error);
                                                }
                                            },
                                            filteredOptions() {
                                                if (this.searchText.trim() === '') {
                                                    return this.optionList;
                                                } else {
                                                    return this.optionList.filter(option => option.title.toLowerCase().includes(this.searchText.trim().toLowerCase()));
                                                }
                                            },
                                            setInputVal(){
                                              this.searchText=this.selectedItem?.title
                                            }
                                            
                                        }"
                                          x-init="fetchCountries(),setInputVal()"
                                          class="relative">
                                          <button
                                            @click="selectOpen=!selectOpen"
                                            class="py-3 px-3 sm:px-4 lg:px-6 rounded-xl flex items-center gap-3 w-full border bg-neutral-0 dark:bg-neutral-904 border-neutral-40 dark:border-neutral-500 relative">
                                            <img
                                              x-show="selectedItem && selectedItem?.title==searchText"
                                              class="size-6 rounded-full object-cover object-center"
                                              :src="selectedItem && selectedItem.flag"
                                              alt="flag" />
                                            <input type="text"
                                              placeholder="Select Country"
                                              x-model="searchText"
                                              :value="selectedItem?.title"
                                              class="w-full bg-transparent capitalize" />
                                            <span
                                              class="absolute inset-y-0 right-0 flex items-center pr-3 md:pr-4 lg:pr-6 pointer-events-none">
                                              <i class="las la-angle-down"></i>
                                            </span>
                                          </button>
                                          <ul x-show="selectOpen"
                                            @click.away="selectOpen=false"
                                            class="py-1 rounded-xl bg-neutral-0 dark:bg-neutral-904 absolute top-full left-0 right-0 w-full shadow-xl z-[3] max-h-[250px] overflow-y-auto">
                                            <template
                                              x-for="option in filteredOptions()"
                                              :key="option.title">
                                              <li
                                                @click="selectedItem=option,selectOpen=false,searchText=option.title,console.log(option)"
                                                :class="selectedItem==option?'bg-primary-300 text-neutral-0':''"
                                                class="py-2 ltr:pl-6 rtl:pr-6hover:bg-primary-300 flex items-center gap-2 hover:text-neutral-0 duration-300 cursor-pointer capitalize">
                                                <img :src="option?.flag"
                                                  alt="flag"
                                                  class="size-6 shrink-0 rounded-full object-cover object-center" />
                                                <span
                                                  x-text="option.title"></span>
                                              </li>
                                            </template>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="state"
                                            value="Los Rios"
                                            placeholder="State" />
                                          <label
                                            for="state">State/Region</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="city"
                                            value="Tirat Carmel"
                                            placeholder="City" />
                                          <label for="city">City</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="address"
                                            value="7529 E. Pecan St."
                                            placeholder="address" />
                                          <label for="address">Address</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="number" id="zip"
                                            value="32254" placeholder="Phone" />
                                          <label for="zip">Zip/Code</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="company"
                                            value="Louis Vuitton"
                                            placeholder="Company" />
                                          <label for="company">Company</label>
                                        </div>
                                      </div>
                                      <div class="col-span-1">
                                        <div class="form-input">
                                          <input type="text" id="role_2"
                                            value="Senior Product Manager"
                                            placeholder="Phone" />
                                          <label for="role_2">Role</label>
                                        </div>
                                      </div>
                                      <div class="col-span-2">
                                        <div
                                          x-data="{isOpen:false,selected:'Active', items:['Active','Inactive']}"
                                          class="relative">
                                          <div @click="isOpen=!isOpen"
                                            class="relative flex cursor-pointer items-center justify-between rounded-xl border border-neutral-30 px-6 py-3 dark:border-neutral-500">
                                            <span x-text="selected"></span>
                                            <i
                                              class="las la-angle-down text-lg duration-300"
                                              :class="isOpen?'rotate-180':'rotate-0'"></i>
                                            <span
                                              class="absolute -top-2 left-5 bg-neutral-0 px-2 text-xs dark:bg-neutral-904">Status</span>
                                          </div>
                                          <div x-show="isOpen"
                                            @click.away="isOpen=false"
                                            class="absolute left-0 top-full z-10 flex max-h-[200px] w-full flex-col gap-1 overflow-y-auto rounded-lg bg-neutral-0 p-1 shadow-xl dark:bg-neutral-904">
                                            <template x-for="item in items">
                                              <div
                                                @click="selected=item, isOpen=false"
                                                :class="selected===item?'bg-primary-300  text-neutral-0':'hover:bg-primary-50 dark:hover:bg-neutral-903'"
                                                class="cursor-pointer rounded-md px-4 py-2 duration-300"
                                                x-text="item"></div>
                                            </template>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="flex gap-4 xxl:gap-6">
                                      <button class="btn-primary"
                                        @click="closeModal">Update</button>
                                      <button class="btn-primary-outlined"
                                        @click="closeModal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </template>
                          </li>
                          <li x-data="modal">
                            <span @click="openModal"
                              class="flex items-center gap-2 cursor-pointer rounded px-3 py-2 text-sm leading-normal duration-300 hover:bg-primary-50 dark:hover:bg-neutral-903 hover:text-primary-300">
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
                                    class="panel my-8 w-full max-w-lg overflow-hidden rounded-lg border-0 bg-neutral-0 p-1.5 dark:bg-neutral-904 sm:p-4 md:p-6 lg:p-8">
                                    <div
                                      class="flex justify-between items-center bb-dashed-n30">
                                      <h5>Delete User?</h5>
                                      <button type="button"
                                        @click="closeModal"><i
                                          class="las la-times text-xl"></i></button>
                                    </div>
                                    <div class="p-5 text-center">
                                      <div
                                        class="mx-auto w-fit rounded-full bg-error-300/10 p-4 text-error-300 ring-2 ring-error-300/50">
                                        <i class="las la-trash text-5xl"></i>
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
                    </td>
                  </tr>
                </template>
              </tbody>
            </table>
            <div
              class="mt-6 flex items-center gap-5 justify-center flex-col md:flex-row md:justify-between whitespace-nowrap">
              <label for="switch" class="switch flex items-center">
          
              </label>
              <div
                class="flex flex-col sm:flex-row justify-center sm:justify-between gap-5">
                <div class="flex gap-4 items-center">
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
      </div>
    </main>

    <!-- Footer -->
    @include('admin.dashboard.footer')
