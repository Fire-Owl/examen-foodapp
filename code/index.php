<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Integration">
    <link rel="stylesheet" href="style.css">
    <title>FoodApp</title>
</head>

<body>
    <header>
        <img src="assets/images/logo.svg" alt="">

        <div class="menu_computer">
                <a href="#"> ipsum </a>
                <a href="#"> ipsum </a>
                <a href="#"> ipsum </a>
        </div> 

        <div class="menu_mobile">
                <div class="menu_mobile__items" id="menu">
                    <a href="#"> ipsum </a>
                    <a href="#"> ipsum </a>
                    <a href="#"> ipsum </a>
                </div>

                <div class="menu_mobile__button" id="button_mobile">
                    <div class="menu_mobile__button__hamburger" id="hamburger"> 
                        <div></div>
                        <div></div>
                        <div style="width: 20px;"></div>
                    </div>
                    <div class="menu_mobile__button__cross" id="cross">x</div>
                </div>
        </div>
    </header>

    <main>
        <div class="container">
                <div class="container__text">
                    <h1>Beautiful food & takeaway, <span style="color: #35b8be;">delivered</span> to your door.</h1>
                    <p class="container__text__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et tortor et massa vehicula blandit. Ut malesuada non est in sodales. Donec et volutpat metus. Cras mollis porttitor massa, sed pulvinar massa. 
                    </p>
                    <a href="#" class="button"><p>Place an Order</p></a>
                </div>
                <img src="assets/images/food_order.png" alt="Food">
        </div>

        <div class="container reverse" style="background-color: #f5fbfc;">
                <div class="container__text">
                    <h1 style="color: #35b8be;">The home of fresh products</h1>
                    <p class="container__text__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et tortor et massa vehicula blandit. Ut malesuada non est in sodales. Donec et volutpat metus. Cras mollis porttitor massa, sed pulvinar massa. 
                    </p>
                    <a href="#" class="button"><p>Learn about us</p></a>
                </div>
                <img src="assets/images/eat.png" alt="People eating">
        </div>

        <div class="container" style="flex-direction: column;">

                <h1 style="color: #35b8be;">How it works</h1>

                <div class="container__thumbnail">
                    <div class="container__thumbnail__item">
                        <img src="assets/images/step_01.png" alt="choosing menu">
                        <h2>Adapt your menu items</h2>
                        <p>Easily adapt your menu using the webflow CMS and allow customers to browse your items.</p>
                    </div>

                    <div class="container__thumbnail__item">
                        <img src="assets/images/step_02.png" alt="order your command">
                        <h2>Accept online orders & takeout</h2>
                        <p>Let your customers order and pay via the powerful ecommerce system, or simple let them call your store.</p>
                    </div>

                    <div class="container__thumbnail__item">
                        <img src="assets/images/step_03.png" alt="receive your your food">
                        <h2>Manage delivery or takeout</h2>
                        <p>Manage your own logistics and take orders simply though the ecommerce system.</p>
                    </div>
                </div>
        </div>
    </main>

    <footer>
        <p style="color: #35b8be;">Power by FoodApp</p>
        <div>
            <a href="#">CGV</a>
            <a href="#">About us</a>
        </div>
    </footer>

    <script src="assets/script/burger.js"></script>    
</body>
</html>