<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Chat | chit Chat</title>
<link rel="icon" href="img/logo-main.png" type="image/png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



<style>
body {
    background-color: #FDF8F6;
	font-family: 'prompt',sans-serif;
    font-size: 18px;
    
}

{ /* set */
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'prompt', sans-serif;
}
.sidebar{ /* side bar */
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 240px;
  background: #5D9C85;
  z-index: 100;
  transition: all 0.3s ease;
}
.sidebar.close{ /* width of side bar */
  width: 85px;
}
.sidebar .logo-details{ /* position menu on tab bar*/ 
  height: 50px;
  width: 100%;
  display: flex;
  align-items: center;
}

.sidebar .nav-links{ /* bar */
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{ /* bar */
  overflow: visible;
}
.sidebar .nav-links li{ /* sub menu bar */
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #0C4A34;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{ /* text control sub-menu*/
  font-size: 18px;
  font-weight: 400;
  color: #0C4A34;
  transition: all 0.5s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{  /* color sub-menu*/
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #0C4A34;
  display: none;
}
.sidebar .nav-links li .sub-menu a{ /* text sub-menu*/
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 20px;
  opacity: 1;
  display: block;
}
}

</style>
</head>

<!-- Start tab bar -->
<body>
  <div class="sidebar close">
    <ul class="nav-links">
   

      <li>
        <a href="#">
          <span class="w3-bar-item w3-button"><i class="fa fa-home"></i></span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="w3-bar-item w3-button"><i class="fa fa-comments"></i></span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="w3-bar-item w3-button"><i class="fas fa-user-friends"></i></span>
        </a>
      </li>
      <li>
        <div class="iocn-link">
        <span class="w3-bar-item w3-button"><i class="fas fa-gear"></i></span>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Setting</a></li>
          <li><a  data-toggle="modal" data-target="#edit">Edit profile</a></li>
          <li><a  data-toggle="modal" data-target="#language">Language</a></li>
          <li><a  data-toggle="modal" data-target="#block">Blocked user</a></li>
          <li><a  data-toggle="modal" data-target="#delete">Delete acount</a></li>
          <li><a  data-toggle="modal" data-target="#log out">Sign out</a></li>
        </ul>
      </li>
</div>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  <!-- end tab bar-->

<!-- The Modal language -->
<div class="modal" id="language">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h1 class="modal-title">Language</h1>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body language -->
      <div class="modal-body">
        <a class="dropdown-item" href="Th_setting.php">Thai</a>
        <a class="dropdown-item" href="chat-Eng-setting.php">English</a>
      </div>

    </div>
  </div>
</div>


<script src="js/bootstrap.min.js"></script>    

</body>
</html>