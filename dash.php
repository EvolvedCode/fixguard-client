<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>FixGuard Dashboard</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="FixGuard">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="images/favicon.png">

	<!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
	<!--
    <link rel="canonical" href="http://www.example.com/">
    -->
	<script src="js/material.min.js"></script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link href="css/icon.css" rel="stylesheet" type="text/css">
	<link href="css/material.min.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Dashboard</span>
				<div class="mdl-layout-spacer"></div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<li class="mdl-menu__item">About</li>
					<li class="mdl-menu__item">Contact</li>
					<li class="mdl-menu__item">Legal information</li>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<img src="images/user.jpg" class="demo-avatar">
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Dashboard</a>
				<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox</a>
                <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>Live Support Chat</a>

				<div class="mdl-layout-spacer"></div>

				<a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">info_outline</i><span class="visuallyhidden">Help</span></a>
			</nav>
		</div>

		<main class="mdl-layout__content mdl-color--grey-100">

			<div class="mdl-grid demo-content">
				<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<span class="mdl-typography--display-2">Welcome to FixGuard</span>
                    <span class="mdl-typography--display-1">Search our curated charterer database below:</span>
				</div>

				<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                    <form name="search" action="request.php" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-textfield--full-width">
                            <input class="mdl-textfield__input" type="text" name="query" id="query" required>
                            <label class="mdl-textfield__label" for="query">Search Charterers</label>
                        </div>

                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
                            Search
                        </button>
                    </form>
				</div>

				<div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
                    <span class="mdl-typography--display-1">Instructions:</span>
                    <ul class="mdl-list">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                1. Search for the charterer you want to check on using the bar above.
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                2. You will be redirected to their profile page.
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                3. Perform your background check and contact the charterer.
                            </span>
                        </li>
                    </ul>
				</div>

				<div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
					<div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
						<div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
							<h2 class="mdl-card__title-text">Updates</h2>
						</div>
						<div class="mdl-card__supporting-text mdl-color-text--grey-600">
							This prototype was completed at 01:52AM. Don't elect Trump.
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
						</div>
					</div>
					<div class="demo-separator mdl-cell--1-col"></div>
					<div class="demo-options mdl-card mdl-color--deep-purple-500 mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-cell--12-col-desktop">
						<div class="mdl-card__supporting-text mdl-color-text--blue-grey-50">
							<h3>View options</h3>
							<ul>
								<li>
									<label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
										<input type="checkbox" id="chkbox1" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label">Click per object</span>
									</label>
								</li>
								<li>
									<label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
										<input type="checkbox" id="chkbox2" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label">Views per object</span>
									</label>
								</li>
								<li>
									<label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
										<input type="checkbox" id="chkbox3" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label">Objects selected</span>
									</label>
								</li>
								<li>
									<label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
										<input type="checkbox" id="chkbox4" class="mdl-checkbox__input">
										<span class="mdl-checkbox__label">Objects viewed</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color-text--blue-grey-50">Change location</a>
							<div class="mdl-layout-spacer"></div>
							<i class="material-icons">location_on</i>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<a href="mailto:info@fixguard.com" target="_top" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white" style="position: fixed;display: block;right: 0;bottom: 0;margin-right: 40px;margin-bottom: 40px;z-index: 900;">Contact Us</a>
</body>

</html>
