<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        .w-85 {
            width: 85%;
        }

        .profile-header {
            top: -17px;
            background-color: #FEEE72;
            height: 150px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            position: relative;
        }

        .profile-header img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid rgb(224, 224, 224);
            position: absolute;
            bottom: -80%;
            background-color: rgb(255, 255, 255);
            left: 15%;
        }


        .profile-info {
            text-align: left;
            margin-top: 10px;
            margin-left: 35%;
            position: relative;
        }

        .profile-info h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .profile-info p {
            color: gray;
            margin: 5px 0;
        }

        .profile-info a {
            color: orange;
            text-decoration: underline;
            font-size: 14px;
            cursor: pointer;
        }

        .logout-button {
            margin-right: 5%;
            position: absolute;
            top: 0;
            right: 0;
            background-color: transparent;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            color: black;
            cursor: pointer;
            font-size: 14px;
        }

        .container {
            margin-top: 5%;
            width: 50%;
        }

        .edit-profile-form h2 {
            margin-bottom: 15px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .input-group {
            display: flex;
            align-items: center;
        }

        .input-group input {
            width: calc(100% - 30px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .input-group button {
            width: 30px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-left: none;
            padding: 8px;
            cursor: pointer;
            border-radius: 0 5px 5px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input-group .toggle-password, .input-group .edit-button {
            font-size: 14px;
            border-radius: 0 5px 5px 0;
        }

        .submit-button {
            margin-top: 5%;
            width: 100%;
            padding: 10px;
            background-color: #f0c040;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: black;
            font-size: 16px;
            margin-bottom: 5%;
        }

        .submit-button:hover {
            background-color: #e0b030;
        }
    </style>
</head>
<body>
    <div class="w-100 d-flex mt-4 flex-column align-items-center">
        <div class="w-85 text-black ">
            <h2>Profil</h2>
        </div>
    </div>
    <hr style="width:100%; height: 2px; z-index: -3; background-color: #0000004a;">
    <div class="profile-header">
        <img id="profile-image" src="{{ asset('images/profile-pic.png') }}" alt="Profile Picture">
    </div>
    <div class="profile-info">
        <h1>Micheline Glenesia</h1>
        <p>mimi123@gmail.com</p>
        <a href="#" id="change-profile-pic">Ubah Foto Profil</a>
        <input type="file" id="profile-pic-input" style="display:none;" accept="image/*">
        <button class="logout-button"><i class="bi bi-box-arrow-right"></i> Keluar</button>
    </div>
    <div class="container">
        <form class="edit-profile-form">
            <h2>Edit Profil</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-group">
                    <input type="text" id="username" name="username" value="itsmimi_">
                    <button type="button" class="edit-button">&#9998;</button>
                </div>
            </div>
            <h2>Ubah Password</h2>
            <div class="form-group">
                <label for="current-password">Password sekarang</label>
                <div class="input-group">
                    <input type="password" id="current-password" name="current-password" placeholder="Masukkan password sekarang">
                    <button type="button" class="toggle-password">&#128065;</button>
                </div>
            </div>
            <div class="form-group">
                <label for="new-password">Password baru</label>
                <div class="input-group">
                    <input type="password" id="new-password" name="new-password" placeholder="Masukkan password baru">
                    <button type="button" class="toggle-password">&#128065;</button>
                </div>
            </div>
            <button type="submit" class="submit-button">Simpan</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const togglePasswordButtons = document.querySelectorAll('.toggle-password');
            const changeProfilePicLink = document.getElementById('change-profile-pic');
            const profilePicInput = document.getElementById('profile-pic-input');
            const profileImage = document.getElementById('profile-image');

            togglePasswordButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const passwordField = this.previousElementSibling;
                    if (passwordField.type === 'password') {
                        passwordField.type = 'text';
                        this.innerHTML = '&#128065;';
                    } else {
                        passwordField.type = 'password';
                        this.innerHTML = '&#128065;';
                    }
                });
            });

            //tes

            changeProfilePicLink.addEventListener('click', function () {
                profilePicInput.click();
            });

            profilePicInput.addEventListener('change', function () {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        profileImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>
