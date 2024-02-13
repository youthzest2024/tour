<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .contact-section {
            padding: 50px 0;
            background-color: #b3e5fc; /* Change this to the desired light blue color */
        }
    </style>
</head>
<body>

<!--Section: Contact v.2-->
<section class="contact-section">

    <!--Card-->
    <div class="card w-75 mx-auto">

        <!--Card content-->
        <div class="card-body">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-7 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="handleFormSubmission(event)">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0"> <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">  <label for="email" class="">Your email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">  <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form"> <label for="message">Your message</label>
                                    <textarea id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
<br>
<br>
                        <div class="text-center text-md-left">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        <div class="status" id="status"></div>
                    </form>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>karur </p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+91 0123456789</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>tripplanner@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </div>

    </div>
    <!--End Card-->

</section>
<!--Section: Contact v.2-->

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function handleFormSubmission(event) {
        event.preventDefault(); // Prevent default form submission

        var form = document.getElementById('contact-form');

        var formData = new FormData(form);

        // Send form data using AJAX
        fetch(form.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log('Response:', response);
            if (response.ok) {
                document.getElementById('status').innerHTML = 'Form submitted successfully.';
                form.reset(); // Reset form fields after successful submission
            } else {
                throw new Error('Failed to submit form.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('status').innerHTML = 'submitted successfully';
        });
    }
</script>

</body>
</html>
