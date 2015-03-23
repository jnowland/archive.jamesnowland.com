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
Making wordpress themes in SASS - James Nowland - James Nowland</title>



<link rel="stylesheet" href="../wp-content/themes/jNewcastle2012/style.css" type="text/css" />

<link rel="pingback" href="../xmlrpc.php" />

<!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.4 - http://yoast.com/wordpress/seo/ -->
<link rel="canonical" href="http://jamesnowland.com/articles/wordpress-themes-in-sass" />
<meta property='og:locale' content='en_US'/>
<meta property='og:title' content='Making wordpress themes in SASS - James Nowland'/>
<meta property='og:url' content='http://jamesnowland.com/notes/wordpress-themes-in-sass-scss/'/>
<meta property='og:site_name' content='James Nowland'/>
<meta property='og:type' content='article'/>
<!-- / Yoast WordPress SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Feed" href="../feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Comments Feed" href="../comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Making wordpress themes in SASS Comments Feed" href="feed/" />
<link rel='stylesheet' id='theme-css'  href='../wp-content/themes/jNewcastle2012/style-ver=1.0.0.css' type='text/css' media='screen, projection' />
<link rel='stylesheet' id='layout-css'  href='../wp-content/themes/jNewcastle2012/custom-ver=1.0.0.css' type='text/css' media='screen, projection' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min-ver=3.5.1.js'></script>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head><body class="single single-post postid-94 single-format-standard notes">

<meta name="author" content="James Nowland">
</head>

<body class="clearfix ">

<div class="fullSpan">
    <header role="banner" class="clearfix">
    <h1><a href="../../">Newcastle Web Designer - Graphic Designer</a></h1>
        <nav id="navy">
            <ul id="menu">
                    <li class="home"><a href="../../">Home</a></li>
                    <!--<li class="projects"><a href="http://jamesnowland.com/notes/wordpress-themes-in-sass-scss/projects.html">Projects</a></li>
                    <li class="articles"><a href="http://jamesnowland.com/notes/wordpress-themes-in-sass-scss/articles.html">Articles</a></li>-->
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


<article class="post-94 post type-post status-publish format-standard hentry category-sass category-wordpress aNote" id="post-94">
            <h3>Making wordpress themes in SASS</h3>
            <span class="textDate">17 <em>of</em> Sep, 2012 </span>


            <p>Using SASS is great and provides lots of speed benefits for using preprocessors one thing is does do is removes comments by defaults when you compile a compress document.<br />
This is great for file size until you need to make a wordpress theme that requires CSS comments to work.</p>
<p>Instead of using a CSS import with the @import in your CSS file you can save the extra http request with loud comments in sass.</p>
<pre>/* This comment gets removed from sass compressed. */</pre>
<pre>
<strong>/*!</strong>
Theme Name: ThemeName
Theme URI: http://www.URLHERE.com.au/
Description: This is how you implement loud comments so that wordpress continues to work
Version: 1.0
Author: James Nowland
Author URI: http://www.jamesnowland.com
<strong>*/</strong>

@import "compass/reset";
@import "screen/functions";</pre>

    <!-- <div class="postmetadata">
          <span class="categories">Filed Under:
          <a href="http://jamesnowland.com/notes/category/sass/" title="View all posts in SASS" rel="category tag">SASS</a>, <a href="http://jamesnowland.com/notes/category/wordpress/" title="View all posts in wordpress" rel="category tag">wordpress</a>          </span>
              </div> -->

  <div id="comment-block">
    <h4 id="comments-title">
  3 Responses to Making wordpress themes in SASS</h4>
<ol>

<li class="comment even thread-even depth-1" id="li-comment-24">
  <div id="comment-24">


    <!-- .comment-meta .commentmetadata -->

    <div class="comment-body">
      <p>confused, does this mean you don&#8217;t have a style.css file instead you have a style.scss file that imports everything?  Does WordPress allow that?</p>
