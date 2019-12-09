# psalm-doctrine-collections-test
Reproduction of Psalm >=3.6.6 error with doctrine/collections

run vendor/bin/psalm to see the following error:

```
$ vendor/bin/psalm
Scanning files...
Analyzing files...

ERROR: TooManyTemplateParams - src\test.php:7:1 - C__work_projects_oss_psalm_collections_test_src_test_php_5_74 has too many template params, expecting 0
$class->filter(function () { return true; });


------------------------------
1 errors found
------------------------------

Checks took 0.57 seconds and used 42.013MB of memory
Psalm was able to infer types for 100% of the codebase

```
