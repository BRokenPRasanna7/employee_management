<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee View</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 20px;
            background-color: rgb(255, 255, 255);
            height: 60px;
        }

        .head {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            width: 300px;
        }

        .profile {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            width: 160px;
            margin-right: 50px;
        }

        h1 {
            margin-bottom: 5px;
        }

        #logo {
            width: 30px;
            height: 30px;
        }

        #prof-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        #gm {
            font-size: xx-small;
            margin: 2px;
        }

        #userName {
            font-size: smaller;
            margin: 2px;
        }

        #sidebar {
            width: 350px;
            height: 100%;
            background-color: white;
            position: absolute;
            left: 0;
            top: 63px;
            bottom: 0;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 10px;
            margin: 0;

        }

        #sidebar li {
            padding: 10px;
            padding-left: 50px;
            align-items: center;
        }

        #sidebar li:hover {
            background-color: #f7f8fb;
            border-radius: 30px;
        }

        #sidebar li a {
            text-decoration: none;
            color: #333;
        }

        #content {
            margin-left: 445px;
            padding: 10px;
        }

        #side-img {
            width: 20px;
            height: 20px;
        }

        #sidebar li img {
            margin-right: 10px;
        }

        .back-div {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        #back {
            margin-left: 5px;
            text-decoration: none;
            color: rgb(0, 119, 223);
            font-size: small;
            cursor: pointer;
        }

        #back-icon {
            margin-left: 425px;
            font-size: 25px;
            color: rgb(0, 119, 223);
            cursor: pointer;
        }

        .employee-container {
            margin-left: 420px;
            width: 61%;
            margin-top: 10px;
        }

        .employee-content {
            display: flex;
            flex-direction: row;
            background-color: white;
            border: 1.5px solid rgb(230, 230, 230);
            border-radius: 5px;
            padding: 20px;
            height: 160px;
        }

        .emp-image {
            padding: 5px;
            width: 95px;
            height: 95px;
            border-radius: 150px;
        }

        .main-content {
            margin-left: 20px;
        }

        .content {
            display: flex;
            flex-direction: row;
            width: 620px;
            justify-content: space-between;
            align-items: center;
        }

        .emp-name {
            margin-bottom: 0;
            margin-top: 0;
            font-size: x-large;
        }

        .emp-team {
            color: #535353b8;
            background-color: #f9f9f9;
            border-radius: 50px;
            padding: 8px;
            font-size: x-small;
            width: 92px;
            margin: 0;
            font-weight: 600;
            text-align: center;
        }

        .emp-contact {
            /* border: 1.5px solid #3e79e5; */
            color: #3e79e5;
            text-decoration: none;
            /* border-radius: 45px; */
            /* padding: 5px; */
            font-size: small;
        }

        .employee-contact {
            /* border: 1.5px solid #3e79e5; */
            color: #00000095;
            text-decoration: none;
            /* border-radius: 45px; */
            padding: 5px;
            font-size: small;
        }

        .mail {
            width: 15px;
            height: 13px;
            margin-right: 3px;
            margin-bottom: -2px;
        }

        .contact {
            display: flex;
            flex-direction: row;
            padding: 5px;
        }

        .contact-container {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            border: 1.5px solid #3e79e5;
            color: #3e79e5;
            text-decoration: none;
            border-radius: 45px;
            padding: 10px;
            font-size: small;
            height: 25px;
            width: 65px;
            margin: 1.5px;
        }

        .bottom-content {
            color: #0000006b;
            display: flex;
            flex-direction: row;
            align-items: center;
            height: 45px;
        }

        .emp-mail {
            width: 25px;
            height: 15px;
            margin-bottom: -3px;
        }

        hr {
            border-top: 1px solid #e6e5e5;
            border-bottom: 1px solid #e6e5e5;
        }

        .basic-content {
            background-color: white;
            border: 1.5px solid rgb(230, 230, 230);
            border-radius: 5px;
            padding: 20px;
            height: 250px;
        }

        h4 {
            margin: 0;
        }

        .info {
            display: flex;
            flex-direction: row;
        }

        .details {
            color: #717171;
            font-size: small;
        }

        .value {
            color: #000000c0;
            margin-left: 125px;
            font-size: small;
            font-weight: 600;
        }

        #down {
            width: 13px;
            height: 13px;
            margin-top: 17px;
            margin-left: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fefefe;
            min-width: 110px;
            z-index: 1;
            width: 160px;
            right: 60px;
            border: 1.5px solid #e6e5e5;
            border-radius: 5px;
            font-size: small;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-img {
            width: 20px;
            height: 20px;
        }

        .img-name {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <header>
        <div class="head">
            <img id="logo" src="login-img.png" alt="">
            <h3>Employee Management</h3>
        </div>
        <div class="profile">
            <img id="prof-img" src="hattie.jpg" alt="">
            <div class="dropdown">
                <div class="dropdown-header" id="dropdown-header" style="display: flex; flex-direction: row;">
                    <div>
                        <p id="gm">Good Morning,</p>
                        <p id="userName">Hattie Moreno</p>
                    </div>
                    <img id="down" src="down-arrow-vector-icon-isolated-600nw-1187766172-removebg-preview.png" alt="">
                </div>
                <div class="dropdown-content" id="dropdown-content">
                    <div class="img-name">
                        <img style="margin-left: 15px;" class="dropdown-img" src="user.png" alt="">
                        <a href="#">My Profile</a>
                    </div>
                    <hr>
                    <div class="img-name">
                        <img class="dropdown-img" src="logout.png" alt="">
                        <a href="#">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="sidebar">
        <ul>
            <li>
                <img id="side-img" src="login-img.png" alt="My Employees">
                <a href="index.html">My Employees</a>
            </li>
            <li>
                <img id="side-img" src="settings-512.webp" alt="Departments">
                <a href="department.html">Departments</a>
            </li>
        </ul>
    </div>

    <div class="back-div" id="back-div">
        <i id="back-icon" class="fa fa-angle-left" aria-hidden="true"></i>
        <p id="back"> Back
        </p>
    </div>


    <div class="employee-container" id="emp-container">

    </div>


    <script>
        document.getElementById("back-div").addEventListener("click", function() {
            window.location.href = "employee.php";
        });

        // below the code for fetch api
        let token = '2|ra6uSbGyGShBuQQqcihCEQrywyXA2VjlMBbOwQ3L7994c78f';
        async function showEmployee() {
            let empContainer = document.getElementById('emp-container');
            try {
                const response = await fetch('http://localhost:8000/api/employees/show', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + token,
                    },
                    body: JSON.stringify({
                        id: localStorage.getItem('employeeId'),
                    }),
                });

                if (response.ok) {
                    const employee = await response.json();
                    console.log(employee.data);
                    const employeeView = `<div class="employee-content">
    <div>
        <img class="emp-image" src="tillie.jpg" alt="">
    </div>
    <div class="main-content">
        <div class="content">
            <div>
                <h3 class="emp-name">${employee.data.name}</h3>
            </div>
            <div class="contact">
                <div class="contact-container">
                    <img class="mail" src="2754-removebg-preview.png" />
                    <a class="emp-contact" href="">Mail</a>
                </div>

                <div class="contact-container">
                    <img class="mail" src="phone-removebg-preview.png" />
                    <a class="emp-contact" href="">Call</a>
                </div>
            </div>
        </div>
        <p class="emp-team">${employee.data.department}</p>
        <hr>
        <div class="bottom-content">
            <div style="padding-right: 50px;">
                <img class="emp-mail" src="mail-grey-removebg-preview.png" />
                <a class="employee-contact" href="">${employee.data.email}</a>
            </div>
            <div>
                <img class="mail" src="phone-call-icon-256x256-7yhsea5m-removebg-preview.png" />
                <a class="employee-contact" href="">${employee.data.contact_number}</a>
            </div>
        </div>
    </div>
</div>
<div class="basic-content">
    <h4>Basic Information</h4>
    <hr>

    <div class="info">
        <div>
            <p class="details">Date of birth</p>
            <p class="details">blood group</p>
            <p class="details">Address</p>
        </div>
        <div>
            <p class="value">${employee.data.dob}</p>
            <p class="value">${employee.data.blood_group}</p>
            <p class="value">${employee.data.address}<br>
            </p>
        </div>
    </div>
</div>`;
                    empContainer.innerHTML = employeeView;

                } else {
                    throw new Error('Failed to retrieve employee.');
                }
            } catch (error) {
                console.error(error);
            }
        }

        showEmployee();
    </script>

</body>

</html>
