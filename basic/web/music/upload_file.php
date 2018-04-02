<?php
include ("CreateTable.php");
include ("InsertSong.php");
// use \usr\local\var\www\basic\web\music\CreateTable;
// if ($_FILES["file"]["error"] > 0)
//   {
//   echo "Error: " . $_FILES["file"]["error"] . "<br />";
//   }
// else
//   {
//   echo "Upload: " . $_FILES["file"]["name"] . "<br />";
//   echo "Type: " . $_FILES["file"]["type"] . "<br />";
//   echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
//   echo "Stored in: " . $_FILES["file"]["tmp_name"];
//   }


 
// print_r($_FILES);
// exit();


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "audio/mpeg"))
&& ($_FILES["file"]["size"] < 200000000000000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      // dropDatabase("myDB");
      // createDatabase("songDB");
      // dropTable("songs");
      // createTable("songs");
      $url =  "http://localhost:8080" . "/music/upload/" . $_FILES["file"]["name"];
      $name =  $_FILES["file"]["name"];
      $size =  $_FILES["file"]["size"] / 1024 ;
      insertSong($name , $url , $size , "songs");

      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }




#exit;
?>
