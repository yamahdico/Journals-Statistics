<?php
  $data = simplexml_load_file("smr.journals.iau.ir.xml");

  for($i = 0; $i < count($data); $i++)
  {
	echo $data->Article[$i]->Journal[0]->Volume;
	echo  $data->Article[$i]->Journal[0]->Issue;
	echo  $data->Article[$i]->Journal[0]->Year;
	echo  $data->Article[$i]->Journal[0]->Month;
	echo $data->Article[$i]->ArticleTitle;
	echo $data->Article[$i]->VernacularTitle;
	for($ii = 0; $ii < count($data->Article[$i]->AuthorList->Author); $ii++){
		echo $data->Article[$i]->AuthorList->Author;
		echo "<br>".$data->Article[$i]->AuthorList->Author[$ii]->FirstName."<br>";
		echo "<br>".$data->Article[$i]->AuthorList->Author[$ii]->LastName."<br>";
		echo "<br>".$data->Article[$i]->AuthorList->Author[$ii]->Affiliation."<br>";
	}
	for($iii = 0; $iii < count($data->Article[$i]->ObjectList->Object); $iii++){
		echo "<br>".$data->Article[$i]->ObjectList->Object[$iii]->Param;
	}
  }



  