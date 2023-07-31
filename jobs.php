<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title></title>
  <meta name="title" content="">
  <meta name="description"
    content="A Spot for Retirees to Get a Job">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="C:\xampp\htdocs\bookish-master\jobs.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">

  <!-- 
    - preload image
  -->
  <link rel="preload" as="image" href="C:\xampp\htdocs\bookish-master\hero.jpg">

</head>

<body>
  
  <style>
     /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

/**
 * copyright 2022 codewithsadee
 */





/*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

:root {

  /**
   * colors
   */
  --light-green: #14F2E0;
  --blue-green: #41C8E5;
  --darker-blue: #6e9eeb;
  --violet: #9a75f0;
  --purple: #c74bf6;
  --background: #222222;
  --chinese-violet_30: hsla(304, 14%, 46%, 0.3);
  --chinese-violet: hsl(304, 14%, 46%);
  --sonic-silver: hsl(208, 7%, 46%);
  --old-rose_30: hsla(357, 37%, 62%, 0.3);
  --ghost-white: hsl(233, 33%, 95%);
  --light-pink: hsl(357, 93%, 84%);
  --light-gray: hsl(0, 0%, 80%);
  --old-rose: hsl(357, 37%, 62%);
  --seashell: hsl(20, 43%, 93%);
  --charcoal: hsl(203, 30%, 26%);
  --white: hsl(0, 0%, 100%);
  --transparent: hsla(0, 0%, 80%, 0.543);
  

  /**
   * typography
   */

  --ff-philosopher: 'Philosopher', sans-serif;
  --ff-poppins: 'Poppins', sans-serif;

  --fs-1: 4rem;
  --fs-2: 3.2rem;
  --fs-3: 2.7rem;
  --fs-4: 2.4rem;
  --fs-5: 2.2rem;
  --fs-6: 2rem;
  --fs-7: 1.8rem;

  --fw-500: 500;
  --fw-700: 700;

  /**
   * spacing
   */

  --section-padding: 80px;

  /**
   * shadow
   */

  --shadow-1: 4px 6px 10px hsla(231, 94%, 7%, 0.06);
  --shadow-2: 2px 0 15px 5px hsla(231, 94%, 7%, 0.06);
  --shadow-3: 3px 3px var(--chinese-violet);
  --shadow-4: 5px 5px var(--chinese-violet);

  /**
   * radius
   */

  --radius-5: 5px;
  --radius-10: 10px;

  /**
   * clip path
   */

  --polygon: polygon(100% 29%,100% 100%,19% 99%,0 56%);

  /**
   * transition
   */

  --transition-1: 0.25s ease;
  --transition-2: 0.5s ease;
  --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);

}





/*-----------------------------------*\
  #RESET
\*-----------------------------------*/

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

li { list-style: none; }

a,
img,
span,
data,
input,
button,
textarea,
ion-icon { display: block; }

a {
  color: inherit;
  text-decoration: none;
}

img { height: auto; }

input,
button,
textarea {
  background: none;
  border: none;
  font: inherit;
}

input,
textarea { width: 100%; }

button { cursor: pointer; }

address { font-style: normal; }

ion-icon { pointer-events: none; }

html {
  font-family: var(--ff-poppins);
  font-size: 10px;
  scroll-behavior: smooth;
}

body {
  background-color: var(--white);
  color: var(--sonic-silver);
  font-size: 1.6rem;
  line-height: 1.8;
}

:focus-visible { outline-offset: 4px; }

::selection {
  background-color: var(--old-rose);
  color: var(--white);
}

::-webkit-scrollbar { width: 10px; }

::-webkit-scrollbar-track { background-color: hsl(0, 0%, 98%); }

::-webkit-scrollbar-thumb { background-color: hsl(0, 0%, 80%); }

::-webkit-scrollbar-thumb:hover { background-color: hsl(0, 0%, 70%); }





