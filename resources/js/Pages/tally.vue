<template>
    <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:transparent; ">
        <a class="navbar-brand " href="/" style="color: #ffffff;">
        <!-- <img :src="getImage()"  alt=""  width="50%"/> -->
        <img :src="'/imgs/tallyLogo4.png'" class="img-fluid img_size" alt="" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <!--<a v-bind:href =" url('/') " class="nav-link home-nav-link  nav-link-header">Home</a> -->
                    <a href="/" class="nav-link home-nav-link nav-link-header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-nav-link nav-link-header" href="/support">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-nav-link nav-link-header" href="/aboutus">Pricing
                        </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-nav-link nav-link-header" href="/aboutus">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-nav-link nav-link-header" href="/aboutus">Faq's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about-nav-link nav-link-header" href="/aboutus">Support</a>
                </li>
            </ul>
        </div> 

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <div class="flex justify-between mr-4">
              <div class="flex justify-between space-x-2">
                <img :src="'/imgs/tally_header.png'" class="img-fluid " alt="" >
                  <div class="flex flex-col ml-2">
                    <div>
                      <h6 class=" text-xs font-semibold text-gray-400" >
                          hotline 24/7
                      </h6>
                    </div>
                  <div>
                    <h6 class=" text-xs text-gray-700 font-bold">
                        (+91)9263637575
                    </h6>
                  </div>
                          
                </div>
              </div>
              </div> 
            </ul>
             <button type="button" id="button" class=" md:py-1 py-1 mr-2 px-3 rounded-md  text-white" style="background-color: #07528E;">Get Free</button>     
        </div> 
  </nav>
    <!-- navbar -->  
    <!-- ist section start -->
    <section>
   <div class="back_img">
  <div class="container mt-4">
    <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-4 ">
      <div class="">
        <h1 class="font-bold font">Make Your business easier</h1>
       <h1 class="font-bold font">with help from </h1>
      <h1 class="font-bold font"><span style="color:#E9A716">Tally</span><span style="color:#4C8BBA">Clinic</span> </h1>
        
        <p class="mt-14 sm:font-sm text-gray-400">We transform business of the most major sectors with powerful and
        adaptable digital solutions that satisfy the needs of today.</p>
       
          <div class="flex space-x-2 justify-center xl:text-sm lg:text-sm sm:text-xs text-xs mr-5 " style="margin-top:5rem">
        <button type="button" class=" inline-block w-full px-4 text-left h-12 border-2 border-black text-gray-800 font-semibold   rounded-full ">
          <i class="fas fa-envelope mr-3"></i>
          Your Email</button>
        <button type="button" class="inline-block w-full px-4 text-left  h-12 border-2 border-black text-gray-800 font-semibold   rounded-full">Your enquiry about
          <i class="fas fa-chevron-down ml-5"></i>
        </button>
      </div>
       <div class="mr-5">
      <button type="button" class="inline-block w-full px-5  h-12 border-2 mt-6 text-white font-semibold xl:text-sm lg:text-sm sm:text-xs rounded-full"  style="background-color:#07528E">Request A Consultation</button>
    </div>
      </div>
      
      <div class="flex justify-end banner_img">
        <img :src="'/imgs/tally_Module3.png'" class="img-fluid" alt="" >
      </div>
    </div>
  </div>
  </div>
  
  </section>
  <!-- first section end -->
  <br><br>

  <!-- testimonial test start -->
     <!-- <section>
      <div class="container">
        <div class="flex justify-end  ">
        <div class="nav nav-left my-3">
          <button class="left-btn"> &lt;</button>
         
        </div>
        <div class="nav nav-right my-3">
          <button class="right-btn">&gt;</button>
        </div>
      </div>
      <div class="grid xl:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4">
     
        <div class="px-4  ">
          <p class="font-semibold">“We encounterrd a problem with
            peocessing big data and offer only1 
            week, all fixed, professional, fast & 
            affordable price!”</p>
          <div class="flex space-x-2">
            <div>
              <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
            </div>
            <div class="flex flex-col ml-3">
              <h6 class="text-gray-700 text-sm font-bold">
                Neha Surbhi
              </h6>
              <p class="text-xs text-gray-500">
                CTO at IBM
              </p>
            </div>
          </div>

        </div>
       
        <div class="px-4  ">
                <p class="font-semibold">“We encounterrd a problem with
                  peocessing big data and offer only1 
                  week, all fixed, professional, fast & 
                  affordable price!”</p>
                <div class="flex space-x-2">
                  <div>
                    <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
                  </div>
                  <div class="flex flex-col ml-3">
                    <h6 class="text-gray-700 text-sm font-bold">
                      Neha Surbhi
                    </h6>
                    <p class="text-xs text-gray-500">
                      CTO at IBM
                    </p>
                  </div>
                </div>
  
              </div>
         
        <div class="px-4  ">
                <p class="font-semibold">“We encounterrd a problem with
                  peocessing big data and offer only1 
                  week, all fixed, professional, fast & 
                  affordable price!”</p>
                <div class="flex space-x-2">
                  <div>
                    <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
                  </div>
                  <div class="flex flex-col ml-3">
                    <h6 class="text-gray-700 text-sm font-bold">
                      Neha Surbhi
                    </h6>
                    <p class="text-xs text-gray-500">
                      CTO at IBM
                    </p>
                  </div>
                </div>
  
              </div>
      </div>
      </div>
     </section> -->
  <!-- testimonial test end -->
  <!-- second section testimonial start -->
  <section>
  <div class="container mt-12">
   <h2 class="font-bold">Loved by thousand <span style="color:#07528E">Clients</span></h2>
  <div class="carousel">
    <div class="flex justify-end  ">
        <div class="nav nav-left my-3">
          <button class="left-btn"> &lt;</button>
         
        </div>
        <div class="nav nav-right my-3">
          <button class="right-btn">&gt;</button>
        </div>
      </div>
  
          <div class="carousel-content grid xl:grid-cols-3 md:grid-cols-3 grid-cols-1  gap-2 relative overflow-hidden">
                      
            <div class="slide ">
              <div class="px-4  ">
                <p class="font-semibold">“We encounterrd a problem with
                  peocessing big data and offer only1 
                  week, all fixed, professional, fast & 
                  affordable price!”</p>
                <div class="flex space-x-2">
                  <div>
                    <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
                  </div>
                  <div class="flex flex-col ml-3">
                    <h6 class="text-gray-700 text-sm font-bold">
                      Neha Surbhi
                    </h6>
                    <p class="text-xs text-gray-500">
                      CTO at IBM
                    </p>
                  </div>
                </div>
  
              </div>
            </div>
            <div class="slide ">
              <div class="px-4 ">
              <p class="font-semibold">“We encounterrd a problem with
              peocessing big data and offer only1 
              week, all fixed, professional, fast & 
              affordable price!”</p>
              <div class="flex space-x-2">
                <div>
                  <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
                </div>
                <div class="flex flex-col ml-3">
                  <h6 class="text-gray-700 text-sm font-bold">
                    Neha Surbhi
                  </h6>
                  <p class="text-xs text-gray-500">
                    CTO at IBM
                  </p>
                </div>
              </div>
  
            </div>
            </div>
            <div class="slide ">
              <div class="px-4 ">
              <p class="font-semibold">“We encounterrd a problem with
              peocessing big data and offer only1 
              week, all fixed, professional, fast & 
              affordable price!”</p>
            <div class="flex space-x-2">
              <div>
                <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
              </div>
              <div class="flex flex-col ml-3">
                <h6 class="text-gray-700 text-sm font-bold">
                  Neha Surbhi
                </h6>
                <p class="text-xs text-gray-500">
                  CTO at IBM
                </p>
              </div>
            </div>
  
             </div>
            </div>
            <div class="slide ">
              <div class="px-4 ">
              <p class="font-semibold">“We encounterrd a problem with
              peocessing big data and offer only1 
              week, all fixed, professional, fast & 
              affordable price!”</p>
              <div class="flex space-x-2">
                <div>
                  <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
                </div>
                <div class="flex flex-col ml-3">
                  <h6 class="text-gray-700 text-sm font-bold">
                    Neha Surbhi
                  </h6>
                  <p class="text-xs text-gray-500">
                    CTO at IBM
                  </p>
                </div>
              </div>
  
            </div>
            </div>
            <div class="slide ">
              <div class="px-4 ">
              <p class="font-semibold">“We encounterrd a problem with
              peocessing big data and offer only1 
              week, all fixed, professional, fast & 
              affordable price!”</p>
            <div class="flex space-x-2">
              <div>
                <img class="rounded-full w-10" src="https://randomuser.me/api/portraits/med/men/75.jpg" alt="">
              </div>
              <div class="flex flex-col ml-3">
                <h6 class="text-gray-700 text-sm font-bold">
                  Neha Surbhi
                </h6>
                <p class="text-xs text-gray-500">
                  CTO at IBM
                </p>
              </div>
            </div>
            </div>
            </div>
          </div>
      </div>  
  </div>
  </section>
  <!-- second section testimonial end -->
  
   <!-- countdown section start -->
   <section>
    <div class="container mt-8">
      <div class="grid xl:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 py-5 xs:grid-cols-2 gap-2 justify-around rounded-xl  px-5 " style="background-color:#07528E;">
    
        <div class="flex space-x-2  PX-4 font-bold">
              <h2 class="counter text-white" data-speed="100">325
            </h2>
              <h6 class="text-white ml-3 mt-2">
                HAPPY CLIENT
              </h6>
          </div>
          <div class="flex space-x-2 PX-4 font-bold">
              <h2 class="counter text-white" data-speed="100">425
            </h2>
              <h6 class="text-white ml-3 mt-2">
                PRODUCTS
              </h6>
          </div>
        
          <div class="flex space-x-2 PX-4 font-bold">
              <h2 class="counter text-white " data-speed="100">15
            </h2>
              <h6 class="text-white ml-3 mt-2">
                YEARS OF EXPERIENCE
              </h6>
          </div>
  
          <div class="flex space-x-2 PX-4 font-bold">
              <h2 class="counter text-white" data-speed="100">800
            </h2>
              <h6 class="text-white ml-3 mt-2  ">
                HAPPY CLIENT
              </h6>
          </div>
      </div>
    </div>
    </section>
   <!-- countdown end -->
  
  <!-- Features section start -->
  <section>
    <div class="pt-2 mt-5 py-5" style="background-color:#F0EFF5"> 
    <div class="container">
      <h2 class="font-bold mt-3">Our Main <span style="color:#07528E"> Features</span></h2>
      <div class="grid xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 gap-6 my-5 justify-around  ">
         <div class="bg-white px-4  py-4 rounded-md">
          <img :src="'/imgs/feature_1.png'" class="img-fluid" alt="" >
          <h5 class="pt-3 font-bold text-lg">IT Cunsultation</h5>
            <p class="pt-3 font-semibold text-gray-500">We provide best IT solutions for
              any type of business as
              strategy, management.</p>
            <p class="pt-3 text-sm font-bold" style="color:#07528E">See Projects</p>  
         </div>
  
         <div class="bg-white px-4  py-4 rounded-md">
          <img :src="'/imgs/feature_2.png'" class="img-fluid" alt="" >
          <h5 class="pt-3 font-bold text-lg">Software Development</h5>
            <p class="pt-3 font-semibold text-gray-500">We provide best IT solutions for
              any type of business as
              strategy, management.</p>
            <p class="pt-3 text-sm font-bold" style="color:#07528E">See Projects</p>  
         </div>
  
         <div class="bg-white px-4  py-4 rounded-md">
          <img :src="'/imgs/feature_3.png'" class="img-fluid" alt="" >
          <h5 class="pt-3 font-bold text-lg">AI Machine Laerning</h5>
            <p class="pt-3 font-semibold text-gray-500">We provide best IT solutions for
              any type of business as
              strategy, management.</p>
            <p class="pt-3 text-sm font-bold" style="color:#07528E">See Projects</p>  
         </div>
  
         <div class="bg-white px-4  py-4 rounded-md">
          <img :src="'/imgs/feature_4.png'" class="img-fluid" alt="" >
          <h5 class="pt-3 font-bold text-lg">Data Security</h5>
            <p class="pt-3 font-semibold text-gray-500">We provide best IT solutions for
              any type of business as
              strategy, management.</p>
            <p class="pt-3 text-sm font-bold " style="color:#07528E">See Projects</p>  
         </div>
  
        </div>
        </div>
      </div>
  </section>
   <!-- features section end -->

   <!-- computer service section start -->
   <div class="py-5 bg-white">
     
     <div class="container">
     <div class="text-center mb-5">
     
         <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
           Our<span style="color:#07528E"> Services</span>
         </h3>
     </div>
     
     <div class="mx-auto grid grid-cols-1 md:grid-cols-4 md:col-gap-6 md:row-gap-8 flex-row  justify-center">
        <!-- display view start -->
       <div class="Leftdp">
           <div class="grid grid-cols-1 md:row-gap-8">

             <div class="my-3 md:mt-0">
             <div class="flex">
             
               <div class="mr-2 text-right">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
             </div>
             </div>
             <div class="my-3 md:mt-0">
             <div class="flex">
             
               <div class="mr-2 text-right">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
             </div>
             </div>
             <div class="my-3 md:mt-0">
             <div class="flex">
             
               <div class="mr-2 text-right">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
             </div>
             </div>

           </div>
       </div>
       <!-- display End -->

       <!-- Mobile view start -->
       <div class="Rightdp">
           <ul class="grid grid-cols-1 md:row-gap-10">

             <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
                   <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
                   <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
           </ul>
         </div>
       <!-- Mobile view end -->
       
       
         <div class="col-span-2 " style="">
           <img :src="'/imgs/tally_img1.png'" class="img-fluid " alt="" >
         </div>

         <div class="">
           <ul class="grid grid-cols-1 md:row-gap-10">

             <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
                   <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
                   <div class="my-3 md:mt-0">
             <div class="flex">
               <div class="flex-shrink-0">
                 <div class="flex items-center justify-center ">
                   <img :src="'/imgs/addons_icon5.png'" class="img-fluid " alt="" >
                 </div>
               </div>
               <div class="ml-2">
                 <h4 class="text-lg leading-6 font-medium text-gray-900">Feature Name</h4>
                 <p class=" text-sm text-gray-500">
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 </p>
               </div>
             </div>
                   </div>
           </ul>
         </div>
       
     </div>
     </div>
   </div>
   <!-- computer section end -->
  
   <!-- price plan section -->
   <div class="">
      <section>
        <div class="mt-4">
        <div class="container">
        <h2 class="font-bold">Choose Plan and <span style="color:#07528E;">Kick start</span></h2>
        <p class="text-sm" style="color:6A6969">Whether you're just getting started with rapid testing or scaling across the organization, we;ve got your covered.</p>
        <div class="flex space-x-2 justify-center py-3">
          <ul></ul>
    <ul class="priceNav py-2 px-4 ">
      <li id="pTab1" class="ptItem active">Monthly</li>
      <li id="pTab2" class="ptItem">Yearly</li>
    </ul>
    <ul></ul>
  </div>
  
    <div class="prodBody ">
     
      <div class="prodMain active" id="pTab1C">
        <!-- display view --> 
        <div class="Prices1">
       <table >
    <thead>
      <tr>
        <th>
          <img :src="'/imgs/illustrator4.png'" class="img-fluid img_size" alt="" >
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Free</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Pro</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Max</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Unlimited Projects</td>
        <td>G</td>
        <td>6-5</td>
        <td>195</td>
      </tr>
      <tr>
        <td>Lifetime Support & SEO Expert Consult</td>
        <td>F</td>
        <td>6-9</td>
        <td>266</td>
      </tr>
      <tr>
        <td>Advance Dashbosrd</td>
        <td>G-F</td>
        <td>6-7</td>
        <td>220</td>
      </tr>
      <tr>
        <td>Data Security & Backup</td>
        <td>F</td>
        <td>6-9</td>
        <td>220</td>
      </tr>
      <tr>
        <td>Cloud Hosting & Domain</td>
        <td>F</td>
        <td>6-9</td>
        <td>225</td>
      </tr>
      <tr>
        <td>Free Google Analysis</td>
        <td>G</td>
        <td>6-7</td>
        <td>193</td>
      </tr>
      <tr>
        <td>Multi-vendor MarketPlace Support</td>
        <td>G</td>
        <td>6-4</td>
        <td>190</td>
      </tr>
      <tr>
        <td>Seller App</td>
        <td>C</td>
        <td>6-10</td>
        <td>250</td>
      </tr>
      <tr>
        <td>Auto Lifetime Upgrade</td>
        <td>C</td>
        <td>6-11</td>
        <td>232</td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs sm:text_sm xs:text_sm rounded-full" style="background-color:#07528E">Get Started </button>
        </td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs sm:text_sm xs:text_sm rounded-full" style="background-color:#07528E">Get Started </button>
        </td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs sm:text_sm xs:text_sm rounded-full" style="background-color:#07528E">Get Started </button>
        </td>
      </tr>
     
    
    </tbody>
       </table>
      </div>
         <!-- display view end -->

          <!-- pricing mobile view -->
          <div class="Prices2">
   
      <!-- card 1 -->
      <div class=" w-full rounded border-2 "> 
        <div class="text-center  text-white p-4" style="background-color:#07528E;">
      <h5>
        Basic
      </h5>
     <hr>
      <p>Generous limits to get started </p>
      <h4>Standard</h4>
     </div>
         <div class="flex justify-between prc">  
        <p class="justify-start">Unlimited Projects</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
        <p class="justify-end">10k/month </p>
      </div> 
      <div class="flex justify-between prc">  
        <p class="justify-start">Advance Dashboard</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Data Security & Backup</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Cloud Hosting & Domain</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Free Google Analysis</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Multi-vendor MarketPlace Support</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Seller App</p>
        <p class="justify-end">10k/month </p>
      </div>
  <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
      <button></button>
        <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight rounded ">Get Started Now</button>
        <button></button>
  </div>
      </div>

      <!-- card 2 -->
      <div class=" w-full rounded border-2 my-5 "> 
        <div class="text-center  text-white p-4" style="background-color:#07528E;">
      <h5>
        Basic
      </h5>
     <hr>
      <p>Generous limits to get started </p>
      <h4>Pro</h4>
     </div>
         <div class="flex justify-between prc">  
        <p class="justify-start">Unlimited Projects</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
        <p class="justify-end">10k/month </p>
      </div> 
      <div class="flex justify-between prc">  
        <p class="justify-start">Advance Dashboard</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Data Security & Backup</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Cloud Hosting & Domain</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Free Google Analysis</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Multi-vendor MarketPlace Support</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Seller App</p>
        <p class="justify-end">10k/month </p>
      </div>
  <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
      <button></button>
        <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight rounded ">Get Started Now</button>
        <button></button>
  </div>
      </div>
      
      <!-- card3 -->
      <div class=" w-full rounded border-2 "> 
        <div class="text-center  text-white p-4" style="background-color:#07528E;">
      <h5>
        Basic
      </h5>
     <hr>
      <p>Generous limits to get started </p>
      <h4>Max</h4>
     </div>
         <div class="flex justify-between prc">  
        <p class="justify-start">Unlimited Projects</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
        <p class="justify-end">10k/month </p>
      </div> 
      <div class="flex justify-between prc">  
        <p class="justify-start">Advance Dashboard</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Data Security & Backup</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Cloud Hosting & Domain</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Free Google Analysis</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Multi-vendor MarketPlace Support</p>
        <p class="justify-end">10k/month </p>
      </div>
      <div class="flex justify-between prc">  
        <p class="justify-start">Seller App</p>
        <p class="justify-end">10k/month </p>
      </div>
  <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
      <button></button>
        <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight  rounded ">Get Started Now</button>
        <button></button>
  </div>
      </div>
           

