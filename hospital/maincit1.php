<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <style>
        /* Reset styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Global styles */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
}

a {
  color: #007bff;
  text-decoration: none;
}

ul {
  list-style: none;
}

button {
  padding: 10px 20px;
  font-size: 18px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0062cc;
}

/* Header styles */
header {
  background-color: #f8f8f8;
  padding:5px
}
        </style>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    
    <main>
      <section class="hero">
        <h1>Welcome to My Website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies nulla euismod, ullamcorper nisl vel, pulvinar est. Duis a elit id velit pretium iaculis.</p>
        <button>Learn More</button>
      </section>
      
      <section class="about-us">
        <h2>About Us</h2>
        <p>We are a company that specializes in...</p>
      </section>
      
      <section class="services">
        <h2>Our Services</h2>
        <ul>
          <li><a href="#">Service 1</a></li>
          <li><a href="#">Service 2</a></li>
          <li><a href="#">Service 3</a></li>
          <li><a href="#">Service 4</a></li>
        </ul>
      </section>
      
      <section class="contact-us">
        <h2>Contact Us</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea>
          <button type="submit">Send</button>
        </form>
      </section>
      
      <section class="follow-us">
        <h2>Follow Us</h2>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
      </section>
    </main>
    
    <footer>
      <p>&copy; 2023 My Website</p>
    </footer>
  </body>
</html>
