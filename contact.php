<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - BK Real Estate</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body, h1, h2, p, label, input, select, button, textarea, ul, li {
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1em 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo a {
            color: #ecf0f1;
            font-size: 1.5em;
            text-decoration: none;
            font-weight: bold;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 1em;
        }

        header nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 0.5em 1em;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        header nav ul li a:hover {
            background-color: #34495e;
        }

        main {
            flex: 1;
            padding: 2em 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Contact Form Styles */
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .message-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
            display: block;
            margin: 0 auto;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 1em 0;
        }

        a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #2980b9;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="./home.php">BK Real Estate</a>
            </div>
            <nav>
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./buy.html">Buy</a></li>
                    <li><a href="./sell.html">Sell</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./index.php" class="navbar-link styled-link" data-nav-link><strong>Logout</strong></a></li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <h1>Contact Us</h1>
            <div class="contact-container">
                <div class="contact-info">
                    <p>Website Name: BK Real Estate</p>
                    <p>Email: contact@bkrealestate.com</p>
                    <p>Phone: Founder: 6383029537 CO-FOUNDER: 9150184896</p>
                    <p>Address: 653, Murgan Street, Ayanavaram, Chennai, Tamil Nadu</p>
                    <p>Our Names: Basil & Krishna</p>
                </div>
                <form id="contact-form" action="registercontact.php" method="POST">
                    <textarea class="message-input" id="message" name="message" placeholder="Write your message..." required></textarea>
                    <input type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 BK Real Estate. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Message Sent");
            // You can add additional code here to send the message through AJAX or any other method.
        });
    </script>
</body>
</html>
