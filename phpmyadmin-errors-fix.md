Edit file `/usr/share/phpmyadmin/libraries/sql.lib.php` using this command:

`sudo nano +613 /usr/share/phpmyadmin/libraries/sql.lib.php`

On line 613 the count function always evaluates to true since there is no closing parenthesis after `$analyzed_sql_results['select_expr']`. Making the below replacements resolves this, then you will need to delete the last closing parenthesis on line 614, as it's now an extra parenthesis.

Replace:

```
((empty($analyzed_sql_results['select_expr']))
    || (count($analyzed_sql_results['select_expr'] == 1)
        && ($analyzed_sql_results['select_expr'][0] == '*')))
```

With:

```
((empty($analyzed_sql_results['select_expr']))
    || (count($analyzed_sql_results['select_expr']) == 1)
        && ($analyzed_sql_results['select_expr'][0] == '*'))
```

Reference URL:
https://stackoverflow.com/questions/48001569/phpmyadmin-count-parameter-must-be-an-array-or-an-object-that-implements-co
