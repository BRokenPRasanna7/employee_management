<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
</head>
<body>
    <div class="container">
        <img src="login-img.png" alt="">
        <h2>Employee Management</h2>
        <hr>
        <form action="#" onsubmit="login()">
            <h1>Login</h1>
            <p>Enter you credentials to login.</p> <br>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Email Address" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>

            <br><br>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>

function login() {
            event.preventDefault();
            const url = 'http://localhost:8000/api/login';

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;


            const data = {
                email: email,
                password: password,
            }
            console.log(data);

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data),
                })
                .then(res => {
                    if (res.ok) {
                        return res.json();
                    }
                })
                .then(data => {
                    sessionStorage.setItem('token', data.data.token);
                    console.log(data.data.token);
                    window.location.href = 'employee.php';
                })
                .catch(error => {
                    console.error(error);
                });
        }

    </script>


</body>
</html>
