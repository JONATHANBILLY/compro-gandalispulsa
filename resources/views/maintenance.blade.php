<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- main css -->
    <style>
/* Google fonts Read Hat Display*/
@import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;500;600;700&display=swap');

/* Google fonts Inter */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;700&display=swap');

:root {
    --primary-color: #6638EB;
    --secondary-color: #FFD200;
    --black-color: #07122A;
    --gray-color: #ABAFB4;
}

a {
    color: var(--primary-color);
}

section.content {
    font-family: 'Red hat display';
    color: var(--black-color);
}

section.content {
    padding: 3rem;
    text-align: center;
    padding: 3rem 0;
}

.text {
    padding: 56px 0;
}

.text h1 {
    font-size: 48px;
    font-weight: bold;
}

.text p {
    font-size: 25px;
    font-weight: 400;
    min-width: 500px;
    max-width: 100%;
    margin: 0 auto;
    color: var(--gray-color);
}

@media (max-width: 576px) {

    section.content img {
        width: 300px;
    }

    .text h1 {
        font-size: 25px;
    }

    .text p {
        font-size: 14px;
        font-weight: 400;
        min-width: 300px;
    }


}
   </style>
</head>

<body>
    <section class="content">
        <img src="assets/images/illustration.svg" alt="img">
        <div class="text">
            <h1>Oops! site under maintenance</h1>
            <p class="w-25">we apologize for any inconveniences caused
                we've almost done, <a href="#"> Turn back</a></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>