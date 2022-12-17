<?php include "includes/connectionString.php"?>
				<?php include "includes/error.php"?>
				<?php

				if (!$enterMatrix){

					die("You were not able to connect: " . mysqli_connect_errno());
			
				}else{

					if(isset($_SESSION['username'])){


						if ($stmt = $enterMatrix->prepare('SELECT ID FROM Account_Info WHERE Username = ?')) {
							$stmt->bind_param('s', $_SESSION['username']);
							$stmt->execute();
						
							$stmt->store_result();
				
							$stmt->bind_result($ID);
							$stmt->fetch();
						

						$stmt_pick = $enterMatrix->prepare('SELECT id, title, location, date FROM gig_info WHERE id = ?');
						$stmt_pick->bind_param('s', $ID);
						$stmt_pick->execute();
						
						$stmt_result = $stmt_pick->get_result();
						
							
						if($stmt_result->num_rows > 0){
								
							while($row = $stmt_result->fetch_assoc()) {
								echo "Title: ". $row["title"]. " | | Location: " . $row["location"] . " |  |  Date: " . $row["date"] . "<br>";
							}

						} else {
						echo "0 results. ";
                        echo "Try adding them by going to user profile ";
						}
						}
							
					$enterMatrix->close();

				}else{
                    echo "Must be logged in.";
                }
                
            }
				?>