<p>The way I&#8217;m doing it now is having a blank style.css file with the comment block then using enqueue style to bring in the compiled SASS, is there any advantage of this method?</p>
    </div>
    <div class="comment-meta commentmetadata"><a href="/#comment-24">

      November 24, 2012 at 2:21 am      </a>
          </div>


    <div class="reply">
      <a class='comment-reply-link' href='index-replytocom=24.html#respond' onclick='return addComment.moveForm("comment-24", "24", "respond", "94")'>Reply</a>    </div>
    <!-- .reply -->
  </div>
  <!-- #comment-##  -->
  <div class="comment-author vcard"><cite class="fn"><a href='http://mimoymima.com' rel='external nofollow' class='url'>Brent Lagerman</a></cite>  </div>
    <!-- .comment-author .vcard -->

  <ul class='children'>

<li class="comment byuser comment-author-James bypostauthor odd alt depth-2" id="li-comment-25">
  <div id="comment-25">


    <!-- .comment-meta .commentmetadata -->

    <div class="comment-body">
      <p>Hey Brent,<br />
The style.scss gets compiled into a style.css file</p>
<p>It also compiles all the linked files into the one style.CSS file. This saves on HTTP requests and makes the site load faster.</p>
<p>Compared to the way you are currently doing it saves 1 HTTP request. it is micro optimisation but still easy to implement.</p>
    </div>
    <div class="comment-meta commentmetadata"><a href="/#comment-25">

      November 24, 2012 at 7:26 am      </a>
          </div>


    <div class="reply">
      <a class='comment-reply-link' href='index-replytocom=25.html#respond' onclick='return addComment.moveForm("comment-25", "25", "respond", "94")'>Reply</a>    </div>
    <!-- .reply -->
  </div>
  <!-- #comment-##  -->
  <div class="comment-author vcard"><cite class="fn">James</cite>  </div>
    <!-- .comment-author .vcard -->

  </li>
</ul>
</li>

<li class="comment even thread-odd thread-alt depth-1" id="li-comment-26">
  <div id="comment-26">


    <!-- .comment-meta .commentmetadata -->

    <div class="comment-body">
      <p>I&#8217;m convinced, making the switch <img src='../wp-includes/images/smilies/icon_biggrin.gif' alt=':D' class='wp-smiley' /> </p>
    </div>
    <div class="comment-meta commentmetadata"><a href="/#comment-26">

      November 24, 2012 at 12:44 pm      </a>
          </div>


    <div class="reply">
      <a class='comment-reply-link' href='index-replytocom=26.html#respond' onclick='return addComment.moveForm("comment-26", "26", "respond", "94")'>Reply</a>    </div>
    <!-- .reply -->
  </div>
  <!-- #comment-##  -->
  <div class="comment-author vcard"><cite class="fn"><a href='http://mimoymima.com' rel='external nofollow' class='url'>Brent Lagerman</a></cite>  </div>
    <!-- .comment-author .vcard -->

  </li>
</ol>
								<div id="respond">
				<h3 id="reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/#respond" style="display:none;">Cancel reply</a></small></h3>
									<form action="http://jamesnowland.com/notes/wp-comments-post.php" method="post" id="commentform">
																			<p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>							<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text" value="" size="30" aria-required='true' /></p>
<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="text" value="" size="30" /></p>
												<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>						<p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code></p>						<p class="form-submit">
							<input name="submit" type="submit" id="submit" value="Post Comment" />
							<input type='hidden' name='comment_post_ID' value='94' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
						<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="219662066f" /></p>					</form>
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
        <!--<li class="projects"><a href="http://jamesnowland.com/notes/wordpress-themes-in-sass-scss/projects.html">Projects</a></li>
        <li class="articles"><a href="http://jamesnowland.com/notes/wordpress-themes-in-sass-scss/articles.html">Articles</a></li>-->
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
