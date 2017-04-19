	<?php	
	function searchmembers($search_term){

			$sql = mysqli_query($connection,"SELECT * FROM `members` WHERE `FirstName` LIKE '%$search_term%' OR `LastName` LIKE '%$search_term%' LIMIT 0, 30 ") 
			or 
			die (mysqli_error($connection));
		            $num_of_row   = mysqli_num_rows($sql);
			    if ($num_of_row > 0 ){
					 while($row    = mysqli_fetch_array($sql))
					{ 
						$id = $row['member_id'];
					
						echo "<a href=".$row['profImage']." rel=facebox;><img src='".$row['profImage']."' width='50' height='50' style='margin-right:4px;'></a>";
						echo "</span><div class='clr2'></div>";
						echo "<a href='friendprofile.php?action=view&id=".$id."' style='color:blue; text-decoration:none;'>". $row['FirstName']."&nbsp;".$row['LastName']."</a>";
						echo "<p>"."<a href='addfriend.php?action=view&id=".$id."' style='color:blue; text-decoration:none;'rel = 'facebox' >Follow</a>"."</p>";
						
					}
				}
				else
				{
			
				  echo "<font color='red' size='4' >No result found!</font>";
				}
	
				
				

}	
?>