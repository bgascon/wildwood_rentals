
# Wildwood Exploration Rentals
![Logo](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/logo.png)

A school project based upon the fictional business Wildwood Exploration Rentals\
See live site [here](http://betsygascon.com/wildwood)\
## Project Requirements and Overview

1. A design built around the fictional needs of the chosen business or topic
2. Built from scratch with `HTML` and `CSS`
3. A multi-level nav menu made purely with `CSS`
4. At least 2 elements using `Javascript` or `jQuery`
5. A working contact form with `PHP` processing

This project is complete as required for my class, but there some missing links/pages, and some incomplete elements.

## Project Design

I approached this project with a mobile-first mindset - starting my design process with a mobile layout before moving to tablet and then desktop layouts.
\
\
Mobile View:\
![mobile-view](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/mobile.png)
\
\
Tablet View:\
![tablet-view](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/tablet.png)
\
\
Desktop View:\
![desktop-view](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/desktop.png)

## Project Elements

### PNG Logo
![Logo](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/logo.png)

This logo was created and drawn by me in Adobe Illustrator for the purposes of this website.

### `CSS` Navigation Menu

```
<nav>
	<ul>
<!-- navigation bar -->
		<li><a href="index.html">Home</a></li>
		<li><a href="rentals.html">Rentals</a>
	<!-- First tier navigation -->
			<ul>
				<li><a href="#">Climbing</a></li>
				<li><a href="#">Backpacking</a></li>
				<li><a href="#">Camping</a></li>
				<li><a href="#">Mountaineering</a></li>
			</ul>
		</li>
		<li><a href="bp101.html">Backpacking 101</a></li>
		<li><a href="contact.html">Contact Us</a></li>
		<li><a href="faq.html">FAQ</a></li>
	</ul>
</nav>
``` 
```
  nav ul ul {
    display: none;
    position: absolute;
    top: 100%;
    margin-left: -90px;
  }
  nav ul li:hover > ul {
    display: inherit;
  }
```
### `jQuery`

For the Javascript or jQuery requirement, I chose to integrate jQuery for the FAQ site to show/hide the answers associated with the questions.
\
\
![faq](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/faq.png)

### `PHP` Contact Form

![contact form](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/contact.png)
\
For this requirement, I build a straighforward html contact form and then utilized php to process the form. When you submit a form it loads a new page that is either a 'success' or 'fail' - depending on whether or not the form responses were able to be processed.

```
<?php

$EmailFrom = Trim(stripslashes($_POST['email'])); 
$EmailTo = "formcatcher@gmail.com";
$Subject = "Wildwood Exploration Rentals";
$Name = Trim(stripslashes($_POST['name'])); 
$Comments = Trim(stripslashes($_POST['comments'])); 
$current_date = date("Y-m-d"); // This date is created when the form is submitted.


$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (Trim($Name)=="") $validationOK=false;
if (!$validationOK) {
print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
exit;
}

$myFilePath = "contacts/";
$myFileName = "form-data.csv";
$myPointer = fopen ($myFilePath.$myFileName, "a+");
$form_data = $current_date . "," . $EmailFrom . "," . $Name . "," . $Comments . "\n";
fputs ($myPointer, $form_data);
fclose ($myPointer);


$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= $Comments;
$Body .= "\n";


$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");


if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>
```

## Project Issues

1. The main issue I have is that our nav menu was focused mostly on a desktop-view and because of that, it doesn't function properly in mobile or tablet views because it relies on a `:hover` event. I would like to add a dimension so that the menu will expand second-tier menu items with a click event as well.
