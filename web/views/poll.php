<html>

<head>
	<title>Voting Booth</title>
	<link rel="stylesheet" type="text/css" href="css/poll.css"/>
	<script language="javascript">
	     function setVote(voteName)
	     {
	      	document.getElementById("votefor").value = voteName;
	     }
	     function confirmSubmit() 
	     { 
		if (document.getElementById("votefor").value == "")
		{
		     var agree=confirm("Please select an entry before voting."); 
		     return false; 
		}
	     } 
	</script>
</head>

<body>
	<FORM id="frmVote" action="results.php" method="POST">
	     <table id="tblMain" align="center">
	       	<tr>
			<td class="header">Please Vote for PHP or Java or Python or Java Script or Ruby</td>
			<marquee class="red2" scrollamount="20" direction="right">PHP for the WIN</marquee>
			<marquee class="green2" scrollamount="40">PHP for THE WIN</marquee>
			<marquee class="blue2" scrollamount="60" behavior="alternate">PHP for THE WIN</marquee>
			<marquee class="purple2" behavior="alternate"><marquee width="200">PHP for THE WIN</marquee></marquee>
			<marquee><img src="Lama Reject.gif" width="150" height="110" alt="Marquee image action" /></marquee>
				<marquee><img src="anon.jpg" width="600" height="110" alt="Marquee image action" /></marquee>
	     	</tr>
		<tr>
			<td>
			     <?php
				include "loadpoll.php";
			     ?>
			</td>
		</tr>
		<tr>
			<td>
			     <input name="votefor" type="hidden"/>
			</td>
		</tr>
 		<tr>
			<td class="button">
			     <INPUT id="btnVote" onclick="return confirmSubmit()" type="submit" value="Vote"/>
			</td>
		</tr>
	     </table>
	</FORM>
</body>

</html>
