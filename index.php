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
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            background-color: #f5f5f5;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            border-bottom: 5px solid #00bfae;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 2.8em;
            text-align: center;
            font-weight: bold;
        }

        nav {
            margin-top: 15px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #00bfae;
        }

        /* Hero Section */
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            position: relative;
            overflow: hidden;
            border-bottom: 5px solid #00bfae;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero h2 {
            margin: 0;
            font-size: 3.5em;
            font-weight: 700;
            z-index: 2;
            position: relative;
        }

        .hero p {
            font-size: 1.3em;
            margin: 10px 0 0;
            z-index: 2;
            position: relative;
        }

        /* Services Section */
        .services {
            background-color: #ffffff;
            padding: 80px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px 0;
        }

        .services h2 {
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 40px;
            color: #333;
        }

        .service-item {
            margin-bottom: 40px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .service-item h3 {
            font-size: 2em;
            color: #00bfae;
        }

        .service-item p {
            font-size: 1.2em;
            color: #666;
        }

        /* About Section */
        .about {
            padding: 80px 20px;
        }

        .about h2 {
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 20px;
            color: #333;
        }

        .about p {
            font-size: 1.2em;
            text-align: center;
            color: #666;
        }

        /* Contact Section */
        .contact {
            background-color: #ffffff;
            padding: 80px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 30px 0;
        }

        .contact h2 {
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 30px;
            color: #333;
        }

        .contact form {
            max-width: 700px;
            margin: 0 auto;
        }

        .contact label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1.1em;
            transition: border-color 0.3s ease;
        }

        .contact input:focus,
        .contact textarea:focus {
            border-color: #00bfae;
            outline: none;
        }

        .contact button {
            background-color: #00bfae;
            color: #fff;
            border: none;
            padding: 15px 25px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
        }

        .contact button:hover {
            background-color: #009b87;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-top: 5px solid #00bfae;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2.5em;
            }

            .hero p {
                font-size: 1em;
            }

            .services h2,
            .about h2,
            .contact h2 {
                font-size: 2.2em;
            }

            .service-item {
                margin-bottom: 30px;
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
