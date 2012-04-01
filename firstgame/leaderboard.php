<?php
	if(isset($_GET['board'])){
		$board = @substr(trim(addslashes($_GET['board'])),0,32);
	}else{
		$board = "main";
	}
	$db = new PDO("mysql:host=localhost;port=3306;dbname=toxicgames","toxicgames","flakebar1");
	$qry = $db->prepare("SELECT * FROM `scores` WHERE `leaderboard` = ? ORDER BY `score` ASC");
	$qry->execute(array($board));
	$results = $qry->fetchAll();
	$i = 0;
	echo("<table><tr><td>Rank</td><td>Nick</td><td>Score</td></tr>");
	if(count($results)>0){
		foreach($results as $result){
			$i++;
			$nick = trim(addslashes(str_replace(array("'","<",">"),array("&#39;","&lt;","&gt;"),$result['nick'])));
			$score = trim(addslashes(str_replace(array("'","<",">"),array("&#39;","&lt;","&gt;"),$result['score'])));
			echo("<tr><td>$i</td><td>$nick</td><td>$score</td></tr>");
		}
	}else{
		echo("<tr><td colspan=3><center>No Results<center></td></tr>");
	}
	echo("</table>");
?>