# PHP foreach Loop with Pass-by-Reference and Immutable Strings

This repository demonstrates a subtle bug in PHP related to the use of pass-by-reference in `foreach` loops when dealing with immutable strings.

The issue arises because strings in PHP are immutable. Modifying a string variable within a loop using pass-by-reference does not affect the original string in the array. This can lead to unexpected behavior where the code appears to work correctly, but the intended modifications are not applied.

The `bug.php` file contains the code exhibiting this issue. The `bugSolution.php` file demonstrates a corrected approach.
