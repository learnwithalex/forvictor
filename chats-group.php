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
                    <li><a href="blogs.html">
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
                
 
            </div>
        
        </div> 

        <!-- Main Contents -->
        <div class="main_content">

            <span uk-toggle="target: .message-content;" class="lg:hidden fixed left-0 top-36 bg-red-600 z-10 py-1 px-4 rounded-r-3xl text-white"> Users</span>

            <div class="messages-container is_group">
                <div class="messages-container-inner">

                    <div class="messages-inbox">
                        <div class="messages-headline">
                            <div class="input-with-icon" hidden>
                                    <input id="autocomplete-input" type="text" placeholder="Search">
                                <i class="icon-material-outline-search"></i>
                            </div>
                            <h2 class="text-2xl font-semibold">Chats</h2>
                            <span class="absolute icon-feather-edit mr-4 text-xl uk-position-center-right cursor-pointer"></span>
                        </div>
                        <div class="messages-inbox-inner" data-simplebar>
                            <ul>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="assets/images/avatars/avatar-1.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Stella Johnson</h5>
                                                <span>4 hours ago</span>
                                            </div>
                                            <p>laoreet dolore magna aliquam erat volutpat sed diam nonummy</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li class="active-message">
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Adrian Mohani</h5>
                                                <span>Yesterday</span>
                                            </div>
                                            <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="assets/images/avatars/avatar-3.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Alia Dolgove</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Dipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="assets/images/avatars/avatar-4.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Jonathan Madano</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Nisl ut aliquip ex ea commodo consequa!</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="assets/images/avatars/avatar-6.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Stella Johnson</h5>
                                                <span>4 hours ago</span>
                                            </div>
                                            <p>laoreet dolore magna aliquam erat volutpat sed diam nonummy</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="assets/images/avatars/avatar-5.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Adrian Mohani</h5>
                                                <span>Yesterday</span>
                                            </div>
                                            <p>Hi Tom! Hate to break it to you but I'm actually on vacation</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="assets/images/avatars/avatar-1.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Alia Dolgove</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Dipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Jonathan Madano</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Nisl ut aliquip ex ea commodo consequa</p>
                                        </div>
                                    </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>

                    <div class="message-content">

                        <div class="messages-headline">
                            <h4>Adrian Mohani</h4>
                            <a href="#" class="message-action"><i class="icon-feather-trash-2"></i> <span class="md:inline hidden"> Delete Conversation</span></a>
                        </div>
                        
                        <div class="message-content-scrolbar" data-simplebar>
                        
                            <!-- Message Content Inner -->
                            <div class="message-content-inner">
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-1.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong>Stella Johnson</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong> Johnson</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>oreet.  dolore magna imperdiet quod mazim placerat facer possim. 👍</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-3.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong>Stella</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>Albuom commodo consequat 😉</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-1.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong>Margaret</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>Option congue nihil imperdiet mazim placerat facer possim</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong>Dolgove</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>Nam liber tempor cum soluta nobis eleifend  doming id quod mazim placerat 😎</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-3.jpg" alt=""></div>
                                        <div class="message-text">
                                            <div class="message-metadata">
                                                <strong>Madano</strong> <time class="activity">9 months, 1 week ago</time>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                        
                                <div class="message-bubble">
                                    <div class="message-bubble-inner">
                                        <div class="message-avatar"><img src="assets/images/avatars/avatar-2.jpg" alt=""></div>
                                        <div class="message-text">
                                            <!-- Typing Indicator -->
                                            <div class="typing-indicator">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- Message Content Inner / End -->
                        
                            <!-- Reply Area -->
                            <div class="message-reply">
                                <textarea cols="1" rows="1" placeholder="Your Message"></textarea>
                                <button class="button ripple-effect">Send</button>
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

<!-- Mirrored from demo.foxthemes.net/socialitev2.1/chats-group.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Sep 2021 13:21:12 GMT -->
</html>