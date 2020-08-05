<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hari 1</title>
</head>

<body>
    <form action="/welcome" method="POST">
        @csrf
        <h1>Buat Account Baru!</h1>
        <p><b>Sign Up Form</b></p>

        <label for="nama1">First name:</label>
        <br>
        <input type="text" id="nama1" name="nama1">
        <br>
        <label for="nama2">Last name:</label>
        <br>
        <input type="text" id="nama2" name="nama2">
        <br><br>
        <label for="gender">Gender:</label><br>
        <input type="radio" name="gander" id="gender" value="Male">Male <br>
        <input type="radio" name="gander" id="gender" value="Female">Female <br>
        <input type="radio" name="gander" id="gender" value="Other">Other <br>

        <p>Nationality:</p>
        <select name="negara" id="negara">
            <option value="indonesia">indonesia</option>
            <option value="malaysia">malaysia</option>
            <option value="thailand">thailand</option>
            <option value="brunei">brunei</option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" name="lag" value="indonesia">Bahasa indonesia <br>
        <input type="checkbox" name="lag" value="english">english <br>
        <input type="checkbox" name="lag" value="Other">Other <br>

        <p>Bio:</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>

</body>

</html>