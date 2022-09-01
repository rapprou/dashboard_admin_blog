<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="blog-header lh-1 py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a class="btn btn-sm btn-outline-primary" href="register.php">Inscription</a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="blog.php">CandyCraft</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="link-secondary" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                            <title>Search</title>
                            <!-- <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" /> -->
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="connect.php">Login</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-4 pt-4">
            <nav class="nav d-flex justify-content-evenly">
                <a class="p-2 btn btn-sm btn-outline-primary" href="blog.php">Home</a>
                <a class="p-2 btn btn-sm btn-outline-primary" href="a_propos.php">À Propos</a>
                <a class="p-2 btn btn-sm btn-outline-primary" href="contact.php">Contact</a>
            </nav>
        </div>
    </div>
    <div class=" container alert alert-info alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> Formulaire avec gmail ...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- formulaire contact -->
    <div class="row justify-content-center my-5">
        <div class="col-lg-6">
            <h2 class="py-3 text-center">Contact</h2>
            <form id="contactForm" data-sb-form-api-token="70a6bf95-c015-46db-a3ec-062c4e5ed777">
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">L'dresse e-mail est nécessaire.</div>
                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">L'adresse e-mail n'est pas valide.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="sujet">Objet</label>
                    <input class="form-control" id="sujet" type="text" placeholder="Sujet" data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="sujet:required">Le sujet est obligatoire.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                    <div class="invalid-feedback" data-sb-feedback="message:required">Un message est requis.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Envoi du formulaire réussi !</div>
                        <!-- <p>To activate this form, sign up at</p> -->
                        <!-- <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Erreur lors de l'envoi du message !</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Envoi</button>
                </div>
            </form>
        </div>

    </div>
    <!-- footer -->
    <footer class="blog-footer">
        <p>Blog CandyCraft <a href="https://getbootstrap.com/">Jean</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>

</body>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</html>