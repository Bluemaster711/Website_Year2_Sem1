<?php include "includes/connectionString.php"?>
				<?php include "includes/error.php"?>
				<?php

				if (!$enterMatrix){

					die("You were not able to connect: " . mysqli_connect_errno());
			
				}else{

                    if(isset($_COOKIE["PHPSESSID"])) {
						session_start();
					}

					if(isset($_SESSION['username'])){


                        $secure_title = stripslashes(htmlspecialchars($_POST['titlegig']));
						if ($stmt = $enterMatrix->prepare('SELECT ID FROM Account_Info WHERE Username = ?')) {
							$stmt->bind_param('s', $_SESSION['username']);
							$stmt->execute();
						
							$stmt->store_result();
				
							$stmt->bind_result($ID);
							$stmt->fetch();


                            if ($stmt_table = $enterMatrix->prepare('DELETE FROM gig_info WHERE title = ? AND id = ?')) {
                                $stmt_table->bind_param('ss', $secure_title, $ID);
                                $stmt_table->execute();

                                header("Location: tourInfo.php");
                            
                            
                            }else{
                                die("error");
                            }
                        }else{
                            die("error1");
                        }		
					    $enterMatrix->close();
                        

                    }else{
                        die("Must be logged in.");
                    }}
                    ?>