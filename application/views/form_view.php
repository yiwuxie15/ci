<html>
     <head>
          <title>Student</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <!--link the bootstrap css file-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     </head>
     <body>
          <div class="container">
          <div class="row">
          <div class="col-lg-12 col-sm-12">
               <table class="table table-striped table-hover">
                    <thead>
                         <tr>
                              <th>id</th>
                              <th>Student Name</th>
                              <th>Password</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($query as $row){?>
                              <tr>
                                   <td><?php echo $row->id; ?></td>
                                   <td><?php echo $row->user_name; ?></td>
                                   <td><?php echo $row->password; ?></td>
                              </tr>
                         <?php } ?>
                    </tbody>
               </table>
               <button class="btn btn-danger" onclick="location.href='updaterec'">Shuffle</button>
          </div>
          </div>
          </div>
     </body>
</html>
