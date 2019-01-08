
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1000; user-scalable=0;" />-->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @if(isset($product->description))
        <meta name="description" content="{{$product->description}}">
    @endif
    <meta name="author" content="">
    <!--
    <link rel="icon" href="../../favicon.ico">
    -->

    @if(isset($product->name))
        <title>{{$product->name}}</title>
    @elseif(isset($category->title))
        <title> {{$category->title}}</title>
    @else
        <title>دوره های تخصصی موسیقی</title>
    @endif

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css2/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css2/font-awesome.min.css')}}">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('css2/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/stellar.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/stellar-font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}" type="text/css">
    <script src="{{asset('js/jquery3.2.1.js')}}"></script>
    <script src="{{asset('js/hls.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/videoPlayer.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/Playlist.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/iphone-inline-video.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/vimeo.js')}}"></script>
    <script >
        @if(count($videos) > 0)
        $(document).ready(function($)
        {

            videoPlayer = $("#Stellar_video_player").Video({                       <!-- ALL PLUGIN OPTIONS -->
                <!-- GLOBAL SETTINGS -->
                instanceName:"player1",                                        //name of the player instance (for multiple players per page change this name)
                instanceTheme:"dark",                                          //choose video player theme: "dark", "light"
                playerLayout: "fitToContainer",                                     //Select player layout: "fitToContainer" (responsive mode), "fixedSize" (fixed size on page load,responsive on resize), "fitToBrowser" (fill the browser window)
                playerOrientation:"LTR",                                       //adjust player text orientation: "LTR", "RTL" (left to right or right to left for eastern countries)
                autohideControls:5,                                            //autohide controls
                hideControlsOnMouseOut:false,                                  //hide controls on mouse out of the player: true, false
                videoPlayerWidth:800,                                          //fixed total player width (only for playerLayout: "fixedSize")
                videoPlayerHeight:460,                                         //fixed total player height (only for playerLayout: "fixedSize")
                videoRatio: 16/9,                                              //set any video ratio (calculate video width/video height)
                videoRatioStretch: false,                                      //adjust video ratio for case when playlist is "opened" : true/false
                iOSPlaysinline: true,                                          //on iOS device: play videos inline (like on desktop) or in Fullscreen by default: true/false
                autoplay:false,                              				   //autoplay when webpage loads: true/false
                colorAccent:"#ff0000",                                         //plugin colors accent (hexadecimal or RGB value - http://www.colorpicker.com/)
                videoAnimationTime: 350,                                       //video transition animation when using show/hide playlist [miliseconds], 0-instant animation, larger number will increase animation time
                playSpecificVideo: 0,                                          //load and play specific video from playlist on page load [0-first video, 1-second video...]
                progressBarThickness: 3,                                       //adjust progress bar height [px]
                progressBarThicknessOnMouseover: 6,                            //adjust video progress bar height on mouse over [px]
                tooltipFontSize:12,                                            //adjust tooltip font size
                videoPlayerShadow:"off",                                   //choose player shadow:  "effect1" , "effect2", "effect3", "effect4", "effect5", "effect6", "off"
                loadRandomVideoOnStart:false,                                  //choose to load random video when webpage loads: true, false
                shuffle:false,				                                   //choose to shuffle videos when playing one after another: true, false (shuffle button enabled/disabled on start)
                posterImg:"{{asset('img2//Rain-l.jpg')}}",                          //player poster image
                posterImgOnVideoFinish:"{{asset('img2//Rain-l.jpg')}}",     	   //player poster image on video finish (works if enabled onFinish:"Stop video")
                onFinish:"Play next video",                                    //"Play next video","Restart video", "Stop video",
                nowPlayingText:false,                                           //enable disable now playing title: true, false
                showAllControls:true,						                   //enable/disable all player controls: true/false
                allowSkipAd:true,                                              //enable/disable "Skip advertisement" option: true/false
                infoShow:false,                                                 //enable/disable info option: true, false
                nextShow:false,                                                 //enable/disable next video option: true, false
                rewindShow:false,                                               //enable/disable rewind video option: true, false
                qualityShow:false,                                               //enable/disable rewind video option: true, false
                <!-- LIGHTBOX SETTINGS -->
                lightBox:false,                                                //lightbox mode :true/false
                lightBoxAutoplay: false,                                       //autoplay when lightbox opens: true/false
                lightBoxThumbnail:"{{asset('img2//Rain-l.jpg')}}",                  //lightbox thumbnail image
                lightBoxThumbnailWidth: 0,                                   //lightbox thumbnail image width
                lightBoxThumbnailHeight: 0,                                  //lightbox thumbnail image height
                lightBoxCloseOnOutsideClick: true,                             //close lightbox when clicked outside of player area
                <!-- PLAYLIST SETTINGS -->
                playlist:"Off",                                     //choose playlist type: "Right playlist", "Bottom playlist", "Off"
                playlistScrollType:"inset",                                    //choose scrollbar type: "light","minimal","light-2","light-3","light-thick","light-thin","inset","inset-2","inset-3","rounded","rounded-dots","3d","dark","minimal-dark","dark-2","dark-3","dark-thick","dark-thin","inset-dark","inset-2-dark","inset-3-dark","rounded-dark","rounded-dots-dark","3d-dark","3d-thick-dark"
                playlistBehaviourOnPageload:"closed",                //choose playlist behaviour when webpage loads: "closed", "opened (default)" (not apply to Vimeo player)
                <!-- VIMEO PLAYER SETTINGS -->
                vimeoColor:"00adef",                                           //set "hexadecimal value", default vimeo color is "00adef"
                <!-- YOUTUBE SETTINGS -->
                youtubeControls:"custom controls",			                   //choose youtube player controls: "custom controls", "default controls"
                youtubeSkin:"dark",                                            //default youtube controls theme: light, dark
                youtubeColor:"red",                                            //default youtube controls bar color: red, white
                youtubeQuality:"default",                                      //choose youtube quality: "small", "medium", "large", "hd720", "hd1080", "highres", "default"
                youtubeShowRelatedVideos:false,				                   //choose to show youtube related videos when video finish: true, false (onFinish:"Stop video" needs to be enabled)
                <!-- HTML5 SELF HOSTED VIDEOS SETTINGS -->
                HTML5VideoQuality:"HD",                                        //choose HTML5 video quality (HD, SD)
                preloadSelfHosted:"none",                                      //choose preload buffer for self hosted mp4 videos (video type HTML5): "none", "auto"
                rightClickMenu:false,                                           //enable/disable right click over HTML5 player: true/false
                hideVideoSource:false,						                   //option to hide self hosted video 'src' attribute from <video> tag (to prevent users from download/steal your videos): true/false
                <!-- SHARE SETTINGS  -->
                shareShow:false,                                                //enable/disable complete share options (facebook/twitter/googlePlus): true, false
                facebookShow:false,                                             //enable/disable facebook option individually: true, false
                twitterShow:false,                                              //enable/disable twitter option individually: true, false
                googlePlusShow:false,                                           //enable/disable googlePlus option individually: true, false
                facebookShareName:"Stellar video player",                      //first parametar of facebook share in facebook feed dialog is title
                facebookShareLink:"http://codecanyon.net/",                    //second parametar of facebook share in facebook feed dialog is link below title
                facebookShareDescription:"Stellar Video Player is stunning, modern, responsive, fully customisable high-end video player for WordPress that support advertising and the most popular video platforms like YouTube, Vimeo or self-hosting videos (mp4).",  //third parametar of facebook share in facebook feed dialog is description below link
                facebookSharePicture:"https://0.s3.envato.com/files/123866118/preview.jpg", //fourth parametar in facebook feed dialog is picture on left side
                twitterText:"Stellar video player",			                   //first parametar of twitter share in twitter feed dialog is text
                twitterLink:"http://codecanyon.net/",                          //second parametar of twitter share in twitter feed dialog is link
                twitterHashtags:"wordpressvideoplayer",		                   //third parametar of twitter share in twitter feed dialog is hashtag
                twitterVia:"Creative media",				                   //fourth parametar of twitter share in twitter feed dialog is via (@)
                googlePlus:"http://codecanyon.net/",                           //share link over Google +
                <!-- LOGO SETTINGS  -->
                logoShow:false,                                                 //true, false
                logoClickable:false,                                            //true, false
                logoPath:"{{asset('assets/images/logo.png')}}",                             //logo image url
                logoGoToLink:"http://codecanyon.net/",                         //redirect to specific page when logo clicked
                logoPosition:"bottom-left",                                    //choose logo position: "bottom-right","bottom-left"
                <!-- EMBED SETTINGS  -->
                embedShow:false,                                                //enable/disable embed option: true, false
                embedCodeSrc:"www.yourwebsite.com/videoplayer/index.html",     //path to your jQuery version of video player on server
                embedShareLink:"www.yourwebsite.com/videoplayer/index.html",   //direct link to your site (or any other URL) you want to be "shared"
                <!-- GLOBAL PREROLL ADS SETTINGS  -->
                showGlobalPrerollAds: false,                                   //enable/disable 'global' ads and overwrite each individual ad in 'videos' :true/false
                globalPrerollAds: "url1;url2;url3;url4;url5",                  //set 'pool' of url's that are separated by ; (global prerolls will play randomly)
                globalPrerollAdsSkipTimer: 5,                                  //skip global advertisement seconds
                globalPrerollAdsGotoLink: "http://codecanyon.net/",            //global advertisement goto link
                <!-- TRANSLATE TEXTS TO YOUR LANGUAGE  -->                         //translate all texts to any language
                advertisementTitle:"Advertisement",
                skipAdvertisementText:"Skip advertisement",
                skipAdText:"You can skip this ad in",
                playBtnTooltipTxt:"Play",
                pauseBtnTooltipTxt:"Pause",
                rewindBtnTooltipTxt:"Rewind",
                downloadVideoBtnTooltipTxt:"Download video",
                qualityBtnOpenedTooltipTxt:"Close quality",
                qualityBtnClosedTooltipTxt:"Select quality",
                muteBtnTooltipTxt:"Mute",
                unmuteBtnTooltipTxt:"Unmute",
                fullscreenBtnTooltipTxt:"Fullscreen",
                exitFullscreenBtnTooltipTxt:"Exit fullscreen",
                infoBtnTooltipTxt:"Show info",
                embedBtnTooltipTxt:"Embed",
                shareBtnTooltipTxt:"Share",
                volumeTooltipTxt:"Volume",
                playlistBtnClosedTooltipTxt:"Hide playlist",
                playlistBtnOpenedTooltipTxt:"Hide playlist",
                facebookBtnTooltipTxt:"Share on Facebook",
                twitterBtnTooltipTxt:"Share on Twitter",
                googlePlusBtnTooltipTxt:"Share on Google+",
                nextBtnTooltipTxt:"Next video",
                previousBtnTooltipTxt:"Previous video",
                playlistSearchText: "Search for video...",
                nextVideoInPlaylistText: "UP NEXT",
                autoplayNextVideoInPlaylistOn: "Autoplay next video on",
                autoplayNextVideoInPlaylistOff: "Autoplay next video off",
                countVideos: "of",
                shuffleBtnOnTooltipTxt:"Shuffle on",
                shuffleBtnOffTooltipTxt:"Shuffle off",
                embedWindowTitle2:"EMBED PLAYER IN YOUR SITE:",
                embedWindowTitle3:"SHARE CURRENT VIDEO:",
                copyTxt:"Copy",
                copiedTxt:"Copied!",
                <!-- AUTOMATIC YOUTUBE PLAYLIST/CHANNEL SETTINGS  -->
                youtubePlaylistID:"",                                                                 //automatic youtube playlist ID (leave blank "" if you want to use manual playlist) PLuFX50GllfgP_mecAi4LV7cYva-WLVnaM
                youtubeChannelID:"",                                                                  //automatic youtube channel ID (leave blank "" if you want to use manual playlist) UCHqaLr9a9M7g9QN6xem9HcQ
                <!-- MANUAL PLAYLIST -->
                videos:[

                    {
                        videoType:"HTML5",                                                              //choose video type: "HTML5", "youtube", "vimeo", "image"
                        title:"{{$vid->title}}",                                                            //video title
                        mp4HD:"{{asset('/videos/' . $vid->video)}}",
                        enable_mp4_download:false,                                                        //enable download button for self hosted videos: true, false
                        imageUrl:"{{asset('img2//Rain-l.jpg')}}",                                             //display image instead of playing video
                        imageTimer:4, 																	  //set time how long image will display
                        prerollAD:false,                                                                  //show pre-roll true, false
                        prerollGotoLink:"http://codecanyon.net/",                                         //pre-roll goto link
                        prerollSkipTimer:5,
                        midrollAD:false,                                                                  //show mid-roll true, false
                        midrollAD_displayTime:"00:10",                                                    //show mid-roll at any custom time in format "minutes:seconds" ("00:00")
                        midrollGotoLink:"http://codecanyon.net/",                                         //mid-roll goto link
                        midrollSkipTimer:5,
                        postrollAD:false,                                                                 //show post-roll true, false
                        postrollGotoLink:"http://codecanyon.net/",                                        //post-roll goto link
                        postrollSkipTimer:5,
                        popupAdShow:false,                                                                //enable/disable popup image: true, false
                        popupAdStartTime:"00:03",                                                         //time to show popup ad during playback
                        popupAdEndTime:"00:07",                                                           //time to hide popup ad during playback
                        description:"Video description goes here.",                                       //video description
                        info:"Video info goes here.<br>This text can be <i>HTML formatted</i>, <a href='http://codecanyon.net/user/_zac_' target='_blank'><font color='008BFF'>find out more</font></a>.<br>You can disable this info window in player options. <br><br>Lorem ipsum dolor sit amet, eu pri dolores theophrastus. Posidonium vituperatoribus cu mel, cum feugiat nostrum sapientem ne. Vis ea summo persius, unum velit erant in eos, pri ut suas iriure euripidis. Ad augue expetendis sea. Ne usu saperet appetere honestatis, ne qui nulla debitis sententiae."                                                                                    //video info
                    },
                ]
            });
            $('a.round-button').remove();
            //$('div#stellar_vp_playlist').hide();
            //var content1 = $('div.stellar_vp_videoPlayer')[0].innerHTML;
            /*$('div.stellar_vp_mainContainer:first').css('width', '0%');
            $('div.stellar_vp_mainContainer:first').css('position','block');

            $('div.stellar_vp_infoBtn').remove();
            $('div.stellar_vp_sidebarBtn').remove();
            $('div.stellar_vp_logo').remove();
            $('div.stellar_vp_nowPlayingTitle').remove();
            var width = $('img#img-responsive:first').css('width');
            var height = $('img#img-responsive:first').css('height');

            $('img.stellar_vp_overlayPoster:first').css('width',width);*/
            //$('img.stellar_vp_overlayPoster:first').css('height',height);
            $('img.img-responsive:first').remove();
            //$('div.sp-img').remove();
        });
    </script>
    @endif

    <script src="{{asset('js2/ie8-responsive-file-warning.js')}}"></script>
    <script src="{{asset('js2/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="{{asset('css2/style.css')}}" rel="stylesheet">

