<?php require "backend/About/pastGames.inc.php"?>
<link rel="stylesheet" href="static/css/hero.css?<?php echo time(); ?>" />
<link rel="stylesheet" href="static/css/about.css?<?php echo time(); ?>" />
</head>

<body style="height: 100%;">
    <?php include "templates/hero.tpl.php" ?>
    <?php include "templates/about.tpl.php" ?>
    <?php include "templates/pastGames.tpl.php" ?>

    <div class="page">
        <h2 class="header-section">Details</h2>
        <div class="container-sub">
            <div class="container-content center-h">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2>Eligibility and Team Formation</h2>
                    </div>
                    <p class="header-content text-align-left fade-left paused">Open to all <b class = "white">River Valley High School students</b>, you can
                        participate <b>individually</b> or in <b>teams of up to four members</b>. Feel free to choose your teammates
                        or opt for <b>random assignment</b>.</p>
                </div>
                <div class="container-image">
                    <img id="image-team" class="center-h" src="static/img/team.webp">
                    <a href="https://forms.gle/YiPxeeYy15nnUFm7A" class="center-h flex-image-button fade-bottom paused">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h order-reverse">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-right">
                        <h2>Competition Timeline</h2>
                    </div>
                    <p class="header-content text-align-right fade-right paused">The game jam runs from <b class = "white">16 November - 31st December</b>, taking part in the duration of the December Holidays</p>
                </div>
                <div class="container-image">
                    <img id="image-calender" class="center-h" src="static/img/calender.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2>Theme</h2>
                    </div>
                    <p class="header-content text-align-left fade-left paused">The game jam features <b class = "white">one main topic</b>, along with <b class = "white">three
                        optional sub-topics</b>, which will boost your score.</p>
                </div>
                <div class="container-image" id="image-themes">
                    <img class="center-h first fade-tilt-left paused" src="static/img/oldTheme1.webp">
                    <img class="center-h second fade-tilt-right paused" src="static/img/oldTheme2.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h  order-reverse">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2><br></h2>
                    </div>
                    <p class="header-content text-align-right fade-right paused">If you're stumped by the main theme, you may choose to
                        focus <b>solely on the sub-topics</b>, but be aware this will result in a <b class = "white">lower score</b>.</p>
                </div>
                <div class="container-image">
                    <img id="image-theme" class="center-h" src="static/img/gmtkTheme.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <p class="header-content text-align-center text-solo center-h fade-top paused">The game's theme will be announced at the
                start of the competition on <b>November 16</b>, via <b class = "white">this website</b> and <b class = "white">social media</b>.</p>
            <div class="center-h fade-in paused" id="image-ig-1">
                <a href="https://www.instagram.com/rv.devs/"><img id="image-ig-2" class="center-h"
                        src="static/img/ig.webp"></a>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2>Coding Tools</h2>
                    </div>
                    <p class="header-content text-align-left fade-right paused">Participants can use <b>any coding software or engine</b>,
                        including <b class = "white">AI tools</b> like ChatGPT for <b class = "white">coding purposes</b>.
                    </p>
                </div>
                <div class="container-image fade-in paused">
                    <img id="image-tool" class="center-h" src="static/img/tool.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h order-reverse">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-right">
                        <h2>Asset Creation</h2>
                    </div>
                    <p class="header-content text-align-right fade-right paused">While <b>AI-generated assets</b> is permissible, it <b class = "white">must be
                        declared</b>. We encourage you to <b>create your own assets</b>.</p>
                </div>
                <div class="container-image">
                    <img id="image-assets" class="center-h" src="static/img/assets.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <h2 class="header-section center-h text-align-center">Recommended Software</h2>
        <div class="software-main center-h">
            <div class="software-holder center-v fade-bottom paused">
                <a href="https://www.gimp.org/"><img src="static/img/gimps.webp"></a>
            </div>
            <div class="software-holder center-v center-h fade-bottom paused">
                <a href="https://www.piskelapp.com/"><img src="static/img/piskel.webp"></a>
            </div>
            <div class="software-holder center-v fade-bottom paused">
                <a href="https://www.reaper.fm/"><img src="static/img/reaper.webp"></a>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="container-sub">
            <div class="container-content center-h order-reverse">
                <div class="container-image">
                    <img id="image-showcase" class="center-h fade-in paused" src="static/img/playtest.webp">
                </div>
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2>Game Showcasing</h2>
                    </div>
                    <p class="header-content text-align-left fade-right paused">All entries will be available for playtesting and voting
                        on our Game Jam website in <b class = "white">January 2025</b>; find the <b>link in the header</b>.</p>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <h2 class="header-section center-h text-align-center">Submission Guidelines</h2>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Deadline</h2>
        </div>
        <div class="container-central center-h order-reverse">
            <div class="center-v container-central-image center-h fade-in paused">
                <img class="image-upload center-h" src="static/img/upload.webp">
            </div>
            <p class="header-content text-align-left fade-bottom paused">Upload your game to the website before the <b class = "white">31st December</b> for
                public display. Late entries are allowed but will incur a <b>scoring penalty</b>.</p>
        </div>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Submission Format</h2>
        </div>
        <p class="header-content text-align-left header-content-central center-h fade-bottom paused">Submit your game via a <b>Google Drive
            link</b> on the website's submission page.</p>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Game Description</h2>
        </div>
        <p class="header-content text-align-left header-content-central center-h fade-bottom paused">Include a <b class = "white">100-word description</b> to
            outline your game's features or controls. In-game tutorials are also encouraged to enhance user experience.
        </p>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Image/Video Graphics</h2>
        </div>
        <div class="container-central center-h">
            <div class="center-v container-central-image center-h fade-in paused">
                <img class="image-upload center-h" src="static/img/screenshot.webp">
            </div>
            <p class="header-content text-align-left fade-right paused">Submit <b class = "white">3-4 Screenshots</b> of your game’s content, and a
                logo.<br><br><b>Optionally</b>, submit a <b class = "white">one-minute video</b> (up to 16MB) to showcase your game's mechanics and
                thematic relevance.</p>
        </div>
        <div class="spacer"></div>
        <h2 class="header-section text-align-left">Judging</h2>
        <div class="container-sub">
            <div class="container-content center-h">
                <div class="container-text">
                    <div class="header-subsection center-v text-align-left">
                        <h2>Judging Process</h2>
                    </div>
                    <p class="header-content text-align-left fade-left paused">Judging will be done by both the <b class = "white">general public</b> and <b>RdeV
                        Exco</b>. Be sure to vote for your favourite games!</p>
                </div>
                <div class="container-image fade-right paused">
                    <img id="image-showcase" class="center-h" src="static/img/judging.webp">
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Judging Rubrix</h2>
        </div>
        <?php require "templates/judgingRubrix.tpl.php"?>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <h2 class="header-section text-align-left">Miscellaneous</h2>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Whatsapp Group</h2>
        </div>
        <p class="header-content text-align-center header-content-central center-h fade-bottom paused">You may join the <b class = "white">GameJam Whatsapp chat</b>
            included in the <b>sign up google form</b>. This Group Chat will be used to <b>communicate between all
            participants</b>, to <b>ask questions regarding the event</b> as well as to ask for help from others</p>
        <div class="spacer"></div>
        <div class="header-subsection center-v center-h text-align-center">
            <h2 class="center-h">Contact</h2>
        </div>

        <div class="spacer"></div>
        <div class="contact-main center-h">
            <div class="contact-holder center-v fade-in paused">
                <a href="mailto:rdevcca@gmail.com">
                    <img src="static/img/gmail.webp">
                    <p class="center-h text-align-center">rdevcca@gmail.com</p>
                </a>
            </div>
            <div class="contact-holder center-v center-h fade-in paused">
                <a href="https://www.instagram.com/rv.devs/">
                    <img src="static/img/ig_contact.webp">
                    <p class="center-h text-align-center">rv.devs</p>
                </a>
            </div>
            <div class="contact-holder center-v fade-in paused">
                <div>
                    <img src="static/img/call.webp">
                    <p class="center-h text-align-center">+65 8511 8746<br>(President, Natalie)</p>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <a href="https://forms.gle/YiPxeeYy15nnUFm7A" class="center-h center-v signup-button" style = "margin-bottom:2em;"><span>Sign Up</span></a>
        <div class="spacer"></div>

    </div>

    <script>
        const pastGames = <?php echo json_encode($pastGame); ?>;
    </script>
    <script src = "static/js/home.js"></script>