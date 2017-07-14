# 3
**Points : 3**

## Description

Find the flag!

https://quiz.ais3.org:23545/


## Write-up

![](./problem.PNG)
看到 `?p=` 懷疑是 `LFI` ，試試看起手式 `php://filter/read=convert.base64-encode/resource=index`，得到`index.php`原始碼。 

在 [index.php](index.php) 裡面有FLAG

FLAG : `AIS3{Cute_Snoopy_is_back!!?!?!!?}`