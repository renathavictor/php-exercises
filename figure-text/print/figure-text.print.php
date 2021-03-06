<?php

require __DIR__ . '/../src/figure-text.php';

// Figure Text Tool

// Triangle Text
// N=1
// #    1,1          2
//
// N=2
// #    1,1 1,2      2 3
// ##   2,1 2,2      3 4
//
// N=3
// #    1,1 1,2 1,3   02 03 04  
// ##   2,1 2,2 2,3   03 04 05  
// ###  3,1 3,2 3,3   04 05 06

// making triangle text with size 1
var_dump(triangleText(1));
var_dump(
  '#'
);

// making triangle text with size 2
var_dump(triangleText(2));
var_dump(
  '# \n' .
    '##'
);

// making triangle text with size 3
var_dump(triangleText(3));
var_dump(
  '#  \n' .
    '## \n' .
    '###'
);

// Half Diamond Text
// N=1
// #    1,1          2
//
// N=2
// #    1,1 1,2      2 3
// ##   2,1 2,2      3 4
// #    3,1 3,2      4 5
//
// N=3
// #    1,1 1,2 1,3   02 03 04  
// ##   2,1 2,2 2,3   03 04 05  
// ###  3,1 3,2 3,3   04 05 06
// ##   4,1 4,2 4,3   05 06 07
// #    5,1 5,2 5,3   06 07 08

// making half diamond text with size 1
var_dump(halfDiamondText(1));
var_dump(
  '#'
);

// making half diamond text with size 2
var_dump(halfDiamondText(2));
var_dump(
  '# \n' .
    '##\n' .
    '# '
);

// making half diamond text with size 3
var_dump(halfDiamondText(3));
var_dump(
  '#  \n' .
    '## \n' .
    '###\n' .
    '## \n' .
    '#  '
);

// Diamond Text
// N=1
// #    1,1          2
//
// N=2
//  #   1,1 1,2 1,3  2 3 4
// ###  2,1 2,2 2,3  3 4 5
//  #   3,1 3,2 3,3  4 5 6
//
// N=3
//   #    1,1 1,2 1,3 1,4 1,5   02 03 04 05 06  
//  ###   2,1 2,2 2,3 2,4 2,5   03 04 05 06 07  
// #####  3,1 3,2 3,3 3,4 3,5   04 05 06 07 08
//  ###   4,1 4,2 4,3 4,4 4,5   05 06 07 08 09
//   #    5,1 5,2 5,3 5,4 5,5   06 07 08 09 10
//
// N=4
//    #     1,1 1,2 1,3 1,4 1,5 1,6 1,7   02 03 04 05 06 07 08  
//   ###    2,1 2,2 2,3 2,4 2,5 2,6 2,7   03 04 05 06 07 08 09
//  #####   3,1 3,2 3,3 3,4 3,5 3,6 3,7   04 05 06 07 08 09 10
// #######  4,1 4,2 4,3 4,4 4,5 4,6 4,7   05 06 07 08 09 10 11
//  #####   5,1 5,2 5,3 5,4 5,5 5,6 5,7   06 07 08 09 10 11 12
//   ###    6,1 6,2 6,3 6,4 6,5 6,6 6,7   07 08 09 10 11 12 13
//    #     7,1 7,2 7,3 7,4 7,5 7,6 7,7   08 09 10 11 12 13 14

// making diamond text with size 1
var_dump(diamondText(1));
var_dump(
  '#'
);

// making diamond text with size 2
var_dump(diamondText(2));
var_dump(
  ' # \n' .
    '###\n' .
    ' # '
);

// making diamond text with size 3
var_dump(diamondText(3));
var_dump(
  '  #  \n' .
    ' ### \n' .
    '#####\n' .
    ' ### \n' .
    '  #  '
);

// Board Text
// N=1
// #        1,1               2
//
// N=2
// #        1,1 1,2           2 3
//  #       2,1 2,2           3 4
//
// N=3
// # #      1,1 1,2 1,3       02 03 04  
//  #       2,1 2,2 2,3       03 04 05
// # #      3,1 3,2 3,3       04 05 06
//
// N=4
// # #      1,1 1,2 1,3 1,4   02 03 04 05  
//  # #     2,1 2,2 2,3 2,4   03 04 05 06
// # #      3,1 3,2 3,3 3,4   04 05 06 07
//  # #     4,1 4,2 4,3 4,4   05 06 07 08

// making board text with size 1
var_dump(boardText(1));
var_dump(
  '#'
);

// making board text with size 2
var_dump(boardText(2));
var_dump(
  '# \n' .
    ' #'
);

// making board text with size 3
var_dump(boardText(3));
var_dump(
  '# #\n' .
    ' # \n' .
    '# #'
);

// making board text with size 4
var_dump(boardText(4));
var_dump(
  '# # \n' .
    ' # #\n' .
    '# # \n' .
    ' # #'
);
