<?php

$data = [
	[
		"id"  =>  1,
		"text"  =>  "alsdk jalskdj alskdj asldkj ad",
		"liked"  =>  true,
	],
	[
		"id"  =>  2,
		"text"  =>  " asd asd asdalsdk jalskdj alskdj asldkj ad",
		"liked"  =>  false,
	],
	[
		"id"  =>  3,
		"text"  =>  "dyuytuty uty u jalskdj alskdj asldkj ad",
		"liked"  =>  false,
	],
];
sleep(2);
echo json_encode($data[array_rand($data)]);
