<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원관리</title>
    <style>
        <?php
     include '1.css';
     include '../body.css';
     include '../header.css';
     include '../footer.css';
     
     ?> 
      button {
          position:fixed;
          top : 100;
          right : 0;
      }
      body {
        font-family: Consolas, monospace;
        font-family: 12px;
        width: 100%;
        padding-bottom:10%;
      }
      table {
        
        width: 80%;
        text-align: center;
      }

      th {
        
        border-bottom: 1px solid #dadada;
        text-align: center;
      }
      .c {
          border: 0px;
          background-color:#FFFFFF;
          font-size:67%;
      }
    </style>
  </head>
  <section>
  <body>
      
        <header class="top">
            <p>회원 관리</p>
        </header>
    <table>
      <thead>
        
        <tr><button type="button" onclick="location.href='mg_edit.php' ">수정</button></tr>
        <tr>
        <!--  <th>no</th> -->
          <th>id</th>
          <th>r_id</th>
          <th>name</th>
          <th>lv</th>
          <th>exp</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include 'db.php';
          
           $delete_idx = $_POST[ 'idx' ];
          if ( isset( $delete_idx ) ) {
            $sql_delete = "DELETE FROM member WHERE idx = '$delete_idx';";
            mysqli_query( $db, $sql_delete );
            echo '<p style="color: red;">member ' . $delete_idx . ' is deleted.</p>';
          }
          
          $sql = "SELECT * FROM member;";
          $result = mysqli_query( $db, $sql );
          while( $row = mysqli_fetch_array( $result ) ) {
           
            $edit = '
              <form action="mg_edit.php" method="POST">
                <input type="hidden" name="edit_emp_no" value="' . $row[ 'idx' ] . '">
                <input type="submit" value="Edit">
              </form>
            ';
            $delete = '
              <form action="mg.php" method="POST">
                <input type="hidden" name="idx" value="' . $row[ 'idx' ] . '">
                <input type="submit" value="Delete">
              </form>
            ';
            
           echo '<tr> <!-- <td class="c">' . $row[ 'idx' ] . ' </td> --> <td class="c">'. $row[ 'id' ] . '</td><td class="c">' . $row[ 'r_id' ] . '</td><td class="c">' . $row[ 'name' ] . '</td><td class="c">' . $row[ 'lv' ] . '</td><td class="c">' . $row[ 'exp' ] . '</td><td class="c">' . $delete . '</td></tr>';
          }
          
        ?>
        
      </tbody>
    </table>
    </section>
     <?include '../footer.php';?>
  </body>
</html>