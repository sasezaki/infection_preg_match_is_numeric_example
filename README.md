DEMO - sasezaki/infection `preg_match_is_numeric` branch
===

## assumption situation under CI

### 1. forbid `is_numeric()` function

```
./vendor/bin/phpcs
```

### 2. rewrite by preg_match

```
preg_match('/\A[0-9]+\z/', $number);
```

### 3. detect test pattern 

```
phpdbg -qrr ./vendor/infection/bin/infection
```
