<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>

<?php

  $conn = mysqli_connect("localhost", "root", "","insertion");
   if (!$conn)
    {
   die('Could not connect: ' . mysqli_error());
  }
  //echo 'Connected successfully' . 'iancuello';
?>


</p>
               
                <table width="694" border="1">
                  <tr>
                    <td width="109"><div align="center">TIME</div></td>
                    <td width="107"><div align="center">MONDAY</div></td>xamp
                    <td width="109"><div align="center">TUESDAY</div></td>
                    <td width="109"><div align="center">WEDNESDAY</div></td>
                    <td width="133"><div align="center">THURSDAY</div></td>
                    <td width="87"><div align="center">FRIDAY</div></td>
                  </tr>
                  <tr>
                    <td><div align="center" name="div1" value=$faculty><br /><!-- <$faculty value -->
                      &nbsp;&nbsp; </div></td>
					  <td><div align="center">7:30 - 8:30 <br />
                      &nbsp;&nbsp; </div></td>

<?php
			$result = mysqli_query($conn,"SELECT * FROM faculty");

			/*
			$result = mysqli_query($conn,"SELECT `faculty.faculty`,`course.course`, `subject.subject` 
			FROM `faculty` JOIN `course` ON faculty.course_id=course.course_id JOIN `subject` ON 
			course.subject_id=subject.subject_id");
			*/

			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'

			// $faculty =$_GET['faculty'];
			// $course =$_GET['course'];
			// $subject =$_GET['subject'];

			//***********mysqli_RESULT function here********//

		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_num_rows($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$faculty = mysqli_RESULT($result,$i,"faculty_name");
					// $course = mysqli_RESULT($result,$i,"course_name");
					// $subject = mysqli_RESULT($result,$i,"subject_description");

					
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 1){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			$pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 1){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 1){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 1){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 1){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">8:30 - 9:30 <br />
                      &nbsp;&nbsp; </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 3){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                      &nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday ==2 && $hidden_pstime == 3){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 3){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 3){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 3){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">9:30 - 10:30 <br />
                      &nbsp;&nbsp; </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 5){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 5){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
			//HAVING course_id='$pCourse' and sem_id='$psem' and year_id='$pSy'
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 5){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 5){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 5){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">10:30 - 11:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 7){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 7){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 7){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 7){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 7){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">11:30 - 12:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 9){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td><div align="center">11:30 - 12:30 
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 9){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 9){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 9){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 9){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">12:30 - 1:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 11){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 11){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 11){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 11){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 11){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">1:30 - 2:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 13){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 13){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 13){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 13){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 13){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">2:30 - 3:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 15){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 15){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 15){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 15){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 15){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">3:30 - 4:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 17){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 17){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 17){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 17){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 17){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">4:30 - 5:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 19){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 19){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 19){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 19){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 19){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">5:30 - 6:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 21){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 21){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 21){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];
			
$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 21){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 21){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">6:30 - 7:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 23){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 23){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 23){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 23){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 23){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                  <tr>
                    <td><div align="center">7:30 - 8:30 <br />
                      &nbsp;&nbsp;</div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 1 && $hidden_pstime == 25){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];
			
$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 2 && $hidden_pstime == 25){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

		$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 3 && $hidden_pstime == 25){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 4 && $hidden_pstime == 25){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                    <td><div align="center">
                        <?php
			  $pT =$_REQUEST['pT'];
			$pSy =$_REQUEST['pSy'];
			$psem=$_REQUEST['psem'];

			$result = mysqli_query($conn,"SELECT `sched`.*,`room`.`room_name` ,`course`.`course_yrSec`,`subjects`.`sub_code`,`profile`.`teacher_name`,`school_yr`.`school_year` FROM `sched`,`room`,`course`,`subjects`,`profile` ,`school_yr`  WHERE sched.room_id=room.room_id and sched.course_id=course.course_id and sched.sub_id=subjects.sub_id and sched.teacher_id=profile.teacher_id
 and sched.year_id=school_yr.year_id HAVING teacher_id='$pT' and sem_id='$psem' 
  			");
		if (!$result) 
			{
			die("Query to show fields from table failed");
			}
		$numberOfRows = mysqli_NUMROWS($result);
		
		If ($numberOfRows == 0) 
			{
			echo 'Sorry No Record Found!';
			}
		else if ($numberOfRows > 0) 
			{
			$i=0;
			while ($i<$numberOfRows)
				{			

					$hidden_psubcat = mysqli_RESULT($result,$i,"sub_code");
					$hidden_pcourse = mysqli_RESULT($result,$i,"course_yrSec");
					$hidden_proom = mysqli_RESULT($result,$i,"room_name");
					$hidden_pt = mysqli_RESULT($result,$i,"teacher_name");
					$hidden_pday = mysqli_RESULT($result,$i,"day_id");
					$hidden_pstime = mysqli_RESULT($result,$i,"time_s_id");
			 
			 if ($hidden_pday == 5 && $hidden_pstime == 25){	
			  		echo $hidden_pcourse . '<br>'.$hidden_psubcat . '<br>'.$hidden_proom;
					end;
						}
						
	$i++;	 
			}
			} ?>
                    </div></td>
                  </tr>
                </table>
</body>
</html>