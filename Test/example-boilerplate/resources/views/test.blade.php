<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click Next</title>
    <!-- ========= CSS =========-->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --body-color: #E4E9E7;
            --sidebar-color: #FFF;
            --primary-color: #695CEF;
            --primary-color-light: #F6F5FF;
            --toggle-color: #DDD;
            --text-color: #707070;

            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.4s ease;
            --tran-05: all 0.5s ease;

        }

        body {
            height: 100vh;
            background: var(--body-color);
        }

        .sidebar .text {
            font-size: 16px;
            font-weight: 500;
            color: var(--text-color);
        }

        .sidebar .image {
            min-width: 60px;
            display: flex;
            align-items: center;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background: var(--sidebar-color);
        }

        .sidebar li {
            height: 50px;
            margin-top: 10px;
            list-style: none;
            display: flex;
            align-items: center;

        }

        .sidebar li .icon {
            color: var(--text-color);
        }

        .sidebar li .icon,
        .sidebar li .text {
            font-size: 20px;
        }

        .sidebar header {
            position: relative;
        }

        .sidebar .image-txet img {
            width: 40px;
            border-radius: 6px;
        }

        .sidebar header .image-text {
            display: flex;
            align-items: center;
        }

        .sidebar .image-text .header-text {
            display: flex;
            flex-direction: column;
        }

        .header-text .name {
            font-weight: 600;
        }

        .header-text .profession {
            font-weight: 600;
        }

        .sidebar header .toggle {
            position: absolute;
            top: 50%;
            left: -25px;
            transform: translateY(-50%);
            height: 25px;
            width: 25px;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: var(--sidebar-color);
            font-size: 22px;

        }

        .sidebar li a {
            height: 100%;
            display: flex;
            align-items: center;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <nav class = "sidebar">
        <header>
            <div class="image-txet">
                <span class="image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG5835zx93k0dPd26a99XmjfRcOfyBPSGmHf2iEGilow&s"
                        alt="logo">
                </span>
                <div class="text header-text">
                    <span class="name">CodingTest</span>
                    <span class="profession">Web Develeoper</span>
                </div>
            </div>
            <box-icon name='chevron-right toggle'></box-icon>
        </header>
        <div class="manu-bar">
            <div class="menu">
                <li class="nav-link">
                    <i class="bx bx-home-alt icon"></i>
                    <span class="text nav-text">Dashboard</span>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>