</head><!-- NAVBAR
================================================== -->
<body>
<header class="header">
    <div class="navbar-wrapper-single">

        <div class="container">

            <div class="row">

                <div class="col-md-5 col-xs-12 col-sm-12">
                    <nav class="navbar navbar-inverse navbar-static-top navbar-full">

                        <div class="container">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="{{url('/')}}">LOGO</a>
                            </div>

                            <div id="navbar" class="navbar-collapse collapse">
                                <div id="authenticate">
                                    @if ($user = Auth::user())
                                        <ul class="nav navbar-nav menu-right">
                                            <li><a href="{{url('/clientarea')}}" class="header-font"><i class="fa fa-user" aria-hidden="true"></i> ناحیه کاربری</a></li>
                                            <li>
                                                <a href="{{url('/logout')}}"  class="header-font"><i
                                                            class="fa fa-sign-out"
                                                            aria-hidden="true"></i>خروج از سامانه
                                                </a>

                                            <li id="main-nav" class="nav-item dropdown category">
                                                <a class="nav-link dropdown-toggle header-font" href="#" id="navbarDropdown"
                                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{asset('img2/view-grid-menu.png')}}">
                                                    دسته بندی
                                                </a>
                                                <div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
                                                    @foreach($categories as  $category)
                                                        <a class="dropdown-item nav-drop-item" href="{{url('/categories/' . $category->id . '/products')}}">{{$category->title}}</a>
                                                        <div class="dropdown-divider"></div>
                                                    @endforeach
                                                </div>
                                            </li>

                                        </ul>
                                    @else
                                        <ul class="nav navbar-nav menu-right">
                                            <li><a href="#" data-toggle="modal" data-target="#loginAction" class="header-font"><i
                                                            class="fa fa-sign-in"
                                                            aria-hidden="true"></i> ورود به سامانه
                                                </a>
                                            </li>
                                            <li><a href="#" data-toggle="modal" data-target="#registerAction" class="header-font"><i
                                                            class="fa fa-user-plus"
                                                            aria-hidden="true"></i> عضویت </a>
                                            </li>
                                            <li id="main-nav" class="nav-item dropdown category">
                                                <a class="nav-link dropdown-toggle header-font" href="#" id="navbarDropdown"
                                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="{{asset('img2/view-grid-menu.png')}}">
                                                    دسته بندی
                                                </a>
                                                <div class="dropdown-menu nav-dropdown" aria-labelledby="navbarDropdown">
                                                    @foreach($categories as  $category)
                                                        <a class="dropdown-item nav-drop-item" href="{{url('/categories/' . $category->id . '/products')}}">{{$category->title}}</a>
                                                        <div class="dropdown-divider"></div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-6">
                                    <form class="form-inline" method="GET" action="{{url('/products')}}">
                                        <div class="all-search-main" id="imaginary_container">
                                            <div class="input-group stylish-input-group">
                                                <input name="q" type="text" class="form-control search-font"
                                                       placeholder="جستجو در دوره های آنلاین موسیقی...">
                                                <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search search-color"></span>
                        </button>
                    </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>

</header>

<!-- The Login Modal -->
<!-- Login Modal -->

<div class="modal fade" id="loginAction" role="dialog">

    <div class="modal-dialog modal-md">

        <!-- Login Modal content-->

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">ورود به پنل کاربری</h4>
            </div>

            <div class="modal-body">
                <div id="login-error">
                </div>
                @include('layouts.login')
            </div>
        </div>

    </div>
</div>
<!-- end Login Modal -->
<!-- Register Modal -->

<div class="modal fade" id="registerAction" role="dialog">

    <div class="modal-dialog modal-md">

        <!-- Register Modal content-->

        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">لطفا بمنظور عضویت در وب سایت اطلاعات خود را وارد بفرمائید.
                </h5>
            </div>

            <div class="modal-body">
                <p id="message"></p>

                <div class="register_container">
                    @include('layouts.register')
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end Register Modal -->