/*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/

.container { padding-inline: 15px; }

.section { padding-block: var(--section-padding); }

.section:nth-child(odd) { background-color: var(--seashell); }

.section-subtitle {
  color: var(--old-rose);
  text-transform: uppercase;
  font-weight: var(--fw-700);
  letter-spacing: 4px;
  text-align: center;
}

.h1,
.h2,
.h3,
.tab-text {
  color: var(--charcoal);
  font-family: var(--ff-philosopher);
  line-height: 1.2;
}

.h1 { font-size: var(--fs-2); }

.h2 { font-size: var(--fs-3); }

.h3 { font-size: var(--fs-5); }

.section-text { font-size: var(--fs-7); }

.w-100 { width: 100%; }

.has-before,
.has-after {
  position: relative;
  z-index: 1;
}

.has-before::before,
.has-after::after {
  content: "";
  position: absolute;
}

.section-title { text-align: center; }

.grid-list {
  display: grid;
  gap: 25px;
}

.btn-link {
  color: var(--old-rose);
  font-weight: var(--fw-500);
  display: flex;
  align-items: center;
  gap: 5px;
  transition: var(--transition-1);
}

.btn-link:is(:hover, :focus) { color: var(--chinese-violet); }

.has-underline {
  position: relative;
  margin-block-end: 60px;
}

.has-underline .span {
  height: 2px;
  background-color: var(--old-rose_30);
  width: 200px;
  margin-inline: auto;
  margin-block-start: 30px;
}

.has-underline .has-before::before {
  width: 18px;
  height: 18px;
  top: 2px;
  left: 45%;
  transform: translateY(-50%) rotate(45deg);
  background-color: var(--old-rose_30);
  box-shadow: 7px -7px var(--old-rose_30);
}

.btn {
  padding: 12px 30px;
  transition: var(--transition-1);
}

.btn-primary {
  background-color: var(--old-rose);
  color: var(--white);
}

.btn-primary:is(:hover, :focus) { background-color: var(--chinese-violet); }

.btn-secondary {
  border: 1px solid var(--old-rose);
  color: var(--old-rose);
}

.btn-secondary:is(:hover, :focus) {
  background-color: var(--old-rose);
  color: var(--white);
}

.img-holder {
  aspect-ratio: var(--width) / var(--height);
  background-color: var(--light-gray);
}

.img-cover {
  width: 100%;
  height: 100%;
  object-fit: cover;
}





/*-----------------------------------*\
  #HEADER
\*-----------------------------------*/

.header {
  background-color: var(--transparent);
  position: absolute;
  top: 10px;
  right: 10px;
  left: 10px;
  padding-block: 12px;
  z-index: 4;
  transition: var(--transition-2);
}

.header.active {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  filter: drop-shadow(var(--shadow-1));
  transform: translateY(-100%);
  transition: none;
  animation: slideIn 0.5s ease forwards;
}

@keyframes slideIn {
  0% { transform: translateY(-100%); }
  100% { transform: translateY(0); }
}

.header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  font-family: var(--ff-philosopher);
  font-size: 4rem;
  color: var(--charcoal);
  line-height: 1;
}

.nav-toggle-btn {
  font-size: 40px;
  color: var(--charcoal);
}

.nav-toggle-btn ion-icon { --ionicon-stroke-width: 20px; }

.nav-toggle-btn.active .open,
.nav-toggle-btn .close { display: none; }

.nav-toggle-btn .open,
.nav-toggle-btn.active .close { display: block; }

.navbar {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  background-color: var(--ghost-white);
  padding-inline: 15px;
  max-height: 0;
  overflow: hidden;
  visibility: hidden;
  transition: 0.25s var(--cubic-out);
}

.navbar.active {
  max-height: 300px;
  visibility: visible;
  transition-duration: 0.5s;
}

.navbar-list { margin-block-end: 10px; }

.navbar-link {
  color: var(--charcoal);
  padding-block: 8px;
  line-height: 1.5;
  transition: var(--transition-1);
}

.navbar-link:is(:hover, :focus) { color: var(--old-rose); }





/*-----------------------------------*\
  #HERO
\*-----------------------------------*/

.hero {
  padding-block-start: calc(var(--section-padding) + 60px);
  text-align: center;
}

.hero .container {
  display: grid;
  gap: 60px;
}

.hero .hero-title { margin-block: 10px 25px;
 }

.hero-banner {
  padding-inline-start: 30px;
  padding-block-end: 30px;
  max-width: 420px;
  margin-inline: auto;
}

.hero-banner .w-100 { border-radius: 10px 30px; }

