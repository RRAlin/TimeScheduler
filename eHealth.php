<!DOCTYPE html>
<html>

  <head>
    <title>Proiect eHealth</title>
    



    <style>

      table, th, td 
      {
        border: 1px solid black;
      }

      th, td 
      {
        padding: 5px;
      }

      th, td
      {
        text-align: center;
      }

      table 
      {
        border-spacing: 5px;
      }

      table 
      {
        width: 100%;
        background-color:  #ccccff;
      }

      table th 
      {
        background-color: white;
        color: red;
        background-color: #04B404;
        text-align: center;
      }

      .buttonHolder{ 

      text-align: center; 
      background-color: #BDBDBD;
      }
      .buttonHolder2{ 

        text-align: center; 
        background-color: #BDBDBD;
        text-align: center;
        font-size: 12px;

       }
    </style>
  </head>





  <body>

      <h1> <center> <font color="red" size="6"> Proiect:</font> <font color="blue" size="6">Personal Time Scheduler </font> </center> </h1>
 

<form method="post" action="eHealth.php">


   <div class="buttonHolder2">
       <input type="submit" name="submit2" style="color: blue " value="PROFILE" align="right">
      </div>



           <br></br>

           <?php
                if(isset($_POST["submit2"])){
                   header("location: profile.php");
                } 
              ?>

     
        </form>






    <form method="post" action="eHealth.php">


       <table style="width:100%">

          <tr>  <th></th><th></th><th></th><th>MAI 2019</th><th></th><th></th><th></th>  </tr>

          <tr>
            <th>Luni</th>
            <th>Marti</th>
            <th>Miercuri</th>
            <th>Joi</th>
            <th>Vineri</th>
            <th>Sambata</th>
            <th>Duminica</th>
          </tr>

          <tr>

              <td>
               <input type="text" size="5" maxlength="5" name="Luni11" value="" /> - 29 - 
               <input type="text" size="5" maxlength="5" name="Luni12" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Marti11" value="" /> - 30 -
               <input type="text" size="5" maxlength="5" name="Marti12" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Mier11" value="" /> - 01 -
               <input type="text" size="5" maxlength="5" name="Mier12" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Joi11" value="" /> - 02 -
               <input type="text" size="5" maxlength="5" name="Joi12" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Vineri11" value="" /> - 03 -
               <input type="text" size="5" maxlength="5" name="Vineri12" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Sam11" value="" /> - 04 -
               <input type="text" size="5" maxlength="5" name="Sam12" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Dum11" value="" /> - 05 -
               <input type="text" size="5" maxlength="5" name="Dum12" value="" />
              </td>

          </tr>


            <tr>

              <td>
               <input type="text" size="5" maxlength="5" name="Luni21" value="" /> - 06 - 
               <input type="text" size="5" maxlength="5" name="Luni22" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Marti21" value="" /> - 07 - 
               <input type="text" size="5" maxlength="5" name="Marti22" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Mier21" value="" /> - 08 - 
               <input type="text" size="5" maxlength="5" name="Mier22" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Joi21" value="" /> - 09 - 
               <input type="text" size="5" maxlength="5" name="Joi22" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Vineri21" value="" /> - 10 - 
               <input type="text" size="5" maxlength="5" name="Vineri22" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Sam21" value="" /> - 11 - 
               <input type="text" size="5" maxlength="5" name="Sam22" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Dum21" value="" /> - 12 - 
               <input type="text" size="5" maxlength="5" name="Dum22" value="" />
              </td>

          </tr>

              <tr>

              <td>
               <input type="text" size="5" maxlength="5" name="Luni31" value="" /> - 13 - 
               <input type="text" size="5" maxlength="5" name="Luni32" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Marti31" value="" /> - 14 -
               <input type="text" size="5" maxlength="5" name="Marti32" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Mier31" value="" /> - 15 -
               <input type="text" size="5" maxlength="5" name="Mier32" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Joi31" value="" /> - 16 -
               <input type="text" size="5" maxlength="5" name="Joi32" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Vineri31" value="" /> - 17 -
               <input type="text" size="5" maxlength="5" name="Vineri32" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Sam31" value="" /> - 18 -
               <input type="text" size="5" maxlength="5" name="Sam32" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Dum31" value="" /> - 19 -
               <input type="text" size="5" maxlength="5" name="Dum32" value="" />
              </td>

          </tr>

    <tr>

              <td>
               <input type="text" size="5" maxlength="5" name="Luni41" value="" /> - 20 - 
               <input type="text" size="5" maxlength="5" name="Luni42" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Marti41" value="" /> - 21 -
               <input type="text" size="5" maxlength="5" name="Marti42" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Mier41" value="" /> - 22 -
               <input type="text" size="5" maxlength="5" name="Mier42" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Joi41" value="" /> - 23 -
               <input type="text" size="5" maxlength="5" name="Joi42" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Vineri41" value="" /> - 24 -
               <input type="text" size="5" maxlength="5" name="Vineri42" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Sam41" value="" /> - 25 -
               <input type="text" size="5" maxlength="5" name="Sam42" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Dum41" value="" /> - 26 -
               <input type="text" size="5" maxlength="5" name="Dum42" value="" />
              </td>

          </tr>

              <tr>

              <td>
               <input type="text" size="5" maxlength="5" name="Luni51" value="" /> - 26 -
               <input type="text" size="5" maxlength="5" name="Luni52" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Marti51" value="" /> - 27 -
               <input type="text" size="5" maxlength="5" name="Marti52" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Mier51" value="" /> - 28 -
               <input type="text" size="5" maxlength="5" name="Mier52" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Joi51" value="" /> - 29 -
               <input type="text" size="5" maxlength="5" name="Joi52" value="" />
              </td>
           
              <td>
               <input type="text" size="5" maxlength="5" name="Vineri51" value="" /> - 30 -
               <input type="text" size="5" maxlength="5" name="Vineri52" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Sam51" value="" /> - 01 -
               <input type="text" size="5" maxlength="5" name="Sam52" value="" />
              </td>

              <td>
               <input type="text" size="5" maxlength="5" name="Dum51" value="" /> - 02 -
               <input type="text" size="5" maxlength="5" name="Dum52" value="" />
              </td>

          </tr>



      </table> 




      <br></br>


      <div class="buttonHolder">
        <input value="GENERATE" title="GENERATE" type="submit" id="sumbmit" style="color: red "> 
      </div>


      <?php 
      
      echo "<br></br>";

      

        if (isset($_POST['Luni11']) && isset($_POST['Luni12'])) 
        {
          
        
            if ( $_POST['Luni12'] <= 5 ) {
              
              $var1 = $_POST['Luni12'] + 8;
              echo 'Program Somn Luni, 28 : '.$_POST['Luni12'].'h30 - '.$var1.'h00 ';
           
           } elseif ($_POST['Luni11'] < 7 ) {
            
            $var1 = $_POST['Luni12'] + 5;
            $var2 = $var1 + 4;
            $var3 = $var2 + 2;
            echo 'Program Somn Luni, 28 : '.$_POST['Luni12'].'h30 - '.$var1.'h30 + ' . $var2 . 'h00 - '. $var3 . 'h30';
           } else {

            echo 'Program Somn Luni, 28 : 22h30 - 07h00';

           }

        }

      echo "<br></br>";


        if (isset($_POST['Marti11']) && isset($_POST['Marti12'])) 
        {
          
        
            if ( $_POST['Marti12'] <= 5 ) {
              
              $var1 = $_POST['Marti12'] + 8;
              echo 'Program Somn Marti, 29 : '.$_POST['Marti12'].'h30 - '.$var1.'h00 ';
           
           } elseif ($_POST['Marti11'] < 7 ) {
            
            $var1 = $_POST['Marti12'] + 5;
            $var2 = $var1 + 4;
            $var3 = $var2 + 2;
            echo 'Program Somn Marti, 29 : '.$_POST['Marti12'].'h30 - '.$var1.'h30 + ' . $var2 . 'h00 - '. $var3 . 'h30';
           } else {

            echo 'Program Somn Marti, 29 : 22h30 - 07h00';

           }

        }
      ?>


    </form>






  </body>




</html>