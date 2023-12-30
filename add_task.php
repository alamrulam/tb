<!DOCTYPE html>
<html lang="en">

<head>
     <title>Form tamu</title>
     <style>
          form {
               box-sizing: border-box;
               margin: 20px auto;
               border: 1px solid #000;
               width: 500px;
               background: whitesmoke;
               padding: 20px;
          }

          h1 {
               text-align: center;
          }

          input[type="text"],
          input[type="date"] {
               border: 1px solid #000;
               padding: 5px;
               width: 100%;
               box-sizing: border-box;
               margin-bottom: 10px;
          }

          button {
               margin: 20px auto;
               border: 2px solid #000;
               padding: 5px 10px;
               cursor: pointer;
               display: block;
          }
     </style>
</head>

<body>
     <div class="">
          <h1> Form</h1>
          <form action="./crud/create.php" method="post">
               <label for="task">Task</label>
               <input type="text" name="task" maxlength="255" required> <br><br>

               <label for="date">Date</label>
               <input type="date" name="date" required> <br><br>


               <label for="desc">Description</label>
               <textarea name="desc" rows="4" cols="50"></textarea> <br>


               <button type="submit" id="btnKirim">
                    Add Task
               </button>
          </form> <br>
          <a href="index.php"> Lihat data</a>
     </div>
</body>

</html>