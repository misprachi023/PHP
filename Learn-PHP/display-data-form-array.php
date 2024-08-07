<!-- <html>
    <body>
        <table border="1">
            <tr>
                <th>name</th>
                <th>age</th>
                <th>city</th>
                <th>country</th>
            </tr>
            <tr>
                <td>prachi</td>
                <td>20</td>
                <td>bhopal</td>
                <td>india</td>
            </tr>
            <tr>
                <td>prachi</td>
                <td>20</td>
                <td>bhopal</td>
                <td>india</td>
            </tr>
        </table>
    </body>
</html> -->

<?php
$user=[
    [1, "prachi", 20, "bhopal", "india"],
    [2, "prachi", 20, "bhopal", "india"],
    [3, "prachi", 20, "bhopal", "india"],
    [4, "prachi", 20, "bhopal", "india"]
];
echo "<table border=1>";
for($i=0; $i<count($user); $i++){
    echo "<tr>";
    for($j=0; $j<count($user[$i]); $j++){
        
        echo "<td>";
        echo $user[$i][$j];
        
        echo "<br/>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>