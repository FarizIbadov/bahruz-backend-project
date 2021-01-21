<?php 
include ("DBaction.php");
$fromdate = $_POST['from'] ;
$todate = $_POST['to'];
$readAll = $obj->read_specific("Max(`Temperature`) as maximum, Min(`Temperature`) as minimum","quantitative_data", "Date_measurement>= '".$fromdate."' AND Date_measurement <= '".$todate."'");
?>

<table class="table table-bordered table-striped table-responsive">
<thead>
<tr>
<th>Maximum Temprature</th>
<th>Minimum Temprature</th>
</tr>
</thead>
<tbody>

<?php 
if($readAll->num_rows>0){
$all = $readAll->fetch_assoc();
?>
<tr>
<td><?php echo $all['maximum']; ?></td>
<td><?php echo $all['minimum']; ?></td>
</tr>
<?php
}else{
    ?>
    <tr>
    <td><span class="danger"> No Data Found! </span> </td>
    <td><span class="danger"> No Data Found! </span> </td>
    </tr>
<?php    
}
?>
</tbody>
</table>
