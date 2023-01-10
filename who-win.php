<?php

function whoWon($input)
{
    for ($y = 0; $y < 3; $y++) {
        if ($input[$y][0] == $input[$y][1] && $input[$y][0] == $input[$y][2]) {
            return $input[$y][0];
        } elseif ($input[0][$y] == $input[1][$y] && $input[0][$y] == $input[2][$y])
        {
            return $input[0][$y];
        }
    }
    if (($input[0][0] == $input[1][1] && $input[0][0] == $input[2][2]) ||
        ($input[0][2] == $input[1][1] && $input[0][2] == $input[2][0]))
      {
          return $input[1][1];
    }
     return 'tie';

}

$input1 = [
    ["O","X","O"],
    ["X","X","O"],
    ["O","X","X"]
];

$input2 = [
    ["O","O","X"],
    ["X","O","X"],
    ["O","X","O"]
];

$input3 = [
    ["O","O","X"],
    ["X","X","O"],
    ["O","X","O"]
];

$input4 = [
    ["O","O","X"],
    ["X","X","O"],
    ["X","X","O"]
];
echo whoWon($input4);

