<?php 
session_start();
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                       
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Books info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form acton="" name="form1" method="post" class="col-lg-6" enctype="multipart/form-data"> 
                                <table class="table table-bordered">
								<tr>
								<td><input type="text" class="form-control" placeholder="Books name" name="bname" required=""></td>
								</tr>
								<tr>
								
								<td>Books Image<input type="file" name="fi" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Books Author Name" name="bauthorname" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Publication name" name="pname" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Books purchase date" name="bpurchasedate" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Books price" name="bprice" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="Books quantity" name="bqty" required=""></td>
								</tr>
								<tr>
								<td><input type="text" class="form-control" placeholder="available quantity" name="aqty" required=""></td>
								</tr>
								<tr>
								<td><input type="submit" class="btn btn-default submit" style="background-color:blue;color:white" name="submit1" value="Insert Books Details"></td>
								</tr>
								
								
								
								
								
								</table>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

       <?php
	   include "footer.php";
	   ?>
        <?php
		
		  if(isset($_POST['submit1']))
		  {
			  $lname=$_SESSION['librarian'];
			  $bname=$_POST['bname'];
			  $bauthorname=$_POST['bauthorname'];
			  $pname=$_POST['pname'];
			  $bprice=$_POST['bprice'];
			  $bqty=$_POST['bqty'];
			  $aqty=$_POST['aqty'];
			  $bpurchasedate=$_POST['bpurchasedate'];
			  $tm=md5(time()); //unique name of all files
			  $fnm=$_FILES['fi']['name'];
			  $dat="./books_image/".$tm.$fnm;
			    $dat1="books_image\".$tm.$fnm;
				move_uploaded_file($_FILES['fi']['tmp_name'],$dat);
			  
			  //echo "$lname.$dat1.$bname";
			  $conn=mysqli_connect("localhost","root","root","lms") or die("The connection to the database has not been made");
			 // $sql="INSERT INTO add_books (books_name,books_image,books_author_name,books_publication_name,books_purchase_date,books_price,books_qty,available_qty,librarian_name) VALUES('$bname','$dat1','$bauthorname','$pname','$bpurchasedate','$bprice','$bqty','$aqty','$lname')";	
				$sql="INSERT INTO add_books VALUES('','$bname','$dat1','$bauthorname','$pname','$bpurchasedate','$bprice','$bqty','$aqty','$lname')";
			 $result=mysqli_query($conn,$sql) or die("Your query is not right");
				?>
				<script type="text/javascript">
				alert("Success Insert");
				</script>
				<?php
			  
		  }
		
		
		?>
		
		
		
		
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
