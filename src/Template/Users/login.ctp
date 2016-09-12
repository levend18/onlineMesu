<!DOCTYPE html>
<!-- saved from url=(0059)https://onlineMenu.com/SVG/?access_token=demo_user&firstrun=1 -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MenuBook</title>
    <meta name="author" content="www.menubook.com">
    <meta name="subject" content="MenuPro 11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->Html->css([
        'fontg-ui', 'fontg1', 'fontg2',
        'fontg3', '19_East_Main', 'Brunch_Sunnyside',
        'fontsoverride', 'user_font', 'prince',
        'bootstrap.min',
        'flip.min',
        'bootstrap-select.min',
        'spectrum.min',
        'megalist',
        'bootstrap-notify.min',
        'joyride.min',

        'nijiover', 'spellcheck',
        'twitover', 'mp-icons', 'mp-foots',

    ]); ?>


    <!-- <link href="mp-spinner.css?version=31" rel="stylesheet" type="text/css"> -->    <!-- NUY 11.0.31 -->


    <!-- jquery must remain here -->
    <?php
    echo $this->Html->script([
     'jquery.min','jquery-2.2.0.min',
    'jquery.min.js', 'base64', 'utf8',
    'crc32', 'crc32', 'utf8'
    ]
    );?>


</head>


<body style="position: inherit; background-image: none; background-color: rgb(248, 248, 248);">

<!-- PDF -->
<form id="genpdf1" action="https://onlineMenu.com/tools/MenuProPDF" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token1" name="access_token" value="demo_user">
    <input type="hidden" id="isJPGfile1" name="isJPGfile1" value="0">
    <input type="hidden" id="isCover1" name="isCover1" value="0">
    <input type="hidden" id="isHiRes1" name="isHiRes1" value="0"> <!-- 11.0.43 -->
    <input type="hidden" id="genpdf_mySS1" name="myStyleSheet" value="">
    <input type="hidden" id="genpdf_mySVG1" name="mySVGstr" value="">
    <input type="hidden" id="genpdf_myPDFMenuTitle1" name="myPDFMenuTitle" value="iMenuPro Menu">
</form>

<!-- PDF Multi -->
<form id="genpdf" action="https://onlineMenu.com/tools/iMenuProPDF" method="post" style=" display: none;" target="pdfWindow">
    <input type="hidden" id="access_token" name="access_token" value="demo_user">
    <input type="hidden" id="isCover" name="isCover" value="0">
    <input type="hidden" id="isHiRes" name="isHiRes" value="0"> <!-- 11.0.43 -->
    <input type="hidden" id="isJPGfile" name="isJPGfile" value="0">
    <input type="hidden" id="genpdf_mySS" name="myStyleSheet" value="">
    <input type="hidden" id="genpdf_myDup" name="myPDFDup" value="0">
    <input type="hidden" id="genpdf_myPDFMenuTitle" name="myPDFMenuTitle" value="iMenuPro Menu">
</form>

<!-- PDF GC -->
<form id="genpdf-gc" action="https://onlineMenu.com/tools/iMenuProPDFGC" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token_gc" name="access_token" value="demo_user">
    <input type="hidden" id="genpdf_mySS_gc" name="myStyleSheet" value="">
    <input type="hidden" id="genpdf_mySVG_gc" name="mySVGstr" value="">
    <input type="hidden" id="genpdf_mySVGWidth_gc" name="mySVGWidth" value="">
    <input type="hidden" id="genpdf_mySVGHeight_gc" name="mySVGHeight" value="">
    <input type="hidden" id="genpdf_mySVGPaper_gc" name="mySVGPaper" value="">
    <input type="hidden" id="genpdf_myPDFMenuTitle_gc" name="myPDFMenuTitle" value="iMenuPro Gift Cert">
</form>
<!-- PDF TT -->
<form id="genpdf-tt" action="https://onlineMenu.com/tools/iMenuProPDFTT" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token_tt" name="access_token" value="demo_user">
    <input type="hidden" id="isCover_tt" name="isCover_tt" value="0">
    <input type="hidden" id="isHiRes_tt" name="isHiRes_tt" value="0"> <!-- 11.0.43 -->
    <input type="hidden" id="genpdf_mySS_tt" name="myStyleSheet" value="">
    <input type="hidden" id="genpdf_mySVG_tt" name="mySVGstr" value="">
    <input type="hidden" id="genpdf_mySVGWidth_tt" name="mySVGWidth" value="">
    <input type="hidden" id="genpdf_mySVGHeight_tt" name="mySVGHeight" value="">
    <input type="hidden" id="genpdf_myPDFMenuTitle_tt" name="myPDFMenuTitle" value="iMenuPro Table Tent Menu">
</form>
<!-- PDF TT2 -->
<form id="genpdf-tt2" action="https://onlineMenu.com/tools/iMenuProPDFTT2" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token_tt2" name="access_token" value="demo_user">
    <input type="hidden" id="isCover_tt2" name="isCover_tt2" value="0">
    <input type="hidden" id="isHiRes_tt2" name="isHiRes_tt2" value="0"> <!-- 11.0.43 -->
    <input type="hidden" id="genpdf_mySS_tt2" name="myStyleSheet" value="">
    <input type="hidden" id="genpdf_mySVG_tt2" name="mySVGstr" value="">
    <input type="hidden" id="genpdf_mySVGWidth_tt2" name="mySVGWidth" value="">
    <input type="hidden" id="genpdf_mySVGHeight_tt2" name="mySVGHeight" value="">
    <input type="hidden" id="genpdf_myPDFMenuTitle_tt2" name="myPDFMenuTitle" value="iMenuPro Table Tent Menu">
</form>

<!-- PDF FI-->
<form id="genpdf-fi" action="https://onlineMenu.com/tools/iMenuProPDFFoodItems" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token_FI" name="access_token" value="demo_user">
    <input type="hidden" id="genpdf_myFoodItems" name="myFoodItems" value="">
</form>

<!-- PDF Note -->
<form id="genpdf-note" action="https://onlineMenu.com/tools/iMenuProPDFNote" method="post" style=" display: none;" target="_blank">
    <input type="hidden" id="access_token_note" name="access_token" value="demo_user">
    <input type="hidden" id="genpdf_myFoodItemName" name="myFoodItemName" value="">
    <input type="hidden" id="genpdf_myNote" name="myNote" value="">
</form>

<!-- Export FI 11.0.37-->
<form id="genex-fi" action="https://onlineMenu.com/tools/iMenuProExFoodItems" method="post" style=" display: none;" target="_self">
    <input type="hidden" id="access_token_EXFI" name="access_token" value="demo_user">
    <input type="hidden" id="genpdf_myExFoodItems" name="myExFoodItems" value="">
</form>

