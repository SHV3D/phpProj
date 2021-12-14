<?php
	include_once('../configuration/cfg.php');

	class Products extends dbsetting
	{

		/**
		###	Извлечение записей из таблицы в БД
		**/
		public function getAllProducts() {
			$sql_query = "SELECT * FROM `products`";
			$exec = $this->conn()->query($sql_query)->fetchAll();
			return $exec;
		}

		/**
		### Отображение записей из БД таблицы "product_groups"	
		**/
		public function viewProductsData(){
			$result = $this->getAllProducts();
			if ($result){
					foreach ($result as $key => $value) {
				echo "<tr>
					<td>".$value[0]."</td>
					<td>".$value[1]."</td>
					<td>".$value[2]."</td>
					<td>".$value[3]."</td>
					<td>".$value[4]."</td>
					<td>".$value[5]."</td>
					<td>".$value[6]."</td>
					<td>".$value[7]."</td>
					<td>".$value[8]."</td>
					<td>".$value[9]."</td>
					<td>".$value[10]."</td>
					<td><a href=../updating/update_product_form.php?id=".$value[0].">Update</a></td>
					<td><a href=../deleting/delete_product_form.php?id=".$value[0].">Delete</a></td>
					</tr>";

				}
			}
		}

		/**
		###	Создание новой записи		
		**/
		public function createNewProduct() {

			if(isset($_POST['add'])){
				$id = $_POST['id'];
				$group_id = $_POST['group_id'];
				$sort_id = $_POST['sort_id'];
				$description = $_POST['description'];
				$model = $_POST['model'];
				$param1 = $_POST['param1'];
				$param2 = $_POST['param2'];
				$param3 = $_POST['param3'];
				$param4 = $_POST['param4'];
				$param5 = $_POST['param5'];
				$file_name = $_POST['file-name'];

				$sql_query = "INSERT INTO `products` (`group_id`, `sort_id`, `description`, `model`, `param1`, `param2`, `param3`, `param4`, `param5`, `file_name`) VALUES ('$group_id', '$sort_id', '$description', '$model', '$param1', NULL, NULL, NULL, NULL, NULL)";

				$exec = $this->conn()->prepare($sql_query)->execute();
			}

			return $exec;
	
		}

		/**
		### Изменение текущей записи
		**/
		public function updateCurrentProduct($entry){
			
			$id_group = $_POST['id_group'];
			$id_sort = $_POST['id_sort'];
			$desc = $_POST['desc'];
			$model = $_POST['model'];
			$param1 = $_POST['param1'];
			$param2 = $_POST['param2'];
			$param3 = $_POST['param3'];
			$param4 = $_POST['param4'];
			$param5 = $_POST['param5'];
			$file_name = $_POST['file_name'];

			$sql_query = "UPDATE `products` SET `group_id` = '$id_group', `sort_id` = '$id_sort', `description` = '$desc', `model` = '$model', `param1` = '$param1', `param2` = '$param2', `param3` = '$param3', `param4` = '$param4', `param5` = '$param5', `file_name` = '$file_name' WHERE `Products`.`id` = '$entry' ";

			$exec = $this->conn()->prepare($sql_query)->execute();

			return $exec;

		}

		/**
		###	Удаление текущей записи
		**/
		public function deleteCurrentProduct($getID){
			//$getID = $_GET['id'];

			$sql_query = "DELETE FROM `products` WHERE `products`.`id` = '$getID'";

			$exec = $this->conn()->prepare($sql_query)->execute();
		}

		/**
		###	Получение текущего ID записи 
		**/
		public function getProductByID($getID){
			//$getID = $_GET['id'];

			$sql_query = "SELECT * FROM `products` WHERE `products`.`id` = '$getID'";
			$exec = $this->conn()->prepare($sql_query)->execute();

			return $getID;
		}

		/**
		## Получение текущей записи по ID
		**/
		public function getCurrentProduct($id_getter){
			$id_get = $this->getProductByID($id_getter);

			$sql_query = "SELECT * FROM `products` WHERE `products`.`id` = '$id_get'";
			$exec = $this->conn()->query($sql_query)->fetch();
			return $exec;


		}		
	}
?>