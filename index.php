<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>67 Cafe</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text"> 67 <span class="gold-c">C</span>afe</h2>
            </a>
            <ul class="nav-menu">
                <button id="menu-close-button" class="fas fa-times"></button>

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#menu" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials" class="nav-link">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="#order" class="nav-link">Order Now</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="admin_login.php" class="nav-link">Login</a>
                </li>
            </ul>

            <button id="menu-open-button" class="fas fa-bars"></button>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">Unmatched taste</h2>
                    <h3 class="subtitle">Coffee ... <br>The way it was meant to be ...</h3>
                    <p class="description">Welcome to our coffee paradise, where every bean tells a story and every cup
                        sparks joy.</p>

                    <div class="buttons">
                        <a href="#order" class="button order-now">Order Now</a>
                        <a href="#contact" class="button contact-us">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image-wrapper">
                    <img src="images/coffee-section.png" alt="Hero" class="hero-image" style="border-radius: 50%;">
                </div>
            </div>
        </section>

        <section class="about-section" id="about">
            <div class="section-content">
                <div class="about-image-wrapper">
                    <img src="images/about.jpg" alt="About" class="about-image">
                </div>
                <div class="about-details">
                    <h2 class="section-title" style="color: white;">About Us</h2>
                    <p class="text">At 67 Cafe in Sidon, we're more than just a coffee shop - we're a community hub
                        where tradition meets modern Lebanese café culture. Founded in 2020, our passion lies in serving
                        exceptional coffee while creating a welcoming space for students, professionals, and coffee
                        enthusiasts alike.</p>
                    <div class="social-link-list">
                        <a href="https://www.facebook.com/67cafe.lb" class="social-link"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/67cafe.lb" class="social-link"><i
                                class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-section" id="menu">
            <h2 class="section-title">Our Menu</h2>
            <div class="section-content">
                <ul class="menu-list">
                    <li class="menu-item">
                        <img src="images/hot-beverages.jpg" alt="Hot Beverages" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">Hot Beverages</h3>
                            <p class="text">Classic coffee drinks including espresso, americano, latte and cappuccino.
                                We use freshly ground beans for rich, aromatic flavors.</p>
                        </div>
                    </li>
                    <li class="menu-item">
                        <img src="images/milkshakes-beverages.jpg" alt="MilkShakes" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">MilkShakes</h3>
                            <p class="text">Creamy blended drinks available in various flavors. Perfect for cooling down
                                or as a sweet treat.</p>
                        </div>
                    </li>
                    <li class="menu-item">
                        <img src="images/croissants.jpg" alt="Croissants" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">Croissants</h3>
                            <p class="text">Flaky, buttery pastries available plain or filled. Freshly baked throughout
                                the day.</p>
                        </div>
                    </li>
                    <li class="menu-item">
                        <img src="images/plates.jpg" alt="Plates" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">Plates</h3>
                            <p class="text">Proper meals for when you're hungry.</p>
                        </div>
                    </li>
                    <li class="menu-item">
                        <img src="images/desserts.jpg" alt="Desserts" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">Desserts</h3>
                            <p class="text">Selection of cakes, cookies and sweet pastries. Perfect pairing with your
                                coffee.</p>
                        </div>
                    </li>
                    <li class="menu-item">
                        <img src="images/salads.jpg" alt="Salads" class="menu-image">
                        <div class="menu-details">
                            <h3 class="name">Salads</h3>
                            <p class="text">Fresh, crisp salads bursting with seasonal produce, premium greens, and
                                homemade dressings - a light yet nourishing option for health-conscious guests.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="testimonials-section" id="testimonials">
            <h2 class="section-title" style="color: white;">Testimonials</h2>
            <div class="section-content">
                <div class="slider-container swiper">
                    <div class="slider-wrapper">
                        <ul class="testimonials-list swiper-wrapper">
                            <li class="testimonials swiper-slide">
                                <img src="images/user-1.jpg" alt="User" class="user-image">
                                <h3 class="name">Dalia Hanbouz</h3>
                                <i class="feedback">"A wonderful and quiet place. I love studying there sm , and the
                                    service is very good as well."</i>
                            </li>
                            <li class="testimonials swiper-slide">
                                <img src="images/user-2.jpg" alt="User" class="user-image">
                                <h3 class="name">Martin El Raai</h3>
                                <i class="feedback">"Amazing alternative vibe - my go-to study spot for 2 weeks. Calm
                                    mornings and evenings, fair prices, and baristas who really care about their
                                    coffee."</i>
                            </li>
                            <li class="testimonials swiper-slide">
                                <img src="images/user-3.jpg" alt="User" class="user-image">
                                <h3 class="name">Mohammad Al Hariri</h3>
                                <i class="feedback">"Excellent service and diversity of menu items; excellent venue for
                                    informal gatherings and meetings."</i>
                            </li>
                            <li class="testimonials swiper-slide">
                                <img src="images/user-4.jpg" alt="User" class="user-image">
                                <h3 class="name">Lilian Wehbeh</h3>
                                <i class="feedback">"Excellent quality! Fresh beans and quick delivery. Highly
                                    recommend."</i>
                            </li>
                            <li class="testimonials swiper-slide">
                                <img src="images/user-5.jpg" alt="User" class="user-image">
                                <h3 class="name">Ram Shames</h3>
                                <i class="feedback">"Best decaf I've tried! Smooth and flavorful. Arrived promptly."</i>
                            </li>
                        </ul>

                        <div class="swiper-pagination"></div>
                        <div class="swiper-slide-button swiper-button-prev"></div>
                        <div class="swiper-slide-button swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-section" id="gallery">
            <h2 class="section-title" style="color: white;">Gallery</h2>
            <div class="section-content">
                <ul class="gallery-list">
                    <li class="gallery-item">
                        <img src="images/gallery-1.jpg" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/gallery-2.jpg" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/gallery-3.jpg" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/gallery-4.jpg" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/gallery-5.jpg" alt="Gallery" class="gallery-image">
                    </li>
                    <li class="gallery-item">
                        <img src="images/gallery-6.jpg" alt="Gallery" class="gallery-image">
                    </li>
                </ul>
            </div>
        </section>

        <section class="order-now-section" id="order">
            <h2 class="section-title" style="color: white;">Order Now</h2>
            <div class="section-content">
                <form action="order_action.php" method="POST" class="order-form">
                    <input type="text" placeholder="Your name" class="form-input" name="txtName" required>
                    <input type="email" placeholder="Your email" class="form-input" name="txtEmail" required>
                    <input type="tel" placeholder="Your phone number" class="form-input" name="txtPhone" required>
                    <input type="text" placeholder="Your address" class="form-input" name="txtAddress" required>

                    <select class="form-input order-select" name="txtItem" required>
                        <option value="" disabled selected>Select your order</option>
                        <option value="coffee">Coffee - $3.50</option>
                        <option value="milkshake">Milkshake - $4.50</option>
                        <option value="croissant">Croissant - $2.50</option>
                        <option value="plate">Plate - $8.00</option>
                        <option value="dessert">Dessert - $5.00</option>
                        <option value="salad">Salad - $6.50</option>
                    </select>

                    <div class="dynamic-fields">
                        <input type="number" min="1" value="1" placeholder="Quantity" class="form-input qty-input" name="txtQuantity" required>
                        <textarea placeholder="Special requests" class="form-input" name="txtSpecial"></textarea>
                    </div>

                    <button type="submit" class="submit-button">Submit Order</button>
                </form>
            </div>
        </section>

        <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info">
                        <i class="fa-solid fa-location-crosshairs"></i>
                        <p>Nazih Bizri Road, Eastern Blvd, Sidon</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-envelope"></i>
                        <p>info@67cafe.com</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-phone"></i>
                        <p>+961 76 675 512</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-regular fa-clock"></i>
                        <p>Monday - Sunday: 08:00 AM - 12:00 AM</p>
                    </li>
                    <li class="contact-info">
                        <i class="fa-solid fa-globe"></i>
                        <p>www.67cafe.com</p>
                    </li>
                </ul>

                <form action="contact_action.php" method="POST" class="contact-form">
                    <input type="text" placeholder="Your name" class="form-input" name="Tname" required>
                    <input type="email" placeholder="Your email" class="form-input" name="Temail" required>
                    <textarea placeholder="Your message" class="form-input" name="Tmessage" required></textarea>
                    <button class="submit-button">Submit</button>
                </form>
            </div>
        </section>

        <footer class="footer-section">
            <div class="section-content">
                <p class="copyright-text">© 2025 Coffee Shop</p>

                <div class="social-link-list">
                    <a href="https://www.facebook.com/67cafe.lb" class="social-link"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/67cafe.lb" class="social-link"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>

                <p class="policy-text">
                    <a href="#" class="policy-link">Privacy Policy</a>
                    <span class="separator">•</span>
                    <a href="#" class="policy-link">Refund Policy</a>
                </p>
            </div>
        </footer>
    </main>

    <script src="swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>