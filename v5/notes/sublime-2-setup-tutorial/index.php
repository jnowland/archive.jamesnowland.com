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
Setting up sublime text for a web designer - James Nowland - James Nowland</title>



<link rel="stylesheet" href="../wp-content/themes/jNewcastle2012/style.css" type="text/css" />

<link rel="pingback" href="../xmlrpc.php" />

<!-- This site is optimized with the Yoast WordPress SEO plugin v1.4.4 - http://yoast.com/wordpress/seo/ -->
<link rel="canonical" href="http://jamesnowland.com/articles/sublime-text/" />
<meta property='og:locale' content='en_US'/>
<meta property='og:title' content='Setting up sublime text for a web designer - James Nowland'/>
<meta property='og:url' content='http://jamesnowland.com/notes/sublime-2-setup-tutorial/'/>
<meta property='og:site_name' content='James Nowland'/>
<meta property='og:type' content='article'/>
<!-- / Yoast WordPress SEO plugin. -->

<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Feed" href="../feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Comments Feed" href="../comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="James Nowland &raquo; Setting up sublime text for a web designer Comments Feed" href="feed/" />
<link rel='stylesheet' id='theme-css'  href='../wp-content/themes/jNewcastle2012/style-ver=1.0.0.css' type='text/css' media='screen, projection' />
<link rel='stylesheet' id='layout-css'  href='../wp-content/themes/jNewcastle2012/custom-ver=1.0.0.css' type='text/css' media='screen, projection' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js?ver=3.5.1'></script>
<script type='text/javascript' src='../wp-includes/js/comment-reply.min-ver=3.5.1.js'></script>

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head><body class="single single-post postid-79 single-format-standard notes">

<meta name="author" content="James Nowland">
</head>

<body class="clearfix ">

<div class="fullSpan">
    <header role="banner" class="clearfix">
    <h1><a href="../../">Newcastle Web Designer - Graphic Designer</a></h1>
        <nav id="navy">
            <ul id="menu">
                    <li class="home"><a href="../../">Home</a></li>
                    <!--<li class="projects"><a href="http://jamesnowland.com/notes/sublime-2-setup-tutorial/projects.html">Projects</a></li>
                    <li class="articles"><a href="http://jamesnowland.com/notes/sublime-2-setup-tutorial/articles.html">Articles</a></li>-->
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


<article class="post-79 post type-post status-publish format-standard hentry category-productivity aNote" id="post-79">
            <h3>Setting up sublime text for a web designer</h3>
            <span class="textDate">26 <em>of</em> Jul, 2012 </span>


            <p>I recall the first time I set up sublime, it was a tad confusing on how to make it awesome. So the second time of installing it I noted the steps to make it awesome.</p>
<h4>Setting up sublime text editor</h4>
<ol>
<li>Go here: <a href="http://www.sublimetext.com/" target="_blank">http://www.sublimetext.com/</a> Download and install it.</li>
<li>Get <a href="http://wbond.net/sublime_packages/package_control/installation" target="_blank">Sublime Package manager to download</a> the good stuff. Copy the code below.<br />
<code><br />
import urllib2,os; pf='Package Control.sublime-package'; ipp=sublime.installed_packages_path(); os.makedirs(ipp) if not os.path.exists(ipp) else None; urllib2.install_opener(urllib2.build_opener(urllib2.ProxyHandler())); open(os.path.join(ipp,pf),'wb').write(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read()); print 'Please restart Sublime Text to finish installation'<br />
</code></p>
</li>
<li>Launch the console: View &gt; Console. Paste in the code.</li>
<li>Restart Sublime</li>
<li>Open package control: Sublime Text &gt; Package Control</li>
<li>Type &#8220;install&#8221; packages. Grab the packages you like.</li>
</ol>
<p>Being a front end coder I&#8217;d suggest you get the following packages:</p>
<ul>
<li>Zen Coding</li>
<li>jQuery</li>
<li>HTML 5</li>
<li> SCSS</li>
</ul>

    <!-- <div class="postmetadata">
          <span class="categories">Filed Under:
          <a href="http://jamesnowland.com/notes/category/productivity/" title="View all posts in productivity" rel="category tag">productivity</a>          </span>
              </div> -->

  <div id="comment-block">
    <h4 id="comments-title">
  One Response to Setting up sublime text for a web designer</h4>
<ol>

<li class="comment even thread-even depth-1" id="li-comment-30">
  <div id="comment-30">


    <!-- .comment-meta .commentmetadata -->

    <div class="comment-body">
      <p>Zen Coding / Emmet is something that totally saved my life. I think Chris Coyier&#8217;s talk on a modern web designer&#8217;s workflow just summed all the tools up perfectly. Followed your blog through a comment on his article. Cheers for sharing <img src='../wp-includes/images/smilies/icon_smile.gif' alt=':)' class='wp-smiley' /> </p>
    </div>
    <div class="comment-meta commentmetadata"><a href="/#comment-30">

      March 7, 2013 at 3:48 am      </a>
          </div>


    <div class="reply">
      <a class='comment-reply-link' href='index-replytocom=30.html#respond' onclick='return addComment.moveForm("comment-30", "30", "respond", "79")'>Reply</a>    </div>
    <!-- .reply -->
  </div>
  <!-- #comment-##  -->
  <div class="comment-author vcard"><cite class="fn"><a href='http://twitter.com/arachattack' rel='external nofollow' class='url'>Vinay Raghu</a></cite>  </div>
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
							<input type='hidden' name='comment_post_ID' value='79' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>
						<p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="50b9d23ffa" /></p>					</form>
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
        <!--<li class="projects"><a href="http://jamesnowland.com/notes/sublime-2-setup-tutorial/projects.html">Projects</a></li>
        <li class="articles"><a href="http://jamesnowland.com/notes/sublime-2-setup-tutorial/articles.html">Articles</a></li>-->
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
