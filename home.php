<?php

    session_start();

    if ($_SESSION['status'] == 'loggedIn'){
    }
    else{
        echo "<script>alert('You must login to access this part of the system')</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>

<?php
  include 'action.php';
?>

<!DOCTYPE html>
<HTML>


<head>

</head>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SalesKPI</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
  <div class="container">
     <div class="navigation">
        <ul>
           <li>
              <a href="#">
                 <span class="icon"><ion-icon name="speedometer-outline"></ion-icon></span>
                 <span class="title">SalesKPI</span>
              </a>
           </li>
           <li>
              <a href="#">
                 <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                 <span class="title">Dashboard</span>
              </a>
           </li>
           <li>
              <a href="#">
                 <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                 <span class="title">Profile</span>
              </a>
           </li>
           <li>
              <a href="log.txt">
                 <span class="icon"><ion-icon name="finger-print-outline"></ion-icon></span>
                 <span class="title">Log</span>
              </a>
           </li>
           <li>
              <a href="logout.php">
                 <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                 <span class="title">Sign Out</span>
              </a>
           </li>
        </ul>
     </div>

     <!-- main -->
     <div class="main">
         <div class="topbar">
            <div class="toggle">
               <ion-icon name="menu-outline"></ion-icon>             
            </div>
            <!-- search -->
            <div class="search">
               <div class="cardHeader">
                  <h2>Welcome again Fouad (London)</h2>
               </div>
            </div>
            <!-- user Image -->
            <div class="user">
               <img src="logo.png">
            </div>
         </div>



         <!-- cards -->
         <div class="cardBox">
            <div class="card">
               <div>
                  <div class="numbers">10</div>
                  <div class="cardName">employees</div>
             </div>
             <div class="iconBx">
               <ion-icon name="people-outline"></ion-icon>
             </div>
           </div>
            <div class="card">
               <div>
                  <div class="numbers">1,140</div>
                  <div class="cardName">Sales</div>
             </div>
             <div class="iconBx">
               <ion-icon name="cart-outline"></ion-icon>
             </div>
           </div>
            <div class="card">
               <div>
                  <div class="numbers">443</div>
                  <div class="cardName">Sales Target</div>
             </div>
             <div class="iconBx">
               <ion-icon name="contract-outline"></ion-icon>
             </div>
           </div>
            <div class="card">
               <div>
                  <div class="numbers">£442</div>
                  <div class="cardName">Bounus</div>
             </div>
             <div class="iconBx">
               <ion-icon name="wallet-outline"></ion-icon>
             </div>
           </div>
         </div>

         <!-- order details list -->
         <div class="details">
           <div class="recentOrders">
             <div class="cardHeader">
                <h2>Sales Team Data</h2>

             </div>




        <?php
          $query = 'SELECT * FROM sales';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Region</th>
              <th>Sales target</th>
              <th>Sales for last 6 quarters</th>
              <th>Bonus amount</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><img src="<?= $row['photo']; ?>" width="25"></td>
              <td><?= $row['name']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['phone']; ?></td>
              <td><?= $row['Region']; ?></td>
              <td><?= $row['salesTarget']; ?></td>
              <td><?= $row['sales6']; ?></td>
              <td><?= $row['bonusAmount']; ?></td>
              <td>
                <a href="details.php?details=<?= $row['id']; ?>" class="btn">Preformance</a>

              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>



           </div>

         </div>




      </div>

   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
   // MenuToggle
   let toggle = document.querySelector('.toggle');
   let navigation = document.querySelector('.navigation');
   let main = document.querySelector('.main');

   toggle.onclick = function(){
    navigation.classList.toggle('active')
    main.classList.toggle('active')
   }

   // add hovered class in selected list item
   let list = document.querySelectorAll('.navigation li');
   function activeLink(){
      list.forEach((item) =>
      item.classList.remove('hovered'));
      this.classList.add('hovered');
   }
  list.forEach((item) =>
  item.addEventListener('mouseover',activeLink));
</script>


</body>
</html>