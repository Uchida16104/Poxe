<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-38606SS5F6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
     
      gtag('config', 'G-38606SS5F6');
    </script>
    <script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/31566d9c7185e.js" data-cmp-host="a.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="16"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <script>
      
        function addUser() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            if (username && password) {
                const users = JSON.parse(localStorage.getItem('users')) || [];
                users.push({ username, password });
                localStorage.setItem('users', JSON.stringify(users));
                renderUserList();
            } else {
                alert('Please enter username and password.');
            }
        }

        function renderUserList() {
            const users = JSON.parse(localStorage.getItem('users')) || [];
            const userList = document.getElementById('userList');
            userList.innerHTML = '';
            users.forEach((user, index) => {
                const li = document.createElement('li');
                li.textContent = `username: ${user.username}, password: ${user.password}`;
                const deleteBtn = document.createElement('button');
                deleteBtn.textContent = 'delete';
                deleteBtn.onclick = () => deleteUser(index);
                li.appendChild(deleteBtn);
                userList.appendChild(li);
            });
        }

        function deleteUser(index) {
            const users = JSON.parse(localStorage.getItem('users')) || [];
            users.splice(index, 1);
            localStorage.setItem('users', JSON.stringify(users));
            renderUserList();
        }

        window.onload = () => {
            renderUserList();
        };
    </script>
</head>
<body>
    <h1>User Control Panel</h1>
    <button onclick="location.href='/'">The page to be entered</button>
    <button onclick="location.href='https://uchida16104.github.io/Password-Maker-for-Web/'">Create username or password</button>
    <form onsubmit="addUser(); return false;">
        <label for="username">username:</label>
        <input type="text" id="username" required>
        <br>
        <label for="password">password:</label>
        <input type="password" id="password" required>
        <br>
        <button type="submit">Add user</button>
    </form>
    
    <h2>Registered users list</h2>
    <ul id="userList"></ul>
</body>
</html>
