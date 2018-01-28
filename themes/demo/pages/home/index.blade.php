@extends( 'layouts.default.layout' )

@section( 'head_page_css' )
	@parent
	{!! html_css( 'home.css', 'css/fo' ) !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
@stop 

@section( 'content' )
    <section id="slideshow" class="cover fullscreen image-slider slider-all-controls controls-inside parallax"
    		 data-h-diff="70">
        <ul class="slides">
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti-resize.jpg',
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
                <div class="container bg-text-wrapper">
                    <div class="background-text-overlay"
                         style="left:0;right:0;bottom:100px;">
                        <h2 class="txt-title animate">
                            Bali
                        </h2>
                        <p class="txt-desc animate">
                            Also known as the Land of the Gods, Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity .
                        </p>
                    </div>
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti2-resize.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
                <div class="container bg-text-wrapper">
                    <div class="background-text-overlay"
                         style="left:0;right:0;bottom:100px;">
                        <h2 class="txt-title animate">
                            Borobudur
                        </h2>
                        <p class="txt-desc animate">
                            Is a 9th-century Mahayana Buddhist temple in Central Java, Indonesia,<br/> as well as the world's largest Buddhist temple and also one<br/> of the greatest Buddhist monuments in the world..
                        </p>
                    </div>
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti3-resize.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
                <div class="container bg-text-wrapper">
                    <div class="background-text-overlay"
                         style="left:0;right:0;bottom:100px;">
                        <h2 class="txt-title animate">
                            Wonderful Indonesia
                        </h2>
                        <p class="txt-desc animate">
                            Straddling the equator, situated between <br/>the continents of Asia and Australia and between the Pacific and the Indian Oceans, <br/>Indonesia has many magnificent islands waiting to be explored.
                        </p>
                    </div>
                </div>
            </li>
            <li class="overlay image-bg bg-light">
                <div class="background-image-holder">
		            {!! html_img( 'img/am2018/slides/background-vti4-resize.jpg', 
		                [ 
		                    'class' => 'background-image' 
		                ]) !!}
                </div>
                <div class="container bg-text-wrapper">
                    <div class="background-text-overlay"
                         style="left:0;right:0;bottom:100px;">
                        <h2 class="txt-title animate ta-center">
                            Bali
                        </h2>
                        <p class="txt-desc animate ta-center">
                            Also known as the Land of the Gods, Bali appeals through its sheer natural beauty of looming volcanoes and lush terraced rice fields that exude peace and serenity .
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <div class="container">

        <div class="row">

            <section id="about_imf" class="col-sm-6 about-section">
                <div class="well feature bordered">
                    <h4 class="title mb40">INDONESIA IS PROUD TO HOST THE 2018 ANNUAL MEETINGS OF THE IMF/WBG</h4>
                    <div class="logo mb40">
                        {!! html_img( 'img/am2018/amf2018-logo.jpg', 
                            [ 
                                'w'     => 388,
                                'h'     => 163,
                                'class' => 'logo logo-dark' 
                            ]) !!}
                    </div>
                    <p class="desc">
                        Held annually since 1946, the Annual Meetings of the Boards of Governors of the International Monetary Fund & World Bank Group (IMF-WBG) bring together the finance ministers and central bank governors from 189 member countries to discuss a range of issues related to poverty reduction, international economic development and finance. The 2018 Annual Meetings will be held in Nusa Dua, Bali, Indonesia in October.
                    <br><br><br><br></p>
                    <a class="btn btn-sm btn-blue" href="{{ route( 'f.abouts.am2018') }}">
                        View More
                    </a>
                </div>
            </section>

            <section id="about_voyage" class="col-sm-6 about-section">
                <div class="well feature bordered">
                    <h4 class="title mb40">THE VOYAGE TO INDONESIA: EVENTS & ACTIVITIES LEADING UP TO THE ANNUAL MEETINGS</h4>
                    <div class="logo mb40">
                        {!! html_img( 'img/am2018/voyage-to-indonesia.png', 
                            [ 
                                'w'     => 339,
                                'h'     => 137,
                                'class' => 'background-image' 
                            ]) !!}
                    </div>
                    <p class="desc">
                        Beginning in 2017, the “Voyage to Indonesia” or “VTI”, is a series of activities and events that will be conducted as part of the groundwork for the 2018 Annual Meetings to raise awareness of this event and promote Indonesia to participants and the international community. The Voyage to Indonesia and the 2018 Annual Meetings provide Indonesia with an opportunity to showcase its achievements in economic and social sectors, highlight the many facets of its culture, and promote the beautiful landscapes and multitude of tourism options that the country offers.
                    </p>
                    <a class="btn btn-sm btn-blue" href="{{ route( 'f.abouts.vti' ) }}">
                        View More
                    </a>
                </div>
            </section>

        </div>

    </div>

    <div id="news_wrapper">
    	<div class="container">
	        <section id="news" class="row">
                <div class="row masonry fadeIn">
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div align="center"><h4>News</h4></div>
                        <div class="logo-carousel id-update" data-max-items="1" data-direction-nav="true">
                            <ul class="slides">
								<li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/LWP_5689.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Now is the Best time for Indonesia to Accelerate Infrastructure Project</h4>
                                            <span class="text-info">
                                                <p>
                                                    The Ministry of Finance held the Indonesia Infrastructure Finance Forum 2017 in Fairmont Hotel, Jakarta.
                                                </p>
                                                <a href="{{ route( 'f.news.detail', [ 4, 'Now-is-the-Best-time-for-Indonesia-to-Accelerate-Infrastructure-Project' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/minister-of-finance.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Minister of Finance Chaired Development Committee of IMF-World Bank Spring Meetings</h4>
                                            <span class="text-info">
                                                <p>
                                                    Coordinator Minister of Maritime Lead The Meeting On Preparing IMF-World Bank Annual Meetings 2018 In Indonesia.
                                                </p>
                                                <a href="{{ route( 'f.news.detail', [ 1, 'minister-of-finance' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                    {!! html_img( 'img/am2018/public/sri-mulyani.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Students in Indonesia Know That For Better Basic Services</h4>
                                            <span class="text-info">
                                                <p>
                                                    “I want my future children to have better health and education services,” says Erikson Wijaya.
                                                </p>
                                                <a href="{{ route( 'f.news.detail', [ 2, 'students-in-indonesia' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
               		<div class="col-sm-4 post-snippet masonry-item">
                        <div align="center"><h4>Tourism Packages</h4></div>
                        <div class="logo-carousel id-update" data-max-items="1" data-direction-nav="true">
				            <ul class="slides">
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/bali-hotel.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Bali Tour</h4>
                                            <span class="text-info">
                                                <p>
                                                    click here to see more
                                                </p>
                                                <a href="{{ route( 'f.discovers.tourism', ['Discover Indonesia', 'Paket Wisata']) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/lombok-lake.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Lombok Tour</h4>
                                            <span class="text-info">
                                                <p>
                                                    Click here to see more
                                                </p>
                                                <a href="{{ route( 'f.discovers.tourism', ['Discover Indonesia', 'Paket Wisata']) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
								<li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                    {!! html_img( 'img/am2018/public/discover-indonesia/tourism-package/yogya-candi.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Yogyakarta Tour</h4>
                                            <span class="text-info">
                                                <p>
                                                    Click here to see more
                                                </p>
                                                <a href="{{ route( 'f.discovers.tourism', ['Discover Indonesia', 'Paket Wisata']) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div align="center"><h4>Indonesia Updates</h4></div>
                        <div class="logo-carousel id-update" data-max-items="1" data-direction-nav="true">
                            <ul class="slides">
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-1_thumbnail.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Institutional and Governance Effectiveness: Accelerated Reforms Agenda with Institutional Improvement</h4>
                                            <span class="text-info">
                                                <p>
                                                    Indonesia is committed to accelerate its reform agenda as is shown by its institutional improvement.
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 1, 'Institutional-and-Government-Effectiveness' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-2_thumbnail.jpg', 
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Economic Factor: Strong and Stable Growth Prospects Remain Intact</h4>
                                            <span class="text-info">
                                                <p>
                                                    Indonesia continues to maintain a strong and stable economic growth.
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 2, 'Economic Factor' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-3_thumbnail.jpg',
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">External Factor: Improved External Resilience</h4>
                                            <span class="text-info">
                                                <p>
                                                    Dealing with external shocks, Indonesia improved its resilience.
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 3, 'External Factorr' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-4_thumbnail.jpg',
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Fiscal Performance and Flexibility: More Fiscal Stimulus with Prudent Fiscal Management</h4>
                                            <span class="text-info">
                                                <p>
                                                    Indonesia keeps driving for more fiscal stimulus with prudent fiscal policy.
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 4, 'Fiscal Performance and Flexibility' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-5_thumbnail.jpg',
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Monetary and Financial Factor: Credible Monetary Policy Track Record and Favourable Financial Sector</h4>
                                            <span class="text-info">
                                                <p>
                                                    Through Bank Indonesia Policy Mix, Indonesia has built a credible monetary policy track record.
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 5, 'Monetary and Financial Factor' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="image-caption cast-shadow mb-xs-32 ">
                                        {!! html_img( 'img/am2018/public/indonesia-updates-6_thumbnail.jpg',
                                            [ 
                                                'w'     => 408,
                                                'h'     => 300,
                                                'class' => 'img-home' 
                                            ]) !!}
                                        <div class="caption text-center">
                                            <h4 class="subtitle">Progressive Infrastructure Development: Strong Commitment on Acceleration of Infrastructure Provision</h4>
                                            <span class="text-info">
                                                <p>
                                                    The government has enacted various reforms to accelerate infrastructure provision, they are i) fiscal reforms...
                                                </p>
                                                <a href="{{ route( 'f.indonesia_updates.detail', [ 6, 'Progressive Infrastructure Development' ]) }}" class="btn-link">View More</a>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                    <!--end of snippet-->
                </div>
                <!--end of row-->
	        </section>
        </div>
    </div>

    <div id="countdown" class="bg-secondary">
	    <div class="container">
	        <div class="row">
	        	<div id="timer" class="col-md-6">
	        		<div class="text-center countdown-timer">
                        <div class="countdown" data-date="2018/10/8"></div>
                        <div class="sep">
                        	<span class="text">Voyage To Indonesia in</span>
                        </div>
                        <div>
                            <div class="days">
                            	<span class="text">00</span>
                            	<span class="label">Days</span>
                            </div>
                            <div class="hours">
                            	<span class="text">00</span>
                            	<span class="label">Hours</span>
                        	</div>
                            <div class="mins">
                            	<span class="text">00</span>
                            	<span class="label">Minutes</span>
                        	</div>
                            <div class="secs">
                            	<span class="text">00</span>
                            	<span class="label">Seconds</span>
                        	</div>
                        </div>
	        		</div>
	        		
	        	</div>
	        	<div id="follow" class="col-md-6">
	        		<div class="fo-col text-center header-title">
	        			Follow us at:
	        		</div>
	        		<div class="fo-col text-center">
	                    <a href="https://www.facebook.com/The-2018-IMF-WBG-Annual-Meetings-Bali-301090217025165" target="_blank">
	                        <i class="ti-facebook color-white"></i>
	                    </a>
	                    <a href="https://www.instagram.com/am_2018_bali/" target="_blank">
	                        <i class="ti-instagram color-white"></i>
	                    </a>
	                    <a href="https://twitter.com/am2018bali" target="_blank">
	                        <i class="ti-twitter-alt color-white"></i>
	                    </a>
	                    <a href="https://www.youtube.com/channel/UCWmYsuSF_Iz3IHCOTO7nGlA" target="_blank">
	                        <i class="ti-youtube color-white"></i>
	                    </a>
	        		</div>
	        	</div>
	        </div>
	        <!--end of row-->
	    </div>
	    <!--end of container-->
	</div>

	@include( '_partials._sponsors')
@stop
