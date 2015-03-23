<!DOCTYPE html>
<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1">

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->


<!-- For all browsers -->
<link rel="stylesheet" media="screen" href="../../css/style-v=1.css">
<!-- For progressively larger displays -->
<link rel="stylesheet" media="only screen and (min-width: 768px)" href="../../css/768-v=1.css">
<link rel="stylesheet" media="only screen and (min-width: 992px)" href="../../css/992-v=1.css">

<!-- For Retina displays -->
<link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-device-pixel-ratio: 2)" href="../../css/2x-v=1.css">



<!-- For iPhone 4 -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../img/h/apple-touch-icon.png">
<!-- For iPad 1-->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../img/m/apple-touch-icon.png">
<!-- For iPhone 3G, iPod Touch and Android -->
<link rel="apple-touch-icon-precomposed" href="../../img/l/apple-touch-icon-precomposed.png">
<!-- For Nokia -->
<link rel="shortcut icon" href="../../img/l/apple-touch-icon.png">
<!-- For everything else -->
<link rel="shortcut icon" href="../../favicon.ico">

<!--Microsoft. Delete if not required -->
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<title>
Responsive navigation with noscript fallback - James Nowland - James Nowland</title>



<link rel="stylesheet" href="../wp-content/themes/jNewcastle2012/style.css" type="text/css" />

<link rel="pingback" href="../xmlrpc.php" />

<!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.4 - http://yoast.com/wordpress/seo/ -->
<link rel="canonical" href="http://jamesnowland.com/articles/responsive-navigation-with-noscript-fallback/" />
<meta property='og:locale' content='en_US'/>
<meta property='og:title' content='Responsive navigation with noscript fallback - James Nowland'/>
<meta property='og:url' content='http://jamesnowland.com/notes/responsive-navigation-with-noscript-fallback/'/>
<meta property='og:site_name' content='James Nowland'/>
<meta property='og:type' content='article'/>
<meta property='og:image' content='http://jamesnowland.com/notes/wp-content/uploads/2012/04/responsiveNavigation.gif'/>
<meta property='og:image' content='http://jamesnowland.com/notes/wp-content/uploads/2012/04/responsiveNavigation2.gif'/>
<meta property='og:image' content='http://jamesnowland.com/notes/wp-content/uploads/2012/04/responsiveNavigation3.gif'/>
<!-- / Yoast WordPress SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Feed" href="../feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Comments Feed" href="../comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Responsive navigation with noscript fallback Comments Feed" href="feed/" />
<link rel='stylesheet' id='theme-css'  href='../wp-content/themes/jNewcastle2012/style-ver=1.0.0.css' type='text/css' media='screen, projection' />
<link rel='stylesheet' id='layout-css'  href='../wp-content/themes/jNewcastle2012/custom-ver=1.0.0.css' type='text/css' media='screen, projection' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min-ver=3.5.1.js'></script>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head><body class="single single-post postid-29 single-format-standard notes">

<meta name="author" content="James Nowland">
</head>

<body class="clearfix ">

<div class="fullSpan">
    <header role="banner" class="clearfix">
    <h1><a href="../../">Newcastle Web Designer - Graphic Designer</a></h1>
        <nav id="navy">
            <ul id="menu">
                    <li class="home"><a href="../../">Home</a></li>
                    <!--<li class="projects"><a href="http://jamesnowland.com/notes/responsive-navigation-with-noscript-fallback/projects.html">Projects</a></li>
                    <li class="articles"><a href="http://jamesnowland.com/notes/responsive-navigation-with-noscript-fallback/articles.html">Articles</a></li>-->
                    <li class="notes"><a href="../">Notes</a></li>
                    <li class="about"><a href="../../about/">About</a></li>
                    <li class="contact"><a href="../../contact/">Contact</a></li>

            </ul>

        </nav>
        <noscript>
            <a href="/#footerMenu" class="fallbackMenu">MENU</a>
        </noscript>
    </header>
 </div><!-- div.fullspan -->
<section class="feature clearfix">
    <div class="notesFeatureFull">
            <span>My</span>
            <h2>Notes</h2>
            <p>A few quick thoughts.</p>
    </div>
</section>

<div class="content clearfix">
<div class="grid" role="main">
    <section class="listOfNotes">


<article class="post-29 post type-post status-publish format-standard hentry category-jquery category-responsive-web-design aNote" id="post-29">
            <h3>Responsive navigation with noscript fallback</h3>
            <span class="textDate">29 <em>of</em> Apr, 2012 </span>


            <p>My initial mobile navigation solution left a lot to be desired.</p>
