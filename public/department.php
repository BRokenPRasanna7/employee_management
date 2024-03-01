<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department List</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-g8C/Z0bsyMPUjNSYlIqBZQHzFso4KmzXwejrl2WyzaA67jpPXOz9sSTCZ6zXxVaf" crossorigin="anonymous">

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
            margin-left: 420px;
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
            border: 1px solid #e6e5e5;
            height: 35px;
            margin-right: 67px;
            padding: 15px;
            background: transparent;
        }

        .dep-container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            margin-left: 425px;
            flex-wrap: wrap;
        }

        .dep-card {
            width: 182px;
            height: 75px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
            border: 1.5px solid #e6e5e5;
            border-radius: 3px;
            margin-bottom: 20px;
            margin: 5px;
            padding: 15px;
        }

        h6 {
            font-size: medium;
            margin: 2px;
            margin-left: 0;
            margin-top: 5px;
        }

        .dep-name {
            font-size: small;
        }

        .dep-date {
            font-size: xx-small;
            color: rgba(0, 0, 0, 0.5);
            font-weight: 600;
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
            cursor: pointer;
        }

        .add-dep {
            display: none;
            position: fixed;
            right: 450px;
            width: 400px;
            height: 250px;
            background-color: white;
            border: 1px solid #9292925b;
            border-radius: 3px;
            box-shadow: 0px 0px 10px 1px #c2c2c2af;
            bottom: 120px;
        }

        .add-dep-name {
            text-align: center;
        }

        #close {
            width: 15px;
            height: 12px;
            float: right;
            margin-top: -110px;
            cursor: pointer;
        }

        .add-dep input[type="text"] {
            border: 1.5px solid #dadada;
            border-radius: 3px;
            display: block;
            margin-bottom: 10px;
            padding: 10px;
            width: 100%;
        }

        .input-div {
            padding-left: 65px;
            padding-right: 75px;
        }

        label {
            font-size: x-small;
            font-weight: 600;
        }

        ::placeholder {
            color: #707070a9;
        }

        #plus {
            width: 8px;
            height: 8px;
            cursor: pointer;
        }

        #input-add-name {
            padding-left: 65px;
            padding-right: 75px;
            color: #3e79e5;
            font-size: x-small;
            font-weight: 600;
            cursor: pointer;
        }

        #add-btn {
            color: white;
            background-color: #3e79e5;
            border: 1px solid #3e78e5ec;
            border-radius: 5px;
            width: 260px;
            height: 40px;
            margin-left: 65px;
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

        .input-with-icon {
            position: relative;
        }

        .cancel-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: red;
        }
    </style>
</head>

<body>

    <div id="blur-div">
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

        <main>
            <div id="content">
                <h1>Departments</h1>
                <div class="search-div">
                    <h6><span id="count"></span> Departments</h6>
                    <input id="search" type="text" placeholder="&#xF002;  Search" style="font-family:Arial, FontAwesome" />
                </div>
            </div>

            <div class="dep-container" id="dep-container-div">
                <!-- <div class="dep-card">
                    <h6 class="dep-name">Engineering</h6>
                    <p class="dep-date">Created on 24 Aug, 2021</p>
                </div> -->
            </div>
            <div id="overlay"></div>
            <div id="add">
                <img id="add-img" src="950764-removebg-preview.png" alt="">
            </div>
        </main>
    </div>

    <div class="add-dep">
        <i id="close" class="fa fa-times cancel-icon" aria-hidden="true"></i>
        <form action="" onsubmit="addDepartment()">
            <h2 class="add-dep-name">Add New Department</h2>

            <div class="input-div">
                <label id="input-label" for="department">Department Name</label> <br>
                <div id="input-container" class="input-container">
                    <div class="input-with-icon">
                        <input type="text" id="department" name="department" placeholder="Enter Department Name" required>
                    </div>
                </div>
            </div>
            <p id="input-add-name"><img id="plus" src="small-add.png" alt=""> Add Department</p>
            <br>
            <button id="add-btn" type="submit">Add Department</button>
        </form>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let addButton = document.getElementById("input-add-name");
            let inputContainer = document.getElementById("input-container");

            addButton.addEventListener("click", function() {
                let newInputContainer = document.createElement("div");
                newInputContainer.className = "input-with-icon";
                newInputContainer.innerHTML = `
            <input type="text" placeholder="Enter Department Name" required>
            <i class="fa fa-times cancel-icon" aria-hidden="true"></i>
        `;
                inputContainer.appendChild(newInputContainer);

                let cancelIcons = document.querySelectorAll(".cancel-icon");
                cancelIcons.forEach(function(icon) {
                    icon.addEventListener("click", function() {
                        inputContainer.removeChild(newInputContainer);
                    });
                });
            });
        });




        let addImg = document.getElementById('add-img');
        let addDep = document.querySelector('.add-dep');
        let closebtn = document.getElementById('close');

        addImg.addEventListener("click", function() {
            addDep.style.display = 'block';
            document.getElementById("blur-div").style.filter = "blur(8px)";
        });

        closebtn.addEventListener("click", function() {
            addDep.style.display = 'none';
            document.getElementById("blur-div").style.filter = "none";
        });


        let departmentDetails;

        function listAllDepartment() {
            let depContainer = document.getElementById('dep-container-div');
            // let departCount = document.getElementById();

            const url = 'http://localhost:8000/api/departments/list';
            const token = `2|ra6uSbGyGShBuQQqcihCEQrywyXA2VjlMBbOwQ3L7994c78f`;

            fetch(url, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + token,
                    }
                })
                .then(res => {
                    if (!res.ok) {
                        throw new Error(`${res.status}`);
                    } else {
                        return res.json();
                    }
                }).then(data => {
                    departmentDetails = data;
                    let count = departmentDetails.length;

                    let depCard = '';
                    data.forEach(deparment => {
                        depCard += `<div class="dep-card">
                    <h6 class="dep-name">${deparment.name}</h6>
                    <p class="dep-date">'Created on ${deparment.formattedCreatedAt}'</p>
                </div>`;
                        depContainer.innerHTML = depCard;
                        let departmentCount = document.getElementById('count');
                        departmentCount.textContent = count;
                    })

                })
                .catch(error => {
                    console.log(error);
                })

        };

        listAllDepartment();


        function addDepartment() {
            event.preventDefault();
            const name = document.getElementById('department').value;
            console.log(name);
            const url  = 'http://localhost:8000/api/departments/create';
            const token = `2|ra6uSbGyGShBuQQqcihCEQrywyXA2VjlMBbOwQ3L7994c78f`;

            const fetchData = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + token,
                },
                body: JSON.stringify({
                    "department": name,
                }),
            };

            fetch(url, fetchData)
                .then(response => {
                if (!response.ok) {
                    throw new Error(`${response.status}`);
                } else {
                    return response.json();
                }
                })
                .then(data => {
                    listAllDepartment();
                    console.log('Department added successfully:', data);
                })
                .catch(error => {
                    console.error('Error adding department:', error);
                });
        }
        listAllDepartment();

    </script>
</body>

</html>
