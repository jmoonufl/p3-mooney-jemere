<style type="text/css">

  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  .container {
    max-width: 800px;
    margin: 0px auto;
    text-align: center;
    padding-top: 160px;
  }

  header {
      background: #1b1b1b;
      color: #dedede;
      padding: 20px;
      position: fixed;
      width: 100%;
      top: 0px;
      z-index: 99;
  }

  header nav {
      margin-left: 15%;
      font-size: 25px;
      font-family: futura, arial;
  }

  header a {
      color: #dedede;
      text-decoration: none;
      transition: .3s;
  }

  header a:hover {
      color: #efdecd;
      transition: .3s;
      text-decoration: underline;
  }

  header li {
      display: inline-block;
      margin: 0px 75px;
  }

  footer {
      background: #1b1b1b;
      color: #dedede;
      padding: 20px;
      font-family: futura, arial;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: nowrap;
  }

  footer a {
      color: #dedede;
      text-decoration: none;
      transition: .3s;
  }

  footer a:hover {
      color: #efdecd;
      transition: .3s;
      text-decoration: underline;
  }

  footer li {
      list-style-type: none;
  }

  .footer-right {
      padding: 0px 30px;
  }

  .footer-left {
      font-size: 15px;
  }

</style>

<header>
  <img class="nsmw-image" src="images/nsmw-logo.png" alt="NSMW" width="75">
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="shop.html">Shop</a></li>
      <li><a href="training.html">Training</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
  </nav>
</header>

<div class="container">

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

</div>

<footer>
  <div class="footer-left">
    <img class="nsmw-image" src="images/nsmw-logo.png" alt="NSMW" width="75">
    <p><a href="tel:856-889-6187">856-889-6187</a></p>
    <p><a href="mailto:Bryan@nostressmidwest.com">Bryan@nostressmidwest.com</a></p>
    <p>1407 Grand Blvd, Kansas City, MO 64104</p>
  </div>

  <div class="footer-right">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li><a href="training.html">Training</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</footer>