<!-- Top black navbar -->
<div class="navbar navbar-inverse navbar-fixed-top dont_select">
    <div id="mp-topnav" class="navbar-inner">
        <div id="mp-topnav-container" class="container" style="pointer-events: all;"> <!-- pull-left removed for Centered method -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span> <!-- little bars -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Status Bar -->
            <a id="MPBrandIcon" class="brand" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1"></a> <!-- no logo icon, leave for spacing -->
            <span id="MPBrandNameSpan" class="brand notranslate">
				<a id="MPBrandName" href="https://onlineMenu.com/" target="_blank"><span class="imp-text" style="color: rgb(254, 146, 37);">i</span>MenuPro</a>
			</span>

            <!-- Collapse: Menu name, trash can, and status bar vars -->
            <div class="nav-collapse collapse notranslate">
				<span id="MPstatusBarMenuNameSpan" class="brand MPStatusBarFont" style="pointer-events: all;">
					<!-- notranslate required on field -->
					<a class="titledName notranslate" id="MPstatusBarMenuName" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" rel="tooltip" title="Rename Menu">Sample Menu</a>
				</span>
                <span id="MPDeleteIconSpan" class="brand" style="pointer-events: all;">
					<a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" rel="tooltip" title="Delete Menu">
					<i id="MPDeleteIcon" class="icon-trash icon-white"></i></a>
		       </span>
                <span id="MPMobileIconSpan" class="brand">
					<a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" rel="tooltip" title="Live-Sync Menu">
					<i id="MPMobileIcon" class="icon2-iphone icon2-white" style="display: none;"></i></a>
		       </span>
                <span id="MPstatusBarPageTitle" class="brand MPStatusBarFont">Page:&nbsp;</span>
                <span id="MPstatusBarPage" class="brand MPStatusBarFont" style="color: rgb(226, 226, 226) !important; opacity: 1;">1</span>
                <span id="MPstatusBarPageSpacingTitle" class="brand MPStatusBarFont">Spacing:&nbsp;</span>
                <span id="MPstatusBarPageSpacingSpan" class="brand MPStatusBarFont" style="pointer-events: all;">
					<a id="MPstatusBarPageSpacing" class="MPStatusBarFontX" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPageSpacingDialog" data-toggle="modal" rel="tooltip" title="Change the spacing between items on current page" style="color: rgb(226, 226, 226);">0.0</a>
				</span>
                <span id="MPstatusBarPageSizeSpan" class="brand MPStatusBarFont dont_select" style="pointer-events: all;">
					<a id="MPstatusBarPageSize" class="MPStatusBarFont" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPageSetup" data-toggle="modal" rel="tooltip" title="Change the paper size">Size: 8.50" x 11"</a>
				</span>
            </div>


            <!-- HEADS UP! If pull-left (or pull-right) not used here, links on top navbar will NOT work -->
            <form id="MPLiveAcct" class="navbar-form pull-left hide" style="margin-left:-15px">
                <ul id="MPAccountNav" class="nav">
                    <li class="dropdown">
                        <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="MPStatusAccount" class="dropdown-toggle" data-toggle="dropdown" rel="tooltip" title="View Account or Log Out"><i class="icon2-acct-keys icon2-white"></i> Your Account <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myAccountSettingsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Account Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myAddOnsDialog" data-toggle="modal"><i class="icon-download-alt"></i> Add-ons</a></li>
                            <li class="divider"></li>
                            <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="acct-log-out"><i class="no-menu-icon"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                <a id="MPuseracct" class="brand MPStatusBarFont hidden-phone dont_select" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myAccountSettingsDialog" data-toggle="modal" rel="tooltip" title="Your Account Settings"></a>
                <!-- 11.0.37 -->
                <a id="MPnoprice" class="brand MPStatusBarFont visible-exlarge-desktop" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPriceOptionsDialog" data-toggle="modal" rel="tooltip" data-placement="bottom" title="View price options"></a>
                <a id="MPnodesc" class="brand MPStatusBarFont visible-exlarge-desktop" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myColumnLayoutOptionsDialog" data-toggle="modal" rel="tooltip" data-placement="bottom" title="View main bullet/text options"></a>
                <a id="MPnoextras" class="brand MPStatusBarFont visible-exlarge-desktop" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myColumnLayoutOptionsDialog" data-toggle="modal" rel="tooltip" data-placement="bottom" title="View extras bullet/text options"></a>
                <!-- ----------- -->
                <a id="MPtextlocked" class="brand MPStatusBarFont visible-exlarge-desktop" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleEnableText(&#39;#enabletext-icon&#39; ); return false;" rel="tooltip" data-placement="bottom" title="Enable menu text"></a>
            </form>

            <form id="MPDemoAcct" class="navbar-form pull-left hide" style="display: block;">
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1" class="btn btn-signup" role="button">Signup</a> <!-- 11.0.36 -->
                <!-- <a href="https://onlineMenu.com/signup" target="_blank" class="btn btn-signup" role="button">Signup</a> -->
            </form>



        </div>  <!-- /container -->
    </div> <!-- / navbar-inner -->
</div> <!-- / nav bar fixed-top -->


<!-- MAIN MENUs, use subnav to prevent scroll -->
<div class="subnav-1 navbar navbar-fixed-top dont_scroll dont_select">
    <div id="MPFileMenuNav" class="navbar-inner" style="pointer-events: all;">
        <div id="mp-menunav-container" class="container"> <!-- removed pull-left for Centered method -->
            <ul id="mp-filemenu" class="nav">

                <!-- FILE -->
                <li class="dropdown">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">File <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="menu-make-new" style="pointer-events: all;"><a class="a-bs-fix" id="myNewMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> New Menu<small id="ctrl-n-menu" class="pull-right hide"><abbr>Ctrl+N</abbr></small></a></li>
                        <li id="menu-make-open" class="not_in_demo disabled" style="pointer-events: all;"><a class="a-bs-fix" id="myOpenMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal"><i class="no-menu-icon"></i> Open Menu...<small class="pull-right"><abbr>Ctrl+O</abbr></small></a></li>
                        <li id="menu-make-delete" class="not_in_demo disabled" style="pointer-events: all;"><a id="myDeleteMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal"><i class="no-menu-icon"></i> Delete Menu...</a></li>
                        <li class="divider"></li>
                        <li class="not_in_demo disabled" id="menu-save-me"><a class="a-bs-fix" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal"><i class="no-menu-icon"></i> Save Menu <small class="pull-right"><abbr>Ctrl+S</abbr></small></a>
                        </li>
                        <li class="divider"></li>
                        <li id="menu-make-rename" class="not_in_demo disabled" style="pointer-events: all;"><a id="myRenameMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal"><i class="no-menu-icon"></i> Rename Menu...</a></li>
                        <li id="menu-make-copy" class="not_in_demo disabled" style="pointer-events: all;"><a id="myCopyMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Make a Copy</a></li>
                        <li id="menu-make-revert" class="not_in_demo disabled" style="pointer-events: all;"><a id="myRevertMenu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Revert...</a></li>
                        <li class="divider"></li>
                        <li id="menu-make-pagesetup" style="pointer-events: all;"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPageSetup" data-toggle="modal"><i class="no-menu-icon"></i> Page Setup...</a></li>
                        <li class="divider"></li>
                        <li id="menu-make-print"><a id="menu-topdf" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon-print"></i> Create PDF to Print &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <li id="menu-log-out-divider" class="divider" style="display: none;"></li>
                        <li id="menu-log-out" class="not_in_demo disabled" style="display: none;"><a id="myMenuLogout" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Log Out</a></li>
                    </ul>
                </li>

                <!-- EDIT -->
                <li id="drop-edit" class="dropdown" style="pointer-events: all;">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Edit <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="menu-edit-undo" class="disabled"><a id="dialog-edit-undo" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"> <i id="mp-undo-icon" class="icon2-undo icon2-white"></i> Undo</a></li>
                        <li id="menu-edit-redo" class="disabled"><a id="dialog-edit-redo" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-redo-icon" class="icon2-redo icon2-white"></i> Redo</a></li>
                        <li class="divider"></li>
                        <li id="menu-new-fooditem"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myFoodItemDialog" data-toggle="modal"><i class="no-menu-icon"></i> New Food Item...</a></li>
                        <li id="menu-new-heading"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myHeadingDialog" data-toggle="modal"><i class="no-menu-icon"></i> New Menu Heading...</a></li>
                    </ul>
                </li>

                <!-- VIEW -->
                <li id="dropdown-view" class="dropdown">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle notranslate" data-toggle="dropdown" data-hover="dropdown">View <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleMenuView(&#39;#classic-icon&#39;, true ); return false;">
                                <i id="classic-icon" class="icon-ok"></i> Classic (Foods &amp; Menu)</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleMenuView(&#39;#onlymenu-icon&#39;, false ); return false;">
                                <i id="onlymenu-icon" class="no-menu-icon"></i> Only Menu</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myGridOptionsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Grid...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myMenuCoverDialog" data-toggle="modal"><i class="no-menu-icon"></i> Menu Cover...</a></li>
                        <li class="divider"></li>
                        <li id="dropdown-view-zoom55"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-z55" class="no-menu-icon"></i> 55%</a></li>
                        <li id="dropdown-view-zoom70"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-z70" class="no-menu-icon"></i> 70%</a></li>
                        <li id="dropdown-view-zoom70"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-z85" class="no-menu-icon"></i> 85%</a></li>
                        <li id="dropdown-view-zoom100"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-z100" class="icon-ok"></i> 100% (actual size)</a></li>
                        <li id="dropdown-view-zoom130"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-z130" class="no-menu-icon"></i> 130%</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleEnableText(&#39;#enabletext-icon&#39; ); return false;">
                                <i id="enabletext-icon" class="icon-ok"></i> Enable menu text</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleEnableText(&#39;#disabletext-icon&#39; ); return false;">
                                <i id="disabletext-icon" class="no-menu-icon"></i> Disable menu text</a></li>
                        <li class="divider"></li>
                        <li id="surftxt" class="nav-header">Surface texture</li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleTableView(&#39;#mp-view-ts-default&#39;, &#39;default&#39;); return false;">
                                <i id="mp-view-ts-default" class="icon-ok"></i> Flat</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleTableView(&#39;#mp-view-ts-subtle&#39;, &#39;subtle&#39;); return false;">
                                <i id="mp-view-ts-subtle" class="no-menu-icon"></i> Paper</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleTableView(&#39;#mp-view-ts-linen&#39;, &#39;linen&#39;); return false;">
                                <i id="mp-view-ts-linen" class="no-menu-icon"></i> Linen</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleTableView(&#39;#mp-view-ts-screen&#39;, &#39;screen&#39;); return false;">
                                <i id="mp-view-ts-screen" class="no-menu-icon"></i> Mesh</a></li>
                    </ul>
                </li>

                <!-- INSERT -->
                <li id="drop-insert" class="dropdown" style="pointer-events: all;">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Insert <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a id="mp-ftext-command" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myFloatingTextDialog" data-toggle="modal"><i class="icon-text-width"></i> Floating Text...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myInsertUploadedImageDialog" id="mp-ui-image" data-toggle="modal"><i class="icon-camera"></i> Uploaded Image...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myInsertiMenuProImageDialog" id="mp-ai-image" data-toggle="modal"><i class="icon2-ai-image"></i> Artisan Image...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myFooterDialog" id="mp-footer-modal" data-toggle="modal"><i class="no-menu-icon"></i> Footer...</a></li>
                    </ul>
                </li>

                <!-- DESIGN Menu -->
                <li id="drop-design" class="dropdown" style="pointer-events: all;">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle">Design <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myMenuStyleDialog" data-toggle="modal"><i class="icon2-style-switch"></i> Switch Menu Styles...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myBackgroundDialog" data-toggle="modal"><i class="no-menu-icon"></i> Background...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myBorderDialog" data-toggle="modal"><i class="no-menu-icon"></i> Border...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myHeadingAccentsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Heading Accents...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myColumnLayoutOptionsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Layout Options...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPriceOptionsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Price Options...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#mySymbolOptionsDialog" data-toggle="modal"><i class="no-menu-icon"></i> Symbol Options...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChalkboardDialog" data-toggle="modal"><i class="no-menu-icon"></i> Chalkboard...</a></li>
                        <li class="divider"></li>
                        <li id="menu-reset-style1" class="disabled"><a id="menu-reset-style1a" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal"><i id="mp-reset-icon" class="icon2-reset icon2-white"></i> Reset to Style defaults...</a></li>
                    </ul>
                </li>

                <!-- FONTS -->
                <li id="drop-fonts" class="dropdown" style="pointer-events: all;">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="dropdown" class="dropdown-toggle" data-hover="dropdown">Fonts <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a name="fontMenu:title-heading:Title_Heading" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Title Heading...</a></li>
                        <li><a name="fontMenu:heading:Normal_Heading" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Normal Heading...</a></li>
                        <li><a name="fontMenu:alt-font-heading:Alt-Font_Heading" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Alt-Font Heading...</a></li>
                        <li><a name="fontMenu:small-heading:Subheading" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Subheading...</a></li>
                        <li class="divider"></li>
                        <li><a name="fontMenu:name:Name" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Food item Name...</a></li>
                        <li><a name="fontMenu:description:Description" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Food item Description...</a></li>
                        <li><a name="fontMenu:extras:Extras" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Food item Extras...</a></li>
                        <li><a name="fontMenu:price:Price" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Food item Price...</a></li>
                        <li class="divider"></li>
                        <li><a name="fontMenu:floating-text:Floating_Text" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Floating Text...</a></li>
                        <li><a name="fontMenu:alt-float:Alt-Font_Floating_Text" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myChangeFontDialog" data-toggle="modal"><i class="no-menu-icon"></i> Alt-Font Floating Text...</a></li>
                        <li class="divider"></li>
                        <li><a id="menu-shrinkfonts" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Shrink fonts</a></li>
                        <li><a id="menu-growfonts" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Grow fonts</a></li>
                        <li class="divider"></li>
                        <li id="menu-reset-fonts1" class="disabled"><a id="menu-reset-fonts1a" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-reset-fonts-icon" class="icon2-reset icon2-white"></i> Reset fonts to Style defaults</a></li>
                    </ul>
                </li>

                <!-- TOOLS -->
                <li id="drop-tools" class="dropdown" style="pointer-events: all;">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle notranslate" data-toggle="dropdown" data-hover="dropdown">Tools <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="menu-check-spelling"><a id="spellcheck_menu" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Spell Check...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myMakeMenuFitDialog" data-toggle="modal"><i class="no-menu-icon"></i> Make it FIT...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myPageSpacingDialog" data-toggle="modal"><i class="no-menu-icon"></i> Page Spacing...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myClearAllDialog" data-toggle="modal"><i class="no-menu-icon"></i> Clear All...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#mySmartMarkDialog" data-toggle="modal"><i class="no-menu-icon"></i> Smart Mark...</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myAutoBinNumberDialog" data-toggle="modal"><i class="no-menu-icon"></i> Auto Bin/Number...</a></li>
                        <li class="divider"></li>
                        <li id="menu-create-mobile"><a id="mp-create-mobile" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-iphone"></i> Live-Sync Menu...</a></li>
                        <li id="menu-create-giftcert"><a id="mp-create-giftcert" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="mp-giftcert-icon" class="icon-gift"></i> Gift Certificate...</a></li>
                        <li id="menu-create-tabletent"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myTableTentCreator" data-toggle="modal"><i id="mp-tt-icon" class="icon-th-large"></i> Table Tent...</a></li>
                        <li class="not_in_demo disabled" id="menu-create-png"><a id="mp-create-facebook-png" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="not_in_demo_icon no-menu-icon"></i> JPG Menu for Facebook</a></li>
                        <li class="divider"></li>
                        <li class="not_in_demo disabled" id="menu-import-foods"><a id="menu-import-foodsa" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Import Food Items...</a></li>
                        <li class="not_in_demo disabled" id="menu-print-list"><a id="menu-print-lista" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon not_in_demo_icon"></i> Print/Export Food Items...</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myiMenuProSettingsDialog" data-toggle="modal"><i class="icon-cog"></i> iMenuPro Settings...</a></li>
                    </ul>
                </li>

                <!-- HELP -->
                <li class="dropdown">
                    <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="dropdown-toggle notranslate" data-toggle="dropdown" data-hover="dropdown">Help <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://help.onlineMenu.com/" target="_blank"><i class="icon-question-sign"></i> Help Center</a></li>
                        <li class="divider"></li>
                        <li><a onclick="doTour();" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="no-menu-icon"></i> Quick Tour</a></li>
                        <li><a href="http://help.onlineMenu.com/getting-started.htm" target="_blank"><i class="no-menu-icon"></i> Getting Started</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">How to</li>
                        <li><a href="http://help.onlineMenu.com/tips-tricks.htm#page-2" target="_blank"><i class="no-menu-icon"></i> Add a New Page</a></li>
                        <li><a href="http://help.onlineMenu.com/tips-tricks.htm#your-logo" target="_blank"><i class="no-menu-icon"></i> Add your Logo</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Version Info</li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myAboutiMenuProDialog" data-toggle="modal"><i class="no-menu-icon"></i> About iMenuPro</a></li>
                    </ul>
                </li>

                <!-- leaf, style, last log in -->
                <li>
                    <div class="nav-collapse notranslate">
                        <div id="MPstatusBarStyle" style="pointer-events: all;">
                            <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myiMenuProSettingsDialog" data-toggle="modal"><i id="MPCustomize" class="icon-customize" rel="tooltip" title="Style altered - click for settings" style="display: none; opacity: 1; background: url(&quot;bootstrap/img/scott-icons.png&quot;) 0px 0px;"></i></a>
                            <a rel="tooltip" title="Change current menu style or columns" id="MPstatusBarCurrentStyle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myMenuStyleDialog" data-toggle="modal" style="opacity: 1;"> Style: 19 East Main</a>
                            <span class="hide dont_select" id="mp-last-login">100%</span> <!-- X's IE9 bug fix, also must hide at startup for bootstrap bug fix for all browsers -->
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>


<!-- subnav-2 -->
<div id="mp-toolbar" class="subnav-2 navbar navbar-fixed-top dont_scroll">
    <div id="mp-toolbarnav-container" class="container">

        <!-- Toolbar -->
        <div class="dont_select" id="MPToolBarButtonRow">
            <div class="mp-btn-group">
                <!--	<a href="#" id="btn-newmenu" role="button" class="btn btn-flat" data-toggle="modal" rel="tooltipM" data-placement="bottom" title="New Menu"><i class="icon-file"></i></a> -->
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-openmenu" role="button" class="btn btn-flat" data-toggle="modal" rel="tooltipM" data-placement="bottom" title="" data-original-title="Open Menu" style="pointer-events: all;"><i class="icon-folder-open"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-savemenu" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Save Menu" style="pointer-events: all;"><i class="icon-hdd"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-topdf" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Create PDF to Print" style="pointer-events: all;"><i class="icon-print"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-out-zoom" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Zoom Out" style="pointer-events: all;"><i class="icon-out-zoom"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-in-zoom" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Zoom In" style="pointer-events: all;"><i class="icon-in-zoom"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-prev-page" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="" style="pointer-events: all;"><span id="prev-page-num" class="btn-pageno"> </span><i class="icon-prev-page" style="opacity: 0.95;"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-next-page" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="" style="pointer-events: all;"><i class="icon-next-page" style="opacity: 0.95;"></i><span id="next-page-num" class="btn-pageno"> </span></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="" class="btn btn-flat btn-spacer hidden-phone hidden-tablet dont_select" data-original-title="" title="" style="pointer-events: none;">&nbsp;</a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-prev-style" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Previous Menu Style" style="pointer-events: all;"><i class="icon-previous-style"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="btn-next-style" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Next Menu Style" style="pointer-events: all;"><i class="icon-next-style"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myMakeMenuFitDialog" id="button-makefit" role="button" class="btn btn-flat" data-toggle="modal" rel="tooltipM" data-placement="bottom" title="" data-original-title="Make it FIT" style="pointer-events: all;"><i class="icon-fit"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-shrinkspacing" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Shrink Page Spacing" style="pointer-events: all;"><i class="icon-shrink-spacing"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-expandspacing" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Expand Page Spacing" style="pointer-events: all;"><i class="icon-expand-spacing"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-resetspacing" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Reset Page Spacing" style="pointer-events: all;"><i class="icon-reset-spacing"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-shrinkfonts" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Shrink fonts" style="pointer-events: all;"><i class="icon-shrink-fonts"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-growfonts" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Grow fonts" style="pointer-events: all;"><i class="icon-grow-fonts"></i></a>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" id="button-resetfonts" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Reset fonts to Style defaults" style="pointer-events: all;"><i class="icon-reset-fonts"></i></a>
                <a onclick="$(&#39;#button-faqhelp&#39;).tooltip(&#39;hide&#39;);" href="http://help.onlineMenu.com/" id="button-faqhelp" target="_blank" role="button" class="btn btn-flat" rel="tooltipM" data-placement="bottom" title="" data-original-title="Help" style="pointer-events: all;"><i class="icon-question-sign"></i></a>

                <div id="sliderZoom" class="hidden-phone hidden-tablet ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><a class="ui-slider-handle ui-state-default ui-corner-all" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" style="left: 41.6667%;"></a></div>
                <a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1" class="MPStatusBarFont hidden-phone hidden-tablet" id="MPstatusBarView" rel="tooltip" data-placement="bottom" title="Disable/Enable menu text" onclick="toggleEnableText(&#39;#MPstatusBarViewClick&#39; ); return false;">100%</a>
                <i id="mp-repage-spinner" class="icon-repage-spinner hidden-phone"></i>
                <!-- <i id="mp-repage-spinner" class="repage-spinner hidden-phone"></i> --> <!-- 11.0.31 NUY -->
                <i id="mp-load-spinner" class="icon-load-spinner hidden-phone" style="display: none;"></i>
                <!-- <i id="mp-load-spinner" class="ajax-spinner hidden-phone"></i> --> <!-- 11.0.31 NUY -->
            </div> <!--/btn-group -->
        </div> <!-- buttonRow -->
    </div> <!-- /container -->
</div> <!-- /subnav2 -->



<div id="myPriceOptionsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form"> <!-- required to correct margin at bottom of modal -->

        <div class="modal-header">
            <button id="dialog-priceoptions-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-priceoptions-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use &#39;Price Placement&#39; to move the position of your prices. For leader Dots, use &#39;Normal&#39; and set &#39;Use this Leader&#39; to &#39;Dots&#39;.
					Use &#39;Multi-price spacing&#39; to set the spacing between prices for items with more than one price. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Price Options</h3>
            <div class="MPdialogSubHeader">Change the placement and leaders for prices</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanPriceAlignment">
                    <p><b>Price Placement</b></p>
                    <label id="mp-price-normal-text" class="radio"><input id="mp-price-normal" type="radio" name="placement" value="normal" checked="">Normal</label>
                    <label class="radio MPpadTop2px"><input type="radio" name="placement" value="follow_desc">follow Description</label>
                    <label class="radio MPpadTop2px"><input type="radio" name="placement" value="with_desc">with Description</label>
                    <label class="radio MPpadTop2px"><input type="radio" name="placement" value="with_name">with Name</label>
                    <label class="radio MPpadTop2px"><input type="radio" name="placement" value="hidden">do not display</label>
                </div>

                <div class="spanAppearancePriceOptions">
                    <span><b>Appearance</b></span>

                    <div class="row MPpadTop6px">
                        <span class="MPpadTop5px spanCurrencySymText">Currency Symbol:</span>
                        <select name="currency" style="width:78px" class="notranslate">
                            <option value="$" selected="">$</option>
                            <option value="£">£</option>
                            <option value="€">€</option>
                            <option value="¥">¥</option>
                            <option value="₹">₹</option>
                            <option value="฿">฿</option> <!-- 11.0.38 baht -->
                            <option value="₦">₦</option> <!-- 11.0.48 naira -->
                            <option value="¤">¤</option>
                            <option value="none">none</option>
                        </select>
                    </div>

                    <div class="row">
                        <span class="MPpadTop5px spanCurrencySymText">Use this Leader:</span>
                        <select name="leader" style="width:78px" class="notranslate">
                            <option value="." selected="">Dots</option>
                            <option value="–">–</option> <!-- ie warning use &#8211; instead -->
                            <option value="—">—</option>
                            <option value="•">•</option>
                            <option value=":"> : </option>
                            <option value="/">⁄</option>
                            <option value="|"> | </option> <!-- 11.0.36 -->
                            <option value="…">…</option> <!-- ie warning use &#8230; instead -->
                            <option value="none">none</option>
                        </select>
                    </div>

                    <div class="row">
                        <span class="MPpadTop5px spanCurrencySymText">Extra Dot Spacing:</span>
                        <select name="dotspacing" style="width:78px" class="notranslate">
                            <option value="0">none</option>
                            <option value="1">1 dot</option>
                            <option value="2">2 dots</option>
                        </select>
                    </div>

                    <div class="MPpadTop2px">
                        <label class="checkbox"><input id="dialog-priceoptions-spaceitem" type="checkbox" value="">extra space near Item</label>
                    </div>
                    <div class="MPpadTop1px">
                        <label class="checkbox"><input id="dialog-priceoptions-spaceprice" type="checkbox" value="">extra space near Price</label>
                    </div>
                    <div class="MPpadTop1px">
                        <label class="checkbox"><input id="dialog-priceoptions-matchname" type="checkbox" value="">Dots match Name color</label>
                    </div>

                    <div class="row MPpadTop8px">
                        <span class="spanMultiPriceText MPpadTop5px">Multi-price spacing: </span>
                        <input id="dialog-priceoptions-multiprice" autocomplete="off" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" placeholder="0.75&quot;">
                    </div>

                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton">Use Style defaults</button>
            <button id="dialog-priceoptions-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-priceoptions-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myRenameDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-rename-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-rename-help" type="button" class="close helpme" rel="tooltip" data-placement="bottom" title="Rename your current menu."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Rename Menu</h3>
        </div>

        <div class="modal-body">
            <div class="row" style="margin-left:0">
                <span>Enter a new menu name:</span>
            </div>
            <div class="row MPpadTop6px" style="margin-left:0">
                <span><input type="text" class="spanRenameInput" style="margin-left:0" value="" maxlength="50"></span>
            </div>
        </div>

        <div class="modal-footer">
            <button id="dialog-rename-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-rename-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myPageSetup" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-pagesetup-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-pagesetup-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Select your menu orientation (for Carry-out or Tabloid menus select Landscape) and select your &#39;Paper Size&#39;.
						If your desired size is not listed, pick &#39;Custom&#39; and enter the width and height.
						You can also change the margins or use the defaults that come with the Menu Style. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Page Setup</h3>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanPageSetupCol1">
                    <p><b>Orientation</b>
                    </p>
                    <label class="radio MPpadTop6px"><i class="icon-portrait"></i><input name="paperorientation" type="radio" value="0" checked="">Portrait</label>
                    <label class="radio MPpadTop6px"><i class="icon-landscape"></i><input name="paperorientation" type="radio" value="1">Lanscape</label>

                    <div style="padding-top:24px"><b>Paper size</b></div>
                    <div class="MPpadTop5px notranslate">
                        <select id="dialog-page-size" style="width:169px">
                            <option value="US-Letter">Letter (8.5" x 11")</option>
                            <option value="US-Legal">Legal (8.5" x 14")</option>
                            <option value="US-Tabloid">Tabloid (11" x 17")</option>
                            <option value="ansi-c">C-sheet (17" x 22")</option>
                            <option value="US-Statement">Statement (5.5" x 8.5")</option>
                            <option value="A3">A3 (11.69" x 16.54")</option>
                            <option value="A4">A4 (8.27" x 11.69")</option>
                            <option value="A5">A5 (5.83" x 8.27")</option>
                            <option value="B4">B4 (9.84" x 13.90")</option>
                            <option value="B5">B5 (6.93" x 9.84")</option>
                            <option value="Custom">Custom</option>
                        </select>
                    </div>

                    <div class="row">
                        <span class="MPpadTop5px spanPageSetupCustomText muted">Custom width:</span><span><input id="dialog-page-custom_width" type="text" class="spanTextInGeneric " placeholder="5.5&quot;" value="5.5&quot;" disabled=""></span>
                    </div>
                    <div class="row">
                        <span class="MPpadTop5px spanPageSetupCustomText muted">Custom height:</span><span><input id="dialog-page-custom_height" type="text" class="spanTextInGeneric " placeholder="8.5&quot;" value="8.5&quot;" disabled=""></span>
                    </div>
                </div>


                <div class="spanPageSetupCol2">
                    <p><b>Margins</b></p>
                    <div class="row MPpadTop1px">
                        <span class="MPpadTop5px spanPageSetupMarginText ">Top:</span><span><input id="dialog-page-top" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="0.75&quot;"></span>
                    </div>
                    <div class="row">
                        <span class="MPpadTop5px spanPageSetupMarginText ">Bottom:</span><span><input id="dialog-page-bottom" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="1.0&quot;"></span>
                    </div>
                    <div class="row">
                        <span class="MPpadTop5px spanPageSetupMarginText ">Left:</span><span><input id="dialog-page-left" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="1.35&quot;"></span>
                    </div>
                    <div class="row">
                        <span class="MPpadTop5px spanPageSetupMarginText ">Right:</span><span><input id="dialog-page-right" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="1.35&quot;"></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button id="mp-reset-pagesetup-btn" class="btn btn-small ResetToStyleButton notranslate" style="padding-right:11px">Use Style defaults for Margins</button>
            <button id="dialog-page-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-page-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myMenuCoverDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-menucover-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-menucover-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Preview your menu in a cover by selecting a Style and Color, then check &#39;Show on Menu&#39;. To include the cover on your final PDF menu uncheck &#39;Preview only&#39;. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>

            <h3 class="MPdialogTitleFont">Menu Cover</h3>
            <div class="MPdialogSubHeader">View your menu in a cover</div>
        </div>

        <div class="modal-body">

            <div class="row MPpadTop8px">

                <div class="spanCoverCol">
                    <p><b>Cover Style</b></p>
                    <label class="radio MPpadTop6px"><i class="icon-cover-corner"></i><input name="coverstyle" type="radio" value="0" checked="">Cafe color</label>
                    <label class="radio MPpadTop18px"><i class="icon-cover-insert"></i><input name="coverstyle" type="radio" value="1">Classic color</label>
                    <label class="radio MPpadTop18px"><i class="icon-cover-gold"></i><input name="coverstyle" type="radio" value="2">Gold only</label>
                    <label class="radio MPpadTop18px"><i class="icon-cover-metal"></i><input name="coverstyle" type="radio" value="3">Metal only</label>
                </div>

                <div class="spanCoverCo2">
                    <div class="spanCoverColor" style="margin-left:0;padding-top:32px">
                        Color: <input id="dialog-menucover-color" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);"></div></div><div class="sp-dd">▼</div></div>
                        <label class="checkbox" style="padding-top:23px"><input id="cover-preview-only" type="checkbox">Preview only</label>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <span class="ShowOnMenuCheckBox">
                <label class="checkbox clearfix" style="float:left;"><input id="dialog-menucover-onmenu" type="checkbox">Show on Menu</label>
            </span>
            <button id="dialog-menucover-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-menucover-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#b80000" data-color="rgb(184, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(184, 0, 0);"></span></span><span title="#00004c" data-color="rgb(0, 0, 76)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 76);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#005300" data-color="rgb(0, 83, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 83, 0);"></span></span><span title="#6b0030" data-color="rgb(107, 0, 48)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(107, 0, 48);"></span></span><span title="#420000" data-color="rgb(66, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(66, 0, 0);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#1e6fdb" data-color="rgb(30, 111, 219)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(30, 111, 219);"></span></span><span title="#eeae52" data-color="rgb(238, 174, 82)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(238, 174, 82);"></span></span><span title="#e0c0c1" data-color="rgb(224, 192, 193)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(224, 192, 193);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myPrintFoodItems" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-printfooditems-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-printfooditems-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Select an option, then click either the Print button, to print your Food Items to a PDF file formatted as a list, or the Export button, to export your Food Items to a CSV text file."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Print/Export Food Items</h3>
            <div class="MPdialogSubHeader">Print or Export your Food Items</div>
        </div>

        <div class="modal-body">

            <div class="row MPpadTop8px">

                <div class="spanpficonfigCol well" style="padding:10px; margin-bottom:11px">
                    <p><b>Options</b></p>
                    <label class="radio MPpadTop6px"><i class="icon-pfl-name"></i><input name="fipstyle" type="radio" value="0">Names only</label>
                    <p><em><small>Prints/Exports food item names only.</small></em></p>
                    <label class="radio MPpadTop13px"><i class="icon-pfl-nametext"></i><input name="fipstyle" type="radio" value="1">Names + text</label>
                    <p><em><small>Prints/Exports food item names, plus their descriptions, prices, and extras.</small></em></p>
                    <label class="radio MPpadTop13px"><i class="icon-pfl-all"></i><input name="fipstyle" type="radio" value="2" checked="">Names + text + notes</label>
                    <p><em><small>Prints/Exports food item names, their descriptions, prices, extras, and their notes.</small></em></p>
                </div>

                <div class="spanpfiprintbtn notranslate">
                    <a id="mp-print-foodlist-btn" role="button" class="btn tipoff not_in_demo disabled" rel="tooltipM" data-placement="bottom" title="" data-original-title="Print Food List to PDF"><i class="icon-print"></i><small>Print</small></a>
                    <div class="MPpadTop16px">
                        <a id="mp-export-foodlist-btn" role="button" class="btn tipoff not_in_demo disabled" rel="tooltipM" data-placement="bottom" title="" data-original-title="Export Food List to TXT"><i class="icon-download"></i><small>Export</small></a>
                    </div>
                </div>

            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-printfooditems-done" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>

    </form>
</div>

<div id="myTableTentCreator" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-tabletent-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-tabletent-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Select a Table Tent Format, then click the Print button to print your Table Tents to a PDF file."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Table Tent</h3>
            <div class="MPdialogSubHeader">Create instant Table Tents from any menu page</div>
        </div>

        <div class="modal-body">

            <div class="row MPpadTop8px">

                <div class="spanpficonfigCol well" style="padding:10px; margin-bottom:11px">
                    <p><b>Table Tent Format</b></p>
                    <label class="radio MPpadTop6px"><i class="icon-4up"></i><input name="ttstyle" type="radio" value="4" checked="">4-UP</label>
                    <p><em><small>Makes a 4-UP (4 to the page) table tent on your current menu paper size.</small></em></p>
                    <label class="radio MPpadTop13px"><i class="icon-2up"></i><input name="ttstyle" type="radio" value="2">2-UP</label>
                    <p><em><small>Makes a 2-UP (2 to the page) table tent on paper that's twice as wide (or tall) as your current size, to fit them side by side.</small></em></p>
                </div>

                <div class="spanpfiprintbtn">
                    <a id="menu-create-tt" role="button" class="btn tipoff not_in_demo notranslate disabled" rel="tooltipM" data-placement="bottom" title="" data-original-title="Print Table Tent to PDF"><i class="icon-print"></i><small>Print</small></a>
                </div>

            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-tabletent-done" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>

    </form>
</div>



<div id="myGridOptionsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-grid-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-grid-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Check &#39;Show on Menu&#39; to overlay an alignment grid on your menu. Uncheck &#39;Show on Menu&#39; to remove it.
				 			Use Paper Folds to view fold-scores for Carry-Out menus."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Grid</h3>
            <div class="MPdialogSubHeader">Overlay an alignment grid on your menu</div>
        </div>

        <div class="modal-body" style="padding-bottom:35px">

            <div class="row">

                <div class="spanGridCol1">
                    <div><b>Units</b></div>
                    <div class="row MPpadTop6px">
                        <span class="MPpadTop5px spanUnitsText">X:</span><span><input id="dialog-grid-xval" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="0.25&quot;"></span>
                    </div>
                    <div class="row">
                        <span class="MPpadTop5px spanUnitsText">Y:</span><span><input id="dialog-grid-yval" type="text" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="0.25&quot;"></span>
                    </div>

                    <div class="spanGridColor" style="margin-left:0">
                        Color:&nbsp;<input id="dialog-grid-color" value="#d7d7d7" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(215, 215, 215);"></div></div><div class="sp-dd">▼</div></div>
                    </div>

                </div>

                <div class="spanGridCol2">
                    <div><b>Paper Folds</b></div>
                    <label class="radio MPpadTop10px"><input name="foldstyle" type="radio" value="0" checked="">None</label>
                    <label class="radio MPpadTop2px"><input name="foldstyle" type="radio" value="1">Single</label>
                    <label class="radio MPpadTop2px"><input name="foldstyle" type="radio" value="2">Tri-Fold</label>
                    <label class="radio MPpadTop2px"><input name="foldstyle" type="radio" value="3">Gate-Fold</label>
                </div>

            </div>


        </div>

        <div class="modal-footer">
            <span class="ShowOnMenuCheckBox">
                <label class="checkbox clearfix" style="float:left;"><input id="dialog-grid-onmenu" type="checkbox">Show on Menu</label>
            </span>
            <button id="dialog-grid-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-grid-cancel" class="btn  " data-dismiss="modal">Cancel</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d7d7d7" data-color="rgb(215, 215, 215)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(215, 215, 215);"></span></span><span title="#7f7f7f" data-color="rgb(127, 127, 127)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(127, 127, 127);"></span></span><span title="#030303" data-color="rgb(3, 3, 3)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(3, 3, 3);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#00f50f" data-color="rgb(0, 245, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 245, 15);"></span></span><span title="#ffb21c" data-color="rgb(255, 178, 28)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 178, 28);"></span></span><span title="#ffffff" data-color="rgb(255, 255, 255)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 255, 255);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(215, 215, 215, 0), rgb(215, 215, 215));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d7d7d7" data-color="rgb(215, 215, 215)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(215, 215, 215);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myColumnLayoutOptionsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-columnlayout-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-columnlayout-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Fine tune the layout of your current menu style. Use Line Spacing to shrink or expand spacing within foods and headings. (For spacing between items use the toolbar Page Spacing buttons). Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Layout Options</h3>
            <div class="MPdialogSubHeader">Adjust the Menu Style layout</div>
        </div>

        <div class="modal-body">

            <div class="row" style="padding-top:0">
                <span class="spanColLayDescOptsText"><b>Column Tweaks</b></span>
            </div>

            <div class="row">
                <span class="MPpadTop5px spanColLaySpaceBetweenText" style="margin-bottom:1px">Space between columns:</span>
                <span><input id="space-between-columns" name="space-between-columns" style="margin-bottom:2px" type="text" autocomplete="off" class="spanTextInGeneric2" onkeydown="return ignoreEnter(event);" value="0.4&quot;"></span>
            </div>

            <div class="row MPpadTop6px">
                <span class="MPpadTop1px spanColBalText">Uneven column width:</span>
                <div id="width-balance" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><a class="ui-slider-handle ui-state-default ui-corner-all" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" style="left: 50%;"></a></div>
                <i id="col1width-icon" class="icon-col1-100" style="opacity: 0.4;">
                    <a id="width-balance-val" class="" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" data-placement="bottom" title="Reset column widths" style="color: rgb(68, 68, 68);">off</a>
                </i>
            </div>

            <div class="row MPpadTop5px">
                <label class="checkbox spanColLayLineBetweenText MPpadTop1px"><input id="line-between-columns" name="line-between-columns" type="checkbox">Line between columns</label>
            </div>

            <div class="row" style="padding-left:21px">
                <div class="row MPpadTop3px" style="margin-left:0">
                    <span class="MPpadTop5px spanColLayThicknessText ColLineText muted" style="margin-left:0;padding-left:20px">Thickness:</span>
                    <span class="spanColLayThicknessSpacer" style="margin-left:0px;">
						<select name="stroke-width" style="width:54px" disabled="">
						<option value="1">1</option>
				  		<option value="2" selected="">2</option>
				  		<option value="3">3</option>
				  		<option value="4">4</option>
				  		<option value="5">5</option>
				  		<option value="6">6</option>
				  		<option value="7">7</option>
				  		<option value="8">8</option>
				  		<option value="9">9</option>
				  		<option value="10">10</option>
						<option value="11">11</option>
				  		<option value="12">12</option>
				  		<option value="13">13</option>
				  		<option value="14">14</option>
				  		<option value="15">15</option>
				  		<option value="16">16</option>
						</select>
					</span>

                    <div>
                        <span class="MPpadTop5px spanColLayTypeText ColLineText muted" style="margin-left:0">Line Type:</span>
                        <select name="line-type" style="width:53px" disabled="">
                            <option value="single" selected="">|</option>
                            <option value="double">||</option>
                            <option value="dashed">¦</option>
                            <option value="arrowend">↕</option> ⇾
                            <option value="colbox">⊡</option>
                        </select>

                    </div>

                </div>


                <div class="row" style="padding-left:21px">
                    <div>
                        <label class="checkbox spanShorterLine ColLineText muted"><input id="shorter-line" name="shorter-line" type="checkbox" disabled="">Use shorter line</label>
                    </div>
                    <div>
                        <div>
                            <span class="spanCollinColorText ColLineText notranslate muted" style="margin-left:0px">Line Color:</span>
                        </div>
                        <div style="margin-left:0">
                            <input id="dialog-colline-color" value="#000000" style="display: none;" disabled="disabled"><div class="sp-replacer sp-light sp-disabled"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(99, 99, 99);"></div></div><div class="sp-dd">▼</div></div>
                        </div>
                    </div>
                </div>


            </div>

            <hr style="margin: 12px 0 8px -19px">

            <div class="row MPpadTop3px">
                <span class="spanColLayDescOptsText"><b>Description / Extras Tweaks</b></span>
            </div>


            <div class="row MPpadTop10px">
                <span class="MPpadTop5px spanColLayLIndentText">Left indent:</span>
                <span class="spanColLayTextGL">
				    <input id="desc-left-indent" name="desc-left-indent" type="text" autocomplete="off" class="spanTextIndent" onkeydown="return ignoreEnter(event);" value="0.0&quot;">
					</span>
                <span class="MPpadTop5px spanColLayRIndentText">Right indent:</span>
                <span class="spanColLayTextGR">
				    <input id="desc-right-indent" name="desc-right-indent" type="text" autocomplete="off" class="spanTextIndent" onkeydown="return ignoreEnter(event);" value="0.35&quot;">
					</span>
            </div>


            <div class="row">
                <span class="MPpadTop4px spanColLayLIndentText">Main bullet:</span>
                <span class="spanColLayTextGL notranslate">
                        <select name="desc-separator" style="width:80px">
                          <option value="~" selected=""> ~ </option>
                          <option value="-"> - </option>
                          <option value="–"> – </option> <!-- ie warning use &#8211; instead -->
                          <option value="—"> — </option>
                          <option value=":"> : </option>
                          <option value="&gt;"> &gt; </option>
                          <option value="»"> » </option>
                          <option value="•"> • </option>
			  				 <option value="+"> + </option>
			  				 <option value="*"> * </option>
			  				 <option value="/"> / </option>
			  				 <option value="|"> | </option>
                          <option value="…"> … </option>
                          <option value="none"> none </option>
                          <option value="notext">no text</option> <!-- 11.0.37 -->
                        </select>
                     </span>
                <span class="MPpadTop4px spanColLayRIndentText">Extras bullet:</span>
                <span class="spanColLayTextGR notranslate">
                        <select name="extras-separator" style="width:80px">
                          <option value="~" selected=""> ~ </option>
                          <option value="-"> - </option>
                          <option value="–"> – </option> <!-- ie warning use &#8211; instead -->
                          <option value="—"> — </option>
                          <option value=":"> : </option>
                          <option value="&gt;"> &gt; </option>
                          <option value="»"> » </option>
                          <option value="•"> • </option>
			  				 <option value="+"> + </option>
			  				 <option value="*"> * </option>
			  				 <option value="/"> / </option>
			  				 <option value="|"> | </option>
                          <option value="…"> … </option>
                          <option value="none"> none </option>
                          <option value="notext">no text</option> <!-- 11.0.37 -->
                        </select>
                    </span>
            </div>

            <hr style="margin: 11px 0 8px -19px">

            <div class="row MPpadTop3px linespacingfix">
                <span class="MPpadTop5px spanColLayLineText"><b>Line Spacing</b>&nbsp;&nbsp;(within menu text):</span>
                <select name="line-spacing" style="width:70px;margin-bottom:5px">
                    <option value="0.85">0.85</option>
                    <option value="0.95">0.95</option>
                    <option value="1" selected="">1.0</option> <!-- whole nums only -->
                    <option value="1.15">1.15</option>
                    <option value="1.3">1.3</option>
                    <option value="1.5">1.5</option>
                    <option value="2">2.0</option> <!-- whole nums only -->
                </select>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton notranslate">Use Style defaults</button>
            <button id="dialog-columnlayout-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-columnlayout-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="#636363" data-color="rgb(99, 99, 99)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(99, 99, 99);"></span></span></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(99, 99, 99, 0), rgb(99, 99, 99));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#636363" data-color="rgb(99, 99, 99)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(99, 99, 99);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myMakeMenuFitDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-fit-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-fit-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="iMenuPro adjusts font sizes and page spacing to make your menu fit to a single page.
      		If you have Headings set to &#39;New page or Column&#39;, during FIT those tweaks will be removed."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Make it FIT</h3>
            <div class="MPdialogSubHeader">Make your menu fit onto a single page</div>
        </div>

        <div class="modal-body">

            <div class="row" style="padding-top:1px">
                <span class="spanFitUndoText text-info"><em><small>iMenuPro will make font size and page spacing adjustments to fit your menu to 1 page.</small></em></span>
            </div>

            <div>
                <img class="fit-1-img" src="./iMenuPro_files/FIT-1pg.png">
                <span class="fit-or"><strong><em>OR</em></strong></span>
                <img class="fit-2-img" src="./iMenuPro_files/FIT-2pg.png">
            </div>

            <div class="row" style="padding-top:13px">
                <span class="spanFitUndoText text-info"><em><small>When Make it FIT has finished, you can select Undo FIT from the Edit menu to undo the fitting.</small></em></span>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-fit-ok" class="btn btn-primary ">FIT Now</button>
            <button id="dialog-fit-cancel" class="btn " data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>

<div id="myChalkboardDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-chalk-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-chalk-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="iMenuPro changes the design elements of your menu so it&#39;s appearance resembles a chalkboard."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Chalkboard</h3>
            <div class="MPdialogSubHeader">Transform your design into a faux chalkboard</div>
        </div>

        <div class="modal-body">

            <div class="row" style="padding-top:1px">
                <span class="spanChalkUndoText text-info"><em><small>iMenPro will change design element colors of your menu to simulate a chalkboard.</small></em></span>
            </div>

            <div>
                <img class="chalk-1-img" src="./iMenuPro_files/chalk.png">
            </div>

            <div class="row" style="padding-top:13px">
                <span class="spanChalkUndoText text-info"><em><small>When Chalkboard has finished, you can select Undo Chalkboard from the Edit menu to undo the chalkboarding.</small></em></span>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-chalk-ok" class="btn btn-primary">Chalkboard It</button>
            <button id="dialog-chalk-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myiMenuProSettingsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-settings-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-settings-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use these settings to fine tune how iMenuPro works."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">iMenuPro Settings — set your preferences</h3>
            <!-- <div class="MPdialogSubHeader">Set your user preferences</div> -->
        </div>

        <div class="modal-body">

            <div class="row MPpadTop3px">
                <div class="MPpadTop4px spanSpacingAdjusterText">Page Spacing adjustment per click:</div>
                <select id="dialog-setting-pagespacing_adjustment" style="width:80px" class="notranslate">
                    <option value="0.01">0.01"</option>
                    <option value="0.03" selected="">0.03"</option>
                    <option value="0.07">0.07"</option>
                </select>
            </div>

            <div class="row MPpadTop3px">
                <div class="MPpadTop4px spanSpacingAdjusterText">Display measurements and units in:</div>
                <select id="dialog-setting-unitSI" style="width:80px" class="notranslate">
                    <option value="in" selected="">inches</option>
                    <option value="mm">mm</option>
                    <option value="cm">cm</option>
                </select>
            </div>

            <div class="row MPpadTop5px" style="margin-left:0">
                <span id="autoSavetext1" class="muted">Auto-save menus every:</span>
                <span id="autoSavetext2" class="muted"><input id="mp-autosave-time" style="margin-bottom:2px;width:26px" type="text" maxlength="3" onkeydown="return ignoreEnter(event);" value="10" disabled=""> minutes</span>
            </div>

            <div>
                <hr style="margin: 14px 0 7px 0">
            </div>

            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox "><input id="dialog-setting-smart" type="checkbox" value="" checked="checked">Use Smart Mark</label>
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox "><input id="dialog-setting-findall" type="checkbox" value="" checked="checked">Include Description and Extras during Find</label>
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox "><input id="dialog-setting-findnotes" type="checkbox" value="" checked="checked">Include Notes during Find</label>
            </div>
            <div class="row MPpadTop5px">
                <!-- <label class="checkbox spanSettingsCheckbox"><input id="dialog-setting-PDFHiRes" type="checkbox" value="">Use Hi-Res Backgrounds on PDF</label> -->
                <label class="checkbox spanSettingsCheckbox"><input id="dialog-setting-PDFHiRes" type="checkbox" value="" checked="checked">Use Higher Quality images on PDF</label>
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox"><input id="dialog-setting-PDFCrop" type="checkbox" value="">Add Crop Marks/Bleeds to PDF Menus</label>
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox"><input id="dialog-setting-PDFDupe" type="checkbox" value="">Dupe PDF Menu Pages</label>
            </div>
            <div class="row MPpadTop5px"> <!-- 11.0.45 -->
                <label class="checkbox spanSettingsCheckbox "><input id="dialog-setting-codes" type="checkbox" value="">Convert Bold Bite tags [<a href="http://help.onlineMenu.com/tools-settings.htm#fcodes" target="_blank" class="tipoff" title="see the tags"><b>?</b></a>]</label>
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanSettingsCheckbox"><input id="dialog-setting-mobileshowtime" type="checkbox" value="">Add Sync date to Live-Sync Menus</label>
            </div>

            <div>
                <hr style="margin: 14px 0 7px 0">
            </div>
            <div class="row MPpadTop5px">
                <label class="checkbox spanKeepCustomStyle"><input id="dialog-menustyle-keepon" type="checkbox" value="">Keep design changes <i class="icon-customize" style="background: url(&quot;bootstrap/img/scott-icons.png&quot;) 0px 0px;"></i> when switching Styles</label>
            </div>
        </div>

        <div class="modal-footer">
            <button id="dialog-setting-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-setting-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myAccountSettingsDialog" class="modal hide mp-modal-square ui-draggable" tabindex="-1" role="dialog">
    <form id="account-form" class="modal-form">

        <div class="modal-header">
            <button id="dialog-account-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-account-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Click to learn more about Account Settings"><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Account Settings</h3>
        </div>

        <div class="modal-body">

            <div class="control-group">
                <p>Account created on: <span><code id="mp-acct-created">Unavailable</code></span></p>
                <p>Next auto-renew date: <span><code id="mp-acct-renew">Unavailable</code></span></p>
                <p>Card type: <span><code id="mp-card-type">Unavailable</code></span><span>&nbsp;&nbsp;Last 4 digits:</span> <span><code id="mp-card-last4">XXXX</code></span></p>
                <p>Email: <span><code id="mp-acct-email">Unavailable</code></span></p>
            </div>


            <div class="accordion MPpadTop6px" id="accordianAccount" style="margin-right:20px;margin-bottom:2px">

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapseEmail&#39;).show();
						$(&#39;#collapsePassword&#39;).hide();
						$(&#39;#collapseCloseAccount&#39;).hide();
						return false;">Change Email</a>
                    </div>
                    <div id="collapseEmail" class="accordion-body hide">
                        <div class="accordion-inner">
                            <label class="control-label" for="password">New Email Address</label>
                            <div class="controls">
                                <!-- <input type="text" id="email-address" name="email-address" spellcheck="false" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="64" onkeydown="return ignoreEnter(event);" required> -->
                                <input type="email" id="email-address" name="email-address" spellcheck="false" maxlength="64" onkeydown="return ignoreEnter(event);" required="">
                            </div>
                            <label class="control-label" for="password">Current Password</label>
                            <div class="controls">
                                <input type="password" id="password-foremail" name="password-foremail" maxlength="100" onkeydown="return ignoreEnter(event);">
                            </div>
                            <button id="change_email" class="btn btn-primary" onclick="return false;">Change Email</button>
                            <button class="btn" onclick="$(&#39;#collapseEmail&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapseEmail&#39;).hide();
						$(&#39;#collapsePassword&#39;).show();
						$(&#39;#collapseCloseAccount&#39;).hide();
					return false;">Change Password</a>
                    </div>
                    <div id="collapsePassword" class="accordion-body hide">
                        <div class="accordion-inner">
                            <label class="control-label" for="password">Current Password</label>
                            <div class="controls">
                                <input type="password" id="oldpassword" name="oldpassword" maxlength="100" onkeydown="return ignoreEnter(event);">
                            </div>
                            <label class="control-label" for="password">New Password</label>
                            <div class="controls">
                                <input type="password" id="newpassword" name="newpassword" maxlength="100" onkeydown="return ignoreEnter(event);">
                            </div>
                            <button id="change_password" class="btn btn-primary" onclick="return false;">Change Password</button>
                            <button class="btn" onclick="$(&#39;#collapsePassword&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a id="customButton" class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapseEmail&#39;).hide();
						$(&#39;#collapsePassword&#39;).hide();
						$(&#39;#collapseCloseAccount&#39;).hide();
					return false;"><i class="icon-change-cc"></i> Change/Update Credit Card</a>
                    </div>
                    <div id="collapseThree" class="accordion-body hide">
                        <div class="accordion-inner">
                        </div>
                    </div>
                </div>


                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapseEmail&#39;).hide();
						$(&#39;#collapsePassword&#39;).hide();
						$(&#39;#collapseCloseAccount&#39;).show();
					return false;">Cancel and Close Account</a>
                    </div>
                    <div id="collapseCloseAccount" class="accordion-body hide">
                        <div class="accordion-inner">
                            <div class="row MPpadTop1px" style="margin-left:0">
                                <div class="text-info" style="padding-bottom:2px">
                                    <h4 style="margin-top:0">Close Your Account</h4>
                                    <span class="badge badge-important">!</span>
                                    <em>By closing your account, your subscription will cancelled immediately and you will lose access to your menus. Your content (food items/menus) will eventually be removed from our servers.
                                        This action is irreversible.</em>

                                    <label class="control-label MPpadTop8px" for="password">Enter Password to Confirm</label>
                                    <div class="controls">
                                        <input type="password" id="closepassword" name="closepassword" maxlength="100" onkeydown="return ignoreEnter(event);">
                                    </div>
                                </div>
                            </div>
                            <button id="close-account" class="btn btn-danger" onclick="return false;">Close Account</button>
                            <button class="btn" onclick="$(&#39;#collapseCloseAccount&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<div id="myAddOnsDialog" class="modal hide mp-modal-square ui-draggable" tabindex="-1" role="dialog">
    <form id="addons-form" class="modal-form">

        <div class="modal-header">
            <button id="dialog-addons-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogTitleFont"><i style="margin-top: 2px" class="icon-download-alt"></i> ADD-ONS</h3>
            <div id="addonsSubH" class="MPdialogSubHeader" style="pointer-events:all">Add these In-App purchases to iMenuPro for a <a href="http://help.onlineMenu.com/account-faq.htm#add-ons" target="_blank">one-time, flat fee</a></div>
        </div>

        <div class="modal-body">

            <div class="accordion MPpadTop3px" id="accordion-addon" style="margin-right:20px;margin-bottom:5px">

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a id="expandcufonts" class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
					$(&#39;#collapsecufonts&#39;).show();
					$(&#39;#collapsePac1&#39;).hide();
					$(&#39;#collapsettcreator&#39;).hide();
					$(&#39;#collapsegccreator&#39;).hide();
					$(&#39;#collapse1yearpass&#39;).hide();
					return false;">
                            <i class="icon-font"></i> Custom Font Uploader</a>

                    </div>
                    <div id="collapsecufonts" class="accordion-body">
                        <div class="accordion-inner">
                            <blockquote class="MPpadTop5px">
                                <p class="text-info" style="font-size:16px;font-weight:700">Custom Font Uploader</p>
                                <small>Upload and use your own TTF fonts on any menu</small>
                            </blockquote>

                            <p>
                                <a href="https://onlineMenu.com/gallery#customfonts" target="_blank">
                                    <img class="img-polaroid pull-right" title="samples here" alt="samples here" src="./iMenuPro_files/cufonts-sample.jpg" style="margin-bottom:20px; margin-left:10px">
                                </a>Keep your menu designs consistent and on-brand by uploading your own custom fonts. Up to 30 TTF, OTF, or WOFF fonts can be uploaded and stored for use with any menu style.<span>
							<a href="https://onlineMenu.com/gallery#customfonts" target="_blank">samples here</a></span>
                            </p>

                            <p id="cufonts-purchased"><code>Available</code></p>
                            <button id="buy-cufonts" class="btn btn-success notranslate" onclick="return false;">$12.95</button>
                            <button class="btn notranslate" onclick="$(&#39;#collapsecufonts&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>


                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
					$(&#39;#collapsecufonts&#39;).hide();
					$(&#39;#collapsePac1&#39;).show();
					$(&#39;#collapsettcreator&#39;).hide();
					$(&#39;#collapsegccreator&#39;).hide();
					$(&#39;#collapse1yearpass&#39;).hide();
					return false;">
                            <i class="icon-book"></i> Style Pac #1 Classics</a>

                    </div>
                    <div id="collapsePac1" class="accordion-body">
                        <div class="accordion-inner">
                            <blockquote class="MPpadTop5px">
                                <p class="text-info" style="font-size:16px;font-weight:700">Style Pac #1 - MenuPro Classics</p>
                                <small>35 Gold Standard Designs from MenuPro</small>
                            </blockquote>

                            <p>
                                <a href="https://onlineMenu.com/gallery#stylepac1" target="_blank">
                                    <img class="img-polaroid pull-right" title="samples here" alt="samples here" src="./iMenuPro_files/pac1-sample.jpg" style="margin-bottom:20px; margin-left:10px">
                                </a>35 beautiful designs from the original MenuPro, with unique art not featured in the standard set. Great for specials, wine lists, and more, these styles add flexibility to your design arsenal.<span>
							<a href="https://onlineMenu.com/gallery#stylepac1" target="_blank">samples here</a></span>
                            </p>

                            <p id="stylepac1-purchased"><code>Available</code></p>
                            <button id="buy-pac1" class="btn btn-success notranslate" onclick="return false;">$24.95</button>
                            <button class="btn notranslate" onclick="$(&#39;#collapsePac1&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>


                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapsecufonts&#39;).hide();
						$(&#39;#collapsePac1&#39;).hide();
						$(&#39;#collapsettcreator&#39;).show();
						$(&#39;#collapsegccreator&#39;).hide();
						$(&#39;#collapse1yearpass&#39;).hide();
						return false;">
                            <i class="icon-th-large"></i> Table Tent Creator</a>
                    </div>
                    <div id="collapsettcreator" class="accordion-body hide">
                        <div class="accordion-inner">
                            <blockquote class="MPpadTop5px">
                                <p class="text-info" style="font-size:16px;font-weight:700">Table Tent Creator Tool</p>
                                <small>Create instant 4-UP or 2-UP Table Tents</small>
                            </blockquote>

                            <p>
                                <a href="https://onlineMenu.com/gallery#tt-creator" target="_blank">
                                    <img class="img-polaroid pull-right" title="samples here" alt="samples here" src="./iMenuPro_files/tt-creator-sample.jpg" style="margin-bottom:20px; margin-left:10px">
                                </a>Turn any menu into an instant 4-UP or 2-UP table tent. No reformatting required. Place folded tents on your tables for specials, drinks, and more.<span>
							<a href="https://onlineMenu.com/gallery#tt-creator" target="_blank">samples here</a></span>
                            </p>

                            <p id="ttcreator-purchased"><code>Available</code></p>
                            <button id="buy-ttcreator" class="btn btn-success notranslate" onclick="return false;">$9.95</button>
                            <button class="btn notranslate" onclick="$(&#39;#collapsettcreator&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>

                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapsecufonts&#39;).hide();
						$(&#39;#collapsePac1&#39;).hide();
						$(&#39;#collapsettcreator&#39;).hide();
						$(&#39;#collapsegccreator&#39;).show();
						$(&#39;#collapse1yearpass&#39;).hide();
						return false;">
                            <i class="icon-gift"></i> Gift Certificate Creator</a>
                    </div>
                    <div id="collapsegccreator" class="accordion-body hide">
                        <div class="accordion-inner">
                            <blockquote class="MPpadTop5px">
                                <p class="text-info" style="font-size:16px;font-weight:700">Gift Certificate Creator Tool</p>
                                <small>Create Gift Certificates and Coupons for your Business</small>
                            </blockquote>

                            <p>
                                <a href="https://onlineMenu.com/gallery#gc-creator" target="_blank">
                                    <img class="img-polaroid pull-right" title="samples here" alt="samples here" src="./iMenuPro_files/gc-creator-sample.jpg" style="margin-bottom:20px; margin-left:10px">
                                </a>Use gift certificates and coupons to boost sales, reward loyal customers, and increase foot traffic at your business. Choose from 40+ designs, add your logo.<span>
							<a href="https://onlineMenu.com/gallery#gc-creator" target="_blank">samples here</a></span>
                            </p>

                            <p id="gccreator-purchased"><code>Available</code></p>
                            <button id="buy-gccreator" class="btn btn-success notranslate" onclick="return false;">$9.95</button>
                            <button class="btn notranslate" onclick="$(&#39;#collapsegccreator&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>



                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="
						$(&#39;#collapsecufonts&#39;).hide();
						$(&#39;#collapsePac1&#39;).hide();
						$(&#39;#collapsettcreator&#39;).hide();
						$(&#39;#collapsegccreator&#39;).hide();
						$(&#39;#collapse1yearpass&#39;).show();
						return false;">
                            <i class="icon-tags"></i> 1-Year Prepay Coupon</a>
                    </div>
                    <div id="collapse1yearpass" class="accordion-body hide">
                        <div class="accordion-inner">
                            <blockquote class="MPpadTop5px">
                                <p class="text-info" style="font-size:16px;font-weight:700">1 Year Prepay</p>
                                <small>Discounted 1 Year Coupon</small>
                            </blockquote>

                            <p>
                                <img class="img-polaroid pull-right" title="Join the 1-year Club!" alt="Join the 1-year Club!" src="./iMenuPro_files/1yearpass-sample.png" style="margin-bottom:20px; margin-left:10px">
                                Prepay $135 now and for the next 12 months you won't be charged again. Save $45 off the regular subscription rate.</p>

                            <p id="1yearpass-purchased"><code>Available</code></p>
                            <button id="buy-1yearpass" class="btn btn-success notranslate" onclick="return false;">$135</button>
                            <button class="btn notranslate" onclick="$(&#39;#collapse1yearpass&#39;).hide();return false;">Cancel</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </form>
</div>



<div id="myAboutiMenuProDialog" class="modal hide mp-modal-square fade ui-draggable" tabindex="-1" role="dialog">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-about-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogTitleFont">About iMenuPro</h3>
        </div>
        <div class="modal-body">
            <blockquote class="MPpadTop5px" style="margin-bottom:10px">
                <p style="font-size:14px">"These go to 11<a id="x-mode" target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/Nigel_Tufnel">.</a>"</p>
                <small>Nigel Tufnel</small>
            </blockquote>
            <div class="row">
                <img style="padding-left:18px" src="./iMenuPro_files/iMenuPro-Logo.gif">
            </div>
            <div class="row MPpadTop2px" style="margin-left:0">
                <small>
                    <span id="mp-version-num" class="text-info">Version: 11</span>
                    <a rel="tooltip" title="toggle beta version" id="mp-beta" class="dont_beta_me disabled" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" style="display: none;">β</a>
                    <span class="text-info">&nbsp;iu: </span><span class="text-info" id="mp-acct-images">na</span>
                    <span class="text-info">&nbsp;cf: </span><span class="text-info" id="mp-acct-cufonts">na</span>
                    <span class="text-info">&nbsp;mi: </span><span class="text-info" id="mp-cmenu-id">na</span>
                    <a rel="tooltip" title="refresh" id="mp-refresh" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-refresh disabled" style="display: none;"></i></a>
                    <a rel="tooltip" title="refresh to" id="mp-refresh-to" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-refreshto disabled" style="display: none;"></i></a>
                    <a rel="tooltip" title="refresh list" id="mp-refresh-fi" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-refreshfi disabled" style="display: none;"></i></a>
                </small>
            </div>
            <div class="row" style="margin-left:0;margin-bottom:10px">
                <small>
                    <span class="text-info">sessionx: </span><span class="text-info" id="mp-session-expiry">na</span>
                    <span id="mp-copyright" class="text-info"><br>© 2016 SoftCafe, LLC</span>
                    <div style="padding-bottom:4px">
                        <small>Patent pending&nbsp;
                        </small>
                    </div>
                </small>
            </div>
        </div>
    </form>
</div>


<div id="WelcomeToiMenuPro" class="modal hide mp-modal-square fade ui-draggable" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" style="display: none;">
    <form class="modal-form">

        <div class="modal-body">
            <button id="dialog-welcome-x" type="button" class="close" data-dismiss="modal">×</button>

            <div>
                <img class="tour-img" src="./iMenuPro_files/tour-menus.png">
            </div>

            <h3 class="MPTourTitleFont text-center">Welcome to iMenuPro!</h3>
            <div class="MPTourSubHeader text-center">Now you can create and update your menus, whenever you want, even at the last minute.</div>


            <button id="dialog-welcome-ok" class="tour-button btn btn-primary "> Take the Tour </button>
            <button id="dialog-welcome-cancel" class="tour-button btn tour-skip-btn" data-dismiss="modal"> Skip </button>

        </div>

    </form>
</div>





<div id="myLoadingMenu" class="modal hide mp-modal-square ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-body notranslate">
            <div id="mp-loading-text" class="text-center" style="margin-bottom:34px;margin-top:2px">Loading your last edited menu</div>
            <!-- <div id="mp-loading-text" class="text-center" style="margin-bottom:24px;margin-top:2px">Loading your menu</div> --> <!-- 11.0.31 NUY -->
            <div class="text-center" style="color:#fff;margin-bottom:13px">.<i id="mp-repage-spinner2" class="icon-repage-spinner">.</i></div>
            <!-- <div class="text-center" style="color:#fff;margin-bottom:6px"><i id="mp-repage-spinner2" class="loading-spinner"></i></div> --> <!-- 11.0.31 NUY -->
            <div class="text-center" style="margin-bottom:5px"> Please wait...</div>
        </div>
        <div class="modal-footer notranslate">
            <div id="loading-status" class="pull-right"></div>
        </div>
    </form>
</div>

<div id="mySymbolOptionsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="mp-dialog-symboloptions-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-symboloptions-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Change the symbol colors for your menu or tweak the relative size or location of the symbols. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Symbol Options</h3>
            <div class="MPdialogSubHeader">Change the color or size for all symbols</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanSymCol MPpadTop3px notranslate">
                    <div id="sym1Sample" class="FoodSymSample FoodSymSampleBorder  MPpadTop6px">
                        <div class="MPpadTop5px" style="margin-top: 5px; font-size: 48px; color: rgb(107, 160, 105); opacity: 1;">&nbsp;Ag<br></div>
                    </div>
                    <div class="MPpadTop13px" style="margin-left:0">
                        <span class="MPpadTop4px spanSymColorText" style="margin-left:0px">&nbsp;&nbsp;Color:</span><input id="mp-dialog-symbol1-color" class="dialog-symbol-color" value="#000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(107, 160, 105);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>

                <div class="spanSymCol MPpadTop3px notranslate">
                    <div id="sym2Sample" class="FoodSymSample FoodSymSampleBorder  MPpadTop6px">
                        <div class="MPpadTop5px" style="margin-top: 5px; font-size: 48px; color: rgb(107, 160, 105); opacity: 1;">&nbsp;Ag<br></div>
                    </div>
                    <div class="MPpadTop13px" style="margin-left:0">
                        <span class="MPpadTop4px spanSymColorText" style="margin-left:0px">&nbsp;&nbsp;Color:</span><input id="mp-dialog-symbol2-color" class="dialog-symbol-color" value="#000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(107, 160, 105);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>

                <div class="row spanSymRow3 MPpadTop20px" style="left-margin:0">
                    <label class="checkbox"><input name="symsize" type="checkbox" value="">Use large symbols</label>
                    <label class="checkbox MPpadTop2px"><input name="keep-inline" type="checkbox" value="">Keep inline with Name</label>
                </div>

            </div>

            <div class="MPpadTop11px">
                <!-- space row -->
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton notranslate">Use Style defaults</button>
            <button id="mp-dialog-symboloptions-ok" class="btn btn-primary notranslate">OK</button>
            <button id="mp-dialog-symboloptions-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#818285" data-color="rgb(129, 130, 133)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(129, 130, 133);"></span></span><span title="#4d4d4f" data-color="rgb(77, 77, 79)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(77, 77, 79);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#386cb4" data-color="rgb(56, 108, 180)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(56, 108, 180);"></span></span><span title="#802318" data-color="rgb(128, 35, 24)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(128, 35, 24);"></span></span><span title="#c81307" data-color="rgb(200, 19, 7)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(200, 19, 7);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#554017" data-color="rgb(85, 64, 23)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(85, 64, 23);"></span></span><span title="#de1d3c" data-color="rgb(222, 29, 60)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(222, 29, 60);"></span></span><span title="#f17258" data-color="rgb(241, 114, 88)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 114, 88);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#00aeef" data-color="rgb(0, 174, 239)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 174, 239);"></span></span><span title="#036a44" data-color="rgb(3, 106, 68)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(3, 106, 68);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="#6ba069" data-color="rgb(107, 160, 105)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(107, 160, 105);"></span></span></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(9, 255, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(107, 160, 105, 0), rgb(107, 160, 105));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#6ba069" data-color="rgb(107, 160, 105)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(107, 160, 105);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div><div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#818285" data-color="rgb(129, 130, 133)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(129, 130, 133);"></span></span><span title="#4d4d4f" data-color="rgb(77, 77, 79)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(77, 77, 79);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#386cb4" data-color="rgb(56, 108, 180)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(56, 108, 180);"></span></span><span title="#802318" data-color="rgb(128, 35, 24)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(128, 35, 24);"></span></span><span title="#c81307" data-color="rgb(200, 19, 7)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(200, 19, 7);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#554017" data-color="rgb(85, 64, 23)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(85, 64, 23);"></span></span><span title="#de1d3c" data-color="rgb(222, 29, 60)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(222, 29, 60);"></span></span><span title="#f17258" data-color="rgb(241, 114, 88)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 114, 88);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#00aeef" data-color="rgb(0, 174, 239)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 174, 239);"></span></span><span title="#036a44" data-color="rgb(3, 106, 68)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(3, 106, 68);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="#6ba069" data-color="rgb(107, 160, 105)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(107, 160, 105);"></span></span></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(9, 255, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(107, 160, 105, 0), rgb(107, 160, 105));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#6ba069" data-color="rgb(107, 160, 105)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(107, 160, 105);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>







<div id="myMenuStyleDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">


        <div class="modal-header">
            <button id="dialog-menustyle-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-menustyle-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Try out a new menu style. To keep design changes you&#39;ve made while switching styles (like a background, font, etc.) check &#39;Keep design changes&#39; under Tools | Settings. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Menu Style</h3>
            <div class="MPdialogSubHeader">Switch to a new Menu Style</div>
        </div>

        <div class="modal-body">

            <div class="row" style="margin-top:1px;margin-bottom:2px">
                <div class="spanMenuStyle MPpadTop5px notranslate">
                    <select id="dialog-menustyle-select" size="13" style="width:220px">
                        <optgroup label="iMenuPro Styles"><option value="19_East_Main.css">19 East Main </option>
                            <option value="4AD.css">4AD </option>
                            <option value="American_Classic.css">American Classic </option>
                            <option value="Balthus.css">Balthus </option>
                            <option value="Bangkok_Cafe.css">Bangkok Cafe </option>
                            <option value="BBQ_13.css">BBQ 13 </option>
                            <option value="Bethesda_Wine_Bar.css">Bethesda Wine Bar </option>
                            <option value="Bezo_Burger.css">Bezo Burger </option>
                            <option value="Biergarten.css">Biergarten </option>
                            <option value="Bistro_Garden.css">Bistro Garden </option>
                            <option value="Black_Salt.css">Black Salt </option>
                            <option value="Brunch_Sunnyside.css">Brunch Sunnyside </option>
                            <option value="Buffalo_Ranch.css">Buffalo Ranch </option>
                            <option value="Cavalry_Steakhouse.css">Cavalry Steakhouse </option>
                            <option value="Charcuterie.css">Charcuterie </option>
                            <option value="Christmas.css">Christmas </option>
                            <option value="Chutoro.css">Chutoro </option>
                            <option value="Ciao.css">Ciao </option>
                            <option value="City_Bar.css">City Bar </option>
                            <option value="Copper_Plate.css">Copper Plate </option>
                            <option value="Country_Store.css">Country Store </option>
                            <option value="Cucina_Ristorante.css">Cucina Ristorante </option>
                            <option value="Daily_Catch.css">Daily Catch </option>
                            <option value="DC_Bistro.css">DC Bistro </option>
                            <option value="Deli_Dharma.css">Deli Dharma </option>
                            <option value="Duck_Fat_Bistro.css">Duck Fat Bistro </option>
                            <option value="Edible_Easter.css">Edible Easter </option>
                            <option value="Elegant_Sushi.css">Elegant Sushi </option>
                            <option value="End_Zone.css">End Zone </option>
                            <option value="Eros_Taverna.css">Eros Taverna </option>
                            <option value="Exquisite_Eve.css">Exquisite Eve </option>
                            <option value="Fernet_Buck.css">Fernet Buck </option>
                            <option value="Frontier_Drive.css">Frontier Drive </option>
                            <option value="GDC_Deli.css">GDC Deli </option>
                            <option value="Gran_Gusto.css">Gran Gusto </option>
                            <option value="Happy_New_Year.css">Happy New Year </option>
                            <option value="Hickory_Smoke.css">Hickory Smoke </option>
                            <option value="High_Victoria.css">High Victoria </option>
                            <option value="Homebake_Pie_Co.css">Homebake Pie Co </option>
                            <option value="Hot_Dogs_Plus.css">Hot Dogs Plus </option>
                            <option value="Hour_Menu.css">Hour Menu </option>
                            <option value="Indian_Orange.css">Indian Orange </option>
                            <option value="Jahr_86.css">Jahr 86 </option>
                            <option value="Jazz_Cocktails.css">Jazz Cocktails </option>
                            <option value="K_Street.css">K Street </option>
                            <option value="Laguna_Seafood.css">Laguna Seafood </option>
                            <option value="Large_Lobster.css">Large Lobster </option>
                            <option value="Le_Monde.css">Le Monde </option>
                            <option value="Leaves.css">Leaves </option>
                            <option value="Lempicka_Lounge.css">Lempicka Lounge </option>
                            <option value="Lorie_Meme.css">Lorie Meme </option>
                            <option value="Lucky_Dragon.css">Lucky Dragon </option>
                            <option value="Madams_Organic.css">Madams Organic </option>
                            <option value="Malibu_Bui.css">Malibu Bui </option>
                            <option value="Market_Farmers.css">Market Farmers </option>
                            <option value="Martin_Festival.css">Martin Festival </option>
                            <option value="Mediterranean_Grill.css">Mediterranean Grill </option>
                            <option value="Moskva_River.css">Moskva River </option>
                            <option value="Mother&#39;s_Day.css">Mother's Day </option>
                            <option value="Mussel_Bar.css">Mussel Bar </option>
                            <option value="Neighborhood_Diner.css">Neighborhood Diner </option>
                            <option value="New_Haven_Slice.css">New Haven Slice </option>
                            <option value="Organic.css">Organic </option>
                            <option value="Oswald_Oyster_Bar.css">Oswald Oyster Bar </option>
                            <option value="Pisa_Tower.css">Pisa Tower </option>
                            <option value="Plein_33.css">Plein 33 </option>
                            <option value="Pragmatic_Plate.css">Pragmatic Plate </option>
                            <option value="Prix_Fixe.css">Prix Fixe </option>
                            <option value="Prohibition_Kitchen.css">Prohibition Kitchen </option>
                            <option value="Public_Fare.css">Public Fare </option>
                            <option value="Qualcosina.css">Qualcosina </option>
                            <option value="Respira_Steakhouse.css">Respira Steakhouse </option>
                            <option value="Right_On.css">Right On </option>
                            <option value="Right_Proper.css">Right Proper </option>
                            <option value="Ripe_Tomato.css">Ripe Tomato </option>
                            <option value="Salon_Gibsone.css">Salon Gibsone </option>
                            <option value="Shanty_Up.css">Shanty Up </option>
                            <option value="Smoke_Simple.css">Smoke Simple </option>
                            <option value="Snowflake.css">Snowflake </option>
                            <option value="Spa_Blue.css">Spa Blue </option>
                            <option value="Spa_Lotus.css">Spa Lotus </option>
                            <option value="Speakeasy.css">Speakeasy </option>
                            <option value="Sports_Balls.css">Sports Balls </option>
                            <option value="Sports_Bar.css">Sports Bar </option>
                            <option value="St._Patrick&#39;s_Day.css">St. Patrick's Day </option>
                            <option value="Steaks_Natur.css">Steaks Natur </option>
                            <option value="Strawberry_Fields.css">Strawberry Fields </option>
                            <option value="Sub_Shop.css">Sub Shop </option>
                            <option value="Sushi_Fresh.css">Sushi Fresh </option>
                            <option value="Tasting_Room.css">Tasting Room </option>
                            <option value="Tequila.css">Tequila </option>
                            <option value="Tex_Chiwawa.css">Tex Chiwawa </option>
                            <option value="Thanksgiving.css">Thanksgiving </option>
                            <option value="The_Buzzy_Bee.css">The Buzzy Bee </option>
                            <option value="The_Fish_House.css">The Fish House </option>
                            <option value="Trattoria.css">Trattoria </option>
                            <option value="Un_Boccone.css">Un Boccone </option>
                            <option value="Valentines.css">Valentines </option>
                            <option value="Venison_Lodge.css">Venison Lodge </option>
                            <option value="Vert_Haricot.css">Vert Haricot </option>
                            <option value="Vet_Us.css">Vet Us </option>
                            <option value="Wild_Tomato_Cafe.css">Wild Tomato Cafe </option>
                            <option value="Wild_Wings.css">Wild Wings </option>
                            <option value="Windows_Catering.css">Windows Catering </option>
                            <option value="Wine_and_Chocolate.css">Wine and Chocolate </option>
                            <option value="Ye_Public_House.css">Ye Public House </option>
                            <option value="Zen_Ren_Carryout.css">Zen Ren Carryout </option>
                            <option value="Zydeco_Kitchen.css">Zydeco Kitchen </option>
                            &lt;\/optgroup&gt;					</optgroup></select>
                </div>
            </div>

            <div class="row">
                <div class="MPpadTop5px spanTotalCols dont_select" rel="tooltip" title="For columns under just one heading, edit the Heading and use Food Columns."><b>In this many columns:</b></div>
                <select name="total_columns" style="width:63px">
                    <option value="1" selected="">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>


        </div>

        <div class="modal-footer">
            <button id="dialog-menustyle-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-menustyle-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>




<div id="myOpenMenuDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-openmenu-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-openmenu-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Select a menu from your menu list or use the search box to find the menu you&#39;re looking for."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Open a Menu</h3>
        </div>

        <div class="modal-body">

            <div class="row" style="margin-left:0">
                <div class="btn-group ">
                    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">sort by <span class="caret"></span></a>
                    <a id="mp-openmenu-thumbstyle" role="button" class="btn btn-mini" style="margin-left: 7px; margin-right: 4px; vertical-align: top; display: none;" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="Toggle list view"><i id="mp-openmenu-preview-icon" class="icon-list"></i></a>

                    <ul class="dropdown-menu">
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleMenuListView(&#39;#mp-view-menus-bylast&#39;); return false;">
                                <i id="mp-view-menus-bylast" class="icon-ok"></i> Last edited</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleMenuListView(&#39;#mp-view-menus-byalpha&#39;); return false;">
                                <i id="mp-view-menus-byalpha" class="no-menu-icon"></i> Menu Name</a></li>
                    </ul>
                </div>
                <input id="mp-search-menus" type="text" class="search-query clearfix removeIEx" placeholder="Find Menu">
            </div>

            <div class="row MPpadTop12px" style="margin-left:0">
                <div class="MPdialogTitleFont spanOpenMenuName" style="margin-left:0">Your Menus</div>
            </div>

            <div id="mp-openmenu-megadiv" class="row MPpadTop2px" style="margin-bottom:11px">
                <div class="megalist notranslate" id="myMenuList" style="height: 46px;"><ul style="visibility: visible; left: 0px; top: 0px;"><li class="megalistItem" list-index="0" style="left: 0px; top: 0px;">[object Object]</li><li class="megalistItem" list-index="1" style="left: 0px; top: 235px;"></li></ul><div id="scrollbar" style="width: 7.5px; height: 41.1915px; top: 1px;"></div></div>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-openmenu-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-openmenu-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>



<div id="mySmartMarkDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-smartmark-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-smartmark-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Smart Mark automatically replaces words when you edit menu text.
      		You can add or remove words from the list, or you can turn off Smart Mark under Tools | Settings."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Smart Mark</h3>
            <div class="MPdialogSubHeader">Automatic word substitution</div>
        </div>

        <div class="modal-body">

            <div class="row" style="margin-left:0">
                <input id="mp-search-smartmark" type="text" class="search-query clearfix removeIEx" placeholder="Find word in list">
            </div>

            <div class="row MPpadTop10px">
                <span class="spanTextSMWordfield1b">Replace:</span>
                <span class="MPReplaceFont" style="margin-left:0px">With:</span>
            </div>

            <div class="MPpadTop1px controls-row">
				<span class="spanTextSMWordfield1" style="margin-left:0">
					<input id="mp-replace-word" type="text" class="spanTextSMWord" onkeydown="return ignoreEnter(event);" placeholder="cafe" maxlength="22"></span>
                <span class="spanWordHand" style="margin-left:0"><i class="icon-hand-right" style="margin-top:6px"></i></span>
                <span class="spanTextSMWordfield2" style="margin-left:0">
					<input id="mp-with-word" type="text" class="spanTextSMWord" onkeydown="return ignoreEnter(event);" placeholder="café" maxlength="22"></span>
                <a id="mp-add-word" class="btn btn-small MPpadTop5px"><i class="icon-plus"></i> Add</a>
            </div>

            <!-- <div class="row MPpadTop3px" style="margin-left:0">
				<div class="MPdialogTitleFont spanSmartMarkWords" style="margin-left:0">Word List</div>
			</div> -->

            <div id="mp-smartmark-megadiv" class="row MPpadTop2px" style="margin-left:0;margin-bottom:11px">
                <div class="megalist notranslate" id="mySmartMarkList" style="height: 245px;"><ul style="visibility: visible; left: 0px; top: 0px;"><li class="megalistItem" list-index="0" style="left: 0px; top: 0px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_8"> cafe<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> café</span></li><li class="megalistItem" list-index="1" style="left: 0px; top: 41px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_9"> entree<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> entrée</span></li><li class="megalistItem" list-index="2" style="left: 0px; top: 82px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_10"> entrees<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> entrées</span></li><li class="megalistItem" list-index="3" style="left: 0px; top: 123px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_12"> flambe<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> flambé</span></li><li class="megalistItem" list-index="4" style="left: 0px; top: 164px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_13"> frappe<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> frappé</span></li><li class="megalistItem" list-index="5" style="left: 0px; top: 205px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_14"> fricassee<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> fricassée</span></li><li class="megalistItem" list-index="6" style="left: 0px; top: 246px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_15"> Kummel<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> Kümmel</span></li><li class="megalistItem" list-index="7" style="left: 0px; top: 287px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_16"> Munster<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> Münster</span></li><li class="megalistItem" list-index="8" style="left: 0px; top: 328px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_17"> pate<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> pâté</span></li><li class="megalistItem" list-index="9" style="left: 0px; top: 369px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_18"> perignon<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> pérignon</span></li><li class="megalistItem" list-index="10" style="left: 0px; top: 410px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_19"> saute<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> sauté</span></li><li class="megalistItem" list-index="11" style="left: 0px; top: 451px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_20"> sauteed<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> sautéed</span></li><li class="megalistItem" list-index="12" style="left: 0px; top: 492px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_21"> souffle<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> soufflé</span></li><li class="megalistItem" list-index="13" style="left: 0px; top: 533px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_22"> Truffel<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> Trüffel</span></li><li class="megalistItem" list-index="14" style="left: 0px; top: 574px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_2"> (ct)<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> ¢</span></li><li class="megalistItem" list-index="15" style="left: 0px; top: 615px;"><i class="icon-off-menu14"></i><span class="fooditem-name" id="smartid_1"> (c)<br></span><br><span class="MPReplaceFont"><i class="icon-hand-right"></i> ©</span></li></ul><div id="scrollbar" style="width: 7.5px; height: 65.4645px; top: 1px;"></div></div>
            </div>

            <div class="row" style="margin-left:0">
                <button id="mp-remove-word" class="btn btn-small" disabled=""><i class="icon-minus"></i> Remove</button>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-smartmark-done" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>

    </form>
</div>


<div id="myPersonalDictionaryDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-userdic-x" type="button" class="close" data-dismiss="modal">×</button>
            <a href="http://help.onlineMenu.com/tools-settings.htm#spell-check" target="_blank" id="dialog-userdic-help" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="To add a word, enter the word, then click Add. To remove a word, click the word in the list, then click Remove."><span class="badge badge-info notranslate">?</span>&nbsp;</a>
            <h3 class="MPdialogTitleFont">Personal Dictionary</h3>
        </div>

        <div class="modal-body notranslate">

            <div class="row" style="margin-left:0">
                <input id="mp-search-userdic" type="text" class="search-query clearfix removeIEx" placeholder="Search dictionary">
            </div>

            <div class="MPpadTop16px controls-row">
				<span class="spanTextUDWordfield" style="margin-left:0">
					<input id="mp-userdic-word" type="text" class="spanTextUDWord" onkeydown="return ignoreEnter(event);" placeholder="Add a new word" maxlength="40"></span>
                <a id="mp-add-userdic-word" class="btn btn-small MPpadTop5px"><i class="icon-plus"></i> Add</a>
            </div>

            <!-- <div class="row MPpadTop3px" style="margin-left:0">
				<div class="MPdialogTitleFont spanUserDicWords" style="margin-left:0">Word List</div>
			</div> -->

            <div id="mp-userdic-megadiv" class="row MPpadTop2px" style="margin-left:0;margin-bottom:11px">
                <div class="megalist notranslate" id="myUserDicList"></div>
            </div>

            <div class="row" style="margin-left:0">
                <button id="mp-remove-userdic-word" class="btn btn-small" disabled=""><i class="icon-minus"></i> Remove</button>
            </div>

        </div>

        <div class="modal-footer notranslate">
            <button id="dialog-userdic-done" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>

    </form>
</div>



<div id="myClearAllDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">


        <div class="modal-header">
            <button id="dialog-clearall-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-clearall-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use this to quickly remove things en masse from your menu."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Clear All</h3>
        </div>

        <div class="modal-body">

            <div class="row">
                <span class="spanClearAllThing"><em>Clear these from your menu:</em></span>
            </div>

            <div class="row MPpadTop4px">
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-fttext" type="checkbox" value="" checked="checked">Floating Text</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-images" type="checkbox" value="" checked="checked">Inserted Images</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-binnumbers" type="checkbox" value="" checked="checked">Bin/Numbers</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-fiaccents" type="checkbox" value="" checked="checked">Boxes or Accents (for foods)</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-symbols" type="checkbox" value="">Symbols (for foods and headings)</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-cuspacing" type="checkbox" value="">Custom Spacing (for foods and headings)</label>
                </div>
                <div class="spanClearAllThing MPpadTop8px">
                    <label class="checkbox"><input id="mp-clearall-fooditems" type="checkbox" value="">Food Items</label>
                </div>

                <span class="MPpadTop10px spanClearAllUndoText text-info"><em><small>When Clear All has finished, you can select Undo from the Edit menu to undo the clearing.</small></em></span>

            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-clearall-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-clearall-cancel" class="btn " data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myAutoBinNumberDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-autobin-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-autobin-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Add Bin/Numbers to all foods on your menu. To leave already numbered foods unchanged, check &#39;Leave existing Bin/Numbers&#39;.
				Add a 1-3 letter prefix to the numbers (such as C1, C2, etc.) with &#39;Attach this prefix&#39;."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Auto Bin/Number</h3>
            <div class="MPdialogSubHeader">Add Bin/Numbers to Food Items on your menu</div>
        </div>

        <div class="modal-body">

            <div class="row notranslate">
                <div class="MPpadTop3px">
                    <span class="spanAutoBinStartText MPpadTop5px">Start numbering at:</span><span>
					     <input type="text" id="mp-autobin-startnumber" class="spanTextInGeneric" onkeydown="return ignoreEnter(event);" value="1"></span>
                </div>
                <div>
                    <span class="spanAutoBinStartText MPpadTop5px ">Attach this prefix:</span><span>
					    <input type="text" id="mp-autobin-prefix" class="spanTextInGeneric" maxlength="3" onkeydown="return ignoreEnter(event);" value=""></span>
                </div>
            </div>

            <div class="row">
                <div class="spanAutoBinNumber MPpadTop4px">
                    <label class="checkbox"><input id="mp-autobin-period" type="checkbox" value="" checked="checked">Use a period after number</label>
                </div>
                <div class="spanAutoBinNumber MPpadTop8px">
                    <label class="checkbox"><input id="mp-autobin-leavebinalone" type="checkbox" value="" checked="checked">Leave existing Bin/Numbers</label>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-autobin-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-autobin-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>



<div id="myPageSpacingDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-pagespacing-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-pagespacing-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Change the page spacing (space between items) on your current menu page. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Page Spacing</h3>
        </div>

        <div class="modal-body">

            <div class="row">
                <span class="spanPageSpacingThing"><em>Change the spacing between items on current page:</em></span>
            </div>

            <div class="row MPpadTop14px">
                <span class="MPpadTop5px spanPageSpacingText" style="margin-bottom:1px">Page Spacing:</span>
                <span><input id="exact-page-spacing" style="margin-bottom:2px" maxlength="5" autocomplete="off" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?" onkeydown="return ignoreEnter(event);"></span>

                <span class="MPpadTop12px spanPSpacingInfoText text-info"><em><small>Tip! Use the shrink <i class="icon-shrink-spacing" style="margin-top:0;opacity:.8"></i> or expand <i class="icon-expand-spacing" style="margin-top:0;opacity:.8"></i> buttons on the toolbar to apply and preview page spacing in real-time.</small></em></span>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-pagespacing-reset" class="btn btn-small ResetToStyleButton notranslate">Reset to default</button>
            <button id="dialog-pagespacing-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-pagespacing-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>




<div id="myBorderDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-border-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-border-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Choose a menu border or &#39;(none)&#39; to remove it.
			      		You can also colorize the border or change its margin (how close the border is to the edge of the paper). Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Menu Border</h3>
            <div class="MPdialogSubHeader">Select (or remove) a menu border</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanBorderName notranslate">
                    <select id="dialog-border-select" size="11" style="width:254px">
                        <option value="none" selected="">(none)</option>
                        <option value="Artisitc_Brush_1.svg">Artisitc Brush 1</option>
                        <option value="Artistic_Brush_2.svg">Artistic Brush 2</option>
                        <option value="Artistic_Brush_3.svg">Artistic Brush 3</option>
                        <option value="Aztec_1.svg">Aztec 1</option>
                        <option value="Aztec_2.svg">Aztec 2</option>
                        <option value="Black_Tie_1.svg">Black Tie 1</option>
                        <option value="Black_Tie_2.svg">Black Tie 2</option>
                        <option value="Black_Tie_3.svg">Black Tie 3</option>
                        <option value="Black_Tie_4.svg">Black Tie 4</option>
                        <option value="Black_Tie_5.svg">Black Tie 5</option>
                        <option value="Black_Tie_6.svg">Black Tie 6</option>
                        <option value="Black_Tie_7.svg">Black Tie 7</option>
                        <option value="Black_Tie_8.svg">Black Tie 8</option>
                        <option value="Black_Tie_9.svg">Black Tie 9</option>
                        <option value="Black_Tie_10.svg">Black Tie 10</option>
                        <option value="Branch_1.svg">Branch 1</option>
                        <option value="Branch_2.svg">Branch 2</option>
                        <option value="Branch_3.svg">Branch 3</option>
                        <option value="Branch_4.svg">Branch 4</option>
                        <option value="Casino_1.svg">Casino 1</option>
                        <option value="Casino_2.svg">Casino 2</option>
                        <option value="Casino_3.svg">Casino 3</option>
                        <option value="Casino_4.svg">Casino 4</option>
                        <option value="Casino_5.svg">Casino 5</option>
                        <option value="Casino_6.svg">Casino 6</option>
                        <option value="Casino_7.svg">Casino 7</option>
                        <option value="Casino_8.svg">Casino 8</option>
                        <option value="Casino_9.svg">Casino 9</option>
                        <option value="Celtic_1.svg">Celtic 1</option>
                        <option value="Celtic_2.svg">Celtic 2</option>
                        <option value="Celtic_3.svg">Celtic 3</option>
                        <option value="Celtic_4.svg">Celtic 4</option>
                        <option value="Checkered_1.svg">Checkered 1</option>
                        <option value="Checkered_2.svg">Checkered 2</option>
                        <option value="Checkered_3.svg">Checkered 3</option>
                        <option value="Checkered_4.svg">Checkered 4</option>
                        <option value="Deco_1.svg">Deco 1</option>
                        <option value="Deco_2.svg">Deco 2</option>
                        <option value="Deco_3.svg">Deco 3</option>
                        <option value="Dots_UpDn.svg">Dots UpDn</option>
                        <option value="Electric_1.svg">Electric 1</option>
                        <option value="Elegant_1.svg">Elegant 1</option>
                        <option value="Elegant_2.svg">Elegant 2</option>
                        <option value="Fiesta_1.svg">Fiesta 1</option>
                        <option value="Floral_Asian.svg">Floral Asian</option>
                        <option value="Floral_Grass.svg">Floral Grass</option>
                        <option value="Floral_Ivy.svg">Floral Ivy</option>
                        <option value="Floral_Laurel.svg">Floral Laurel</option>
                        <option value="Floral_Marjoram.svg">Floral Marjoram</option>
                        <option value="Floral_Olive.svg">Floral Olive</option>
                        <option value="Floral_Roses.svg">Floral Roses</option>
                        <option value="Golden_Palace.svg">Golden Palace</option>
                        <option value="Gothic_1.svg">Gothic 1</option>
                        <option value="Graphic_1.svg">Graphic 1</option>
                        <option value="Graphic_2.svg">Graphic 2</option>
                        <option value="Graphic_3.svg">Graphic 3</option>
                        <option value="Graphic_4.svg">Graphic 4</option>
                        <option value="Graphic_5.svg">Graphic 5</option>
                        <option value="Graphic_6.svg">Graphic 6</option>
                        <option value="Graphic_7.svg">Graphic 7</option>
                        <option value="Graphic_8.svg">Graphic 8</option>
                        <option value="Graphic_9.svg">Graphic 9</option>
                        <option value="Greek_1.svg">Greek 1</option>
                        <option value="Grunge_1.svg">Grunge 1</option>
                        <option value="Grunge_2.svg">Grunge 2</option>
                        <option value="Grunge_3.svg">Grunge 3</option>
                        <option value="Grunge_4.svg">Grunge 4</option>
                        <option value="Grunge_5.svg">Grunge 5</option>
                        <option value="Grunge_6.svg">Grunge 6</option>
                        <option value="Hand_Drawn_1.svg">Hand Drawn 1</option>
                        <option value="Hand_Drawn_2.svg">Hand Drawn 2</option>
                        <option value="Hand_Drawn_3.svg">Hand Drawn 3</option>
                        <option value="Hand_Drawn_4.svg">Hand Drawn 4</option>
                        <option value="Hieroglyph_1.svg">Hieroglyph 1</option>
                        <option value="Hieroglyph_2.svg">Hieroglyph 2</option>
                        <option value="Hieroglyph_3.svg">Hieroglyph 3</option>
                        <option value="Hops_1.svg">Hops 1</option>
                        <option value="Italia_1.svg">Italia 1</option>
                        <option value="Matte_1.svg">Matte 1</option>
                        <option value="Matte_2.svg">Matte 2</option>
                        <option value="Matte_3.svg">Matte 3</option>
                        <option value="Modernism_1.svg">Modernism 1</option>
                        <option value="Modernism_2.svg">Modernism 2</option>
                        <option value="Modernism_3.svg">Modernism 3</option>
                        <option value="Modernism_4.svg">Modernism 4</option>
                        <option value="Modernism_5.svg">Modernism 5</option>
                        <option value="Modernism_6.svg">Modernism 6</option>
                        <option value="Motif_1.svg">Motif 1</option>
                        <option value="Motif_2.svg">Motif 2</option>
                        <option value="Motif_3.svg">Motif 3</option>
                        <option value="Nouveau_1.svg">Nouveau 1</option>
                        <option value="Nouveau_2.svg">Nouveau 2</option>
                        <option value="Nouveau_3.svg">Nouveau 3</option>
                        <option value="Nouveau_4.svg">Nouveau 4</option>
                        <option value="Nouveau_5.svg">Nouveau 5</option>
                        <option value="Nouveau_6.svg">Nouveau 6</option>
                        <option value="Nouveau_7.svg">Nouveau 7</option>
                        <option value="Nouveau_8.svg">Nouveau 8</option>
                        <option value="Nouveau_9.svg">Nouveau 9</option>
                        <option value="Nouveau_10.svg">Nouveau 10</option>
                        <option value="Nouveau_11.svg">Nouveau 11</option>
                        <option value="Nouveau_12.svg">Nouveau 12</option>
                        <option value="Nouveau_13.svg">Nouveau 13</option>
                        <option value="Nouveau_14.svg">Nouveau 14</option>
                        <option value="Nouveau_15.svg">Nouveau 15</option>
                        <option value="Nouveau_16.svg">Nouveau 16</option>
                        <option value="Nouveau_17.svg">Nouveau 17</option>
                        <option value="Nouveau_18.svg">Nouveau 18</option>
                        <option value="Nouveau_19.svg">Nouveau 19</option>
                        <option value="Nouveau_20.svg">Nouveau 20</option>
                        <option value="Nouveau_21.svg">Nouveau 21</option>
                        <option value="Nouveau_22.svg">Nouveau 22</option>
                        <option value="Nouveau_23.svg">Nouveau 23</option>
                        <option value="Nouveau_24.svg">Nouveau 24</option>
                        <option value="Nouveau_25.svg">Nouveau 25</option>
                        <option value="Nouveau_26.svg">Nouveau 26</option>
                        <option value="Nouveau_27.svg">Nouveau 27</option>
                        <option value="Nouveau_28.svg">Nouveau 28</option>
                        <option value="Nouveau_29.svg">Nouveau 29</option>
                        <option value="Nouveau_30.svg">Nouveau 30</option>
                        <option value="Nouveau_31.svg">Nouveau 31</option>
                        <option value="Nouveau_32.svg">Nouveau 32</option>
                        <option value="Nouveau_33.svg">Nouveau 33</option>
                        <option value="Nouveau_34.svg">Nouveau 34</option>
                        <option value="Nouveau_35.svg">Nouveau 35</option>
                        <option value="Nouveau_36.svg">Nouveau 36</option>
                        <option value="Nouveau_37.svg">Nouveau 37</option>
                        <option value="Nouveau_38.svg">Nouveau 38</option>
                        <option value="Nouveau_39.svg">Nouveau 39</option>
                        <option value="Nouveau_40.svg">Nouveau 40</option>
                        <option value="Ornamental_1.svg">Ornamental 1</option>
                        <option value="Ornamental_2.svg">Ornamental 2</option>
                        <option value="Ornamental_3.svg">Ornamental 3</option>
                        <option value="Ornamental_4.svg">Ornamental 4</option>
                        <option value="Ornamental_5.svg">Ornamental 5</option>
                        <option value="Ornamental_Angel.svg">Ornamental Angel</option>
                        <option value="Ornamental_Western.svg">Ornamental Western</option>
                        <option value="Rococo_1.svg">Rococo 1</option>
                        <option value="Tea_1.svg">Tea 1</option>
                        <option value="Thick.svg">Thick</option>
                        <option value="Thick_Under_Over.svg">Thick Under Over</option>
                        <option value="Thicker-Thin.svg">Thicker-Thin</option>
                        <option value="Thickest-Thin.svg">Thickest-Thin</option>
                        <option value="Thin.svg">Thin</option>
                        <option value="Thin_Under_Over.svg">Thin Under Over</option>
                        <option value="Thinner.svg">Thinner</option>
                        <option value="Thinnest.svg">Thinnest</option>
                        <option value="Thinnest-Double.svg">Thinnest-Double</option>
                        <option value="Thinnest-Thick.svg">Thinnest-Thick</option>
                        <option value="Thinnest-Thin.svg">Thinnest-Thin</option>
                        <option value="Thin-Thick.svg">Thin-Thick</option>
                        <option value="Thin-Thinner.svg">Thin-Thinner</option>
                        <option value="Thin-Triple.svg">Thin-Triple</option>
                        <option value="Tropical_1.svg">Tropical 1</option>
                        <option value="Tropical_2.svg">Tropical 2</option>
                        <option value="Tropical_3.svg">Tropical 3</option>
                        <option value="Tropical_4.svg">Tropical 4</option>
                        <option value="Victorian_1.svg">Victorian 1</option>
                        <option value="Victorian_2.svg">Victorian 2</option>
                        <option value="Victorian_3.svg">Victorian 3</option>
                        <option value="Victorian_4.svg">Victorian 4</option>
                        <option value="Vintage_1.svg">Vintage 1</option>
                        <option value="Western_Studs.svg">Western Studs</option>
                        <option value="Western_Wire_1.svg">Western Wire 1</option>
                        <option value="Western_Wire_2.svg">Western Wire 2</option>
                        <option value="Whimsical_Anchors.svg">Whimsical Anchors</option>
                        <option value="Whimsical_Bikes.svg">Whimsical Bikes</option>
                        <option value="Whimsical_Curlicue.svg">Whimsical Curlicue</option>
                        <option value="Whimsical_Hands.svg">Whimsical Hands</option>
                        <option value="Whimsical_Planes.svg">Whimsical Planes</option>
                        <option value="Whimsical_Track.svg">Whimsical Track</option>
                        <option value="Whimsical_Vine.svg">Whimsical Vine</option>
                        <option value="Whimsical_Wave.svg">Whimsical Wave</option>
                        <option value="White_Markers.svg">White Markers</option>
                        <option value="Woodcut_1.svg">Woodcut 1</option>
                        <option value="Woodcut_2.svg">Woodcut 2</option>
                        <option value="Woodcut_3.svg">Woodcut 3</option>
                        <option value="Woodcut_4.svg">Woodcut 4</option>
                        <option value="Woodcut_5.svg">Woodcut 5</option>
                        <option value="Wright_1.svg">Wright 1</option>
                        <option value="Wright_2.svg">Wright 2</option>
                        <option value="Wright_3.svg">Wright 3</option>
                    </select>
                </div>

            </div>
            <div class="row MPpadTop3px">
                <span class="MPpadTop5px spanMarginBorderText">Margin from edge of menu:</span><span>
				    <input id="dialog-border-margin" type="text" class="spanTextInGeneric" placeholder="0.3&quot;" onkeydown="return ignoreEnter(event);">
					</span>
            </div>

            <div class="row MPpadTop2px notranslate">
                <div>
                    <label class="checkbox spanFlipBorder"><input id="dialog-border-flip" type="checkbox" value="">Flip</label>
                </div>
                <div>
                    <label class="checkbox spanMirrorBorder" style="margin-left:0px;"><input id="dialog-border-mirror" type="checkbox" value="">Mirror</label>
                </div>
                <div>
                    <label class="checkbox spanColorizeBorder" style="margin-left:0px;"><input id="dialog-border-colorize" type="checkbox" value="">Colorize:</label>
                </div>
                <div style="margin-left:0">
                    <input id="dialog-border-color" style="display: none;" disabled="disabled"><div class="sp-replacer sp-light sp-disabled"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);"></div></div><div class="sp-dd">▼</div></div>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton notranslate">Use Style defaults</button>
            <button id="dialog-border-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-border-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#f15a24" data-color="rgb(241, 90, 36)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 90, 36);"></span></span><span title="#29abe2" data-color="rgb(41, 171, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(41, 171, 226);"></span></span><span title="#009245" data-color="rgb(0, 146, 69)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 146, 69);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-5"><span title="#075099" data-color="rgb(7, 80, 153)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(7, 80, 153);"></span></span><span title="#aaaaaa" data-color="rgb(170, 170, 170)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(170, 170, 170);"></span></span><span title="#e21e79" data-color="rgb(226, 30, 121)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(226, 30, 121);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>



<div id="myImportFoodItemsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form id="mycsv_form" class="modal-form" action="https://onlineMenu.com/tools/token-import-csv" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
        <input type="hidden" name="access_token" value="demo_user">

        <div class="modal-header">
            <button id="dialog-importfoods-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-importfoods-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="For importing foods from MenuPro (desktop versions 6-10) or from iMenuPro.
      		In MenuPro (desktop) use File &gt; Utilities &gt; Export &gt; Food Items &gt; All to create an mpdata_.txt file.
      		Select that file here, then check the Data Preview before clicking OK. WARNING: Import the file ONLY ONE TIME - importing the same file again will create duplicates that cannot removed without manual deletion. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Import Food Items</h3>
            <div class="MPdialogSubHeader">Import food items from MenuPro (desktop version 6-10) or iMenuPro</div>
        </div>

        <div class="modal-body">

            <div class="row spanImportText" style="margin-left:0;padding-bottom:14px">
                <p><span class="label label-success"> Heads up! </span>
                    <span class="text-info"><em><small>Do not import the same data more than once - you'll end up with duplicates.</small></em></span>
                </p></div>

            <div class="row" style="margin-left:0; padding-left:0">
                <div style="margin-left:0"><span><b>.txt file</b></span> (from MenuPro or iMenuPro <em>Export</em> only. <a href="http://help.onlineMenu.com/tools-settings.htm#import-food-items" target="_blank">Click here</a> for instructions)</div>
            </div>

            <div id="mp-imp-fooditems" class="fileupload fileupload-new MPpadTop6px notranslate" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input spanImportFileName">
                        <i class="icon-file fileupload-exists"></i>
                        <span id="fileupload_filename" class="fileupload-preview"></span>
                    </div>
                    <span id="mp-file-import-button" class="btn btn-file">
					<span class="fileupload-new">Select file to Import ...</span>
					<span class="fileupload-exists">Change file to Import...</span>
					<input id="mycsv_file" type="file" name="mycsv_file[]">
					<input id="mycsv_action" type="hidden" name="mycsv_action[]" value="parse"> </span>
                </div>
            </div>

            <div id="datapreview-text" class="row MPpadTop9px" style="margin-left:0">
                <b>Data Preview</b>
            </div>

            <div class="row MPpadTop6px notranslate" style="margin-left:0">
                <select id="data_preview" size="10" style="font-family:&#39;Courier New&#39;, Courier, monospace; font-size:14px; width:515px">
                    <option value="">
                        NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                        DESCRIPTION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|
                        PRICE</option>
                    <option value="">Example Name #1..&nbsp;|&nbsp;Description for 1st item......&nbsp;|&nbsp;12.95</option>
                    <option value="">Example Name #2..&nbsp;|&nbsp;Description for 2nd item......&nbsp;|&nbsp;13.95</option>
                    <option value="">Example Name #3..&nbsp;|&nbsp;Description for 3rd item......&nbsp;|&nbsp;10.95</option>
                </select>
            </div>

        </div>

        <div class="modal-footer">
            <button id="dialog-importtext-ok" class="btn btn-primary not_in_demo notranslate disabled">OK</button>
            <button id="dialog-importtext-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myInsertUploadedImageDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header" id="ui-insert-upload-background">
            <button id="dialog-imgupload-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-imgupload-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Insert a new or previously uploaded logo or image on your menu. Click OK to place the image on your menu.
      					Once on the menu, drag the image to any position or click it to edit or remove it. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <button id="dialog-imgupload-edit-help" type="button" class="close helpme hide" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use &#39;Width&#39; and &#39;Height&#39; to resize the image. Use &#39;Left&#39; and &#39;Top&#39; for precise position.
      					Uncheck On Menu and click OK to remove the image from your menu. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="mp-insertUpImage-title" class="MPdialogTitleFont">Insert Uploaded Image</h3>
            <!-- <div id="mp-insertUpImage-subheader" class="MPdialogSubHeader">Add an uploaded image/logo anywhere on your menu</div> -->
            <div id="mp-insertUpImage-subheader" class="MPdialogSubHeader notranslate">Add a new or previously uploaded image to your menu</div>
            <h3 id="mp-editUpImage-title" class="MPdialogTitleFont hide">Edit Uploaded Image</h3>
            <div id="mp-editUpImage-subheader" class="MPdialogSubHeader hide notranslate">Edit, change, or remove this image from your menu</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanSizingPicCol">

                    <div id="mp-imgupload-search" class="hide" style="padding-top:0px">
                        <input id="mp-imgupload-find" type="text" class="search-query clearfix removeIEx" placeholder="Search">
                        <div id="mp-imgupload-megadiv" class="row MPpadTop9px">
                            <div class="megalist notranslate" id="myUploadImgList" style="height: 0px;"><ul style="visibility: visible;"></ul><div id="scrollbar" style="width: 7.5px;"></div></div>
                        </div>
                        <div id="mp-up-browse-note" class="text-info MPpadTop11px" style="padding-bottom:5px">
                            <span class="badge badge-info">i</span><em id="mp-up-helper-text" class="dont_select_ptr"> Feature unavailable before purchase</em>
                        </div>
                    </div>


                    <div id="mp-imgupload-options" class="">

                        <div class="row" style="padding-top:31px">
                            <div>
                                <label id="UiMaintainText" class="checkbox spanProportionPic muted"><input id="dialog-ui-ratio" type="checkbox" value="" disabled="">Maintain Proportion</label>
                            </div>
                        </div>

                        <div class="row MPpadTop6px">
                            <span class="MPpadTop5px spanPicWidthText UiText muted">Width:</span>
                            <span class="spanPicWidthTextIn" style="margin-left:0px;"><input id="dialog-ui-width" type="text" placeholder="-------" class="spanTextInGeneric" pattern="(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="" disabled="">&nbsp;<i id="mp-link-aspect-upload" class="icon-link-aspect" style="display: none;"></i></span>
                            <span class="MPpadTop5px spanPicHtText UiText muted" style="margin-left:0px">Height:</span>
                            <span class="spanPicHtTextIn" style="margin-left:0px;"><input id="dialog-ui-height" type="text" placeholder="-------" class="spanTextInGeneric" pattern="(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" name="drindent" value="" disabled=""></span>
                        </div>

                        <div class="row MPpadTop2px ">
                            <span class="MPpadTop5px spanPicWidthText">Left:</span>
                            <span class="spanPicWidthTextIn" style="margin-left:0px;"><input id="dialog-ui-left" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value=""></span>
                            <span class="MPpadTop5px spanPicHtText" style="margin-left:0px">Top:</span>
                            <span class="spanPicHtTextIn" style="margin-left:0px;"><input id="dialog-ui-top" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value=""></span>
                        </div>

                        <div id="ui-imagetype-watermark" class="MPpadTop3px" style="margin-left:91px">
                            <div>
                                <label id="ui-watermark-checkbox" class="checkbox spanColorizeAI"><input id="ui-watermark" type="checkbox" value="">Lighten:</label>
                            </div>
                            <div style="margin-left:0">
									<span class="SpanWaterPercent">
									<select id="ui-water-percent" style="width:52px;font-family:&#39;Courier New&#39;, Courier, monospace; font-size:15px;" disabled="disabled">
										<option value="0.9">1</option>
										<option value="0.8">2</option>
										<option value="0.7">3</option>
										<option value="0.6">4</option>
										<option value="0.5">5</option>
										<option value="0.4">6</option>
										<option value="0.3" selected="">7</option>
										<option value="0.2">8</option>
										<option value="0.1">9</option>
									</select>
									</span>
                            </div>
                        </div>
                        <div id="mp-up-ifuploaded" class="text-info hide" style="padding-top: 129px; display: none;">
                            <span class="badge badge-info">i</span><em id="mp-up-helper-text" class="dont_select_ptr">  TIP! Click Browse to use an image that has already been uploaded</em>
                        </div>
                    </div>
                </div>


                <div class="spanPicPreviewCol">

                    <div class="row MPpadTop5px" style="margin-left:0">
                        <b>Preview</b>
                    </div>

                    <div id="jansy-img-upload" class="fileupload fileupload-new fileupload-exif MPpadTop4px" data-provides="fileupload" style="margin-bottom:0px"><input type="hidden" value="">
                        <div id="myUploadPreview" class="fileupload-preview thumbnail PictureSampleBorderJansy" style="margin-bottom: 4px; line-height: 209px;"></div>
                        <div id="jansyUploadWell" class="MPpadTop9px well">
							<span id="mp-imgupload-btn" class="btn btn-file btn-small"><span class="fileupload-new"><i class="icon-camera"></i> Upload New Image...</span>
							<span class="fileupload-exists btn-small">Change Upload...</span><input id="file-imgupload" type="file" name=""></span><span>
							<a id="mp-imgupload-remove-btn" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="btn btn-small fileupload-exists btn-danger" data-dismiss="fileupload">Remove</a>
						</span></div>
                    </div>

                    <div class="MPpadTop9px">
                        <button id="mp-imgupload-browse" type="button" class="btn">Browse your Image Collection</button>
                        <button id="mp-imgupload-select" type="button" class="btn hide">Use This Image</button>
                        <button id="mp-imgupload-cancel-select" type="button" class="btn hide">Cancel</button>
                        <div id="mp-up-trash-div" class="MPpadTop16px hide">
                            <a id="mp-imgupload-trashcan" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteImage hide"><i class="icon-trash"></i> Delete Image</a>
                        </div>
                    </div>

                    <div id="mp-imgupload-deletepanel" class="hide">
                        <hr style="margin: 6px 0 15px 0">
                        <div class="row MPpadTop1px" style="margin-left:0">
                            <div class="text-info" style="padding-bottom:5px">
                                <span class="badge badge-important">!</span>
                                <em>Heads up! This image will be permanently deleted from storage and ALL menus that it appears on. You won't be able to undo this action. If it's on your menu and you just want to remove it, click Cancel and then uncheck the On Menu box.</em>
                            </div>
                        </div>
                        <span class="pull-right">
					<a id="mp-imgupload-deletebtn" role="button" class="btn btn-danger notranslate">Delete</a>
					<span style="padding-left:5px">
					<a id="mp-imgupload-cancelbtn" role="button" class="btn">Cancel</a>
					</span>
				</span>
                    </div>

                </div>
            </div>
        </div>

        <div id="mp-imgupload-footer" class="modal-footer">
		    <span id="mp-imgupload-onmenu" class="OnMenuCheckBox hide">
			    <label class="checkbox pull-left clearfix" style="float:left;"><input id="dialog-ui-onmenu" type="checkbox" checked="checked">On Menu</label>
		    </span>
            <button id="dialog-imgupload-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-imgupload-cancel" class="btn  " data-dismiss="modal">Cancel</button>
        </div>

    </form>
</div>


<div id="myInsertiMenuProImageDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form id="dialog-ai-form" class="modal-form">

        <div class="modal-header" id="ui-insert-ai-background">
            <button id="dialog-insertai-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="mp-insertIMPImage-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Choose an image from the Artisan Image collection (over 1500 images).
				Once chosen, click OK to place on your menu.
				Once on the menu, drag the image to any position or click it to edit, colorize, or remove it. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <button id="mp-editIMPImage-help" type="button" class="close helpme hide" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use &#39;Width&#39; and &#39;Height&#39; to resize the image. Use &#39;Left&#39; and &#39;Top&#39; for precise position. Use &#39;Colorize&#39; to change its color (applies to some images).
				Uncheck On Menu and click OK to remove the image from your menu. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="mp-insertIMPImage-title" class="MPdialogTitleFont">Insert Artisan Image</h3>
            <div id="mp-insertIMPImage-subheader" class="MPdialogSubHeader notranslate">Add an Ai graphic anywhere on your menu</div>
            <h3 id="mp-editIMPImage-title" class="MPdialogTitleFont hide">Edit Artisan Image</h3>
            <div id="mp-editIMPImage-subheader" class="MPdialogSubHeader hide notranslate">Edit, change, or remove this image</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanSizingPicColAI ">

                    <div id="mp-view-collection" class="hide">
                        <div class="btn-group ">
                            <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" data-placement="bottom" title="view this collection">view<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-food&#39;); return false;">
                                        <i id="mp-view-food" class="no-menu-icon"></i> Food Photo Objects</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-graphic&#39;); return false;">
                                        <i id="mp-view-graphic" class="no-menu-icon"></i> Graphic Illustrations</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-grunge&#39;); return false;">
                                        <i id="mp-view-grunge" class="icon-ok"></i> Grunge Stamps</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-hand&#39;); return false;">
                                        <i id="mp-view-hand" class="no-menu-icon"></i> Hand Drawn Vignettes</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-loose&#39;); return false;">
                                        <i id="mp-view-loose" class="no-menu-icon"></i> Loose Ink Drawings</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-pen&#39;); return false;">
                                        <i id="mp-view-pen" class="no-menu-icon"></i> Pen and Ink Drawings</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-torn&#39;); return false;">
                                        <i id="mp-view-torn" class="no-menu-icon"></i> Torn Color Blocks</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-vintage&#39;); return false;">
                                        <i id="mp-view-vintage" class="no-menu-icon"></i> Vintage Etchings</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-woodcut&#39;); return false;">
                                        <i id="mp-view-woodcut" class="no-menu-icon"></i> Woodcut Illustrations</a></li>
                                <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" data-toggle="modal" onclick="toggleArtView(&#39;#mp-view-zephyr&#39;); return false;">
                                        <i id="mp-view-zephyr" class="no-menu-icon"></i> Zephyr Icons</a></li>
                            </ul>
                        </div>
                        <input id="mp-ai-find" type="text" class="search-query clearfix removeIEx" placeholder="Search">
                    </div>


                    <div id="mp-artisan-image-search" class="hide" style="padding-top:0px">
                        <div id="mp-ai-megadiv" class="row MPpadTop9px">
                            <div class="megalist notranslate" id="myArtisanList"><ul style="visibility: visible; left: 0px; top: 0px;"><li class="megalistItem" list-index="0" style="left: 0px; top: 0px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Authentic_bw.svg" src="./iMenuPro_files/BBQ_Authentic_bw-thumb.png">BBQ Authentic bw</li><li class="megalistItem" list-index="1" style="left: 0px; top: 61px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Authentic_color.svg" src="./iMenuPro_files/BBQ_Authentic_color-thumb.png">BBQ Authentic color</li><li class="megalistItem" list-index="2" style="left: 0px; top: 122px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Authentic-2_bw.svg" src="./iMenuPro_files/BBQ_Authentic-2_bw-thumb.png">BBQ Authentic-2 bw</li><li class="megalistItem" list-index="3" style="left: 0px; top: 183px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Authentic-2_color.svg" src="./iMenuPro_files/BBQ_Authentic-2_color-thumb.png">BBQ Authentic-2 color</li><li class="megalistItem" list-index="4" style="left: 0px; top: 244px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Delicious_bw.svg" src="./iMenuPro_files/BBQ_Delicious_bw-thumb.png">BBQ Delicious bw</li><li class="megalistItem" list-index="5" style="left: 0px; top: 305px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Delicious_color.svg" src="./iMenuPro_files/BBQ_Delicious_color-thumb.png">BBQ Delicious color</li><li class="megalistItem" list-index="6" style="left: 0px; top: 366px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Pork_bw.svg" src="./iMenuPro_files/BBQ_Pork_bw-thumb.png">BBQ Pork bw</li><li class="megalistItem" list-index="7" style="left: 0px; top: 427px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Pork_color.svg" src="./iMenuPro_files/BBQ_Pork_color-thumb.png">BBQ Pork color</li><li class="megalistItem" list-index="8" style="left: 0px; top: 488px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Real_Smoke_bw.svg" src="./iMenuPro_files/BBQ_Real_Smoke_bw-thumb.png">BBQ Real Smoke bw</li><li class="megalistItem" list-index="9" style="left: 0px; top: 549px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Real_Smoke_color.svg" src="./iMenuPro_files/BBQ_Real_Smoke_color-thumb.png">BBQ Real Smoke color</li><li class="megalistItem" list-index="10" style="left: 0px; top: 610px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Real_Smoke-2_bw.svg" src="./iMenuPro_files/BBQ_Real_Smoke-2_bw-thumb.png">BBQ Real Smoke-2 bw</li><li class="megalistItem" list-index="11" style="left: 0px; top: 671px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Real_Smoke-2_color.svg" src="./iMenuPro_files/BBQ_Real_Smoke-2_color-thumb.png">BBQ Real Smoke-2 color</li><li class="megalistItem" list-index="12" style="left: 0px; top: 732px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Time_bw.svg" src="./iMenuPro_files/BBQ_Time_bw-thumb.png">BBQ Time bw</li><li class="megalistItem" list-index="13" style="left: 0px; top: 793px;"><img style="margin:0 5px 0 3px" url="images/Grunge_Stamps/BBQ_Time_color.svg" src="./iMenuPro_files/BBQ_Time_color-thumb.png">BBQ Time color</li></ul><div id="scrollbar" style="width: 7.5px; height: 38px; top: 1px;"></div></div>
                        </div>
                        <div id="" class="text-info MPpadTop10px" style="padding-bottom:5px">
                            <span class="badge badge-info">i</span><em>&nbsp;Use 'View' to view more images</em>
                        </div>
                    </div>

                    <div id="mp-artisan-options">
                        <div class="row" style="padding-top:31px">
                            <div>
                                <label id="AiMaintainText" class="checkbox spanProportionPic muted"><input id="dialog-ai-ratio" type="checkbox" value="" disabled="">Maintain Proportion</label>
                            </div>
                        </div>

                        <div class="row MPpadTop6px">
                            <span class="MPpadTop5px spanPicWidthText AiText muted">Width:</span>
                            <span class="spanPicWidthTextInAI" style="margin-left:0px;"><input id="dialog-ai-width" title="Minimum 0.052 inches" type="text" class="spanTextInGeneric" pattern="(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="" disabled="">&nbsp;<i id="mp-link-aspect-ai" class="icon-link-aspect" style="display: none;"></i></span>
                            <span class="MPpadTop5px spanPicHtText AiText muted" style="margin-left:0px">Height:</span>
                            <span class="spanPicHtTextIn" style="margin-left:0px;"><input id="dialog-ai-height" type="text" placeholder="-------" class="spanTextInGeneric" pattern="(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" name="drindent" value="" disabled=""></span>
                        </div>

                        <div class="row MPpadTop2px ">
                            <span class="MPpadTop5px spanPicWidthText">Left:</span>
                            <span class="spanPicWidthTextInAI" style="margin-left:0px;"><input id="dialog-ai-left" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|inx|cm|mm|px)?" value=""></span>
                            <span class="MPpadTop5px spanPicHtText" style="margin-left:0px">Top:</span>
                            <span class="spanPicHtTextIn" style="margin-left:0px;"><input id="dialog-ai-top" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|inx|cm|mm|px)?" value=""></span>
                        </div>

                        <div class="row MPpadTop3px notranslate">
                            <div>
                                <label class="checkbox spanFlipPicAI"><input id="dialog-ai-flip" type="checkbox" value="">Flip</label>
                            </div>
                            <div>
                                <label class="checkbox spanMirrorPicAI" style="margin-left:0px;"><input id="dialog-ai-mirror" type="checkbox" value="">Mirror</label>
                            </div>

                            <div id="ai-imagetype-svg">
                                <div>
                                    <label id="mp-colorize-ai-checkbox" class="checkbox spanColorizeAI" style="margin-left:0px;"><input id="dialog-ai-colorize" type="checkbox" value="">Colorize:</label>
                                </div>
                                <div style="margin-left:0">
                                    <input id="dialog-picture-color" value="56697d" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                                </div>
                            </div>

                            <div id="ai-imagetype-watermark" class="hide">
                                <div>
                                    <label id="ai-watermark-checkbox" class="checkbox spanColorizeAI" style="margin-left:0px;"><input id="ai-watermark" type="checkbox" value="">Lighten:</label>
                                </div>
                                <div style="margin-left:0">
									<span class="SpanWaterPercent">
									<select id="ai-water-percent" style="width:52px;font-family:&#39;Courier New&#39;, Courier, monospace; font-size:15px;" disabled="disabled">
										<option value="0.9">1</option>
										<option value="0.8">2</option>
										<option value="0.7">3</option>
										<option value="0.6">4</option>
										<option value="0.5">5</option>
										<option value="0.4">6</option>
										<option value="0.3" selected="">7</option>
										<option value="0.2">8</option>
										<option value="0.1">9</option>
									</select>
								</span></div>
                            </div>

                            <div id="ai-imagetype-png" class="row spanPNGColorCol MPpadTop2px hide">
                                <div>
                                    <label id="mp-colorize-png-checkbox" class="checkbox spanColorizePNG" style="margin-left:0px;"><input id="dialog-ai-colorizePNG" type="checkbox" value="">Colorize:</label>
                                </div>
                                <div style="margin-left:0">
                                    <input id="dialog-picture-colorPNG" value="56697d" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                                </div>
                            </div>
                            <div id="ai-imagetype-svgmsg" class="row spanPNGColorCol MPpadTop4px hide">
                                <em><small class="spanSVGColorizeMsg muted" style="margin-left:0px;">to lighten, use Colorize</small></em>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="spanPicPreviewCol">
                    <div class="row MPpadTop5px" style="margin-left:0">
                        <b>Preview</b>
                    </div>
                    <div class="MPpadTop4px">
                        <div id="myArtisanPreview" class="thumbnail AISampleBordery img-artisan"></div>
                        <div class="MPpadTop19px">
                            <button id="mp-artisan-browse" type="button" class="btn">Browse Artisan Images</button>
                            <button id="mp-artisan-image-select" type="button" class="btn hide">Use This Image</button>
                            <button id="mp-artisan-cancel-select" type="button" class="btn hide">Cancel</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="mp-artisan-footer" class="modal-footer">
		    <span id="mp-IMPImage-onmenu" class="OnMenuCheckBox hide">
			    <label class="checkbox clearfix" style="float:left;"><input id="dialog-ai-onmenu" type="checkbox" checked="checked">On Menu</label>
		    </span>
            <button id="dialog-ai-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-ai-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#f15a24" data-color="rgb(241, 90, 36)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 90, 36);"></span></span><span title="#29abe2" data-color="rgb(41, 171, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(41, 171, 226);"></span></span><span title="#009245" data-color="rgb(0, 146, 69)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 146, 69);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-5"><span title="#075099" data-color="rgb(7, 80, 153)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(7, 80, 153);"></span></span><span title="#aaaaaa" data-color="rgb(170, 170, 170)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(170, 170, 170);"></span></span><span title="#e21e79" data-color="rgb(226, 30, 121)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(226, 30, 121);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-6"><span title="#e3e3e3" data-color="rgb(227, 227, 227)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(227, 227, 227);"></span></span><span title="#e6ddd5" data-color="rgb(230, 221, 213)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(230, 221, 213);"></span></span><span title="#eeeee2" data-color="rgb(238, 238, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(238, 238, 226);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div><div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#f15a24" data-color="rgb(241, 90, 36)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 90, 36);"></span></span><span title="#29abe2" data-color="rgb(41, 171, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(41, 171, 226);"></span></span><span title="#009245" data-color="rgb(0, 146, 69)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 146, 69);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-5"><span title="#075099" data-color="rgb(7, 80, 153)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(7, 80, 153);"></span></span><span title="#aaaaaa" data-color="rgb(170, 170, 170)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(170, 170, 170);"></span></span><span title="#e21e79" data-color="rgb(226, 30, 121)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(226, 30, 121);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-6"><span title="#e3e3e3" data-color="rgb(227, 227, 227)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(227, 227, 227);"></span></span><span title="#e6ddd5" data-color="rgb(230, 221, 213)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(230, 221, 213);"></span></span><span title="#eeeee2" data-color="rgb(238, 238, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(238, 238, 226);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myBackgroundDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-background-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-background-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Choose a menu background or &#39;(none)&#39; to remove it. Or choose &#39;(paper color)&#39; for a solid color.
      			Use &#39;Margin&#39; to push the background away from the edge of the paper.
      			Use &#39;Stretch To Fit&#39; to stretch the background to fit your paper size. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Menu Background</h3>
            <div class="MPdialogSubHeader">Select (or remove) a menu background</div>
        </div>

        <div class="modal-body">

            <div class="row">
                <div class="spanBackgroundName notranslate">
                    <select id="dialog-background-select" size="10" style="width:254px">
                        <option value="none" selected="">(none)</option>
                        <option value="paper">(paper color)</option>
                        <optgroup label="iMenuPro Backgrounds">
                            <option value="Alaskan_Crab.jpg">Alaskan Crab</option>
                            <option value="Alessi_Corkscrew.jpg">Alessi Corkscrew</option>
                            <option value="Anchor.png">Anchor</option>
                            <option value="Asian_Gate.png">Asian Gate</option>
                            <option value="Aztec_Wall.jpg">Aztec Wall</option>
                            <option value="Beer_Stein.png">Beer Stein</option>
                            <option value="Berries.png">Berries</option>
                            <option value="Berry_Dots.png">Berry Dots</option>
                            <option value="Bonsai_Tree.svg">Bonsai Tree</option>
                            <option value="Bowling.png">Bowling</option>
                            <option value="Bread_Bowl.png">Bread Bowl</option>
                            <option value="Buffalo.jpg">Buffalo</option>
                            <option value="Cactus.png">Cactus</option>
                            <option value="Cafe_Royal.png">Cafe Royal</option>
                            <option value="Casblanca_Sign.jpg">Casblanca Sign</option>
                            <option value="Casino_Dealer.png">Casino Dealer</option>
                            <option value="Celtic.png">Celtic</option>
                            <option value="Chalkboard.jpg">Chalkboard</option>
                            <option value="Charcuterie_Pig.jpg">Charcuterie Pig</option>
                            <option value="Charcuterie_Pig_white.jpg">Charcuterie Pig white</option>
                            <option value="Chef_1.png">Chef 1</option>
                            <option value="Chef_2.jpg">Chef 2</option>
                            <option value="Chef_Grill.jpg">Chef Grill</option>
                            <option value="Chicken.png">Chicken</option>
                            <option value="Chicken_Proper.jpg">Chicken Proper</option>
                            <option value="Chili_Bowls.png">Chili Bowls</option>
                            <option value="Chili_Peppers.png">Chili Peppers</option>
                            <option value="Christmas_Tree.jpg">Christmas Tree</option>
                            <option value="City_Cocktails.png">City Cocktails</option>
                            <option value="City_Empire_Building.jpg">City Empire Building</option>
                            <option value="Cityscape_1.png">Cityscape 1</option>
                            <option value="Cityscape_2.png">Cityscape 2</option>
                            <option value="Cityscape_Towers.png">Cityscape Towers</option>
                            <option value="Clouds.png">Clouds</option>
                            <option value="Coat_of_Arms.png">Coat of Arms</option>
                            <option value="Cockerel.png">Cockerel</option>
                            <option value="Cocktail_Shaker.png">Cocktail Shaker</option>
                            <option value="Coffee_1.png">Coffee 1</option>
                            <option value="Coffee_2.png">Coffee 2</option>
                            <option value="Coffee_3.png">Coffee 3</option>
                            <option value="Coffee_4.png">Coffee 4</option>
                            <option value="Concrete.jpg">Concrete</option>
                            <option value="Corkscrew.jpg">Corkscrew</option>
                            <option value="Cornucopia.jpg">Cornucopia</option>
                            <option value="Crawfish_3.jpg">Crawfish 3</option>
                            <option value="Crown.png">Crown</option>
                            <option value="Diamonds.png">Diamonds</option>
                            <option value="Dine_Her.jpg">Dine Her</option>
                            <option value="Diner_Breakfast.png">Diner Breakfast</option>
                            <option value="Diner_Counter.png">Diner Counter</option>
                            <option value="Diner_Plate.png">Diner Plate</option>
                            <option value="Diner_Plate-2.png">Diner Plate-2</option>
                            <option value="Diner_Wurlitzer.png">Diner Wurlitzer</option>
                            <option value="Dinner_Plate_2.png">Dinner Plate 2</option>
                            <option value="Dinner_Table.png">Dinner Table</option>
                            <option value="Donut.png">Donut</option>
                            <option value="Dragons.jpg">Dragons</option>
                            <option value="Dragons-2.jpg">Dragons-2</option>
                            <option value="Entomology.png">Entomology</option>
                            <option value="Fairies.jpg">Fairies</option>
                            <option value="Fall_Leaves.png">Fall Leaves</option>
                            <option value="Fall_Leaves_2.png">Fall Leaves 2</option>
                            <option value="Fan_and_Vase.jpg">Fan and Vase</option>
                            <option value="Farm_Hen.png">Farm Hen</option>
                            <option value="Farm_to_Table.jpg">Farm to Table</option>
                            <option value="Farm_to_Table_white.jpg">Farm to Table white</option>
                            <option value="Feast.png">Feast</option>
                            <option value="Fire_Brush.jpg">Fire Brush</option>
                            <option value="Fish_and_Sea.png">Fish and Sea</option>
                            <option value="Fish_Leaping.jpg">Fish Leaping</option>
                            <option value="Fish_Sign.png">Fish Sign</option>
                            <option value="Flags_Pagent.png">Flags Pagent</option>
                            <option value="Flag_USA.jpg">Flag USA</option>
                            <option value="Flower_Deco.png">Flower Deco</option>
                            <option value="Flower_Power.png">Flower Power</option>
                            <option value="Flowers_1.png">Flowers 1</option>
                            <option value="Flowers_2.png">Flowers 2</option>
                            <option value="Flowers_3.jpg">Flowers 3</option>
                            <option value="Flowers_4.jpg">Flowers 4</option>
                            <option value="Flowers_5.jpg">Flowers 5</option>
                            <option value="Flowers_Mucha.png">Flowers Mucha</option>
                            <option value="Fountain.png">Fountain</option>
                            <option value="Frosty_Snowman.svg">Frosty Snowman</option>
                            <option value="Fruit_Bowl.png">Fruit Bowl</option>
                            <option value="Fruit.png">Fruit</option>
                            <option value="Fuji_Wave.jpg">Fuji Wave</option>
                            <option value="Garden_Asparagus.png">Garden Asparagus</option>
                            <option value="Garden_Cafe.png">Garden Cafe</option>
                            <option value="Garden_Zen.png">Garden Zen</option>
                            <option value="Geo_Split_1.jpg">Geo Split 1</option>
                            <option value="Geo_Split_2.jpg">Geo Split 2</option>
                            <option value="Geo_Square.jpg">Geo Square</option>
                            <option value="Gingham.jpg">Gingham</option>
                            <option value="Gingham_Cream.png">Gingham Cream</option>
                            <option value="Glass_Butterlfy.jpg">Glass Butterlfy</option>
                            <option value="Gondola.png">Gondola</option>
                            <option value="Grapes_of_Wrath.jpg">Grapes of Wrath</option>
                            <option value="Green_Leaf.jpg">Green Leaf</option>
                            <option value="Green_Stucco.jpg">Green Stucco</option>
                            <option value="Guitar.jpg">Guitar</option>
                            <option value="Hamburger.png">Hamburger</option>
                            <option value="Hardware_Bolts.jpg">Hardware Bolts</option>
                            <option value="Hardware_Keys.png">Hardware Keys</option>
                            <option value="Harvest.jpg">Harvest</option>
                            <option value="Herbs.png">Herbs</option>
                            <option value="Hot_Air_Balloon.png">Hot Air Balloon</option>
                            <option value="Ice_Cream.png">Ice Cream</option>
                            <option value="Indian_Orange.jpg">Indian Orange</option>
                            <option value="Italia_Basil.jpg">Italia Basil</option>
                            <option value="Japan_Waves.jpg">Japan Waves</option>
                            <option value="Japan_Waves_2.jpg">Japan Waves 2</option>
                            <option value="Japan_Waves_3.jpg">Japan Waves 3</option>
                            <option value="Jasmine_Tea.png">Jasmine Tea</option>
                            <option value="Jazz_Notes.jpg">Jazz Notes</option>
                            <option value="Jug_and_Olives.jpg">Jug and Olives</option>
                            <option value="Kebab_Plate.png">Kebab Plate</option>
                            <option value="Kids_Alien.png">Kids Alien</option>
                            <option value="Kids_Circus_Lion.png">Kids Circus Lion</option>
                            <option value="Kitsch_Woman.png">Kitsch Woman</option>
                            <option value="Lasso.png">Lasso</option>
                            <option value="Leaves.jpg">Leaves</option>
                            <option value="Lobster_1.png">Lobster 1</option>
                            <option value="Lobster_1_black.png">Lobster 1 black</option>
                            <option value="Lobster_1_inverted.png">Lobster 1 inverted</option>
                            <option value="Lobster_2.png">Lobster 2</option>
                            <option value="Lodge_Deer.jpg">Lodge Deer</option>
                            <option value="Mex_Ancient.jpg">Mex Ancient</option>
                            <option value="Mexican_Pot.png">Mexican Pot</option>
                            <option value="Mex_Tex.png">Mex Tex</option>
                            <option value="Micmac.png">Micmac</option>
                            <option value="Milkshake.png">Milkshake</option>
                            <option value="Mothers_Day_Roses.jpg">Mother's Day Roses</option>
                            <option value="New_Year.jpg">New Year</option>
                            <option value="Old_Paper_1.jpg">Old Paper 1</option>
                            <option value="Old_Paper_2.jpg">Old Paper 2</option>
                            <option value="Old_Paper_3.jpg">Old Paper 3</option>
                            <option value="Old_Star.jpg">Old Star</option>
                            <option value="Old_West.png">Old West</option>
                            <option value="Olive_Branch.png">Olive Branch</option>
                            <option value="Olive_Branch_2.jpg">Olive Branch 2</option>
                            <option value="Organic_Market.jpg">Organic Market</option>
                            <option value="Palm_Tree.png">Palm Tree</option>
                            <option value="Panel_Fox.jpg">Panel Fox</option>
                            <option value="Panel_Lobster.jpg">Panel Lobster</option>
                            <option value="Panel_Sunflower.jpg">Panel Sunflower</option>
                            <option value="Parchment_1.jpg">Parchment 1</option>
                            <option value="Pasta_Jive.png">Pasta Jive</option>
                            <option value="Pasta.png">Pasta</option>
                            <option value="Pastoral.png">Pastoral</option>
                            <option value="Pattern_Flecks.png">Pattern Flecks</option>
                            <option value="Pattern_Floral.png">Pattern Floral</option>
                            <option value="Pattern_Grunge.png">Pattern Grunge</option>
                            <option value="Pattern_Lattice.png">Pattern Lattice</option>
                            <option value="Pattern_Messa.png">Pattern Messa</option>
                            <option value="Pattern_Peppers.png">Pattern Peppers</option>
                            <option value="Pattern_Seagulls.jpg">Pattern Seagulls</option>
                            <option value="Pattern_Spiro_1.png">Pattern Spiro 1</option>
                            <option value="Pattern_Spiro_2.png">Pattern Spiro 2</option>
                            <option value="Pattern_Tang.png">Pattern Tang</option>
                            <option value="Pattern_Twirls.png">Pattern Twirls</option>
                            <option value="Pattern_Vegtables.png">Pattern Vegtables</option>
                            <option value="Pattern_Victorian.jpg">Pattern Victorian</option>
                            <option value="Peacock.png">Peacock</option>
                            <option value="Pear.png">Pear</option>
                            <option value="Philias_Fogg.png">Philias Fogg</option>
                            <option value="Piano.png">Piano</option>
                            <option value="Pisa_Tower.svg">Pisa Tower</option>
                            <option value="Pisa_Tower_Paper.jpg">Pisa Tower Paper</option>
                            <option value="Pitcher.png">Pitcher</option>
                            <option value="Pizza_Deliverer.png">Pizza Deliverer</option>
                            <option value="Pizza.png">Pizza</option>
                            <option value="Playtime.png">Playtime</option>
                            <option value="Playtime_white.jpg">Playtime white</option>
                            <option value="Pots.png">Pots</option>
                            <option value="Potted_Plants.png">Potted Plants</option>
                            <option value="Rajah.png">Rajah</option>
                            <option value="Raspy_Raspberry.jpg">Raspy Raspberry</option>
                            <option value="Recycled_Kraft_Paper.jpg">Recycled Kraft Paper</option>
                            <option value="Recycled_Paper.jpg">Recycled Paper</option>
                            <option value="Red_Stucco.jpg">Red Stucco</option>
                            <option value="Rice_Bowl_1.png">Rice Bowl 1</option>
                            <option value="Rice_Bowl_2.png">Rice Bowl 2</option>
                            <option value="RISD_Fish_Fossil.svg">RISD Fish Fossil</option>
                            <option value="Roses_1.jpg">Roses 1</option>
                            <option value="Rothko.png">Rothko</option>
                            <option value="Rustic_Canvas.jpg">Rustic Canvas</option>
                            <option value="Sakura.jpg">Sakura</option>
                            <option value="Seafood_Array.png">Seafood Array</option>
                            <option value="Seahorses.png">Seahorses</option>
                            <option value="Shamrocks.png">Shamrocks</option>
                            <option value="Shrimp.png">Shrimp</option>
                            <option value="Shrimp_Skewer.png">Shrimp Skewer</option>
                            <option value="Sleigh.png">Sleigh</option>
                            <option value="Snowflake.png">Snowflake</option>
                            <option value="Spa_Blue.jpg">Spa Blue</option>
                            <option value="Spa_Lotus.png">Spa Lotus</option>
                            <option value="Spaghetti.png">Spaghetti</option>
                            <option value="Sports_Balls.png">Sports Balls</option>
                            <option value="Sports_Grass.jpg">Sports Grass</option>
                            <option value="Sports_Grass-2.jpg">Sports Grass-2</option>
                            <option value="Sporty.png">Sporty</option>
                            <option value="Stars_and_Stripes.png">Stars and Stripes</option>
                            <option value="Strawberries.jpg">Strawberries</option>
                            <option value="Sun_King.png">Sun King</option>
                            <option value="Sun_King_2.png">Sun King 2</option>
                            <option value="Sun_King_3.jpg">Sun King 3</option>
                            <option value="Sunrah.jpg">Sunrah</option>
                            <option value="Swirl-1.svg">Swirl-1</option>
                            <option value="Swirl-3.svg">Swirl-3</option>
                            <option value="Swirl-4.svg">Swirl-4</option>
                            <option value="Swirl-6.svg">Swirl-6</option>
                            <option value="Swirl-6b.svg">Swirl-6b</option>
                            <option value="Swirl-7.svg">Swirl-7</option>
                            <option value="Swirl-8.svg">Swirl-8</option>
                            <option value="Swirl-9.svg">Swirl-9</option>
                            <option value="Swish-1.jpg">Swish-1</option>
                            <option value="Swish-2.svg">Swish-2</option>
                            <option value="Tap_Room.png">Tap Room</option>
                            <option value="Tea_Cup.png">Tea Cup</option>
                            <option value="Thai_Room.jpg">Thai Room</option>
                            <option value="Tomato_Basil.jpg">Tomato Basil</option>
                            <option value="Torn_Paper_BBQ.jpg">Torn Paper BBQ</option>
                            <option value="Torn_Paper_Tequila.png">Torn Paper Tequila</option>
                            <option value="Turkey.svg">Turkey</option>
                            <option value="Valentine_Be_Mine.jpg">Valentine Be Mine</option>
                            <option value="Vegtables.png">Vegtables</option>
                            <option value="Vintage_Floral_1.jpg">Vintage Floral 1</option>
                            <option value="Vintage_Pig.jpg">Vintage Pig</option>
                            <option value="Vintage_Softie.jpg">Vintage Softie</option>
                            <option value="Watercolor_Buzzy_Bee.jpg">Watercolor Buzzy Bee</option>
                            <option value="Watercolor_Fish.jpg">Watercolor Fish</option>
                            <option value="Watercolor_Sea_Flowers.jpg">Watercolor Sea Flowers</option>
                            <option value="Waves.png">Waves</option>
                            <option value="Wine_and_Grapes.png">Wine and Grapes</option>
                            <option value="Wine_Bar.png">Wine Bar</option>
                            <option value="Wine_Bottle.png">Wine Bottle</option>
                            <option value="Wine_Glass_1.png">Wine Glass 1</option>
                            <option value="Wine_Glass_2.png">Wine Glass 2</option>
                            <option value="Woodsy.jpg">Woodsy</option>
                            <option value="Woodsy-2.jpg">Woodsy-2</option>
                        </optgroup>
                        <optgroup label="Color Blocks">
                            <option value="zColor_Block1.png">Color Block1</option>
                            <option value="zColor_Block1-b.png">Color Block1-b</option>
                            <option value="zColor_Block2.png">Color Block2</option>
                            <option value="zColor_Block2-b.png">Color Block2-b</option>
                            <option value="zColor_Block3.png">Color Block3</option>
                            <option value="zColor_Block3-b.png">Color Block3-b</option>
                            <option value="zColor_Block5.png">Color Block5</option>
                            <option value="zColor_Block5-b.png">Color Block5-b</option>
                            <option value="zColor_Block6.png">Color Block6</option>
                            <option value="zColor_Block6-b.png">Color Block6-b</option>
                            <option value="zColor_Block7.png">Color Block7</option>
                            <option value="zColor_Block7-b.png">Color Block7-b</option>
                            <option value="zColor_Block8.png">Color Block8</option>
                            <option value="zColor_Block8-b.png">Color Block8-b</option>
                            <option value="zColor_Block10.png">Color Block10</option>
                            <option value="zColor_Block10-b.png">Color Block10-b</option>
                            <option value="zColor_Block11.png">Color Block11</option>
                            <option value="zColor_Block11-b.png">Color Block11-b</option>
                            <option value="zColor_Block13.png">Color Block13</option>
                            <option value="zColor_Block13-b.png">Color Block13-b</option>
                            <option value="zColor_Block14.png">Color Block14</option>
                            <option value="zColor_Block14-b.png">Color Block14-b</option>
                            <option value="zColor_Block15.png">Color Block15</option>
                            <option value="zColor_Block15-b.png">Color Block15-b</option>
                            <option value="zColor_Block16.png">Color Block16</option>
                            <option value="zColor_Block16-b.png">Color Block16-b</option>
                            <option value="zColor_Block20.png">Color Block20</option>
                            <option value="zColor_Block20-b.png">Color Block20-b</option>
                            <option value="zColor_Block21.png">Color Block21</option>
                            <option value="zColor_Block21-b.png">Color Block21-b</option>
                            <option value="zColor_Block22.png">Color Block22</option>
                            <option value="zColor_Block22-b.png">Color Block22-b</option>
                            <option value="zColor_Block23.png">Color Block23</option>
                            <option value="zColor_Block23-b.png">Color Block23-b</option>
                            <option value="zColor_Block24.png">Color Block24</option>
                            <option value="zColor_Block24-b.png">Color Block24-b</option>
                            <option value="zColor_Block25.png">Color Block25</option>
                            <option value="zColor_Block25-b.png">Color Block25-b</option>
                            <option value="zColor_Block26.png">Color Block26</option>
                            <option value="zColor_Block26-b.png">Color Block26-b</option>
                            <option value="zColor_Block27.png">Color Block27</option>
                            <option value="zColor_Block27-b.png">Color Block27-b</option>
                            <option value="zColor_Block28.png">Color Block28</option>
                            <option value="zColor_Block28-b.png">Color Block28-b</option>
                            <option value="zColor_Block30.png">Color Block30</option>
                            <option value="zColor_Block30-b.png">Color Block30-b</option>
                            <option value="zColor_Block31.png">Color Block31</option>
                            <option value="zColor_Block31-b.png">Color Block31-b</option>
                            <option value="zColor_Block32.png">Color Block32</option>
                            <option value="zColor_Block32-b.png">Color Block32-b</option>
                            <option value="zColor_Block34.png">Color Block34</option>
                            <option value="zColor_Block34-b.png">Color Block34-b</option>
                            <option value="zColor_Block35.png">Color Block35</option>
                            <option value="zColor_Block35-b.png">Color Block35-b</option>
                        </optgroup>
                        <optgroup label="Graphic Illustration Watermarks">
                            <option value="zgAi_American Breakfast.svg">American Breakfast</option>
                            <option value="zgAi_American_Waitress.svg">American_Waitress</option>
                            <option value="zgAi_Barbeque-Grill-Watermark.png">Barbeque Grill Watermark</option>
                            <option value="zgAi_Barbeque-Pig.svg">Barbeque Pig</option>
                            <option value="zgAi_BBQ_Grillman.png">BBQ Grillman</option>
                            <option value="zgAi_Beef-1.svg">Beef-1</option>
                            <option value="zgAi_Beef_Tile.png">Beef Tile</option>
                            <option value="zgAi_Beef-Run.jpg">Beef Run</option>
                            <option value="zgAi_Beer.png">Beer</option>
                            <option value="zgAi_Bistro_Couple.svg">Bistro Couple</option>
                            <option value="zgAi_Bistro_Scene.png">Bistro Scene</option>
                            <option value="zgAi_Brew_Pub.jpg">Brew Pub</option>
                            <option value="zgAi_Burger_-&amp;_Fries.jpg">Burger &amp; Fries</option>
                            <option value="zgAi_Cappuccino.png">Cappuccino</option>
                            <option value="zgAi_Chinese_Cookie.svg">Chinese Cookie</option>
                            <option value="zgAi_Chinese_Dragon.png">Chinese Dragon</option>
                            <option value="zgAi_Chinese_Take-Out.svg">Chinese Take-Out</option>
                            <option value="zgAi_Coffee.png">Coffee</option>
                            <option value="zgAi_Crawfish.svg">Crawfish</option>
                            <option value="zgAi_Easter.jpg">Easter</option>
                            <option value="zgAi_Fall_Acorn.png">Fall Acorn</option>
                            <option value="zgAi_Fall_Leaf-1.png">Fall Leaf-1</option>
                            <option value="zgAi_Fall_Leaf-2.png">Fall Leaf-2</option>
                            <option value="zgAi_Fall_Leaf-3.jpg">Fall Leaf-3</option>
                            <option value="zgAi_Fall_Leaves.jpg">Fall Leaves</option>
                            <option value="zgAi_Fish-1.svg">Fish-1</option>
                            <option value="zgAi_Fish-2.svg">Fish-2</option>
                            <option value="zgAi_Fish-3.svg">Fish-3</option>
                            <option value="zgAi_Fish-4.svg">Fish-4</option>
                            <option value="zgAi_Fish-5.svg">Fish-5</option>
                            <option value="zgAi_Fish_Catch.png">Fish Catch</option>
                            <option value="zgAi_Greek_Salad.jpg">Greek Salad</option>
                            <option value="zgAi_India_Elephant.svg">India Elephant</option>
                            <option value="zgAi_India_Woman.png">India Woman</option>
                            <option value="zgAi_Italian_Buildings.jpg">Italian Buildings</option>
                            <option value="zgAi_Italian_Chef.png">Italian Chef</option>
                            <option value="zgAi_Italian_Fish_Plate.png">Italian Fish Plate</option>
                            <option value="zgAi_Italian_Scene.jpg">Italian Scene</option>
                            <option value="zgAi_Japanese_Noodles.png">Japanese Noodles</option>
                            <option value="zgAi_July_4th_Fireworks.jpg">July 4th Fireworks</option>
                            <option value="zgAi_Latin_Guy.jpg">Latin Guy</option>
                            <option value="zgAi_Lobster.svg">Lobster</option>
                            <option value="zgAi_Martini.png">Martini</option>
                            <option value="zgAi_Mexican_Clay_Head.jpg">Mexican Clay Head</option>
                            <option value="zgAi_Mexican_Couple.jpg">Mexican Couple</option>
                            <option value="zgAi_Mexican_Guitar.svg">Mexican Guitar</option>
                            <option value="zgAi_Mexican_Guy.svg">Mexican Guy</option>
                            <option value="zgAi_Mexican_Pyramid.png">Mexican Pyramid</option>
                            <option value="zgAi_Mothers_Day.svg">Mother's Day</option>
                            <option value="zgAi_Organic-1.jpg">Organic-1</option>
                            <option value="zgAi_Organic-2.svg">Organic-2</option>
                            <option value="zgAi_Organic-3.png">Organic-3</option>
                            <option value="zgAi_Organic-4.svg">Organic-4</option>
                            <option value="zgAi_Organic-5.svg">Organic-5</option>
                            <option value="zgAi_Pizza_Chef.png">Pizza Chef</option>
                            <option value="zgAi_Salad.png">Salad</option>
                            <option value="zgAi_Santa.png">Santa</option>
                            <option value="zgAi_Shawarma.png">Shawarma</option>
                            <option value="zgAi_South_West.png">South West</option>
                            <option value="zgAi_Sports_Baseball.png">Sports Baseball</option>
                            <option value="zgAi_Sports_Basketball.jpg">Sports Basketball</option>
                            <option value="zgAi_Spring.jpg">Spring</option>
                            <option value="zgAi_Squid.svg">Squid</option>
                            <option value="zgAi_St_Patricks_Day-2.svg">St Patricks Day-2</option>
                            <option value="zgAi_Summer-1.jpg">Summer-1</option>
                            <option value="zgAi_Summer_Drink.png">Summer Drink</option>
                            <option value="zgAi_Sushi.png">Sushi</option>
                            <option value="zgAi_Table_Setting.svg">Table Setting</option>
                            <option value="zgAi_Thai_Guy.svg">Thai Guy</option>
                            <option value="zgAi_Thai_Scene.svg">Thai Scene</option>
                            <option value="zgAi_Thanksgiving.jpg">Thanksgiving</option>
                            <option value="zgAi_Valentines_Day.png">Valentines_Day</option>
                            <option value="zgAi_Vegetables.svg">Vegetables</option>
                            <option value="zgAi_Veg_Pepper.svg">Veg_Pepper</option>
                            <option value="zgAi_Veg_Red_Onion.svg">Veg Red Onion</option>
                            <option value="zgAi_Veg_Rosemary.svg">Veg Rosemary</option>
                            <option value="zgAi_Veg_Tomato.svg">Veg Tomato</option>
                            <option value="zgAi_Winter-1.jpg">Winter-1</option>
                            <option value="zgAi_Winter_Frame.png">Winter Frame</option>
                            <option value="zgAi_Winter_Snow.svg">Winter Snow</option>
                        </optgroup>
                        <optgroup label="Grunge Stamp Watermarks">
                            <option value="zsAi_Stamp_bbq-1.png">Stamp bbq-1</option>
                            <option value="zsAi_Stamp_bbq-2.png">Stamp bbq-2</option>
                            <option value="zsAi_Stamp_bbq-3.png">Stamp bbq-3</option>
                            <option value="zsAi_Stamp_bbq-4.png">Stamp bbq-4</option>
                            <option value="zsAi_Stamp_bbq-5.png">Stamp bbq-5</option>
                            <option value="zsAi_Stamp_bbq-6.png">Stamp bbq-6</option>
                            <option value="zsAi_Stamp_beef-1.png">Stamp beef-1</option>
                            <option value="zsAi_Stamp_beef-2.png">Stamp beef-2</option>
                            <option value="zsAi_Stamp_beer-1.png">Stamp beer-1</option>
                            <option value="zsAi_Stamp_beer-2.png">Stamp beer-2</option>
                            <option value="zsAi_Stamp_beer-3.png">Stamp beer-3</option>
                            <option value="zsAi_Stamp_beer-4.png">Stamp beer-4</option>
                            <option value="zsAi_Stamp_burger-1.png">Stamp burger-1</option>
                            <option value="zsAi_Stamp_burger-2.png">Stamp burger-2</option>
                            <option value="zsAi_Stamp_chicken-1.png">Stamp chicken-1</option>
                            <option value="zsAi_Stamp_chicken-2.png">Stamp chicken-2</option>
                            <option value="zsAi_Stamp_chicken-3.png">Stamp chicken-3</option>
                            <option value="zsAi_Stamp_chicken-4.png">Stamp chicken-4</option>
                            <option value="zsAi_Stamp_chicken-5.png">Stamp chicken-5</option>
                            <option value="zsAi_Stamp_chicken-6.png">Stamp chicken-6</option>
                            <option value="zsAi_Stamp_cocktails-1.png">Stamp cocktails-1</option>
                            <option value="zsAi_Stamp_cocktails-2.png">Stamp cocktails-2</option>
                            <option value="zsAi_Stamp_coffee-1.png">Stamp coffee-1</option>
                            <option value="zsAi_Stamp_coffee-2.png">Stamp coffee-2</option>
                            <option value="zsAi_Stamp_coffee-3.png">Stamp coffee-3</option>
                            <option value="zsAi_Stamp_coffee-4.png">Stamp coffee-4</option>
                            <option value="zsAi_Stamp_coffee-5.png">Stamp coffee-5</option>
                            <option value="zsAi_Stamp_coffee-6.png">Stamp coffee-6</option>
                            <option value="zsAi_Stamp_coffee-7.png">Stamp coffee-7</option>
                            <option value="zsAi_Stamp_coffee-8.png">Stamp coffee-8</option>
                            <option value="zsAi_Stamp_coffee-9.png">Stamp coffee-9</option>
                            <option value="zsAi_Stamp_coffee-10.png">Stamp coffee-10</option>
                            <option value="zsAi_Stamp_coffee-11.png">Stamp coffee-11</option>
                            <option value="zsAi_Stamp_coffee-12.png">Stamp coffee-12</option>
                            <option value="zsAi_Stamp_crab-1.png">Stamp crab-1</option>
                            <option value="zsAi_Stamp_crab-2.png">Stamp crab-2</option>
                            <option value="zsAi_Stamp_dogs-1.png">Stamp dogs-1</option>
                            <option value="zsAi_Stamp_dogs-2.png">Stamp dogs-2</option>
                            <option value="zsAi_Stamp_fish-1.png">Stamp fish-1</option>
                            <option value="zsAi_Stamp_fish-2.png">Stamp fish-2</option>
                            <option value="zsAi_Stamp_hot-1.png">Stamp hot-1</option>
                            <option value="zsAi_Stamp_hot-2.png">Stamp hot-2</option>
                            <option value="zsAi_Stamp_lobster-1.png">Stamp lobster-1</option>
                            <option value="zsAi_Stamp_lobster-2.png">Stamp lobster-2</option>
                            <option value="zsAi_Stamp_lobster-3.png">Stamp lobster-3</option>
                            <option value="zsAi_Stamp_lobster-4.png">Stamp lobster-4</option>
                            <option value="zsAi_Stamp_natural-1.png">Stamp natural-1</option>
                            <option value="zsAi_Stamp_natural-2.png">Stamp natural-2</option>
                            <option value="zsAi_Stamp_organic-1.png">Stamp organic-1</option>
                            <option value="zsAi_Stamp_organic-2.png">Stamp organic-2</option>
                            <option value="zsAi_Stamp_organic-3.png">Stamp organic-3</option>
                            <option value="zsAi_Stamp_original-1.png">Stamp original-1</option>
                            <option value="zsAi_Stamp_original-2.png">Stamp original-2</option>
                            <option value="zsAi_Stamp_pizza-1.png">Stamp pizza-1</option>
                            <option value="zsAi_Stamp_pizza2.png">Stamp pizza2</option>
                            <option value="zsAi_Stamp_pizza-3.png">Stamp pizza-3</option>
                            <option value="zsAi_Stamp_pizza-4.png">Stamp pizza-4</option>
                            <option value="zsAi_Stamp_pizza-5.png">Stamp pizza-5</option>
                            <option value="zsAi_Stamp_pizza-6.png">Stamp pizza-6</option>
                            <option value="zsAi_Stamp_pizza-7.png">Stamp pizza-7</option>
                            <option value="zsAi_Stamp_pizza-8.png">Stamp pizza-8</option>
                            <option value="zsAi_Stamp_pizza-9.png">Stamp pizza-9</option>
                            <option value="zsAi_Stamp_pizza-10.png">Stamp pizza-10</option>
                            <option value="zsAi_Stamp_pizza-11.png">Stamp pizza-11</option>
                            <option value="zsAi_Stamp_pizza-12.png">Stamp pizza-12</option>
                            <option value="zsAi_Stamp_pizza-13.png">Stamp pizza-13</option>
                            <option value="zsAi_Stamp_pizza-14.png">Stamp pizza-14</option>
                            <option value="zsAi_Stamp_sandwich-1.png">Stamp sandwich-1</option>
                            <option value="zsAi_Stamp_sandwich-2.png">Stamp sandwich-2</option>
                            <option value="zsAi_Stamp_seafood-1.png">Stamp seafood-1</option>
                            <option value="zsAi_Stamp_seafood-2.png">Stamp seafood-2</option>
                            <option value="zsAi_Stamp_seafood-3.png">Stamp seafood-3</option>
                            <option value="zsAi_Stamp_seafood-4.png">Stamp seafood-4</option>
                            <option value="zsAi_Stamp_seafood-5.png">Stamp seafood-5</option>
                            <option value="zsAi_Stamp_seafood-6.png">Stamp seafood-6</option>
                            <option value="zsAi_Stamp_Steak-1.png">Stamp Steak-1</option>
                            <option value="zsAi_Stamp_Steak-2.png">Stamp Steak-2</option>
                        </optgroup>
                        <optgroup label="Hand Drawn Vignettes">
                            <option value="zvAi_Artichoke.png">Artichoke</option>
                            <option value="zvAi_Barbecue1.png">Barbecue1</option>
                            <option value="zvAi_Barbecue2.png">Barbecue2</option>
                            <option value="zvAi_Barbecue3.png">Barbecue3</option>
                            <option value="zvAi_Barbecue4.png">Barbecue4</option>
                            <option value="zvAi_Barbecue5.png">Barbecue5</option>
                            <option value="zvAi_Barbecue6.png">Barbecue6</option>
                            <option value="zvAi_Beer.png">Beer</option>
                            <option value="zvAi_Breadbasket.png">Breadbasket</option>
                            <option value="zvAi_Bread.png">Bread</option>
                            <option value="zvAi_Broccoli.png">Broccoli</option>
                            <option value="zvAi_burger2.png">burger2</option>
                            <option value="zvAi_burger3.png">burger3</option>
                            <option value="zvAi_Cajun.png">Cajun</option>
                            <option value="zvAi_Candy.png">Candy</option>
                            <option value="zvAi_Cattails.png">Cattails</option>
                            <option value="zvAi_Chocolates.png">Chocolates</option>
                            <option value="zvAi_Cinamonbun3.png">Cinamonbun3</option>
                            <option value="zvAi_Cinamonbun.png">Cinamonbun</option>
                            <option value="zvAi_Corndog.png">Corndog</option>
                            <option value="zvAi_Corn.png">Corn</option>
                            <option value="zvAi_Crawfish1.png">Crawfish1</option>
                            <option value="zvAi_Crawfish2.png">Crawfish2</option>
                            <option value="zvAi_Crawfish3 .png">Crawfish3 </option>
                            <option value="zvAi_Croissant2.png">Croissant2</option>
                            <option value="zvAi_Donut.png">Donut</option>
                            <option value="zvAi_Dumplings.png">Dumplings</option>
                            <option value="zvAi_Eggs.png">Eggs</option>
                            <option value="zvAi_Feathers.png">Feathers</option>
                            <option value="zvAi_Fish1.png">Fish1</option>
                            <option value="zvAi_Flowercrest.png">Flowercrest</option>
                            <option value="zvAi_Flowers1.png">Flowers1</option>
                            <option value="zvAi_Flowers2.png">Flowers2</option>
                            <option value="zvAi_Football_Helmet.png">Football_Helmet</option>
                            <option value="zvAi_Fruit.png">Fruit</option>
                            <option value="zvAi_Grapes1.png">Grapes1</option>
                            <option value="zvAi_Grapes2.png">Grapes2</option>
                            <option value="zvAi_Gumbo2.png">Gumbo2</option>
                            <option value="zvAi_Hostess_Cupcake.png">Hostess_Cupcake</option>
                            <option value="zvAi_Hotdog.png">Hotdog</option>
                            <option value="zvAi_Ice_cream2.png">Ice_cream2</option>
                            <option value="zvAi_Leaves_Motif.png">Leaves_Motif</option>
                            <option value="zvAi_Lemonade.png">Lemonade</option>
                            <option value="zvAi_Lobster_Claw.png">Lobster_Claw</option>
                            <option value="zvAi_Martini.png">Martini</option>
                            <option value="zvAi_Mussels.png">Mussels</option>
                            <option value="zvAi_Olives.png">Olives</option>
                            <option value="zvAi_Pancakes.png">Pancakes</option>
                            <option value="zvAi_Pasta_&amp;_Meatballs.png">Pasta_&amp;_Meatballs</option>
                            <option value="zvAi_Pastry.png">Pastry</option>
                            <option value="zvAi_Pineapple.png">Pineapple</option>
                            <option value="zvAi_Pizza_Slice1.png">Pizza_Slice1</option>
                            <option value="zvAi_Pizza_Slice2.png">Pizza_Slice2</option>
                            <option value="zvAi_Poultry.png">Poultry</option>
                            <option value="zvAi_Quiche.png">Quiche</option>
                            <option value="zvAi_Roast_Duck.png">Roast_Duck</option>
                            <option value="zvAi_Sandwhich3.png">Sandwhich3</option>
                            <option value="zvAi_Sandwich1.png">Sandwich1</option>
                            <option value="zvAi_Sandwich2.png">Sandwich2</option>
                            <option value="zvAi_Ship.png">Ship</option>
                            <option value="zvAi_Smoothie.png">Smoothie</option>
                            <option value="zvAi_Soup.png">Soup</option>
                            <option value="zvAi_Spotlight.png">Spotlight</option>
                            <option value="zvAi_Squid.png">Squid</option>
                            <option value="zvAi_Squirrel.png">Squirrel</option>
                            <option value="zvAi_Sushi1.png">Sushi1</option>
                            <option value="zvAi_Sushi2.png">Sushi2</option>
                            <option value="zvAi_Sushi_Leaf.png">Sushi Leaf</option>
                            <option value="zvAi_Sweet Potato.png">Sweet Potato</option>
                            <option value="zvAi_Tacos.png">Tacos</option>
                            <option value="zvAi_Teacup.png">Teacup</option>
                            <option value="zvAi_Teapot Wood.png">Teapot Wood</option>
                            <option value="zvAi_Waffles.png">Waffles</option>
                            <option value="zvAi_Wheat.png">Wheat</option>
                            <option value="zvAi_Wine Bottle1.png">Wine Bottle1</option>
                            <option value="zvAi_Wine Bottle2.png">Wine Bottle2</option>
                            <option value="zvAi_Wine Bottles.png">Wine Bottles</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="row MPpadTop3px">
                <span class="MPpadTop5px spanMarginBackgroundText">Margin from edge of menu:</span><span>
			<input id="dialog-background-margin" type="text" class="spanTextInGeneric" placeholder="0.0&quot;" onkeydown="return ignoreEnter(event);">
			</span>
            </div>

            <div class="row MPpadTop2px">
                <div>
                    <label class="checkbox spanAspectBackground"><input id="dialog-background-stretch" type="checkbox" value="" checked="checked">Stretch to Fit</label>
                </div>
                <div>
                    <div>
                        <span class="spanPaperColorText muted" style="margin-left:0px;">Paper Color:</span>
                    </div>
                    <div style="margin-left:0">
                        <input id="dialog-paper-color" value="fffee6" style="display: none;" disabled="disabled"><div class="sp-replacer sp-light sp-disabled"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(232, 232, 232);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>
            </div>

            <div class="row MPpadTop2px notranslate">
                <div>
                    <label class="checkbox spanFlipBackground"><input id="dialog-background-flip" type="checkbox" value="">Flip</label>
                </div>
                <div>
                    <label class="checkbox spanMirrorBackground" style="margin-left:0px;"><input id="dialog-background-mirror" type="checkbox" value="">Mirror</label>
                </div>
                <div>
                    <label class="checkbox spanLightenBackground" style="margin-left:0px;"><input id="dialog-background-lighten" type="checkbox" value="">Lighten</label>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton notranslate">Use Style defaults</button>
            <button id="dialog-background-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-background-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#fffee6" data-color="rgb(255, 254, 230)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 254, 230);"></span></span><span title="#c8e9f0" data-color="rgb(200, 233, 240)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(200, 233, 240);"></span></span><span title="#eaf2df" data-color="rgb(234, 242, 223)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(234, 242, 223);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#efd54d" data-color="rgb(239, 213, 77)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(239, 213, 77);"></span></span><span title="#f0e2c6" data-color="rgb(240, 226, 198)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(240, 226, 198);"></span></span><span title="#538b3f" data-color="rgb(83, 139, 63)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(83, 139, 63);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#fef5c0" data-color="rgb(254, 245, 192)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(254, 245, 192);"></span></span><span title="#dfe0eb" data-color="rgb(223, 224, 235)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(223, 224, 235);"></span></span><span title="#fff4dc" data-color="rgb(255, 244, 220)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 244, 220);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#abb8ca" data-color="rgb(171, 184, 202)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(171, 184, 202);"></span></span><span title="#fbf2e2" data-color="rgb(251, 242, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(251, 242, 226);"></span></span><span title="#d4c4a2" data-color="rgb(212, 196, 162)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(212, 196, 162);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"><span title="#e8e8e8" data-color="rgb(232, 232, 232)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(232, 232, 232);"></span></span></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#e8e8e8" data-color="rgb(232, 232, 232)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(232, 232, 232);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myChangeFontDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form id="cufont_form" class="modal-form" action="https://onlineMenu.com/tools/token-import-font?access_token=demo_user" method="POST" enctype="multipart/form-data">

        <div class="modal-header">
            <button id="dialog-changefont-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-changefont-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Change the font family, style, size, color, or effect of your current Menu Style font. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Font</h3> <!-- Swap out for type -->
            <div class="MPdialogSubHeader">Change font, font style, size or color</div>
        </div>

        <div class="modal-body">

            <div class="row">

                <!-- col 1 -->
                <div class="spanFontNameCol">
                    <span id="fontFamTitle">Font Family</span>
                    <div class="MPpadTop2px notranslate">
                        <select id="fontFamily-select" name="fontFamily" size="8" style="width:180px">
                            <option value="abel">Abel</option>
                            <option value="acme">Acme</option>
                            <option value="airbag">Airbag</option>
                            <option value="aladin">Aladin</option>
                            <option value="alegreya">Alegreya</option>
                            <option value="alegreya_sc">Alegreya SC</option>
                            <option value="alice">Alice</option>
                            <option value="amaranth">Amaranth</option>
                            <option value="anonymous_pro">Anonymous Pro</option>
                            <option value="antic_slab">Antic Slab</option>
                            <option value="arbutus_slab">Arbutus Slab</option>
                            <option value="architects_daughter">Architects Daughter</option>
                            <option value="archivo_narrow">Archivo Narrow</option>
                            <option value="arimo">Arimo</option>
                            <option value="asap">Asap</option>
                            <option value="aubrey">Aubrey</option>
                            <option value="balthazar">Balthazar</option>
                            <option value="benchnine">Benchnine</option>
                            <option value="bevan">Bevan</option>
                            <option value="bilbo_swash_caps">Bilbo Swash Caps</option>
                            <option value="buenard">Buenard</option>
                            <option value="cabin">Cabin</option>
                            <option value="cac_champagne">CAC Champagne</option>
                            <option value="cantarell">Cantarell</option>
                            <option value="cardo">Cardo</option>
                            <option value="carrois_gothic_sc">Carrois Gothic SC</option>
                            <option value="contrail_one">Contrail One</option>
                            <option value="delius">Delius</option>
                            <option value="delius_unicase">Delius Unicase</option>
                            <option value="della_respira">Della Respira</option>
                            <option value="elsie">Elsie</option>
                            <option value="engagement">Engagement</option>
                            <option value="felipa">Felipa</option>
                            <option value="fondamento">Fondamento</option>
                            <option value="frijole">Frijole</option>
                            <option value="gandhi_serif">Gandhi Serif</option>
                            <option value="germania_one">Germania One</option>
                            <option value="grand_hotel">Grand Hotel</option>
                            <option value="gravitas_one">Gravitas One</option>
                            <option value="holtwood_one_sc">Holtwood One SC</option>
                            <option value="inika">Inika</option>
                            <option value="jenna_sue">Jenna Sue</option>
                            <option value="josefin_sans">Josefin Sans</option>
                            <option value="josefin_slab">Josefin Slab</option>
                            <option value="kaushan_script">Kaushan Script</option>
                            <option value="lilita_one">Lilita One</option>
                            <option value="lobster">Lobster</option>
                            <option value="londrina_solid">Londrina Solid</option>
                            <option value="maiden_orange">Maiden Orange</option>
                            <option value="matchbook">Matchbook</option>
                            <option value="monsieur_la_doulaise">Monsieur La Doulaise</option>
                            <option value="montserrat">Montserrat</option>
                            <option value="montserrat_subrayada">Montserrat Subrayada</option>
                            <option value="muli">Muli</option>
                            <option value="niconne">Niconne</option>
                            <option value="oleo_script">Oleo Script</option>
                            <option value="open_sans_condensed_light">Open Sans Cnd Light</option>
                            <option value="open_sans_condensed">Open Sans Condensed</option>
                            <option value="open_sans">Open Sans</option>
                            <option value="oregano">Oregano</option>
                            <option value="oswald">Oswald</option>
                            <option value="pacifico">Pacifico</option>
                            <option value="petrona">Petrona</option>
                            <option value="pinyon_script">Pinyon Script</option>
                            <option value="playfair_display_sc">Playfair Display SC</option>
                            <option value="podkova">Podkova</option>
                            <option value="prata">Prata</option>
                            <option value="quattrocento_sans">Quattrocento Sans</option>
                            <option value="raleway">Raleway</option>
                            <option value="rammetto_one">Rammetto One</option>
                            <option value="rancho">Rancho</option>
                            <option value="rokkitt">Rokkitt</option>
                            <option value="salsa">Salsa</option>
                            <option value="sancreek">Sancreek</option>
                            <option value="shadows_into_light_two">Shadows Into Light Two</option>
                            <option value="six_caps">Six Caps</option>
                            <option value="smokum">Smokum</option>
                            <option value="source_sans_pro">Source Sans Pro</option>
                            <option value="special_elite">Special Elite</option>
                            <option value="stardos_stencil">Stardos Stencil</option>
                            <option value="stint_ultra_expanded">Stint Ultra Expanded</option>
                            <option value="stoke">Stoke</option>
                            <option value="tangerine">Tangerine</option>
                            <option value="tinos">Tinos</option>
                            <option value="unifrakturmaguntia">Unifrakturmaguntia</option>
                            <option value="vast_shadow">Vast Shadow</option>
                            <option value="volkhov">Volkhov</option>
                            <option value="yesteryear">Yesteryear</option>
                        </select>
                    </div>


                    <div id="jansy-img-uploadFONT" class="row fileupload fileupload-new fileupload-exif notranslate" data-provides="fileupload" style="margin-left:0;padding-top:21px">

                        <a id="myUploadPreviewFONT" class="fileupload-new thumbnail pull-left mpFontPhotoPreview tipoff" rel="tooltipM" data-placement="top" title="" data-original-title="Click to browse and select a custom font that you have uploaded"><img src="./iMenuPro_files/noFont.png"></a><!-- must have no spaces before img!! -->
                        <div id="myUploadPreviewFONTUPLOAD" class="fileupload-preview fileupload-exists thumbnail pull-left mpFontPhotoPreview dont_select_ptr tipoff uploadtype" style="max-width:170px; max-height:22px; line-height: 20px;"></div>

                        <!-- buttons -->
                        <div id="jansyUploadWellFONT" class="spanBinPhoto">
                            <span id="mp-imgupload-btnFONT" class="btn btn-file btn-mini spanPhotoButton pull-right not_in_demo disabled" tipoff"="" rel="tooltip" title="Upload a TTF, OTF, or WOFF Font File">
                            <span class="fileupload-new spanPhotoButton pull-right" type="file"><i class="icon-font"></i> Upload Font...</span>
                            <span id="chngfontup" class="fileupload-exists spanPhotoButton">Change Upload...</span>
                            <input id="file-imguploadFONT" type="file" name="font_file[]"></span>

                            <a id="mp-imgupload-remove-btnFONT" class="btn fileupload-exists btn-mini btn-danger spanPhotoButton2" data-dismiss="fileupload">Remove</a>
                        </div>
                        <div id="jansyRemoveWellFONT" class="spanBinPhoto hide">
                            <a id="mp-font-img-remove" class="spanRemoveBtn btn btn-mini btn-danger pull-right">Remove</a>
                        </div>
                        <div id="jansyConfirmWellFONT" class="spanBinPhoto hide">
                            <button id="mp-font-img-confirm" class="spanConfirmBtn btn btn-mini btn-info pull-right tipoff not_in_demo disabled" rel="tooltipM" data-placement="right" title="" data-original-title="I confirm that I own this font or have the right to use it for my intended purpose"><i class=" icon-hand-right icon-white"></i>&nbsp;&nbsp;CONFIRM UPLOAD</button>
                        </div>
                        <div id="mp-fontstate" class="hide mp-newfont"></div>

                    </div>	<!-- /end container -->


                </div> <!-- /end col 1 -->



                <!-- col 2 -->
                <div class="spanFontStyleCol">
                    <span id="fontStyleTitle">Font Style</span>
                    <div class="MPpadTop2px notranslate">
                        <select id="fontStyle-select" name="fontStyle" size="5" style="width:142px">
                            <option value="regular">Regular</option>
                            <option value="italic">Italic</option>
                            <option value="bold">Bold</option>
                            <option value="bold italic">Bold Italic</option>
                            <option value="light">Light</option>
                            <option value="light italic">Light Italic</option>
                            <option value="medium">Medium</option>
                            <option value="medium italic">Medium Italic</option>
                            <option value="semi bold" selected="">Semi bold</option>
                            <option value="semi bold italic">Semi Bold Italic</option>
                            <option value="extra bold">Extra Bold</option>
                            <option value="extra bold italic">Extra Bold Italic</option>
                            <option value="black">Black</option>
                            <option value="black italic">Black Italic</option>
                        </select>
                    </div>
                    <div class="MPpadTop9px notranslate">
                        <span class="spanFontColorText" style="margin-left:0">Font Color:</span>
                        <div>
                            <input id="dialog-font-color" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);"></div></div><div class="sp-dd">▼</div></div>
                        </div>
                    </div>
                </div>
                <!-- /end col 2 -->


                <!-- col 3 -->
                <div class="spanFontSizeCol">
                    <span>Size (pts)</span>
                    <div class="MPpadTop2px">

                        <!-- faux datalist -->
                        <span class="input-append notranslate" style="margin-left:0px">
						<input id="fontSize" name="fontSize" autocomplete="off" type="text">
						<div class="btn-group">
							<button class="btn dropdown-toggle fauxDropButton" data-toggle="dropdown">
								<span class="sp-dd">▼</span>
							</button>
							<ul class="dropdown-menu fauxDropSelect">
								<li class="fauxPt"><a onclick="setFSize(&#39;9pt&#39;);">9</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;11pt&#39;)">11</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;15pt&#39;)">15</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;22pt&#39;)">22</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;30pt&#39;)">30</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;48pt&#39;)">48</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;60pt&#39;)">60</a></li>
								<li class="fauxPt"><a onclick="setFSize(&#39;72pt&#39;)">72</a></li>
							</ul>
						</div>
						</span>

                    </div>

                    <div id="fontSpacingText">Spacing</div>
                    <div>
                        <select name="fontSpacing" style="width:68px" rel="tooltipM" data-placement="right" title="" data-original-title="Change the letter spacing (headings only)">
                            <option value="-1px">-1</option>
                            <option value="0" selected="">0</option>
                            <option value="1px">1</option>
                            <option value="2px">2</option>
                            <option value="3px">3</option>
                            <option value="4px">4</option>
                        </select>
                    </div>



                </div>
                <!-- /end col 3 -->


                <!-- col 4 -->
                <div class="spanFontEffectCol">

                    <!--<div class="MPpadTop6px"><b>Effects</b></div> -->  <!-- org -->
                    <div class=""><b>Effects</b></div>
                    <div class="MPpadTop5px">
                        <label class="checkbox spanEffectsBox MPpadTop2px" style="margin-left:0px"><input type="checkbox" name="fontUnderline" checked="checked">Underline</label>
                        <label class="checkbox spanEffectsBox MPpadTop1px" style="margin-left:0px"><input type="checkbox" name="fontOverline">Overline</label>
                        <label class="checkbox spanEffectsBox MPpadTop1px" style="margin-left:0px"><input type="checkbox" name="fontAllCaps">All Caps</label>
                        <label class="checkbox spanEffectsBox MPpadTop1px" style="margin-left:0px"><input type="checkbox" name="fontStroke" checked="checked">Stroke</label>
                        <label class="checkbox spanEffectsBox MPpadTop1px" style="margin-left:0px"><input type="checkbox" name="fontShadow">Shadow</label>
                    </div>

                </div>
                <!-- /end col 4 -->


                <!-- <div class="row spanFontSTextRow" style="margin-left:0;padding-top:21px"> ORG -->
                <div class="row spanFontSTextRow">
                    <div class="ChangeFontSampleTextBorder" style="margin-left:0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="288" height="72" viewBox="0 0 288 72">
								<g id="sampleFonttext">
                                    <text>
                                        <tspan text-anchor="middle" dominant-baseline="middle" x="146px" y="42px" class="shadow" id="shadow">Appetizers</tspan>
                                    </text>
                                    <text>
                                        <!-- dominant-baseline supported on tspan only, not text -->
                                        <tspan text-anchor="middle" dominant-baseline="middle" x="144px" y="40px" class="heading">Appetizers</tspan>
                                    </text>
                                </g>
							</svg>
                    </div>
                </div>


            </div> <!-- /end entire row -->


            <div id="mp-fi-fontmap" class="hide row" style="margin-left:0">
                <div class="spanFontListCol" style="margin-left:0">
                    <div id="mp-imgupload-megadivFONT" class="row">
                        <div class="megalist notranslate" id="myUploadImgListFONT" style="height: 0px;"><ul style="visibility: visible;"></ul><div id="scrollbar" style="width: 7.5px;"></div></div>
                    </div>
                    <div id="mp-up-browse-noteFONT" class="text-info">
                        <span class="badge badge-info">i</span><em id="mp-up-helper-textFONT" class="dont_select_ptr"> Feature unavailable before purchase</em>
                    </div>
                </div>

                <div class="spanFontBrowseBtnCol">
                    <hr style="">

                    <input id="mp-imgupload-findFONT" type="text" class="search-query clearfix removeIEx" placeholder="Search">

                    <hr id="mp-font-useimg-hr">
                    <div id="mp-font-useimg-div" class="pull-right">
                        <button id="mp-imgupload-selectFONT" type="button" class="btn" style="margin-right:5px">Use this font</button>
                        <button id="mp-imgupload-cancel-selectFONT" type="button" class="btn btn">Cancel</button>
                    </div>

                    <div id="mp-up-trash-divFONT">
                        <a id="mp-imgupload-trashcanFONT" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteImage hide"><i class="icon-trash"></i> Delete Font</a>
                        <span>&nbsp;</span>
                    </div>

                    <div id="mp-imgupload-deletepanelFONT" class="hide">
                        <div class="row MPpadTop1px" style="margin-left:0">
                            <div class="text-info" style="padding-bottom:15px">
                                <span class="badge badge-important">!</span>
                                <em>Heads up! This font will be permanently deleted from storage and ALL menus that it appears on. You won't be able to undo this action. To just change the font on your menu, click Cancel and then click Remove.</em>
                            </div>
                        </div>
                        <span class="pull-right">
							<a id="mp-imgupload-deletebtnFONT" role="button" class="btn btn-danger notranslate">Delete</a>
							<span style="padding-left:5px">
							<a id="mp-imgupload-cancelbtnFONT" role="button" class="btn">Cancel</a>
							</span>
						</span>
                    </div>

                </div>

            </div>


        </div> <!-- /body -->


        <div id="mp-font-footer" class="modal-footer">
            <button id="dialog-changefont-default" class="btn btn-small ResetToStyleButton ">Use Style defaults</button>
            <button id="dialog-changefont-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-changefont-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#818285" data-color="rgb(129, 130, 133)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(129, 130, 133);"></span></span><span title="#4d4d4f" data-color="rgb(77, 77, 79)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(77, 77, 79);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#386cb4" data-color="rgb(56, 108, 180)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(56, 108, 180);"></span></span><span title="#802318" data-color="rgb(128, 35, 24)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(128, 35, 24);"></span></span><span title="#c81307" data-color="rgb(200, 19, 7)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(200, 19, 7);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#554017" data-color="rgb(85, 64, 23)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(85, 64, 23);"></span></span><span title="#de1d3c" data-color="rgb(222, 29, 60)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(222, 29, 60);"></span></span><span title="#f17258" data-color="rgb(241, 114, 88)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 114, 88);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#00aeef" data-color="rgb(0, 174, 239)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 174, 239);"></span></span><span title="#036a44" data-color="rgb(3, 106, 68)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(3, 106, 68);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0, 0, 0));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myHeadingAccentsDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <!-- Bug fix for iPad - bootstrap-select not functioning unless regular select in modal, so hide it -->
        <div id="headaccent-hidden-select" class="modal-header" style="overflow: hidden;padding-bottom:41px"> <!-- adjust bottom for hidden select -->
            <button id="dialog-headingaccents-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-headingaccents-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Select an Accent or color for a Heading type (which will then be applied to all Headings of that type) or select (none) to remove the accent.
     			To change the Accent for just a specific Heading, use that Heading&#39;s Accent selector. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Heading Accents</h3>
            <div class="MPdialogSubHeader">Select (or remove) Heading Accents</div>
            <div class="" style="margin-top:-200px"> <!-- hide bogus select -->
                <select style="width:1px"></select>
            </div>
        </div>

        <div class="modal-body">

            <div class="row MPpadTop1px">

                <div class="spanAccentNameCol">
                    <span>Title Headings</span>
                    <div id="bs-hda-title-div" class="MPpadTop5px notranslate">
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-title-accent-select" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_7_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_8_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Swish_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Branch_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Asian_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="19"></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Rooster_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Flower_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="23"></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="29"></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="34"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="35"></li><li data-original-index="36"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="37"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="41"></li><li data-original-index="42"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/UnderOver_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="43"></li><li data-original-index="44"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_RoundRect_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4b_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="65"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="66"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_Half_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Tag_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="72"></li><li data-original-index="73"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Placard_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Title_Crest_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="79"></li><li data-original-index="80"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Angel_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="88"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="89"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Hand_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="90"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_Arrow_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="91"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Swirl_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Slash_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Brackets_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="95"></li><li data-original-index="96"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="97"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="98"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="99"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="100"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="101"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="102"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="103"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="104"></li><li data-original-index="105"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="106"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-title-accent-select" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_5</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_6</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_7_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_7</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_8_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_8</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Swish_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Swish_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Branch_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Branch_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Asian_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Asian_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Rooster_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Rooster_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Flower_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Flower_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/UnderOver_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">UnderOver</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_RoundRect_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_RoundRect_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4b_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4b</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_5</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_6</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Dots_Round_Half_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round_Half</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Tag_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Tag_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_4</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Placard_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Placard_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Title_Crest_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Title_Crest_5</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Angel_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Angel</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_4</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_5</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_6</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Hand_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Hand_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_Arrow_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_Arrow</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Swirl_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Swirl_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Slash_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Slash_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Brackets_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Brackets_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_3</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines_2</option>
                            </select></div>
                    </div>

                </div>


                <div class="row spanAccentColorCol notranslate">
                    <div>
                        <label id="mp-colorize-title-checkbox" class="checkbox spanColorizeHA" style="margin-left:0px;"><input type="checkbox" value="">Colorize:</label>
                    </div>
                    <div style="margin-left:0">
                        <input id="mp-dialog-title-accent-color" class="MP-dialog-heading-accent-color" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>

            </div>


            <div class="row" style="padding-top:8px">

                <div class="spanAccentNameCol">
                    <span>Normal (&amp; Alt-Font) Headings</span>
                    <div id="bs-hda-norm-div" class="MPpadTop5px notranslate">
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-normal-accent-select" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_7_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_8_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Swish_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="14"></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="16"></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="22"></li><li data-original-index="23"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="28"></li><li data-original-index="29"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="34"></li><li data-original-index="35"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/UnderOver_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="36"></li><li data-original-index="37"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="41"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="42"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="43"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="44"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_RoundRect_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4b_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_Half_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Tag_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="65"></li><li data-original-index="66"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Placard_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Title_Crest_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="72"></li><li data-original-index="73"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Angel_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Hand_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_Arrow_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Swirl_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Slash_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Brackets_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="88"></li><li data-original-index="89"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="90"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="91"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="95"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="96"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="97"></li><li data-original-index="98"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="99"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-normal-accent-select" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_6</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_7_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_7</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_8_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_8</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Swish_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Swish_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/UnderOver_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">UnderOver</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_RoundRect_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_RoundRect_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4b_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4b</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_5</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_6</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Dots_Round_Half_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round_Half</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Tag_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Tag_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_4</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Placard_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Placard_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Title_Crest_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Title_Crest_5</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Angel_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Angel</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_4</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_5</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_6</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Hand_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Hand_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_Arrow_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_Arrow</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Swirl_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Swirl_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Slash_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Slash_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Brackets_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Brackets_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_3</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines_2</option>
                            </select></div>
                    </div>
                </div>


                <div class="row spanAccentColorCol notranslate">
                    <div>
                        <label id="mp-colorize-normal-checkbox" class="checkbox spanColorizeHA" style="margin-left:0px;"><input type="checkbox" value="">Colorize:</label>
                    </div>
                    <div style="margin-left:0">
                        <input id="mp-dialog-normal-accent-color" class="MP-dialog-heading-accent-color" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top:8px">

                <div class="spanAccentNameCol">
                    <span>Subheadings</span>
                    <div id="bs-hda-sub-div" class="MPpadTop5px notranslate">
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-small-accent-select" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_7_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_8_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Swish_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="14"></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="16"></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="22"></li><li data-original-index="23"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="28"></li><li data-original-index="29"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="34"></li><li data-original-index="35"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/UnderOver_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="36"></li><li data-original-index="37"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="41"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="42"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="43"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="44"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_RoundRect_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4b_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_Half_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Tag_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="65"></li><li data-original-index="66"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Placard_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Title_Crest_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="72"></li><li data-original-index="73"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Angel_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Hand_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_Arrow_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Swirl_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Slash_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Brackets_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="88"></li><li data-original-index="89"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="90"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="91"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="95"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="96"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="97"></li><li data-original-index="98"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="99"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-small-accent-select" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_6</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_7_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_7</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_8_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_8</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Swish_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Swish_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/UnderOver_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">UnderOver</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_RoundRect_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_RoundRect_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4b_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4b</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_5</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_6</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Dots_Round_Half_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round_Half</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Tag_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Tag_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_4</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Placard_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Placard_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Title_Crest_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Title_Crest_5</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Angel_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Angel</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_4</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_5</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_6</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Hand_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Hand_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_Arrow_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_Arrow</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Swirl_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Swirl_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Slash_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Slash_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Brackets_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Brackets_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_3</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines_2</option>
                            </select></div>
                    </div>
                </div>

                <div class="row spanAccentColorCol notranslate">
                    <div>
                        <label id="mp-colorize-small-checkbox" class="checkbox spanColorizeHA" style="margin-left:0px;"><input type="checkbox" value="">Colorize:</label>
                    </div>
                    <div style="margin-left:0">
                        <input id="mp-dialog-small-accent-color" class="MP-dialog-heading-accent-color" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                    </div>
                </div>
            </div>

            <div class="row MPpadTop2px">
            </div>

        </div>

        <div class="modal-footer">
            <button class="btn btn-small ResetToStyleButton notranslate">Use Style defaults</button>
            <button id="dialog-headingaccents-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-headingaccents-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div><div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div><div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>


<div id="myFoodItemDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" style="display: none;">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-fooditem-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-fooditem-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Edit a food item. You can also add a note (notes are not displayed on the menu).
		     			To place the item on menu, check On Menu or drag it from the list and drop on menu. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Food Item</h3>
        </div>

        <div class="modal-body" style="padding-bottom:10px">

            <div class="controls-row notranslate">
                <textarea class="spanNameFoodItem" rows="2" placeholder="Name" maxlength="220"></textarea>
                <!-- use browser tooltip to prevent tabindex bug -->
                <input class="spanPriceFoodItem tipoff" style="margin-left:30px" type="text" placeholder="Price" maxlength="50" rel="tooltip" data-placement="bottom" title="Accepts multiple prices separated by ; like 8.95;9.95;10.95 or text like &#39;market price&#39;" onkeydown="return ignoreEnter(event);">
            </div>

            <div class="controls-row MPpadTop6px notranslate">
                <textarea class="spanDescFoodItem" rows="3" placeholder="Description" maxlength="650"></textarea>
            </div>

            <div class="controls-row MPpadTop6px notranslate">
                <textarea class="spanExtrasFoodItem tipoff" rows="2" placeholder="Extras" maxlength="510" rel="tooltipM" data-placement="bottom" title="" data-original-title="For extra choices or additions such as &#39;Add a baked potato for $1 extra&#39;"></textarea>
            </div>


            <div class="row MPpadTop3px">

                <div id="mp-fi-col1" class="spanFoodItemCol1">
                    <div class="spanSym1TextFI" style="margin-left:0">Symbols</div>
                    <div class="MPpadTop4px spanSym1TextFI pagination mp-syms-modal-div notranslate">
                        <ul class="mp-sym1-ul">
                            <li><a id="mp-fi-sym1" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                        <ul class="mp-sym2-ul">
                            <li><a id="mp-fi-sym2" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                    </div>

                    <div class="">
                        <p style="margin-bottom:4px"><b>Layout Tweaks</b></p>
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" id="mp-fooditembox-center" type="checkbox" rel="tooltip" data-placement="right" title="Center all text for this food item">Center</label>
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" id="mp-fooditembox-span" type="checkbox" rel="tooltip" data-placement="right" title="Span (stretch across) food columns or columns at the top of page 1">Span</label>
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" id="mp-fooditembox-withname" type="checkbox" rel="tooltip" data-placement="right" title="Place the price for this food item next to its name">Price with Name</label>
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" id="mp-fooditembox-wraplines" type="checkbox" rel="tooltip" data-placement="right" title="Uncheck to make text appear on menu as entered including line breaks" checked="">Wrap Text</label>
                    </div>
                </div>

                <div id="mp-fi-col1" class="spanFoodItemCol2" style="margin-left:0">
                    <span>Box/Accent</span>
                    <div id="bs-fi-div" class="MPpadTop4px notranslate">
                        <!-- must use inline width, class won't work on FF and IE -->
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-fooditembox-boxaccent" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="13"></li><li data-original-index="14"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="19"></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="25"></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="29"></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Standout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-fooditembox-boxaccent" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Standout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Text_Standout</option>
                            </select></div>
                    </div>

                    <div>
                        <span class="spanFoodAccentColorText MPpadTop5px" style="margin-left:0">Box/Accent Color:</span>
                        <div class="MPpadTop3px">
                            <input id="dialog-food-accent-color" value="d2b48a" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div> <!-- #d2b48a is default accent color -->
                        </div>
                    </div>



                    <!-- upload container -->
                    <div id="jansy-img-uploadFI" class="MPpadTop6px spanBinPhoto fileupload fileupload-new fileupload-exif notranslate" data-provides="fileupload"><input type="hidden" value="">

                        <p style="margin-bottom:4px">Bin/Number</p>
                        <input class="spanBinNumberFoodItem tipoff" style="margin-left:0px" type="text" spellcheck="false" placeholder="bin 389" maxlength="7" onkeydown="return ignoreEnter(event);" rel="tooltip" data-placement="top" title="For wines or numbered items. Appears before Name on menu.">

                        <a id="myUploadPreviewFI" class="fileupload-new thumbnail pull-right mpFoodPhotoPreview tipoff" rel="tooltipM" data-placement="top" title="" data-original-title="Click to browse and select a photo from your image collection"><img src="./iMenuPro_files/68x51.png"></a>

                        <div id="myUploadPreviewFIUPLOAD" class="fileupload-preview fileupload-exists thumbnail pull-right mpFoodPhotoPreview dont_select_ptr tipoff" style="max-width: 68px; max-height: 51px; line-height: 51px;"></div>

                        <!-- buttons -->
                        <div id="jansyUploadWellFI" class="spanBinPhoto">
								<span id="mp-imgupload-btnFI" class="btn btn-file btn-mini spanPhotoButton pull-right not_in_demo disabled"><span class="fileupload-new spanPhotoButton pull-right"><i class="icon-camera"></i> Upload Photo...</span>
								<span class="fileupload-exists spanPhotoButton">Change Upload...</span><input id="file-imguploadFI" type="file" name=""></span>
                            <a id="mp-imgupload-remove-btnFI" class="btn fileupload-exists btn-mini btn-danger spanPhotoButton2" data-dismiss="fileupload">Remove</a>
                        </div>
                        <div id="jansyRemoveWellFI" class="spanBinPhoto hide" style="display: none;">
                            <a id="mp-fi-img-remove" class="spanRemoveBtn btn btn-mini btn-danger pull-right">Remove</a>
                        </div>
                        <div id="mp-photostate" class="hide mp-newphoto"></div>

                    </div>	<!-- /end container -->


                </div>

                <div id="mp-fi-col1" class="spanFoodItemCol3" style="margin-left:0">

                    <span><b>Spacing</b></span>
                    <label class="radio MPpadTop7px"><input name="FoodItemSpacing" type="radio" value="Style" checked="">Style</label>
                    <label class="radio"><input name="FoodItemSpacing" type="radio" value="Custom">Custom</label>
                    <div class="MPpadTop1px">
                        <div class="muted SpacingTextFd">Before:</div>
                        <!-- for 'input' padding is on the inside, margin is on the outside -->
                        <div class=""><input id="mp-fooditembox-before" style="margin-bottom:2px;padding-bottom:3px" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.06&quot;" disabled=""></div>
                        <div class="muted SpacingTextFd">After:</div>
                        <div class="" style="margin-left:0px;"><input id="mp-fooditembox-after" style="margin-bottom:2px;padding-bottom:3px" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.03&quot;" disabled=""></div>
                    </div>
                </div>

            </div>



            <div id="mp-fi-photomap" class="hide row" style="padding-top: 0px; margin-left: 0px; display: none;">
                <div class="spanPhotoListCol" style="margin-left:0">
                    <div id="mp-imgupload-megadivFI" class="row">
                        <div class="megalist notranslate" id="myUploadImgListFI" style="height: 0px;"><ul style="visibility: visible;"></ul><div id="scrollbar" style="width: 7.5px;"></div></div>
                    </div>
                    <div id="mp-up-browse-noteFI" class="text-info" style="display: block;">
                        <span class="badge badge-info">i</span><em id="mp-up-helper-textFI" class="dont_select_ptr"> Feature unavailable before purchase</em>
                    </div>
                </div>

                <div class="spanPhotoBrowseBtnCol">
                    <hr style="">

                    <input id="mp-imgupload-findFI" type="text" class="search-query clearfix removeIEx" placeholder="Search">

                    <hr id="mp-fi-useimg-hr">
                    <div id="mp-fi-useimg-div" class="pull-right">
                        <button id="mp-imgupload-selectFI" type="button" class="btn" style="margin-right:5px">Use this image</button>
                        <button id="mp-imgupload-cancel-selectFI" type="button" class="btn btn">Cancel</button>
                    </div>

                    <div id="mp-up-trash-divFI">
                        <a id="mp-imgupload-trashcanFI" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteImage hide" style="display: none;"><i class="icon-trash"></i> Delete Image</a>
                        <span>&nbsp;</span>
                    </div>

                    <div id="mp-imgupload-deletepanelFI" class="hide" style="display: none;">
                        <div class="row MPpadTop1px" style="margin-left:0">
                            <div class="text-info" style="padding-bottom:15px">
                                <span class="badge badge-important">!</span>
                                <em>Heads up! This image will be permanently deleted from storage and ALL menus that it appears on. You won't be able to undo this action. To just remove the image from your menu, click Cancel and then click Remove.</em>
                            </div>
                        </div>
                        <span class="pull-right">
							<a id="mp-imgupload-deletebtnFI" role="button" class="btn btn-danger notranslate">Delete</a>
							<span style="padding-left:5px">
							<a id="mp-imgupload-cancelbtnFI" role="button" class="btn">Cancel</a>
							</span>
						</span>
                    </div>



                </div>

            </div>

            <div id="mp-fi-symmap" class="hide" style="display: none;">
                <div class="pagination">
                    <ul class="mp-syms notranslate">
                        <li class="mp-fisym"><a class="mp-syms-none mp-syms-nonesym" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">,</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">)</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">*</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">+</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">-</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">/</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="heart healthy">0</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">1</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">2</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">3</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">4</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">5</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">7</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">:</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">;</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">&gt;</a></li> <!-- sun -->
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">?</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">A</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">B</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">C</a></li>
                        <li class="mp-fisym"><a class="tipoff" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" data-placement="top" title="blue crab">D</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">E</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">F</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="piano">G</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">H</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">I</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">J</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="bullet train">K</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">L</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cork screw">M</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">O</a></li> <!-- clover -->
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">P</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">S</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="Italy">T</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">V</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">W</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">X</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Y</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Z</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">[</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">\</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sombrero">]</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">^</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">_</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">a</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">b</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">c</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">d</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">e</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="pointer">f</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="flame">g</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">h</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">i</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">j</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">k</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">m</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">n</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">o</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">p</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">q</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">r</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">s</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">t</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">v</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dragon">y</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">{</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="your beautiful house">|</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‚</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ƒ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">„</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">…</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">†</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‡</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ˆ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‰</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‹</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Œ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ž</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">‘</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot flame">’</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">“</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">”</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">–</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">—</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">š</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">›</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">œ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sports">ž</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ÿ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¡</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¤</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¥</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¦</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">§</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¨</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">©</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ª</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¬</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="vegan">´</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¶</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">·</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¸</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¹</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">º</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">»</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¼</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">½</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¾</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¿</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">µ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">À</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Á</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Â</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ã</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ä</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Å</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Æ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ç</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">È</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">É</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ë</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ì</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Í</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Î</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ï</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ð</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ñ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ò</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ó</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">Ô</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Õ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ö</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">×</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ø</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ù</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ú</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Û</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ü</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ý</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Þ</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">8</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">9</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">Q</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">R</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">U</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">u</a></li>
                        <li class="mp-fisym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="spacer">&nbsp;</a></li>
                        <li class="mp-fisym"><a class="mp-syms-none mp-syms-cancelsym" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cancel symbol selection">cancel</a></li>
                    </ul>
                </div>
            </div>


            <div>
                <div id="mp-notes-field" class="hide" style="display: none;">
                    <hr style="margin:10px 0 15px 0">
                    <div class="controls-row MPpadTop1px" style="margin-left:0">
                        <textarea id="mp-note-text" class="spanNotesTextArea" rows="5" placeholder="A recipe or relevant note about this food item." maxlength="2800"></textarea>
                        <div class="spanNotesPDFButton tipoff">
                            <a id="mp-print-note-btn" role="button" class="btn not_in_demo disabled" rel="tooltipM" data-placement="bottom" title="" data-original-title="Print note to PDF"><i class="icon-print"></i><small>Print</small></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mp-delete-fooditem-alert" class="hide" style="display: none;">
                <hr style="margin:16px 0">
                <div class="row MPpadTop1px" style="margin-left:0">
                    <div class="text-info" style="padding-bottom:5px">
                        <span class="badge badge-important">!</span>
                        <em>Heads up! This food item will be permanently removed from your Food Item list and ALL menus that it appears on. You won't be able to undo this action. If you just want to remove it from a menu, click Cancel and then uncheck the On Menu box.</em>
                    </div>
                </div>
                <span class="pull-right">
						<a id="mp-fooditem-delete" role="button" class="btn btn-danger notranslate">Delete</a>
						<span style="padding-left:5px">
							<a id="mp-cancel-deletefood-button" role="button" class="btn">Cancel</a>
						</span>
					</span>
            </div>

        </div>

        <div id="mp-fooditembox-footer" class="modal-footer">
            <div class="pull-left">
			    <span class="OnMenuCheckBox">
				    <label class="checkbox pull-left clearfix"><input id="mp-fooditembox-onmenu" type="checkbox" checked="checked">On Menu</label>
			    </span>
                <a id="mp-fooditem-trashcan" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteData notranslate" style="display: inline;"><i class="icon-trash"></i> Delete</a>
            </div>
            <span style="padding-right:20px">
			 	<button id="mp-notes-button" type="button" class="btn btn-mini" rel="tooltip" title="Add a recipe or note about this item (does not appear on menu but can be viewed in food item list)."><i class="icon-pencil"></i> Note <i id="notes-collapse-icon" class="icon-chevron-down"></i></button>
			</span>
            <button id="mp-fooditembox-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-fooditem-cancel" class="btn " data-dismiss="modal">Cancel</button>
            <button id="mp-fooditembox-next" class="btn " disabled="disabled">&nbsp;Next»&nbsp;</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>



<div id="myHeadingDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-heading-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-heading-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Edit a Menu Heading.
		     			Use &#39;Food Columns&#39; to have foods under heading in columns.
		     			Select type &#39;Title&#39; to make heading span any columns if at the top of your menu.
		     			Use &#39;New Page or Column&#39; to push heading to the top of a new page or column.
		     			To place on menu check On Menu or drag to menu. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Menu Heading</h3>
        </div>

        <div class="modal-body">

            <div class="controls-row MPpadTop6px">
                <textarea class="spanHeadingTextArea" dir="auto" rows="3" placeholder="Appetizers, Today&#39;s Specials, All items served with a salad, etc." maxlength="660"></textarea>
            </div>

            <div class="row MPpadTop8px">

                <div id="mp-hd-col1" class="spanHeadingCol1">
                    <div class="spanSym1TextHD" style="margin-left:0">Symbols</div>
                    <div class="MPpadTop4px spanSym1TextHD pagination mp-syms-modal-div notranslate">
                        <ul class="mp-sym1-ul">
                            <li><a id="mp-hd-sym1" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                        <ul class="mp-sym2-ul">
                            <li><a id="mp-hd-sym2" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                    </div>

                    <div class="">
                        <p style="margin-bottom:4px"><b>Layout Tweaks</b></p>
                        <span class="MPpadTop3px spanItemsColsTextHD" style="margin-left:0">Food Columns:</span>
                        <select id="foodcols" class="tipoff" style="width:55px" rel="tooltip" data-placement="right" title="Puts the foods under this heading into columns but leaves heading as is">
                            <option value="1" selected="">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label class="checkbox" id="mp-heading-newpage-label" style="margin-left:0;margin-top:-3px"><input class="tipoff" id="mp-heading-newpage" type="checkbox" rel="tooltip" data-placement="right" title="Make this heading appear at the top of a new page or column">New Page or Column <i id="np_pin" class=""></i></label>
                        <label class="checkbox MPpadTop1px" id="mp-heading-span-label" style="margin-left:0px"><input class="tipoff" id="mp-heading-span" type="checkbox" rel="tooltip" data-placement="right" title="Span (stretch across) columns at top of page 1 (titles and subheadings do this automatically)">Span</label> <!-- 11.0.43 -->
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" id="mp-heading-wrap" type="checkbox" rel="tooltip" data-placement="right" title="Uncheck to make text appear on menu as entered including line breaks" checked="">Wrap Text</label>
                    </div>
                </div>


                <div id="mp-hd-col2" class="spanHeadingCol2 " style="margin-left:0">
                    <span>Heading Type</span>
                    <div class="MPpadTop4px notranslate">
                        <select name="HeadingType" size="1" style="width:180px">
                            <option value="normal" selected="">Normal</option>
                            <option value="alt-font">Alt-Font</option>
                            <option value="title">Title</option>
                            <option value="small">Subheading</option>
                        </select>
                    </div>

                    <span>Alignment</span>
                    <div class="MPpadTop4px notranslate">
                        <select name="HeadingAlignment" size="1" style="width:180px">
                            <option value="(style)" selected="">(style)</option>
                            <option value="left">Left</option>
                            <option value="center">Center</option>
                            <option value="right">Right</option>
                        </select>
                    </div>

                    <span>Accent</span>
                    <div id="bs-hd-div" class="MPpadTop4px notranslate">
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-heading-accent-select" title="(style)"><span class="filter-option pull-left">(style)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(style)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="3"></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_7_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_8_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Swish_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="16"></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="18"></li><li data-original-index="19"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="23"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="24"></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="29"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="30"></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="34"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="35"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="36"></li><li data-original-index="37"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/UnderOver_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="38"></li><li data-original-index="39"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="41"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="42"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="43"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="44"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_RoundRect_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4b_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_Half_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Tag_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="65"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="66"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="67"></li><li data-original-index="68"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Placard_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="70"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="71"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="72"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="73"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Title_Crest_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="74"></li><li data-original-index="75"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Angel_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Hand_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_Arrow_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Swirl_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="88"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Slash_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="89"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Brackets_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="90"></li><li data-original-index="91"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="95"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="96"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="97"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="98"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="99"></li><li data-original-index="100"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="101"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="102"></li><li data-original-index="103"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Curveup_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="104"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Wornout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="105"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Grungeink_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="106"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_VintagetitleHD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-heading-accent-select" data-size="12" class="selectpicker" data-width="180px" data-container="body" name="HeadingAccent" tabindex="-98">
                                <option>(style)</option>
                                <option data-divider="true"></option>
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_6</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_7_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_7</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_8_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_8</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Swish_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Swish_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/UnderOver_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">UnderOver</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_RoundRect_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_RoundRect_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4b_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4b</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_5</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_6</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Dots_Round_Half_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round_Half</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Tag_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Tag_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_4</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Placard_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Placard_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Title_Crest_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Title_Crest_5</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Angel_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Angel</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_4</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_5</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_6</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Hand_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Hand_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_Arrow_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_Arrow</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Swirl_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Swirl_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Slash_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Slash_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Brackets_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Brackets_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_3</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Curveup_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Text_Curveup</option>
                                <!-- 11.0.37 -->
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Wornout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_worn</option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Grungeink_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_grunge</option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_VintagetitleHD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_vintage</option>
                            </select></div>
                    </div>


                </div>

                <div id="mp-hd-col3" class="spanHeadingCol3 " style="margin-left:0">

                    <span><b>Spacing</b></span>
                    <label class="radio MPpadTop7px"><input name="HeadingSpacing" type="radio" value="Style" checked="">Style</label>
                    <label class="radio"><input name="HeadingSpacing" type="radio" value="Custom">Custom</label>
                    <div class="MPpadTop1px">
                        <div class="muted SpacingTextHd">Before:</div>
                        <div class=""><input id="mp-heading-before" style="margin-bottom:2px;padding-bottom:3px" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.22&quot;" disabled=""></div>
                        <div class="muted SpacingTextHd">After:</div>
                        <div class="" style="margin-left:0px;"><input id="mp-heading-after" style="margin-bottom:2px;padding-bottom:3px" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.15&quot;" disabled=""></div>
                    </div>
                </div>

            </div>

            <div id="mp-hd-symmap" class="hide">
                <div class="pagination">
                    <ul class="mp-syms notranslate">
                        <li class="mp-hdsym"><a class="mp-syms-none mp-syms-nonesym" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">,</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">)</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">*</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">+</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">-</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">/</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="heart healthy">0</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">1</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">2</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">3</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">4</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">5</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">7</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">:</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">;</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">&gt;</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">?</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">A</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">B</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">C</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="blue crab">D</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">E</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">F</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="piano">G</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">H</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">I</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">J</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="bullet train">K</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">L</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cork screw">M</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">O</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">P</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">S</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="Italy">T</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">V</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">W</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">X</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Y</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Z</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">[</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">\</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sombrero">]</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">^</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">_</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">a</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">b</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">c</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">d</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">e</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="pointer">f</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="flame">g</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">h</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">i</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">j</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">k</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">m</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">n</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">o</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">p</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">q</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">r</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">s</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">t</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">v</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dragon">y</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">{</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="your beautiful house">|</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‚</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ƒ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">„</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">…</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">†</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‡</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ˆ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‰</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‹</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Œ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ž</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">‘</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot flame">’</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">“</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">”</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">–</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">—</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">š</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">›</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">œ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sports">ž</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ÿ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¡</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¤</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¥</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¦</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">§</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¨</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">©</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ª</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¬</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="vegan">´</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¶</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">·</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¸</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¹</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">º</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">»</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¼</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">½</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¾</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¿</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">µ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">À</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Á</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Â</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ã</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ä</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Å</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Æ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ç</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">È</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">É</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ë</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ì</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Í</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Î</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ï</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ð</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ñ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ò</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ó</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">Ô</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Õ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ö</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">×</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ø</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ù</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ú</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Û</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ü</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ý</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Þ</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">8</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">9</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">Q</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">R</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">U</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">u</a></li>
                        <li class="mp-hdsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="spacer">&nbsp;</a></li> <!--  nbsp char in case user needs it to space symbol -->
                        <li class="mp-hdsym"><a class="mp-syms-none mp-syms-cancelsym" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cancel symbol selection">cancel</a></li>
                    </ul>
                </div>
            </div>

            <div id="mp-delete-heading-alert" class="hide">
                <hr>
                <div class="row MPpadTop1px" style="margin-left:0">
                    <div class="text-info" style="padding-bottom:5px">
                        <span class="badge badge-important">!</span>
                        <em>Delete this Heading from your Menu? To simply remove it from your menu, click Cancel and then uncheck the On Menu box.</em></div>
                </div>
                <span class="pull-right">
				   		<a id="mp-deleteheading-button" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" role="button" class="btn btn-danger notranslate">Delete</a>
				   		<span style="padding-left:5px"><a id="mp-cancel-deleteheading-button" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" role="button" class="btn">Cancel</a></span>
			    	</span>
            </div>

        </div>

        <div id="mp-headingbox-footer" class="modal-footer">
            <div class="pull-left">
			    <span class="OnMenuCheckBox">
				    <label class="checkbox pull-left clearfix"><input id="dialog-heading-onmenu" type="checkbox" checked="checked">On Menu</label>
			    </span>
                <a id="mp-heading-trashcan" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteData notranslate"><i class="icon-trash"></i> Delete</a>
            </div>
            <button id="dialog-heading-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-heading-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>


<div id="myFooterDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">

        <div class="modal-header">
            <button id="dialog-footer-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-footer-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Add a menu footer for food allergy or govt. food safety warnings, your menu&#39;s date, gratuity rules, or anything else of interest to your patrons.
		     			Omit it from certain pages by entering the pages (separated with commas) in &#39;Remove from page&#39;.
		     			Remove the footer from all pages by unchecking On Menu. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 class="MPdialogTitleFont">Footer</h3>
        </div>

        <div class="modal-body">

            <div class="controls-row MPpadTop6px">
                <textarea class="spanFooterTextArea " dir="auto" rows="3" placeholder="- 18% gratuity added to parties of 8 or more -" maxlength="460"></textarea>
            </div>

            <div class="row MPpadTop11px">

                <div id="mp-ft-col1" class="spanFooterCol1 ">
                    <div class="spanSym1TextFooter" style="margin-left:0">Symbols</div>
                    <div class="MPpadTop4px spanSym1TextFooter pagination mp-syms-modal-div notranslate">
                        <ul class="mp-sym1-ul">
                            <li><a id="mp-ft-sym1" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                        <ul class="mp-sym2-ul">
                            <li><a id="mp-ft-sym2" class="mp-syms-none" style="padding:5px 9px 12px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        </ul>
                    </div>


                    <div class="MPpadTop1px">
                        <div class="">Remove from page:</div>
                        <div class="MPpadTop4px " style="margin-left:0px;"><input style="margin-bottom:2px;padding-bottom:3px" type="text" class="spanFooterRemovePageIn" placeholder="1,3,5" onkeydown="return ignoreEnter(event);"></div>
                    </div>

                    <div class="MPpadTop8px">
                        <label class="checkbox MPpadTop1px" style="margin-left:0px"><input class="tipoff" name="footerWrap" type="checkbox" rel="tooltipM" data-placement="right" title="" checked="" data-original-title="Uncheck to make text appear on menu as entered including line breaks">Wrap Text</label>
                    </div>

                </div>

                <div id="mp-ft-col2" class="spanFooterCol2 " style="margin-left:0">
                    <span>Footer/Heading Type</span>
                    <div class="MPpadTop4px notranslate">
                        <select name="footerType" size="1" style="width:180px">
                            <option value="small" selected="">Subheading</option>
                            <option value="alt-font">Alt-Font</option>
                        </select>
                    </div>

                    <span>Accent</span>
                    <div id="bs-footeraccent-div" class="MPpadTop4px notranslate">
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-footer-accent-select" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Dots_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_7_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="12"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Ornamental_8_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Squiggle_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Swish_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="17"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Branch_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Asian_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="19"></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Rooster_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Diamond_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Divider_Flower_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="23"></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="28"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="29"></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="33"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="34"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="35"></li><li data-original-index="36"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="37"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="38"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="39"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="40"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Overline_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="41"></li><li data-original-index="42"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/UnderOver_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="43"></li><li data-original-index="44"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="45"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="46"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="47"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="48"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="49"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Bracket_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="50"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="51"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="52"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_RoundRect_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="53"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="54"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="55"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1HD_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="56"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="57"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="58"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Arrow_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="59"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="60"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="61"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="62"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_4b_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="63"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="64"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Banner_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="65"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Tag_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="66"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="67"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="68"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="69"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Title_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="70"></li><li data-original-index="71"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Placard_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="72"></li><li data-original-index="73"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Angel_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="74"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="75"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_ArtsCrafts_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="76"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="77"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="78"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="79"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_4_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="80"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_5_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="81"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Filigree_6_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="82"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Hand_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="83"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_Arrow_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="84"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Arrow_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="85"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Swirl_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="86"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Slash_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="87"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Brackets_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="88"></li><li data-original-index="89"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="90"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="91"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Dots_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="92"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="93"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="94"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Star_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="95"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="96"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_LongDash_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="97"></li><li data-original-index="98"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="99"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Ornament_Sidelines_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="100"></li><li data-original-index="101"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Standout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="102"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Wornout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="103"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Grungeink_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-footer-accent-select" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Dots_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Dots_2_Lines</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_4</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_5</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_6</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_7_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_7</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Ornamental_8_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Ornamental_8</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Squiggle_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Squiggle_3</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Swish_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Swish_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Branch_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Branch_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Asian_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Asian_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Rooster_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Rooster_1</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Diamond_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Diamond_2</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Divider_Flower_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Divider_Flower_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_Ultra_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Overline_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Overline_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/UnderOver_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">UnderOver</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Bracket_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Bracket</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_RoundRect_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_RoundRect_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1HD_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Arrow_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Arrow_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_4b_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_4b</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_5</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Banner_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Banner_6</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Tag_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Tag_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Title_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Title_4</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Placard_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Placard_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Angel_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Angel</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_ArtsCrafts_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_ArtsCrafts_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_4_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_4</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_5_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_5</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Filigree_6_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Filigree_6</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Hand_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Hand_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_Arrow_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_Arrow</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Arrow_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Arrow_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Swirl_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Swirl_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Slash_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Slash_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Brackets_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Brackets_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Dots_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Dots_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_1</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Star_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Star_3</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_2</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_LongDash_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_LongDash_3</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines</option>
                                <option data-content="&lt;img src=&#39;ornaments/thumbs/Ornament_Sidelines_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Ornament_Sidelines_2</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Standout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Text_Standout</option>
                                <!-- 11.0.37 -->
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Wornout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_worn</option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Grungeink_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_grunge</option>
                            </select></div>
                    </div>
                    <div>
                        <span class="spanFooterAccentColorText MPpadTop5px" style="margin-left:0">Accent Color:</span>
                        <div class="MPpadTop3px">
                            <input id="dialog-footer-accent-color" value="d2b48a" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div> <!-- #d2b48a is default accent color -->
                        </div>
                    </div>

                </div>

                <div id="mp-ft-col3" class="spanFooterCol3" style="margin-left:0">

                    <span>Alignment</span>
                    <div class="MPpadTop4px notranslate">
                        <select name="footerAlign" size="1" style="width:100px">
                            <option value="left">Left</option>
                            <option value="center" selected="">Center</option>
                            <option value="right">Right</option>
                        </select>
                    </div>

                    <div class="row" style="margin-left:0">
                        <p style="margin-bottom:0">from Margin:</p>
                        <p style="margin-top:4px"><input id="footerMargin" name="footerMargin" type="text" class="spanTextInGeneric tipoff" pattern="(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" placeholder="0.25&quot;" rel="tooltipM" data-placement="top" title="" onkeydown="return ignoreEnter(event);" data-original-title="Space from bottom page margin to top of the footer. You may want to adjust this depending on your border margin."></p>
                    </div>
                </div>

            </div>

            <div id="mp-ft-symmap" class="hide">
                <div class="spanFkey">
                    <label class="checkbox footerKeyLabel">
                        <input id="mp-ft-useEmbed" type="checkbox" value="">Convert codes in parentheses like (k) (37) into symbols <span class="footerKeySample">4 Ÿ</span> in the menu footer
                    </label>
                </div>

                <div id="mp-footer-syms" class="pagination">
                    <ul class="mp-syms notranslate">
                        <li class="mp-ftsym"><a class="mp-syms-none mp-syms-nonesym fkeyH" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">none</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fka" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">,</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkb" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">)</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkc" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">*</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkd" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">+</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fke" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">-</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkf" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">/</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkg" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="heart healthy">0</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkh" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">1</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fki" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">2</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkj" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">3</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkk" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">4</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkl" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">5</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkm" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">7</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkn" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">:</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fko" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">;</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkp" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">&gt;</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkq" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">?</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkr" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">A</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fks" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">B</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkt" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">C</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fku" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="blue crab">D</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkv" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">E</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkw" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">F</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkx" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="piano">G</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fky" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">H</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkz" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">I</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkA" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">J</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkB" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="bullet train">K</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkC" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">L</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkD" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cork screw">M</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkE" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">O</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkF" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">P</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkG" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">S</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkH" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="Italy">T</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkI" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">V</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkJ" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">W</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkK" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">X</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkL" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Y</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkM" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Z</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkN" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">[</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkO" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">\</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkP" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sombrero">]</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkQ" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">^</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkR" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">_</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkS" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">a</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkT" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">b</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkU" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">c</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkV" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">d</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkW" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">e</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkX" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="pointer">f</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkY" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="flame">g</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fkZ" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">h</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">i</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk2" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">j</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk3" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">k</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk4" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">m</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk5" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">n</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk6" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">o</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk7" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">p</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk8" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">q</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk9" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">r</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk10" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">s</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk11" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">t</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk12" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">v</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk13" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dragon">y</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk14" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">{</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk15" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="your beautiful house">|</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk16" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‚</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk17" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ƒ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk18" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">„</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk19" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">…</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk20" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">†</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk21" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‡</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk22" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ˆ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk23" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‰</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk24" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">‹</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk25" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Œ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk26" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ž</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk27" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot">‘</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk28" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="hot flame">’</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk29" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">“</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk30" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">”</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk31" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">–</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk32" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">—</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk33" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">š</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk34" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">›</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk35" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">œ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk36" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="sports">ž</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk37" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ÿ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk38" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¡</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk39" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¤</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk40" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¥</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk41" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¦</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk42" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">§</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk43" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¨</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk44" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">©</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk45" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">ª</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk46" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¬</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk47" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="vegan">´</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk48" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¶</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk49" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">·</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk50" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¸</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk51" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¹</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk52" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">º</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk53" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">»</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk54" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¼</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk55" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">½</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk56" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¾</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk57" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">¿</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk58" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">µ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk59" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">À</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk60" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Á</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk61" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Â</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk62" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ã</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk63" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ä</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk64" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Å</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk65" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Æ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk66" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ç</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk67" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">È</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk68" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">É</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk69" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ë</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk70" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ì</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk71" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Í</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk72" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Î</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk73" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ï</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk74" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ð</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk75" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ñ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk76" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ò</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk77" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ó</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk78" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">Ô</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk79" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Õ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk80" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ö</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk81" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">×</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk82" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ø</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk83" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ù</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk84" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ú</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk85" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Û</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk86" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ü</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk87" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Ý</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk88" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Þ</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk89" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">8</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk90" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="soy free">9</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk91" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">Q</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk92" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="dairy free">R</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk93" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="wheat free">U</a></li>
                        <li class="mp-ftsym"><a class="fkey fkeyH fk94" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="gluten free">u</a></li>
                        <li class="mp-ftsym"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="spacer" class="fkeyH">&nbsp;</a></li> <!--  nbsp char in case user needs it to space symbol -->
                        <li class="mp-ftsym"><a class="mp-syms-none mp-syms-cancelsym fkeyH" style="padding:4px 9px 5px 9px" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" rel="tooltip" title="cancel symbol selection">cancel</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="modal-footer">
		    <span id="mp-footer-onmenu" class="OnMenuCheckBox">
			    <label class="checkbox clearfix" style="float:left;"><input name="footerOnmenu" type="checkbox" checked="checked">On Menu</label>
		    </span>
            <button id="dialog-footer-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-footer-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>



<div id="myFloatingTextDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-floatingtext-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-floatingtext-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Floating Text &#39;floats&#39; above normal menu content and can be freely positioned by dragging. Use for text that doesn&#39;t fit into the normal layout flow of Headings/Food Items.
						Use the Fonts &gt; Floating Text command to change font family, size, and color for all floating text. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="dialog-floatingtext-title" class="MPdialogTitleFont">Insert Floating Text</h3>
            <div id="dialog-floatingtext-subtitle" class="MPdialogSubHeader">Add call-out text anywhere on your menu</div>
            <button id="dialog-floatingtext-edit-help" type="button" class="close helpme hide" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use &#39;Left&#39; and &#39;Top&#39; to precisely position it and &#39;Effects&#39; and &#39;Accents&#39; to add flair.
		     			To remove from your menu, uncheck On Menu. Use the Fonts &gt; Floating Text command to change font family, size, and color for all floating text. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="dialog-floatingtext-edit-title" class="MPdialogTitleFont hide">Edit Floating Text</h3>
            <div id="dialog-floatingtext-edit-subtitle" class="MPdialogSubHeader hide">Edit, change, or remove this floating text from your menu</div>
        </div>

        <div class="modal-body">

            <div class="controls-row MPpadTop6px">
                <textarea class="spanFTTextArea" dir="auto" rows="3" placeholder="Open 24-Hours (but not in a row)." maxlength="2800"></textarea>
            </div>

            <div class="row MPpadTop8px">

                <div class="spanFTCol1 ">

                    <span><b>Effects</b></span>

                    <div class="notranslate MPpadTop4px">
                        <span class="MPpadTop5px spanCurveTextFT " style="margin-left:0">Scale Size:</span>
                        <!-- <select id="mp-scale-ft" style="width:77px;font-family:'Courier New', Courier, monospace; font-size:15px;">
					  			<option value=".25">25%</option>
					  			<option value=".333">33%</option>
					  			<option value=".5">50%</option>
					  			<option value=".75">75%</option>
					  			<option value="1" selected>none</option>
					  			<option value="1.25">125%</option>
					  			<option value="1.5">150%</option>
					  			<option value="1.75">175%</option>
					  			<option value="2">200%</option>
								</select> -->

                        <!-- 11.0.48 faux datalist for float size -->
                        <span class="input-append notranslate" style="margin-left:0px">
						<input id="floatSize" name="floatSize" autocomplete="off" type="text" value="none"> <!-- set default val -->
						<div class="btn-group">
							<button class="btn dropdown-toggle fauxDropButton" data-toggle="dropdown">
								<span class="sp-dd">▼</span>
							</button>
							<ul class="dropdown-menu fauxDropSelectFloat">
								<li class="fauxPt"><a onclick="setFloatSize(&#39;50%&#39;)">50%</a></li>
								<li class="fauxPt"><a onclick="setFloatSize(&#39;75%&#39;)">75%</a></li>
								<li class="fauxPt"><a onclick="setFloatSize(&#39;100%&#39;)">none</a></li>
								<li class="fauxPt"><a onclick="setFloatSize(&#39;125%&#39;)">125%</a></li>
								<li class="fauxPt"><a onclick="setFloatSize(&#39;150%&#39;)">150%</a></li>
							</ul>
						</div>
						</span>
                        <!-- end 11.0.48 -------------------------------------->
                    </div>

                    <!-- <div class="MPpadTop4px notranslate"> -->
                    <div class="notranslate">
                        <span class="MPpadTop5px spanRotateTextFT" style="margin-left:0">Rotate Text:</span>
                        <select id="mp-rotate-ft" style="width:77px; font-family:&#39;Courier New&#39;, Courier, monospace; font-size:15px;">
                            <option value="0" selected="">none</option>
                            <option value="270"> 270° vertical up</option>
                            <option value="90"> 90°&nbsp;&nbsp;vertical down</option>
                            <option value="355"> 355° tilt up</option>
                            <option value="349"> 349° tilt up more</option>
                            <option value="5"> 5°&nbsp;&nbsp;&nbsp;tilt down</option>
                            <option value="11"> 11°&nbsp;&nbsp;tilt down more</option>
                            <option value="180"> 180° upside down</option>
                        </select>
                    </div>
                    <div class="notranslate">
                        <span class="MPpadTop5px spanCurveTextFT " style="margin-left:0">Curvy Text:</span>
                        <select id="mp-curve-ft" style="width:77px;font-family:&#39;Courier New&#39;, Courier, monospace; font-size:15px;">
                            <option value="none" selected="">none</option>
                            <option value="1">Up</option>
                            <option value="0">Down</option>
                            <option value="2">Wav+</option>
                            <option value="3">Wav-</option>
                        </select>
                    </div>

                    <div class="notranslate">
                        <span class="MPpadTop5px spanCurveTextFT " style="margin-left:0">Alt Font:</span>
                        <select id="mp-altfont-ft" style="width:77px;font-family:&#39;Courier New&#39;, Courier, monospace; font-size:15px;">
                            <option value="floating-text" selected="">none</option>
                            <option value="alt-float">use</option>
                        </select>
                    </div>
                </div>

                <div class="spanFTCol2 " style="margin-left:0">

                    <span id="ft_alignment_title">Alignment</span>
                    <div class="MPpadTop4px notranslate">
                        <select id="mp-floatingtext-alignment" name="" size="1" style="width:180px">
                            <option value="left" selected="">Left</option>
                            <option value="center">Center</option>
                            <option value="right">Right</option>
                        </select>
                    </div>

                    <span id="ft_boxacc_title">Box/Accent</span>
                    <div id="bs-floatingaccent-div" class="MPpadTop4px notranslate">
                        <!-- must use inline width, class won't work on FF and IE -->
                        <div class="btn-group bootstrap-select" style="width: 180px;"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="mp-floatingtext-boxaccent" title="(none)"><span class="filter-option pull-left">(none)</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">(none)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="1"></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_2_Lines_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Dashed_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Solid_Inverted_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="9"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Rounded_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="10"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Paint_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="11"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Torn_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="12"></li><li data-original-index="13"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Oval_3_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="14"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="15"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Jetson_2_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="16"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Box_Smudge_1_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="17"></li><li data-original-index="18"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Round_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="19"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Square_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="20"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Dots_Japanese_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="21"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Left_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="22"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Hash_Slant_Right_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="23"></li><li data-original-index="24"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thin_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="25"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="26"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="27"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Underline_Ultra_Thick_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="28"></li><li data-original-index="29"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Standout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="30"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Wornout_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="31"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Grungeink_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="32"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><img src="./iMenuPro_files/Text_Vintagetitle_thumb.svg" style="width:179px"><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select id="mp-floatingtext-boxaccent" data-size="12" class="selectpicker" data-width="180px" data-container="body" tabindex="-98">
                                <option>(none)</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thin</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Thick</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_2_Lines_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_2_Lines</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Dashed_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Dashed</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Solid_Inverted_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Solid_Inverted</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Rounded_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Rounded_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Paint_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Paint_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Torn_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Torn_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Oval_3_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Oval_3</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_1</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Jetson_2_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Jetson_2</option>
                                <option data-content="&lt;img src=&#39;boxes/thumbs/Box_Smudge_1_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Box_Smudge_1</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Round_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Round</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Square_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Square</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Dots_Japanese_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Dots_Japanese</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Left_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Left</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Hash_Slant_Right_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Hash_Slant_Right</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thin_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thin</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Thick</option>
                                <option data-content="&lt;img src=&#39;dividers/thumbs/Underline_Ultra_Thick_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Underline_Ultra_Thick</option>
                                <option data-divider="true"></option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Standout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">Text_Standout</option>
                                <!-- 11.0.37 -->
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Wornout_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_worn</option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Grungeink_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_grunge</option>
                                <option data-content="&lt;img src=&#39;text/thumbs/Text_Vintagetitle_thumb.svg&#39; style=&#39;width:179px&#39;&gt;">filter_vintage</option>
                            </select></div>
                    </div>

                    <div>
                        <span class="spanFTAccentColorText MPpadTop5px" style="margin-left:0">Box/Accent Color:</span>
                        <div class="MPpadTop3px">
                            <input id="dialog-floating-text-accent-color" value="d2b48a" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(210, 180, 138);"></div></div><div class="sp-dd">▼</div></div>
                        </div>
                    </div>

                </div>

                <div class="spanFTCol3 " style="margin-left:0">
                    <span><b>Position</b></span>
                    <div class="MPpadTop1px">
                        <div class="MPpadTop8px">Left:</div>
                        <div class=""><input id="mp-floatingtext-left" style="" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.25&quot;"></div>
                        <div class="MPpadTop3px">Top:</div>
                        <div class="" style="margin-left:0px;"><input id="mp-floatingtext-top" style="" type="text" class="spanTextInGeneric" pattern="-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?(?:&quot;|in|cm|mm|px)?" value="0.25&quot;"></div>
                    </div>
                </div>

            </div>

        </div>

        <div class="modal-footer">
		    <span id="mp-floatingtext-onmenu" class="OnMenuCheckBox hide">
			    <label class="checkbox clearfix" style="float:left;"><input id="mp-ft-onmenubox" type="checkbox" checked="checked">On Menu</label>
		    </span>
            <button id="dialog-floatingtext-ok" class="btn btn-primary notranslate">OK</button>
            <button id="dialog-floatingtext-cancel" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-alpha-enabled sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#e42843" data-color="rgb(228, 40, 67)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(228, 40, 67);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#a11d28" data-color="rgb(161, 29, 40)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(161, 29, 40);"></span></span><span title="#404041" data-color="rgb(64, 64, 65)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 64, 65);"></span></span><span title="#56697d" data-color="rgb(86, 105, 125)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(86, 105, 125);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#ffc639" data-color="rgb(255, 198, 57)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 198, 57);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span><span title="#40260f" data-color="rgb(64, 38, 15)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(64, 38, 15);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 149, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner" style="background: linear-gradient(to right, rgba(210, 180, 138, 0), rgb(210, 180, 138));"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#d2b48a" data-color="rgb(210, 180, 138)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(210, 180, 138);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>




<div id="myResetMenuStyleDialog" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-resetstyle-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogYesNoTitleFont">Confirm</h3>
        </div>

        <div class="modal-body YNmodal-body">
            <span style="padding-left:15px"><span class="badge badge-info notranslate">?</span>&nbsp;Reset all design changes back to their Style defaults?</span>
        </div>

        <div class="modal-footer YNmodal-footer">
            <button id="dialog-reset-ok" class="btn btn-primary  ">Yes</button>
            <button id="dialog-reset-cancel" class="btn" data-dismiss="modal">No</button>
        </div>
    </form>
</div>


<div id="myDeleteFoodItem" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-deletefood-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogYesNoTitleFont">Confirm</h3>
        </div>

        <div class="modal-body YNmodal-body">
            <blockquote>
                <p id="mp-fooditem-to-delete" class="muted">Food item</p>
            </blockquote>
            <div class="text-info" style="margin-left:45px;padding-bottom:20px;">
                <span class="badge badge-important">!</span>
                <span><em>&nbsp;Heads up! This food item will be permanently removed from your Food Item list and ALL menus that it appears on. You won't be able to undo this action.</em></span>
            </div>
        </div>

        <div class="modal-footer YNmodal-footer">
            <button id="mp-fooditem-confirmDelete" class="btn btn-danger">Delete</button>
            <button class="btn " data-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<div id="myDeleteHeading" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-deleteheading-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogYesNoTitleFont">Confirm</h3>
        </div>

        <div class="modal-body YNmodal-body">
            <blockquote>
                <p id="mp-heading-to-delete" class="muted">Heading</p>
            </blockquote>
            <span style="padding-left:15px"><span class="badge badge-info notranslate">?</span>&nbsp;Delete this Menu Heading?</span>
        </div>

        <div class="modal-footer YNmodal-footer">
            <button id="mp-deleteheading-confirm" class="btn btn-primary">Yes</button>
            <button class="btn " data-dismiss="modal">No</button>
        </div>
    </form>
</div>


<div id="myDeleteMenuModal" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-deletemenu-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogTitleFont">Confirm Delete</h3>
        </div>

        <div class="modal-body YNmodal-body">
            <span style="padding-left:15px"><span class="badge badge-important">?</span>&nbsp;Delete this menu?</span>
            <p class="text-info" style="margin-left:50px"><em><small id="mp-noundo-delmenu">This menu will be permanently removed and you won't be able to undo this action.</small></em></p>
        </div>

        <div class="modal-footer YNmodal-footer">
            <button id="dialog-deletemenu-yes" class="btn btn-danger">Delete</button>
            <button id="dialog-deletemenu-no" class="btn" data-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>

<div id="myRevertModal" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form">
        <div class="modal-header">
            <button id="dialog-revertmenu-x" type="button" class="close" data-dismiss="modal">×</button>
            <h3 class="MPdialogYesNoTitleFont">Confirm</h3>
        </div>

        <div class="modal-body YNmodal-body">
            <span style="padding-left:15px"><span class="badge badge-warning">?</span>&nbsp;Revert to last opened version of this menu?</span>
            <p class="text-info" style="margin-left:50px"><em><small>All changes to your menu (including its name) will be reverted to when you last opened it. When Revert has finished, you can select Undo from the Edit menu to undo the Reverting.</small></em></p>
        </div>

        <div class="modal-footer YNmodal-footer">
            <button id="dialog-revert-yes" class="btn btn-primary">Yes</button>
            <button id="dialog-revert-no" class="btn" data-dismiss="modal">No</button>
        </div>
    </form>
</div>





<div id="myMobileMenuModal" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form" id="mobile-form">

        <div class="modal-header" id="mobile-background">
            <button id="dialog-mobile-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-mobile-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Sync your menu to your website menu and your Facebook menu in a fast, mobile-friendly format. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="mp-mobile-title" class="MPdialogTitleFont">Sync your menu to your website menu in a mobile-friendly format</h3>
        </div>

        <div class="modal-body">

            <div class="row">

                <div class="spanMobileOptionsCol">


                    <div id="mp-mobile-options">

                        <div>
                            <span>Preview on:</span>
                            <span style="padding-left:5px"><a id="mp-mobile-view-iphone" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-iphone"></i> Mobile</a></span>
                            <span style="padding-left:10px"><a id="mp-mobile-view-desktop" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i class="icon2-desktop"></i> Desktop</a></span>
                        </div>

                        <div class="row MPpadTop14px">
                            <div class="spanAppearanceMobile">
                                <div class="row MPpadTop3px">
                                    <span class="MPpadTop5px spanMobileDesignText"><b>Appearance:</b></span>
                                    <select id="mp-mobile-appearance" style="width:114px" class="tipoff notranslate" rel="tooltip" title="Match your menu&#39;s look or choose a highly readable mobile design.">
                                        <option value="match" selected="">Match</option>
                                        <option value="modern">Modern</option>
                                        <option value="classic">Classic</option>
                                        <option value="specials">Specials</option>
                                        <option value="typewriter">Typewriter</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="boldbites">Boldbites</option>
                                    </select>
                                </div>

                                <div>
                                    <span class="spanMobileColorText" style="margin-left:0px;">Background color:</span>
                                </div>
                                <div style="margin-left:0">
                                    <input id="dialog-mobile-color" value="f6f3e1" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(246, 243, 225);"></div></div><div class="sp-dd">▼</div></div>
                                </div>

                                <div class="row MPpadTop3px">
                                    <label id="mp-tcolor-text" class="checkbox spanMobileTColorText">
                                        <input id="mp-change-tcolor" type="checkbox">Change text color:</label>
                                    <input id="dialog-mobile-tcolor" value="000000" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(0, 0, 0);"></div></div><div class="sp-dd">▼</div></div>
                                    <a id="mp-more-mobile" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="pull-right tipoff not_in_demo disabled" rel="tooltip" title="But wait, there&#39;s more (appearance tweaks)"><small id="more-text">more...</small></a>
                                </div>

                                <div id="mobile-more" class="MPpadTop9px hide">
                                    <div>
                                        <small><em>More appearance tweaks</em></small>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-no-titles" type="checkbox" value="">Hide Title Headings</label>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-no-prices" type="checkbox" value="">Hide Prices</label>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-no-ftext" type="checkbox" value="">Hide Floating Text</label>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-no-footer" type="checkbox" value="">Hide Footer</label>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-no-cols" type="checkbox" value="">No Columns</label>
                                    </div>
                                    <div class="row MPpadTop5px">
                                        <label class="checkbox spanSettingsMore"><input id="more-click-pics" type="checkbox" value="" rel="tooltip" title="Allows photos to be clicked and enlarged">Clickable photos</label>
                                    </div>
                                </div>
                                <!-- /end mobile more div -->

                            </div>
                        </div>

                        <div id="mobile-less" class="">

                            <hr style="margin-bottom:10px;margin-top:18px">
                            <div style="margin-top:15px notranslate">
                                <p>Last synced: <span class="pull-right"><code id="mp-mobile-updated">Not synced yet</code></span></p>
                            </div>

                            <div class="row">
                                <label id="live-sync-text" class="checkbox spanLiveUpdate" style="padding-top:2px"><input id="mp-live-sync" type="checkbox" class="tipoff not_in_demo disabled" rel="tooltip" title="If checked, syncs your mobile menu each time you save your printed menu.">Automatically Sync on Menu Save</label>
                                <a id="mp-publish-btn" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="pull-right btn btn-small btn-info tipoff not_in_demo disabled" rel="tooltip" title="Sync your printed menu with your website menu"><i class="icon2-iphone icon2-white"></i> Sync Now</a>
                            </div>

                            <hr style="margin-bottom:9px;margin-top:5px">
                            <div id="mobile-dothis" class="MPpadTop1px hide">
                                <small><em>Add the following snippet of code to your webpage where you want your menu to appear. You only need to do this once.</em></small>
                            </div>

                            <div id="mobile-embed" class="MPpadTop6px hide notranslate" style="margin:0">
                                <b>Embed</b>
                                <div id="mp-mobile-embedcode" class="well">
                                </div>
                            </div>

                            <div id="mobile-sendto" class="MPpadTop6px hide" style="margin:0">
                                <div style="margin-bottom:5px"><small><em>Or send these instructions to your webmaster</em></small></div>
                                <!-- <input type="text" id="webmaster-email-address" name="webmaster-email-address" placeholder="Webmaster's Email" spellcheck="false" class="spanMobileEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onkeydown="return ignoreEnter(event);" required> -->
                                <input type="email" id="webmaster-email-address" name="webmaster-email-address" placeholder="Webmaster&#39;s Email" spellcheck="false" class="spanMobileEmail" onkeydown="return ignoreEnter(event);" required="">
                                <a style="float:right" id="mp-email-webmaster-btn" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="btn btn-small btn-info btn-mail not_in_demo notranslate disabled" rel="tooltip" title="Email instructions to your webmaster"><i style="margin-right:1px" class="icon-envelope icon-white"></i> Send</a>
                                <div class="spanMobileTweet" style="margin-bottom:5px;margin-left:0"><small><em>Or tweet your live-synced menu</em></small></div>
                                <a style="float:right" id="mp-tweet-btn" class="btn btn-small btn-info btn-tweet not_in_demo notranslate disabled" rel="tooltip" title="Share your currently synced menu on Twitter" href="https://twitter.com/intent/tweet?text=Check%20out%20our%20new%20menu&amp;url=https://onlineMenu.com/@">
                                    <i style="margin-right: 3px;margin-left:-3px" class="icon2-twitter icon2-white"></i>Tweet</a>
                            </div>

                        </div> <!-- /end less option -->

                    </div>

                </div>

                <div class="spanMenuPreviewCol notranslate">
                    <!-- for top of phone, may not be used -->
                    <div class="row" style="margin-left:0">
                    </div>
                    <div class="MPpadTop4px" style="margin-bottom:0px">
                        <div id="mp-mobile-preview" class="MobilePreviewBorder">
                            <iframe id="iframe-iphone" class="iframe-mobile" src="./iMenuPro_files/mobile.html" frameborder="0" width="100%" height="100%"></iframe>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div id="mp-mobile-footer" class="modal-footer">
            <button id="dialog-mobile-ok" class="btn btn-primary" data-dismiss="modal">Done</button>
        </div>

    </form>
    <div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#ffffff" data-color="rgb(255, 255, 255)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 255, 255);"></span></span><span title="#fffee6" data-color="rgb(255, 254, 230)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 254, 230);"></span></span><span title="#eaf2df" data-color="rgb(234, 242, 223)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(234, 242, 223);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#f6f3e1" data-color="rgb(246, 243, 225)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(246, 243, 225);"></span></span><span title="#f0e2c6" data-color="rgb(240, 226, 198)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(240, 226, 198);"></span></span><span title="#c8e9f0" data-color="rgb(200, 233, 240)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(200, 233, 240);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#fef5c0" data-color="rgb(254, 245, 192)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(254, 245, 192);"></span></span><span title="#dfe0eb" data-color="rgb(223, 224, 235)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(223, 224, 235);"></span></span><span title="#efd54d" data-color="rgb(239, 213, 77)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(239, 213, 77);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#abb8ca" data-color="rgb(171, 184, 202)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(171, 184, 202);"></span></span><span title="#fbf2e2" data-color="rgb(251, 242, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(251, 242, 226);"></span></span><span title="#d4c4a2" data-color="rgb(212, 196, 162)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(212, 196, 162);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 219, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#f6f3e1" data-color="rgb(246, 243, 225)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(246, 243, 225);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div><div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span><span title="#818285" data-color="rgb(129, 130, 133)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(129, 130, 133);"></span></span><span title="#4d4d4f" data-color="rgb(77, 77, 79)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(77, 77, 79);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#386cb4" data-color="rgb(56, 108, 180)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(56, 108, 180);"></span></span><span title="#802318" data-color="rgb(128, 35, 24)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(128, 35, 24);"></span></span><span title="#c81307" data-color="rgb(200, 19, 7)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(200, 19, 7);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#554017" data-color="rgb(85, 64, 23)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(85, 64, 23);"></span></span><span title="#de1d3c" data-color="rgb(222, 29, 60)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(222, 29, 60);"></span></span><span title="#f17258" data-color="rgb(241, 114, 88)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(241, 114, 88);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#00aeef" data-color="rgb(0, 174, 239)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(0, 174, 239);"></span></span><span title="#036a44" data-color="rgb(3, 106, 68)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(3, 106, 68);"></span></span><span title="#5ec19f" data-color="rgb(94, 193, 159)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(94, 193, 159);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-4"><span title="#0a9fb8" data-color="rgb(10, 159, 184)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(10, 159, 184);"></span></span><span title="#694371" data-color="rgb(105, 67, 113)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(105, 67, 113);"></span></span><span title="#caa308" data-color="rgb(202, 163, 8)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(202, 163, 8);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 0, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#000000" data-color="rgb(0, 0, 0)" class="sp-thumb-el sp-thumb-dark sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(0, 0, 0);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>





<!-- View Classic
	=================== -->
<div id="mp-foodlistmenu-container" class="container"> <!-- no pull-left-->

    <div class="row" style="margin-left:0">

        <div id="mp-food-sidebar" style="position: absolute; margin-top: 12px; padding-top: 0px; border-color: rgb(245, 245, 245); border-width: inherit; border-top-style: hidden; opacity: 1;">

            <div style="margin-bottom:5px" class="dont_select">
                <span id="mp-fooditems-title">Food Items</span>
                <a id="menu-new-fooditem-btn" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myFoodItemDialog" role="button" data-toggle="modal" class="btn btn-mini" style="vertical-align: top;" rel="tooltip" title="Create new Food Item"><i class="icon-edit"></i>&nbsp;new</a>

                <div id="foodbtngdiv" class="btn-group" style="vertical-align: top; margin-bottom: 0px;">
                    <a class="btn btn-mini dropdown-toggle" style="vertical-align:top" data-toggle="dropdown" rel="tooltip" title="View options for sidebar" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" aria-expanded="false"><i class="icon-list-alt"></i> list <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header">Sort by</li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleViewFoods(&#39;#mp-sort-bydate-icon&#39;); return false;"><i id="mp-sort-bydate-icon" class="no-menu-icon"></i> Date added</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleViewFoods(&#39;#mp-sort-byalpha-icon&#39;); return false;"><i id="mp-sort-byalpha-icon" class="no-menu-icon"></i> Name</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleViewFoods(&#39;#mp-sort-byorder-icon&#39;); return false;"><i id="mp-sort-byorder-icon" class="icon-ok"></i> Order on Menu</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleViewFoods(&#39;#mp-sort-bynote-icon&#39;); return false;"><i id="mp-sort-bynote-icon" class="no-menu-icon"></i> Note</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleNotes(&#39;hide&#39;); return false;"><i id="mp-hide-notes-icon" class="icon-ok"></i> Hide Notes</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleNotes(&#39;show&#39;); return false;"><i id="mp-show-notes-icon" class="no-menu-icon"></i> Show Notes</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleListSize(&#39;#mp-short-list-icon&#39;); return false;"><i id="mp-short-list-icon" class="icon-ok"></i> Short List</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleListSize(&#39;#mp-long-list-icon&#39;); return false;"><i id="mp-long-list-icon" class="no-menu-icon"></i> Long List</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleListWidth(&#39;#mp-thin-list-icon&#39;); return false;"><i id="mp-thin-list-icon" class="icon-ok"></i> Thin List</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleListWidth(&#39;#mp-wide-list-icon&#39;); return false;"><i id="mp-wide-list-icon" class="no-menu-icon"></i> Wide List</a></li>
                        <li class="divider"></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleLockSidebar(&#39;unlock&#39;); return false;"><i id="mp-locksidebar-no-icon" class="icon-ok"></i> Unlock Sidebar</a></li>
                        <li><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" onclick="toggleLockSidebar(&#39;lock&#39;); return false;"><i id="mp-locksidebar-yes-icon" class="no-menu-icon"></i> Lock Sidebar</a></li>
                    </ul>
                    <a id="nowidestance" class="" rel="tooltip" title="Wide list" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1">»</a>
                    <span class="gaugevals pull-right hide" style="display: none;">Total Food Items: <code id="mp-acct-fooditem">na</code>&nbsp;&nbsp;&nbsp;&nbsp;Items on Menu: <code id="mp-cmenu-items">na</code></span> <!-- pull-right required for valign -->
                </div>

                <div class="row notranslate" style="margin-left:0">
                    <form id="mp-quick-find-form" class="navbar-search pull-left ">
                        <input id="mp-quick-find" type="text" class="search-query removeIEx" placeholder="Find Food Item" style="width: 180px;">
                    </form>
                </div>

            </div>

            <div class="megalist notranslate" id="myFoodList" data-target="#foodlist-contextmenu" style="height: 286px;">
                <ul style="visibility: visible; left: 0px; top: 0px;"><li class="megalistItem" list-index="0" style="left: 0px; top: 0px;"><i class="icon-on-menu" id="fooditem-1"></i>&nbsp;<span class="fooditem-name">Samples - Click to Edit</span></li><li class="megalistItem" list-index="1" style="left: 0px; top: 41px;"><i class="icon-on-menu" id="fooditem-2"></i>&nbsp;<span class="fooditem-name">Name for Sample 2</span><br><span class="MPNotesFont hide ">This item contains an example Note</span></li><li class="megalistItem" list-index="2" style="left: 0px; top: 82px;"><i class="icon-on-menu" id="fooditem-3"></i>&nbsp;<span class="fooditem-nameprice">Authentic Pizza Napoletana</span></li><li class="megalistItem megalistSelected" list-index="3" style="left: 0px; top: 123px;"><i class="icon-on-menu" id="fooditem-5"></i>&nbsp;<span class="fooditem-name">Grilled Chicken Panini</span></li><li class="megalistItem" list-index="4" style="left: 0px; top: 164px;"><i class="icon-on-menu" id="fooditem-6"></i>&nbsp;<span class="fooditem-name">Local Oyster Mushroom Salad</span><br><span class="MPNotesFont hide ">recipe or seasonality for this item could go here</span></li><li class="megalistItem" list-index="5" style="left: 0px; top: 205px;"><i class="icon-on-menu" id="fooditem-7"></i>&nbsp;<span class="fooditem-name">Grilled Faroe Island Salmon</span></li><li class="megalistItem" list-index="6" style="left: 0px; top: 246px;"><i class="icon-off-menu" id="fooditem-4"></i>&nbsp;<span class="fooditem-name">Drag this to Menu</span></li><li class="megalistItem" list-index="7" style="left: 0px; top: 697px;"></li></ul><div id="scrollbar" style="width: 7.5px; height: 281.031px; top: 1px;"></div></div>

            <div id="mp-heading-sidebar" class="dont_select">
                <span id="mp-headings-title">Menu Headings</span>
                <a id="mp-menuhead-new" role="button" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#myHeadingDialog" data-toggle="modal" class="btn btn-mini" style="vertical-align: top;" rel="tooltip" data-placement="top" title="Create new Heading"><i class="icon-edit"></i>&nbsp;new</a>
            </div>

            <div class="megalist notranslate" id="myHeadingList" data-target="#headinglist-contextmenu" style="height: 245px;"> <ul style="visibility: visible; left: 0px; top: 0px;"><li class="megalistItem" list-index="0" style="left: 0px; top: 0px;"><i class="icon-on-menu" id="headitem-h0"></i>&nbsp;<span class="fooditem-name">Gatsby's</span></li><li class="megalistItem" list-index="1" style="left: 0px; top: 41px;"><i class="icon-on-menu" id="headitem-h3"></i>&nbsp;<span class="fooditem-name">Appetizers</span></li><li class="megalistItem" list-index="2" style="left: 0px; top: 82px;"><i class="icon-on-menu" id="headitem-h1"></i>&nbsp;<span class="fooditem-name">Sample Heading</span></li><li class="megalistItem" list-index="3" style="left: 0px; top: 123px;"><i class="icon-on-menu" id="headitem-h2"></i>&nbsp;<span class="fooditem-name">Subheading - you can edit or delete any headings, or add your own</span></li><li class="megalistItem" list-index="4" style="left: 0px; top: 164px;"><i class="icon-on-menu" id="headitem-h4"></i>&nbsp;<span class="fooditem-name">Entrées Sample</span></li><li class="megalistItem" list-index="5" style="left: 0px; top: 205px;"><i class="icon-off-menu" id="headitem-h5"></i>&nbsp;<span class="fooditem-name">Desserts</span></li><li class="megalistItem" list-index="6" style="left: 0px; top: 615px;"></li></ul><div id="scrollbar" style="width: 7.5px; height: 240.037px; top: 1px;"></div></div>

        </div>

        <!-- Le Menu
		====================== -->
        <div id="SVGMenuPro11" class="SVGMenuPosition MPClassicView ui-droppable" data-target="#svgmenu-contextmenu" style="width: 816px; height: 1056px; opacity: 1; margin-left: 262px;">
            <svg id="imp11-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="816" height="1056" viewBox="0 0 816 1056">
			<g id="tt">
                <style>
                    @page {size: US-Letter};
                </style>

                <defs>
                    <pattern id="movepattern" x="0" y="0" width="100%" height="100%" patternUnits="objectBoundingBox">
                        <image xlink:href="bootstrap/img/moving.svg" preserveAspectRatio="none" x="0in" y="0in" width="3800" height="3800"></image>
                    </pattern>
                    <pattern id="movepattern_np" x="0" y="0" width="100%" height="100%" patternUnits="objectBoundingBox">
                        <image xlink:href="bootstrap/img/moving_np.svg" preserveAspectRatio="none" x="0in" y="0in" width="3800" height="3800"></image>
                    </pattern>
                    <marker id="arrowtop" viewBox="0 0 12 12" refX="5" refY="5" markerUnits="strokeWidth" markerWidth="4" markerHeight="4" orient="270" fill="#333333">
                        <path d="M 0 0 L 12 5 L 0 10 z" stroke-width="1px"></path>
                    </marker>
                    <marker id="arrowbot" viewBox="0 0 12 12" refX="5" refY="5" markerUnits="strokeWidth" markerWidth="4" markerHeight="4" orient="auto" fill="#333333">
                        <path d="M 0 0 L 12 5 L 0 10 z" stroke-width="1px"></path>
                    </marker>
                    <!-- VINTAGE -->
                    <filter id="filter_vintage">
                        <feflood flood-color="#582D1C" result="SHDCLR"></feflood>
                        <femorphology operator="dilate" radius="2" in="SourceAlpha" result="WSTROKE"></femorphology>
                        <fecomponenttransfer in="WSTROKE" result="WSTROKE_B">
                            <fefunca type="table" tableValues="0.0 0.7"></fefunca>
                        </fecomponenttransfer>
                        <feoffset dx="-2.5" dy="-2.5" in="WSTROKE_B" result="dx1"></feoffset>
                        <feoffset dx="-2" dy="-2" in="WSTROKE_B" result="dx2"></feoffset>
                        <feoffset dx="-1.5" dy="-1.5" in="WSTROKE_B" result="dx3"></feoffset>
                        <feoffset dx="-1" dy="-1" in="WSTROKE_B" result="dx4"></feoffset>
                        <feoffset dx="0" dy="0" in="WSTROKE_B" result="dx5"></feoffset>
                        <feoffset dx="1" dy="1" in="WSTROKE_B" result="dx6"></feoffset>
                        <feoffset dx="1.5" dy="1.5" in="WSTROKE_B" result="dx7"></feoffset>
                        <feoffset dx="2" dy="2" in="WSTROKE_B" result="dx8"></feoffset>
                        <feoffset dx="2.5" dy="2.5" in="WSTROKE_B" result="dx9"></feoffset>
                        <femerge result="BEVEL_20">
                            <femergenode in="dx1"></femergenode>
                            <femergenode in="dx2"></femergenode>
                            <femergenode in="dx3"></femergenode>
                            <femergenode in="dx4"></femergenode>
                            <femergenode in="dx5"></femergenode>
                            <femergenode in="dx6"></femergenode>
                            <femergenode in="dx7"></femergenode>
                            <femergenode in="dx8"></femergenode>
                            <femergenode in="dx9"></femergenode>
                        </femerge>

                        <feoffset dx="2" dy="2" in="BEVEL_20" result="BEVEL_25"></feoffset>
                        <fecomposite operator="out" in="BEVEL_25" in2="WSTROKE" result="BEVEL_30"></fecomposite>
                        <fecomposite in="SHDCLR" in2="BEVEL_30" operator="in" result="BEVEL_40"></fecomposite>
                        <femerge result="BEVEL_50">
                            <femergenode in="BEVEL_40"></femergenode>
                            <femergenode in="SourceGraphic"></femergenode>
                        </femerge>
                        <fecomposite in="BEVEL_50" operator="in"></fecomposite>
                    </filter>
                    <!-- WORN -->
                    <filter id="filter_worn">
                        <feturbulence baseFrequency=".05,.005" type="fractalNoise" numOctaves="3" seed="0"></feturbulence>
                        <fecolormatrix type="matrix" values="0 0 0 0 0, 0 0 0 0 0, 0 0 0 0 0, 0 0 0 -0.9 1.1" result="FRACTAL-1"></fecolormatrix>
                        <feconvolvematrix order="8,8" divisor="1" kernelMatrix="1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1 0 0 0 0 0 0 0 0 1"></feconvolvematrix> <!-- IE requires no line breaks -->
                        <fecomposite operator="out"></fecomposite>
                        <fecomposite operator="in"></fecomposite>
                        <femerge>
                            <femergenode></femergenode>
                            <femergenode in="SourceGraphic"></femergenode>
                        </femerge>
                        <fecomposite in2="FRACTAL-1" operator="in"></fecomposite>
                    </filter>
                    <!-- GRUNGE -->
                    <filter id="filter_grunge">
                        <feturbulence result="TURBULENCE" baseFrequency="0.1,0.01" numOctaves="1" seed="1"></feturbulence>
                        <fedisplacementmap in="SourceGraphic" in2="TURBULENCE" scale="5"></fedisplacementmap>
                    </filter>
                </defs>

                <rect id="faux-white-background" fill="#ffffff" pointer-events="fill" x="0in" y="0in" height="11in" width="8.5in"></rect>
                <g id="background" pointer-events="none" transform="translate(0,0) scale(1,1)" style="opacity: 1;">
                    <rect id="background-rect" fill="none" x="0in" y="0in" height="11in" width="8.5in"></rect>

                </g>
                <g id="menuborder" pointer-events="none" transform="translate(0,0) scale(1,1)" style="opacity: 1;"><image x="28.799999999999997" y="28.799999999999997" width="758.4" height="998.4" preserveAspectRatio="none" xlink:href="https://onlineMenu.com/svgimg/OjovU1ZHL2JvcmRlcnMvQmxhY2tfVGllXzEwLnN2Zw=="></image></g>
                <g id="colline" pointer-events="none" style="opacity: 1; display: inline;"></g>
                <!-- faux-click must be below images -->
                <rect id="faux-click" pointer-events="fill" fill="none" x=".1in" y=".1in" height="10.8in" width="8.3in"></rect>
                <g id="floatimages" data-target="#imagelist-contextmenu" style="pointer-events: all;"><svg height="100%" version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs></svg></g>
                <!-- grid and joiner must be below text -->
                <g id="gridlines" pointer-events="none"></g>
                <g id="joiner"></g>
                <g id="textcanvas" class="text-pre" data-target="#foodcanvas-contextmenu" style="opacity: 1; pointer-events: all;"><g id="headitem_h0" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="0.58in"><tspan x="1in" dy="60.6" od="51" text-anchor="start" class="title-heading" des="19.07" asc="50" lh="70.07" th="70.07" oh="79.67" lw="109" dy0="60.60" oh0="79.67" s_aft="0.00" s_bef="9.60" n_col="0">Gatsby's</tspan></text><rect class="rr" x="1in" y="55.67999999999999" height="79.67" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="headitem_h3" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="1.4098958333333333in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="113.8" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Appetizers</tspan></text><rect class="rr" x="1in" y="135.35" height="73.7" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="fooditem_1" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="2.1776in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="43.5700" oh="54.61" lw="33.202" dy0="29.54" oh0="54.61" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$9.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="136.877" dy0="18.5" oh0="23.60">Samples - Click to Edit</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="19.97" oh="19.97" lw="380.5" dy0="15.7" oh0="19.97">Description for thfdfsdfsdsample item. Use this to describe your food item</tspan></text><rect class="rr" x="1in" y="209.05" height="54.61" width="624.0000" style="display: none;"></rect></g><g id="fooditem_2" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="2.7465in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="43.5700" oh="54.61" lw="33.202" dy0="29.54" oh0="54.61" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$8.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="119.795" dy0="18.5" oh0="23.60">Name for Sample 2</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="19.97" oh="19.97" lw="399.1" dy0="15.7" oh0="19.97">You can click to edit these sample items or delete them from the food item list</tspan></text><rect class="rr" x="1in" y="263.66" height="54.61" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="fooditem_3" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="3.3153in"><tspan x="6.7in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="23.6000" oh="34.64" lw="40.638" dy0="29.54" oh0="34.64" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$12.95</tspan><tspan x="7.5in" dy="0" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="23.6000" oh="23.60" lw="40.638" dy0="18.5" oh0="23.60">$16.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="172.796" dy0="18.5" oh0="23.60">Authentic Pizza Napoletana</tspan></text><rect class="rr" x="1in" y="318.27" height="34.64" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="headitem_h1" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="3.676145833333333in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="174.9" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Sample Heading</tspan></text><rect class="rr" x="1in" y="352.90999999999997" height="73.7" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="headitem_h2" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="4.443854166666666in"><tspan x="1.14in" dy="20.44" od="14.2" text-anchor="start" class="small-heading" des="3.90" asc="10.2" lh="18.15" th="18.15" oh="24.39" lw="365.9" dy0="20.44" oh0="24.39" s_aft="0.00" s_bef="6.24" n_col="0">SUBHEADING - YOU CAN EDIT OR DELETE ANY HEADINGS, OR ADD YOUR OWN</tspan></text><rect class="rr" x="1in" y="426.60999999999996" height="24.39" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="fooditem_5" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="4.6979in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="63.5400" oh="74.58" lw="40.638" dy0="29.54" oh0="74.58" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$11.25</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="137.046" dy0="18.5" oh0="23.60">Grilled Chicken Panini</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="404.4" dy0="15.7" oh0="39.94">Fresh mozzarella, roasted red peppers, sliced tomatoes, mixed field greens and</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="102.5">balsamic vinaigrette</tspan></text><rect class="rr" x="1in" y="451" height="74.58" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="fooditem_6" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="5.4748in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="81.6900" oh="92.73" lw="42.718" dy0="29.54" oh0="92.73" bigHT="4.29" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>Market</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="186.914" dy0="18.5" oh0="23.60">Local Oyster Mushroom Salad</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="420.7" dy0="15.7" oh0="39.94">This item uses Market for price. The price field can be any number or text, and can</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="295.4">even be multiple prices (separate them with a semi-colon)</tspan><tspan x="1.24in" dy="18.4900" od="14.2" text-anchor="start" class="extras" des="3.90" asc="10.2" lh="18.15" th="18.15" oh="18.15" lw="16.3" dy0="14.2" oh0="18.15">+ lo</tspan></text><rect class="rr" x="1in" y="525.58" height="92.73" width="624.0000" style="display: none;"></rect></g><g id="headitem_h4" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="6.440729166666667in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="162.5" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Entrées Sample</tspan></text><rect class="rr" x="1in" y="618.3100000000001" height="73.7" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="fooditem_7" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="7.2084in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="63.5400" oh="74.58" lw="22.308" dy0="29.54" oh0="74.58" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$26</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="171.639" dy0="18.5" oh0="23.60">Grilled Faroe Island Salmon</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="425.3" dy0="15.7" oh0="39.94">Quinoa, oyster mushrooms, Brussels sprout leaves, beet mustard, served with your</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="97.1">choice of two sides</tspan></text><rect class="rr" x="1in" y="692.01" height="74.58" width="624.0000" style="cursor: pointer; display: none;"></rect></g></g>
                <g id="footertext" class="text-pre"></g>
                <g id="floattext" class="text-pre" data-target="#floatingtext-contextmenu" style="pointer-events: all;"></g>
                <g id="menucover"></g>
                <rect id="faux-outline" x="0.0in" y="0.0in" width="8.5in" height="11in" fill="none" stroke-width="1px" stroke="#cacaca" shape-rendering="geometricPrecision"></rect>
                <!-- fit -->
                <rect class="hide" id="fit-anime" x="0.0911179in" y="0in" width="80" height="5" fill="#0045dc">
                    <animate id="anime-f1" attributeType="XML" attributeName="x" from="-1in" to="9.5in" dur="2s" repeatCount="indefinite"></animate>
                </rect>
            </g>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="0in" height="0in" viewBox="0 0 0 0">
			<g id="foodbuff"></g>
            <g id="tc_undo"><g id="c_headitem_h0" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="0.58in"><tspan x="1in" dy="60.6" od="51" text-anchor="start" class="title-heading" des="19.07" asc="50" lh="70.07" th="70.07" oh="79.67" lw="109" dy0="60.60" oh0="79.67" s_aft="0.00" s_bef="9.60" n_col="0">Gatsby's</tspan></text><rect class="rr" x="1in" y="55.67999999999999" height="79.67" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_headitem_h3" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="1.4098958333333333in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="113.8" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Appetizers</tspan></text><rect class="rr" x="1in" y="135.35" height="73.7" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_fooditem_1" style="display: none;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="2.1880208333333333in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="43.5700" oh="54.61" lw="33.202" dy0="29.54" oh0="54.61" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$9.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="136.877" dy0="18.5" oh0="23.60">Samples - Click to Edit</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="19.97" oh="19.97" lw="347.6" dy0="15.7" oh0="19.97">Description for the sample item. Use this to describe your food item</tspan></text><rect class="rr" x="1in" y="210.05" height="54.61" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_fooditem_2" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="2.7465in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="43.5700" oh="54.61" lw="33.202" dy0="29.54" oh0="54.61" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$8.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="119.795" dy0="18.5" oh0="23.60">Name for Sample 2</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="19.97" oh="19.97" lw="399.1" dy0="15.7" oh0="19.97">You can click to edit these sample items or delete them from the food item list</tspan></text><rect class="rr" x="1in" y="263.66" height="54.61" width="624.0000" style="cursor: pointer; display: none;"></rect></g><g id="c_fooditem_3" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="3.3153in"><tspan x="6.7in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="23.6000" oh="34.64" lw="40.638" dy0="29.54" oh0="34.64" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$12.95</tspan><tspan x="7.5in" dy="0" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="23.6000" oh="23.60" lw="40.638" dy0="18.5" oh0="23.60">$16.95</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="172.796" dy0="18.5" oh0="23.60">Authentic Pizza Napoletana</tspan></text><rect class="rr" x="1in" y="318.27" height="34.64" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_headitem_h1" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="3.676145833333333in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="174.9" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Sample Heading</tspan></text><rect class="rr" x="1in" y="352.90999999999997" height="73.7" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_headitem_h2" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="4.443854166666666in"><tspan x="1.14in" dy="20.44" od="14.2" text-anchor="start" class="small-heading" des="3.90" asc="10.2" lh="18.15" th="18.15" oh="24.39" lw="365.9" dy0="20.44" oh0="24.39" s_aft="0.00" s_bef="6.24" n_col="0">SUBHEADING - YOU CAN EDIT OR DELETE ANY HEADINGS, OR ADD YOUR OWN</tspan></text><rect class="rr" x="1in" y="426.60999999999996" height="24.39" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_fooditem_5" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="4.6979in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="63.5400" oh="74.58" lw="40.638" dy0="29.54" oh0="74.58" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$11.25</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="137.046" dy0="18.5" oh0="23.60">Grilled Chicken Panini</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="404.4" dy0="15.7" oh0="39.94">Fresh mozzarella, roasted red peppers, sliced tomatoes, mixed field greens and</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="102.5">balsamic vinaigrette</tspan></text><rect class="rr" x="1in" y="451" height="74.58" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_fooditem_6" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="5.4748in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="63.5400" oh="74.58" lw="42.718" dy0="29.54" oh0="74.58" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>Market</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="186.914" dy0="18.5" oh0="23.60">Local Oyster Mushroom Salad</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="420.7" dy0="15.7" oh0="39.94">This item uses Market for price. The price field can be any number or text, and can</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="295.4">even be multiple prices (separate them with a semi-colon)</tspan></text><rect class="rr" x="1in" y="525.58" height="74.58" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_headitem_h4" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1in" y="6.251666666666668in"><tspan x="1in" dy="60.56" od="35.6" text-anchor="start" class="heading" des="13.10" asc="35.64" lh="48.74" th="48.74" oh="73.7" lw="162.5" dy0="60.56" oh0="73.70" s_aft="0.00" s_bef="24.96" n_col="0">Entrées Sample</tspan></text><rect class="rr" x="1in" y="600.1600000000001" height="73.7" width="624.0000" style="display: none; cursor: pointer;"></rect></g><g id="c_fooditem_7" style="display: inline;"><text alignment-baseline="baseline" text-anchor="start" id="fooddesc1" x="1.14in" y="7.0194in"><tspan x="7.5in" dy="29.54" od="18.5" text-anchor="end" class="price" des="5.07" asc="13.26" lh="23.60" th="63.5400" oh="74.58" lw="22.308" dy0="29.54" oh0="74.58" bigHT="5.07" s_aft="0.00" s_bef="11.04"><tspan class="price dots"> . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . </tspan>$26</tspan><tspan x="1.14in" dy="0" od="18.5" text-anchor="start" class="name" des="5.07" asc="13.26" lh="23.60" th="23.60" oh="23.60" lw="171.639" dy0="18.5" oh0="23.60">Grilled Faroe Island Salmon</tspan><tspan x="1.14in" dy="20.7700" od="15.7" text-anchor="start" class="description" des="4.29" asc="11.22" lh="19.97" th="39.94" oh="39.94" lw="425.3" dy0="15.7" oh0="39.94">Quinoa, oyster mushrooms, Brussels sprout leaves, beet mustard, served with your</tspan><tspan x="1.14in" dy="19.97" text-anchor="start" class="description" lw="97.1">choice of two sides</tspan></text><rect class="rr" x="1in" y="673.86" height="74.58" width="624.0000" style="display: none; cursor: pointer;"></rect></g></g>
            <g id="fb_undo"></g>
            <g id="tc_redo"></g>
            <g id="fb_redo"></g>
		</svg>
        </div>
    </div>
</div>


<!-- 11.0.43 notranslate cannot be on outer DIV -->
<div id="svgmenu-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextcanvas-style" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextcanvas-style-icon" class="icon2-style-switch"></i> Switch Menu Styles...</a></li>
        <li class="divider"></li>
        <li><a id="contextcanvas-background" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextcanvas-background-icon" class="no-menu-icon"></i> Background...</a></li>
        <li><a id="contextcanvas-border" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextcanvas-border-icon" class="no-menu-icon"></i> Border...</a></li>
        <li><a id="contextcanvas-accents" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextcanvas-accents-icon" class="no-menu-icon"></i> Heading Accents...</a></li>
        <li class="divider"></li>
        <li><a id="contextcanvas-footer" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextcanvas-footer-icon" class="no-menu-icon"></i> Footer...</a></li>
    </ul>
</div>

<div id="foodlist-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextfoodlist-new" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodlist-new-icon" class="icon-edit"></i> New Food Item...</a></li>
        <li class="divider"></li>
        <li><a id="contextfoodlist-edit" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodlist-edit-icon" class="no-menu-icon"></i> Edit...</a></li>
        <li><a id="contextfoodlist-delete" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodlist-delete-icon" class="no-menu-icon"></i> Delete</a></li>
        <li class="divider"></li>
        <li><a id="contextfoodlist-place" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodlist-place-icon" class="icon-share"></i> Place on menu</a></li>
        <li><a id="contextfoodlist-remove" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodlist-remove-icon" class="no-menu-icon"></i> Remove from menu</a></li>
    </ul>
</div>

<div id="headinglist-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextheadinglist-new" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextheadinglist-new-icon" class="icon-edit"></i> New Heading...</a></li>
        <li class="divider"></li>
        <li><a id="contextheadinglist-edit" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextheadinglist-edit-icon" class="no-menu-icon"></i> Edit...</a></li>
        <li><a id="contextheadinglist-delete" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextheadinglist-delete-icon" class="no-menu-icon"></i> Delete</a></li>
        <li class="divider"></li>
        <li><a id="contextheadinglist-place" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextheadinglist-place-icon" class="icon-share"></i> Place on menu</a></li>
        <li><a id="contextheadinglist-remove" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextheadinglist-remove-icon" class="no-menu-icon"></i> Remove from menu</a></li>
    </ul>
</div>

<div id="imagelist-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextmagelist-edit" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-edit-icon" class="icon-edit"></i> Edit Image...</a></li>
        <li class="divider"></li>
        <li><a id="contextmagelist-center" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-center-icon" class="icon2-align-center"></i> Align at center</a></li>
        <li class="divider"></li>
        <li><a id="contextmagelist-front" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-front-icon" class="no-menu-icon"></i> Bring to front</a></li>
        <li><a id="contextmagelist-back" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-back-icon" class="no-menu-icon"></i> Send to back</a></li>
        <li class="divider"></li>
        <li><a id="contextmagelist-clone" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-clone-icon" class="icon-adjust"></i> Clone Image</a></li>
        <li class="divider"></li>
        <li><a id="contextmagelist-next" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-next-icon" class="no-menu-icon"></i> Move to next page</a></li>
        <li><a id="contextmagelist-previous" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-previous-icon" class="no-menu-icon"></i> Move to previous page</a></li>
        <li class="divider"></li>
        <li><a id="contextmagelist-remove" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextmagelist-remove-icon" class="no-menu-icon"></i> Remove from menu</a></li>
    </ul>
</div>

<div id="floatingtext-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextftlist-edit" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextftlist-edit-icon" class="icon-edit"></i> Edit Floating Text...</a></li>
        <li class="divider"></li>
        <li><a id="contextftlist-center" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextftlist-center-icon" class="icon2-align-center"></i> Align at center</a></li>
        <li class="divider"></li>
        <li><a id="contextftlist-next" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextftlist-next-icon" class="no-menu-icon"></i> Move to next page</a></li>
        <li><a id="contextftlist-previous" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextftlist-previous-icon" class="no-menu-icon"></i> Move to previous page</a></li>
        <li class="divider"></li>
        <li><a id="contextftlist-remove" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextftlist-remove-icon" class="no-menu-icon"></i> Remove from menu</a></li>
    </ul>
</div>


<div id="foodcanvas-contextmenu">
    <ul class="dropdown-menu notranslate" role="menu">
        <li><a id="contextfoodcanvas-edit" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-edit-icon" class="no-menu-icon"></i> Edit...</a></li>
        <li class="divider"></li>
        <li><a id="contextfoodcanvas-up" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-up-icon" class="icon2-move-up"></i> Move Up</a></li>
        <li><a id="contextfoodcanvas-down" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-down-icon" class="icon2-move-dn"></i> Move Down</a></li>
        <li class="divider"></li>
        <li><a id="contextfoodcanvas-remove" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-remove-icon" class="no-menu-icon"></i> Remove from menu</a></li>
        <li class="divider mp-section-li"></li>
        <li class="mp-section-li"><a id="contextfoodcanvas-section-up" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-section-up-icon" class="icon-align-justify"></i> Move Section Up ↑</a></li>
        <li class="mp-section-li"><a id="contextfoodcanvas-section-down" tabindex="-1" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#"><i id="contextfoodcanvas-section-down-icon" class="icon-align-justify"></i> Move Section Down ↓</a></li>
    </ul>
</div>




<!-- must be below SVG menu -->
<div id="myGiftCertificateCreator" class="modal hide ui-draggable" tabindex="-1" role="dialog" data-backdrop="static">
    <form class="modal-form" id="giftcert-form">

        <div class="modal-header" id="giftcert-background">
            <button id="dialog-giftcert-x" type="button" class="close" data-dismiss="modal">×</button>
            <button id="dialog-giftcert-help" type="button" class="close helpme" rel="tooltipM" data-placement="bottom" title="" data-original-title="Use gift certificates to boost sales, reward loyal customers, and increase foot traffic at your business. Click for more..."><span class="badge badge-info notranslate">?</span>&nbsp;</button>
            <h3 id="mp-giftcert-title" class="MPdialogTitleFont">Gift Certificate</h3>
        </div>

        <div class="modal-body">


            <!-- control groups for form-horizontal -->
            <div class="control-group cert-group MPpadTop5px">
                <div class="controls-row">
                    <input class="cert-field-one" type="text" id="mp-cert-title" onkeydown="return ignoreEnter(event);" maxlength="22" value="Gift Certificate" placeholder="Gift Certificate">
                    <input class="cert-field-two" id="mp-cert-value" rel="tooltip" data-placement="bottom" title="Certificate or coupon type (amount, value, percentage, etc.)" type="text" onkeydown="return ignoreEnter(event);" maxlength="27" value="amount $" placeholder="amount $">
                    <input class="cert-field-three" type="text" id="mp-cert-bizname" onkeydown="return ignoreEnter(event);" maxlength="45" value="Your Business Name" placeholder="Your Business Name">
                </div>
            </div>

            <div class="control-group cert-group">
                <div class="controls-row">
                    <input class="cert-field-one" type="text" id="mp-cert-bizaddress1" onkeydown="return ignoreEnter(event);" maxlength="55" value="" placeholder="Business Address line 1">
                    <input class="cert-field-two" type="text" id="mp-cert-bizaddress2" onkeydown="return ignoreEnter(event);" maxlength="55" value="" placeholder="Business Address line 2">
                    <input class="cert-field-three" type="text" id="mp-cert-fineprint" onkeydown="return ignoreEnter(event);" value="" maxlength="150" placeholder="Terms, conditions, and fine print">
                </div>
            </div>


            <hr id="hrcert" style="margin:4px 0;margin-right:20px">

            <!-- 3 columns Old school -->

            <div id="mp-cert-backgroundmap" class="MPpadTop1px row">

                <!-- column 1 -->
                <div id="mp-cert-col1" class="spanCertCol1">
                    <span>Style</span>
                    <select id="mp-cert-style" size="5" class="notranslate">
                        <option value="4AD.css">4AD </option>
                        <option value="American_Classic.css">American Classic </option>
                        <option value="Balthus.css">Balthus </option>
                        <option value="BBQ_13.css">BBQ 13 </option>
                        <option value="Bethesda_Wine_Bar.css">Bethesda Wine Bar </option>
                        <option value="Bezo_Burger.css">Bezo Burger </option>
                        <option value="Bistro_Garden.css">Bistro Garden </option>
                        <option value="Black_Salt.css">Black Salt </option>
                        <option value="Brunch_Sunnyside.css">Brunch Sunnyside </option>
                        <option value="Charcuterie.css">Charcuterie </option>
                        <option value="Ciao.css">Ciao </option>
                        <option value="City_Bar.css">City Bar </option>
                        <option value="Copper_Plate.css">Copper Plate </option>
                        <option value="Country_Store.css">Country Store </option>
                        <option value="Daily_Catch.css">Daily Catch </option>
                        <option value="DC_Bistro.css">DC Bistro </option>
                        <option value="Elegant_Sushi.css">Elegant Sushi </option>
                        <option value="Eros_Taverna.css">Eros Taverna </option>
                        <option value="Fernet_Buck.css">Fernet Buck </option>
                        <option value="Hickory_Smoke.css">Hickory Smoke </option>
                        <option value="High_Victoria.css">High Victoria </option>
                        <option value="Le_Monde.css">Le Monde </option>
                        <option value="Leaves.css">Leaves </option>
                        <option value="Market_Farmers.css">Market Farmers </option>
                        <option value="Neighborhood_Diner.css">Neighborhood Diner </option>
                        <option value="New_Haven_Slice.css">New Haven Slice </option>
                        <option value="Organic.css">Organic </option>
                        <option value="Oswald_Oyster_Bar.css">Oswald Oyster Bar </option>
                        <option value="Public_Fare.css">Public Fare </option>
                        <option value="Respira_Steakhouse.css">Respira Steakhouse </option>
                        <option value="Shanty_Up.css">Shanty Up </option>
                        <option value="Smoke_Simple.css">Smoke Simple </option>
                        <option value="Spa_Blue.css">Spa Blue </option>
                        <option value="Spa_Lotus.css">Spa Lotus </option>
                        <option value="Steaks_Natur.css">Steaks Natur </option>
                        <option value="Sub_Shop.css">Sub Shop </option>
                        <option value="Sushi_Fresh.css">Sushi Fresh </option>
                        <option value="Tasting_Room.css">Tasting Room </option>
                        <option value="Tequila.css">Tequila </option>
                        <option value="Trattoria.css">Trattoria </option>
                        <option value="Wild_Wings.css">Wild Wings </option>
                    </select>
                </div>


                <!-- column 2 -->
                <div id="mp-cert-col2" class="spanCertCol2" style="margin-left:0">
                    <span>Background</span>
                    <select id="mp-cert-background" size="5" class="notranslate">
                        <option value="none" selected="">(none)</option>
                        <option value="paper">(paper color)</option>
                        <optgroup label="Certificate Backgrounds">
                            <option value="Alaskan_Crab.jpg">Alaskan Crab</option>
                            <option value="Alessi_Corkscrew.jpg">Alessi Corkscrew</option>
                            <option value="Artichoke_brown_cert.jpg">Artichoke brown</option>
                            <option value="Berries.png">Berries</option>
                            <option value="Berry_Dots.png">Berry Dots</option>
                            <option value="Bonsai_Tree.svg">Bonsai Tree</option>
                            <option value="Bowling.png">Bowling</option>
                            <option value="Buffalo_cert.jpg">Buffalo</option>
                            <option value="Charcuterie_Pig_cert.jpg">Charcuterie Pig</option>
                            <option value="Charcuterie_Pig_white_cert.jpg">Charcuterie Pig white</option>
                            <option value="Chef_Grill.jpg">Chef Grill</option>
                            <option value="City_Cocktails.png">City Cocktails</option>
                            <option value="Cityscape_Towers.png">Cityscape Towers</option>
                            <option value="Clouds.png">Clouds</option>
                            <option value="Cockerel.png">Cockerel</option>
                            <option value="Cocoa_brown_cert.jpg">Cocoa brown</option>
                            <option value="Coffee_1.png">Coffee 1</option>
                            <option value="zColor_Block1_cert.png">Color Block1</option>
                            <option value="Concrete.jpg">Concrete</option>
                            <option value="Corkscrew.jpg">Corkscrew</option>
                            <option value="Cornucopia.jpg">Cornucopia</option>
                            <option value="Crawfish_3.jpg">Crawfish 3</option>
                            <option value="Diamonds.png">Diamonds</option>
                            <option value="Dine_Her.jpg">Dine Her</option>
                            <option value="Diner_Breakfast.png">Diner Breakfast</option>
                            <option value="Diner_Counter.png">Diner Counter</option>
                            <option value="Dragons.jpg">Dragons</option>
                            <option value="Entomology.png">Entomology</option>
                            <option value="Fairies.jpg">Fairies</option>
                            <option value="Fall_Leaves.png">Fall Leaves</option>
                            <option value="Fall_Leaves_2.png">Fall Leaves 2</option>
                            <option value="Farm_to_Table_cert.jpg">Farm to Table</option>
                            <option value="Flags_Pagent.png">Flags Pagent</option>
                            <option value="Flag_USA.jpg">Flag USA</option>
                            <option value="Flowers_1.png">Flowers 1</option>
                            <option value="Flowers_5.jpg">Flowers 5</option>
                            <option value="Flowers_Mucha.png">Flowers Mucha</option>
                            <option value="Frosty_Snowman.svg">Frosty Snowman</option>
                            <option value="Garden_Asparagus.png">Garden Asparagus</option>
                            <option value="Garden_Cafe.png">Garden Cafe</option>
                            <option value="Garden_Zen.png">Garden Zen</option>
                            <option value="Geo_Square.jpg">Geo Square</option>
                            <option value="Gingham.jpg">Gingham</option>
                            <option value="Gingham_Cream.png">Gingham Cream</option>
                            <option value="Hardware_Bolts.jpg">Hardware Bolts</option>
                            <option value="Hardware_Keys.png">Hardware Keys</option>
                            <option value="Herbs.png">Herbs</option>
                            <option value="Hot_Air_Balloon.png">Hot Air Balloon</option>
                            <option value="Italia_Basil.jpg">Italia Basil</option>
                            <option value="Japan_Waves_cert.jpg">Japan Waves</option>
                            <option value="Japan_Waves_2.jpg">Japan Waves 2</option>
                            <option value="Jasmine_Tea.png">Jasmine Tea</option>
                            <option value="Kebab_Plate.png">Kebab Plate</option>
                            <option value="Kids_Circus_Lion.png">Kids Circus Lion</option>
                            <option value="Kitsch_Woman.png">Kitsch Woman</option>
                            <option value="Leaves_cert.jpg">Leaves</option>
                            <option value="Lobster_1.png">Lobster 1</option>
                            <option value="Lobster_2.png">Lobster 2</option>
                            <option value="Mothers_Day_Roses.jpg">Mother's Day Roses</option>
                            <option value="New_Year.jpg">New Year</option>
                            <option value="Old_Paper_1.jpg">Old Paper 1</option>
                            <option value="Old_Paper_2.jpg">Old Paper 2</option>
                            <option value="Old_Paper_3.jpg">Old Paper 3</option>
                            <option value="Old_Star.jpg">Old Star</option>
                            <option value="Old_West.png">Old West</option>
                            <option value="Olive_Branch_2.jpg">Olive Branch 2</option>
                            <option value="Organic_Market.jpg">Organic Market</option>
                            <option value="Parchment_1.jpg">Parchment 1</option>
                            <option value="Pasta_Jive.png">Pasta Jive</option>
                            <option value="Pasta.png">Pasta</option>
                            <option value="Pattern_Flecks.png">Pattern Flecks</option>
                            <option value="Pattern_Grunge.png">Pattern Grunge</option>
                            <option value="Pattern_Lattice.png">Pattern Lattice</option>
                            <option value="Pattern_Messa.png">Pattern Messa</option>
                            <option value="Pattern_Peppers.png">Pattern Peppers</option>
                            <option value="Pattern_Seagulls.jpg">Pattern Seagulls</option>
                            <option value="Pattern_Spiro_2.png">Pattern Spiro 2</option>
                            <option value="Pattern_Twirls.png">Pattern Twirls</option>
                            <option value="Pattern_Vegtables.png">Pattern Vegtables</option>
                            <option value="Pattern_Victorian.jpg">Pattern Victorian</option>
                            <option value="Pisa_Tower_Paper.jpg">Pisa Tower Paper</option>
                            <option value="Pitcher.png">Pitcher</option>
                            <option value="Pizza_Deliverer.png">Pizza Deliverer</option>
                            <option value="Rajah.png">Rajah</option>
                            <option value="Raspy_Raspberry.jpg">Raspy Raspberry</option>
                            <option value="Recycled_Kraft_Paper.jpg">Recycled Kraft Paper</option>
                            <option value="Recycled_Paper.jpg">Recycled Paper</option>
                            <option value="RISD_Fish_Fossil.svg">RISD Fish Fossil</option>
                            <option value="Roses_1.jpg">Roses 1</option>
                            <option value="Rothko.png">Rothko</option>
                            <option value="Sakura_cert.jpg">Sakura</option>
                            <option value="Shamrocks.png">Shamrocks</option>
                            <option value="Shrimp.png">Shrimp</option>
                            <option value="Spa_Blue_cert.jpg">Spa Blue</option>
                            <option value="Spa_Lotus_cert.png">Spa Lotus</option>
                            <option value="Spaghetti.png">Spaghetti</option>
                            <option value="Sports_Balls.png">Sports Balls</option>
                            <option value="Sports_Grass.jpg">Sports Grass</option>
                            <option value="Sporty.png">Sporty</option>
                            <option value="Stars_and_Stripes.png">Stars and Stripes</option>
                            <option value="Sun_King_3.jpg">Sun King 3</option>
                            <option value="Sunrah.jpg">Sunrah</option>
                            <option value="Swirl-1_cert.png">Swirl-1</option>
                            <option value="Thai_Room.jpg">Thai Room</option>
                            <option value="Torn_Paper_BBQ_cert.jpg">Torn Paper BBQ</option>
                            <option value="Torn_Paper_Tequila.png">Torn Paper Tequila</option>
                            <option value="Valentine_Be_Mine.jpg">Valentine Be Mine</option>
                            <option value="Vintage_Pig.jpg">Vintage Pig</option>
                            <option value="Watercolor_Buzzy_Bee.jpg">Watercolor Buzzy Bee</option>
                            <option value="Watercolor_Fish.jpg">Watercolor Fish</option>
                            <option value="Wine_and_Grapes.png">Wine and Grapes</option>
                            <option value="Wine_Glass_2.png">Wine Glass 2</option>
                            <option value="Woodsy.jpg">Woodsy</option>
                        </optgroup>
                    </select>


                    <div class="MPpadTop1px row spanCertPaperRow" style="margin-left:0">
                        <div class="pull-right">
                            <span class="spanCertPaperColorText" style="margin-left:0px;">Paper Color:&nbsp;&nbsp;</span>
                            <input id="cert-paper-color" value="fffee6" style="display: none;"><div class="sp-replacer sp-light"><div class="sp-preview"><div class="sp-preview-inner" style="background-color: rgb(255, 254, 230);"></div></div><div class="sp-dd">▼</div></div>
                        </div>
                    </div>

                </div>


                <!-- col 3 -->
                <div class="spanCertCol3" style="margin-left:0">
                    <span>Paper Size/Format</span>
                    <select id="mp-cert-pagesize" class="notranslate">
                        <option value="US-Letter-1">Letter (8.5" width) single</option>
                        <option value="US-Letter-3" selected="">Letter (8.5" x 11") 3 per page</option>
                        <option value="A4-1">A4 (width) single</option>
                        <option value="A4-3">A4 3 per page</option>
                    </select>

                    <!-- upload container -->
                    <div id="jansy-img-uploadCE" class="MPpadTop6px spanLogoPhoto fileupload fileupload-new fileupload-exif notranslate" data-provides="fileupload">

                        <a id="myUploadPreviewCE" class="fileupload-new thumbnail mpCertLogoPreview tipoff" rel="tooltipM" data-placement="top" title="" data-original-title="Click to browse and select a photo from your image collection">
                            <img src="./iMenuPro_files/68x51b.png"></a>

                        <div id="myUploadPreviewCEUPLOAD" class="fileupload-preview fileupload-exists thumbnail mpCertLogoPreview dont_select_ptr tipoff" style="max-width:68px; max-height:51px; line-height: 20px;"></div>

                        <!-- buttons -->
                        <a id="mp-print-cert-btn" role="button" class="btn tipoff not_in_demo disabled" rel="tooltipM" data-placement="bottom" title="" data-original-title="Print certificate to PDF"><i class="icon-print"></i><small>Print</small></a>
                        <div id="jansyUploadWellCE" class="spanLogoPhoto">
						<span id="mp-imgupload-btnCE" class="btn btn-file btn-mini spanPhotoButton not_in_demo disabled"><span class="fileupload-new spanPhotoButton"><i class="icon-camera"></i> Upload Logo...</span>
						<span class="fileupload-exists spanPhotoButton">Change Upload...</span><input id="file-imguploadCE" type="file"></span>
                            <a id="mp-imgupload-remove-btnCE" class="btn fileupload-exists btn-mini btn-danger spanPhotoButton2" data-dismiss="fileupload">Remove</a>
                        </div>
                        <div id="jansyRemoveWellCE" class="spanLogoPhoto hide">
                            <a id="mp-ce-img-remove" class="spanRemoveBtn btn btn-mini btn-danger">Remove</a>
                        </div>
                        <div id="mp-certlogostate" class="hide mp-newphoto"></div>
                    </div> <!-- /end container -->


                </div> <!-- end col 3-->


            </div> <!-- end row -->





            <!-- hide/show certificate -->

            <div id="mp-ce-certmap">

                <!-- <hr style="margin-bottom:10px"> -->

                <div class="row spanCertPreviewRow">
                    <div class="CertSampleTextBorder dont_select">
                        <!-- <svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="568" height="245" viewBox="0 0 816 351" > --> <!-- 70% -->
                        <svg id="imp11-cert" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" width="651" height="280" viewBox="0 0 816 351"> <!-- 80% -->
                            <g id="certBackground"></g>
                            <g id="certBorder"></g>
                            <g id="certPreview">
                                <text>
                                    <!-- dominant-baseline supported on tspan only, not text -->
                                    <tspan text-anchor="middle" dominant-baseline="middle" x="244px" y="50px" class="title-headingCert">Gift Certificate</tspan>
                                </text>
                            </g>
                            <g id="certFooter"></g>
                            <g id="certImage"></g>
		</svg>
                    </div>
                </div>

            </div>

            <!-- hidden megalist logo/photo div -->

            <div id="mp-ce-photomap" class="hide row">
                <div class="spanLogoListCol" style="margin-left:0">
                    <div id="mp-imgupload-megadivCE" class="row">
                        <div class="megalist notranslate" id="myUploadImgListCE" style="height: 0px;"><ul style="visibility: visible;"></ul><div id="scrollbar" style="width: 7.5px;"></div></div>
                    </div>
                    <div id="mp-up-browse-noteCE" class="text-info">
                        <span class="badge badge-info">i</span><em id="mp-up-helper-textCE" class="dont_select_ptr"> Feature unavailable before purchase</em>
                    </div>
                </div>

                <div class="spanLogoBrowseBtnCol">
                    <hr style="">

                    <input id="mp-imgupload-findCE" type="text" class="search-query clearfix removeIEx" placeholder="Search">

                    <hr id="mp-ce-useimg-hr">
                    <div id="mp-ce-useimg-div" class="pull-right" style="margin-right:14px">
                        <button id="mp-imgupload-selectCE" type="button" class="btn" style="margin-right:5px">Use this image</button>
                        <button id="mp-imgupload-cancel-selectCE" type="button" class="btn btn">Cancel</button>
                    </div>

                    <div id="mp-up-trash-divCE">
                        <a id="mp-imgupload-trashcanCE" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="MPDeleteImage hide"><i class="icon-trash"></i> Delete Image</a>
                        <span>&nbsp;</span>
                    </div>

                    <div id="mp-imgupload-deletepanelCE" class="hide">
                        <div class="row MPpadTop1px" style="margin-left:0">
                            <div class="text-info" style="padding-bottom:15px">
                                <span class="badge badge-important">!</span>
                                <em>Heads up! This image will be permanently deleted from storage and ALL menus that it appears on. You won't be able to undo this action. To just remove the image from your certificate, click Cancel and then click Remove.</em>
                            </div>
                        </div>
                        <span class="pull-right">
							<a id="mp-imgupload-deletebtnCE" role="button" class="btn btn-danger notranslate">Delete</a>
							<span style="padding-left:5px">
							<a id="mp-imgupload-cancelbtnCE" role="button" class="btn">Cancel</a>
							</span>
						</span>
                    </div>

                </div>

            </div>

        </div>

        <div id="mp-giftcert-footer" class="modal-footer">
            <button id="dialog-giftcert-ok" class="btn btn-primary">Done</button>
        </div>
    </form>
    <div class="sp-container sp-hidden sp-light sp-palette-buttons-disabled"><div class="sp-palette-container"><div class="sp-palette sp-thumb sp-cf"><div class="sp-cf sp-palette-row sp-palette-row-0"><span title="#fffee6" data-color="rgb(255, 254, 230)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(255, 254, 230);"></span></span><span title="#c8e9f0" data-color="rgb(200, 233, 240)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(200, 233, 240);"></span></span><span title="#eaf2df" data-color="rgb(234, 242, 223)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(234, 242, 223);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-1"><span title="#efd54d" data-color="rgb(239, 213, 77)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(239, 213, 77);"></span></span><span title="#f0e2c6" data-color="rgb(240, 226, 198)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(240, 226, 198);"></span></span><span title="#538b3f" data-color="rgb(83, 139, 63)" class="sp-thumb-el sp-thumb-dark"><span class="sp-thumb-inner" style="background-color:rgb(83, 139, 63);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-2"><span title="#fef5c0" data-color="rgb(254, 245, 192)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(254, 245, 192);"></span></span><span title="#dfe0eb" data-color="rgb(223, 224, 235)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(223, 224, 235);"></span></span><span title="#fff4dc" data-color="rgb(255, 244, 220)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(255, 244, 220);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-3"><span title="#abb8ca" data-color="rgb(171, 184, 202)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(171, 184, 202);"></span></span><span title="#fbf2e2" data-color="rgb(251, 242, 226)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(251, 242, 226);"></span></span><span title="#d4c4a2" data-color="rgb(212, 196, 162)" class="sp-thumb-el sp-thumb-light"><span class="sp-thumb-inner" style="background-color:rgb(212, 196, 162);"></span></span></div><div class="sp-cf sp-palette-row sp-palette-row-selection"></div></div><div class="sp-palette-button-container sp-cf"><button type="button" class="sp-palette-toggle">less</button></div></div><div class="sp-picker-container"><div class="sp-top sp-cf"><div class="sp-fill"></div><div class="sp-top-inner"><div class="sp-color" style="background-color: rgb(255, 245, 0);"><div class="sp-sat"><div class="sp-val"><div class="sp-dragger" style="top: 0px; left: 0px;"></div></div></div></div><div class="sp-clear sp-clear-display" title="Clear Color Selection" style="display: none;"></div><div class="sp-hue"><div class="sp-slider" style="top: 0px;"></div></div></div><div class="sp-alpha"><div class="sp-alpha-inner"><div class="sp-alpha-handle" style="left: 0px;"></div></div></div></div><div class="sp-input-container sp-cf"><input class="sp-input" type="text" spellcheck="false"></div><div class="sp-initial sp-thumb sp-cf"><div class="sp-cf sp-palette-row-initial"><span data-color="" style="background-color:transparent;" class="sp-clear-display" title="No Color Selected"></span><span title="#fffee6" data-color="rgb(255, 254, 230)" class="sp-thumb-el sp-thumb-light sp-thumb-active"><span class="sp-thumb-inner" style="background-color:rgb(255, 254, 230);"></span></span></div></div><div class="sp-button-container sp-cf"><a class="sp-cancel" href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#">Cancel</a><button type="button" class="sp-choose">- OK -</button></div></div></div></div>







<div class="notifications login"></div>
<div class="notifications demo"></div>
<div class="notifications headsup" style="display: none;"></div>
<div class="notifications top-right"></div>
<div class="notifications bottom-right"></div>
<div class="notifications top-left"></div>
<div class="notifications bottom-left"></div>



<ol id="joyRideTipContent">
    <li class="joyride-styles-tip" data-id="btn-prev-style" data-button="Next" data-options="tipLocation:top">
        <h3>Switch Menu Styles with a Click</h3>
        <p>You can change your entire design by clicking the <em><strong>Style</strong></em> buttons. Use them to flip through the styles to find one that's right for you.</p>
    </li>
    <li class="joyride-foods-tip" data-id="menu-new-fooditem-btn" data-button="Next" data-options="tipLocation:left">
        <h3>Your Foods go here</h3>
        <p>To add a food or beverage, click <strong>new</strong>. Or click them to edit.</p>
    </li>
    <li class="joyride-foods-tip" data-id="mp-menuhead-new" data-button="Next" data-options="tipLocation:top">
        <h3>Add new Headings here</h3>
        <p>For each menu, add new headings or click them to edit.</p>
    </li>
    <li class="joyride-drag-tip" id="menu-step" data-id="imp11-menu" data-button="Next" data-options="tipLocation:left">
        <h3>Drag and Drop</h3>
        <p style="margin-bottom:5px">Drag foods and headings onto your menu. Once on the menu, drag them to reorder, or click them to edit.</p>
        <img style="margin-bottom:25px" src="./iMenuPro_files/drag-anime.gif">
    </li>
    <li class="joyride-spacing-tip" data-id="button-shrinkspacing" data-button="Next" data-options="tipLocation:top">
        <h3>Adjust Spacing here</h3>
        <p>Add more or less spacing on each menu page with ease using the <strong>spacing</strong> buttons.</p>
    </li>
    <li class="joyride-zoom-tip" data-id="btn-out-zoom" data-button="Next" data-options="tipLocation:top">
        <h3>Zoom your View</h3>
        <p>Click the <strong>zoom</strong> buttons (or use the <em>zoom slider</em> to the right of the help button) to see more or less of your menu.</p>
    </li>
    <li class="joyride-pdf-tip" data-id="button-topdf" data-button="Done" data-options="tipLocation:top">
        <h3>Create a PDF Menu to Print</h3>
        <p>Click the <strong>print</strong> button to create a high-resolution PDF copy of your menu for printing, e-mailing, or posting to your site.</p>
    </li>
</ol>


<textarea class="hide" id="text_box"></textarea>
<input type="button" class="hide spellcheck-trigger" id="spellcheck_buttonX">


<div class="joyride-tip-guide joyride-styles-tip" data-index="0" style="visibility: visible; display: none; top: 129px; left: 333.5px;"><span class="joyride-nub top"></span><div class="joyride-content-wrapper" role="dialog"><h3>Switch Menu Styles with a Click</h3>
        <p>You can change your entire design by clicking the <em><strong>Style</strong></em> buttons. Use them to flip through the styles to find one that's right for you.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-foods-tip" data-index="1" style="visibility: visible; display: none; top: 136px; left: 224.5px;"><span class="joyride-nub left"></span><div class="joyride-content-wrapper" role="dialog"><h3>Your Foods go here</h3>
        <p>To add a food or beverage, click <strong>new</strong>. Or click them to edit.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-foods-tip" data-index="2" style="visibility: visible; display: none; top: 359px; left: 188.5px;"><span class="joyride-nub bottom"></span><div class="joyride-content-wrapper" role="dialog"><h3>Add new Headings here</h3>
        <p>For each menu, add new headings or click them to edit.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-drag-tip" data-index="3" style="visibility: visible; display: none; top: 124px; left: 49.5px;"><span class="joyride-nub right"></span><div class="joyride-content-wrapper" role="dialog"><h3>Drag and Drop</h3>
        <p style="margin-bottom:5px">Drag foods and headings onto your menu. Once on the menu, drag them to reorder, or click them to edit.</p>
        <img style="margin-bottom:25px" src="./iMenuPro_files/drag-anime.gif"><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-spacing-tip" data-index="4" style="visibility: visible; display: none; top: 129px; left: 497.5px;"><span class="joyride-nub top"></span><div class="joyride-content-wrapper" role="dialog"><h3>Adjust Spacing here</h3>
        <p>Add more or less spacing on each menu page with ease using the <strong>spacing</strong> buttons.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-zoom-tip" data-index="5" style="visibility: visible; display: none; top: 129px; left: 167.5px;"><span class="joyride-nub top"></span><div class="joyride-content-wrapper" role="dialog"><h3>Zoom your View</h3>
        <p>Click the <strong>zoom</strong> buttons (or use the <em>zoom slider</em> to the right of the help button) to see more or less of your menu.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Next</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-tip-guide joyride-pdf-tip" data-index="6" style="visibility: visible; display: none; top: 122px; left: 130.5px;"><span class="joyride-nub top"></span><div class="joyride-content-wrapper" role="dialog"><h3>Create a PDF Menu to Print</h3>
        <p>Click the <strong>print</strong> button to create a high-resolution PDF copy of your menu for printing, e-mailing, or posting to your site.</p><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#" class="joyride-next-tip">Done</a><a href="https://onlineMenu.com/SVG/?access_token=demo_user&amp;firstrun=1#close" class="joyride-close-tip">X</a></div></div><div class="joyride-modal-bg" style="display: none;"></div></body></html>

<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create(); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('password', array('type' => 'password')); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
        <?= $this->Form->end(); ?>
    </div>
</div>