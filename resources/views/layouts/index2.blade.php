
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title> School Admission Admin Dashboard </title>
<!-- Favicon icon -->
<!-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/1.jpg')}}"> -->
<link rel="stylesheet" href="{{asset('assets/vendor/chartist/css/chartist.min.css')}}">
<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

<!--*******************
	Preloader start
********************-->
<div id="preloader">
	<div class="sk-three-bounce">
		<div class="sk-child sk-bounce1"></div>
		<div class="sk-child sk-bounce2"></div>
		<div class="sk-child sk-bounce3"></div>
	</div>
</div>
<!--*******************
	Preloader end
********************-->

<!--**********************************
	Main wrapper start
***********************************-->
<div id="main-wrapper">

	<!--**********************************
		Nav header start
	***********************************-->
	<div class="nav-header">
		
			<!--
					THIS SECTION IS USED TO DISPLAY LOGO 
				<a href="index.html" class="brand-logo">
					<svg class="logo-abbr" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect class="svg-logo-rect"  width="54" height="54" rx="27" fill="url(#paint0_linear)"/>
						<path  d="M23.7487 23.6736C23.7487 25.0896 22.5961 26.2416 21.1793 26.2416C19.764 26.2416 18.6124 25.0896 18.6124 23.6736C18.6124 22.2567 19.764 21.1041 21.1793 21.1041C22.5961 21.1041 23.7487 22.2567 23.7487 23.6736ZM32.8168 21.1042C31.4015 21.1042 30.2499 22.2569 30.2499 23.6737C30.2499 25.0897 31.4015 26.2417 32.8168 26.2417C34.2336 26.2417 35.3862 25.0897 35.3862 23.6737C35.3862 22.2569 34.2336 21.1042 32.8168 21.1042ZM26.0079 36.8042L26.0286 42.6348C24.5259 42.6975 23.4593 42.5364 23.4593 42.5364V36.8055C23.4593 36.2557 23.013 35.8094 22.4632 35.8094C21.9133 35.8094 21.4671 36.2557 21.4671 36.8055V42.0574C18.1887 40.9111 15.8626 38.1857 15.852 35.0374V27.7139C14.9984 26.5905 14.491 25.1903 14.491 23.6736C14.491 22.3807 14.8599 21.1726 15.4973 20.1483L15.4931 12.3799C15.6563 11.1516 16.7925 11.3617 16.7925 11.3617L23.1379 13.9239C24.3426 13.4452 25.6554 13.1819 27.0287 13.1819C28.3907 13.1819 29.6932 13.4411 30.8898 13.9127L37.2075 11.3617C37.2075 11.3617 38.3438 11.1516 38.5069 12.3799L38.5028 20.1486C39.1402 21.1729 39.5091 22.3809 39.5091 23.6736C39.5091 25.1893 39.0022 26.5886 38.1495 27.7117V35.1389C38.155 36.9361 37.4102 38.6757 36.0524 40.0375C36.0524 40.0375 34.7582 41.4527 32.533 42.1947V36.8055C32.533 36.2557 32.0874 35.8094 31.5369 35.8094C30.9871 35.8094 30.5408 36.2557 30.5408 36.8055V42.605C29.8565 42.6794 28.0202 42.6348 28.0202 42.6348L28.0001 36.8068C28.0008 36.257 27.5552 35.8101 27.0054 35.8094C27.0053 35.8094 26.1004 35.8061 26.0079 36.8042ZM25.8788 23.6736C25.8788 21.0829 23.7706 18.9752 21.1793 18.9752C18.5898 18.9752 16.4831 21.0829 16.4831 23.6736C16.4831 26.2642 18.5898 28.3719 21.1793 28.3719C23.7706 28.3719 25.8788 26.2642 25.8788 23.6736ZM27.8489 32.902L30.6503 30.0032C29.097 29.4697 27.8002 28.3799 26.999 26.9729C26.207 28.364 24.9304 29.4448 23.4006 29.9846L26.5748 32.9355C26.5748 32.9355 27.1871 33.4418 27.8489 32.902ZM37.5169 23.6736C37.5169 21.0829 35.4097 18.9752 32.8196 18.9752C30.2278 18.9752 28.1192 21.0829 28.1192 23.6736C28.1192 26.2642 30.2278 28.3719 32.8196 28.3719C35.4097 28.3719 37.5169 26.2642 37.5169 23.6736Z" fill="white"/>
						<defs>
						<linearGradient id="paint0_linear" x1="27" y1="0" x2="45.6923" y2="64.9038" gradientUnits="userSpaceOnUse">
						<stop offset="0" stop-color="#1E33F2"/>
						<stop offset="1" stop-color="#1EE5F2"/>
						</linearGradient>
						</defs>
					</svg>  
					<svg class="brand-title" width="88" height="26" viewBox="0 0 88 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="svg-logo-title" d="M8.98401 25.3839C7.29868 25.3839 5.78401 25.0106 4.44001 24.2639C3.09601 23.5173 2.02935 22.4933 1.24001 21.1919C0.472013 19.8906 0.0880127 18.4293 0.0880127 16.8079C0.0880127 15.1653 0.472013 13.7039 1.24001 12.4239C2.02935 11.1226 3.09601 10.0986 4.44001 9.35195C5.78401 8.58395 7.29868 8.19995 8.98401 8.19995C10.6693 8.19995 12.1733 8.58395 13.496 9.35195C14.84 10.0986 15.896 11.1226 16.664 12.4239C17.4533 13.7039 17.848 15.1653 17.848 16.8079C17.848 18.4293 17.4533 19.8906 16.664 21.1919C15.896 22.4933 14.84 23.5173 13.496 24.2639C12.152 25.0106 10.648 25.3839 8.98401 25.3839ZM8.98401 21.0639C9.77335 21.0639 10.456 20.872 11.032 20.4879C11.608 20.1039 12.056 19.5919 12.376 18.9519C12.696 18.3119 12.856 17.5866 12.856 16.7759C12.856 15.9866 12.696 15.2719 12.376 14.6319C12.056 13.9919 11.608 13.4799 11.032 13.0959C10.456 12.7119 9.77335 12.5199 8.98401 12.5199C8.19468 12.5199 7.50135 12.7119 6.90401 13.0959C6.32801 13.4799 5.88001 13.9919 5.56001 14.6319C5.24001 15.2719 5.08001 15.9866 5.08001 16.7759C5.08001 17.5866 5.24001 18.3119 5.56001 18.9519C5.88001 19.5919 6.32801 20.1039 6.90401 20.4879C7.50135 20.872 8.19468 21.0639 8.98401 21.0639Z" fill="#40415C"/>
						<path  class="svg-logo-title" d="M27.1615 25.3839C26.0308 25.3839 24.9748 25.1599 23.9935 24.7119C23.0335 24.2639 22.2548 23.5813 21.6575 22.6639C21.0815 21.7466 20.7935 20.5946 20.7935 19.2079V8.58395H25.7535V19.8479C25.7535 20.1039 25.8175 20.3386 25.9455 20.5519C26.0735 20.7653 26.2442 20.9359 26.4575 21.0639C26.6708 21.1919 26.9055 21.2559 27.1615 21.2559C27.4175 21.2559 27.6522 21.1919 27.8655 21.0639C28.0788 20.9359 28.2495 20.7653 28.3775 20.5519C28.5055 20.3386 28.5695 20.1039 28.5695 19.8479V14.3759C28.5695 13.0533 28.8468 11.9333 29.4015 11.0159C29.9562 10.0986 30.7135 9.40528 31.6735 8.93595C32.6548 8.44528 33.7535 8.19995 34.9695 8.19995C36.1855 8.19995 37.2735 8.44528 38.2335 8.93595C39.1935 9.40528 39.9508 10.0986 40.5055 11.0159C41.0602 11.9333 41.3375 13.0533 41.3375 14.3759V19.8479C41.3375 20.1039 41.4015 20.3386 41.5295 20.5519C41.6575 20.7653 41.8282 20.9359 42.0415 21.0639C42.2762 21.1919 42.5215 21.2559 42.7775 21.2559C43.0335 21.2559 43.2682 21.1919 43.4815 21.0639C43.6948 20.9359 43.8655 20.7653 43.9935 20.5519C44.1215 20.3386 44.1855 20.1039 44.1855 19.8479V8.58395H49.1455V19.2079C49.1455 20.5946 48.8468 21.7466 48.2495 22.6639C47.6735 23.5813 46.8948 24.2639 45.9135 24.7119C44.9535 25.1599 43.9082 25.3839 42.7775 25.3839C41.6468 25.3839 40.5908 25.1599 39.6095 24.7119C38.6495 24.2639 37.8708 23.5813 37.2735 22.6639C36.6762 21.7466 36.3775 20.5946 36.3775 19.2079V13.7679C36.3775 13.4906 36.3135 13.2453 36.1855 13.0319C36.0575 12.8186 35.8868 12.6479 35.6735 12.5199C35.4602 12.3919 35.2255 12.3279 34.9695 12.3279C34.7135 12.3279 34.4682 12.3919 34.2335 12.5199C34.0202 12.6479 33.8495 12.8186 33.7215 13.0319C33.5935 13.2453 33.5295 13.4906 33.5295 13.7679V19.2079C33.5295 20.5946 33.2308 21.7466 32.6335 22.6639C32.0575 23.5813 31.2788 24.2639 30.2975 24.7119C29.3375 25.1599 28.2922 25.3839 27.1615 25.3839Z" fill="#40415C"/>
						<path  class="svg-logo-title" d="M52.856 24.9999V1.63995H57.816V24.9999H52.856Z" fill="#40415C"/>
						<path  class="svg-logo-title" d="M61.481 24.9999V8.58395H66.473V24.9999H61.481ZM63.977 6.72795C63.1877 6.72795 62.505 6.43995 61.929 5.86395C61.353 5.28795 61.065 4.60528 61.065 3.81595C61.065 3.02661 61.353 2.34395 61.929 1.76795C62.505 1.17061 63.1877 0.871948 63.977 0.871948C64.7663 0.871948 65.449 1.17061 66.025 1.76795C66.601 2.34395 66.889 3.02661 66.889 3.81595C66.889 4.60528 66.601 5.28795 66.025 5.86395C65.449 6.43995 64.7663 6.72795 63.977 6.72795Z" fill="#40415C"/>
						<path  class="svg-logo-title" d="M78.234 25.3839C76.5487 25.3839 75.034 25.0106 73.69 24.2639C72.346 23.5173 71.2794 22.4933 70.49 21.1919C69.722 19.8906 69.338 18.4293 69.338 16.8079C69.338 15.1653 69.722 13.7039 70.49 12.4239C71.2794 11.1226 72.346 10.0986 73.69 9.35195C75.034 8.58395 76.5487 8.19995 78.234 8.19995C79.9193 8.19995 81.4233 8.58395 82.746 9.35195C84.09 10.0986 85.146 11.1226 85.914 12.4239C86.7034 13.7039 87.098 15.1653 87.098 16.8079C87.098 18.4293 86.7034 19.8906 85.914 21.1919C85.146 22.4933 84.09 23.5173 82.746 24.2639C81.402 25.0106 79.898 25.3839 78.234 25.3839ZM78.234 21.0639C79.0233 21.0639 79.706 20.872 80.282 20.4879C80.858 20.1039 81.306 19.5919 81.626 18.9519C81.946 18.3119 82.106 17.5866 82.106 16.7759C82.106 15.9866 81.946 15.2719 81.626 14.6319C81.306 13.9919 80.858 13.4799 80.282 13.0959C79.706 12.7119 79.0233 12.5199 78.234 12.5199C77.4447 12.5199 76.7514 12.7119 76.154 13.0959C75.578 13.4799 75.13 13.9919 74.81 14.6319C74.49 15.2719 74.33 15.9866 74.33 16.7759C74.33 17.5866 74.49 18.3119 74.81 18.9519C75.13 19.5919 75.578 20.1039 76.154 20.4879C76.7514 20.872 77.4447 21.0639 78.234 21.0639Z" fill="#40415C"/>
					</svg>
				</a>
			-->
		<div class="nav-control">
			<div class="hamburger">
				<span class="line"></span><span class="line"></span><span class="line"></span>
			</div>
		</div>
	</div>
	<!--**********************************
		Nav header end
	***********************************-->
	
	<!--**********************************
		Chat box start
	***********************************-->
	<div class="chatbox">
		<div class="chatbox-close"></div>
		<div class="custom-tab-1">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade active show" id="chat" role="tabpanel">
					<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
						<div class="card-header chat-list-header text-center">
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
							<div>
								<h6 class="mb-1">Chat List</h6>
								<p class="mb-0">Show All</p>
							</div>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
						</div>
						<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
							<ul class="contacts">
								<li class="name-first-letter">A</li>
								<li class="active dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Archie Parker</span>
											<p>Kalid is online</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Alfie Mason</span>
											<p>Taherah left 7 mins ago</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>AharlieKane</span>
											<p>Sami is online</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Athan Jacoby</span>
											<p>Nargis left 30 mins ago</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">B</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Bashid Samim</span>
											<p>Rashid left 50 mins ago</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Breddie Ronan</span>
											<p>Kalid is online</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Ceorge Carson</span>
											<p>Taherah left 7 mins ago</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">D</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Darry Parker</span>
											<p>Sami is online</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Denry Hunter</span>
											<p>Nargis left 30 mins ago</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">J</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Jack Ronan</span>
											<p>Rashid left 50 mins ago</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Jacob Tucker</span>
											<p>Kalid is online</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>James Logan</span>
											<p>Taherah left 7 mins ago</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/3.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon"></span>
										</div>
										<div class="user_info">
											<span>Joshua Weston</span>
											<p>Sami is online</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">O</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/4.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Oliver Acker</span>
											<p>Nargis left 30 mins ago</p>
										</div>
									</div>
								</li>
								<li class="dz-chat-user">
									<div class="d-flex bd-highlight">
										<div class="img_cont">
											<img src="{{asset('assets/images/avatar/5.jpg')}}" class="rounded-circle user_img" alt=""/>
											<span class="online_icon offline"></span>
										</div>
										<div class="user_info">
											<span>Oscar Weston</span>
											<p>Rashid left 50 mins ago</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card chat dz-chat-history-box d-none">
						<div class="card-header chat-list-header text-center">
							<a href="#" class="dz-chat-history-back">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
							</a>
							<div>
								<h6 class="mb-1">Chat with Khelesh</h6>
								<p class="mb-0 text-success">Online</p>
							</div>							
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
									<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
									<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
									<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									Hi, how are you samim?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi Khalid i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									You are welcome
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									I am looking for your next templates
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Ok, thank you have a good day
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									Bye, see you
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									Hi, how are you samim?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi Khalid i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="{{asset('assets/images/avatar/2.jpg[')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									You are welcome
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									I am looking for your next templates
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Ok, thank you have a good day
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/2.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="{{asset('assets/images/avatar/1.jpg')}}" class="rounded-circle user_img_msg" alt=""/>
								</div>
								<div class="msg_cotainer">
									Bye, see you
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<div class="card-footer type_msg">
							<div class="input-group">
								<textarea class="form-control" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="alerts" role="tabpanel">
					<div class="card mb-sm-3 mb-md-0 contacts_card">
						<div class="card-header chat-list-header text-center">
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							<div>
								<h6 class="mb-1">Notications</h6>
								<p class="mb-0">Show All</p>
							</div>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
						</div>
						<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
							<ul class="contacts">
								<li class="name-first-letter">SEVER STATUS</li>
								<li class="active">
									<div class="d-flex bd-highlight">
										<div class="img_cont primary">KK</div>
										<div class="user_info">
											<span>David Nester Birthday</span>
											<p class="text-primary">Today</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">SOCIAL</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
										<div class="user_info">
											<span>Perfection Simplified</span>
											<p>Jame Smith commented on your status</p>
										</div>
									</div>
								</li>
								<li class="name-first-letter">SEVER STATUS</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
										<div class="user_info">
											<span>AharlieKane</span>
											<p>Sami is online</p>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
										<div class="user_info">
											<span>Athan Jacoby</span>
											<p>Nargis left 30 mins ago</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="tab-pane fade" id="notes">
					<div class="card mb-sm-3 mb-md-0 note_card">
						<div class="card-header chat-list-header text-center">
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
							<div>
								<h6 class="mb-1">Notes</h6>
								<p class="mb-0">Add New Nots</p>
							</div>
							<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
						</div>
						<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
							<ul class="contacts">
								<li class="active">
									<div class="d-flex bd-highlight">
										<div class="user_info">
											<span>New order placed..</span>
											<p>10 Aug 2020</p>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="user_info">
											<span>Youtube, a video-sharing website..</span>
											<p>10 Aug 2020</p>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="user_info">
											<span>john just buy your product..</span>
											<p>10 Aug 2020</p>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
								<li>
									<div class="d-flex bd-highlight">
										<div class="user_info">
											<span>Athan Jacoby</span>
											<p>10 Aug 2020</p>
										</div>
										<div class="ml-auto">
											<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
											<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--**********************************
		Chat box End
	***********************************-->
	
	<!--**********************************
		Header start
	***********************************-->
	@include('partials.header')
	<!--**********************************
		Header end ti-comment-alt
	***********************************-->

	<!--**********************************
		Sidebar start
	***********************************-->
	<div class="deznav">
		<div class="deznav-scroll">
			
		</div>
	</div>
	<!--**********************************
		Sidebar end
	***********************************-->
	
	<!--**********************************
		Content body start
	***********************************-->
	<div class="content-body">
		<div class="container-fluid">
		@if(session('success'))
   				<div class="alert alert-success">
					<p>{{ 'success' }}</p>
				</div>
				@endif
			@yield('content')
			
		</div>	
	</div>
	<!--**********************************
		Content body end
	***********************************-->

	<!--**********************************
		Footer start
	***********************************-->
	<div class="footer">
		<div class="copyright">
			<p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">BESEVIRC</a> 2021</p>
		</div>
	</div>
	<!--**********************************
		Footer end
	***********************************-->

	<!--**********************************
		Support ticket button start
	***********************************-->

	<!--**********************************
		Support ticket button end
	***********************************-->

</div>
<!--**********************************
	Main wrapper end
***********************************-->

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>	
<script src="{{asset('assets/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>
<!-- Apex Chart -->
<!-- <script src="{{asset('assets/vendor/apexchart/apexchart.js')}}"></script> -->
<!-- Dashboard 1 -->
<!-- <script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script> -->
<script src="{{asset('assets/js/custom.min.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>

<!-- Page Script  -->




</body>
</html>