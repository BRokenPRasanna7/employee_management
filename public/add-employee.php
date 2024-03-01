<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title>Add Employee</title>

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
            width: 10px;
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

        .main-container {
            margin-left: 425px;
        }

        #img-upload {
            cursor: pointer;
            margin-left: 300px;
            border-radius: 50%;
            width: 100px;
            height: 100px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 700px;
        }

        .form-row {
            display: flex;
            margin-bottom: 10px;
        }

        .form-group {
            flex: 1;
            margin-right: 35px;
        }

        .form-group:last-child {
            margin-right: 0;
        }

        label {
            margin-bottom: 5px;
            font-size: 11px;
            font-weight: 600;
            color: #333333ee;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1.5px solid #e6e5e5;
            border-radius: 2.5px;
            box-sizing: border-box;
            height: 40px;
        }

        select {
            height: 40px;
            color: #999;
        }

        select option {
            color: #333333ee;
        }

        textarea {
            height: 100px;
        }

        button {
            background-color: #3e79e5;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 180px;
            width: 42%;
        }

        button:hover {
            background-color: #2963d0;
        }

        ::placeholder {
            padding: 5px;
            color: #999;
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
                <a href="employee.php">My Employees</a>
            </li>
            <li>
                <img id="side-img" src="settings-512.webp" alt="Departments">
                <a href="department.php">Departments</a>
            </li>
        </ul>
    </div>

    <div class="back-div" id="back-div">
        <i id="back-icon" class="fa fa-angle-left" aria-hidden="true"></i>
        <p id="back"> Back
        </p>
    </div>

    <div class="main-container">
        <form onsubmit="createEmployee()" method="POST">
            <div class="form-row">
                <label for="upload-file">
                    <img id="img-upload" src="upload-img.png" alt="Upload Image">
                </label>
                <input id="upload-file" type="file" accept="image/*" style="display: none;">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="employee-name">Employee Name</label>
                    <input type="text" id="employee-name" name="employee-name" placeholder="Enter Employee Name">
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <select id="department" name="department">
                        <option value="">Choose Department</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                    <label for="contact-number">Contact Number</label>
                    <input type="tel" id="contact-number" name="contact-number" placeholder="Enter Contact Number">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="dob">Date of birth</label>
                    <input type="date" id="dob" name="dob">
                </div>
                <div class="form-group">
                    <label for="blood-group">Blood Group</label>
                    <input type="text" id="blood-group" name="blood-group" placeholder="Enter Blood Group">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group"></div>
            </div>
            <button type="submit">Add Employee</button>
        </form>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("back-div").addEventListener("click", function() {
                window.location.href = "employee.php";
            });
        });

        function createEmployee() {
            event.preventDefault();
            const url = 'http://localhost:8000/api/employees/create';

            const nameInput = document.getElementById('employee-name').value;
            const emailInput = document.getElementById('email').value;
            const dobInput = document.getElementById('dob').value;
            const addressInput = document.getElementById('address').value;
            const deptInput = document.getElementById('department').value;
            const contactInput = document.getElementById('contact-number').value;
            const bloodInput = document.getElementById('blood-group').value;

            const data = {
                name: nameInput,
                department: deptInput, 
                email: emailInput,
                contact_number: contactInput,
                dob: dobInput,
                blood_group: bloodInput,
                address: addressInput
            };
            console.log(data);
            const token = `2|ra6uSbGyGShBuQQqcihCEQrywyXA2VjlMBbOwQ3L7994c78f`;

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + token,
                    },
                    body: JSON.stringify(data)
                }).then(res => {
                    if (!res.ok) {
                        throw new Error(`HTTP ERROR ! ${res.status}`);
                    } else {
                        return res.json();
                    }
                })
                .then(data => {
                    console.log(data);
                    window.location.href = 'employee.php';
                })
                .catch(error => {
                    console.log(error);
                })
        }

        const token = sessionStorage.getItem('token');

        function dropdown() {
            const url = 'http://localhost:8000/api/departments/dropdown';
            let selectTag = document.getElementById('department');
            fetch(url, {
                    method: 'GET',
                    headers: {
                        'Conten-Type': 'application/json',
                        'Authorization': 'Bearer ' + token,
                    }
                }).then(res => {
                    if (res.ok) {
                        return res.json();
                    }
                })
                .then(response => {
                    console.log(response.data);
                    const departmentNames = Object.values(response.data);
                    console.log(departmentNames);
                    departmentNames.forEach(name => {
                        const option = document.createElement('option');
                        option.value = name;
                        option.textContent = name;
                        selectTag.appendChild(option);
                    });

                })
        }
        dropdown();
    </script>
</body>

</html>