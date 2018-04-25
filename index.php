<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Secure Entrprise Connect™</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:type" content="article" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:image" content="screenshot.png" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="HandheldFriendly" content="true" />
        <meta http-equiv=cache-Control content="public, max-age=604800, must-revalidate" />
        <meta http-equiv=expires content=0 />
        <link rel="canonical" href="" />
        <link rel="apple-touch-icon" href="favico.png">
        <link rel="shortcut icon" type="image/png" href="favico.png" />
    </head>
    <body class="body">
        <div id="wrap" class="wrapper">
            <nav class="navigation -mobile">
                <ul>
                    <li>
                        <a href="maintainence.html" title="Press Releases">Press Releases</a>
                    </li>
                    <li>
                        <a href="maintainence.html" title="Team">Team</a>
                    </li>                            
                    <li>
                        <a href="maintainence.html" title="About the Tech">About the Tech</a>
                    </li>                            
                    <li>
                        <a href="maintainence.html" title="FAQ">FAQ</a>
                    </li>
                </ul>
            </nav>
            <header class="header">
                <div class="container">
                    <a class="logo" href="#" title="Secure Entrprise Connect">
                        <img height="60" width="auto" src="assets/imgs/logo.png" alt="Secure Entrprise Connect">
                    </a>
                    <nav class="navigation">
                        <ul>
                            <li>
                                <a href="maintainence.html" title="Press Releases">Press Releases</a>
                            </li>
                            <li>
                                <a href="maintainence.html" title="Team">Team</a>
                            </li>                            
                            <li>
                                <a href="maintainence.html" title="About the Tech">About the Tech</a>
                            </li>                            
                            <li>
                                <a href="maintainence.html" title="FAQ">FAQ</a>
                            </li>
                            <li>
                                <button onclick="mobileNavigation()" type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
                                    <span class="tcon-menu__lines" aria-hidden="true">
                                    </span>
                                    <span class="tcon-visuallyhidden">toggle menu</span>
                                </button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <main>
                <section id="banner" class="banner">
                    <div class="container">
                        <h1>
                            You Can't Hack<br>What You Can't See
                        </h1>
                        <h2>
                            Secure Enterprise Connect brings you<br> 
                            the next generation remote access<br>
                            security solution
                        </h2>
                        <nav class="navigation">
                            <ul>
                                <li>
                                    <a class="btn -default" href="downloads/whitepaper.pdf" title="Download Whitepaper">Download Whitepaper</a>
                                </li>
                                <li>
                                    <!-- 
                                        Should be passed by data-video attribute 
                                        the embed code of the video, like nCclWMUrNas and 
                                        so It'll be shown in the modal's iframe 
                                    -->
                                    <a class="btn -default" href="javascript:void(0)" onclick="openModal(this)" data-video="KaHwKRp18W0" title="Watch Video"><i class="play fa-play fa"></i> Watch Video</a>
                                </li>
                            </ul>                            
                        </nav>
                    </div>
                </section>
                <!--  -->
                <nav class="navigation -lateral">
                    <ul>
                        <li><a title="Slack" target="_blank" href="#">Slack</a></li>
                        <li><a title="Discord" target="_blank" href="#">Discord</a></li>
                        <li><a title="Twitter" target="_blank" href="#">Twitter</a></li>
                        <li><a title="Telegram" target="_blank" href="#">Telegram</a></li>
                    </ul>
                </nav>
            </main>
            <footer class="footer">
                <div class="container">
                    <ul class="social">
                        <li>
                            <a href="" title="Slack" class="fab fa-slack"></a>
                        </li>
                        <li>
                            <a href="" title="Discord" class="fab fa-discord"></a>
                        </li>
                        <li>
                            <a href="" title="Twitter" class="fab fa-twitter"></a>
                        </li>
                        <li>
                            <a href="" title="Telegram" class="fab fa-telegram"></a>
                        </li>
                    </ul>
                    <p>&#169; <?php echo date("Y"); ?> Secure Enterprise Connect™. All Rights Reserved.</p>
                </div>
            </footer>
        </div>
        <div class="modal">
            <div class="modal-body">
                <a href="javascript:void(0)" onclick="closeModal(this)" class="close"></a>
                <div class="modal-content">
                    <div class="iframe">
                        <iframe src="" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
        <script src="assets/css/components/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/css/components/transformicons/transformicons.min.js" type="text/javascript"></script>
        <script src="assets/js/functions.min.js" type="text/javascript"></script>
        <script>
            transformicons.add('.tcon')
        </script>
        <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    </body>
</html>