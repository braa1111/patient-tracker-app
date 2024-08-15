<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/dropdwon.css">
  <title>Home Page</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
:root {
    --primary-color: #2BACBF;
    --primary-color: #2BACBF;
    --primary-color: #2BACBF;
    --primary-color-dark: #0d846c;
    --primary-color-light: #e9f7f7;
    --secondary-color-dark: #11856d;
    --text-dark: #333333;
    --text-light: #767268;
    --white: #ffffff;
    --max-width: 1200px;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

.section__container {
  max-width: var(--max-width);
  margin: auto;
  padding: 4rem 1rem;
}

.section__header {
  margin-bottom: 0.5rem;
  font-size: 2rem;
  font-weight: 600;
  color: var(--text-dark);
}

html,
body {
    font-family: "Poppins", sans-serif;
    background-color: #f0f2f5;
    scroll-behavior: smooth;
}

header {
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.737), rgba(1, 0, 0, 0.735)), url("head.jpg");
    color: var(--white);
    background-position: center;
    background-size: cover;
    padding: 2rem 0;
}

.nav__container {
    max-width: var(--max-width);
    margin: auto;
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.nav__logo {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--white);
}

.nav__logo span {
    color: var(--primary-color);
}

.nav__links {
    list-style: none;
    display: flex;
    gap: 2rem;
}

.link a {
    padding: 0.5rem;
    color: var(--primary-color-light);
    transition: color 0.3s;
}

.link a:hover {
    color: var(--primary-color);
}