.hero-banner::before {
  top: 30px;
  right: 30px;
  bottom: 0;
  left: 0;
  background-color: var(--chinese-violet_30);
  border-radius: var(--radius-10);
  z-index: -1;
}

.play-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: var(--black);
  color: var(--black);
  font-size: 22px;
  padding: 24px;
  border-radius: 50%;
  transition: var(--transition-1);
  animation: pulse 3s ease infinite;
}

.play-btn:is(:hover, :focus) { color: var(--black); }

@keyframes pulse {
  0%,
  50% { box-shadow: 0 0 0 0 hsla(0, 0%, 4%, 0.5); }

  100% { box-shadow: 0 0 0 10px transparent; }
}





/*-----------------------------------*\
  #BENEFITS
\*-----------------------------------*/

.benefits .section-text {
  text-align: center;
  margin-block: 8px 25px;
}

.benefits-card {
  padding: 25px;
  box-shadow: var(--shadow-2);
  border-radius: var(--radius-5);
  overflow: hidden;
  transition: var(--transition-2);
}

.benefits-card::before,
.benefits-card::after {
  bottom: 0;
  right: 0;
  clip-path: var(--polygon);
  transition: var(--transition-2);
}

.benefits-card::before {
  width: 80px;
  height: 80px;
  background-color: var(--old-rose_30);
  transform: translateY(60px);
}

.benefits-card::after {
  width: 70px;
  height: 70px;
  background-color: var(--chinese-violet_30);
  transform: translateY(65px);
}

.benefits-card:is(:hover, :focus-within) { transform: translateY(-10px); }

.benefits-card:is(:hover, :focus-within)::before,
.benefits-card:is(:hover, :focus-within)::after { transform: translateY(0); }

.benefits-card:is(:hover, :focus-within)::after { transition-delay: 0.1s; }

.benefits-card .card-icon {
  background-color: var(--old-rose);
  max-width: max-content;
  padding: 10px;
  box-shadow: var(--shadow-3);
  transition: var(--transition-1);
}

.benefits-card:is(:hover, :focus) .card-icon { box-shadow: none; }

.benefits-card .card-title { margin-block: 20px 15px; }

.benefits-card .btn-link { margin-block-start: 15px; }





/*-----------------------------------*\
  #CHAPTERS
\*-----------------------------------*/

.chapter-card {
  height: 100%;
  background-color: var(--white);
  padding: 25px;
  border-radius: var(--radius-5);
  box-shadow: var(--shadow-2);
  transition: var(--transition-2);
}

.chapter-card:is(:hover, :focus-within) { transform: translateY(-10px); }

.chapter-card .card-title { margin-block-end: 15px; }





/*-----------------------------------*\
  #PREVIEW
\*-----------------------------------*/

