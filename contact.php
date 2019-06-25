

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />

        <link
            href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Marck+Script|Righteous&display=swap"
            rel="stylesheet"
        />

        <title>Boskom, Inc - Garage Doors and more</title>

        <link href="/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- ABOVE NAV INFO -->
        <section class="bg-above-nav fixed-top">
            <div class=" container text-center">
                <!-- <img
                    class="boskom-logo-nav"
                    src="images\logo\boskom.png"
                    alt="boskom logo"
                /> -->
                Contact Us! <span class="phone-color">407-948-2407</span>
            </div>
        </section>

        <!-- NAV BAR -->
        <header class="bg-company-blue fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="boskom-logo-container">
                        <a class="navbar-brand navbar-brand-name" href="/"
                            ><img
                                class="boskom-sun"
                                src="images\logo\sun.png"
                                alt="boskom sun"
                            />
                            <span class="boskom-logo-text">BOSKOM</span></a
                        >
                    </div>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#ourNavBar"
                        aria-controls="ourNavBar"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div
                        class="collapse navbar-collapse justify-content-end"
                        id="ourNavBar"
                    >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link active nav-link-color"
                                    href="/"
                                    >Home</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-link-color"
                                    href="garagedoorrepair.html"
                                    >Repairs</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-link-color"
                                    href="garagedooropeners.html"
                                    >Openers</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-link-color"
                                    href="newgaragedoors.html"
                                    >Doors</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-link-color"
                                    href="brokensprings.html"
                                    >Springs</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link nav-link-color"
                                    href="contact.php"
                                    >Contact</a
                                >
                            </li>
                            <!-- <li class="nav-item">
                            <a
                                class="nav-link disabled"
                                href="#"
                                tabindex="-1"
                                aria-disabled="true"
                                >Disabled</a
                            >
                        </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <!-- JUMBOTRON -->
        <section>
            <div class="jumbotron-offset"></div>
            <!-- <div class="jumbotron jumbotron-fluid "> -->
            <!-- <div class="container">
                        <h1 class="display-4">Fluid jumbotron</h1>
                        <p class="lead">
                            This is a modified jumbotron that occupies the entire
                            horizontal space of its parent.
                        </p>
                    </div> -->
            <img
                class="d-block w-100 carousel-image-min-height"
                src="images\carousel\garage_01.png"
                alt="garage door"
            />
        </section>

        <!-- CONTACT -->
        <section class="about-section">
            <div id="about" class="scroll-spacer-about"></div>
            <div class="text-center service-header-text-container">
                <div
                    class="container service-header-text"
                    style="margin-bottom: 50px;"
                >
                    <h2>CONTACT US / FREE ESTIMATE FORM</h2>
                </div>

                <div class="container contact-form-container-wrapper flex-wrap">
                    <div class="contact-form-container shadow">
                        <form
                            class="needs-validation"
                            novalidate
                            id="contact-form"
                            method="post"
                            action="contactSubmit.php"
                            role="form"
                        >
                            <div class="">
                                <div class="">
                                    <label
                                        for="validationCustom01"
                                        class="form-label-style"
                                        >Name</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="validationCustom01"
                                        placeholder="Full Name"
                                        name="name"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>
                                <div class="">
                                    <label
                                        for="validationCustom02"
                                        class="form-label-style"
                                        >Email</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="validationCustom02"
                                        placeholder="Email"
                                        name="email"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <label
                                    for="validationCustom03"
                                    class="form-label-style"
                                    >Phone Number</label
                                >
                                <input
                                    type="tel"
                                    class="form-control"
                                    id="validationCustom03"
                                    placeholder="Phone Number"
                                    name="phone"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
                            </div>
                            <div class="">
                                <label
                                    for="validationCustom04"
                                    class="form-label-style"
                                    >Type of Estimate</label
                                >
                                <select
                                    class="custom-select form-control"
                                    id="validationCustom04"
                                    name="estimate"
                                >
                                    <option value="None">Choose...</option>
                                    <option value="Garage Door Repair"
                                        >Garage Door Repair</option
                                    >
                                    <option value="New Garage Door">New Garage Door</option>
                                    <option value="Garage Door Opener"
                                        >Garage Door Opener</option
                                    >
                                    <option value="Broken Spring Replacement"
                                        >Broken Spring Replacement</option
                                    >
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="form-label-style"
                                    >Other Information</label
                                >
                                <textarea
                                    id="form_more_info"
                                    name="message"
                                    class="text-area-container"
                                ></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit" name="submit">
                                Submit form
                            </button>
                            <div class="messages"></div>
                        </form>

                        <!-- FORM VALIDATION -->
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                "use strict";
                                window.addEventListener(
                                    "load",
                                    function() {
                                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                        var forms = document.getElementsByClassName(
                                            "needs-validation"
                                        );
                                        // Loop over them and prevent submission
                                        var validation = Array.prototype.filter.call(
                                            forms,
                                            function(form) {
                                                form.addEventListener(
                                                    "submit",
                                                    function(event) {
                                                        if (
                                                            form.checkValidity() ===
                                                            false
                                                        ) {
                                                            event.preventDefault();
                                                            event.stopPropagation();
                                                        }
                                                        form.classList.add(
                                                            "was-validated"
                                                        );
                                                    },
                                                    false
                                                );
                                            }
                                        );
                                    },
                                    false
                                );
                            })();
                        </script>
                    </div>
                    <div class="contact-form-hours-container shadow">
                        <h3
                            class="lead text-left"
                            style="font-weight: 400; margin-bottom: 30px;"
                        >
                            HOURS OF OPERATION
                        </h3>
                        <div>
                            <div class="hours-container">
                                <div class="hours-days-container text-left">
                                    <p>SUNDAY *</p>
                                    <p>MONDAY</p>
                                    <p>TUESDAY</p>
                                    <p>WEDNESDAY</p>
                                    <p>THURSDAY</p>
                                    <p>FRIDAY</p>
                                    <p>SATURDAY *</p>
                                </div>
                                <div class="hours-days-container">
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                    <p>9:00 AM – 5:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="hours-exception">
                            *After hours/emergency service is available based on
                            technician availability, service location, and
                            service type. Additional fees may apply.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <section>
            <div class="footer-container">
                <div class="container">
                    <div class="footer-text">
                        Copyright © 2019 Boskom, Inc. All rights reserved.
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"
            integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8="
            crossorigin="anonymous"
        ></script>
        <!-- <script src="contact.js"></script> -->
    </body>
</html>
