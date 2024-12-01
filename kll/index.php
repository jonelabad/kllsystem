<?php 
include 'database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="kll-logo.jpg" alt="kll-logo" type="image/x-icon">
    <title>Kolehiyo ng Lungsod ng Lipa</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-title {
            color: #8f0808;
            font-size: 1.5rem;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .help-info {
            text-align: right;
            font-size: 0.9rem;
        }

        @media (max-width: 576px) {
            .form-title {
                font-size: 1.25rem;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center p-3" style="background-color: #411010; color: white;">
        <img src="kll-logo.jpg" style="height:100px;width:100px;" alt="KLL Logo" />
        <div class="ms-3">
            <h1>KOLEHIYO NG LUNGSOD NG LIPA</h1>
            <p>(Formerly LIPA CITY PUBLIC COLLEGE)</p>
            <p>Marawoy, Lipa City</p>
            <p>Tel/Fax # (043) 774-2420</p>
            <p>Email: <a href="mailto:kll.lipa@yahoo.com" style="color:white;">kll.lipa@yahoo.com</a></p>
        </div>
    </div>

    <div class="container my-4">
        <div class="text-center">
            <h2 class="form-title">KLL ADMISSION APPLICATION AND ENROLLMENT FORM</h2>
        </div>
        <form id="admissionForm" method="post" action="crud/register.php">
            <div class="mb-4">
                <label for="Course" class="form-label">Course</label>
                <select id="Course" name="Course" class="form-select" required>
                    <option value="">-- Please Select Course --</option>
                    <option value="BEE">BACHELOR OF ELEMENTARY EDUCATION</option>
                    <option value="BSE">BACHELOR OF SECONDARY EDUCATION</option>
                    <option value="BSBA">BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION</option>
                    <option value="BAC">BACHELOR OF ARTS IN COMMUNICATION</option>
                    <option value="BSCS">BACHELOR OF SCIENCE IN COMPUTER SCIENCE</option>
                    <option value="BSC">BACHELOR OF SCIENCE IN CRIMINOLOGY</option>
                </select>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="Lastname" class="form-label">Last Name</label>
                    <input type="text" id="Lastname" name="Lastname" class="form-control" maxlength="50" required
                        oninput="capitalizeFirstLetter(this); validateLetters(this)">
                </div>
                <div class="col-md-3">
                    <label for="Firstname" class="form-label">First Name</label>
                    <input type="text" id="Firstname" name="Firstname" class="form-control" maxlength="50" required
                        oninput="capitalizeFirstLetter(this); validateLetters(this)">
                </div>
                <div class="col-md-3">
                    <label for="Middlename" class="form-label">Middle Name</label>
                    <input type="text" id="Middlename" name="Middlename" class="form-control" maxlength="50"
                        oninput="capitalizeFirstLetter(this); validateLetters(this)">

                </div>
                <div class="col-md-3">
                    <label for="Suffix" class="form-label">Suffix</label>
                    <input type="text" id="Suffix" name="Suffix" class="form-control" maxlength="50"
                        oninput="capitalizeFirstLetter(this); validateLetters(this)">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="Gender" class="form-label">Sex:</label>
                    <select id="Gender" name="Gender" class="form-select" required>
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="DOB" class="form-label">Birthdate (yyyy-mm-dd)</label>
                    <input type="date" id="DOB" name="DOB" class="form-control" placeholder="yyyy-mm-dd" required>
                </div>

                <div class="col-md-4">
                    <label for="POB" class="form-label">Place of Birth</label>
                    <input type="text" id="POB" name="POB" class="form-control" maxlength="200" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="Address" class="form-label">Complete Address</label>
                <input type="text" id="Address" name="Address" class="form-control" maxlength="200" required>
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" id="Email" name="Email" class="form-control" maxlength="75" required>
            </div>

            <div class="mb-3">
                <label for="Re_Email" class="form-label">Retype Email</label>
                <input type="email" id="Re_Email" name="Re_Email" class="form-control" maxlength="75" required>
            </div>

            <div class="mb-3">
                <label for="FB_Account" class="form-label">Facebook Account</label>
                <input type="text" id="FB_Account" name="FB_Account" class="form-control" maxlength="150" required>
            </div>
 
            <div class="mb-3">
                <label for="Contact" class="form-label">Contact Number</label>
                <input type="tel" id="Contact" name="Contact" class="form-control" maxlength="11" pattern="\d{11}"
                    required>
            </div>

            <button type="submit" class="btn btn-danger w-100">Submit</button>
        </form>
    </div>

    <script>
        function capitalizeFirstLetter(input) {
            input.value = input.value
                .toLowerCase()
                .replace(/\b\w/g, char => char.toUpperCase());
        }
        function validateLetters(input) {
            const regex = /^[A-Za-z\s]*$/;
            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^A-Za-z\s]/g, '');
            }
        }
    </script>

</body>

</html>