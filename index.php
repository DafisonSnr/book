<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.1/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/scss/style.css">
    <title>Document</title>
    
</head>
<body  onmousemove="body()">
        <header>
            <div class="notice" id="notice">
                <h3>Important Notice:
                </h3>
                <span>
                    Please be mindful of fake sites run by fraudulent parties posing as Guaranty Trust Bank Ltd or its affiliates. Do not disclose your personal information and financial details to anyone online or anywhere else.
                </span>
            </div>
            <nav>
            <div class="nav-small">
                <div class="small-links">
                    <span class="list" id="nav-open"> <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="10.7" viewBox="0 0 16 10.7"><path d="M0 1.8h16V0H0v1.8zm0 4.4h16V4.4H0v1.8zm0 4.5h16V8.9H0v1.8z"></path></svg></a></span>
                    <span id="search-open" class="search-top"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill-rule="evenodd" d="M14.18 13.24c1.172-1.41 1.91-3.22 1.91-5.2C16.09 3.62 12.47 0 8.044 0S0 3.62 0 8.04c0 4.43 3.62 8.05 8.045 8.05a7.915 7.915 0 0 0 5.195-1.91l3.62 3.62c.134.13.302.2.47.2a.683.683 0 0 0 .47-.2.65.65 0 0 0 0-.94l-3.62-3.62zm-6.135 1.54c-3.687 0-6.704-3.01-6.704-6.7 0-3.69 3.017-6.71 6.704-6.71s6.704 3.02 6.704 6.71-3.017 6.7-6.704 6.7z"></path></svg></a></span>
                    <div class="search-d-content" id="search-display">
                        <input type="text" class="search-input" placeholder="Search" id="search-input">
                        <div class="search-container" >
                            <span id="s-close" class="search-close">&times</span>
                        </div>
                    </div>
                    <span class="loginBtn" id="loginBtn"><a href="#"><span class="cat"><svg xmlns="http://www.w3.org/2000/svg" style="color: white" width="14" height="18" viewBox="0 0 14 18"><path fill-rule="evenodd" d="M2.625 6H0v12h14V6H2.625zM1.5 7.5h11v9h-11v-9zM6.993 0c2.19-.004 4 1.805 4.007 4.04V6H3V4.053C2.998 1.818 4.803.008 6.993 0zm.003 1.5a2.538 2.538 0 0 0-2.541 2.553V6h5.09V4.043A2.538 2.538 0 0 0 6.996 1.5z"></path></svg></span>Login</a></span>
                        <div class="login-D-down" id="login-display">
                            <div class="login-container">
                                <span id="login-close" class="login-close">&times</span>
                            </div>
                            <h5>Online Banking</h5>
                            <div class="login-links">
                                <span><a href="#" id="personal-color" onclick="personal()">Personal</a></span>
                                <span><a href="#" id="business-color"  onclick="business()">Business</a></span>
                                <span id="personal-underline"  style="width: 150px; margin-left: 50px; margin-top: 25px; border-bottom: 2px solid orangered; display: block;"></span>
                                <div  class="acc-bord-bottom">
                                    <p id="click-personal"  style="width: 150px; margin-left: 50px; margin-top: 25px;"></p>
                                    <p id="click-business"  style="width: 150px; margin-left: 230px; margin-top: 25px;"></p>
                                </div>
                            </div>
                            <div class="l-d-content">
                                <div class="drop-content2">
                                    <a href="./register.php" target="_blank" class="personal" id="person">Login</a>
                                    <a href="./login.php" target="_blank" class="business" id="busin">Login</a>
                                    <div class="l-register">
                                        <span><a href="#">Register</a></span>
                                        <hr>
                                        <span><a href="#">Demo</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="small-logo">
                        <img style="width: 100px" src="./assets/image/gtlogo.png" alt="">
                    </div>
                    <hr>
                </div>
                
           </div>
                <div class="navigations">
                    <ul class="secondary">
                        <li><a href="">Locate<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">Help Centre<i class="fa-solid fa-angle-down"></i></a></li>
                        <li><a href="">Security</a></li>
                        <li><a href=""><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    </ul>
                    <ul class="primary">
                    <li><a href=""><i class="fa-solid fa-lock"></i>Login<i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                    <div class="logo">
                    <img style="width: 100px" src="./assets/image/gtlogo.png" alt="">
                </div>
                </div>
                
            </nav>
        </header>
        <section class="nav2">
            <div class="navigation2" id="nav-display">
                    <div class="close-container">
                        <span class="closeNav" id="nav-close">&times</span>
                    </div>
                <ul class="navigation-list">
                    <li><a href=""><i class="fa-solid fa-house-chimney"></i><span class="homeBtn">Home</span></a></li>
                    <li class="drobBtn1">Personal Banking <span class="angles"><i class="fa-solid fa-angle-right"></i></span>
                        <div class="drop-wrap1">
                            <div class="drop-content1">
                                <div class="drop-accounts">
                                    <a href="#" class="dropBtn2">Accounts<i class="fa-solid fa-angle-right"></i>
                                    <div class="drop-content2">
                                        <div class="vierities-acc">
                                            <a class="content-a cont-a" href="">Current Accounts <i class="fa-solid fa-angle-right"></i></a></a>
                                            <div class="current-acc-cont">
                                                <a href="#">Individual Current Accounts</a>
                                                <a href="#">e-Account</a>
                                                <a href="#">Domiciliary Account</a>
                                                <a href="#">Gtmax</a>
                                                <a href="#">Seniors Account</a>
                                            </div>
                                        </div>
                                        <a class="content-a" href="">Savings & Investment Accounts <i class="fa-solid fa-angle-right"></i></a>
                                        <a class="content-a" href="">Compare Accounts </a>
                                        <a class="content-a" href="">Open an Accounts</a>
                                    </div>
                                </div>
                                
                                <a href="#">Services<i class="fa-solid fa-angle-right"></i></a>
                                <a href="#">Cards<i class="fa-solid fa-angle-right"></i></a>
                                <a href="#">Loans<i class="fa-solid fa-angle-right"></i></a>
                                <a href="#">Ways to Bank<i class="fa-solid fa-angle-right"></i></a>
                                <a href="#">Non Resident Nigerian <br>(NRN) Service  <i class="fa-solid fa-angle-right"></i></a>
                                <a href="#">Private Banking <i class="fa-solid fa-angle-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li>Business Banking <span class="angles"><i class="fa-solid fa-angle-right"></i></span>
                    <div class="drop-wrap1"></div>

                    </li>
                    <li>About Us <span class="angles"><i class="fa-solid fa-angle-right"></i></span>
                        <div class="drop-wrap1"></div>
                    </li>
                    <li>Investor Relationships <span class="angles"><i class="fa-solid fa-angle-right"></i></span>
                        <div class="drop-wrap1"></div>
                    </li>
                    <li>Open an Account <span class="angles"><i class="fa-solid fa-angle-right"></i></span>
                        <div class="drop-wrap1"></div>
                    </li>
                </ul>
                <div class="tour">
                    <a href="#"> <i class="fa-solid fa-play"></i>Welcome Tour</a>
                </div>
            </div>
        </section>
        <main id="main-display">
            <section class="content1">
                <div class="container">
                    <div class="second-img">
                        <img  src="./assets/image/gtbankimg.jpg" alt="Girl on Baloon">
                    </div>
                    <div class="first">
                        <h4>Bank for free with <span>GTCrea8</span></h4>
                        <p>Open a GTCrea* Account and get zero Charges on all 
                        transactions and a free instant debit card at any branch nationwide. <br>
                        <a href="#">Ge a GTCrea8 Account</a> 
                        </p>
                    </div>
                    <div class="third-form">
                            <h5>Online Banking</h5>
                            <div class="description-link">
                                <a href="#" class="a-1">Personal</a>
                                <a href="#" class="a-2">Business</a>
                            </div>
                            <div class="login">
                                <a href="#">Login</a>
                            </div>
                            <div class="register">
                                <a href="#">Register</a>
                                <hr>
                                <a href="#">Demo</a>
                            </div>
                    </div>
                </div>
            </section>
            <section class="discription">
                <div class="container2">
                    <div class="head-line">
                        <h3>Innovative Banking Products</h3>
                        <p>Tailored to your lifestyle, designed for your personal and business needs.</p>
                    </div>
                    <div class="flex-column">
                        <div class="column">
                            <a href="#">
                                <img style="width: 100%"  src="./assets/image/handmoney.png" alt="Hand holding cash">
                                <h4>Open an Account instantly</h4> 
                                <p> Need an account? Open an account for your business, your child or yourself in minutes.</p> 
                                Click here to start <i class="fa-solid fa-angle-right"></i> 
                            </a>
                        </div>
                        <div class="column">
                            <a href="#">
                                <img style="width: 100%"  src="./assets/image/ballongirl.png" alt="Girl on Ballon">
                                <h4>GTCrea8</h4> 
                                <p>Free is the new cool. Zero transfer fees. Zero SMS charge. Free ATM Card. Get a GTCrea8 account instantly</p>
                                Get started  <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                    <a href="#">
                            <img style="width: 100%"  src="./assets/image/happyman.png" alt="Happy Man">
                            <h4>Quick Credit</h4> 
                            <p>Get up to N5 million in credit and pay back in 6-12 months. 1.5% monthly interest rate. No hidden fees.</p>
                            Get started now<i class="fa-solid fa-angle-right"></i>
                    </a>
                    </div>
                    <div class="column">
                    <a href="#">
                            <img style="width: 100%" src="./assets/image/officegirl.png" alt="Help Center">
                            <h4>Help Center</h4> 
                            <p>Skip the queues and get all the answers you need right from your phone. Log your dispense errors from your banking app. Check our How-To Guide for quick fixes.</p>
                            Read more <i class="fa-solid fa-angle-right"></i>
                    </a>
                    </div>
                    <div class="column">
                        <a href="#">
                            <img style="width: 100%" src="./assets/image/smileman.png" alt="Digital Experience">
                            <h4>Going Beyond - The Digital Experience</h4> 
                            <p>MD Segun Agbaje presents at SMW 2020</p>
                            Watch now <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="column">
                    <a href="#">
                            <img style="width: 100%" src="./assets/image/cycling.png" alt="Bike man">
                            <h4>2020 Macro- economic Outlook</h4> 
                            <p>Our forecasts and opinions on the broad Nigerian macroeconomic and banking sectors trends in 2020.</p>
                            Read the report <i class="fa-solid fa-angle-right"></i>
                    </a>
                    </div>
                    <div class="column">
                        <a href="#">
                            <img style="width: 100%" src="./assets/image/smileman2.png" alt="Smiling man">
                            <h4>2020 Macro- economic Outlook</h4> 
                            <p>Award-winning CEO building a great African institution through digital transformation</p>
                            Read More  <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="column">
                        <a href="#">
                            <img style="width: 100%" src="./assets/image/corvus.png" alt="Corvus">
                            <h4>2020 Macro- economic Outlook</h4> 
                            <p>Read the 6th Edition of the Corvus Magazine</p>
                            <br>
                            Full Magazine  <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </section>
            <section class="initiatives">
                <div class="container-initiatives">
                    <div class="initiatives-heading">
                        <h5>Our Initiatives</h5>
                    </div>
                    <div class="ini-column1">
                        <div class="first-col">
                            <div class="food">
                                <img src="./assets/image/crowd.png" alt="People">
                                <p>Here's how we're supporting SMEs in the Food Industry</p>
                                <a href="#">Learn More</a>
                            </div>
                            <div class="ndani">
                                <img src="./assets/image/butterflyhand.png" alt="Hand">
                                <span><a href="#">Visit Ndani</a></span>
                            </div>
                        </div>
                        <hr>
                        <div class="second-col">
                            <img src="./assets/image/exchange.png" alt="">
                        </div>
                    </div>
                    <div class="ini-column2">
                        <ul class="col2-ini">
                            <li>
                                <a href="#">
                                <svg viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg"><path d="M31.7 36.9h1.5v14.7h-1.5z"></path><path d="M58.3 25h-3C55 12.9 45.3 3.1 33.2 2.7V0h-1.5v2.8c-12 .3-21.8 10.1-22 22.2h-3v1.5h3c.9 15.4 21.4 37 22.3 37.9l.5.6.5-.6c.9-.9 21.4-22.5 22.3-37.9h3V25zM32.5 62.9C29.2 59.3 12 40 11.2 26.5h10.2V25H11.2c.3-11.3 9.3-20.4 20.6-20.8v10.4h1.5V4.3c11.2.4 20.2 9.5 20.5 20.7H43.6v1.5h10.2C53 40 35.8 59.3 32.5 62.9z"></path><path d="M48.5 23.6l1.5-.2c-1.1-7.9-7.3-14.1-15.2-15.1l-.2 1.5c7.2.9 13 6.6 13.9 13.8zM30.2 8.3c-7.9 1-14.1 7.3-15.2 15.1l1.5.2c1-7.2 6.7-12.9 13.9-13.9l-.2-1.4zM34.8 43.3c8-1 14.2-7.3 15.2-15.2l-1.5-.2c-.9 7.3-6.6 13-13.9 14l.2 1.4zM16.5 27.9l-1.5.2c1 7.9 7.3 14.2 15.2 15.2l.2-1.5c-7.3-.9-13-6.7-13.9-13.9zM25.6 25.8c0 3.8 3.1 6.9 6.9 6.9 3.8 0 6.9-3.1 6.9-6.9 0-3.8-3.1-6.9-6.9-6.9-3.8 0-6.9 3.1-6.9 6.9zm6.9-5.4c3 0 5.4 2.4 5.4 5.4s-2.4 5.4-5.4 5.4-5.4-2.4-5.4-5.4 2.4-5.4 5.4-5.4z"></path></svg>
                                <span class="svg-names">Find a Branch</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="icon footer-services-icon"><svg viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg"><path d="M42.7 18.3l1.5-.4c-.8-3.3-3.8-5.6-7.2-5.6-2 0-3.9.8-5.3 2.2l1.1 1.1c1.1-1.1 2.6-1.7 4.2-1.7 2.7-.1 5 1.8 5.7 4.4z"></path><path d="M53.1 18.4c-1.5 0-2.9.3-4.3.8-.6-6.2-5.8-11-12.1-11-5.5 0-10.3 3.7-11.7 9-1.6-1.1-3.5-1.8-5.5-1.8-4.9 0-8.9 3.8-9.3 8.6H9c-4.4 0-8.3 3.1-9.2 7.5l-.1.3c-.1.5-.1 1.1-.1 1.6 0 5.2 4.2 9.4 9.4 9.4h22.1v-1.5h-22c-4.3 0-7.9-3.5-7.9-7.9 0-.4 0-.9.1-1.3v-.3c.7-3.6 4-6.3 7.7-6.3h2.7v-.8c0-4.3 3.5-7.8 7.8-7.8 3.1 0 5.9 1.8 7.1 4.6l1.4-.6c-.4-1-1-1.8-1.7-2.6 1-5 5.3-8.6 10.4-8.6 5.9 0 10.6 4.8 10.6 10.6 0 1.1-.2 2.3-.5 3.3l1.4.5c.4-1.1.5-2.2.6-3.3 1.3-.6 2.8-.9 4.2-.9 5.9 0 10.6 4.8 10.6 10.6 0 5.9-4.8 10.6-10.6 10.6h-6.1v1.5H53c6.7 0 12.1-5.4 12.1-12.1.2-6.7-5.3-12.1-12-12.1z"></path><path d="M43.8 27.2h-9.4V47h-5l9.7 9.7 9.7-9.7h-5V27.2zm1.5 21.4l-6.1 6.1-6.2-6.1h3V28.7h6.4v19.8h2.9z"></path></svg></span>
                                <span class="svg-names">Download</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="icon footer-services-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 33.5"><path class="st0" d="M41.2 5.4c.6 0 1.1-.5 1.1-1.1v-.2c0-.6-.5-1.1-1.1-1.1h-.1c-.6 0-1.1.5-1.1 1.1v.1c0 .6.5 1.1 1.1 1.1h.1zM31 11.9c.6 0 1.1-.5 1.1-1.1v-.1c0-.6-.5-1.1-1.1-1.1h-.1c-.6 0-1.1.5-1.1 1.1v.1c0 .6.5 1.1 1.1 1.1h.1zm-14.9 1.6c-3.5 0-6.2-2.8-6.2-6.2s2.8-6.2 6.2-6.2c3.5 0 6.2 2.8 6.2 6.2s-2.8 6.2-6.2 6.2zm14.8-5c1 0 1.9.7 2.1 1.7h13.9v1.1H33c-.2.9-1.1 1.7-2.1 1.7h-.1c-1 0-1.9-.7-2.1-1.7h-6.4c-1.3 2-3.5 3.4-6.2 3.4-4.1 0-7.3-3.3-7.3-7.3S12 0 16.1 0c2.7 0 5 1.4 6.3 3.6h16.5C39.1 2.7 40 2 41 2h.1c1 0 1.9.7 2.2 1.7H47v1.1h-3.7c-.2.9-1.1 1.7-2.1 1.7h-.1c-1.1 0-1.9-.7-2.2-1.7h-16c.4.8.5 1.7.5 2.6 0 1-.2 2-.6 2.8h5.9c.2-.9 1.1-1.7 2.1-1.7h.1zm8 9.9c.6 0 1.1-.5 1.1-1.1v-.1c0-.6-.5-1.1-1.1-1.1h-.1c-.6 0-1.1.5-1.1 1.1v.1c0 .6.5 1.1 1.1 1.1h.1zm-3.1 6.5c.6 0 1.1-.5 1.1-1.1v-.1c0-.6-.5-1.1-1.1-1.1h-.1c-.6 0-1.1.5-1.1 1.1v.1c0 .6.5 1.1 1.1 1.1h.1zM31 32.4c-.2-4.5-.7-9-.7-9.1 0-1-.3-2.1-.9-3.2-.6-1-1.6-1.8-2.8-2.2l-4.3-1.5-4.6 8.6h-3.3l-4.6-8.6L5.6 18c-1.2.4-2.2 1.2-2.8 2.2-.4.8-.9 2-.9 3.2 0 .1-.5 4.6-.7 9.1h4.6l.4-5.6 1 .1-.4 5.5h18.4l-.3-5.5 1.1-.1.4 5.5H31zM38.9 15c1 0 1.9.7 2 1.6h5.9v1.1h-5.9c-.2.9-1.1 1.7-2.1 1.7h-.1c-1 0-1.9-.7-2.1-1.7h-8.1c.7.5 1.3 1.2 1.7 2 .7 1.2 1.1 2.4 1.1 3.5h2.2c.2-.9 1.1-1.7 2.1-1.7h.1c1.1 0 1.9.7 2.1 1.6h9v1.1h-9c-.2.9-1.1 1.7-2.1 1.7h-.1c-1 0-1.9-.7-2.1-1.7h-2.1c.1 1.7.5 5.2.7 8.8v.6H0V33c.1-4.8.7-9.6.7-9.7 0-1.2.4-2.4 1.1-3.6.7-1.2 1.9-2.2 3.3-2.8l5.1-1.8L15 24h2l4.8-8.9 4.4 1.6h10.4c.2-.9 1.1-1.7 2.1-1.7h.2z"></path></svg></span>
                                <span class="svg-names">Self Service</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="icon footer-services-icon"><svg viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg"><path d="M25.417 38.506L38.781 25.14l1.06 1.061-13.363 13.364zM36.8 33.5c-1.8 0-3.3 1.5-3.3 3.3 0 1.8 1.5 3.3 3.3 3.3 1.8 0 3.3-1.5 3.3-3.3 0-1.8-1.5-3.3-3.3-3.3zm0 5.1c-1 0-1.8-.8-1.8-1.8s.8-1.8 1.8-1.8 1.8.8 1.8 1.8-.8 1.8-1.8 1.8zM28.2 31.5c1.8 0 3.3-1.5 3.3-3.3 0-1.8-1.5-3.3-3.3-3.3-1.8 0-3.3 1.5-3.3 3.3 0 1.8 1.5 3.3 3.3 3.3zm0-5.1c1 0 1.8.8 1.8 1.8s-.8 1.8-1.8 1.8-1.8-.8-1.8-1.8.8-1.8 1.8-1.8z"></path><path d="M58 40.4h.7V24.6H58c-2.3 0-4.2-1.9-4.2-4.2v-.7H11.2v.7c0 2.3-1.9 4.2-4.2 4.2h-.8v15.7H7c2.3 0 4.2 1.9 4.2 4.2v.7h42.6v-.7c0-2.2 1.9-4.1 4.2-4.1zm-5.6 3.4H12.6c-.3-2.6-2.4-4.6-4.9-4.9V26.1c2.6-.3 4.6-2.4 4.9-4.9h39.7c.3 2.6 2.4 4.6 4.9 4.9v12.8c-2.5.4-4.5 2.4-4.8 4.9zM1.5 14.3h8.7v-1.5H0V23h1.5zM1.5 42H0v10.2h10.2v-1.5H1.5zM63.5 50.7h-8.7v1.5H65V42h-1.5zM54.8 12.8v1.5h8.7V23H65V12.8zM25 12.8h1.5v1.5H25zM21.7 12.8h1.5v1.5h-1.5zM15 12.8h1.5v1.5H15zM11.7 12.8h1.5v1.5h-1.5zM28.3 12.8h1.5v1.5h-1.5zM18.3 12.8h1.5v1.5h-1.5zM31.6 12.8h1.5v1.5h-1.5zM48.3 12.8h1.5v1.5h-1.5zM41.6 12.8h1.5v1.5h-1.5zM51.6 12.8h1.5v1.5h-1.5zM44.9 12.8h1.5v1.5h-1.5zM35 12.8h1.5v1.5H35zM38.3 12.8h1.5v1.5h-1.5zM11.7 50.7h1.5v1.5h-1.5zM21.7 50.7h1.5v1.5h-1.5zM38.3 50.7h1.5v1.5h-1.5zM15 50.7h1.5v1.5H15zM35 50.7h1.5v1.5H35zM31.6 50.7h1.5v1.5h-1.5zM41.6 50.7h1.5v1.5h-1.5zM51.6 50.7h1.5v1.5h-1.5zM48.3 50.7h1.5v1.5h-1.5zM44.9 50.7h1.5v1.5h-1.5zM28.3 50.7h1.5v1.5h-1.5zM18.3 50.7h1.5v1.5h-1.5zM25 50.7h1.5v1.5H25zM63.5 25.2H65v1.5h-1.5zM63.5 35.2H65v1.5h-1.5zM63.5 38.5H65V40h-1.5zM63.5 31.9H65v1.5h-1.5zM63.5 28.6H65v1.5h-1.5zM0 28.6h1.5v1.5H0zM0 31.9h1.5v1.5H0zM0 25.2h1.5v1.5H0zM0 38.5h1.5V40H0zM0 35.2h1.5v1.5H0z"></path></svg></span>
                                <span class="svg-names">Deals & More</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon footer-services-icon"><svg viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg"><path d="M26.6 32.6l.6-.6c2.9-2.9 4.5-6.9 4.5-11.1 0-4.1-1.7-8.1-4.5-11.1l-.6-.6c-2.9-2.5-6.7-4-10.6-4-.5 0-1 0-1.5.1-.6.1-1.2.2-1.7.3-2.9.5-5.4 1.8-7.6 3.7l-.6.6C1.8 12.9.1 16.8.1 21c0 4.1 1.7 8.1 4.5 11.1l.6.6c2.9 2.7 6.7 4.2 10.7 4.2 1 0 2-.1 2.9-.3 3-.6 5.7-2 7.8-4zm-15-25.3c-.9 1-1.8 2.4-2.4 4.1-.8-.4-1.6-.9-2.3-1.5.1-.1 2.2-1.8 4.7-2.6zm-5.8 3.6c.9.8 1.9 1.4 2.9 1.9-.7 2.2-1.1 4.7-1.2 7.4H1.7c.2-3.5 1.6-6.8 4.1-9.3zM1.7 21.7h5.9c0 2.7.4 5.3 1.1 7.4-1 .5-2 1.2-2.9 1.9-2.5-2.4-3.9-5.8-4.1-9.3zm9.9 12.9c-2.9-.9-4.7-2.5-4.7-2.6.7-.6 1.5-1.1 2.3-1.5.7 1.7 1.5 3.1 2.4 4.1zm3.6.6c-1.8-.4-3.5-2.4-4.6-5.3 1.5-.6 3-.9 4.6-1v6.3zm0-7.8c-1.8.1-3.5.4-5.1 1.1-.6-2-1-4.3-1-6.7h6.2v5.6zm0-7.2H9c.1-2.4.4-4.7 1-6.7 1.6.6 3.3 1 5.1 1.1v5.6zm0-7.1c-1.6-.1-3.2-.4-4.6-1 1.1-2.9 2.8-4.9 4.6-5.3v6.3zm5.1 21.5c.9-1 1.8-2.4 2.4-4.1.8.4 1.6.9 2.3 1.5-2.3 1.9-4.5 2.6-4.7 2.6zm5.8-3.5c-.9-.8-1.9-1.4-2.9-1.9.7-2.2 1.1-4.7 1.2-7.4h5.9c-.3 3.4-1.7 6.8-4.2 9.3zm4.1-10.9h-5.9c-.1-2.7-.5-5.2-1.2-7.4 1-.5 2-1.2 2.9-1.9 2.6 2.5 4 5.8 4.2 9.3zM20.3 7.3c2.8.9 4.7 2.5 4.7 2.6-.7.6-1.5 1.1-2.3 1.5-.7-1.6-1.5-3-2.4-4.1zm-3.6-.5c1.8.4 3.5 2.4 4.6 5.3-1.5.6-3 .9-4.6 1V6.8zm0 7.8c1.8-.1 3.5-.4 5.1-1.1.6 2 1 4.3 1 6.7h-6.2v-5.6zm0 7.1h6.2c-.1 2.4-.4 4.7-1 6.7-1.6-.6-3.3-1-5.1-1.1v-5.6zm0 13.5v-6.3c1.6.1 3.2.4 4.6 1-1.1 2.9-2.8 4.9-4.6 5.3z"></path><path d="M58 13.9l-2.6 8.7H33.1v1.5h.9v8.4h-4.7V34H34v8.4h-6.2l-1.1-7.2-1.5.2 1 6.9H20L18.7 38l-1.4.4L19 44h29.9L47 50.3c-.2 0-.4-.1-.6-.1H24.3c-2.6 0-4.8 2.1-4.8 4.8 0 2.6 2.1 4.8 4.8 4.8s4.8-2.1 4.8-4.8c0-1.3-.5-2.4-1.3-3.3h15.1c-.8.9-1.3 2-1.3 3.3 0 2.6 2.1 4.8 4.8 4.8s4.8-2.1 4.8-4.8c0-1.9-1.1-3.5-2.7-4.3l10.7-35.4H65v-1.5h-7zM24.3 58.3c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3-.1 1.9-1.5 3.3-3.3 3.3zm25.3-3.2c0 1.8-1.5 3.3-3.3 3.3-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3zm-7.9-12.6h-6.2V34H43l-1.3 8.5zm-6.2-10v-8.4h9l-1.3 8.4h-7.7zm13.8 10h-6.1l1.3-8.4h7.4l-2.6 8.4zm3-10h-7.6l1.3-8.4h8.9l-2.6 8.4z"></path></svg></span>
                                <span class="svg-names">Habari</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 43.9 44.5"><style>.st0{fill:#434a52}</style><path class="st0" d="M44 31.4l-1.4 1.9H2.5l-1.4-1.9v-.7H44v.7zm-19.1-8.1c0 .3-.2.5-.5.5h-1.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h1.5c.3 0 .5.2.5.5zm7.5-10.7v7h-1.2v-6.9h1.2zm1.1 6.1v-5.4c1.2.2 2.1 1.3 2.1 2.5v.3c-.1 1.3-1 2.4-2.1 2.6zm-20.9-6.1h1.2v6.9h-1.2v-6.9zm-1.1.8v5.4c-1.2-.3-2.1-1.3-2.1-2.5V16c.1-1.3 1-2.3 2.1-2.6zM3.5 7c0-.8.7-1.6 1.6-1.6h7.5c-1.4 2.1-2.3 4.7-2.3 7.4-1.1.7-1.8 1.8-1.8 3.1v.3c0 1.9 1.4 3.3 3.1 3.6v.8h3.3v-9h-3.3v.8c-.1 0-.2 0-.3.1.3-6.3 5.3-11.3 11.2-11.3 6 0 10.9 5 11.2 11.3-.1 0-.2-.1-.3-.1v-.8H30v9h3.3v-.8c.1 0 .3-.1.4-.1v1.9c0 .7-.5 1.2-1.2 1.2h-6.8c-.2-.6-.8-1-1.4-1h-1.5c-.8 0-1.5.7-1.5 1.5s.7 1.5 1.5 1.5h1.5c.7 0 1.2-.4 1.4-1h6.8c1.2 0 2.2-1 2.2-2.2v-2.4c1.1-.5 1.8-1.6 1.8-2.9V16c0-1.3-.7-2.4-1.7-3.1-.1-2.7-.9-5.3-2.3-7.4H40c.8 0 1.6.7 1.6 1.6v22.7H3.5V7zm39 22.7V7c0-1.4-1.2-2.6-2.6-2.6h-8.2C29.4 1.7 26.1 0 22.5 0s-6.9 1.8-9.2 4.5H5c-1.4 0-2.6 1.2-2.6 2.6v22.7H0v2.1l1.9 2.5h41.2l1.9-2.5v-2.1l-2.5-.1z"></path></svg>
                                <span class="svg-names">Help Center</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="icon footer-services-icon"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 43.9 44.5"><path d="M12.3 41.1l-.1-.5-11 2.9h-.1v-.2L4 32.5l-.1-.2C2 29.3 1 25.7 1 22c0-5.8 2.3-11 6.1-14.8S16.2 1 22 1s11 2.3 14.8 6.1c3.8 3.8 6.1 9 6.1 14.8s-2.3 11-6.1 14.8c-3.8 3.8-9 6.1-14.8 6.1-3.4 0-6.6-.8-9.5-2.3l-.2-.1-.2.1.2.6-.3.4c3 1.5 6.4 2.4 9.9 2.4 6.1 0 11.6-2.5 15.5-6.4 4-4 6.4-9.5 6.4-15.5 0-6.1-2.5-11.6-6.4-15.5C33.5 2.5 28 0 22 0S10.4 2.5 6.5 6.4c-4 4-6.4 9.5-6.4 15.5 0 4 1.1 7.7 2.9 10.9l.5-.2-.5-.1L.1 43.1c-.1.1-.1.2-.1.3v.3c.1.2.2.5.4.6.2.1.4.2.7.2h.3l11-2.9-.1-.5-.3.4.3-.4z"></path><path d="M34.9 15.4l-.3-.5-6.9 3.6v-2.7c0-.2-.1-.3-.2-.4-.1-.1-.3-.2-.4-.2H10c-.2 0-.3.1-.4.2-.1.1-.2.3-.2.4v13.7c0 .2.1.3.2.4s.3.2.4.2h17c.2 0 .3-.1.4-.2.1-.1.2-.3.2-.4v-2.6l7 3.7h.3c.2 0 .3-.1.4-.2.1-.1.2-.3.2-.4V15.1c-.1-.1-.1-.2-.2-.2s-.2-.1-.3-.1-.2 0-.3.1l.2.5.3.5-.3-.5v.6c.1 0 .2 0 .2-.1l-.2-.5v.6-.6l-.2.5c.1.1.2.1.3.1l-.1-.6-.2.5.2-.5-.4.3c.1.1.1.2.2.2l.2-.5-.4.3.4-.3-.5.2.5-.2-.5.1v14.6h.5l-.3-.3c-.1.1-.2.2-.2.3h.5l-.3-.3.3.3v-.5c-.1 0-.3.1-.3.2l.3.3v-.5.6l.1-.5-.1.5.3-.5-8.6-4.5v4.4h.4l-.3-.3c-.1.1-.2.2-.2.3h.5l-.3-.3.3.3v-.5c-.1 0-.3.1-.3.2l.3.3v-.5H10v.5l.3-.3c-.1-.1-.2-.2-.3-.2v.5l.3-.3-.3.3h.5c0-.1-.1-.3-.2-.3l-.3.3h.5V15.9H10l.3.3c.1-.1.2-.2.2-.3H10l.3.3-.3-.3v.5c.1 0 .3-.1.3-.2l-.3-.3v.5h17v-.5l-.3.3c.1.1.2.2.3.2v-.5l-.3.3.3-.3h-.5c0 .1.1.3.2.3l.3-.3h-.5v4.5l8.6-4.5-.2-.5z"></path></svg></span>
                                <span class="svg-names">Video Banking</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>