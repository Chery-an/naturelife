<?php include 'header.php'; ?>
<link rel="stylesheet" href="assets/css/style.css">
<main>
    <h1>Contact Us</h1>
    <form action="submit_contact.php" method="post" id="contactForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Submit</button>
    </form>
</main>
<?php include 'footer.php'; ?>
