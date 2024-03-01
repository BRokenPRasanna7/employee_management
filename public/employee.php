<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Rubik", sans-serif;
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
            height: 150%;
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

        .search-div {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        #search {
            border-radius: 50px;
            border: 1.5px solid #ededed;
            height: 35px;
            margin-right: 67px;
            padding: 15px;
            background: transparent;
        }

        .emp-card {
            width: 175px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            padding: 15px;
            border: 1.5px solid #e6e5e5;
            border-radius: 3px;
            margin-bottom: 20px;
            margin: 5px;
            cursor: pointer;
        }

        .emp-pic {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        h6 {
            font-size: medium;
            margin: 2px;
            margin-top: 5px;
        }

        .emp-team {
            color: #535353;
            background-color: #fafafa;
            border-radius: 50px;
            padding: 8px;
            font-size: small;
            width: 95px;
            margin: 0;
            margin-top: 10px;
            text-align: center;
        }

        hr {
            border-top: 1px solid #e6e5e5;
            border-bottom: 1px solid #e6e5e5;
            /* margin: 20px 0; */
            width: 125px;
        }

        .emp-contact {
            /* border: 1.5px solid #3e79e5; */
            color: #3e79e5;
            text-decoration: none;
            /* border-radius: 45px; */
            /* padding: 5px; */
            font-size: small;
        }

        .mail {
            width: 20px;
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

        .emp-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-left: 400px;
            margin-right: 20px;
            flex-wrap: wrap;
        }

        #add {
            position: fixed;
            bottom: 10px;
            right: 120px;
            box-shadow: 0px 0px 10px 1px #333333b4;
            border-radius: 50%;
            height: 50px;
        }

        #add-img {
            width: 50px;
            height: 50px;
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
                <a href="employee.php">My Employees</a>
            </li>
            <li>
                <img id="side-img" src="settings-512.webp" alt="Departments">
                <a href="department.php">Departments</a>
            </li>
        </ul>
    </div>


    <div id="content">
        <h1>My Employees</h1>
        <div class="search-div">
            <h6><span id="count"></span> Employees</h6>
            <input id="search" type="text" placeholder="&#xF002;  Search" style="font-family:Arial, FontAwesome" />
        </div>
    </div>

    <div class="emp-container" id="emp-container-div">
    </div>

    <a href="add-employee.php">
        <div id="add">
            <img id="add-img" src="950764-removebg-preview.png" alt="">
        </div>
    </a>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("down").addEventListener("click", function() {
                var dropdownContent = document.getElementById("dropdown-content");
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("down").addEventListener("click", function() {
                var dropdownContent = document.getElementById("dropdown-content");
                dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
            });
        });

        // Below the code for fetch api
        let employeeDetails;

        function listAllEmployee() {
            const url = 'http://localhost:8000/api/employees/list';
            const token = `2|ra6uSbGyGShBuQQqcihCEQrywyXA2VjlMBbOwQ3L7994c78f`;

            fetch(url, {
                    method: "GET",
                    headers: {
                        "Content-Type": "application/json",
                        'Authorization': 'Bearer ' + token,
                    }
                })
                .then(res => {
                    if (!res.ok) {
                        throw new Error(`${res.status}`);
                    } else {
                        return res.json();
                    }
                })
                .then(data => {
                    employeeDetails = data;
                    let count = employeeDetails.length;

                    // display the employee details using forEach
                    employeeDetails.forEach(employee => {

                        let empContainer = document.getElementById('emp-container-div');
                        let empCardDiv = document.createElement('div');
                        empCardDiv.setAttribute('class', 'emp-card');
                        let imgTag = document.createElement('img');
                        imgTag.setAttribute('class', 'emp-pic');
                        imgTag.setAttribute('src', 'winnie.jpg');
                        let hTag = document.createElement('h6');
                        hTag.textContent = employee.name;
                        let pTag = document.createElement('p');
                        pTag.setAttribute('class', 'emp-team');
                        pTag.textContent = employee.department;
                        let hrTag = document.createElement('hr');

                        // Append the child one
                        empCardDiv.append(imgTag);
                        empCardDiv.append(hTag);
                        empCardDiv.append(pTag);
                        empCardDiv.append(hrTag);

                        let contactDiv = document.createElement('div');
                        contactDiv.setAttribute('class', 'contact');
                        let contactContainerDiv = document.createElement('div');
                        contactContainerDiv.setAttribute('class', 'contact-container');
                        let img2 = document.createElement('img');
                        img2.setAttribute('class', 'mail');
                        img2.setAttribute('src', '2754-removebg-preview.png');
                        let a = document.createElement('a');
                        a.setAttribute('class', 'emp-contact');
                        a.setAttribute('href', '');
                        a.textContent = 'Mail';

                        // Append the child elements
                        contactContainerDiv.append(img2);
                        contactContainerDiv.append(a);
                        contactDiv.append(contactContainerDiv);

                        let contactContainerDiv2 = document.createElement('div');
                        contactContainerDiv2.setAttribute('class', 'contact-container');
                        let callImg = document.createElement('img');
                        callImg.setAttribute('class', 'mail');
                        callImg.setAttribute('src', 'phone-removebg-preview.png');
                        let a2 = document.createElement('a');
                        a2.setAttribute('class', 'emp-contact');
                        a2.setAttribute('href', '');
                        a2.textContent = 'Mail';

                        let employeeCount = document.getElementById('count');
                        employeeCount.textContent = count;

                        contactContainerDiv2.append(callImg);
                        contactContainerDiv2.append(a2);
                        contactDiv.append(contactContainerDiv2);
                        empCardDiv.append(contactDiv);
                        empContainer.append(empCardDiv);

                        // Add click event listener to the emp-card div
                        empCardDiv.addEventListener('click', () => {
                            localStorage.setItem('employeeId', employee.id);
                            window.location.href = 'employee-view.php';
                        });
                    });
                })
                .catch(error => {
                    console.log(error);
                });
        }
        listAllEmployee();
    </script>
</body>

</html>
