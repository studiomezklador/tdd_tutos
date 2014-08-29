# Conventions

## files tree & dependencies for PHPUnit

1. separate dev files from a directory containing the test files.
1. then, call [file]Test.php
1. into [Test].php, extends the class with the PHPUnit_Framework_TestCase
1. finally, each function is 'public' and the name is test[Classname][SomethingElse]

