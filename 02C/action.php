<?php

//action.php
require_once('conexao/conectarpdo.php');
//$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('order_number', 'order_total', 'order_date');

		$main_query = "
		SELECT order_number, SUM(order_total) AS order_total, order_date 
		FROM test_order_table 
		";

		$search_query = 'WHERE order_date <= "'.date('Y-m-d').'" AND ';


		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(order_number LIKE "%'.$_POST["search"]["value"].'%" OR order_total LIKE "%'.$_POST["search"]["value"].'%" OR order_date LIKE "%'.$_POST["search"]["value"].'%")';
		}

		$group_by_query = " GROUP BY order_date ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY order_date DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $conn->prepare($main_query . $search_query . $group_by_query . $order_by_query);

		$statement->execute();

		$filtered_rows = $statement->rowCount();

		$statement = $conn->prepare($main_query . $group_by_query);

		$statement->execute();

		$total_rows = $statement->rowCount();

		$result = $conn->query($main_query . $search_query . $group_by_query . $order_by_query . $limit_query, PDO::FETCH_ASSOC);

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();

			$sub_array[] = $row['order_number'];

			$sub_array[] = $row['order_total'];

			$sub_array[] = $row['order_date'];

			$data[] = $sub_array;
		}

		$output = array(
			"draw"			=>	intval($_POST["draw"]),
			"recordsTotal"	=>	$total_rows,
			"recordsFiltered" => $filtered_rows,
			"data"			=>	$data
		);

		echo json_encode($output);
	}
}

?>
