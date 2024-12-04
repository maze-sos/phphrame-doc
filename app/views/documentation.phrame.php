<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=1024">

    <title><?=$title ?? 'Unknown'?> | <?=APP_NAME?></title>
    <meta name="description" content="<?=APP_DESC?>">
    <meta name="author" content="<?=APP_AUTHOR?>">
    <link rel="icon" href="<?=ROOT?>/assets/img/favicon_io/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=ROOT?>/assets/img/favicon_io/favicon.png" />
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Prism.js for syntax highlighting -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
    
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
</head>

<body>

    <div class="navbar clear nav-top">
        <div class="row content">
            <a href="<?=ROOT?>"><img class="logo" src="<?=ROOT?>/assets/img/logotext.png"></a>
            <a class="right" style="text-decoration: underline;" href="<?=ROOT?>"><i class="fas fa-home"></i>&nbsp; Home</a>
            <a class="right" href="<?=ROOT?>/assets/docs/PHPhrameUsageDoc.pdf" download><i class="fas fa-book"></i>&nbsp; Download Usage Documentation</a>
            <!-- <a class="right" href="<?=ROOT?>/assets/docs/phphrame.zip" download><i class="fas fa-download"></i>&nbsp; Download Framework</a> -->
            <a class="right" href="mailto:phphramesupport@phphrame.com.ng" target="_blank"><i class="fas fa-paper-plane"></i>&nbsp; phphramesupport@phphrame.com.ng</a>
        </div>
    </div>

    <div class="container clear">
        <div class="row wrapper">

            <div class="sidepanel">

                <a class="title" href="#intro">Introduction</a>
                
                <a class="section" href="#v">Supported Versions</a>
                <a class="section" href="#about">About this App</a>
                <a class="section" href="#technology">Technology</a>
            
                <div class="divider left"></div>
            
                <a class="title" href="#gettingstarted">Getting Started</a>
            
                <a class="section" href="#installingapp">Installing the App</a>
                <a class="section" href="#openingapp">Opening the App</a>
            
                <div class="divider left"></div>
            
                <a class="title" href="#phrame">PHPhrame Structure</a>
            
                <a class="section" href="#phrameapp">App Folder Structure</a>
                <a class="section" href="#phramepublic">Public Folder Structure</a>
                <a class="section" href="#phramecli">Phrame CLI Tool</a>
            
                <div class="divider left"></div>
            
                <a class="title" href="#basicfeatures">Basic Features</a>
            
                <a class="section" href="#corefeatures">Core Features</a>
            
                <div class="divider left"></div>
            
                <a class="title" href="#advanced">Advanced Features</a>
            
                <a class="section" href="#security">Security Features</a>
                <a class="section" href="#namespace">Namespace Usage</a>
            
                <div class="divider left"></div>
            
                <a class="title" href="#accesibility">Accessibility</a>
            
                <div class="divider left"></div>
            
                <div class="space double"></div>
            
            </div>

            <div class="right-col">
                <div id="intro"></div>
                <br><br><br>
                <h1>Introduction</h1>
                
                <p id="v">The Model-View-Controller (MVC) architectural pattern is a fundamental approach in modern web development, enabling the creation of organized, scalable, and maintainable applications. This project proposes the creation of a new PHP MVC framework tailored to address these challenges. The framework will incorporate essential features such as built-in command line tools, migration support, and a simple MVC structure, all while leveraging Object-Oriented Programming (OOP) principles and supporting PHP 8 and upwards.</p>
                <h3 style="text-decoration: underline;">Supported Versions</h3>
             
                <p id="about"><b>App Version 1.0.0:</b> This is the first version.</p>
                <p ><b>PHP Version 8.x:</b> Supporting PHP 8 and upwards.</p>

                <h3 style="text-decoration: underline;">About this App</h3>
                <p id="technology">This PHP MVC framework is designed to provide developers with a lightweight, flexible, and easy-to-use tool for building web applications. Its focus is on simplicity without sacrificing essential features like routing, migrations, and session management, all built using modern PHP standards such as Object-Oriented Programming (OOP) and namespace usage.</p>

                <h3 style="text-decoration: underline;">Technology</h3>
                <p>The framework is built using PHP 8.x, with a custom MVC architecture incorporating modern web development tools. Key technologies include:</p>
                <ul>
                    <li>Programming Language: PHP 8.x</li>
                    <li>Database: MySQL</li>
                    <li id="gettingstarted">Development Tools: DomainKing, Git, Composer</li>
                </ul>

                <div id="installingapp" class="divider" style="width:24%; margin:30px 0;" ></div>

                <h1 >Getting Started</h1>
                
                <h3 style="text-decoration: underline;" >Install the App</h3>
                
                <ol>
                    <li >Run the <code>composer installation command</code> to install your new project 
                    <br>(Replace "newproject" in the command with your actual project name).</li>
                    <div class="code-snippet">
                        <h4>composer command syntax</h4>
                        <pre><code id="composer-code" class="language-cli"> composer create-project phphrame/phphrame newproject</code></pre>
                        <button class="copy-btn" data-clipboard-target="#composer-code">Copy</button>
                    </div>
                    <li id="openingapp">Download the framework directly our <a class="right" href="<?=ROOT?>/assets/docs/phphrame.zip" download>Website</a>.</li>
                    <li>Download the repository directly from <a href="https://github.com/maze-sos/phphrame.git" target="_blank">GitHub</a>.</li>
                    
                    <li >Ensure PHP 8.x and MySQL are installed on your machine.</li>
                </ol>
                
                <h3 style="text-decoration: underline;" >Opening the App</h3>
                <ol>
                    <li >Start your PHP development enviroment tool (e.g XAMPP)</li>
                    <li >Open your web browser and navigate to `http://localhost/newproject/public`.</li>
                    <li id="phrame">You will be landed on the home page.</li>
                </ol>

                <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1 id="moreinfo">PHPhrame Structure</h1>
                <ul>
                    <li id="phrameapp">app (folder)</li>
                    <li>public (folder)</li>
                    <li>phrame (cli tool)</li>
                    <li>Composer Dependencies</li>
                </ul>
                <!-- Public Folder Documentation Start -->
                <h3 style="text-decoration: underline;">App Folder Structure</h3>
                <p>The <code>app</code> folder is essential for handling all front-end and static content that a web server can access directly. This section outlines the structure and purpose of each element within this folder.</p>

                <h3>Contents of the <code>app</code> Folder:</h3>
                <ul>
                    <li><b>index.php</b>file: used to deny site visitors access to the app folder</li> 
                    <li><b>controllers</b> folder: contains essential pre coded controllers that manage user navigation, session handling, and authentication across different parts of the application. Each controller is specifically designed to handle unique parts of the application, described below:</li>
                    <table>
                        <thead>
                            <tr>
                                <th>Controller File</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>_404.php</p></td>
                                <td>The <code>index</code> method renders the <code>404</code> view when an invalid URL is accessed, ensuring that users receive an appropriate error page instead of a broken link.</td>
                            </tr>
                            <tr>
                                <td><p>Dashboard.php</p></td>
                                <td>The <code>index</code> method checks if a user is authenticated. If the user isn’t logged in, they’re redirected to the login page. If authenticated, the method loads the <code>dashboard</code> view, giving users access to the main dashboard interface.</td>
                            </tr>
                            <tr>
                                <td><p>Home.php</p></td>
                                <td>The <code>index</code> method is the primary entry point for general access, rendering the <code>home</code> view for users. This file represents a landing page or main homepage in PHPhrame.</td>
                            </tr>
                            <tr>
                                <td><p>Login.php</p></td>
                                <td>The <code>index</code> method initializes the <code>User</code> model, handling incoming POST requests for login. It authenticates the user’s credentials, and if valid, allows access to the restricted areas of the application.</td>
                            </tr>
                            <tr>
                                <td><p>Logout.php</p></td>
                                <td>The <code>index</code> method ends the user’s session and redirects them to the login page. This ensures secure and proper session termination, preventing unauthorized access to logged-in areas after logout.</td>
                            </tr>
                            <tr>
                                <td><p>Signup.php</p></td>
                                <td>Similar to the login controller, the <code>index</code> method initializes the <code>User</code> model and processes POST requests to handle user signup. This method validates incoming data and, if valid, registers a new user in the system and loads the <code>signup</code> view.</td>
                            </tr>
                        </tbody>
                    </table>                    
                    <li><b>core</b> folder:  serves as the foundational component of the application, encapsulating essential functionalities required for the framework's operation. The <code>core</code> folder is designed to house the fundamental classes, traits, and functions that underpin the architecture of PHPhrame framework. It includes critical components such as:</li>
                    <table>
                        <thead>
                            <tr>
                                <th>Core File</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>App.php</p></td>
                                <td>This class is responsible for loading and routing controllers and their methods based on the URL. The <code>App</code> class initializes with default values, such as the <code>Home</code> controller and <code>index</code> method. The <code>splitURL</code> function processes the URL for routing, and <code>loadController</code> selects the controller and method to execute based on the URL structure. If the controller or method isn't found, it defaults to a 404 error handler.</td>
                            </tr>
                            <tr>
                                <td><p>config.php</p></td>                               
                                <td>This file contains the configuration settings for the application. It checks if the server is in a local or production environment and sets up database credentials and the root URL accordingly. The configuration defines constants for the app's name, description, and debugging mode. Database constants such as <code>DBNAME</code>, <code>DBHOST</code>, <code>DBUSER</code>, and <code>DBPASS</code> are configured here, along with error visibility.</td>
                            </tr>
                            <tr>
                                <td><p>Controller.php</p></td>
                                <td>Defines the <code>MainController</code> trait, providing the <code>view</code> method to load views dynamically. The <code>view</code> function accepts a view name and optional data to render. It attempts to load the specified view; if unavailable, it loads a 404 error page. This file centralizes the view-loading logic for controllers that use this trait.</td>
                            </tr>
                            <tr>
                                <td><p>Database.php</p></td>
                                <td>Defines the <code>Database</code> trait, encapsulating methods for connecting to and querying the database. The <code>connect</code> function establishes a PDO connection using defined database constants. The <code>query</code> method prepares and executes SQL statements, returning results as an array of objects if successful. The <code>get_row</code> method works similarly but returns only the first result, enabling convenient retrieval of single rows.</td>
                            </tr>
                            <tr>
                                <td><p>functions.php</p></td>
                                <td> This file includes essential helper functions:
                                    <li><code>check_extensions()</code>: Checks for required PHP extensions and outputs missing ones.</li>
                                    <li><code>show()</code>: Outputs a formatted representation of data.</li>
                                    <li><code>esc()</code>: Sanitizes strings to prevent XSS.</li>
                                    <li><code>redirect()</code>: Redirects to a specified path.</li>
                                    <li><code>get_image()</code>: Loads image URLs; if missing, loads a placeholder.</li>
                                    <li><code>get_pagination_vars()</code>: Returns pagination parameters.</li>
                                    <li><code>message()</code>: Manages temporary messages for the user.</li>
                                    <li><code>URL()</code>: Retrieves parts of the URL based on key values.</li>
                                    <li><code>old_checked, old_value, old_select</code>: Persist input values across page refreshes.</li>
                                    <li><code>get_date()</code>: Formats dates for readability.</li>
                                    <li><code>add_root_to_images()</code>: Converts image paths to absolute URLs in HTML.</li>
                                    <li><code>remove_images_from_content()</code>: Extracts and saves images from content.</li>
                                    <li><code>delete_images_from_content()</code>: Deletes images from content that no longer exist in updated content.</li> <br>
                                    These utilities support dynamic data handling, input persistence, URL management, and content formatting.
                                </td>
                            </tr>
                            <tr>
                                <td><p>init.php</p></td>
                                <td>This initialization file is required at the start of the application to load necessary settings and configurations, ensuring essential constants, environment checks, and configurations are set before running the app.</td>                            
                            </tr>
                            <tr>
                                <td><p>Model.php</p></td>
                                <td>This trait encapsulates core model functionalities for interacting with the database. It provides methods for basic CRUD operations, including:
                                    <li><code>findAll()</code>: Retrieves all records from the model's associated table with pagination support.</li>
                                    <li><code>where($data, $data_not = [])</code>: Fetches records that match the specified criteria, with the option to exclude others.</li>
                                    <li><code>first($data, $data_not = [])</code>: Returns the first record that matches the given conditions, or false if none are found.</li>
                                    <li><code>insert($data)</code>: Inserts a new record into the table, ensuring only allowed columns are included.</li>
                                    <li><code>update($id, $data, $id_column = 'id')</code>: Updates an existing record based on the specified ID.</li>
                                    <li><code>delete($id, $id_column = 'id')</code>: Deletes a record from the table based on the specified ID.</li>
                                    <li><code>validate($data)</code>: Validates data against predefined rules for insertion and updating, storing any errors encountered.</li>
                                    <li><code>getError($key)</code>: Retrieves validation error messages for specific fields.</li>
                                    This trait is designed to be used within model classes, providing them with a standardized approach to database operations and validation logic.</td>
                            </tr>
                        </tbody>
                    </table>
                    <li><b>migrations</b> folder: is responsible for managing the database schema and ensuring that the database structure is in sync with the application code. Each migration file represents a set of changes to the database, which may include creating or altering tables, adding columns, or modifying relationships. Each Migration file is named with the date and time at which it was created.</li> <br>
                        <b>25th_Oct_2024_16_12_04_Schools.php:</b>
                        <p>It was created on <code>25th October, 2024</code> at <code>16hrs: 12mins: 4secs</code>; <br> This file is a migration class within the <code>migrations</code> folder, implementing database schema changes specifically for creating and managing the <code>schools</code> table. The class <code>Schools</code> extends a base <code>Migration</code> class and defines two methods: <code>up</code> and <code>down</code>. The <code>up</code> method handles the creation of the table and its schema, while the <code>down</code> method handles the rollback, which drops the table. 
                        <br> This namespace categorizes the migration within the <code>Phrame</code> framework. </p>
                        <p> Class: <code>Schools</code> <br>
                        The <code>Schools</code> class extends the <code>Migration</code> class, allowing access to methods for defining and manipulating the database schema. <br>
                        <br>

                        <code>Methods</code> <br> <br>

                        <code>up()</code>: This method creates the schools table with the following schema:</li> <br>
                            <><code>id</code>: An integer primary key that auto-increments. <br>
                            <><code>date_created</code>: A datetime field that stores the creation timestamp. <br>
                            <><code>date_updated</code>: A datetime field that stores the last update timestamp. <br>
                            List of Steps in <code>up()</code>: <br>
                            <><code>addColumn</code>: Adds columns for id, date_created, and date_updated. <br>
                            <><code>addPrimaryKey</code>: Sets the id column as the primary key.<br>
                            <><code>createTable</code>: Creates the schools table with the specified schema.<br>
                            <><code>addData</code>: Adds default values to the date_created and date_updated fields.<br>
                            <><code>insertData</code>: Inserts the default data into the schools table after creation.<br>
                            Note: The method includes commented code for adding a unique key, which is currently inactive.<br> <br>
                            
                        <code>down()</code>: This method drops the schools table, reversing the actions performed in up().</p>  
                        
                    <li><b>models</b> folder: contains classes that represent the core data structures and business logic of the application. Models are responsible for interacting with the database, encapsulating data retrieval and manipulation, and ensuring data integrity. They serve as a bridge between the application and the database, allowing for efficient management of data, including CRUD (Create, Read, Update, Delete) operations.</li>
                    <table>
                        <thead>
                            <tr>
                                <th>Model File</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>Image.php</p></td>
                                <td>The Image class is used for manipulating images, including resizing, cropping, and generating thumbnails. It supports various image formats such as PNG, GIF, JPEG, and WebP. <br> <br>
                                    <b>Methods:</b> <br>

                                   <li><code>resize($filename, $max_size = 700)</code>: Resizes an image to a maximum width or height of $max_size, maintaining the aspect ratio. <br></li> 
                                    <> <b>Parameters:</b> <br>
                                    <code>$filename</code>: Path of the image to resize. <br>
                                    <code>$max_size</code>: The maximum width or height for the image. <br>
                                    <> <b>Function: </b>Returns the filename of the resized image.<br>
                                    <> <b>Example usage:</b> <code>$image->resize("image.png", 500);</code>
                                    <br><br>

                                    <li><code>crop($filename, $max_width = 700, $max_height = 700)</code>:  Crops an image to the specified width and height, centering the cropped portion. </li>
                                    <> <b>Parameters:</b> <br>
                                    <code>$filename</code>: Path of the image to crop. <br>
                                    <code>$max_width</code>: The width to crop the image to. <br>
                                    <code>$max_height</code>: The height to crop the image to. <br>
                                    <> <b>Function: </b>Returns the filename of the cropped image. <br>
                                    <> <b>Example usage:</b><code>$image->crop("image.jpg", 600, 400);</code>
                                    <br><br>

                                    <li><code>getThumbnail($filename, $max_width = 700, $max_height = 700)</code>: Creates a thumbnail of an image with the specified width and height, preserving the aspect ratio.</li>
                                    <> <b>Parameters:</b> <br>
                                    <code>$filename</code>: Path of the image to generate a thumbnail for. <br>
                                    <code>$max_width</code>: The width of the thumbnail. <br>
                                    <code>$max_height</code>: The height of the thumbnail. <br>
                                    <> <b>Function: </b>Returns the filename of the thumbnail. <br>
                                    <> <b>Example usage:</b><code>$image->getThumbnail("photo.webp", 100, 100); </code><br>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Pager.php</p></td>
                                <td>The Pager class is a utility for pagination, handling the display and navigation between pages of data. <br><br>
                                    <b>Properties:</b><br>
                                    <li><code>$links</code>: Array of links for pagination (first, current, next).</li>
                                    <li><code>$offset</code>: Offset for the current page.</li>
                                    <li><code>$page_number</code>: Current page number.</li>
                                    <li><code>$start</code> and <code>$end</code>: Define the range of pages shown in navigation.</li>
                                    <li><code>$limit</code>: Number of records per page.</li>
                                    <li>Additional CSS classes and inline styles for pagination components (ul_class, li_class, etc.).</li>
                                    <br>
                                    <b>Methods:</b> <br>
                                    <li><code>__construct($limit = 10, $extras = 1)</code>: Initializes the pager with a set limit and surrounding pages.</li>
                                    <b>Parameters:</b> <br>
                                    <code>$limit</code>: Number of items per page (default: 10). <br>
                                    <code>$extras</code>: Number of additional pages to show in navigation.<br>
                                    <b>Function:</b> Sets up pagination links for easy navigation.<br>
                                    <br>
                                    <li><code>display($record_count = null)</code>: Displays the pagination UI, iterating over page numbers and providing "First" and "Next" links.</li>
                                    <b>Parameters:</b> <br>
                                    <code>$record_count</code>: The number of records on the current page (default: uses limit).<br>
                                    <b>Example usage:</b> <code>$pager->display($totalItems);</code>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Request.php</p></td>
                                <td>The Request class is a wrapper around global request variables, allowing easy access to POST, GET, and FILE data. <br><br>
                                    <b>Methods:</b> <br>
                                    <li><code>method()</code>: Returns the HTTP request method (e.g., POST or GET).</li>
                                    <b>Example usage:</b> <code>$request->method();</code>
                                    <br><br>
                                    <li><code>posted()</code>: Checks if a POST request was made with data.</li>
                                    <b>Returns:</b> true if there are POST data, false otherwise.<br>
                                    <b>Example usage:</b> <code>$request->posted();</code>
                                    <br><br>
                                    <li><code>post($key = '', $default = '')</code>: Retrieves a value from the $_POST array.</li>
                                    <b>Parameters:</b> <br>
                                    <code>$key</code>: Key to look up in $_POST. <br>
                                    <code>$default</code>: Default value if the key is not found.<br>
                                    <b>Example usage:</b> <code>$request->post("username", "guest");</code>
                                    <br><br>
                                    <li><code>files($key = '', $default = '')</code>: Retrieves a value from the $_FILES array.</li>
                                    <b>Parameters:</b> <br>
                                    <code>$key</code>: Key to look up in $_FILES. <br>
                                    <code>$default</code>: Default value if the key is not found.<br>
                                    <b>Example usage:</b> <code>$request->files("profile_pic");</code>
                                    <br><br>
                                    <li><code>get($key = '', $default = '')</code>: Retrieves a value from the $_GET array.</li>
                                    <b>Parameters:</b> <br>
                                    <code>$key</code>: Key to look up in $_GET. <br>
                                    <code>$default</code>: Default value if the key is not found.<br>
                                    <b>Example usage:</b> <code>$request->get("page", 1);</code>
                                    <br><br>
                                    <li><code>input($key, ...)</code>: Handles both GET and POST input requests based on the method used.</li>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Session.php</p></td>
                                <td>The Session class provides methods to manage session data, including saving user authentication information and storing application data.<br><br>
                                    <b>Methods:</b> <br>
                                    <li><code>set(mixed $keyOrArray, mixed $value = ''): int</code>: Saves data to the session.</li>
                                    <li><code>get(string $key, mixed $default = ''): mixed</code>: Retrieves data from the session.</li>
                                    <li><code>auth(mixed $user_row): int</code>: Saves user data into the session upon login.</li>
                                    <li><code>logout(): int</code>: Removes user data from the session.</li>
                                    <li><code>is_logged_in(): bool</code>: Checks if a user is logged in.</li>
                                    <li><code>user(string $key = '', mixed $default = ''): mixed</code>: Gets data from a specific column in the session user data.</li>
                                    <li><code>pop(string $key, mixed $default = ''): mixed</code>: Returns and removes data from the session.</li>
                                    <li><code>all(): mixed</code>: Returns all data stored in the session.</li>
                                </td>
                            </tr>
                            <tr>
                                <td><p>User.php</p></td>
                                <td>The User class manages user-related operations, including signup and login processes, and validation of user data.<br><br>
                                    <b>Methods:</b> <br>
                                    <li><code>signup($data)</code>: Validates and saves a new user to the database.</li>
                                    <li><code>login($data)</code>: Authenticates a user and starts a session if successful.</li>
                                    <li><b>Validation Rules:</b> Includes rules for required fields, uniqueness, and password strength.</li>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <li><b>views</b> folder: Each view file is named with a <code>.phrame.php</code> extension, aligning with the PHPhrame framework's naming conventions.</li>
                    <table>
                        <thead>
                            <tr>
                                <th>View File</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>404.phrame.php</p></td>
                                <td>This view is displayed when the application encounters a 404 error (Page Not Found). It informs users that the requested page does not exist.</td>
                            </tr>
                            <tr>
                                <td><p>dashboard.phrame.php</p></td>
                                <td>This view represents the dashboard interface, providing users access to key features and summarized data relevant to their account.</td>
                            </tr>
                            <tr>
                                <td><p>home.phrame.php</p></td>
                                <td>Acts as the main landing page of the application, offering users general information and access to primary features.</td>
                            </tr>
                            <tr>
                                <td><p>login.phrame.php</p></td>
                                <td>This view provides the login interface, allowing users to enter their credentials to gain access to the application.</td>
                            </tr>
                            <tr>
                                <td><p>signup.phrame.php</p></td>
                                <td>Presents a registration form for new users to sign up for the application. Includes input fields for necessary registration details like username, email, password, and a submit button. It may also display validation messages and links to log in if the user already has an account.</td>
                            </tr>
                        </tbody>
                    </table>  
                    <li><b>phrame</b> folder: includes essential files for managing the framework’s database operations, migrations, and CLI commands. This folder plays a critical role in ensuring the seamless functioning of the PHPhrame framework by facilitating database interactions and command-line operations. Below is a comprehensive summary of each file's functionality, usage, and purpose within the framework.</li>
                    <table>
                        <thead>
                            <tr>
                                <th>File</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>Database.php</p></td>
                                <td><b>Namespace:</b> Phrame <br> 
                                    <b>Class:</b> Database <br> 
                                    <b>Description:</b> A foundational class for database operations, the <code>Database</code> class integrates with other classes using the <code>Database</code> trait from the Model namespace, which supplies core database functions such as connection management and query execution. <br>
                                    <b>Key Methods:</b>
                                    <ul>
                                        <li><code>connect():</code> Establishes a connection to the database using PDO.</li>
                                        <li><code>query($sql, $params = []):</code> Prepares and executes SQL statements, returning results as an array of objects.</li>
                                        <li><code>get_row($sql, $params = []):</code> Executes a query and returns a single row of results.</li>
                                    </ul>
                                    <b>Usage:</b> Essential for connecting to and querying the database within the framework. This class is leveraged by other components for tasks such as migration and table creation commands, ensuring consistent database interactions throughout the application.
                                </td>
                            </tr>
                            <tr>
                                <td><p>init.php</p></td>
                                <td><b>Description:</b> This initialization file sets up essential components of the framework. It is responsible for loading key configuration files and core classes, including <code>config.php</code>, <code>Database.php</code>, <code>Migration.php</code>, and <code>Phrame.php</code>. This ensures that the framework is ready for operations right from the start. <br> 
                                    <b>Usage:</b> It is included at the very beginning of the framework operations to guarantee that all necessary components and configurations are loaded for subsequent use. Any errors or issues in loading will prevent the application from starting, providing a safeguard against misconfiguration.
                                </td>
                            </tr>
                            <tr>
                                <td><p>Migration.php</p></td>
                                <td><b>Namespace:</b> Phrame <br> 
                                    <b>Class:</b> Migration <br> 
                                    <b>Description:</b> The <code>Migration</code> class offers a comprehensive set of methods for creating, modifying, and managing database tables and their structures. It utilizes the <code>Database</code> trait to execute commands directly against the database. <br>
                                    <b>Key Methods:</b>
                                    <ul>
                                        <li><code>createTable($table):</code> Creates a new table based on specified columns and constraints.</li>
                                        <li><code>addColumn($table, $column, $type):</code> Adds a new column to an existing table.</li>
                                        <li><code>addPrimaryKey($table, $key):</code> Defines primary key columns for a table.</li>
                                        <li><code>addUniqueKey($table, $key):</code> Sets unique constraints on table columns.</li>
                                        <li><code>dropTable($table):</code> Deletes a specified table from the database.</li>
                                        <li><code>insertData($table, $data):</code> Inserts specified data into a table.</li>
                                    </ul>
                                    <b>Usage:</b> The Migration class is integral for managing database schema updates and modifications through the CLI, allowing developers to add, delete, or modify tables and data as needed. It enhances the development process by enabling version control over database changes.
                                </td>
                            </tr>
                            <tr>
                                <td><p>Phrame.php</p></td>
                                <td><b>Namespace:</b> Phrame <br> 
                                    <b>Class:</b> Phrame <br> 
                                    <b>Description:</b> This class provides comprehensive command-line functionalities to manage the framework’s database, migrations, and file generation, effectively acting as the CLI interface for developers. <br>
                                    <b>Key Methods:</b>
                                    <ul>
                                        <li><code>db:create:</code> Creates a new database.</li>
                                        <li><code>db:table:</code> Displays the structure of a specified table.</li>
                                        <li><code>db:drop:</code> Deletes a specified database.</li>
                                        <li><code>migrate:</code> Executes migration files to create or modify tables.</li>
                                        <li><code>migrate:rollback:</code> Reverts migrations by executing the down methods.</li>
                                        <li><code>make:model:</code> Generates a new model file based on templates.</li>
                                    </ul>
                                    <b>Usage:</b> Run commands through the phrame CLI to create databases, execute migrations, generate files, and manage the framework’s overall database schema. This class significantly simplifies and automates database management tasks for developers.
                                </td>
                            </tr>
                            <tr>
                                <td><p>Samples Folder</p></td>
                                <td><b>Description:</b> This folder contains templates designed for quickly creating new classes within the framework, serving as a foundation for standard class structures. These templates are referenced by the <code>make</code> commands in <code>Phrame.php</code>. <br> 
                                    <b>Contents:</b> 
                                    <ul>
                                        <li><code>controller-sample.php:</code> Template for creating new controller classes, illustrating the required methods and structure.</li>
                                        <li><code>migration-sample.php:</code> Template for creating new migration files, including basic up and down methods for database changes.</li>
                                        <li><code>model-sample.php:</code> Template for creating model classes, providing examples of rules and database table references.</li>
                                    </ul>
                                    <b>Usage:</b> These sample files expedite the development process by providing a consistent starting point for new classes, ensuring adherence to framework standards and reducing boilerplate code.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </ul>
                <div id="phramepublic"></div>
                <br><br><br>
                <!-- App Folder Documentation End -->
                <h3 style="text-decoration: underline;" id="public-folder">Public Folder Structure</h3>
                <p>The <code>public</code> folder is essential for handling all front-end and static content that a web server can access directly. This section outlines the structure and purpose of each element within this folder.</p>

                <h3>Contents of the <code>public</code> Folder:</h3>
                <ul>
                    <li><b>assets</b> folder: Contains all static files such as stylesheets, scripts, and images.</li>
                        <ul>
                            <li><b><code>css</code>:</b> Includes CSS files for styling the application.</li>
                            <li><b><code>js</code>:</b> Houses JavaScript files essential for client-side interactivity.</li>
                            <li><b><code>img</code>:</b> Stores images used across the application.</li>
                        </ul>
                    <li><b>.htaccess</b> file: </li>
                        <p>The <code>.htaccess</code> file Configures URL rewriting rules, ensuring that user-friendly URLs are routed through index.php. <br>
                        <code>RewriteEngine On:</code> Enables URL rewriting. <br>
                        <code>RewriteCond %{REQUEST_FILENAME} !-f:</code> Ensures only nonexistent files are routed. <br>
                        <code>RewriteCond %{REQUEST_FILENAME} !-d:</code> Ensures only nonexistent directories are routed. <br>
                        <code>RewriteRule ^(.*)$ index.php?url=$1 [L,QSA]:</code> Routes any unmatched request to index.php, passing the requested URL as a parameter.</p>
                    
                    <li><b>index.php</b> file:</li>
                        <p>The <code>index.php</code> Serves as the main entry point for the application, performing initial setup and routing requests. <br>
                        Checks for a compatible PHP version. <br>
                        Defines <code>ROOTPATH</code> as the absolute path to the current file. <br>
                        Includes the framework initialization file <code>init.php</code>. <br>
                        Manages error display based on the <code>DEBUG</code> setting. <br>
                        Creates an instance of the main <code>App</code> class and triggers controller loading.</p>
                    <li id="phramecli"><b>robots.txt</b> file:</li>
                    <p>Provides directives for web crawlers, instructing them to avoid <code>/admin/</code> and <code>/ajax/</code> directories.</p>
                </ul>

                <!-- Public Folder Documentation End -->

                <h3 style="text-decoration: underline;" id="public-folder">Phrame CLI Tool</h3>
                <p>The <code>phrame</code> v1.0.0 tool is only for use in the Command Line. 
                <br>(Replace "command" in the syntax with the command you want to use and also replace "filename" with the name you wan tto use in accordance with official naming convention).</p>
                <div class="code-snippet">
                    <h4>phrame command syntax</h4>
                    <pre><code id="phrame-code" class="language-cli"> php phrame command filename</code></pre>
                    <button class="copy-btn" data-clipboard-target="#phrame-code">Copy</button>
                </div>
                <h4>Database Commands</h4>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Command</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">db:create</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Create a new database schema.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">db:table</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Retrieves information on the selected table.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">db:drop</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Drop/Delete a database.</td>
                        </tr>
                    </tbody>
                </table>
                
                <h4>Migration Commands</h4>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Command</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">migrate</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Locates and runs a migration file.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">migrate:refresh</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Runs the 'down' & then 'up' method for a migration file.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">migrate:rollback</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Runs the 'down' method for a migration file.</td>
                        </tr>
                    </tbody>
                </table>
                
                <h4>Make Commands</h4>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Command</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">make:controller</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Generates a new controller file.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">make:model</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Generates a new model file.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">make:migration</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Generates a new migration file.</td>
                        </tr>
                    </tbody>
                </table>
                
                <h4>Other Commands</h4>
                <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid #ddd; padding: 8px;">Command</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">help</td>
                            <td style="border: 1px solid #ddd; padding: 8px;">Lists all the commands.</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;">list:migrations</td>
                            <td id="basicfeatures" style="border: 1px solid #ddd; padding: 8px;">Displays all migration files available.</td>
                        </tr>
                    </tbody>
                </table>
                
            

                <div id="corefeatures" class="divider" style="width:24%; margin:30px 0;"></div>

                <h1 >Basic Features</h1>

                <h3 style="text-decoration: underline;">Core Features</h3>
                <ul>
                    <li>Available Command Line Tools</li>
                    <li>Simple MVC Structure</li>
                    <li>Migration Support</li>
                    <li>In-Built Functions and Validations</li>
                    <li>Simple Controller-Based Routing</li>
                    <li>Request and Session Models</li>
                    <li>Pre-Coded Controllers and Views for Welcome, Login, Signup, etc.</li>
                </ul>

                <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1 id="advanced">Advanced Features</h1>
                <h3 id="security" style="text-decoration: underline;">Security Features</h3>
                <p>Our framework includes proper session management and app folder security to prevent unauthorized access to sensitive data.</p>
                <h3 id="namespace" style="text-decoration: underline;">Namespace Usage</h3>
                <p id="accesibility">We use namespaces to organize the code efficiently and avoid naming conflicts, making the framework scalable and maintainable.</p>

                <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1>Accessibility</h1>
                <p>This framework adheres to modern accessibility standards, ensuring developers can build applications that are accessible to a wide range of users.</p>
                <p>You can <a href="<?=ROOT?>/assets/docs/PHPhrameUsageDoc.pdf" style="text-decoration: underline;" download><i class="fas fa-book"></i>&nbsp; Download Usage Documentation</a> to get a better understanding of the Framework </p>                
                <div class="divider" style="width:24%; margin:30px 0;"></div>
                <div class="doublespace"></div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
    <script>
        // Initialize Clipboard.js
        const clipboard = new ClipboardJS('.copy-btn');
    
        // Change button text on successful copy
        clipboard.on('success', function(e) {
            const button = e.trigger; // Get the button that was clicked
            button.textContent = 'Copied'; // Change the button text
            button.setAttribute('disabled', true); // Optional: disable the button to prevent repeated clicks
    
            //Change the text back to "Copy" after a delay
            setTimeout(function() {
                button.textContent = 'Copy'; // Change text back after 10 seconds
                button.removeAttribute('disabled'); // Re-enable the button
            }, 10000);
    
            e.clearSelection();
        });
    
        // Handle error (if needed)
        clipboard.on('error', function(e) {
            console.error('Error copying code!');
        });
    </script>
    
</body>
</html>
