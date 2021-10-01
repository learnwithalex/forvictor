<?php include 'header.php'; ?>

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_header"> 
                <img src="assets/images/logo.png" alt="">
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="">

                <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></span>

            </div>
        
            <div class="sidebar_inner" data-simplebar>
        
                <ul>
                    <li><a href="feed.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600"> 
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        <span> Feed </span> </a> 
                    </li>
                    <li><a href="pages.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                          <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                        </svg> 
                        <span> Pages </span> </a> 
                    </li>
                    <li><a href="videos.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm3 2h6v4H7V5zm8 8v2h1v-2h-1zm-2-2H7v4h6v-4zm2 0h1V9h-1v2zm1-4V5h-1v2h1zM5 5v2H4V5h1zm0 4H4v2h1V9zm-1 4h1v2H4v-2z" clip-rule="evenodd" />
                        </svg>
                        <span> Video</span></a> 
                    </li> 
                    <li><a href="groups.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg><span> Groups </span></a> 
                    </li>
                    <li><a href="courses.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                        <span> Course</span></a> 
                    </li>
                    <li><a href="jobs.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                        </svg> <span> Jobs</span> </a> 
                    </li> 
                    <li class="active"><a href="blogs.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                            <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                        </svg>
                        <span> Blog</span></a> 
                    </li> 
                    <li id="more-veiw" hidden><a href="products.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-green-500">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                        </svg>
                        <span> Products</span></a> 
                    </li>
                    <li id="more-veiw" hidden><a href="events.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-yellow-500">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                          </svg><span>  Events </span></a> 
                    </li> 
                    <li id="more-veiw" hidden><a href="albums.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>  <span>  Photos </span></a> 
                    </li>
                    <li id="more-veiw" hidden><a href="games.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-red-500">
                            <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z" />
                        </svg>  <span>  Games </span></a> 
                    </li>
                    <li id="more-veiw" hidden><a href="forums.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-500">
                            <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z" />
                            <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z" />
                        </svg>
                       <span> forum</span> </a> 
                    </li>
                </ul>

                <a href="#" class="see-mover h-10 flex my-1 pl-2 rounded-xl text-gray-600" uk-toggle="target: #more-veiw; animation: uk-animation-fade"> 
                    <span class="w-full flex items-center" id="more-veiw">
                        <svg class="  bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        See More  
                    </span>
                    <span class="w-full flex items-center" id="more-veiw" hidden>
                        <svg  class="bg-gray-100 mr-2 p-0.5 rounded-full text-lg w-7"  fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg> 
                        See Less 
                    </span>
                </a> 

                <hr>

                
                <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Contacts </h3>

                <div class="contact-list my-2 ml-1">
                
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
    
                </div>
  
                <hr>
                <h3 class="text-lg mt-3 font-semibold ml-2 is-title"> Pages </h3>
                <ul class="-space-y-1.5">
                    
                    <li><a href="pages-setting.html"> Setting layout 1 </a> </li>
                    <li><a href="pages-setting2.html"> Setting layout 2 </a> </li>
                    <li><a href="feed.html"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login.html">form login </a></li>
                            <li><a href="form-register.html">form register</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Create forms  </a> 
                        <ul>
                            <li><a href="create-group.html"> Create Group   </a></li>
                            <li><a href="create-page.html"> Create Page </a></li> 
                        </ul>
                    </li>
                </ul>

                <hr>
                <div class="footer-links">
                    <a href="#">About</a>
                    <a href="#">Blog </a>
                    <a href="#">Careers</a>
                    <a href="#">Support</a>
                    <a href="#">Contact Us </a>
                    <a href="#">Developer</a>
                    <a href="#">Terms of service</a>
                </div>

                
 
            </div>
        
        </div> 

        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">

                <div class="lg:flex lg:space-x-10">
                      
                    <div class="lg:w-3/4 space-y-5"> 
                       
                        <div class="card">

                            <div class="h-44 mb-4 md:h-72 overflow-hidden relative rounded-t-lg w-full">
                                <img src="assets/images/blog/img-5.html" alt="" class="w-full h-full absolute inset-0 object-cover">
                            </div>
                            <div class="p-4">

                                <h1 class="lg:text-3xl text-2xl font-semibold mb-6"> Your Best Friend Before Google in Python! </h1>
        
                                <div class="flex items-center space-x-3 my-3 pb-4 border-b">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full">
                                    <div>
                                        <div class="text-base font-semibold"> Stella Johnson </div>
                                        <div class="text-xs"> Published on Oct 22, 2017 </div>
                                    </div>
                                </div>
        
                                <div class="space-y-3">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                    <h3 class="text-xl font-semibold pt-2"> Maecenas Pretium Lorem Fermentum</h3>
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    </p>
                                    <p> 
                                         Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                </div>

                            </div>

                        </div>

                        <!-- related articles -->
                        <div class="card p-6 relative">
    
                            <h1 class="block text-lg font-semibold"> Related Articales </h1>
    
                              <div class="relative" uk-slider="finite: true">
    
                                  <div class="uk-slider-container px-1 py-3">
                                      <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">
                                        <li>
                                            <div>
                                                <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                    <img src="assets/images/blog/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                                </a>
                                                <div class="pt-3">
                                                    <a href="blog-read.html" class="font-semibold line-clamp-2"> Top Amazing web demos and experiments in 2021 Should Know About</a>
                                                    <div class="flex space-x-2 items-center text-xs pt-2">
                                                        <div>  Feb 4, 2020 </div>
                                                        <div class="md:block hidden">·</div>
                                                        <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </li> 
                                          <li>
                                            <div>
                                                <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                    <img src="assets/images/blog/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                                </a>
                                                <div class="pt-3">
                                                    <a href="blog-read.html" class="font-semibold line-clamp-2"> Interesting JavaScript and CSS libraries for 2021 Should Know About</a>
                                                    <div class="flex space-x-2 items-center text-xs pt-2">
                                                        <div>  Feb 4, 2020 </div>
                                                        <div class="md:block hidden">·</div>
                                                        <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </li> 
                                          <li>
                                            <div>
                                                <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                    <img src="assets/images/blog/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                                </a>
                                                <div class="pt-3">
                                                    <a href="blog-read.html" class="font-semibold line-clamp-2">  Interesting JavaScript and CSS Libraries in 2021 you should be know</a>
                                                    <div class="flex space-x-2 items-center text-xs pt-2">
                                                        <div>  Feb 4, 2020 </div>
                                                        <div class="md:block hidden">·</div>
                                                        <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </li> 
                                          <li>
                                            <div>
                                                <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                    <img src="assets/images/blog/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                                </a>
                                                <div class="pt-3">
                                                    <a href="blog-read.html" class="font-semibold line-clamp-2"> Awesome Web Dev Tools and Resources For 2021 in 30 Minutes </a>
                                                    <div class="flex space-x-2 items-center text-xs pt-2">
                                                        <div>  Feb 4, 2020 </div>
                                                        <div class="md:block hidden">·</div>
                                                        <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </li> 
                                      </ul>
    
                                      <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline"></ion-icon></ion-icon> </a>
                                      <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline"></ion-icon></a>
    
                                  </div>
    
                              </div>
                              
                        </div>
    
                        <div class="card p-6">
    
                            <h1 class="block text-lg font-semibold mb-4"> Comments (12) </h1>
    
                            <div class="space-y-5">
                            
                                <div class="flex gap-x-4 relative rounded-md">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                        <span class="text-gray-700 text-sm">10th, April 2021</span>
                                        <p class="mt-3 md:ml-0 -ml-16">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                        </p>
                             
                                    </div>
                                </div>
                            
                                <div class="flex gap-x-4 relative rounded-md">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                        <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                        <p class="mt-3 md:ml-0 -ml-16">
                                            elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                            amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        </p>
                                    </div>
                                </div>
    
                                <div class="flex gap-x-4 relative rounded-md lg:ml-16">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <img src="assets/images/avatars/avatar-1.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                        <span class="text-gray-700 text-sm"> 13th, May 2021 </span>
                                        <p class="mt-3 md:ml-0 -ml-16">
                                            elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                            amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        </p>
                                    </div>
                                </div>
                             
                            </div>
    
                            <div class="flex justify-center mt-9">
                                <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm">More Comments ..</a>
                            </div>
    
                        </div>


                    </div>
                    <div class="lg:w-1/4 w-full"> 
   
                        <div uk-sticky="offset:100" class="uk-sticky">
  
                            <h2 class="text-lg font-semibold mb-3"> Recently Posted </h2>
                            <ul> 
                                <li>
                                    <a href="#" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                        <h3 class="font-medium line-clamp-2"> Awesome Web Dev Tools and Resources For 2021 </h3>
                                        <div class="flex items-center my-auto text-xs space-x-1.5">
                                          <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                          <ion-icon name="chatbox-ellipses-outline"></ion-icon> <div> 23</div>
                                       </div> 
                                    </a>
                                </li>
                                <li>
                                  <a href="#" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                      <h3 class="font-medium line-clamp-2">  Awesome Web Dev Tools and Resources For 2021</h3>
                                      <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon> <div> 23</div>
                                     </div> 
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                      <h3 class="font-medium line-clamp-2">Interesting JavaScript and CSS Libraries in 2021 </h3>
                                      <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon> <div> 23</div>
                                     </div> 
                                  </a>
                              </li>
                              <li>
                                  <a href="#" class="hover:bg-gray-100 rounded-md p-2 -mx-2 block">
                                      <h3 class="font-medium line-clamp-2">Awesome Web Dev Tools and Resources For 2021 </h3>
                                      <div class="flex items-center my-auto text-xs space-x-1.5">
                                        <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                        <ion-icon name="chatbox-ellipses-outline"></ion-icon> <div> 23</div>
                                     </div> 
                                  </a>
                              </li>
                            </ul>
                            <br>
                             
                            <h4 class="text-lg font-semibold mb-3"> Tags </h4>
  
                          <div class="flex flex-wrap gap-2">
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Computers</a>
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Business</a>
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> News</a>
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Architecher</a>
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Technolgy</a>
                              <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full"> Music</a> 
                          </div>
                    
                          </div>


                    </div>

                </div>

        
            </div>
        </div>
        
    </div>



    <!-- open chat box -->
    <div uk-toggle="target: #offcanvas-chat" class="start-chat">
        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
        </svg>
    </div>
    
    <div id="offcanvas-chat" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar bg-white p-0 w-full lg:w-80 shadow-2xl">


            <div class="relative pt-5 px-4">

                <h3 class="text-2xl font-bold mb-2"> Chats </h3>

                <div class="absolute right-3 top-4 flex items-center">

                    <button class="uk-offcanvas-close  px-2 -mt-1 relative rounded-full inset-0 lg:hidden blcok"
                        type="button" uk-close></button>

                    <a href="#" uk-toggle="target: #search;animation: uk-animation-slide-top-small">
                        <ion-icon name="search" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="settings-outline" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="ellipsis-vertical" class="text-xl hover:bg-gray-100 p-1 rounded-full"></ion-icon>
                    </a>
                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                    uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                        <ul class="space-y-1">
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                 <ion-icon name="checkbox-outline" class="pr-2 text-xl"></ion-icon> Mark all as read
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="settings-outline" class="pr-2 text-xl"></ion-icon>  Chat setting 
                              </a> 
                          </li>
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                              </a> 
                          </li> 
                          <li> 
                              <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                <ion-icon name="star-outline"  class="pr-2 text-xl"></ion-icon>  Create a group chat 
                              </a> 
                          </li>
                        </ul>
                    </div>
                              

                </div>


            </div>

            <div class="absolute bg-white z-10 w-full -mt-5 lg:-mt-2 transform translate-y-1.5 py-2 border-b items-center flex"
                id="search" hidden>
                <input type="text" placeholder="Search.." class="flex-1">
                <ion-icon name="close-outline" class="text-2xl hover:bg-gray-100 p-1 rounded-full mr-4 cursor-pointer"
                    uk-toggle="target: #search;animation: uk-animation-slide-top-small"></ion-icon> 
            </div>

            <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                <ul uk-switcher="connect: #chats-tab; animation: uk-animation-fade">
                    <li class="uk-active"><a class="active" href="#0"> Friends </a></li>
                    <li><a href="#0">Groups <span> 10 </span> </a></li>
                </ul>
            </nav>

            <div class="contact-list px-2 uk-switcher" id="chats-tab">

                <div class="p-1">
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>
                <div class="p-1">
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-7.jpg" alt="">
                        </div>
                        <div class="contact-username"> Alex Dolgove</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-8.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-3.jpg" alt="">
                        </div>
                        <div class="contact-username">Stella Johnson</div>
                    </a>
                    
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-5.jpg" alt="">
                        </div>
                        <div class="contact-username">Adrian Mohani </div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-6.jpg" alt="">
                        </div>
                        <div class="contact-username"> Jonathan Madano</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            <span class="user_status"></span>
                        </div>
                        <div class="contact-username"> Erica Jones</div>
                    </a>
                    <a href="timeline.html">
                        <div class="contact-avatar">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            <span class="user_status status_online"></span>
                        </div>
                        <div class="contact-username"> Dennis Han</div>
                    </a>
                   

                </div>

            </div>
        </div>
    </div>

    
    <!-- For Night mode -->
    <script>
        (function (window, document, undefined) {
            'use strict';
            if (!('localStorage' in window)) return;
            var nightMode = localStorage.getItem('gmtNightMode');
            if (nightMode) {
                document.documentElement.className += ' night-mode';
            }
        })(window, document);
    
        (function (window, document, undefined) {
    
            'use strict';
    
            // Feature test
            if (!('localStorage' in window)) return;
    
            // Get our newly insert toggle
            var nightMode = document.querySelector('#night-mode');
            if (!nightMode) return;
    
            // When clicked, toggle night mode on or off
            nightMode.addEventListener('click', function (event) {
                event.preventDefault();
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('gmtNightMode', true);
                    return;
                }
                localStorage.removeItem('gmtNightMode');
            }, false);
    
        })(window, document);
    </script>
  
    <!-- Javascript
    ================================================== -->
    <script src="assets/js/jquery-3.3.1.min.js"></script> 
    <script src="assets/js/tippy.all.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/blog-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Sep 2021 13:30:54 GMT -->
</html>