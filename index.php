<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles.css" />
	<title>Calculator</title>
</head>

<body>
	<div class="calculator__wrapper">
		<div class="calculator__con">
			<div class="display__area">
				<div style="--d-width: 10px;" class="top__display"></div>

				<div class="bottom__display">
					<?php
					$i = 0;

					while ($i < 12) {
						echo <<<EOD
							<div class="digit__con">
							<svg
							version="1.2"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 482 1036"
							>
							<g>
							<g>
							<path
							class="layer__path"
							d="m16.4 37.4l101 89.4v279.7l-101 97.2z"
							/>
							<path
							class="layer__path"
							d="m16.4 537.3l101 89.4v279.7l-101 97.2z"
							/>
							<path
							class="layer__path"
							d="m463.2 37.4l-101 89.4v279.7l101 97.2z"
							/>
							<path
							class="layer__path"
							d="m25.1 18l107.9 101h209.8l113.6-101z"
							/>
							<path
							class="layer__path"
							d="m25.1 1020.4l107.9-101h209.8l113.6 101z"
							/>
							<path
							class="layer__path"
							d="m463.2 537.3l-101 89.4v279.7l101 97.2z"
							/>
							</g>
							<path
							class="layer__path"
							d="m349.6 463.2h-209.8l-107.9 57.7 107.9 57.6h209.8l113.6-57.6z"
							/>
							</g>
							</svg>
							</div>
						EOD;

						$i++;
					}
					?>
				</div>
			</div>

			<div class="buttons__wrapper">
				<?php
				$buttons = [
					'c' => 'C',
					'b' => '()',
					'%' => '%',
					'/' => '/',
					'*' => '✕',
					'7' => '7',
					'8' => '8',
					'9' => '9',
					'0' => '0',
					'-' => '-',
					'4' => '4',
					'5' => '5',
					'6' => '6',
					'd' => '↩',
					'+' => '+',
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'.' => '.',
					'=' => '='
				];

				foreach ($buttons as $key => $value) {
					echo "<button onclick='handleClick(\"$key\")' class='button__con'>$value</button>";
				}
				?>
			</div>
		</div>
	</div>

	<script src="script.js"></script>
</body>

</html>