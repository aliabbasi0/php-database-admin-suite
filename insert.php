<?php
    require_once "dbinfo.php";
    const STYLE = "styles/styles.css";
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php-project</title>
    <link rel="stylesheet" href="styles/normalize-fwd.css">
    <link rel="stylesheet" href="<?php echo STYLE ?>">
    <script src="scripts/script.js" defer></script>
</head>

<body class="dark-mode">
    <header>
        <div class="site-header">
            <a href="#" class="logo"><img src="images/klaus.ico" alt="logo"></a>
            <span class="bordered-text">secure database administration interface</span>
            <input class="switch" type="checkbox">
        </div>
    </header>
    <div id="wrapper">
        <main>
            <h2>Administering Database from a form</h2>
            <h3>Add a student..</h3>
            <?php
                session_start();
                if(isset($_SESSION['errorMessages'])){
                    echo $_SESSION['errorMessages'];
                    unset($_SESSION['errorMessages']);
                }
            ?>
            <section>
                <form method="POST" action="insertProcessor.php">
                    <label for="id">Student #:</label>
                    <input type="text" id="id" name="id">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname">
                    <input type="submit" value="Insert">
                </form>
            </section>
        </main>
    </div>
    <footer>
        <div class="site-footer">
            <ul class="social-icons">
                <li><a href="https://github.com/KlausDragon" target="_blank" rel="noopener"><i><img src="images/square-github.svg" alt="GitHub"></i></a></li>
                <li><a href="https://www.linkedin.com/in/aliiabbasii/" target="_blank" rel="noopener"><i><img src="images/linkedin.svg" alt="linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/klaus.dragon/"
				<li><a href="https://www.instagram.com/klaus.dragon/" target="_blank" rel="noopener"><i><img src="images/square-instagram.svg" alt="Instagram"></i></a></li>
			</ul>
			<p>&copy; <?php echo date("Y");?> Ali Abbasi.</p>
		</div>
	</footer>
</body>

</html>