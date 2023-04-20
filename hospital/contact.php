<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	
</head>
<style>
/* Global styles */
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

body {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.5;
	color: #333;
}

header, footer {
	background-color: #333;
	color: #fff;
	padding: 10px;
	text-align: center;
}

header h1, footer p {
	margin: 0;
}

main {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 20px;
}

/* Contact form styles */
#contact-form {
	flex-basis: 60%;
	margin-bottom: 20px;
}

#contact-form h2 {
	font-size: 24px;
	margin-bottom: 10px;
}

form {
	display: flex;
	flex-direction: column;
}

label {
	margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
	padding: 10px;
	margin-bottom: 10px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
	border-color: #333;
}

button[type="submit"] {
	background-color: #333;
	color: #fff;
	border: none;
	border-radius: 5px;
	padding: 10px;
	cursor: pointer;
}

button[type="submit"]:hover {
	background-color: #555;
}

/* Contact info styles */
#contact-info {
	flex-basis: 35%;
	background-color: #eee;
	padding: 20px;
}

#contact-info h2 {
	font-size: 24px;
	margin-bottom: 10px;
}

ul {
	list-style: none;
}
/* Font Awesome icons */
ul li i {
margin-right: 10px;
color: #333;
}

/* Media queries */
@media (max-width: 768px) {
main {
flex-direction: column;
}
#contact-form {
flex-basis: 100%;
}
#contact-info {
flex-basis: 100%;
margin-top: 20px;
}
}
</style>
<body>
	<header>
		<h1>Contact Us</h1>
	</header>
	<main>
		<section id="contact-form">
			<h2>Send us a message</h2>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" placeholder="Enter your name">

				<label for="email">Email:</label>
				<input type="email" id="email" name="email" placeholder="Enter your email address">

				<label for="subject">Subject:</label>
				<input type="text" id="subject" name="subject" placeholder="Enter the subject of your message">

				<label for="message">Message:</label>
				<textarea id="message" name="message" placeholder="Enter your message"></textarea>

				<button type="submit">Send Message</button>
			</form>
		</section>
		<section id="contact-info">
			<h2>Contact Information</h2>
			<ul>
			<li><i class="fa fa-map-marker"></i> Lane 8 , Dehradun, Uttarakhand</li>
          <li><i class="fa fa-phone"></i> (+91)1234567891</li>
          <li><i class="fa fa-envelope"></i> geu.ac.in</li>
			</ul>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 Company Name. All rights reserved.</p>
	</footer>
</body>
</html>
