<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Stellar Video Player"/>
	<meta property="og:title" content="Stellar Video Player by _CreativeMedia_"/>
	<meta property="og:image" content="http://creativeinteractivemedia.com/player/imgFB/stellar.png"/>
	<link rel="stylesheet" href="{{asset('video/css/stellar.css')}}" type="text/css" media="screen"/>
	<link rel="stylesheet" href="{{asset('video/css/stellar-font-awesome.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('css2/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('video/css/jquery.mCustomScrollbar.css')}}" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<script src="{{asset('video/js/jquery.mCustomScrollbar.js')}}" type="text/javascript"></script> 
	<script src="{{asset('video/js/videoPlayer.js')}}" type="text/javascript"></script>
	<script src="{{asset('video/js/Playlist.js')}}" type="text/javascript"></script>
	<script src="{{asset('video/js/iphone-inline-video.js')}}" type="text/javascript"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function($)
		{
			videoPlayer = $("#Stellar_video_player").Video({                       <!-- ALL PLUGIN OPTIONS -->
				<!-- GLOBAL SETTINGS -->
					instanceName:"player1",                                        //name of the player instance (for multiple players per page change this name)
					instanceTheme:"dark",                                          //choose video player theme: "dark", "light"
					playerLayout: "fixedSize",                                     //Select player layout: "fitToContainer" (responsive mode), "fixedSize" (fixed size on page load,responsive on resize), "fitToBrowser" (fill the browser window)
					playerOrientation:"LTR",                                       //adjust player text orientation: "LTR", "RTL" (left to right or right to left for eastern countries)
					autohideControls:5,                                            //autohide controls
					hideControlsOnMouseOut:false,                                  //hide controls on mouse out of the player: true, false
					videoPlayerWidth:768,                                          //fixed total player width (only for playerLayout: "fixedSize")
					videoPlayerHeight:432,                                         //fixed total player height (only for playerLayout: "fixedSize")
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
					videoPlayerShadow:"effect1",                                   //choose player shadow:  "effect1" , "effect2", "effect3", "effect4", "effect5", "effect6", "off"
					loadRandomVideoOnStart:false,                                  //choose to load random video when webpage loads: true, false
					shuffle:false,				                                   //choose to shuffle videos when playing one after another: true, false (shuffle button enabled/disabled on start)
					posterImg:"{{asset('video/assets/images/poster.jpg')}}",                          //player poster image
					posterImgOnVideoFinish:"{{asset('video/assets/images/poster2.jpg')}}",     	   //player poster image on video finish (works if enabled onFinish:"Stop video")
					onFinish:"Play next video",                                    //"Play next video","Restart video", "Stop video",
					nowPlayingText:true,                                           //enable disable now playing title: true, false
					showAllControls:true,						                   //enable/disable all player controls: true/false
					allowSkipAd:true,                                              //enable/disable "Skip advertisement" option: true/false
					infoShow:true,                                                 //enable/disable info option: true, false
					nextShow:true,                                                 //enable/disable next video option: true, false
					rewindShow:true,                                               //enable/disable rewind video option: true, false
					qualityShow:true,                                               //enable/disable rewind video option: true, false
				<!-- LIGHTBOX SETTINGS -->
					lightBox:false,                                                //lightbox mode :true/false
					lightBoxAutoplay: false,                                       //autoplay when lightbox opens: true/false
					lightBoxThumbnail:"{{asset('video/assets/images/poster.jpg')}}",                  //lightbox thumbnail image
					lightBoxThumbnailWidth: 400,                                   //lightbox thumbnail image width
					lightBoxThumbnailHeight: 220,                                  //lightbox thumbnail image height
					lightBoxCloseOnOutsideClick: true,                             //close lightbox when clicked outside of player area
				<!-- PLAYLIST SETTINGS -->
					playlist:"Right playlist",                                     //choose playlist type: "Right playlist", "Bottom playlist", "Off"
					playlistScrollType:"inset",                                    //choose scrollbar type: "light","minimal","light-2","light-3","light-thick","light-thin","inset","inset-2","inset-3","rounded","rounded-dots","3d","dark","minimal-dark","dark-2","dark-3","dark-thick","dark-thin","inset-dark","inset-2-dark","inset-3-dark","rounded-dark","rounded-dots-dark","3d-dark","3d-thick-dark"
					playlistBehaviourOnPageload:"opened (default)",                //choose playlist behaviour when webpage loads: "closed", "opened (default)" (not apply to Vimeo player)				
				<!-- VIMEO PLAYER SETTINGS -->
					vimeoColor:"00adef",                                           //set "hexadecimal value", default vimeo color is "00adef"
				<!-- YOUTUBE SETTINGS -->
					youtubeControls:"custom controls",			                   //choose youtube player controls: "custom controls", "default controls"
					youtubeSkin:"dark",                                            //default youtube controls theme: light, dark
					youtubeColor:"red",                                            //default youtube controls bar color: red, white
					youtubeQuality:"default",                                      //choose youtube quality: "small", "medium", "large", "hd720", "hd1080", "highres", "default"
					youtubeShowRelatedVideos:true,				                   //choose to show youtube related videos when video finish: true, false (onFinish:"Stop video" needs to be enabled)
				<!-- HTML5 SELF HOSTED VIDEOS SETTINGS -->
					HTML5VideoQuality:"HD",                                        //choose HTML5 video quality (HD, SD)
					preloadSelfHosted:"none",                                      //choose preload buffer for self hosted mp4 videos (video type HTML5): "none", "auto"
					rightClickMenu:true,                                           //enable/disable right click over HTML5 player: true/false
					hideVideoSource:false,						                   //option to hide self hosted video 'src' attribute from <video> tag (to prevent users from download/steal your videos): true/false
				<!-- SHARE SETTINGS  -->
					shareShow:true,                                                //enable/disable complete share options (facebook/twitter/googlePlus): true, false
					facebookShow:true,                                             //enable/disable facebook option individually: true, false
					twitterShow:true,                                              //enable/disable twitter option individually: true, false
					googlePlusShow:true,                                           //enable/disable googlePlus option individually: true, false
					facebookShareName:"Stellar video player",                      //first parametar of facebook share in facebook feed dialog is title
					facebookShareLink:"http://codecanyon.net/",                    //second parametar of facebook share in facebook feed dialog is link below title
					facebookShareDescription:"Stellar Video Player is stunning, modern, responsive, fully customisable high-end video player for WordPress that support advertising and the most popular video platforms like YouTube, Vimeo or self-hosting videos (mp4).",  //third parametar of facebook share in facebook feed dialog is description below link
					facebookSharePicture:"https://0.s3.envato.com/files/123866118/preview.jpg')}}", //fourth parametar in facebook feed dialog is picture on left side
					twitterText:"Stellar video player",			                   //first parametar of twitter share in twitter feed dialog is text
					twitterLink:"http://codecanyon.net/",                          //second parametar of twitter share in twitter feed dialog is link
					twitterHashtags:"wordpressvideoplayer",		                   //third parametar of twitter share in twitter feed dialog is hashtag
					twitterVia:"Creative media",				                   //fourth parametar of twitter share in twitter feed dialog is via (@)
					googlePlus:"http://codecanyon.net/",                           //share link over Google +
				<!-- LOGO SETTINGS  -->
					logoShow:true,                                                 //true, false
					logoClickable:true,                                            //true, false
					logoPath:"{{asset('video/assets/images/logo.png')}}",                             //logo image url
					logoGoToLink:"http://codecanyon.net/",                         //redirect to specific page when logo clicked
					logoPosition:"bottom-left",                                    //choose logo position: "bottom-right","bottom-left"
				<!-- EMBED SETTINGS  -->
					embedShow:true,                                                //enable/disable embed option: true, false
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
					playlistBtnClosedTooltipTxt:"Show playlist", 
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
						videoType:"HTML5",
						title:"Video local",
						youtubeID:"0dJO0HyE8xE",
						youtubeIDStartSeconds: "",
						youtubeIDEndSeconds: "",
						vimeoID:"",
						mp4HD:"{{asset('video/assets/videos/Short_Elegant_Logo_Reveal.mp4')}}",
						mp4SD:"{{asset('video/assets/videos/Short_Elegant_Logo_Reveal.mp4')}}",
						enable_mp4_download:false,
						imageUrl:"{{asset('video/assets/images/poster2.jpg')}}",
						imageTimer:4,
						prerollAD:false,
						prerollGotoLink:"http://codecanyon.net/",
						preroll_mp4:"http://creativeinteractivemedia.com/player/video/Short_Elegant_Logo_Reveal.mp4",
						prerollSkipTimer:5,
						midrollAD:false,
						midrollAD_displayTime:"00:10",
						midrollGotoLink:"http://codecanyon.net/",
						midroll_mp4:"http://creativeinteractivemedia.com/player/video/Logo_Explode.mp4",
						midrollSkipTimer:5,
						postrollAD:false,
						postrollGotoLink:"http://codecanyon.net/",
						postroll_mp4:"http://creativeinteractivemedia.com/player/video/Logo_Light.mp4",
						postrollSkipTimer:5,popupImg:"{{asset('video/assets/images/popup.jpg')}}",
						popupAdShow:false,
						popupAdStartTime:"00:03",
						popupAdEndTime:"00:07",
						popupAdGoToLink:"http://codecanyon.net/",
						description:"Local video for test.",
						thumbImg:"{{asset('video/assets/images/pic1.jpg')}}",
						info:"Video info goes here.<br>This text can be <i>HTML formatted</i>, <a href='http://codecanyon.net/user/_zac_' target='_blank'><font color='008BFF'>find out more</font></a>.<br>You can disable this info window in player options. <br><br>Lorem ipsum dolor sit amet, eu pri dolores theophrastus. Posidonium vituperatoribus cu mel, cum feugiat nostrum sapientem ne. Vis ea summo persius, unum velit erant in eos, pri ut suas iriure euripidis. Ad augue expetendis sea. Ne usu saperet appetere honestatis, ne qui nulla debitis sententiae."
					}
				]
			});
		});
	</script>
</head>

<body>
	<!--example: fitToContainer-->
	<!-- <div id="container" style="position:absolute;width:668px;height:432px;margin:5% auto;left:50%;margin-left:-503px;background:#000000"> -->
		<!-- <div id="Stellar_video_player"></div> -->
	<!-- </div> -->

	<!--example: fixedSize or fitToBrowser-->
	<div id="Stellar_video_player"></div>
</body>

</html>