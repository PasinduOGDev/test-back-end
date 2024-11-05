<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Backend</title>
</head>

<body>

    <form id="registerForm" enctype="multipart/form-data">

        <input type="text" name="username" placeholder="User Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <!-- <input type="file" name="profile_image" accept="image/*" required> -->
        <button type="button" onclick="register();">Register</button>

    </form>
    <div id="message"></div>

</body>

</html>