<html>
	<head>
		<title>Decode JSON strung trong PHP</title>	
	</head>
	<body>
		<?php 
			function ham_xu_ly($value, $key)
			{
				echo "$key: $value"."<br>";
			}

			$a = '{"Truong": "Dai Hoc Bon Ba",

					"Khoa": "Tieng Lao nang cao",
					"Nganh": 
					{
						"Nganh 1": "Ngu Phap tieng Lao",
						"Nganh 2": "Giao tiep tieng Lao"
					}

			}';
			$j = json_decode($a, true);


			// Apply a user function recursively to every member of an array
			array_walk_recursive($j, "ham_xu_ly");
		?>
	</body>

</html>