</div>
   <!-- pricing mobile view end -->
      </div>
     
  
      <div class="prodMain" id="pTab2C">
        <!-- display view -->
        <div class="Prices3">
        <table>
    <thead>
      <tr>
        <th>
          <img :src="'/imgs/illustrator4.png'" class="img-fluid img_size" alt="" >
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Free</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Free</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
        <th class="text-center">
          <h6>BASIC</h6>
          <h2>Free</h2>
          <p class="text-xs">Free forever..!</p>
          <p class="text-xs">No Credit Card required</p>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Unlimited Projects</td>
        <td>G</td>
        <td>6-5</td>
        <td>195</td>
      </tr>
      <tr>
        <td>Lifetime Support & SEO Expert Consult</td>
        <td>F</td>
        <td>6-9</td>
        <td>266</td>
      </tr>
      <tr>
        <td>Advance Dashbosrd</td>
        <td>G-F</td>
        <td>6-7</td>
        <td>220</td>
      </tr>
      <tr>
        <td>Data Security & Backup</td>
        <td>F</td>
        <td>6-9</td>
        <td>220</td>
      </tr>
      <tr>
        <td>Cloud Hosting & Domain</td>
        <td>F</td>
        <td>6-9</td>
        <td>225</td>
      </tr>
      <tr>
        <td>Free Google Analysis</td>
        <td>G</td>
        <td>6-7</td>
        <td>193</td>
      </tr>
      <tr>
        <td>Multi-vendor MarketPlace Support</td>
        <td>G</td>
        <td>6-4</td>
        <td>190</td>
      </tr>
      <tr>
        <td>Seller App</td>
        <td>C</td>
        <td>6-10</td>
        <td>250</td>
      </tr>
      <tr>
        <td>Auto Lifetime Upgrade</td>
        <td>C</td>
        <td>6-11</td>
        <td>232</td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs rounded-full" style="background-color:#07528E">Get Started Now</button>
        </td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs rounded-full" style="background-color:#07528E">Get Started Now</button>
        </td>
        <td>
          <button type="button" class="inline-block px-4 h-10 border-2  text-white font-semibold text-xs rounded-full" style="background-color:#07528E">Get Started Now</button>
        </td>
      </tr>
     
    
    </tbody>
       </table>
      </div>
      <!-- display view end -->

       <!-- pricing mobile view -->
       <div class="Prices4">
    
        
          <div class=" w-full rounded border-2 "> 
            <div class="text-center  text-white p-4" style="background-color:#07528E;">
          <h5>
          Basic
          </h5>
        <hr>
          <p>Generous limits to get started </p>
          <h4>Standard</h4>
        </div>
            <div class="flex justify-between prc">  
            <p class="justify-start">Unlimited Projects</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
            <p class="justify-end">10k/month </p>
          </div> 
          <div class="flex justify-between prc">  
            <p class="justify-start">Advance Dashboard</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Data Security & Backup</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Cloud Hosting & Domain</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Free Google Analysis</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Multi-vendor MarketPlace Support</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Seller App</p>
            <p class="justify-end">10k/month </p>
          </div>
      <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
          <button></button>
            <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight  rounded ">Get Started Now</button>
            <button></button>
      </div>
          </div>

          <div class=" w-full rounded border-2 my-5"> 
            <div class="text-center  text-white p-4" style="background-color:#07528E;">
          <h5>
          Basic
          </h5>
        <hr>
          <p>Generous limits to get started </p>
          <h4>Pro</h4>
        </div>
            <div class="flex justify-between prc">  
            <p class="justify-start">Unlimited Projects</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
            <p class="justify-end">10k/month </p>
          </div> 
          <div class="flex justify-between prc">  
            <p class="justify-start">Advance Dashboard</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Data Security & Backup</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Cloud Hosting & Domain</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Free Google Analysis</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Multi-vendor MarketPlace Support</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Seller App</p>
            <p class="justify-end">10k/month </p>
          </div>
      <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
          <button></button>
            <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight  rounded ">Get Started Now</button>
            <button></button>
      </div>
          </div>

          <div class=" w-full rounded border-2 "> 
            <div class="text-center  text-white p-4" style="background-color:#07528E;">
          <h5>
          Basic
          </h5>
        <hr>
          <p>Generous limits to get started </p>
          <h4>Max</h4>
        </div>
            <div class="flex justify-between prc">  
            <p class="justify-start">Unlimited Projects</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Lifetime Support & SEO Expert Consult</p>
            <p class="justify-end">10k/month </p>
          </div> 
          <div class="flex justify-between prc">  
            <p class="justify-start">Advance Dashboard</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Data Security & Backup</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Cloud Hosting & Domain</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Free Google Analysis</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Multi-vendor MarketPlace Support</p>
            <p class="justify-end">10k/month </p>
          </div>
          <div class="flex justify-between prc">  
            <p class="justify-start">Seller App</p>
            <p class="justify-end">10k/month </p>
          </div>
      <div class="flex space-x-2 justify-center py-3" style="background-color:#07528e">
          <button></button>
            <button type="button" class="inline-block px-6 py-2 border-2 text-blue-500 bg-white font-medium text-xs leading-tight  rounded ">Get Started Now</button>
            <button></button>
      </div>
          </div>
              
  
      </div>
   <!-- pricing mobile view end -->
      </div>
    </div>

    <!-- compare card start -->
      <div class=" py-2 px-4 mt-4 flex justify-start " style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px; background-color: #F5F5F5;">
        <div>
        <img :src="'/imgs/tally_question.png'" class="img-fluid" alt="" >
        </div>
        <div class=" flex-col mt-4">
          <h4 class="font-semibold" style="color:#07528E;">Compare Plans <span>&#8594;</span></h4>
        
          <div class="flex justify-between ...">
        <p class="text-gray-500">All plans come with 100% money back guarantee</p>
        <p>&nbsp; </p> 
        <img :src="'/imgs/question_mark_tally.png'" class="img-fluid" alt="" >
        
      </div>
    </div> 
      </div>
    <!-- compare card end --> 
    
        </div>
      </div>
      </section>
    </div>
   <!-- Pricing Plan end -->

   
   
   <!-- tallyclinic Journal start -->
     <section>
      <div class=" mt-5  py-5" style="background-color:#F0EFF5">
        <!-- <img :src="'/imgs/tally_journal.png'" class="img-fluid" alt="" > -->
        
        <div class="container">
          <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-1  gap-4">
            <div>
        <!-- <div class="journal_caption"> -->
        <h2 class="font-bold ">TallyClinic <span style="color:#07528E;"> Journal</span></h2>
  
        <!-- <div class="flex space-x-2"> -->
          <div class="flex justify-between  p-2  pt-4">
                              <div class="flex justify-between space-x-2">
                                  <div>
                    <img :src="'/imgs/card2.jpg'" class="img-fluid imgs_size" alt=""  >
                                  </div>
                                  <div class="flex flex-col ml-3">
                    <div>
                                      <h6 class=" text-sm font-semibold" style="color:#07528E">
                                          Tips & Tricks
                                      </h6>
                  </div>
                  <div>
                    <h6 class="mt-4 text-gray-700 font-bold">
                                          How To Become A Php Developer Expert
                                      </h6>
                    </div>
                                  <br>
                                  <div class="flex  mt-4 space-x-2">
                      
                        <button class="ic_journal">A</button>
                      
                                      <h6 class="text-gray-700 text-sm ">
                                          Product Name
                                      </h6>
                 
                  </div>
                
  
                                  </div>
                              </div>
                              <span >
                  <div class="flex justify-between space-x-2">
                      
                      <button class="ic_journal">A</button>
                  <h6 class="text-gray-700">
                    Product Name
                  </h6>
               
                </div>
                              </span>
                          </div>
  
              <div class="border-b-2 mt-3 border-black ..."></div>
  
              <!-- .... -->
              <div class="flex justify-between  p-2  pt-4">
                              <div class="flex justify-between space-x-2">
                                  <div>
                    <img :src="'/imgs/card2.jpg'" class="img-fluid imgs_size" alt=""  >
                                  </div>
                                  <div class="flex flex-col ml-3">
                    <div>
                      <h6 class=" text-sm font-semibold" style="color:#07528E">
                                          Tips & Tricks
                                      </h6>
                  </div>
                  <div>
                    <h6 class="mt-4 text-gray-700 font-bold">
                                          How To Become A Php Developer Expert
                                      </h6>
                    </div>
                                  <br>
                                  <div class="flex  mt-4 space-x-2">
                      
                        <button class="ic_journal">A</button>
                      
                                      <h6 class="text-gray-700 text-sm">
                                          Product Name
                                      </h6>             
                  </div>
                
                                  </div>
                              </div>
                              <span >
                  <div class="flex justify-between space-x-2">
                      
                      <button class="ic_journal">A</button>
                  <h6 class="text-gray-700">
                    Product Name
                  </h6>
               
                </div>
                              </span>
                          </div>
  
              <div class="border-b-2 mt-3 border-black "></div>
  
               <!-- .... -->
               <div class="flex justify-between  p-2  pt-4">
                              <div class="flex justify-between space-x-2">
                                  <div>
                    <img :src="'/imgs/card2.jpg'" class="img-fluid imgs_size" alt=""  >
                                  </div>
                                  <div class="flex flex-col ml-3">
                    <div>
                      <h6 class=" text-sm font-semibold" style="color:#07528E">
                                          Tips & Tricks
                                      </h6>
                  </div>
                  <div>
                    <h6 class="mt-4 text-gray-700 font-bold">
                                          How To Become A Php Developer Expert
                                      </h6>
                    </div>
                                  <br>
                                  <div class="flex  mt-4 space-x-2">
                      
                        <button class="ic_journal">A</button>
                      
                                      <h6 class="text-gray-700 text-sm">
                                          Product Name
                                      </h6>
                 
                  </div>
                
  
                                  </div>
                              </div>
                              <span >
                  <div class="flex justify-between space-x-2">
                      
                      <button class="ic_journal">A</button>
                  <h6 class="text-gray-700">
                    Product Name
                  </h6>
               
                </div>
                              </span>
                          </div>
             
              <div class="border-b-2 mt-3 border-black "></div>
              <div class="flex mt-3  space-x-2">
              <h6 class="text-gray-700 ">
                SEE MORE
              </h6>
              <i class="fas fa-chevron-right ml-3"></i>
            </div>
            </div>
          
              <!-- right faq start -->
              <div class="vl">
                <h2 class="font-bold ml-3" style="color:#07528E;">FAQ'S</h2>
                <ul class="accordion ml-3">
                    <li>
                        <a>Lorem ipsum</a>
                        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                    </li>
                    <li>
                        <a class="py-2">Repellat Odit Aliquid</a>
                        <p>Lorem ipsum dolor sit amet, quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                    </li>
                    <li>
                        <a class="py-2">Dolor sit Amet</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                    </li>
                  <li>
                        <a class="py-2">Repellat Odit Aliquid</a>
                        <p>Lorem ipsum dolor sit amet, quas tempora maxime rerum neque deserunt suscipit provident cumque et mollitia sapiente voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                    </li>
                    <li>
                        <a class="py-2">Dolor sit Amet</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, ipsum, fuga, in, obcaecati voluptatibus eos at perferendis repellat odit aliquid harum molestias ratione pariatur adipisci. Aliquid, iure.</p>
                    </li>
                  <div class="flex mt-5  space-x-2">
                    <h6 class="text-gray-700 ">
                      SEE MORE
                    </h6>
                    <i class="fas fa-chevron-right ml-3"></i>
                    </div>
                </ul> 
              </div>
          </div>
        </div>
      </div>
  </section>
   <!-- tallyclinic journal end -->
  
    <!-- Last section start -->
     <section>
      <div style="background-color:#07528E ">
        <div class="container">
          <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2 get_info justify-between ">
            <div>
             <h4 class="text-white font-semibold"> Asses Your Business Potentials Now & Finds
              Opportunities For <i> Bigger sucess</i></h4>
            </div>
            <div>
              <div class="flex space-x-2 justify-end " style="">
                <button type="button" class="inline-block px-4 h-10 border-2 bg-white text-gray-800  font-semibold text-xs rounded-full">Let's Chat</button>
                <button type="button" class="inline-block px-5 h-10 border-2 border-white text-white  font-semibold text-xs rounded-full">Get Information</button>
        <!-- <button type="button" class="inline-block w-full px-2 h-12 border-2 border-black text-gray-800 font-semibold text-sm sm:text-xs  rounded-full">Your enquiry about</button> -->
  
      </div>
            </div>
            </div>
        </div>
  
      </div>
     </section>
    <!-- Last section end -->
  
    <!-- footer start -->
    <div>
        <footer class="section bg-footer section-main-container">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">
                      <div class="">
                          <h6 class="footer-heading text-uppercase text-white">Get our app</h6>
  
                          <div class="">
                              <a href=""><img
                                      src="/imgs/gp.png"
                                      class="footer-download-icon img-fluid mt-2"></a>
                              <a href=""> <img
                                      src="/imgs/gp2.png"
                                      class="footer-download-icon img-fluid mt-2"></a>
                          </div>
                      </div>
                  </div>
  
                  <div class="col-lg-3">
                      <div class="">
                          <h6 class="footer-heading text-uppercase text-white">Resources</h6>
                          <ul class="list-unstyled footer-link">
                              <li><a href="">Menu 1</a></li>
                              <li><a href="">Menu 2</a></li>
                              <li><a href="">Menu 3</a></li>
                              <li><a href="">Menu 4</a></li>
                          </ul>
                      </div>
                  </div>
  
                  <div class="col-lg-2">
                      <div class="">
                          <h6 class="footer-heading text-uppercase text-white">Help</h6>
                          <ul class="list-unstyled footer-link">
                              <li><a href="">Menu 1</a></li>
                              <li><a href="">Menu 2</a></li>
                              <li><a href="">Menu 3</a></li>
                              <li><a href="">Menu 4</a></li>
                          </ul>
                      </div>
                  </div>
  
                  <div class="col-lg-4">
                      <div class="">
                          <h6 class="footer-heading text-uppercase text-white">Contact Us</h6>
                          <table>
                            <tbody>
                              <tr>
                                  <td style="text-align: center; vertical-align: middle;">
                                      <i class="fas fa-envelope contact-info-icon"></i>
                                  </td>
                                  <td>
                                      <p class="mt-2 contact-info-data"> &nbsp; abc@aruvaa.com</p>
                                  </td>
                              </tr>
                              <tr>
                                  <td style="text-align: center; vertical-align: middle;">
                                      <i class="fas fa-mobile-alt contact-info-icon"></i>
                                  </td>
                                  <td>
                                      <p class="mt-2 contact-info-data"> &nbsp; +01 123-456-7890</p>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
  
   </div>
                  </div>
  
              </div>
          </div>
  
          <div class="text-center mt-5 container">
              <hr class="footer-hr">
              <div class="d-flex justify-content-center below-hr-container">
                  <a href=""><span>Privary Policy</span></a>
                  <span class="ml-3 mr-3">|</span>
                  <a href=""><span>Terms of use</span></a>
                  <span class="ml-3 mr-3">|</span>
                  <a href=""><span>Cookie Privacy</span></a>
                  <span class="ml-3 mr-3">|</span>
                  <a href=""><span>Abuse Policy</span></a>
                  <span class="ml-3 mr-3">|</span>
                  <a href=""><span>Anti-spam Policy</span></a>
              </div>
              <p class="footer-alt mb-0 f-14 mt-2">2019 © Aruvaa, All Rights Reserved</p>
          </div>
      </footer>
    </div>
    <!-- footer end -->
  
    <!-- pricing start -->
        
  
    <!-- pricing end -->
  </template>
  
  <script>
   import { Head, Link } from '@inertiajs/inertia-vue3';
    
    export default {
      
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
    
        },
        
         data() {
        return {
              canRegister:true,
            ///url: '/', 
        }
    },
  
    mounted(){
      // countdown
      let counter = document.querySelectorAll(".counter");
  let arr = Array.from(counter);
  
  arr.map((item)=>{
      let count = item.innerHTML;
      item.innerHTML = "";
      let countNumber = 0;
      function counterUp(){
          item.innerHTML = countNumber++;
          if(countNumber > count){
              clearInterval(stop);
          }
      }
      let stop = setInterval(()=>{
          counterUp();
      }, item.dataset.speed/count);     
  }),
  //  Pricing
  $(document).ready(function () {
    var pTabItem = $(".priceNav .ptItem");
    $(pTabItem).click(function () {
      // Tab nav active functionality
      $(pTabItem).removeClass("active");
      $(this).addClass("active");
  
      // Tab container active functionality
      var tabid = $(this).attr("id");
      $(".prodMain").removeClass("active");
      $("#" + tabid + "C").addClass("active");
  
      return false;
    });
  });
  
  // faq's
  (function($) {
      $('.accordion > li:eq(0) a').addClass('active').next().slideDown();
  
      $('.accordion a').click(function(j) {
          var dropDown = $(this).closest('li').find('p');
  
          $(this).closest('.accordion').find('p').not(dropDown).slideUp();
  
          if ($(this).hasClass('active')) {
              $(this).removeClass('active');
          } else {
              $(this).closest('.accordion').find('a.active').removeClass('active');
              $(this).addClass('active');
          }
  
          dropDown.stop(false, true).slideToggle();
  
          j.preventDefault();
      });
  })(jQuery);
  
  // crousal
  var carousel = document.querySelector('.carousel');
  var carouselContent = document.querySelector('.carousel-content');
  var slides = document.querySelectorAll('.slide');
  var arrayOfSlides = Array.prototype.slice.call(slides);
  var carouselDisplaying;
  var screenSize;
  setScreenSize();
  var lengthOfSlide;
  
  function addClone() {
     var lastSlide = carouselContent.lastElementChild.cloneNode(true);
     lastSlide.style.left = (-lengthOfSlide) + "px";
     carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
  }
  // addClone();
  
  function removeClone() {
    var firstSlide = carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
  }
  
  function moveSlidesRight() {
    var slides = document.querySelectorAll('.slide');
    var slidesArray = Array.prototype.slice.call(slides);
    var width = 0;
  
    slidesArray.forEach(function(el, i){
      el.style.left = width + "px";
      width += lengthOfSlide;
    });
    addClone();
  }
  moveSlidesRight();
  
  function moveSlidesLeft() {
    var slides = document.querySelectorAll('.slide');
    var slidesArray = Array.prototype.slice.call(slides);
    slidesArray = slidesArray.reverse();
    var maxWidth = (slidesArray.length - 1) * lengthOfSlide;
  
    slidesArray.forEach(function(el, i){
      maxWidth -= lengthOfSlide;
      el.style.left = maxWidth + "px";
    });
  }
  
  window.addEventListener('resize', setScreenSize);
  
  function setScreenSize() {
    if ( window.innerWidth >= 500 ) {
      carouselDisplaying = 3;
    } else if ( window.innerWidth >= 300 ) {
      carouselDisplaying = 2;
    } else {
      carouselDisplaying = 1;
    }
    getScreenSize();
  }
  
  function getScreenSize() {
    var slides = document.querySelectorAll('.slide');
    var slidesArray = Array.prototype.slice.call(slides);
    lengthOfSlide = ( carousel.offsetWidth  / carouselDisplaying );
    var initialWidth = -lengthOfSlide;
    slidesArray.forEach(function(el) {
      el.style.width = lengthOfSlide + "px";
      el.style.left = initialWidth + "px";
      initialWidth += lengthOfSlide;
    });
  }
  
  
  var rightNav = document.querySelector('.nav-right');
  rightNav.addEventListener('click', moveLeft);
  
  var moving = true;
  function moveRight() {
    if ( moving ) {
      moving = false;
      var lastSlide = carouselContent.lastElementChild;
      lastSlide.parentNode.removeChild(lastSlide);
      carouselContent.insertBefore(lastSlide, carouselContent.firstChild);
      removeClone();
      var firstSlide = carouselContent.firstElementChild;
      firstSlide.addEventListener('transitionend', activateAgain);
      moveSlidesRight();
    }
  }
  
  function activateAgain() {
    var firstSlide = carouselContent.firstElementChild;
    moving = true;
    firstSlide.removeEventListener('transitionend', activateAgain);
  }
  
  var leftNav = document.querySelector('.nav-left');
  leftNav.addEventListener('click', moveRight);
  
  // var moveLeftAgain = true;
  
  function moveLeft() {
    if ( moving ) {
      moving = false;
      removeClone();
      var firstSlide = carouselContent.firstElementChild;
      firstSlide.addEventListener('transitionend', replaceToEnd);
      moveSlidesLeft();
    }
  }
  
  function replaceToEnd() {
    var firstSlide = carouselContent.firstElementChild;
    firstSlide.parentNode.removeChild(firstSlide);
    carouselContent.appendChild(firstSlide);
    firstSlide.style.left = ( (arrayOfSlides.length -1) * lengthOfSlide) + "px";
    addClone();
    moving = true;
    firstSlide.removeEventListener('transitionend', replaceToEnd);
  }
  
  
  
  
  carouselContent.addEventListener('mousedown', seeMovement);
  
  var initialX;
  var initialPos;
  function seeMovement(e) {
    initialX = e.clientX;
    getInitialPos();
    carouselContent.addEventListener('mousemove', slightMove);
    document.addEventListener('mouseup', moveBasedOnMouse);
  }
  
  function slightMove(e) {
    if ( moving ) {
      var movingX = e.clientX;
      var difference = initialX - movingX;
      if ( Math.abs(difference) < (lengthOfSlide/4) ) {
        slightMoveSlides(difference);
      }  
    }
  }
  
  function getInitialPos() {
    var slides = document.querySelectorAll('.slide');
    var slidesArray = Array.prototype.slice.call(slides);
    initialPos = [];
    slidesArray.forEach(function(el){
      var left = Math.floor( parseInt( el.style.left.slice(0, -2 ) ) ); 
      initialPos.push( left );
    });
  }
  
  function slightMoveSlides(newX) {
    var slides = document.querySelectorAll('.slide');
    var slidesArray = Array.prototype.slice.call(slides);
    slidesArray.forEach(function(el, i){
      var oldLeft = initialPos[i];
      el.style.left = (oldLeft + newX) + "px";
    });
  }
  
  function moveBasedOnMouse(e) { 
    var finalX = e.clientX;
    if ( initialX - finalX > 0) {
      moveRight();
    } else if ( initialX - finalX < 0 ) {
      moveLeft();
    }
    document.removeEventListener('mouseup', moveBasedOnMouse);
    carouselContent.removeEventListener('mousemove', slightMove);
  };
  $(function() {
      $('.item').matchHeight();
  });
  $(function() {
      $('.item').matchHeight();
  });
    }
    }
  </script>
  
  <style scoped>
  :root {
        --blue: #07528E;
        --white: #ffffff;
        --tally: #4C8BBA;
        --yellow: #E9A716;
        --black: #333333;
        --input_grey: #F0EFF5;
        --hint_grey: #bfbfbf;
        
    }
    * {
        outline: none;
    }
    h6{
      margin-bottom: 0.1rem;
    }
    p{
      margin-bottom: 0.1rem;
    }
   .font{
    font-size:50px;
   } 
  .navbar {
  position: relative;
  display: flex;
  align-items: center; 
  padding: .5rem 5rem;
}
/* .btn{
  padding: 0px 3px;
} */
.img_size{
    height: auto;
    width: 156px;
  }
    
    /*Scroll - START*/
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    /*Scroll - END*/
    .nav-link-header {
        color: #9c761f !important;
        font-weight: 650 !important;
        font-size: 16px;
    }
    .support-dashboard-container {
        background-color: #0068CA;
        color: var(--white);
    }
    .search-button {
        border: 1px solid #011969;
        font-style: normal;
        margin-left: 4px;
        font-weight: 700;
        background-color: #001969;
        color: white;
        font-size: 15px;
    }
    .search-button:hover {
        text-decoration: none;
        color: #ffffff;
    }
    .category-container {
        font-size: 14px;
        border: 1px solid var(--blue);
        height: 100px;
        color: var(--black);
        transition: 0.2s;
    }
    .category-container:hover {
        box-shadow: 0 0 4px 1px var(--blue);
    }
    .category-container-link:hover {
        text-decoration: none;
    }
  
    /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {
   .vl{
    display: none;
  } 
  .font{
    font-size:22px;
  }
  .Prices1{
   display:none;
  }  .Prices3{
    display:none;
  }
  .Leftdp{
    display:none;
  }
  }
  
  /* Small devices (portrait tablets and large phones, 600px and up) */
  @media only screen and (min-width: 600px) {
  .font{
    font-size:24px;
  }
  .Prices1{
   display:none;
  }
  .Prices2{
   display:block;
  }
  .Prices3{
   display:none;
  }
  .Prices4{
   display:block;
  }
  .Leftdp{
   display:none;
  }
  .Rightdp{
   display:block;
  }
  } 
  @media  only screen and (max-width: 758px) {  
    .navbar {
  padding: .5rem 1rem;
}
  }
  
  /* Medium devices (landscape tablets, 768px and up) */
  @media only screen and (min-width: 768px) {
    .carousel {
    height: 340px;
    margin: 0 auto;
  }
   
  .font{
    font-size:27px;
  }
 
  }
  @media only screen and (max-width: 992px) {
    .navbar {
  padding:.5rem 1rem;
}

  }
  /* Large devices (laptops/desktops, 992px and up) */
  @media only screen and (min-width: 992px) {
  .font{
    font-size:30px;
  }
  .Prices2{
   display:none;
  }
  .Prices1{
   display:block;
  } 
  .Prices4{
   display:none;
  }
  .Prices3{
   display:block;
  } 
  .Rightdp{
   display:none;
  }
  .Leftdp{
   display:block;
  } 
  
  }
  
  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px) {
  .font{
    font-size:40px;
  }
  .Prices2{
   display:none;
  } 
  .Prices1{
   display:block;
  }
  .Prices4{
   display:none;
  }
  .Prices3{
   display:block;
  }  
  } 
  
   /* Pricing Plan css */
   .priceNav {
    font-size: 12px;
    background: #EBF4FE;
    border-radius: 27px;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    /* margin: 50px 0 20px; */
    line-height: 1.1;
    margin-left: 32%;
    
  }
  .priceNav .ptItem {
    padding: 11px 55px;
    /* line-height: 20px; */
    border-radius: 20px;
    border: 1px solid transparent;
    font-weight: 500;
    cursor: pointer;
    display: inline-block;
    vertical-align: middle;
    transition: all 0.3s ease-in-out;
  }
  
  .priceNav .ptItem.active{
    background: white;
    /* border-color: #652796; */
    color: black;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
  }
   .ptItem:hover{
    background: #FFEEB4 ;
  }
  .prodMain {
    display: none;
  }
  .prodMain.active {
    display: block;
  }
  #pTab2C {
    background: #fbfdfe;
  }
  
  /* pricing table start */
  table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    margin-top:80px;
  }
  th,
  td {
    padding: 13px 15px;
  }
  th {
    background: white;
    color: black;
    text-align: left;
  }
  /* tr:first-child th:first-child {
    border-top-left-radius: 6px;
  }
  tr:first-child th:last-child {
    border-top-right-radius: 6px;
  } */
  td:nth-child(4n+3){
    background-color:#EBF4FE;
    text-align:center;
  }
  td:nth-child(4n+2){
    text-align:center;
  }
  td:nth-child(4n+4){
    text-align:center;
  }
  
  td {
  border-top: 1px solid #c6c9cc;
  }
  td:nth-child(4n+1){
    border-right: 1px solid #c6c9cc;
  }
  /* td:first-child {
    border-left: 1px solid #c6c9cc;
  } */
  /* td:nth-child(even) tr {
    background: #eaeaed;
  } */
  tr:last-child td:first-child {
    border-bottom-left-radius: 6px;
  }
  tr:last-child td:last-child {
    border-bottom-right-radius: 6px;
  }
   /* Pricing Plan css end */
  
   /* tallyclinic journal css */
   .imgs_size{
    height: auto;
    width:149px;
    /* margin-left:80%; */
    /* justify-content:end; */
  }
  .journal{
    padding-top:-80px;
  }
  .ic_journal{
    font-size: 0.4em;
      color: var(--white);
      height: 2.2em;
      width: 2.2em;
      /* position: absolute; */
      /* margin: auto; */
      background-color: #07528E;
      border: none;
      border-radius: 50%;
  }
  /* tallyclinic journal end */
  
  /* faq's css start */
  .vl {
    border-left: 1px solid rgb(202, 200, 200);
    height: 610px;
    
  }
  .accordion {
    max-width: 100%;
    margin: 50px auto 100px;
    /* border-top: 1px solid #d9e5e8; */
  }
  .accordion li {
    border-bottom: 1px solid #d9e5e8;
    position: relative;
  }
  .accordion li p {
    display: none;
    padding: 10px 25px 30px;
    color: #6b97a4;
  }
  .accordion a {
    width: 100%;
    display: block;
    cursor: pointer;
    font-weight: 700;
    line-height: 3;
    font-size: 15px;
    /* font-size: 0.875rem; */
    text-indent: 15px;
    user-select: none;
  }
  .accordion a:after {
    width: 8px;
    height: 8px;
    border-right: 1px solid #4a6e78;
    border-bottom: 1px solid #4a6e78;
    position: absolute;
    right: 10px;
    content: " ";
    top: 17px;
    transform: rotate(-45deg);
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  .accordion p {
    font-size: 14px;
    /* font-size: 0.8125rem; */
    line-height: 2;
    padding: 10px;
  }
  
  a.active:after {
    transform: rotate(45deg);
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }
  .journal_caption{
    margin-top:-540px;
  }
  /* faq's end */
  
  /* last section */
  .get_info{
    padding:80px 0px;
  }
  /* last section end */
  
  /* footer css start */
  .bg-footer {
          background-color: #33383c;
          padding: 50px 0 30px;
      }
      .footer-heading {
          letter-spacing: 2px;
      }
      .footer-link a {
          color: #ffffff;
          font-size: 14px;
          transition: all 0.2s;
          text-decoration: none;
      }
      .footer-link a:hover {
          color: #FDC031;
          text-decoration: none;
      }
      .contact-info {
          color: #ffffff;
          font-size: 14px;
      }
      .footer-alt {
          color: #818282;
          font-size: 12px;
      }
      .footer-heading {
          position: relative;
          padding-bottom: -12px !important;
      }
      .footer-heading:after {
          content: '';
          width: 25px;
          position: absolute;
          left: 0;
          bottom: 0;
          display: block;
      }
      .contact-info-icon {
          color: #ffffff;
          font-size: 16px;
      }
      .contact-info-data {
          color: #ffffff;
          font-size: 16px;
          margin: 0px 0px 0px !important;
      }
      /* Extra small devices (phones, 600px and down) */
      @media  only screen and (max-width: 648px) {
          .footer-download-icon {
              width: 36%;
          }
          .banner_img{
         display: none;
      }
      }
      /* Small devices (portrait tablets and large phones, 600px and up) */
      @media  only screen and (min-width: 648px) {
          .footer-download-icon {
              width: 36%;
          }
          .carousel-content {
    transition: width .4s;
    height: 80%;
  }
  
      }
      /* Medium devices (landscape tablets, 768px and up) */
      @media  only screen and (min-width: 768px) {
          .footer-download-icon {
              width: 40%;
          }
          .carousel-content {
    transition: width .4s;
    height: 80%;
  }
         
      }
      /* Large devices (laptops/desktops, 992px and up) */
      @media  only screen and (min-width: 992px) {
          .footer-download-icon {
              width: 54%;
          }
          .carousel-content {
          transition: width .4s;
          height: 60%;
        }
 
      }
      /* Extra large devices (large laptops and desktops, 1200px and up) */
      @media  only screen and (min-width: 1200px) {
          .footer-download-icon {
              width: 54%;
          }
          .carousel-content {
    transition: width .4s;
    height: 60%;
  }
 
      }
      .footer-get-trial-button {
          background: #FDC031;
          padding-left: 20px;
          padding-right: 20px;
          padding-top: 6px;
          padding-bottom: 6px;
          font-weight: bold;
          border-radius: 4px;
          border: none;
          color: #333;
          text-align: center;
          margin-top: 10px;
          font-weight: 500;
          transition: all 0.5s;
          cursor: pointer;
      }
      .footer-hr {
          border-color: #404447;
          background-color: #404447;
          color: #404447;
      }
      .below-hr-container {
          color: #818282;
          font-size: 12px;
      }
      .below-hr-container a {
          color: #818282;
          font-size: 12px;
      }
      .below-hr-container a:hover {
          text-decoration: none;
      }
  /* footer css end */
  /* crousal */
  .carousel {
    height: 260px; 
    margin: 0 auto;
  }
  
  .carousel-content {
    transition: width .4s;
    height: 60%;
  }
  
  .slide {
    position: absolute;
    z-index: 1;
    transition: left .4s cubic-bezier(.47,.13,.15,.89);
  }
  
  .nav {
    background-color: #07528E;
    width: 2rem;
    height: 2rem;
    z-index: 2;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    outline: none;
    color: black;
    -webkit-user-select: none;
  }
  
  .left-btn{
    margin: 0 auto;
    color:white;
  }
  .right-btn{
    margin: 0 auto;
    color:white;
  }
  /* Pricing */
  .back_img{
    background-image: url("/imgs/tally_back3.png");
    background-repeat: no-repeat;
  }
  .text_sm{
    font-size: 0.2rem !important;
  }

.Prices2 .prc{
  color:#969696;
  padding: 6px 15px;
} 
.Prices2 .prc:hover{
  background-color: #EBF4FE;
}  
.Prices2 hr{
  background-color:white;
}

.Prices4 .prc{
  color:#969696;
  padding: 6px 15px;
} 
.Prices4 .prc:hover{
  background-color: #EBF4FE;
}  
.Prices4 hr{
  background-color:white;
}
  </style> 
  
  
  
  