# AlphaStudio-LandingPage
Sample Responsive Landing Page for a web designing startup/agency built with Bootstrap-4

Firstly what is a landing page ?
In digital marketing, a landing page is a standalone web page, created specifically for a marketing or advertising campaign. It’s where a visitor “lands” after they click on a link in an email, or ads from Google, Bing, YouTube, Facebook, Instagram, Twitter, or similar places on the web
Basically displaying your and/or company info/services in short to gather clients or customers.

Before touching the code !imps:
Frontend Framework : Boostrap 4.0.0
Download from : https://v4-alpha.getbootstrap.com/
Smooth scrolling : Jquery 
Sending mail to user for their query/feedback : PHPMailer-master 
Download from: https://github.com/PHPMailer/PHPMailer
To run on localhost XAMPP server with MySQL and Apache running.
Images used are open source edited using photoshop and canva

Database Table structure:
username: TYPE TEXT
email_id: TYPE TEXT
message: TYPE TEXT
 you can specify length according to your validation needs
 
 Home.html:
 Components
 1.Navigation bar : Bootstrap class Navbar
 2.Parallax effect
 3.Scrolling effect using Jquery
 4.Our team section :  Bootstrap class Cards
 5.FadeIn and FadeOut animation using Jquery
 6.Lastly footer with social media icons from Font-awesome
 embedding link:
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 CSS:
 Fonts from Google Fonts
 
 Connection.php:
 
1. Variable storing using FILTER_INPUT 
Why FILTER_INPUT ?
PHP scripts written by large communities of coders have regular security releases because of bad or faulty input filtering. Failing to filter input can expose your server and data to attack, and many of these attacks are now automated (because using hacked web servers to send spam is an industry now).

2. Adding variables to Database

3. PHPMailer : To send responses recorded mail to the user on the site
Why PHPMailer over mail()?
PHPMailer offers many functionalities over the PHP core function mail(), including SMTP SSL encryption and authentication, HTML messages, file attachments and more. On top of that, PHPMailer is much easier to use than mail() and provides a clean, readable object-oriented syntax


That's it ! Code is kept as simple as possible to clean creating sleek page with minimum efforts

If you want to host your project follow this tutorial:
on Byethost free hosting

I disabled email service there since its not secure and safe to enter my password and credential in that case go for secure hosting or create a dummy gmail account


https://www.youtube.com/watch?v=edKaUUkLyHA




