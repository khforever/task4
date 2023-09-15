<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 750px;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }

        /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);

                color: #000;
                font-weight: bold;
            }

        }
    </style>
</head>

<body>
<!-- php code -->
<?php

$students= array(
    array("fname"=>"Kholoud","lname"=>"Hafez","grade"=>70,"status"=>"Good"),
    array("fname"=>"Sama","lname"=>"Oraby","grade"=>90,"status"=>"Excellent"),
    array("fname"=>"Ahmed","lname"=>"Saeed","grade"=>80,"status"=>"Very Good"),
    array("fname"=>"Ali","lname"=>"Osama","grade"=>50,"status"=>"pass"),
    array("fname"=>"Mohamed","lname"=>"Mostafa","grade"=>50,"status"=>"pass"),


 
)

?>






<!--   table -->
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
        </thead>
        


        <!--  -->
        <tbody>
          <?php

foreach($students as $student)

{


?>
                <tr>
                    <td>
                       <?php

echo $student ['fname'];
?>
                    </td>
                    <td>
                    <?php

echo $student ['lname'];
?>  
                    </td>
                    <td>
                    <?php

echo $student ['grade'];
?>                     
                    </td>
                    <td>
                        
                    <?php

echo $student ['status'];
?>

</td>

                </tr>
           
        </tbody>


<!--  -->


        <?php
}  ?>



    </table>
</body>

</html>