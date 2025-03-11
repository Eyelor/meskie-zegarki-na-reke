<p align="center"><h1 align="center">MESKIE-ZEGARKI-NA-REKE</h1></p>
<p align="center">
	<em>Your Perfect Watch, Click Away.</em>
</p>
<p align="center">
	<!-- local repository, no metadata badges. --></p>
<p align="center">Built with the tools and technologies:</p>
<p align="center">
	<img src="https://img.shields.io/badge/npm-CB3837.svg?style=default&logo=npm&logoColor=white" alt="npm">
	<img src="https://img.shields.io/badge/Composer-885630.svg?style=default&logo=Composer&logoColor=white" alt="Composer">
  <img src="https://img.shields.io/badge/PHP-777BB4.svg?style=default&logo=PHP&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-FF3427.svg?style=default&logo=Laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/MySQL-00618A.svg?style=default&logo=MySQL&logoColor=white" alt="MySQL">
	<br>
	<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=default&logo=JavaScript&logoColor=black" alt="JavaScript">
	<img src="https://img.shields.io/badge/Axios-5A29E4.svg?style=default&logo=Axios&logoColor=white" alt="Axios">
  <img src="https://img.shields.io/badge/HTML5-E34F26.svg?style=default&logo=HTML5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-244CE1.svg?style=default&logo=CSS3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3.svg?style=default&logo=Bootstrap&logoColor=white" alt="Bootstrap">
</p>
<br>

##  Table of Contents

