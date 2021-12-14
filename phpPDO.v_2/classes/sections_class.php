<?php
	include_once('../configuration/cfg.php');

	class Section extends dbsetting
	{

		/**
		###	Извлечение записей из таблицы в БД
		**/
		public function getAllSections() {
			$sql_query = "SELECT * FROM `product_groups`";
			$exec = $this->conn()->query($sql_query)->fetchAll();
			return $exec;
		}

		/**
		### Отображение записей из БД таблицы "product_groups"	
		**/
		public function viewSectionData(){
			$result = $this->getAllSections();
			if ($result){
					foreach ($result as $key => $value) {
						echo '
						<tr>
							<td>'.$value[0].'</td> 
							<td>'.$value[1].'</td>
							<td>'.$value[2].'</td>
							<td>'.$value[3].'</td>
							<td>'.$value[4].'</td>
							<td>
								<a href="../updating/update_section_form.php?id='.$value[0].'">
									<input type="button" value="Update">
								</a>
							</td>

							<td>
								<a href="../updating/delete_section_form.php?id='.$value[0].'">
									<input type="button" value="Delete">
								</a>
							</td>
						</tr>';

				}
			}
		}

		/**
		###	Создание новой записи		
		**/
		public function createNewSection() {

			if(isset($_POST['add'])){

				$sort_id = $_POST['sort_id'];
				$description = $_POST['description'];
				$viewmode = $_POST['viewmode'];
				$Keywords = $_POST['Keywords'];

				$sql_query = "INSERT INTO `product_groups` (`sort_id`, `description`, `viewmode`, `Keywords`) VALUES ('$sort_id', '$description', '$viewmode', '$Keywords')";

				$exec = $this->conn()->prepare($sql_query)->execute();
			}
			return $exec;
			
		}

		/**
		### Изменение текущей записи
		**/
		public function updateCurrentSection(){
				
				$ID = $_POST['id'];
				$description = $_POST['description'];
				$viewmode = $_POST['viewmode'];
				$Keywords = $_POST['Keywords'];

				$sql_query = "UPDATE `product_groups` SET `description` = '$description', `viewmode` = '$viewmode', `Keywords` = '$Keywords' WHERE `product_groups`.`id` = '$ID'";

				$exec = $this->conn()->prepare($sql_query)->execute();
				
				return $exec;
			
		}

		/**
		###	Удаление текущей записи
		**/
		public function deleteCurrentSection(){
			$id = $_GET['id'];

			$sql_query = "DELETE FROM `product_groups` WHERE `product_groups`.`id` = '$id'";
			$exec = $this->conn()->prepare($sql_query)->execute();
		}

		/**
		###	Получение текущего ID записи 
		**/
		public function getSectionByID($getID){

			$sql_query = "SELECT * FROM `product_groups` WHERE `product_groups`.`id` = '$getID'";
			$exec = $this->conn()->prepare($sql_query)->execute();

			return $getID;
		}

		/**
		## Получение текущей записи по ID
		**/
		public function getCurrentSection($getID){
			
			$sql_query = "SELECT * FROM `product_groups` WHERE `product_groups`.`id` = '$getID'";
			$exec = $this->conn()->query($sql_query)->fetch();

			return $exec;

		}		
	}
?>