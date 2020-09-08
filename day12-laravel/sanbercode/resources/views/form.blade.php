<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <h1>Buat Accoount Baru!</h1>
    <h3>Sign Upp Form </h3>

    <form action="/welcome" method="POST">
        @csrf
        <label>First Name</label> <br>
        <input type="text" name="nama">
        <br> <br>
        <label>last Name</label> <br>
        <input type="text" name="last_name">
        {{-- <input type="submit" value="masuk"> --}}

        {{-- sini --}}
        <div>
                <p>Gender</p>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
        </div>
        <br>
        <div>
                <label for="personality">personality</label> <br>
                <select name="personality" id="personality">
                    <option value="volvo">Indoensia</option>
                    <option value="saab">Malaysia</option>
                    <option value="opel">Singapura</option>
                </select>
        </div>
    
        <br>
        <div>
                <p>Language Spoken</p>
                <input type="checkbox" name="indonesia">
                <label>bahasa Indonesia</label><br>
                <input type="checkbox" name="English">
                <label>Inggris</label> <br>
                <input type="checkbox" name="Other">
                <label>other</label>
        </div>
        <br>
        <div>
            <p>bio:</p>
                <textarea name="bio" rows="10" cols="50"></textarea>     
        </div>
        <br>
                <input type="submit" value="masuk">
    </form>
</body>
</html>