<?php
// Handle form submission
$feedback = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Example feedback message
    $feedback = "Thank you, $name. We have received your message and will get back to you at $email.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SolidCircuits provides expert PCB and SMPS hardware design services in Bangladesh, offering precision and reliability for all your electronics needs.">
    <meta name="keywords" content="PCB Design, SMPS Design, Prototyping, Hardware Design, Electronics, Bangladesh">
    <meta property="og:title" content="SolidCircuits - PCB & Hardware Design Services">
    <meta property="og:description" content="Your reliable partner for high-quality electronics design in Bangladesh.">
    <meta property="og:image" content="URL_TO_IMAGE">
    <meta property="og:url" content="URL_TO_YOUR_WEBSITE">
    <title>SolidCircuits - PCB & Hardware Design Services</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: #222;
            color: #eee;
            padding: 20px 0;
            border-bottom: 4px solid #007BFF;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
        }

        nav {
            margin-top: 10px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #eee;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1em;
        }

        nav ul li a:hover {
            color: #007BFF;
        }

        /* Hero Section */
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 80px 20px;
        }

        .hero h2 {
            margin: 0;
            font-size: 3em;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.2em;
            margin: 10px 0 0;
        }

        /* Services Section */
        .services {
            background-color: #f4f4f4;
            padding: 60px 20px;
        }

        .services h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            color: #333;
        }

        .service-item {
            margin-bottom: 30px;
            text-align: center;
        }

        .service-item h3 {
            font-size: 1.8em;
            color: #007BFF;
        }

        .service-item p {
            font-size: 1.1em;
        }

        /* About Section */
        .about {
            padding: 60px 20px;
        }

        .about h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.2em;
            text-align: center;
            color: #666;
        }

        /* Contact Section */
        .contact {
            background-color: #f4f4f4;
            padding: 60px 20px;
        }

        .contact h2 {
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .contact input:focus,
        .contact textarea:focus {
            border-color: #007BFF;
            outline: none;
        }

        .contact button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 15px 25px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.1em;
        }

        .contact button:hover {
            background-color: #0056b3;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #eee;
            text-align: center;
            padding: 20px;
            border-top: 4px solid #007BFF;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.2em;
            }

            .hero p {
                font-size: 1em;
            }

            .services h2,
            .about h2,
            .contact h2 {
                font-size: 2em;
            }
            
            .service-item {
                margin-bottom: 20px;
            }
            
            .contact button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header role="banner">
        <div class="container">
            <h1>SolidCircuits</h1>
            <nav role="navigation">
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Precision PCB & SMPS Hardware Design</h2>
            <p>Your reliable partner for high-quality electronics design in Bangladesh.</p>
        </div>
    </section>

    <section id="services" class="services" role="region" aria-labelledby="services-heading">
        <div class="container">
            <h2 id="services-heading">Our Services</h2>
            <div class="service-item">
                <h3>PCB Design</h3>
                <p>We offer custom PCB design services for various applications, ensuring high performance and reliability.</p>
            </div>
            <div class="service-item">
                <h3>SMPS Design</h3>
                <p>Expert SMPS hardware design for efficient and stable power supply solutions.</p>
            </div>
            <div class="service-item">
                <h3>Prototyping & Testing</h3>
                <p>Prototyping and rigorous testing to validate designs before mass production.</p>
            </div>
        </div>
    </section>

    <section id="about" class="about" role="region" aria-labelledby="about-heading">
        <div class="container">
            <h2 id="about-heading">About Us</h2>
            <p>SolidCircuits is a Bangladesh-based company specializing in PCB and SMPS hardware design. With a team of experienced engineers, we are committed to delivering top-notch solutions that meet your technical requirements and deadlines.</p>
        </div>
    </section>

    <section id="contact" class="contact" role="region" aria-labelledby="contact-heading">
        <div class="container">
            <h2 id="contact-heading">Contact Us</h2>
            <form action="index.php" method="post" role="form">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required aria-required="true">

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required aria-required="true">

                <label for="message">Message</label>
                <textarea id="message" name="message" required aria-required="true"></textarea>

                <button type="submit">Send Message</button>
            </form>

            <?php if ($feedback): ?>
                <p><?php echo $feedback; ?></p>
            <?php endif; ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 SolidCircuits. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
