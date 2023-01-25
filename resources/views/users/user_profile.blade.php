@extends('layout')

@section('content')




  











<section class="relative inner lg:pb-24 pb-16 ">
    <div class="container ">
      <div class="profile-banner relative text-transparent">
        {{-- <input id="pro-banner" name="profile-banner" type="file" class="hidden" onchange="loadFile(event)"> --}}
        <div class="relative rounded-md shrink-0">
          <img src="https://shreethemes.in/techwind/layouts/assets/images/blog/bg.jpg"
           class=" w-full rounded-md h-96 object-cover" id="profile-banner" alt="">
          {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
          <label class="absolute inset-0 cursor-pointer" for="pro-banner"></label>
        </div>
      </div>
    </div>
    <!--end container-->
  
    <div class="container lg:mt-24 mt-16">
      <div class="md:flex">
        <div class="lg:w-1/4 md:w-1/3 md:px-3">
          <div class="relative md:-mt-48 -mt-32">
            <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
              <div class="profile-pic text-center mb-5">
                <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)">
                <div>
                  <div class="relative h-28 w-28 mx-auto">
                    <img src="https://shreethemes.in/techwind/layouts/assets/images/client/05.jpg" class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                    <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                  </div>
  
                  <div class="mt-4">
                    <h5 class="text-lg font-semibold">Jenny Jimenez</h5>
                    <p class="text-slate-400">jennyhot@hotmail.com</p>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-100 dark:border-gray-700">
                <ul class="list-none sidebar-nav mb-0 mt-3" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                  <li class="navbar-item account-menu pb-6 active" role="presentation">
                    <a  
                    class="flex  items-center w-full space-x-2 text-white bg-indigo-600 rounded-lg"
                    id="profile-tab" data-tabs-target="#profile"
             type="button" role="tab" 
             aria-controls="profile" 
             aria-selected="false">
                        <span aria-hidden="true" class="p-2 bg-indigo-700 rounded-lg">
                          <svg
                            class="w-6 h-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            />
                          </svg>
                        </span>
                        <span>Profile</span>
                      </a>
                  </li>
  
                  <li class="sidelist pb-6" role="presentation" >
                    <a
                    id="dashboard-tab" data-tabs-target="#dashboard"
             type="button" role="tab" aria-controls="dashboard" 
             aria-selected="false"
                    
                    class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white"
                  >
                    <span
                      aria-hidden="true"
                      class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white"
                    >
                      <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                        />
                      </svg>
                    </span>
                    <span>Billing Info</span>
                  </a>
                  </li>
                  <li class="sidelist pb-6" role="presentation">
                    <a
                    id="settings-tab"
              data-tabs-target="#settings" 
              type="button" role="tab" 
              aria-controls="settings" aria-selected="false"
                    
                    class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white"
                  >
                    <span
                      aria-hidden="true"
                      class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white"
                    >
                      <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                        />
                      </svg>
                    </span>
                    <span>Payment</span>
                  </a>
                  </li>
                  <li class="sidelist pb-6" role="presentation">
                    <a
                    id="contacts-tab" data-tabs-target="#contacts" 
                    type="button" role="tab" aria-controls="contacts" 
                    aria-selected="false"
                    
                    class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white"
                  >
                    <span
                      aria-hidden="true"
                      class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white"
                    >
                      <svg
                        class="w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
                        />
                      </svg>
                    </span>
                    <span>Sign Out</span>
                </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
  
        <!-- wrapper -->
   <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">

 

    <!-- info -->
    <div class="col-span-9 shadow bg-white rounded px-6 pt-5 pb-7">
        <div id="myTabContent">
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <h4 class="text-lg font-medium capitalize mb-4">
            Profile information
        </h4>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="first">First name</label>
                    <input type="text" name="first" id="first" class="input-box border">
                </div>
                <div>
                    <label for="last">Last name</label>
                    <input type="text" name="last" id="last" class="input-box border">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="input-box border">
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="input-box border">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="input-box border">
                </div>
                <div>
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" class="input-box border">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="py-3 px-4 text-center text-white bg-black border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">save
                changes</button>
        </div>
        </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <h4 class="text-lg font-medium capitalize mb-4">
            Billing information
        </h4>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="first">First name</label>
                    <input type="text" name="first" id="first" class="input-box border">
                </div>
                <div>
                    <label for="last">Last name</label>
                    <input type="text" name="last" id="last" class="input-box border">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="input-box border">
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="input-box border">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="input-box border">
                </div>
                <div>
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" class="input-box border">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="py-3 px-4 text-center text-white bg-black border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">save
                changes</button>
        </div>
        </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <h4 class="text-lg font-medium capitalize mb-4">
            Payment information
        </h4>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="first">First name</label>
                    <input type="text" name="first" id="first" class="input-box border">
                </div>
                <div>
                    <label for="last">Last name</label>
                    <input type="text" name="last" id="last" class="input-box border">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="input-box border">
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="input-box border">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="input-box border">
                </div>
                <div>
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" class="input-box border">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="py-3 px-4 text-center text-white bg-black border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">save
                changes</button>
        </div>
        </div>
    <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <h4 class="text-lg font-medium capitalize mb-4">
            signout information
        </h4>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="first">First name</label>
                    <input type="text" name="first" id="first" class="input-box border">
                </div>
                <div>
                    <label for="last">Last name</label>
                    <input type="text" name="last" id="last" class="input-box border">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="birthday" class="input-box border">
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="input-box border">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="input-box border">
                </div>
                <div>
                    <label for="phone">Phone number</label>
                    <input type="text" name="phone" id="phone" class="input-box border">
                </div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit"
                class="py-3 px-4 text-center text-white bg-black border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">save
                changes</button>
        </div>    </div>
</div>



       
    </div>
    <!-- ./info -->

</div>
<!-- ./wrapper -->
      </div>
      <!--end grid-->
    </div>
    <!--end container-->
  </section>
{{-- </section> --}}


















@endsection



 