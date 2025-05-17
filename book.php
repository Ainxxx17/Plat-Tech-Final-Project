<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Hateza Travel and Tours | Book</title>

   <link rel="shortcut icon" href="logo1.png" type="image/svg+xml">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="style2.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>

<body>
<!-- header section starts  -->
<br>
<section class="header">
   <a href="index.php" class="logo"><img src="logo1.png"></a>
   <nav>
      <div class="nav__btns">
         <a href="home.php" class="btn" style="color: #f3f4f6; border-radius: 5rem;">HOMEPAGE</a>
         <a href="index.php" class="btn" style="color: #f3f4f6; border-radius: 5rem;">LOGOUT</a>
      </div>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<!-- booking section starts  -->
<section class="booking">
   <br><br>
   <h1 class="heading-title">book your trip!</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
      <?php unset($_SESSION['success_message']); } ?>

   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox"><span>name :</span><input type="text" placeholder="Enter your name" name="name"></div>
         <div class="inputBox"><span>number of tickets: </span><input type="number" placeholder="Number of ticket" name="ticket"></div>
         <div class="inputBox"><span>number of passengers:</span><input type="number" placeholder="Number of passengers" name="guests"></div>
         <div class="inputBox"><span>email :</span><input type="email" placeholder="Enter your email" name="email"></div>
         <div class="inputBox"><span>phone :</span><input type="number" placeholder="Enter your number" name="phone"></div>
         <div class="inputBox"><span>address :</span><input type="text" placeholder="Enter your address" name="address"></div>
         <div class="inputBox"><span>where to :</span><input type="text" placeholder="Place you want to visit" name="location"></div>
         <div class="inputBox"><span>arrivals :</span><input type="date" name="arrivals"></div>
         <div class="inputBox"><span>departure :</span><input type="date" name="leaving"></div>
      </div>
      <input type="submit" value="submit" class="btn" name="send">
   </form>

</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<!-- Display bookings table section -->
<section class="bookings-table">
   <h1 class="heading-title">Current Bookings</h1>
   
   <style>
      .bookings-table {
         padding: 2rem;
         max-width: 1200px;
         margin: 0 auto;
         overflow-x: auto;
      }
      
      .bookings-table h1.heading-title {
         text-align: center;
         margin-bottom: 2rem;
         color: #333;
         font-size: 2.5rem;
      }
      
      .table-container {
         width: 100%;
         overflow-x: auto;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
         border-radius: 8px;
         background: white;
      }
      
      .bookings-table table {
         width: 100%;
         border-collapse: collapse;
         font-size: 1.6rem;
         min-width: 1000px;
      }
      
      .bookings-table th, 
      .bookings-table td {
         padding: 1.2rem 1.5rem;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }
      
      .bookings-table th {
         background-color: #0d6efd;
         color: white;
         font-weight: 600;
         position: sticky;
         top: 0;
      }
      
      .bookings-table tr:nth-child(even) {
         background-color: #f8f9fa;
      }
      
      .bookings-table tr:hover {
         background-color: #e9ecef;
      }
      
      .bookings-table .status {
         color: green;
         font-weight: bold;
      }
      
      .no-bookings {
         text-align: center;
         font-size: 1.8rem;
         padding: 2rem;
         color: #666;
         background: white;
         border-radius: 8px;
         box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      
      /* Responsive adjustments */
      @media (max-width: 1200px) {
         .bookings-table {
            padding: 1rem;
         }
         
         .bookings-table th, 
         .bookings-table td {
            padding: 1rem;
            font-size: 1.4rem;
         }
      }
   </style>
   
   <?php
   $conn = mysqli_connect('localhost', 'root', '', 'booking_db');
   if (!$conn) {
       die('Connection Failed: ' . mysqli_connect_error());
   }
   
   $query = "SELECT * FROM book_form ORDER BY id ASC";
   $result = mysqli_query($conn, $query);
   
   if (mysqli_num_rows($result) > 0) {
   ?>
   <div class="table-container">
      <table>
         <thead>
            <tr>
               <th>Name</th>
               <th>Tickets</th>
               <th>Passengers</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Address</th>
               <th>Destination</th>
               <th>Arrival</th>
               <th>Departure</th>
               <th>Status</th>
            </tr>
         </thead>
         <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
               <td><?php echo htmlspecialchars($row['name']); ?></td>
               <td><?php echo htmlspecialchars($row['ticket']); ?></td>
               <td><?php echo htmlspecialchars($row['guests']); ?></td>
               <td><?php echo htmlspecialchars($row['email']); ?></td>
               <td><?php echo htmlspecialchars($row['phone']); ?></td>
               <td><?php echo htmlspecialchars($row['address']); ?></td>
               <td><?php echo htmlspecialchars($row['location']); ?></td>
               <td><?php echo htmlspecialchars($row['arrivals']); ?></td>
               <td><?php echo htmlspecialchars($row['leaving']); ?></td>
               <td class="status">BOOKED</td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
   <?php
   } else {
      echo "<p class='no-bookings'>No bookings yet.</p>";
   }
   mysqli_close($conn);
   ?>
</section>

<!-- footer section starts -->
<br><br><br><br><br><br><br><br>
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Flights</a>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Hotels</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i>Cruise</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +63 930-781-0612 </a>
         <a href="#"> <i class="fas fa-envelope"></i> info@hatezatravelandtours </a>
         <a href="#"> <i class="fas fa-map"></i> Bulacan, Philippines 3023  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
      </div>
   </div>
   <div class="credit">© 2025 Hateza Travel and Tours</span> | All rights reserved. </div>
</section>
<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="script1.js"></script>

</body>
</html>