- [ Overview](#overview)
- [ Features](#features)
- [ Project Structure](#project-structure)
  - [ Project Index](#project-index)
- [ Getting Started](#getting-started)
  - [ Prerequisites](#prerequisites)
  - [ Installation](#installation)
  - [ Usage](#usage)
- [ License](#license)

---

##  Overview

"Męskie Zegarki Na Rękę" is a web application project built using Laravel, Blade, JavaScript and Bootstrap. It streamlines the development process via Composer and Artisan, ensuring consistent dependency management and simplified deployment.  The target audience is developers and potentially end-users purchasing watches online.

---

##  Features

|      | Feature         | Summary       |
| :--- | :---:           | :---          |
| ⚙️  | **Architecture**  | <ul><li>Uses a Laravel framework with a Model-View-Controller (MVC) architecture.</li><li>Frontend utilizes Blade, JavaScript and Bootstrap, implying a component-based architecture for the user interface.</li><li>Employs a combination of PHP backend and JavaScript frontend, indicating a client-server architecture.</li></ul> |
| 🔌 | **Integrations**  | <ul><li>Integrates with JavaScript libraries: Axios and Bootstrap.</li><li>Uses Laravel Vite Plugin for frontend asset management.</li><li>Potentially integrates with external services (implied by `serwisy.txt`), but in current version they are disabled (but not deleted).</li></ul> |
| 🧩 | **Modularity**    | <ul><li>The use of Laravel and Blade provides a modular design, allowing for separation of concerns between backend and frontend.</li><li>The presence of `composer.json` and `package.json` provides a structured dependency management system, promoting modularity.</li></ul> |

---

##  Project Structure

```sh
└── meskie-zegarki-na-reke/
    ├── .github
    │   └── workflows
    ├── app
    │   ├── Console
    │   ├── Exceptions
    │   ├── Http
    │   ├── Models
    │   └── Providers
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   └── cache
    ├── CHANGELOG.md
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── cors.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── hashing.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── sanctum.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   ├── migrations
    │   └── seeders
    ├── Laravel-README.md
    ├── package-lock.json
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── .htaccess
    │   ├── assets
    │   ├── css
    │   ├── favicon.ico
    │   ├── images
    │   ├── index.php
    │   ├── js
    │   ├── robots.txt
    │   └── txt
    ├── resources
    │   ├── css
    │   ├── js
    │   ├── lang
    │   ├── sass
    │   └── views
    ├── routes
    │   ├── api.php
    │   ├── channels.php
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   ├── framework
    │   └── logs
    ├── tests
    │   ├── CreatesApplication.php
    │   ├── Feature
    │   ├── TestCase.php
    │   └── Unit
    └── vite.config.js
```


###  Project Index
<details open>
	<summary><b><code>MESKIE-ZEGARKI-NA-REKE/</code></b></summary>
	<details> <!-- __root__ Submodule -->
		<summary><b>__root__</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='./artisan'>artisan</a></b></td>
				<td>- Artisan serves as the command-line interface for the Laravel application<br>- It bootstraps the application, processes console commands provided via the command-line arguments, and then terminates, returning an exit status reflecting command execution success or failure<br>- This facilitates tasks such as database migrations, routing, and other development and deployment operations.</td>
			</tr>
			<tr>
				<td><b><a href='./composer.json'>composer.json</a></b></td>
				<td>- Composer manages project dependencies for a Laravel application<br>- It defines required and development packages, including the Laravel framework itself,  testing tools, and external libraries like Guzzle<br>- Autoloading configurations streamline class loading, while scripts automate tasks such as key generation and asset publishing during installation and updates<br>- The file ensures the application has all necessary components.</td>
			</tr>
			<tr>
				<td><b><a href='./package-lock.json'>package-lock.json</a></b></td>
				<td>- The package-lock.json file specifies the project's dependencies for the "meskie-zegarki-na-reke" project<br>- It ensures that the correct versions of libraries like Vue.js, Bootstrap, Axios, and their associated plugins are used consistently across all developers, guaranteeing a reproducible build environment<br>- This is crucial for the project's overall build process and maintainability within the larger codebase.</td>
			</tr>
			<tr>
				<td><b><a href='./package.json'>package.json</a></b></td>
				<td>- The package.json file configures the project's build process using Vite<br>- It specifies dependencies for Vue.js, Bootstrap, and Axios, enabling front-end development and facilitating communication with a backend (Laravel)<br>- The defined scripts streamline development and production build workflows.</td>
			</tr>
			<tr>
				<td><b><a href='./vite.config.js'>vite.config.js</a></b></td>
				<td>- vite.config.js configures the Vite build process for a Laravel application using Vue.js<br>- It bundles frontend assets, including Sass stylesheets and JavaScript code, enabling hot module replacement for faster development<br>- The configuration specifies the entry points and optimizes Vue.js integration within the Laravel project's architecture.</td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- bootstrap Submodule -->
		<summary><b>bootstrap</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='./bootstrap\app.php'>app.php</a></b></td>
				<td>- The bootstrap/app.php file initializes the Laravel application<br>- It creates the core application instance, acting as the central IoC container<br>- Crucially, it binds essential interfaces for HTTP and console kernels, and the exception handler, enabling the application to process requests and manage errors<br>- The initialized application instance is then returned for subsequent use.</td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- config Submodule -->
		<summary><b>config</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='./config\app.php'>app.php</a></b></td>
				<td>- The config/app.php file centralizes crucial application configuration settings<br>- It defines application name, environment, debug mode, URL, timezone, locale, and encryption key<br>- Importantly, it also specifies registered service providers and class aliases, influencing the application's functionality and bootstrapping process within the Laravel framework<br>- These settings govern various aspects of the application's behavior and interaction with its environment.</td>
			</tr>
			<tr>
				<td><b><a href='./config\auth.php'>auth.php</a></b></td>
				<td>- The auth.php configuration file governs user authentication within the application<br>- It defines authentication guards, specifying how users are identified and authenticated, primarily using session-based authentication with an Eloquent user model<br>- Furthermore, it manages password reset functionalities, including token expiry and throttling to enhance security<br>- The configuration also sets the password confirmation timeout duration.</td>
			</tr>
			<tr>
				<td><b><a href='./config\broadcasting.php'>broadcasting.php</a></b></td>
				<td>- The broadcasting.php configuration file specifies how the application broadcasts events<br>- It defines the default broadcaster and various connection options for different services like Pusher, Ably, Redis, and a null driver for disabling broadcasting<br>- Environment variables determine specific connection details, enabling flexible event distribution across the application.</td>
			</tr>
			<tr>
				<td><b><a href='./config\cache.php'>cache.php</a></b></td>
				<td>- The config/cache.php file configures the caching system<br>- It defines the default cache driver and allows specification of multiple cache stores using various drivers like file, Redis, Memcached, and database<br>- The configuration includes connection details,  prefixing for key management, and other driver-specific options to ensure efficient and isolated caching within the application.</td>
			</tr>
			<tr>
				<td><b><a href='./config\cors.php'>cors.php</a></b></td>
				<td>- The cors.php configuration file manages Cross-Origin Resource Sharing (CORS) settings for the application<br>- It defines which origins, methods, and headers are permitted to access the application's resources, primarily targeting API endpoints and Sanctum authentication routes<br>- This ensures secure and controlled access from external domains, enhancing the application's security and interoperability.</td>
			</tr>
			<tr>
				<td><b><a href='./config\database.php'>database.php</a></b></td>
				<td>- The database.php config file centralizes database connection settings for the Laravel application<br>- It defines default connections (like MySQL, PostgreSQL, SQLite, and SQL Server) and  Redis configurations<br>- Environment variables dynamically adjust settings, enabling flexible database management across various deployment environments<br>- The file facilitates seamless database interaction within the application's architecture.</td>
			</tr>
			<tr>
				<td><b><a href='./config\filesystems.php'>filesystems.php</a></b></td>
				<td>- The filesystems.php config file defines storage mechanisms for the application<br>- It specifies default and alternative storage disks, including local, public, and Amazon S3 cloud storage<br>- Configuration details such as root paths, URLs, and credentials are provided for each disk<br>- The file also manages symbolic links for convenient access to stored files.</td>
			</tr>
			<tr>
				<td><b><a href='./config\hashing.php'>hashing.php</a></b></td>
				<td>- The hashing.php configuration file defines password hashing settings for the application<br>- It specifies the default hashing algorithm (bcrypt, argon, or argon2id) and allows customization of algorithm-specific parameters like bcrypt rounds or Argon memory, threads, and time costs<br>- These settings control password security and hashing speed, impacting both registration and authentication processes.</td>
			</tr>
			<tr>
				<td><b><a href='./config\logging.php'>logging.php</a></b></td>
				<td>- The logging.php configuration file centralizes logging settings for the application<br>- It defines default and deprecation logging channels,  specifying various logging drivers like single file, daily rotation, Slack integration, and syslog<br>- The configuration allows flexible routing of log messages to different destinations based on severity and application needs, enhancing debugging and monitoring capabilities.</td>
			</tr>
			<tr>
				<td><b><a href='./config\mail.php'>mail.php</a></b></td>
				<td>- The mail.php configuration file centralizes email settings for the application<br>- It defines default mailers,  specifies configurations for various transport drivers (SMTP, Sendmail, Mailgun, etc.), sets the global sender address, and configures Markdown email themes<br>- This ensures consistent and flexible email delivery throughout the application.</td>
			</tr>
			<tr>
				<td><b><a href='./config\queue.php'>queue.php</a></b></td>
				<td>- The queue.php config file defines queue connection settings for a Laravel application<br>- It specifies the default queue driver and configurations for various backends, including sync, database, Beanstalkd, SQS, and Redis<br>- The file also manages job batching and failed job logging configurations, allowing for flexible queue management and error handling.</td>
			</tr>
			<tr>
				<td><b><a href='./config\sanctum.php'>sanctum.php</a></b></td>
				<td>- The sanctum.php configuration file governs Laravel Sanctum's authentication settings<br>- It specifies trusted domains for stateful API cookies,  the authentication guard used, token expiration,  a prefix for enhanced security, and custom middleware for processing requests<br>- This ensures secure and controlled access to the application's API, primarily for single-page applications.</td>
			</tr>
			<tr>
				<td><b><a href='./config\services.php'>services.php</a></b></td>
				<td>- The config/services.php file centralizes third-party service credentials within the application's configuration<br>- It provides a standardized location for accessing sensitive data like API keys and secrets for services such as Mailgun, Postmark, and Amazon SES<br>- This ensures consistent access and simplifies management of external service integrations across the entire project.</td>
			</tr>
			<tr>
				<td><b><a href='./config\session.php'>session.php</a></b></td>
				<td>- The config/session.php file configures Laravel's session handling<br>- It specifies the session driver (e.g., file, database), lifetime, encryption settings, and cookie parameters<br>- The configuration dictates how user sessions are stored, managed, and secured, impacting user authentication and data persistence across requests within the application<br>- Environmental variables allow for flexible customization.</td>
			</tr>
			<tr>
				<td><b><a href='./config\view.php'>view.php</a></b></td>
				<td>- The config/view.php file configures Laravel's view system<br>- It specifies the directories where template files are located and where compiled Blade templates are stored<br>- This ensures the application correctly renders views by defining the paths for both source and compiled view files, contributing to the overall application's templating functionality<br>- The configuration uses environment variables for flexibility in deployment.</td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- public Submodule -->
		<summary><b>public</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='./public\.htaccess'>.htaccess</a></b></td>
				<td>- The .htaccess file configures URL rewriting for the web application<br>- It manages authorization headers, redirects URLs with trailing slashes, and routes all requests to the index.php front controller<br>- This ensures clean URLs and proper routing within the application's architecture, simplifying user experience and improving maintainability.</td>
			</tr>
			<tr>
				<td><b><a href='./public\index.php'>index.php</a></b></td>
				<td>- The public/index.php file serves as the entry point for all incoming requests to the Laravel application<br>- It checks for application maintenance mode, loads the autoloader, and instantiates the application kernel<br>- The kernel then processes the request, generates a response, and terminates the request lifecycle, effectively acting as the central dispatcher for the entire web application.</td>
			</tr>
			<tr>
				<td><b><a href='./public\robots.txt'>robots.txt</a></b></td>
				<td>- The robots.txt file governs web crawler access to the project's website<br>- It explicitly allows all user agents to access all pages, effectively leaving no content disallowed for indexing by search engines<br>- This ensures complete website accessibility for search engine bots, maximizing discoverability and search engine optimization (SEO) potential.</td>
			</tr>
			</table>
			<details>
				<summary><b>css</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./public\css\akcje.css'>akcje.css</a></b></td>
						<td>- The akcje.css stylesheet defines the visual presentation of tables and adjusts website layout responsiveness<br>- It formats tables with alternating row colors and hover effects, ensuring consistent appearance across different screen sizes<br>- Specifically, it styles the main navigation bar and body padding based on screen width, enhancing user experience on various devices.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\app.css'>app.css</a></b></td>
						<td>- The app.css stylesheet customizes the visual appearance of primary buttons and the main navigation bar across different screen sizes within the web application<br>- It defines specific styles for button states (hover, active, focus) and adjusts main content margins responsively, ensuring consistent branding and optimal user experience<br>- The styles also affect a logout dropdown element.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\galeria.css'>galeria.css</a></b></td>
						<td>- galeria.css styles a webpage image gallery<br>- It defines image display, hover effects (brightness reduction), and responsive layout adjustments for different screen sizes<br>- Specifically, it arranges images in a grid, adapting the number of columns based on screen width to ensure optimal viewing on various devices<br>- The styles enhance visual appeal and user experience within the gallery section of the website.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\informacje.css'>informacje.css</a></b></td>
						<td>- informacje.css styles a webpage, defining a layout with navigation, content, and footer sections<br>- It uses a two-column design responsive to different screen sizes, adjusting margins and element sizes accordingly<br>- The stylesheet employs specific colors and shadows to create a visually distinct user interface<br>- It enhances the website's presentation within the broader project's front-end structure.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\koszyk.css'>koszyk.css</a></b></td>
						<td>- koszyk.css styles the shopping cart interface, specifically centering the remove button (#usun) and adjusting the navigation bar (#mainNav) and body padding responsively<br>- Media queries ensure appropriate styling across various screen sizes, optimizing the user experience on different devices<br>- The styles contribute to the overall visual presentation of the e-commerce website.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\lightbox.css'>lightbox.css</a></b></td>
						<td>- lightbox.css styles a lightbox image viewer<br>- It defines visual elements for image display, navigation (previous/next), loading indicators, and a close button<br>- The styles control overlay opacity, image sizing, and button appearance, enhancing user interaction within the lightbox modal<br>- It integrates with image assets located in the public/images directory, contributing to the website's visual presentation.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\lokalizacja.css'>lokalizacja.css</a></b></td>
						<td>- lokalizacja.css styles a map element (#mapka), ensuring responsive design across various screen sizes<br>- It adjusts the map's aspect ratio and container width for optimal viewing<br>- Additionally, the stylesheet modifies the navigation bar (#mainNav) and body padding on larger screens, demonstrating its role in the overall website's visual presentation and layout.</td>
					</tr>
					<tr>
						<td><b><a href='./public\css\styles.css'>styles.css</a></b></td>
						<td>- The public/css/styles.css file defines the visual style and layout of the website<br>- It incorporates Bootstrap v5.2.3 for foundational styling and contains custom CSS to implement the specific design of the "Agency" theme<br>- In the overall project architecture, this file is a crucial component of the front-end presentation layer, responsible for rendering the website's appearance to the user.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>js</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./public\js\akcje.js'>akcje.js</a></b></td>
						<td>- The akcje.js script retrieves real-time stock data for AAPL, FOSL, and MOV from Alpha Vantage API<br>- It displays the latest closing price, volume, and average minute trade value for each stock in a table on the webpage<br>- The script uses a free API key, implementing error handling for rate limits and automatically refreshing data every minute for ten minutes before pausing to avoid exceeding usage limits.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\form-kontakt.js'>form-kontakt.js</a></b></td>
						<td>- The form-kontakt.js script validates a contact form<br>- It ensures all fields are filled and conform to specified formats (name, email, phone number, message)<br>- Client-side validation prevents submission of incomplete or incorrectly formatted data, enhancing user experience and data integrity<br>- Upon successful validation, a confirmation message appears; otherwise, an error message is displayed<br>- The script integrates seamlessly with the contact form's HTML structure.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\informacje.js'>informacje.js</a></b></td>
						<td>- The informacje.js script dynamically updates webpage content<br>- It uses the Fetch API to asynchronously load text files from a server,  populating a designated HTML element based on user interaction<br>- This functionality implements a single-page application (SPA) design, enhancing user experience by avoiding full page reloads when switching between sections represented by 'grafiki', 'narzedzia', 'serwisy', and 'szablony'.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\koszyk.js'>koszyk.js</a></b></td>
						<td>- The koszyk.js script manages a shopping cart and order placement functionality<br>- It uses local storage to persist cart items, allowing users to add, remove, and view products<br>- The script also validates user input for order forms, including name, email, and payment details, before confirming and submitting the order<br>- A confirmation dialog displays order details and total cost.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\lightbox.js'>lightbox.js</a></b></td>
						<td>- The public/js/lightbox.js file implements a lightbox image viewer for the web application<br>- It integrates with jQuery to provide a user interface for viewing images in a gallery-style format, expanding on the project's core functionality by enhancing the user experience with an image viewing modal.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\lokalizacja.js'>lokalizacja.js</a></b></td>
						<td>- lokalizacja.js facilitates geolocation functionality<br>- It retrieves the user's location, displays it on a map, and calculates the distance and driving time to a predefined destination (51.2351784, 22.5488406)<br>- Error handling is included for geolocation failures<br>- The results, including coordinates and travel information, are presented to the user.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\scripts.js'>scripts.js</a></b></td>
						<td>- scripts.js enhances the user experience of the website by dynamically adjusting the navigation bar<br>- It implements responsive behavior, shrinking the navbar on scroll and automatically collapsing it after a navigation link is selected on smaller screens<br>- This improves navigation and visual appeal, aligning with the overall front-end design of the Agency theme.</td>
					</tr>
					<tr>
						<td><b><a href='./public\js\slider.js'>slider.js</a></b></td>
						<td>- The slider.js script implements a rotating background image slideshow for the website header<br>- It cycles through a predefined set of images, changing the header's background every ten seconds<br>- User interaction is facilitated through clickable navigation dots, allowing manual control over the slideshow<br>- The script manages the slideshow's timing and visual updates, enhancing the website's visual appeal.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>txt</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./public\txt\grafiki.txt'>grafiki.txt</a></b></td>
						<td>- The grafiki.txt file provides a list of image sources used throughout the website<br>- It catalogs images for various sections, including favicons, clocks, gallery images, and those used in the "About Us" and "Offer" sections<br>- The file facilitates easy management and attribution of website imagery, ensuring proper credit to original creators.</td>
					</tr>
					<tr>
						<td><b><a href='./public\txt\narzedzia.txt'>narzedzia.txt</a></b></td>
						<td>- The narzedzia.txt file documents the tools and resources used in the project<br>- It provides links to essential resources, including front-end libraries (jQuery, Font Awesome), development environments (Visual Studio Code, Live Server), design software (Inkscape), and the Laravel framework<br>- The file serves as a reference for developers working on the project, listing key technologies and external services employed.</td>
					</tr>
					<tr>
						<td><b><a href='./public\txt\serwisy.txt'>serwisy.txt</a></b></td>
						<td>- The serwisy.txt file documents the external services used within the application<br>- It provides a list of crucial APIs, specifically Alpha Vantage for stock data and Google Maps Platform for mapping functionalities,  improving transparency and maintainability of the project's dependencies<br>- This enhances understanding of the application's architecture and data sources.</td>
					</tr>
					<tr>
						<td><b><a href='./public\txt\szablony.txt'>szablony.txt</a></b></td>
						<td>- szablony.txt documents the templates used in the project<br>- It provides attribution for the Bootstrap Agency theme and the Lightbox image gallery,  linking to their respective sources<br>- This file serves as a record of third-party assets, ensuring proper credit and facilitating future reference or updates.</td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- routes Submodule -->
		<summary><b>routes</b></summary>
		<blockquote>
			<table>
			<tr>
				<td><b><a href='./routes\api.php'>api.php</a></b></td>
				<td>- The routes/api.php file defines API routes for the Laravel application<br>- It registers endpoints, specifically handling authenticated user requests via the auth:sanctum middleware<br>- Currently, it provides a route to retrieve authenticated user information<br>- This file acts as the central point for defining all API access points within the application's architecture.</td>
			</tr>
			<tr>
				<td><b><a href='./routes\channels.php'>channels.php</a></b></td>
				<td>- The routes\channels.php file configures Laravel's broadcasting system<br>- It defines authorization for a channel named 'App.Models.User.{id}', ensuring only the authenticated user matching the provided ID can access it<br>- This facilitates real-time, user-specific communication within the application<br>- The file is crucial for securing application-wide event broadcasting.</td>
			</tr>
			<tr>
				<td><b><a href='./routes\console.php'>console.php</a></b></td>
				<td>- The routes\console.php file defines console commands for the Laravel application<br>- It specifically registers a single command, 'inspire', which displays a motivational quote<br>- This command enhances the developer experience by providing a simple, readily accessible tool within the command-line interface<br>- The file contributes to the overall application architecture by extending its functionality beyond the typical web interface.</td>
			</tr>
			<tr>
				<td><b><a href='./routes\web.php'>web.php</a></b></td>
				<td>- The routes/web.php file defines the application's web routes<br>- It maps URLs to specific controller actions, handling user authentication, and directing requests to views for the home page, gallery, information pages, shopping cart, and order management<br>- Additionally, it includes routes for privacy policy and terms of use pages<br>- This file acts as the central routing mechanism for all web-based interactions within the application.</td>
			</tr>
			</table>
		</blockquote>
	</details>
	<details> <!-- .github Submodule -->
		<summary><b>.github</b></summary>
		<blockquote>
			<details>
				<summary><b>workflows</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./.github\workflows\issues.yml'>issues.yml</a></b></td>
						<td>- The issues.yml workflow automates responses to GitHub issues<br>- Specifically, it reacts to issues labeled with a specific tag ("help wanted")<br>- The workflow leverages a reusable workflow from the Laravel project, streamlining the process of managing and responding to incoming support requests or feature suggestions<br>- This enhances collaboration and issue tracking within the project.</td>
					</tr>
					<tr>
						<td><b><a href='./.github\workflows\pull-requests.yml'>pull-requests.yml</a></b></td>
						<td>- The pull-requests.yml workflow automates actions upon opening pull requests<br>- It leverages a reusable workflow from the Laravel project to manage pull request events, specifically when a pull request is opened<br>- This ensures consistent handling of pull requests across the project, simplifying the development process and improving maintainability.</td>
					</tr>
					<tr>
						<td><b><a href='./.github\workflows\tests.yml'>tests.yml</a></b></td>
						<td>- Automated testing ensures code quality across various PHP versions<br>- The workflow triggers on pushes to specified branches, pull requests, and daily schedules<br>- It sets up a testing environment, installs dependencies, and runs PHPUnit tests, providing continuous integration and verification of the application's functionality<br>- Failure in any PHP version test halts the process immediately.</td>
					</tr>
					<tr>
						<td><b><a href='./.github\workflows\update-changelog.yml'>update-changelog.yml</a></b></td>
						<td>- The workflow automates changelog updates upon software release<br>- It leverages a reusable workflow from the Laravel project to modify the changelog file<br>- This ensures the changelog accurately reflects new releases, maintaining a clear project history for users and developers<br>- The process is triggered automatically when a release is published.</td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- app Submodule -->
		<summary><b>app</b></summary>
		<blockquote>
			<details>
				<summary><b>Console</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./app\Console\Kernel.php'>Kernel.php</a></b></td>
						<td>- The Kernel.php file manages scheduled commands and console routes within the Laravel application<br>- It defines the application's command schedule, allowing for automated tasks, and registers console commands located in the app\Console\Commands directory and those defined in routes/console.php<br>- This ensures proper execution of background processes and command-line interactions.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Exceptions</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./app\Exceptions\Handler.php'>Handler.php</a></b></td>
						<td>- Handler.php centralizes exception handling within the Laravel application<br>- It configures how exceptions are reported and processed, preventing sensitive data like passwords from being flashed to the session during validation errors<br>- The code ensures a consistent and secure response to application errors.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Http</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./app\Http\Kernel.php'>Kernel.php</a></b></td>
						<td>- Kernel.php configures Laravel's HTTP middleware<br>- It defines middleware stacks for all incoming requests and specific route groups ('web' and 'api')<br>- These middleware handle tasks such as request validation, session management, authentication, and authorization, ensuring application security and proper functionality<br>- The file also establishes aliases for commonly used middleware, simplifying route definitions.</td>
					</tr>
					</table>
					<details>
						<summary><b>Controllers</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./app\Http\Controllers\CartController.php'>CartController.php</a></b></td>
								<td>- The CartController manages the online ordering process<br>- It authenticates users, receives order details from a client-side application, validates the data, calculates the total price, creates a new order record in the database, and saves associated product details<br>- Successful order placement returns a success message; otherwise, appropriate error messages are returned<br>- The controller interacts with Product, Order, and OrderRecord models.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Controllers\Controller.php'>Controller.php</a></b></td>
								<td>- Controller.php establishes a base controller class for the Laravel application<br>- It leverages built-in features for authorization and request validation, providing a foundation for all other controllers within the application's architecture<br>- This ensures consistent handling of authorization and validation logic across the entire project.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Controllers\GalleryController.php'>GalleryController.php</a></b></td>
								<td>- GalleryController manages user access and display of a gallery within a Laravel application<br>- It employs authentication middleware, ensuring only logged-in users can view the gallery<br>- The controller's primary function is to render the 'galeria' view, presenting the gallery's content to authorized users<br>- This contributes to the application's user interface by providing a dedicated section for image or media display.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Controllers\HomeController.php'>HomeController.php</a></b></td>
								<td>- HomeController displays a user's order history<br>- It retrieves authenticated user data, fetches associated orders and their corresponding order records, and then retrieves product details for each record<br>- Finally, it presents this consolidated order information within a home view<br>- The controller utilizes Eloquent ORM for database interaction.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Controllers\InformationsController.php'>InformationsController.php</a></b></td>
								<td>- InformationsController manages user access to an information dashboard<br>- It employs authentication middleware, ensuring only logged-in users can view the dashboard<br>- The controller's primary function is to render the informacje view, presenting information to authorized users within the larger application's structure<br>- This contributes to the application's user interface and data presentation layer.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Controllers\OrdersController.php'>OrdersController.php</a></b></td>
								<td>- OrdersController manages user orders within the application<br>- It displays a user's order history,  allowing order details viewing and modification<br>- The controller facilitates order updates, including delivery date, contact information, and additional notes<br>- It also provides functionality for deleting orders, ensuring data integrity<br>- The code interacts with Order, OrderRecord, and Product models to retrieve and manipulate order data.</td>
							</tr>
							</table>
							<details>
								<summary><b>Auth</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\ConfirmPasswordController.php'>ConfirmPasswordController.php</a></b></td>
										<td>- The ConfirmPasswordController handles password confirmation within the application's authentication system<br>- It leverages a pre-built trait to manage this functionality, redirecting users to a home page upon successful confirmation<br>- Authentication middleware ensures only logged-in users can access this controller, thereby securing the password confirmation process.</td>
									</tr>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\ForgotPasswordController.php'>ForgotPasswordController.php</a></b></td>
										<td>- The ForgotPasswordController manages the password reset functionality within the application's authentication system<br>- It leverages a pre-built trait to streamline the process of sending password reset emails to users<br>- This controller is a key component of the user authentication architecture, enabling users to recover access to their accounts if they forget their passwords.</td>
									</tr>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\LoginController.php'>LoginController.php</a></b></td>
										<td>- The LoginController manages user authentication within the application<br>- It handles user logins, leveraging a pre-built authentication trait for streamlined functionality<br>- After successful authentication, users are redirected to their home screen<br>- The controller ensures only guests can access the login functionality, excluding logged-in users.</td>
									</tr>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\RegisterController.php'>RegisterController.php</a></b></td>
										<td>- The RegisterController handles new user registration within the application<br>- It validates submitted data, ensuring adherence to defined rules, and subsequently creates new user accounts in the database<br>- The controller leverages existing Laravel authentication features to streamline the registration process and redirects users upon successful registration.</td>
									</tr>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\ResetPasswordController.php'>ResetPasswordController.php</a></b></td>
										<td>- The ResetPasswordController manages password reset functionality within the application's authentication system<br>- It leverages Laravel's built-in ResetsPasswords trait to handle password reset requests, providing a streamlined user experience for recovering forgotten passwords<br>- Upon successful password reset, users are redirected to the application's home page.</td>
									</tr>
									<tr>
										<td><b><a href='./app\Http\Controllers\Auth\VerificationController.php'>VerificationController.php</a></b></td>
										<td>- VerificationController manages email verification for newly registered users within the application<br>- It handles both initial verification and resending verification emails<br>- The controller utilizes Laravel's built-in email verification features, redirecting verified users to the '/home' route after successful verification<br>- Security measures include requiring signed verification links and implementing rate limiting to prevent abuse.</td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>Middleware</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./app\Http\Middleware\Authenticate.php'>Authenticate.php</a></b></td>
								<td>- Authenticate middleware redirects unauthenticated users to the login route<br>- It operates within a Laravel application, leveraging the framework's authentication system<br>- For JSON requests, it returns null, allowing for custom handling<br>- The middleware ensures secure access to application resources by enforcing authentication.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\EncryptCookies.php'>EncryptCookies.php</a></b></td>
								<td>- EncryptCookies middleware secures user data by encrypting cookies<br>- It extends Laravel's core encryption functionality, specifying which cookies should remain unencrypted<br>- Within the application's architecture, this middleware enhances security by protecting sensitive information transmitted via HTTP cookies<br>- Its role is crucial for maintaining data privacy and integrity.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\PreventRequestsDuringMaintenance.php'>PreventRequestsDuringMaintenance.php</a></b></td>
								<td>- PreventRequestsDuringMaintenance middleware enhances the application's robustness<br>- It controls access to the application during maintenance periods, effectively blocking requests except for those specified in the $except array<br>- This middleware integrates seamlessly within Laravel's framework, providing a straightforward mechanism for managing application availability<br>- Its purpose is to ensure a smooth user experience during planned downtime.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\RedirectIfAuthenticated.php'>RedirectIfAuthenticated.php</a></b></td>
								<td>- This middleware redirects authenticated users<br>- It intercepts incoming requests, checks authentication status against specified guards, and redirects authenticated users to the application's home page<br>- Otherwise, it allows the request to proceed<br>- This ensures that authorized users are not presented with login or registration screens unnecessarily.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\TrimStrings.php'>TrimStrings.php</a></b></td>
								<td>- TrimStrings middleware enhances the application by automatically trimming whitespace from incoming user inputs<br>- It strategically excludes sensitive fields like passwords, ensuring data integrity while improving data hygiene<br>- This contributes to a cleaner and more secure data processing pipeline within the Laravel application.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\TrustHosts.php'>TrustHosts.php</a></b></td>
								<td>- TrustHosts middleware ensures secure connections by defining trusted host patterns<br>- It allows all subdomains of the application URL, thereby controlling which hosts the application accepts requests from, enhancing security and preventing unauthorized access within the Laravel application architecture<br>- This contributes to a robust and protected application environment.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\TrustProxies.php'>TrustProxies.php</a></b></td>
								<td>- TrustProxies middleware configures the application to trust specific proxy servers<br>- It identifies trusted proxies using several HTTP headers, ensuring that the application correctly interprets client IP addresses and other request information even when requests originate from behind a reverse proxy or load balancer<br>- This is crucial for accurate logging, security, and geolocation functionality within the Laravel application.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\ValidateSignature.php'>ValidateSignature.php</a></b></td>
								<td>- ValidateSignature middleware ensures secure routing within the Laravel application by validating incoming requests<br>- It extends Laravel's built-in validation, selectively ignoring specific query parameters like UTM tracking codes, thereby enhancing security without hindering common analytics practices<br>- This contributes to the overall application's security architecture.</td>
							</tr>
							<tr>
								<td><b><a href='./app\Http\Middleware\VerifyCsrfToken.php'>VerifyCsrfToken.php</a></b></td>
								<td>- VerifyCsrfToken middleware ensures Cross-Site Request Forgery (CSRF) protection within the Laravel application<br>- It validates incoming requests to prevent unauthorized actions<br>- The middleware's configuration currently excludes no specific URIs from this verification process, implying all routes are subject to CSRF protection by default<br>- This enhances the application's security.</td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>Models</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./app\Models\Order.php'>Order.php</a></b></td>
						<td>- The Order model manages order data within the application<br>- It defines attributes like user ID, contact information, order details, and price<br>- Relationships with the User model and OrderRecord model are established, enabling data access and management across related entities<br>- This facilitates order creation, tracking, and retrieval within the broader application's database schema.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Models\OrderRecord.php'>OrderRecord.php</a></b></td>
						<td>- OrderRecord manages order item details within the e-commerce application<br>- It stores information about individual products within a given order, including product ID, quantity, and price<br>- Relationships with the Order and Product models enable efficient data retrieval and manipulation, facilitating order processing and reporting functionalities.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Models\Product.php'>Product.php</a></b></td>
						<td>- Product.php defines the Product model, managing product data within the application's database<br>- It provides methods to retrieve all products or a specific product by name<br>- The model also establishes a relationship with the OrderRecord model, enabling access to associated order information<br>- This facilitates data retrieval and manipulation for product-related functionalities throughout the application.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Models\User.php'>User.php</a></b></td>
						<td>- The User model defines the user authentication and data structure within the Laravel application<br>- It handles user registration, login, and password management, leveraging Laravel's built-in authentication features<br>- Furthermore, it establishes a relationship with the Order model, enabling access to a user's associated orders<br>- This model is central to the application's user management and data persistence.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>Providers</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./app\Providers\AppServiceProvider.php'>AppServiceProvider.php</a></b></td>
						<td>- AppServiceProvider configures and bootstraps the Laravel application<br>- It acts as a central point for registering and initializing application-wide services<br>- Its role is to enhance the application's functionality through service provision.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Providers\AuthServiceProvider.php'>AuthServiceProvider.php</a></b></td>
						<td>- AuthServiceProvider configures Laravel's authentication and authorization mechanisms.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Providers\BroadcastServiceProvider.php'>BroadcastServiceProvider.php</a></b></td>
						<td>- BroadcastServiceProvider configures Laravel's broadcasting capabilities<br>- It registers broadcasting routes and includes channel definitions, enabling real-time, server-sent updates to clients<br>- This facilitates features like live notifications or collaborative tools within the application<br>- The service provider integrates with the application's routing system to manage these communication channels.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Providers\EventServiceProvider.php'>EventServiceProvider.php</a></b></td>
						<td>- EventServiceProvider configures the application's event listeners within a Laravel application<br>- It specifically defines a listener to send email verification notifications upon user registration<br>- Automatic event discovery is disabled, requiring explicit listener registration<br>- This ensures controlled management of application events and their corresponding responses.</td>
					</tr>
					<tr>
						<td><b><a href='./app\Providers\RouteServiceProvider.php'>RouteServiceProvider.php</a></b></td>
						<td>- RouteServiceProvider configures the application's routing<br>- It defines the application's home route and sets up API rate limiting, restricting requests to 60 per minute per user or IP address<br>- Importantly, it maps both web and API routes, loading route definitions from dedicated routes/web.php and routes/api.php files<br>- This ensures a structured approach to handling different types of requests within the application.</td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- database Submodule -->
		<summary><b>database</b></summary>
		<blockquote>
			<details>
				<summary><b>factories</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./database\factories\UserFactory.php'>UserFactory.php</a></b></td>
						<td>- UserFactory generates fake user data for the application's database<br>- It's part of the Laravel framework's database seeding mechanism, residing within the database/factories directory<br>- The factory creates user records with default attributes like name, email, and password, supporting both verified and unverified user states<br>- This facilitates testing and development by populating the database with sample user information.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>migrations</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./database\migrations\2014_10_12_000000_create_users_table.php'>2014_10_12_000000_create_users_table.php</a></b></td>
						<td>- This migration creates the users table within the application's database<br>- It defines essential user attributes like name, email, password, and timestamps<br>- The up method constructs the table, while down reverses the process, facilitating database schema management and version control within the larger project<br>- This is a crucial component for user authentication and data persistence.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2014_10_12_100000_create_password_resets_table.php'>2014_10_12_100000_create_password_resets_table.php</a></b></td>
						<td>- The migration creates a database table for storing password reset tokens<br>- It facilitates the password recovery process within the application by managing email addresses and associated reset tokens with timestamps<br>- The table's structure enables users to request and utilize password reset functionality, supporting user account security<br>- The up and down methods manage table creation and deletion respectively.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2014_10_12_100000_create_password_reset_tokens_table.php'>2014_10_12_100000_create_password_reset_tokens_table.php</a></b></td>
						<td>- The migration creates a database table for storing password reset tokens<br>- It manages email addresses linked to reset tokens and their associated timestamps<br>- This table facilitates the password reset functionality within the application, enabling users to recover access to their accounts<br>- The migration's role is crucial for user account security and management within the broader application architecture.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2019_08_19_000000_create_failed_jobs_table.php'>2019_08_19_000000_create_failed_jobs_table.php</a></b></td>
						<td>- The migration creates a database table to store records of failed jobs within the application's queue system<br>- It logs essential details such as job ID, connection, queue name, payload, exception details, and the failure timestamp<br>- This facilitates debugging and monitoring of background processes, contributing to overall application reliability and maintainability.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2019_12_14_000001_create_personal_access_tokens_table.php'>2019_12_14_000001_create_personal_access_tokens_table.php</a></b></td>
						<td>- The migration creates a database table for storing personal access tokens<br>- It manages tokens used for API authentication,  including token details, associated user or model,  expiration times, and usage tracking<br>- This facilitates secure access control within the application's architecture.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2024_01_25_145818_create_orders_table.php'>2024_01_25_145818_create_orders_table.php</a></b></td>
						<td>- The migration creates the orders database table<br>- It defines the table schema, including fields for user ID, phone number, order details (special box, extended guarantee, delivery date, additional information, and price), and timestamps<br>- This table is integral to the application's order management functionality, enabling storage and retrieval of order data within the broader e-commerce system.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2024_01_25_150108_create_products_table.php'>2024_01_25_150108_create_products_table.php</a></b></td>
						<td>- The migration creates a database table named 'products' to store product information, including name and price<br>- It's part of the database schema, defining the structure for product data within the application<br>- The migration also automatically seeds the table with initial data upon execution, ensuring a populated database on deployment.</td>
					</tr>
					<tr>
						<td><b><a href='./database\migrations\2024_01_25_150456_create_order_records_table.php'>2024_01_25_150456_create_order_records_table.php</a></b></td>
						<td>- This migration creates the order_records database table<br>- It establishes a relational database structure to track individual product items within orders<br>- The table stores order and product IDs, quantity, and price, linking order details to the broader order and product information within the application's database schema<br>- The up function adds the table, and down reverses the changes.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>seeders</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./database\seeders\DatabaseSeeder.php'>DatabaseSeeder.php</a></b></td>
						<td>- DatabaseSeeder populates the application's database<br>- It's a core component of the project's seeding process, responsible for initializing the database with initial data<br>- This ensures a clean database state for development and testing.</td>
					</tr>
					<tr>
						<td><b><a href='./database\seeders\ProductsTableSeeder.php'>ProductsTableSeeder.php</a></b></td>
						<td>- ProductsTableSeeder populates the application's database with initial product data<br>- It first clears any existing product entries and then inserts six sample products, each defined by name and price<br>- This seeder contributes to the project's setup by providing a starting dataset for the Product model, crucial for testing and demonstration purposes within the larger e-commerce application.</td>
					</tr>
					</table>
				</blockquote>
			</details>
		</blockquote>
	</details>
	<details> <!-- resources Submodule -->
		<summary><b>resources</b></summary>
		<blockquote>
			<details>
				<summary><b>css</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./resources\css\app.css'>app.css</a></b></td>
						<td>- app.css defines the global stylesheet for the application<br>- It dictates the visual presentation of the user interface, ensuring consistent styling across all components<br>- Located within the project's resources directory, this file contributes to the overall user experience by providing a unified visual theme<br>- Its role is crucial for maintaining a cohesive and aesthetically pleasing application design.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>js</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./resources\js\app.js'>app.js</a></b></td>
						<td>- The app.js file bootstraps the Vue.js application<br>- It initializes the application instance, registers the ExampleComponent, and mounts the application to the DOM element with the ID "app"<br>- This file serves as the entry point for all client-side JavaScript logic within the Laravel application, facilitating the integration of Vue components into the application's views.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\js\bootstrap.js'>bootstrap.js</a></b></td>
						<td>- Bootstrap initializes Axios for backend communication, handling CSRF tokens automatically<br>- It also sets up the foundation for real-time features using Laravel Echo, although this functionality is currently commented out, suggesting potential future implementation of real-time capabilities via Pusher<br>- The configuration relies on environment variables for Pusher settings.</td>
					</tr>
					</table>
					<details>
						<summary><b>components</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./resources\js\components\ExampleComponent.vue'>ExampleComponent.vue</a></b></td>
								<td>- ExampleComponent.vue provides a basic, reusable UI element within a larger Vue.js application<br>- It serves as a placeholder or template, demonstrating fundamental component structure and lifecycle methods<br>- The component renders a simple card displaying introductory text, illustrating basic component functionality.</td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>lang</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./resources\lang\en.json'>en.json</a></b></td>
						<td>- The en.json file provides English language translations for user interface elements and system messages<br>- It supports various application features, including user authentication (login, registration, password reset), email verification, and error handling<br>- These translations ensure a localized user experience for English-speaking users within the application.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\lang\pl.json'>pl.json</a></b></td>
						<td>- The pl.json file provides Polish translations for user interface elements and application messages<br>- It supports internationalization by mapping English keys to their Polish equivalents, ensuring a localized experience for Polish-speaking users across the application<br>- This contributes to the overall multilingual capabilities of the software.</td>
					</tr>
					</table>
					<details>
						<summary><b>en</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./resources\lang\en\auth.php'>auth.php</a></b></td>
								<td>- The auth.php file provides English language translations for authentication error messages<br>- It defines messages displayed to users upon failed login attempts, specifying reasons such as incorrect credentials or exceeding login limits<br>- These translations contribute to a localized user experience within the larger authentication system of the application.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\en\pagination.php'>pagination.php</a></b></td>
								<td>- The pagination.php file provides English language translations for pagination controls<br>- It defines the text displayed for "next" and "previous" page links within the application's user interface, contributing to internationalization and localization efforts across the entire project<br>- These translations ensure a consistent and user-friendly experience regardless of language settings.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\en\passwords.php'>passwords.php</a></b></td>
								<td>- The passwords.php file provides English language strings for password reset functionality<br>- It supplies messages displayed to users during the password reset process, covering scenarios such as successful resets, email delivery confirmations, throttling, invalid tokens, and non-existent user accounts<br>- These strings are used within the application's user interface to enhance user experience and clarity.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\en\validation.php'>validation.php</a></b></td>
								<td>- The validation.php file defines validation rules for English language error messages<br>- It provides a comprehensive set of predefined messages used throughout the application to inform users about data input errors<br>- These messages are associated with various validation checks, ensuring data integrity and a consistent user experience across the application<br>- The file contributes to the overall application's data validation layer.</td>
							</tr>
							</table>
						</blockquote>
					</details>
					<details>
						<summary><b>pl</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./resources\lang\pl\auth.php'>auth.php</a></b></td>
								<td>- The auth.php file provides Polish language translations for authentication error messages<br>- It's part of the larger application's internationalization system, supplying user-friendly feedback in Polish for login failures, incorrect passwords, and account lockout due to excessive failed attempts<br>- This ensures a localized experience for Polish-speaking users.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\pl\pagination.php'>pagination.php</a></b></td>
								<td>- The pagination.php file provides Polish language translations for pagination controls<br>- It defines the text for "next" and "previous" page links within the application's user interface, contributing to internationalization and localization efforts within the larger project<br>- This ensures a user-friendly experience for Polish-speaking users.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\pl\passwords.php'>passwords.php</a></b></td>
								<td>- The passwords.php file provides Polish language translations for password reset messages<br>- It supports a multilingual application by offering localized feedback to users during the password recovery process, including messages for successful resets, email delivery confirmations, throttling notifications, invalid tokens, and non-existent user accounts<br>- This ensures a user-friendly experience regardless of language preference.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\lang\pl\validation.php'>validation.php</a></b></td>
								<td>- The file resources\lang\pl\validation.php provides Polish language validation messages for the application<br>- It's a crucial component of the overall project's internationalization (i18n) strategy, ensuring that error messages displayed to users are in their native language (Polish in this case)<br>- This improves user experience and accessibility.</td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
			<details>
				<summary><b>sass</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./resources\sass\app.scss'>app.scss</a></b></td>
						<td>- The app.scss file integrates external fonts and styling resources into the project<br>- It imports custom variables and the Bootstrap framework's SCSS files, establishing the foundational stylesheet for the application's visual presentation<br>- This ensures consistent styling across the entire application, leveraging pre-built components and a defined design system.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\sass\_variables.scss'>_variables.scss</a></b></td>
						<td>- The _variables.scss file defines global style variables for the project<br>- It sets defaults for body background color, font family, size, and line height, providing a centralized location to manage visual theme consistency across the entire application's styling<br>- These variables are subsequently used throughout the project's SCSS files to maintain a unified design.</td>
					</tr>
					</table>
				</blockquote>
			</details>
			<details>
				<summary><b>views</b></summary>
				<blockquote>
					<table>
					<tr>
						<td><b><a href='./resources\views\edit.blade.php'>edit.blade.php</a></b></td>
						<td>- The edit.blade.php view provides a user interface for modifying order details<br>- It's part of a larger order management system, rendering a form allowing users to update phone number, special packaging, extended warranty, delivery date, and additional information<br>- The form submits changes via a PUT request to the application's order update route.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\galeria.blade.php'>galeria.blade.php</a></b></td>
						<td>- The galeria.blade.php view renders a watch gallery section within a larger web application<br>- It displays a series of thumbnail images, each linking to a larger version within a lightbox viewer<br>- The view integrates external JavaScript libraries for image lightbox functionality, enhancing user experience by providing a clean and interactive image display<br>- Asset paths are dynamically generated, suggesting a modular design.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\home.blade.php'>home.blade.php</a></b></td>
						<td>- The home view displays a user's dashboard<br>- It presents a welcome message and summarizes the user's orders, including order details like date, phone number, total price, and a breakdown of individual items<br>- A link allows access to a more comprehensive order management section<br>- The view integrates with the application's layout and utilizes session data for personalized content.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\informacje.blade.php'>informacje.blade.php</a></b></td>
						<td>- The informacje.blade.php view renders an "About" page within a larger web application<br>- It displays information regarding the application's used graphics, tools, services, and templates<br>- The page utilizes a header, navigation section, main content area, and footer, incorporating external CSS and JavaScript files for styling and functionality<br>- It's a self-contained informational page integrated into the application's overall structure.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\koszyk.blade.php'>koszyk.blade.php</a></b></td>
						<td>- The koszyk.blade.php view renders a shopping cart and order form<br>- It allows users to add products, specify shipping details, select payment methods, and submit orders<br>- Client-side JavaScript handles form interactions, data validation, and local storage<br>- Upon submission,  an AJAX request sends order data to a controller for processing, redirecting the user upon successful order placement.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\polityka-prywatnosci.blade.php'>polityka-prywatnosci.blade.php</a></b></td>
						<td>- The polityka-prywatnosci.blade.php view displays the website's privacy policy<br>- It details data collection practices, including automatically gathered information and user-provided data<br>- The policy outlines the purposes of data processing, user rights under EU law, data security measures, and contact information for inquiries<br>- This page fulfills legal requirements for transparency regarding data handling.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\warunki-korzystania.blade.php'>warunki-korzystania.blade.php</a></b></td>
						<td>- The file resources\views\warunki-korzystania.blade.php is a Blade template responsible for rendering the Terms of Use page for the website<br>- Within the larger project architecture, it acts as a view, displaying the legally mandated terms and conditions to users, contributing to the site's compliance and user information provision.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\welcome.blade.php'>welcome.blade.php</a></b></td>
						<td>- The file resources/views/welcome.blade.php serves as the main landing page template for the website<br>- It defines the basic HTML structure, including metadata, links to external resources (like fonts and CSS stylesheets), and sets up the initial page layout<br>- Essentially, it's the visual foundation upon which the website's home page is built.</td>
					</tr>
					<tr>
						<td><b><a href='./resources\views\zamowienia.blade.php'>zamowienia.blade.php</a></b></td>
						<td>- The zamowienia.blade.php view displays a list of orders<br>- Each order shows details like phone number, delivery date,  items ordered, and total price<br>- Edit and delete functionalities are provided via links and forms, respectively, integrating with the application's order management system<br>- The view uses a template layout and incorporates styling for enhanced presentation.</td>
					</tr>
					</table>
					<details>
						<summary><b>auth</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./resources\views\auth\login.blade.php'>login.blade.php</a></b></td>
								<td>- The login.blade.php view renders a user login form<br>- It handles user input for email and password, incorporates error handling, and provides a "remember me" functionality<br>- The form submits to the application's authentication system, enabling user access to the application's features after successful authentication<br>- Password reset functionality is optionally available.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\views\auth\register.blade.php'>register.blade.php</a></b></td>
								<td>- The register.blade.php view renders a user registration form<br>- It handles user input for name, email, and password,  performing client-side validation and submitting data to the application's registration route<br>- The form integrates with the application's authentication system, providing a user interface for new account creation within the larger web application.</td>
							</tr>
							<tr>
								<td><b><a href='./resources\views\auth\verify.blade.php'>verify.blade.php</a></b></td>
								<td>- The verify.blade.php view renders a user interface for email verification<br>- It displays a message prompting users to check their inbox for a verification link and provides a form to request a link resend if necessary<br>- This component integrates with the application's authentication system, facilitating user account activation and security<br>- It's part of the larger authentication module within the project's view layer.</td>
							</tr>
							</table>
							<details>
								<summary><b>passwords</b></summary>
								<blockquote>
									<table>
									<tr>
										<td><b><a href='./resources\views\auth\passwords\confirm.blade.php'>confirm.blade.php</a></b></td>
										<td>- The confirm.blade.php view renders a password confirmation form within the application's authentication system<br>- It prompts users to re-enter their password for verification before proceeding, enhancing security<br>- A link to the password reset functionality is also provided, improving user experience and facilitating password recovery<br>- The form integrates with the application's routing and validation mechanisms.</td>
									</tr>
									<tr>
										<td><b><a href='./resources\views\auth\passwords\email.blade.php'>email.blade.php</a></b></td>
										<td>- The email.blade.php view renders a form enabling users to request password reset instructions<br>- It's part of the authentication system, specifically the password recovery feature<br>- The form collects the user's email address, submits it to the application, and displays success or error messages accordingly, facilitating the password reset process<br>- This view contributes to a user-friendly password recovery experience within the application.</td>
									</tr>
									<tr>
										<td><b><a href='./resources\views\auth\passwords\reset.blade.php'>reset.blade.php</a></b></td>
										<td>- The reset.blade.php view renders a password reset form within the application's authentication system<br>- It presents fields for email, new password, and password confirmation, handling user input and validation<br>- Upon submission, the form processes the password reset request, leveraging the application's routing and authentication logic<br>- The view integrates seamlessly with the application's overall user interface.</td>
									</tr>
									</table>
								</blockquote>
							</details>
						</blockquote>
					</details>
					<details>
						<summary><b>layouts</b></summary>
						<blockquote>
							<table>
							<tr>
								<td><b><a href='./resources\views\layouts\app.blade.php'>app.blade.php</a></b></td>
								<td>- app.blade.php defines the master layout for the Laravel application's views<br>- It establishes the basic HTML structure, including header elements, navigation menus, and a content placeholder<br>- The navigation dynamically adapts to user authentication status, displaying appropriate login/registration links or user-specific options like a gallery, cart, and order history<br>- Styling is incorporated via linked CSS files.</td>
							</tr>
							</table>
						</blockquote>
					</details>
				</blockquote>
			</details>
		</blockquote>
	</details>
</details>

---
##  Getting Started

###  Prerequisites

Before getting started with meskie-zegarki-na-reke, ensure your runtime environment meets the following requirements:

- **Web server solution stack package:** Xampp
- **Programming Language:** PHP 8.2, JavaScript runtime - Node.js
- **Package Manager:** Composer, Npm


###  Installation

Install meskie-zegarki-na-reke using the following method:

1. Run the Xampp control panel, then run inside it the Apache and the MySQL servers.

2. Open the phpmyadmin in the browser:
```sh
http://localhost/phpmyadmin/
```

3. Create a new database named:
```sh
meskiezegarkinareke
```

4. Navigate to the htdocs directory:
```sh
cd xampp/htdocs
```

5. Clone the meskie-zegarki-na-reke repository:
```sh
git clone https://github.com/Eyelor/meskie-zegarki-na-reke
```

6. Navigate to the project directory:
```sh
cd meskie-zegarki-na-reke
```

7. Install the project dependencies:

**Using `npm`**

```sh
npm install
```

**Using `composer`**

```sh
composer install
```

**Using `php`**

```sh
php artisan migrate
```

**Using `npm`**

```sh
npm run build
```


###  Usage
Run meskie-zegarki-na-reke using the following command:

**Using `php`**

```sh
php artisan serve
```

Open this site in the browser:

```sh
http://localhost:8000/
```


---

##  License

This project is protected under the Apache 2.0 License. For more details, refer to the [LICENSE](./LICENSE) file.

---