.profile {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.notification .icon {
    font-size: 24px;
    color: rgba(255, 255, 255, 0.8);
    transition: color 0.3s;
}

.notification:hover {
    color: var(--primary-color-dark);
}

.greeting {
    color: var(--white);
}

.greeting h1 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.greeting p {
    font-size: 0.75rem;
}

.profile-photo {
    display: flex;
    align-items: center;

    padding: 7px 7px;
    border-radius: 100%;
    transition: 0.3s;
    cursor: pointer;
}

.profile-photo:hover {
    background-color: var(--primary-color);
}

.patient-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

    .header__container {
      display: flex;
      align-items: center;
      gap: 5rem;
    }

    .header__container h1 {
      margin-bottom: 1rem;
      max-width: 800px;
      font-size: 3.5rem;
      line-height: 4rem;
      color: var(--white);
    }

    .header__container p {
      margin-bottom: 2rem;
      max-width: 600px;
      color: var(--primary-color-light);
    }


    .notifications-section {
      background: #ffffff;
      padding: 40px;
      margin: 20px auto;
      margin-top: 80px;
      max-width: 1200px;
      border-radius: 8px;
      box-shadow: 4px 8px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .notifications-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .notifications-title {
      font-size: 28px;
      color: #333;
      font-weight: bold;
    }

    .mark-all-read {
      color: var(--primary-color);
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      transition: color 0.3s;
    }

    .mark-all-read:hover {
      color: var(--primary-color-dark);
    }

    .notification-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .notification-item {
      background: var(--primary-color-light);
      border: 2px solid var(--primary-color-light);
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s, transform 0.3s;
    }

    .notification-item:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }

    .notification-item h4 {
      margin: 0 0 10px;
      font-size: 18px;
      color: #333;
    }

    .notification-item p {
      font-size: 16px;
      color: #555;
      margin: 0;
    }

    .notification-item .timestamp {
      font-size: 14px;
      color: #888;
      margin-top: 10px;
      text-align: right;
    }

    .recent-activity-section {
      background: #ffffff;
      padding: 40px;
      margin: 40px auto;
      margin-top: 80px;
      max-width: 1200px;
      border-radius: 8px;
      box-shadow: 4px 8px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .recent-activity-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .recent-activity-title {
      font-size: 28px;
      color: #333;
      font-weight: bold;
    }

    .see-all-link {
      color: var(--primary-color);
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      transition: color 0.3s;
    }

    .see-all-link:hover {
      color: var(--primary-color-dark);
    }

    .activity-boxes {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .activity-box {
      background: #ffffff;
      border: 3px solid var(--primary-color-light);
      border-radius: 8px;
      padding: 20px;
      flex: 1;
      min-width: 250px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s, transform 0.3s;
    }

    .activity-box:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transform: translateY(-5px);
    }

    .activity-box h4 {
      margin: 0;
      font-size: 18px;
      color: #333;
    }

    .activity-box p {
      font-size: 16px;
      color: #555;
      margin: 10px 0 0;
    }

    .activity-box .timestamp {
      font-size: 14px;
      color: #888;
      margin-top: 10px;
    }

    .section-title {
      font-size: 36px;
      color: var(--text-dark);
      margin-bottom: 30px;
      text-align: center;
      font-weight: bold;
    }

    .section-paragraph {
      font-size: 18px;
      color: var(--text-light);
      max-width: 800px;
      text-align: center;
      margin-bottom: 30px;
    }

    .circle-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }

    .circle {
      width: 250px;
      height: 250px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      background-size: cover;
      background-position: center;
      color: white;
      font-size: 20px;
      margin: 20px;
      text-align: center;
      position: relative;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    .circle h3 {
      margin: 0;
      font-size: 24px;
    }

    .description {
      font-size: 16px;
      margin-top: 10px;
    }

    .circle:hover {
      transform: scale(1.2);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      background-color: rgba(56, 142, 60, 0.7);
    }

    .history {
      background-image: linear-gradient(to right,
          rgba(0, 0, 0, 0.737),
          rgba(1, 0, 0, 0.735)),
        url("head.jpg");
    }

    .medical-record {
      background-image: linear-gradient(to right,
          rgba(0, 0, 0, 0.737),
          rgba(1, 0, 0, 0.735)),
        url("head.jpg");
    }

    .appointments {
      background-image: linear-gradient(to right,
          rgba(0, 0, 0, 0.737),
          rgba(1, 0, 0, 0.735)),
        url("head.jpg");
    }

    .messages {
      background-image: linear-gradient(to right,
          rgba(0, 0, 0, 0.737),
          rgba(1, 0, 0, 0.735)),
        url("head.jpg");
    }

    .footer {
      background-color: var(--primary-color-light);
    }

    .footer__container {
      display: grid;
      grid-template-columns: 400px repeat(3, 1fr);
      gap: 2rem;
    }

    .footer__col h3 {
      margin-bottom: 1rem;
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    .footer__col h3 span {
      color: var(--secondary-color-dark);
    }

    .footer__col h4 {
      margin-bottom: 1rem;
      font-size: 1.2rem;
      font-weight: 600;
      color: var(--primary-color);
    }

    .footer__col p {
      margin-bottom: 1rem;
      color: var(--text-dark);
      cursor: pointer;
      transition: 0.3s;
    }

    .footer__col p:hover {
      color: var(--primary-color);
    }

    .footer__col i {
      color: var(--primary-color);
    }

    .footer__bar {
      background-color: var(--primary-color);
    }

    .footer__bar__content {
      max-width: var(--max-width);
      margin: auto;
      padding: 0.5rem 1rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
    }

    .footer__bar__content p {
      font-size: 0.8rem;
      color: var(--white);
    }

    .footer__socials {
      display: flex;
      align-items: center;
      gap: 1rem;
      font-size: 1rem;
      color: var(--white);
      cursor: pointer;
    }
    .login
    {
      text-decoration: none;
      color: #e9f7f7;
    }
    h3
    {
        font-size: 16px;
        color:#e9f7f7;
    }
  </style>
</head>
<body>
<header>
    <nav class="section__container nav__container">
      <div class="nav__logo">Patient<span>Tracker</span></div>
      <ul class="nav__links">
        <li class="link"><a href="welcome.php">Home</a></li>
        <li class="link"><a href="../appointment/appointment.php">Appointment</a></li>
        <li class="link"><a href="#service">Services</a></li>
        <li class="link"><a href="#pages">Pages</a></li>
        <li class="link"><a href="#blog">Blog</a></li>
       
        <li class="nav-item dropdown">
        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                     <?php echo "<h3>Welcome ".$_SESSION['username']."</h3>";?>
                     <img src="profile.webp" alt="Patient" class="patient-avatar"></a>
                     <div class="dropdown-menu">
                     <a class="dropdown-item" href="../profile/profile.php">Profile</a>
                       <a class="dropdown-item" href="logout.php"> logout </a>
                     </div>
        </li>
      </ul>
     
    </nav>
      </div>
    </nav>
    <div class="section__container header__container" id="home">
      <div class="header__content">
        <h1>Your Health, Our Priority</h1>
        <p>
          track your health to ensure you're always at your best.
        </p>
      </div>
    </div>
</header>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>