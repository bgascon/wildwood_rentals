
# Wildwood Exploration Rentals
![Logo](https://github.com/bgascon/wildwood_rentals/blob/master/assets/images/logo.png)

A school project based upon the fictional business Wildwood Exploration Rentals

## Project Requirements and Overview

1. A design built around the fictional needs of the chosen business or topic
2. Built from scratch with `HTML` and `CSS`
3. A multi-level nav menu made purely with `CSS`
4. At least 2 elements using `Javascript` or `jQuery`
5. A working contact form with `PHP` processing

## Project Design

I approached this project with a mobile-first mindset - starting my design process with a mobile layout before moving to tablet and then desktop layouts.

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
### `PHP` Contact Form

## Project Issues

1. The main issue I have is that our nav menu was focused mostly on a desktop-view and because of that, it doesn't function properly in mobile or tablet views because it relies on a `:hover` event. I would like to add a dimension so that the menu will expand second-tier menu items with a click event as well.