.tab-list {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.tab-card {
  position: relative;
  height: 60px;
  background-color: var(--seashell);
  border-radius: var(--radius-10);
  box-shadow: var(--shadow-3);
  display: grid;
  place-content: center;
  overflow: hidden;
  cursor: pointer;
  transition: var(--transition-1);
}

.tab-card .w-100 {
  pointer-events: none;
  opacity: 0;
  transition: var(--transition-2);
}

.tab-card.active .w-100 { opacity: 1; }

.tab-card.active {
  height: 40vh;
  box-shadow: none;
}

.tab-text {
  font-size: var(--fs-4);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.tab-card.active .tab-text { display: none; }





/*-----------------------------------*\
  #PRICING
\*-----------------------------------*/

.pricing-card {
  padding: 40px 50px;
  background-color: var(--white);
  text-align: center;
  transition: var(--transition-2);
}

.pricing-card:is(:hover, :focus-within),
.pricing-card.bundle { box-shadow: var(--shadow-4); }

.pricing-card:is(:hover, :focus-within) { transform: translateY(-10px); }

.pricing-card .price {
  font-family: var(--ff-philosopher);
  font-size: var(--fs-1);
  color: var(--charcoal);
  font-weight: var(--fw-700);
  margin-block-start: 10px;
}

.pricing-card-list { margin-block: 20px 40px; }

.pricing-card-list .card-item:not(:last-child) { border-block-end: 1px solid var(--ghost-white); }

.pricing-card .card-text { padding-block: 10px; }

.pricing-card .btn { margin-inline: auto; }





/*-----------------------------------*\
  #AUTHOR
\*-----------------------------------*/

.author { background-color: var(--seashell); }

.author .container {
  display: grid;
  gap: 40px;
}

.author :is(.section-subtitle, .section-title) { text-align: left; }

.author-content {
  background-color: var(--white);
  padding: 30px;
}

.author-name {
  font-size: var(--fs-6);
  margin-block-end: 30px;
}

.author .section-text { font-size: unset; }





/*-----------------------------------*\
  #ACHIEVEMENT
\*-----------------------------------*/

.section.achievement { background-color: var(--white); }

.achievement-card {
  background-color: var(--seashell);
  box-shadow: var(--shadow-4);
  overflow: hidden;
  transition: var(--transition-2);
}

.achievement-card:is(:hover, :focus-within) { transform: translateY(-10px); }

.achievement-card .card-content {
  position: relative;
  padding: 15px;
}

.achievement-card .abs-img {
  position: absolute;
  top: 0;
  right: -5px;
  opacity: 0.3;
}





/*-----------------------------------*\
  #CONTACT
\*-----------------------------------*/

.contact .wrapper {
  display: grid;
  gap: 25px;
}

.contact-form {
  background-color: var(--seashell);
  padding: 20px;
}

.input-field {
  background-color: var(--white);
  padding: 10px;
  margin-block-end: 15px;
  outline: none;
  border-block-end: 2px solid transparent;
}

.input-field:focus { border-color: var(--old-rose); }

textarea.input-field {
  resize: vertical;
  min-height: 120px;
  height: 120px;
  max-height: 200px;
}

.contact-form .btn { margin-inline: auto; }

.contact-card {
  background-color: var(--seashell);
  padding: 30px;
}

.contact-card .card-title {
  font-family: var(--ff-philosopher);
  text-transform: uppercase;
  font-weight: var(--fw-700);
}

.contact-card > li:not(:last-child) { margin-block-end: 30px; }

.contact-card .card-link {
  color: var(--chinese-violet);
  transition: var(--transition-1);
}

.contact-card .card-link:is(:hover, :focus) { color: var(--old-rose); }

.social-list-title {
  font-size: var(--fs-6);
  font-weight: var(--fw-700);
  margin-block-end: 15px;
}

.social-list {
  display: flex;
  gap: 10px;
}

.social-link {
  background-color: var(--old-rose);
  color: var(--white);
  font-size: 20px;
  padding: 5px;
  box-shadow: var(--shadow-3);
  transition: var(--transition-1);
}

.social-link:is(:hover, :focus) {
  background-color: var(--chinese-violet);
  box-shadow: none;
}





/*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

.footer {
  background-color: var(--seashell);
  text-align: center;
}

.footer-top {
  padding-block: 50px;
  border-block-end: 1px solid var(--chinese-violet_30);
}

.footer .logo { margin-block-end: 15px; }

.footer-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  column-gap: 20px;
}

.footer-link {
  color: var(--charcoal);
  transition: var(--transition-1);
}

.footer-link:is(:hover, :focus) { color: var(--old-rose); }

.footer-bottom { padding-block: 20px; }





/*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

/**
 * responsive for large than 575px screen
 */

@media (min-width: 575px) {

  /**
   * CUSTOM PROPERTY
   */

  :root {

    /**
     * typography
     */

    --fs-2: 4.5rem;
    --fs-3: 3.5rem;
    --fs-5: 2.5rem;

  }



  /**
   * REUSED STYLE
   */

  .container,
  .header,
  .navbar {
    max-width: 540px;
    width: 100%;
    margin-inline: auto;
  }

  .section-text { --fs-7: 2rem; }



  /**
   * HEADER
   */

  .header { top: 30px; }

  .header.active { max-width: unset; }

  .navbar {
    left: 50%;
    transform: translateX(-50%);
  }



  /**
   * PREVIEW
   */

  .tab-card.active { height: 50vh; }



  /**
   * ACHIEVEMENT
   */

  .achievement-card { display: flex; }

  .achievement-card > * { width: 50%; }

  .achievement-card .card-content { padding-block: 30px; }

  .achievement-card .card-title { margin-block-end: 20px; }



  /**
   * CONTACT
   */

  .social-list-title { --fs-6: 2.2rem; }

  .social-link {
    font-size: 25px;
    padding: 8px;
  }

}





/**
 * responsive for large than 768px screen
 */

@media (min-width: 768px) {

  /**
   * CUSTOM PROPERTY
   */

  :root {

    /**
     * typography
     */

    --fs-2: 4.8rem;

  }



  /**
   * REUSED STYLE
   */

  .container,
  .header,
  .navbar { max-width: 720px; }

  .grid-list { grid-template-columns: 1fr 1fr; }



  /**
   * HERO
   */

  .hero {
    padding-block-start: calc(var(--section-padding) + 100px);
    text-align: left;
  }

  .hero .container {
    grid-template-columns: 1fr 0.8fr;
    align-items: center;
  }

  .hero .section-subtitle { text-align: left; }



  /**
   * BENEFITS
   */

  .benefits :is(.section-title, .section-text) { text-align: left; }

  .benefits-content { grid-column: 1 / 3; }



  /**
   * CHAPTERS, PRICING
   */

  :is(.chapters, .pricing) .grid-list li:last-child {
    grid-column: 1 / 3;
    max-width: calc(50% - 12.5px);
    width: 100%;
    margin-inline: auto;
  }



  /**
   * PREVIEW
   */

  .tab-card.active { height: 70vh; }



  /**
   * AUTHOR
   */

  .author .h2 { --fs-3: 4.2rem; }



  /**
   * ACHIEVEMENT
   */

  .achievement-card { flex-direction: column; }

  .achievement-card > * { width: 100%; }



  /**
   * CONTACT
   */

  .contact .wrapper { grid-template-columns: 1fr 1fr; }

}





/**
 * responsive for large than 992px screen
 */

@media (min-width: 992px) {

  /**
   * CUSTOM PROPERTY
   */

  :root {

    /**
     * typography
     */

    --fs-2: 5.4rem;
    --fs-3: 4rem;

  }



  /**
   * REUSED STYLE
   */

  .container,
  .header,
  .navbar { max-width: 960px; }

  .grid-list { grid-template-columns: repeat(3, 1fr); }



  /**
   * HEADER
   */

  .header .container { padding-inline: 20px 30px; }

  .nav-toggle-btn { display: none; }

  .navbar,
  .navbar.active { all: unset; }

  .navbar-list {
    margin-block-end: 0;
    display: flex;
    gap: 30px;
  }



  /**
   * BENEFITS
   */

  .benefits .grid-list {
    grid-template-columns: repeat(4, 1fr);
    align-items: center;
  }

  .benefits-content { max-width: 80%; }



  /**
   * CHAPTER, PRICING
   */

  :is(.chapters, .pricing) .grid-list li:last-child { all: unset; }



  /**
   * PREVIEW
   */

  .tab-list {
    flex-direction: row;
    gap: 20px;
  }

  .tab-text {
    text-orientation: upright;
    white-space: nowrap;
    writing-mode: vertical-lr;
  }

  .tab-card {
    height: 70vh;
    max-width: 60px;
  }

  .tab-card.active { max-width: 650px; }



  /**
   * AUTHOR
   */

  .author .container {
    grid-template-columns: 0.6fr 1fr;
    gap: 0;
  }

  .author-content {
    margin-block-start: 40px;
    margin-inline-start: -30px;
    padding-block-end: 70px;
  }



  /**
   * ACHIEVEMENT
   */

  .achievement .grid-list { grid-template-columns: 1fr 1fr; }

  .achievement-card { flex-direction: row; }

  .achievement-card > * { width: 50%; }



  /**
   * CONTACT
   */

  .contact .wrapper { grid-template-columns: 1fr 0.5fr; }

  .contact-form { padding: 40px; }

}





/**
 * responsive for large than 1200px screen
 */

@media (min-width: 1200px) {

  /**
   * CUSTOM PROPERTY
   */

  :root {

    /**
     * typography
     */

    --fs-2: 6rem;
    --fs-3: 4.5rem;
    --fs-4: 3rem;
    --fs-5: 3rem;

  }



  /**
   * REUSED STYLE
   */

  .container,
  .header,
  .navbar { max-width: 1140px; }



  /**
   * PREVIEW
   */

  .tab-card { max-width: 75px; }

  .tab-card.active { max-width: 750px; }



  /**
   * AUTHOR
   */

  .author-content { padding: 85px 60px 115px; }



  /**
   * FOOTER
   */

  .footer-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .footer .logo { margin-block-end: 0; }

}
</style> 

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">Backwood</a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#benefits" class="navbar-link" data-nav-link>Service</a>
          </li>

          <li class="navbar-item">
            <a href="#chapters" class="navbar-link" data-nav-link>Find a Job</a>
          </li>

          <li class="navbar-item">
            <a href="#pricing" class="navbar-link" data-nav-link>Contribute</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>

    </div>
  </header>
  <main>
    <article>
 
    <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle">Let's make the second act unleashed</p>

            <h1 class="h1 hero-title">A Spot for Retirees to get a Job</h1>

            <p class="section-text">
              Get your calling, with offers from different sectors and Roles. 
              Apply today to get work-from-home.
            </p>

          </div>

          <div class="hero-banner has-before">
            <img src="C:\xampp\htdocs\bookish-master\hero.jpg" width="431" height="596"
              alt="things i never said, a novel by claudia wilson" class="w-100">

            <button class="play-btn" aria-label="play video">
              <ion-icon name="play-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

        </div>
      </section>





      <!-- 
        - #BENEFITS
      -->

      <section class="section benefits" id="benefits" aria-label="benefits">
        <div class="container">

          <div class="grid-list">

            <li class="benefits-content">
              <h2 class="h2 section-title">Why choose us</h2>

              <p class="section-text">Explore the benefits to enhance your retirement journey</p>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-1.svg" width="40" height="40" loading="lazy" alt="Experience">
                </div>

                <h3 class="h3 card-title">Diverse Job Opportunities</h3>

                <p class="card-text">
                   Vocations from various industries and find the perfect role that suits your skills and interests
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-2.svg" width="40" height="40" loading="lazy" alt="Motivation">
                </div>

                <h3 class="h3 card-title">Motivation</h3>

                <p class="card-text">
                  Find motivation and inspiration as you explore
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-3.svg" width="40" height="40" loading="lazy" alt="Goals">
                </div>

                <h3 class="h3 card-title">Goals</h3>

                <p class="card-text">
                  Set specific goals and keep track of your progress throughout the hunting journey
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-4.svg" width="40" height="40" loading="lazy" alt="Vision">
                </div>

                <h3 class="h3 card-title">Networking</h3>

                <p class="card-text">
                  Build valuable connections and networks to expand your communities
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-5.svg" width="40" height="40" loading="lazy" alt="Mission">
                </div>

                <h3 class="h3 card-title">Community Support</h3>

                <p class="card-text">
                  Connect with a supportive community to share experiences and insights
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

            <li>
              <div class="benefits-card has-before has-after">

                <div class="card-icon">
                  <img src="./assets/images/benefits-6.svg" width="40" height="40" loading="lazy" alt="Strategy">
                </div>

                <h3 class="h3 card-title">Simple Application Process</h3>

                <p class="card-text">
                  Streamlined and straightforward application process to save time and effort 
                </p>

                <a href="#" class="btn-link">
                  <span class="span">Read more</span>

                  <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
                </a>

              </div>
            </li>

          </div>

        </div>
      </section>

      <!-- 
        - #CHAPTERS
      -->

      <section class="section chapters" id="chapters">
        <div class="container">
        <h2 class="h2 section-title has-underline">
            Domains we've covered
            <span class="span has-before"></span>
          </h2>

          <ul class="grid-list">

            <li>
              <div class="chapter-card">

                <h3 class="h3 card-title">Consulting and Advisory Roles</h3>
                <p class="card-text">
                  Leverage your expertise and experience by providing consulting or advisory services in your field of knowledge
                </p>

              </div>
            </li>

            <li>
              <div class="chapter-card">

                <h3 class="h3 card-title">Mentoring and Coaching</h3>
                <p class="card-text">
                  Share your knowledge and mentor the next generation by taking up mentoring or coaching roles in various fields
                </p>

              </div>
            </li>

            <li>
              <div class="chapter-card">
                <h3 class="h3 card-title">Volunteering and Social Work</h3>
                <p class="card-text">
                  Engage in fulfilling volunteer opportunities and contribute to social causes close to your heart
                </p>

              </div>
            </li>

            <li>
              <div class="chapter-card">

                <h3 class="h3 card-title">Event and Hospitality Roles</h3>
                <p class="card-text">
                  Explore event or hospitality-related jobs, such as event coordination and tourism
                </p>

              </div>
            </li>

            <li>
              <div class="chapter-card">
                <h3 class="h3 card-title">Caretaking and Pet Sitting</h3>
                <p class="card-text">
                  Consider caretaking or pet sitting opportunities to care for others' homes or pets while they are away
                </p>

              </div>
            </li>

            <li>
              <div class="chapter-card">

                <h3 class="h3 card-title">Arts, Crafts, and Hobbies</h3>
                <p class="card-text">
                  Pursue your passion for arts, crafts, or hobbies by exploring opportunities in related fields
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #PREVIEW
      -->

      <section class="section preview" aria-label="preview">
        <div class="container">

          <h2 class="h2 section-title has-underline">
            Posted By Recruiters
            <span class="span has-before"></span>
          </h2>

          <ul class="tab-list">

            <li>
              <div class="tab-card active" data-tab-card>
                <h3 class="h3 tab-text">Category 1</h3>

                <img src="C:\xampp\htdocs\bookish-master\v3.jpg" width="820" height="630" loading="lazy" alt="Chapter 1"
                  class="w-100">
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Category 2</h3>

                <img src="C:\xampp\htdocs\bookish-master\v1.jpg" width="820" height="630" loading="lazy" alt="Chapter 2"
                  class="w-100">
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Category 3</h3>

                <img src="C:\xampp\htdocs\bookish-master\v4.jpg" width="820" height="630" loading="lazy" alt="Chapter 3"
                  class="w-100">
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Category 4</h3>

                <img src="C:\xampp\htdocs\bookish-master\v2.jpg" width="820" height="630" loading="lazy" alt="Chapter 4"
                  class="w-100">
              </div>
            </li>

            <li>
              <div class="tab-card" data-tab-card>
                <h3 class="h3 tab-text">Category 5</h3>

                <img src="C:\xampp\htdocs\bookish-master\v5.jpg" width="820" height="630" loading="lazy" alt="Chapter 5"
                  class="w-100">
              </div>
            </li>

          </ul>

        </div>
      </section>

      <!--
        - #PRICING
      -->

      <section class="section pricing" id="pricing" aria-label="pricing">
        <div class="container">
          <h2 class="h2 section-title has-underline">
            Empower Change, Give Backwood
            <span class="span has-before"></span>
          </h2>

          <ul class="grid-list">

            <li>
              <div class="pricing-card">

                <h3 class="h3 card-title">Donate</h3>

                <label for="donateAmount">Amount (in INR)</label>
                <input type="number" id="donateAmount" name="donateAmount" min="1" step="0.01" required>

                <ul class="pricing-card-list">

                  <li class="card-item">
                    <p class="card-text">APD</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">CAF</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">CRY</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">WWF</p>
                  </li>

                </ul>

                <button class="btn btn-secondary">Forward</button>

              </div>
            </li>

            <li>
              <div class="pricing-card bundle">

                <h3 class="h3 card-title">Reposit</h3>
                <label for="donateAmount">Amount (in INR)</label>
                <input type="number" id="donateAmount" name="donateAmount" min="1" step="0.01" required>

                <ul class="pricing-card-list">

                  <li class="card-item">
                    <p class="card-text">Savings</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Expenses</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Social Security</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Bills</p>
                  </li>

                </ul>

                <button class="btn btn-primary">Save</button>

              </div>
            </li>

            <li>
              <div class="pricing-card">

                <h3 class="h3 card-title">Fund</h3>

                <label for="donateAmount">Amount (in INR)</label>
                <input type="number" id="donateAmount" name="donateAmount" min="1" step="0.01" required>

                <ul class="pricing-card-list">

                  <li class="card-item">
                    <p class="card-text">Age Well</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Help Age</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Healthy Aging</p>
                  </li>

                  <li class="card-item">
                    <p class="card-text">Manavlok</p>
                  </li>

                </ul>

                <button class="btn btn-secondary">Give</button>

              </div>
            </li>

          </ul>

        </div>
      </section>
      
      <!-- 
        - #AUTHOR
      -->

      <section class="section author" id="author">
        <div class="container">

          <figure class="author-banner img-holder" style="--width: 700; --height: 720;">
            <img src="C:\xampp\htdocs\bookish-master\ab.jpg" width="700" height="720" loading="lazy" alt="Martin Jenny"
              class="img-cover">
          </figure>

          <div class="author-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Backwood</h2>

            <div class="section-text">
              We celebrate the spirit of retirees who wish to make a difference and continue contributing to society while enjoying the best years of their lives. We understand the importance of privacy, especially in the digital age, hence we are committed to safeguarding the personal information of our users. Our community groups foster a supportive and inclusive environment where retirees can thrive, find camaraderie, and experience a sense of belonging. We are unconditionally focused on helping our clients. Our team is all-in-house and always available.
            </div>

          </div>

        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="section contact" id="contact" aria-label="contact">
        <div class="container">

          <p class="section-subtitle">Contact</p>

          <h2 class="h2 section-title has-underline">
            Leave a Note
            <span class="span has-before"></span>
          </h2>

          <div class="wrapper">

            <form action="contact.php" class="contact-form" method="post">

              <input type="text" name="name" placeholder="Your Name" required class="input-field">

              <input type="email" name="email" placeholder="Your Email" required class="input-field">

              <input type="text" name="subject" placeholder="Subject" required class="input-field">

              <textarea name="message" placeholder="Your Message" class="input-field"></textarea>

              <button type="submit" class="btn btn-primary">Send Now</button>

            </form>

            <ul class="contact-card">

              <li>
                <p class="card-title">Address:</p>

                <address class="address">
                  16, Lankaway <br>
                  Florida, USA 99544
                </address>
              </li>

              <li>
                <p class="card-title">Phone:</p>

                <a href="tel:1234567890" class="card-link">123 456 7890</a>
              </li>

              <li>
                <p class="card-title">Email:</p>

                <a href="mailto:support@support.com" class="card-link">support@support.com</a>
              </li>

              <li>
                <p class="social-list-title h3">Connect our socials</p>

                <ul class="social-list">

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                  </li>

                  <li>
                    <a href="#" class="social-link">
                      <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                  </li>

                </ul>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
  </main>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top">

        <a href="#" class="logo">Backwood</a>

        <ul class="footer-list">

          <li>
            <a href="#home" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#benefits" class="footer-link">Service</a>
          </li>

          <li>
            <a href="#chapters" class="footer-link">Find a Job</a>
          </li>

          <li>
            <a href="#pricing" class="footer-link">Contribute</a>
          </li>

          <li>
            <a href="#contact" class="footer-link">Contact</a>
          </li>
        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          &copy; 2023 All right reserved. Made with Patience by Backwood team
        </p>
      </div>

    </div>
  </footer>

  <!-- 
    - custom js link
  -->
  <script src="C:\xampp\htdocs\bookish-master\jobs.js" defer></script>

  <!-- 
    - ionicon link
  -->

  <script>
     'use strict';



/**
 * add event on element
 */

const addEventOnelem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i <script elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * toggle navbar
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navToggler = document.querySelector("[data-nav-toggler]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
}

addEventOnelem(navToggler, 'click', toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
}

addEventOnelem(navbarLinks, "click", closeNavbar);



/**
 * header active on scroll down to 100px
 */

const header = document.querySelector("[data-header]");

const activeHeader = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
  } else {
    header.classList.remove("active");
  }
}

addEventOnelem(window, "scroll", activeHeader);



/**
 * filter tab
 */

const tabCard = document.querySelectorAll("[data-tab-card]");

let lastTabCard = tabCard[0];

const navigateTab = function () {
  lastTabCard.classList.remove("active");
  this.classList.add("active");
  lastTabCard = this;
}

addEventOnelem(tabCard, "click", navigateTab);

</script> 

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>