<p>So it was back to the drawing board. I started to analyse how other solutions worked, and was looking everywhere for inspiration and a suitable solution.  About two days later I caught a tweet to <a title="Responsive Navigation Patterns" href="http://bradfrostweb.com/blog/web/responsive-nav-patterns/" target="_blank">this article by Brad Frost</a>.</p>
<p>One of the things I liked in the article is Brad listed the <em>pros</em> and <em>cons</em> for each solution.</p>
<p>After reviewing Brad&#8217;s list my two favourite solution were:</p>
<h4>&#8216;The Toggle&#8217; approach</h4>
<blockquote><p>&#8220;The toggle is similar to the footer anchor approach, but instead of jumping down to an anchor at the bottom of the page, the menu slides open right in the header. It’s a good-looking approach and is relatively easy to implement&#8221;</p></blockquote>
<p><em>followed by:</em></p>
<h4>&#8216;the footer anchor&#8217;</h4>
<blockquote><p>&#8220;This clever solution keeps the navigation list at the footer of the site, while the header contains a simple anchor link pointing to the footer navigation. This approach clears up a lot of room for the core content while still providing quick access to the navigation.&#8221;</p></blockquote>
<p>I have a preference for  navigation menus, which while user friendly do not impede on the limited screen space of small devices, such as smartphones and hand held gaming devices.</p>
<p>One of the cons with &#8216;the toggle&#8217; is it&#8217;s dependency on javascript.  By contrast, one of the pros of &#8220;the footer anchor&#8221; is that it is not dependent on javascript.  However, to their credit both solutions maximise mobile real-estate.</p>
<h3>The Obvious solution</h3>
<p>I decided to use both approaches to maximise screen real estate.  For uses with javascript  they would receive &#8220;The Toggle&#8221; navigation and for users with NO javascript they would be receive the fall back &#8220;The footer anchor&#8221; navigation.</p>
<h4>Coding the Hybrid Solution</h4>
<p><div class="swpf-img"><img class="alignnone size-full wp-image-35" title="Hybrid Responsive Navigation" alt="" src="../wp-content/uploads/2012/04/responsiveNavigation.gif" width="300" height="431" /></div></p>
<p>Use of the <em>&lt;noscript&gt;</em> tag was used in the footer and also the header shown above in orange. Running next to the toggle but with only one solution ever visible at any given time.</p>
<p><div class="swpf-img"><img class="alignnone size-full wp-image-36" title="Responsive States" alt="" src="../wp-content/uploads/2012/04/responsiveNavigation2.gif" width="904" height="620" /></div></p>
<p>On the smallest style sheet the &lt;noscript&gt; footer and link are only visible when javascript is off. The javascript toggle is hidden by default and turned on via the javascript by adding a class to the html.</p>
<p><div class="swpf-img"><img class="alignnone size-full wp-image-37" title="Hybrid Non Mobile" alt="" src="../wp-content/uploads/2012/04/responsiveNavigation3.gif" width="904" height="620" /></div></p>
<p>On the tablet css document the no script tags are hidden and the menu up top is visible by default.</p>
<p><a href="/demo/hybridNav/">View the code here.</a></p>

    <!-- <div class="postmetadata">
          <span class="categories">Filed Under:
          <a href="http://jamesnowland.com/notes/category/jquery/" title="View all posts in jQuery" rel="category tag">jQuery</a>, <a href="http://jamesnowland.com/notes/category/responsive-web-design/" title="View all posts in Responsive Web Design" rel="category tag">Responsive Web Design</a>          </span>
              </div> -->

  <div id="comment-block">
    								<div id="respond">
				<h3 id="reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/#respond" style="display:none;">Cancel reply</a></small></h3>
									<form action="http://jamesnowland.com/notes/wp-comments-post.php" method="post" id="commentform">
																			<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>							<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30" /></p>
												<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
							<input name="submit" type="submit" id="submit" value="Post Comment" />
							<input type='hidden' name='comment_post_ID' value='29' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
						<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="1dbacd9a2e" /></p>					</form>
							</div><!-- #respond -->
						  </div>

</article>


</div>

</section>
</div>

</div><!--div content-->

<footer role="contentinfo" class="clearfix">
<img src="../../img/m/jFooterLogo.png" />
    <nav class="socialMedia clearfix">
        <ul>
            <li class="googlePlus"><a href="https://plus.google.com/112889038622248264875" rel="me" >Plus me</a></li>
            <li class="dribbble"><a href="http://dribbble.com/jnowland" rel="me">Rebound me</a></li>
            <li class="twitter"><a href="http://twitter.com/jnowland" rel="me">Follow me</a></li>
            <li class="facebook"><a href="http://www.facebook.com/pages/James-Nowland-Web-Designer/118562818170575" rel="me">Like me</a></li>
        </ul>
    </nav>

    <noscript>
    <ul id="footerMenu">
        <li><a href="../../">Home</a></li>
        <!--<li class="projects"><a href="http://jamesnowland.com/notes/responsive-navigation-with-noscript-fallback/projects.html">Projects</a></li>
        <li class="articles"><a href="http://jamesnowland.com/notes/responsive-navigation-with-noscript-fallback/articles.html">Articles</a></li>-->
        <li><a href="../">Notes</a></li>
        <li><a href="../../about/">About</a></li>
        <li><a href="../../contact/">Contact</a></li>

    </ul>
  </noscript>

    <p><span>&copy; all rights reserved, </span><span>all your base are belong to us</span></p>

        <ul class="tnC">
            <li><a href="../../">Home</a></li>
            <li><a href="../../terms/">TERMS</a></li>
            <li><a href="../../privacy/">PRIVACY</a></li>

        </ul>

</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script src="../../js/script.js"></script>

<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script>
 $("#submitForm").validate();
</script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->


<script>
var _gaq=[['_setAccount','UA-5821269-13'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
