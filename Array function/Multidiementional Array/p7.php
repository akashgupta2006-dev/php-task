<?php
$emp=[
   [1,"sandeep","cs",2000,9],
   [2,"akash","it",2200,8],
   [3,"Rites","ME",3200,9],
   [4,"Sudhir","EE",4400,0],
   [5,"Vipins","cs",4332,8],
   [5,"Vipins","cs",4332,6]
];
echo "<table border='2px'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>BRANCH</th>";
echo "<th>FEE</th>";
echo "<th>FEE</th>";
echo "</tr>";
for($i=0;$i<6;$i++)
{
echo "<tr>";
for($j=0;$j<5;$j++)
{
echo "<td>" . $emp[$i][$j] . "</td>";
}
echo "</tr>";
}
echo "</table>";
?>